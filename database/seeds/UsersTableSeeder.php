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
        \App\User::create([
            'name' => 'Arpiansyah Agi',
            'username' => 'agi',
            'password' => bcrypt('password'),
            'email' => 'arpiansyahagi23@gmail.com'
        ]);
    }
}
