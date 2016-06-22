<?php

class Database {
    private $host       = 'localhost';
    private $user       = 'questory';
    private $password   = '1aQYa15slHh2LDuD';
    private $database   = 'questory';
    
    function __construct() 
    {
        $this->connect();
    }

            
    private function connect()
    {   
        
        if(!mysql_connect($this->host,$this->user,$this->password))
            throw new Exception ("");

        if(!mysql_select_db($this->database))
            throw new Exception ("");
        
        mysql_query ("set character_set_client='utf8'"); 
        mysql_query ("set character_set_results='utf8'"); 
        mysql_query ("set collation_connection='utf8_general_ci'");

    }
    
    function close()
    {
        mysql_close();
    }

}
