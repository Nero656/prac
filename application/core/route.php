<?php

class Route
{

	static function start()
	{
		// контроллер и действие по умолчанию
		$controller_name = 'Main';
        $allControllers = array("404", "contacts", "portfolio", "services", "main");
		
		$routes = explode('/', $_SERVER['REQUEST_URI']);


		// получаем имя контроллера
		if ( !empty($routes[1]) )
		{
		    if($routes[1]=="contacts") $controller_name = "contacts";
		    else if($routes[1]=="portfolio") $controller_name = "portfolio";
            else if($routes[1]=="services") $controller_name = "services";
	    else if($routes[1]=="main") $controller_name = "main";
            else $controller_name = "404";
		}
		$model_name = 'Model_'.$controller_name;
		$controller_name = 'Controller_'.$controller_name;
        $action_name = 'action_index';
		$model_file = strtolower($model_name).'.php';
		$model_path = "application/models/".$model_file;
		if(file_exists($model_path)) {
            include $model_path;
        }
		$controller_file = strtolower($controller_name).'.php';
		$controller_path = "application/controllers/".$controller_file;
		if(file_exists($controller_path))
		{
			include "application/controllers/".$controller_file;
		}
		else
		{
			Route::ErrorPage404();
		}
		
		// создаем контроллер
		$controller = new $controller_name;
		$action = $action_name;
		
		if(method_exists($controller, $action))
		{
			// вызываем действие контроллера
		$controller->$action();

		}
		else
		{
			Route::ErrorPage404();
		}
	
	}
    
}
