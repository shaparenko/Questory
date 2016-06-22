<?php

class Model {
    
    public $db;
    
    function __construct() {
        
    }

    function connectToDb()
    {
        include_once O_PATH.'/app/models/m_database.php';
        $this->db = new Database();
    }

    function close()
    {
         $this->db->close();
    }
    
}
