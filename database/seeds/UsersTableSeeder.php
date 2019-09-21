<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([

            'name'      =>      'musawer',
            'email'     =>      'musawer@gmail.com',
            'password'  =>      '1234',
            'remember_token'=>  str_random(10),
            

        ]);
    }
}
