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
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'phone' => '08213456789',
            'password' => Hash::make('admin123123'),
            'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        $admin->assignRole('admin');

        $siswa = User::create([
            'name' => 'Student',
            'email' => 'student@example.com',
            'phone' => '08213456789',
            'password' => Hash::make('student123'),
            'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        $siswa->assignRole('student');

        $guru = User::create([
            'name' => 'Teacher',
            'email' => 'teacher@example.com',
            'phone' => '08213456789',
            'password' => Hash::make('teacher123'),
            'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        $guru->assignRole('teacher');

        $staff_TU = User::create([
            'name' => 'Staff TU',
            'email' => 'staff@example.com',
            'phone' => '08213456789',
            'password' => Hash::make('staff123'),
            'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        $staff_TU->assignRole('staff');
    }
}
