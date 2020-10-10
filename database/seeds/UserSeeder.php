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
            'password' => Hash::make('123123123'),
            'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        $admin->assignRole('admin');

        $petugas_TU = User::create([
            'name' => 'User',
            'email' => 'petugas_TU@example.com',
            'password' => Hash::make('12341234'),
            'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        $petugas_TU->assignRole('petugas TU');

        $calon_siswa = User::create([
            'name' => 'User',
            'email' => 'calon_siswa@example.com',
            'password' => Hash::make('12341234'),
            'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        $calon_siswa->assignRole('calon siswa');

        $calon_guru = User::create([
            'name' => 'User',
            'email' => 'calon_guru@example.com',
            'password' => Hash::make('12341234'),
            'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        $calon_guru->assignRole('calon guru');

        $calon_petugas_TU = User::create([
            'name' => 'User',
            'email' => 'calon_petugas_TU@example.com',
            'password' => Hash::make('12341234'),
            'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        $calon_petugas_TU->assignRole('calon petugas TU');
    }
}
