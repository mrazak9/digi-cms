<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Logout;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;

class LogSuccessfulLogout
{
    public function handle(Logout $event)
    {
        // Lakukan penanganan event di sini
        $user = $event->user;

        DB::table('login_logs')->insert([
            'user_id' => $user->id,
            'activity_name' => 'logout',
            'ip_address' => request()->ip(),
            'user_agent' => request()->header('User-Agent'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
