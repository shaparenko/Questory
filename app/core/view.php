<?php

class View {

    function __construct() {
        
    }
    
    public function generate($view,$data=array(),$secData=array(),$lastData=array()){
        include O_PATH.'/app/views/template.php';
    }
}
