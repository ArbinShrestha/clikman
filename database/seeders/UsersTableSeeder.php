<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $u1 = [
          'name'=>'Admin',
          'email'=>'admin@gmail.com',
          'password'=>bcrypt('password'),
        ];

        User::create($u1);
    }
}
