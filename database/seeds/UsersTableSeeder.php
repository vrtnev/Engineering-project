<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'name' => 'Администратор',
            'email' => 'vrtnev@tltdev.ru',
            'password' => bcrypt('CaliforniaLight'),
            'is_admin' => 1
        ]);
    }
}
