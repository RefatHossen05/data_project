<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Database\Seeders\DatabaseSeeder;

class UserTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('123456'),
            'username'=>'admin',
            'role'=>'admin',

            'name'=>'shopnil',
            'email'=>'shopnil@gmail.com',
            'password'=>bcrypt('123456'),
            'username'=>'shopnil',
            'role'=>'manager'
             ]



    );

    }
}
