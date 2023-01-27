<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
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
        User::insert([
            [
                'name' => 'user',
                'role_id' => 1,
                'email' => 'user@gmail.com',
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => 'admin',
                'role_id' => 2,
                'email' => 'admin@gmail.com',
                'password' => Hash::make('12345678'),
            ],
        ]);
        User::factory(30)->create();
    }
}
