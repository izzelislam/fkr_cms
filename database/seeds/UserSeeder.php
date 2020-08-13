<?php

use Illuminate\Database\Seeder;
use App\Model\User;

class UserSeeder extends Seeder
{
   
    public function run()
    {
        User::truncate();

        User::create([
        	'name'=>'admin',
        	'email'=>'admin@admin',
        	'password'=>bcrypt('admin'),
        	'role'=>'admin',
        ]);

        User::create([
        	'name'=>'editor',
        	'email'=>'editor@editor',
        	'password'=>bcrypt('editor'),
        	'role'=>'editor',
        ]);

        User::create([
        	'name'=>'author',
        	'email'=>'author@author',
        	'password'=>bcrypt('author'),
        	'role'=>'author',
        ]);
    }
}
