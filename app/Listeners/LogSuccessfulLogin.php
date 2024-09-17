<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\DB;

class LogSuccessfulLogin
{
    public function handle(Login $event)
    {
        $user = $event->user;

        DB::table('login_logs')->insert([
            'user_id' => $user->id,
            'activity_name' => 'login',
            'ip_address' => request()->ip(),
            'user_agent' => request()->header('User-Agent'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
