<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function pageVersion($version=1)
    {
    	$data = [];
    	$data['version'] = $this->getVersion();

    	foreach ($data as $version => $value) {

    	}

    	$version = value($value);

    	switch ($version) {
            case 'v1':
    			$version = 1;
    			break;

    		case 'v2':
    			$version = 2;
    			break;

    		case 'v3':
    			$version = 3;
    			break;
    		
    		default:
    			$version = rand(1, 3);
    			break;
    	}

    	$path = "v" . $version . '.' . 'registration';

    	return view($path);
    }
}
