<?php

namespace App\Traits\Controller;

Trait ControllerTrait{
	public function getVersion()
	{
		$version = 1;

		$route = request()->route();

		#$data = [];
		#$data['version'] = $version;
		#$data['route'] = $route;
		#$data['parameters'] = $route->parameters();

		$parameters = $route->parameters();

		$version = isset($parameters['version']) ? $parameters['version'] : 1;

		$layoutPath = 'layouts.'.$version.'.main';

		if(!view()->exists($layoutPath)){
			$layoutPath = 'layouts.1.main';
		}

		view()->share('version', $version);
		view()->share('layoutPath', $layoutPath);

		#return compact('data');
	
		return $version;
	}
}