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
     */
    public function run(): void
    {
        $user = [
            [
                'username'=>'1234',
                'name'=>'Doni',
                'email'=>'1234@gmail.com',
                'role_id'=>'1',
                'password'=>Hash::make('123456')
            ],
            
            [
                'username'=>'1235',
                'name'=>'Dono',
                'email'=>'1235@gmail.com',
                'role_id'=>'2',
                'password'=>Hash::make('123456')
            ],

        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
