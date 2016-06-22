<?php

class c_admin extends Controller {

    function __construct() {
        //parent::CheckLogin();
       
    }
    
    public function a_index(){
        
        //$model = new m_transfer();
        $view = new View();
        $view->generate('admin');
       
    }
}
      