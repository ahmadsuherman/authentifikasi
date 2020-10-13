<?php

use Illuminate\Database\Seeder;
use App\User;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'usr_name' => 'Admin',
            'usr_email' => 'admin@example.com',
            'usr_phone' => '08213456789',
            'usr_password' => Hash::make('admin123123'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        $admin->assignRole('admin');

        $siswa = User::create([
            'usr_name' => 'Student',
            'usr_email' => 'student@example.com',
            'usr_phone' => '08213456789',
            'usr_password' => Hash::make('student123'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        $siswa->assignRole('student');

        $guru = User::create([
            'usr_name' => 'Teacher',
            'usr_email' => 'teacher@example.com',
            'usr_phone' => '08213456789',
            'usr_password' => Hash::make('teacher123'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        $guru->assignRole('teacher');

        $staff_TU = User::create([
            'usr_name' => 'Staff TU',
            'usr_email' => 'staff@example.com',
            'usr_phone' => '08213456789',
            'usr_password' => Hash::make('staff123'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        $staff_TU->assignRole('staff');
    }
}
