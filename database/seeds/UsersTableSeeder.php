<?php

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
        DB::table('users')->insert([
            'username' => str_random(10),
            'surename' => str_random(10),
            'lastname' => str_random(10),
            'phone_number' => '06'.rand(10000000, 99999999),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'rol' => rand(0, 1),
            'profile_image' => string('https://dummyimage.com/150x150/000/fff.jpg'),
        ]);
    }
}
