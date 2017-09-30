<?php

namespace App\Http\Controllers\Traits;

Trait UserTrait{
	public function getAllUser(){
    	return User::all();
    }

    public function postGeneratedROUTES(){
    	
    }
	
}
