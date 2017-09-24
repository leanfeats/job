<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
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
        Model::unguard();
        
        DB::table('users')->delete();
        
        $users = array(
            ['name' => 'leanfeats', 'email' => 'test@leanfeats.com', 'password' => Hash::make('password')],
            ['name' => 'leanfeats 1', 'email' => 'test1@leanfeats.com', 'password' => Hash::make('password')],
            ['name' => 'leanfeats 2', 'email' => 'test2@leanfeats.com', 'password' => Hash::make('password')],
            ['name' => 'leanfeats 3', 'email' => 'test3@leanfeats.com', 'password' => Hash::make('password')],
        );
        
        // Loop through each user above and create the record for them in the database
        foreach ($users as $user)
        {
            User::create($user);
        }
        
        Model::reguard();
    }
}
