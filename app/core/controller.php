<?php

class Controller {

    function __construct() {}
    
    public function a_index(){
        
            $model = new m_index();
            
            if($_POST){
                $model->SaveData($_POST[id], $_POST[weekday], $_POST[times], $_POST[price], $_POST[fio], $_POST[phone], $_POST[comment], $_POST[promo], $_POST[weekID]);
            }
            else{
                $view = new View();
                //$view->generate('index',$model->getFirstWeek(),$model->getSecondWeek(),$model->getLastWeek());
                $view->generate('index',$model->selectWeek(1));
            }
    }

    

}
