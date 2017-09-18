<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
        	[
        		'name' => 'Admin',
        		'email' => 'admin@leanfeats.com',
        		'password' => \Hash::make('leanfeats123')
        	]
        ];

        foreach($users as $user){
        	User::create($user);
        }
    }
}
