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
        	'name' => 'mateo',
        	'email' => 'prueba@gmail.com',
        	'password' => bcrypt('holahola')
        ]);    }
}
