<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $user = User::factory()->create(
            [
                'name' => 'Admin Saya',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin123'),
                'phone' => '082214775050',
            ]
        );
        // Temukan atau buat peran 'super-admin'
        $superAdminRole = Role::firstOrCreate(['name' => 'super-admin']);

        // Tambahkan peran ke pengguna
        $user->assignRole($superAdminRole);

        $this->call(GeneralSettings::class);
    }
}
