<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Jorge Andres Ramirez";
        $user->email = "jarg5487@gmail.com";
        $user->password = Hash::make("jorge0405");
        $user->save();

    }
}
