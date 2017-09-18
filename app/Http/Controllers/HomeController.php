<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index($version=1)
    {
    	$data = [];
    	$version = $this->getVersion();

    	#$blade = 'layouts.'.$version.'.main';
    	#return $blade;
    	return view('home.index');
    }
}
