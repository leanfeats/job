<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class ApiController extends Controller
{
    public function getAllUser(){
    	return User::all();
    }

    public function getJobs(){
    	//
    }

    public function postJobs(){
    	//
    }
}
