<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Rico Wildany Nasharillah',
            'email' => 'ricowildany52@gmail.com',
            'password' => bcrypt('a12345678'),
        ]); 
    }
}
