<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $powerUsers = [
            [
                'name' => 'Power User',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('password'),
            ]
        ];

        foreach ($powerUsers as $powerUser) {

            $newUser = new User();
            $newUser->fill($powerUser);
            $newUser->save();
        }
    }
}
