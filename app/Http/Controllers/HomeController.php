<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index($version=1)
    {
    	$data = [];
    	$data['version'] = $this->getVersion();
    	return view('home.'.__FUNCTION__);
    }
}
