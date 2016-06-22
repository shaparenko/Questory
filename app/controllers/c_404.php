<?php

class c_404 extends Controller {

    function __construct() {
        
    }
    public function a_index(){
        
        $view = new View();
        $view->generate('404');
        
    }
  
}