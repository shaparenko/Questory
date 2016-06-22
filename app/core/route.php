<?php

class Route {

    function __construct() {}
    
    public static function Start(){
        
        $controler_name = 'index';
        $action_name = 'index';
        $action_parameters = array();
        
        $route_array = explode('/', $_SERVER['REQUEST_URI']);
        
        if (!empty($route_array[1])){
            
            if (preg_match("/yclid/i", $route_array[1])) {
                $controler_name = 'index';
                } 
            else {
                    $controler_name = $route_array[1];
                }
        } 
	
        
        $model_name = 'm_' . $controler_name;
        $controler_name = 'c_' . $controler_name;
        $action_name = 'a_' . $action_name;
        
        if(file_exists(O_PATH.'/app/models/'.$model_name.'.php')){
            include O_PATH.'/app/models/'.$model_name.'.php';
        }
        if(file_exists(O_PATH.'/app/controllers/'.$controler_name.'.php')){
            include O_PATH.'/app/controllers/'.$controler_name.'.php';
        }     
        else {
            header('Location: /404');
            exit; 
            
        }

        
        $controler = new $controler_name();
        $controler->$action_name();
        /*
        if(method_exists($controler, $action_name)){
        $controler->$action_name();
        }  
        else{
            header('Location: /404');
            exit;
        }
        */
          
        
        
    }

}
