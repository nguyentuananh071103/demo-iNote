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
        //
        $user = new User();
        $user->name = "Tuan Anh";
        $user->email = "tuananh@gmail.com";
        $user->phone = "0332882276";
        $user->password = Hash::make(123456);
        $user->save();

        $user = new User();
        $user->name = "Hong Doanh";
        $user->email = "hongdoanh@gmail.com";
        $user->phone = "0929303130";
        $user->password = Hash::make(123456);
        $user->save();
    }
}
