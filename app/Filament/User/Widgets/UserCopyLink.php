<?php

namespace App\Filament\User\Widgets;

use Filament\Widgets\Widget;

class UserCopyLink extends Widget
{
    protected static bool $isLazy = false;
    protected static string $view = 'filament.user.widgets.user-copy-link';
}
