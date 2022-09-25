<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $email = 'njatiktak@hotmail.com';
        $firstAdminUser = [
            'name'      => 'Numan Javed',
            'email'     => $email,
            'password'  => Hash::make('admin123')
        ];
        User::factory()->create($firstAdminUser);

        $adminId = Role::where('name', 'Admin')->first()->id;
        $memberId = Role::where('name', 'Member')->first()->id;
        User::all()->last()->roles()->attach($adminId);
        User::factory()->count(1)->create();
        User::all()->last()->roles()->attach($memberId);
    }
}
