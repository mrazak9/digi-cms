<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class GeneralSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ambil ID user yang sedang login
        $loggedInUserId = auth()->id();

        // Waktu saat ini
        $now = now();

        DB::table('general_settings')->insert([
            [
                'name_setting' => 'logo1',
                'value' => '-',
            ],
            // ... tambahkan entri lain sesuai kebutuhan Anda
        ]);
    }
}
