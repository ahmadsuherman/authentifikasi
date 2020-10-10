<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'admin',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'petugas TU',
            'guard_name' => 'web'
        ]);
        
        Role::create([
            'name' => 'calon siswa',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'calon guru',
            'guard_name' => 'web'
        ]);
        Role::create([
            'name' => 'calon petugas TU',
            'guard_name' => 'web'
        ]);
    }
}
