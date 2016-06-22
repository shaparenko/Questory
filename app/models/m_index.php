<?php

class m_index extends Model {

    function __construct() {
        parent::connectToDb();
    }
    

    public function getFirstWeek(){
    
        
        $startWeek = GetDateWeekID(0);
        
        $query = "SELECT weekID,bd FROM c_database WHERE weekID = '$startWeek' LIMIT 1";
        $sql = mysql_query($query) or die(mysql_error());
        
        if($sql == true){ 
            
            $str = mysql_fetch_assoc($sql);
            $str[bd] = unserialize( base64_decode( $str[bd] ) );
            
            return $str;
         }
         else { return "Помилка";}
    }
    
    public function getSecondWeek(){
    
        
        $startWeek = GetDateWeekID(1);
        
        $query = "SELECT weekID,bd FROM c_database WHERE weekID = '$startWeek' LIMIT 1";
        $sql = mysql_query($query) or die(mysql_error());
        
        if($sql == true){ 
            
            $str = mysql_fetch_assoc($sql);
            $str[bd] = unserialize( base64_decode( $str[bd] ) );
            
            return $str;
         }
         else { return "Помилка";}
    }
    
    public function getLastWeek(){
    
        
        $startWeek = GetDateWeekID(2);
        
        $query = "SELECT weekID,bd FROM c_database WHERE weekID = '$startWeek' LIMIT 1";
        $sql = mysql_query($query) or die(mysql_error());
        
        if($sql == true){ 
            
            $str = mysql_fetch_assoc($sql);
            $str[bd] = unserialize( base64_decode( $str[bd] ) );
            
            return $str;
         }
         else { return "Помилка";}
    }
    
    
    
    public function SaveData($id,$weekday,$times,$price,$fio,$phone,$comment,$promo,$weekID){
       $year = date("Y");
       $start = $year."-01-01 00:00:01"; 
       $end = $year."-12-31 23:59:59";
       
       $id = clear_to_db($id);
       $weekday = clear_to_db($weekday);
       $times = clear_to_db($times);
       $price = clear_to_db($price);
       $fio = clear_to_db($fio);
       $phone = clear_to_db($phone);
       $comment = clear_to_db($comment);
       $promo = clear_to_db($promo);
       $weekID = clear_to_db($weekID);
       
       $phone = str_replace(array('(', ')', '-'), '', trim($phone));
       

       
       $check = "SELECT id FROM c_zakaz WHERE weekday = '$weekday' AND times='$times' AND date BETWEEN '$start' AND '$end' LIMIT 1"; 
       $sqlcheck = mysql_query($check) or die(mysql_error());
       
       if(mysql_num_rows($sqlcheck) !== 1){
            $query = "INSERT INTO c_zakaz (komnataID,weekday,times,price,fio,phone,comment,promo,weekID) VALUES ('$id','$weekday','$times','$price','$fio','$phone','$comment','$promo','$weekID')"; 
            $sql = mysql_query($query) or die(mysql_error());
            if($sql == true){
                
                $SelectGlobalTable = "SELECT bd FROM c_database WHERE weekID = '$weekID' AND komnataID = '$id'";
                $sqlSelGlT = mysql_query($SelectGlobalTable) or die(mysql_error());

                if($sqlSelGlT == true){ 

                    $str = mysql_fetch_assoc($sqlSelGlT);
                    $str[bd] = unserialize( base64_decode( $str[bd] ) );
                    
                    $i = 0;
                    $a=0;
                    foreach ($str[bd] as $key => $value) {
                        foreach ($value as $key2 => $value2) {
                            
                                if($key2 == 'info'){
                                foreach ($value2 as $key3 => $value3) {
                                    if($key3 == 'data' && $value3 == $weekday){
                                        $i++;
                                    }
                                }
                            }//foreach 3
                            if($i == 1 && $key2 == $times){
                                $str[bd][$a][$times] = 1;
                                $i--;
                            }    
                        }//foreach 2
                     $a++;   
                    } //foreach 1
                    $inBD =  base64_encode(serialize($str[bd]));
                    
                    $queryUp = "UPDATE c_database SET bd = '$inBD' WHERE weekID = '$weekID' AND komnataID = '$id'";
                    $sqlUp = mysql_query($queryUp) or die(mysql_error());
             
                    if($sqlUp == true){
                        echo 'Свободно';
                    }
  
                 }
                 else { return "Помилка";}
   
           } 
       }
       else{
           echo 'Занято';
       }
       
           
                 
    }
    

}
