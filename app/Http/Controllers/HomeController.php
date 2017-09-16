<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function pageVersion($version=1)
    {
    	$data = [];
    	$data['version'] = $this->getVersion();
    	return compact('data');
    }
}
