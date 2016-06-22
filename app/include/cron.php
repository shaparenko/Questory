<?php

$var = 3;

if($var == 0){$shag = 0;}
if($var == 1){$shag = 7;}
if($var == 2){$shag = 14;}
if($var == 3){$shag = 21;}

/* Запускать в Воскрисенье вечером */

    mysql_connect("localhost", "questory", "1aQYa15slHh2LDuD") or die (mysql_error());
    mysql_select_db("questory") or die (mysql_error());
    mysql_query("set character_set_client	='utf8'");
    mysql_query("set character_set_results	='utf8'");
    mysql_query("set collation_connection	='utf8_general_ci'");
	
	
	// сюда вынесем обработку суперглобальных массивов от слешей
	// http://phpfaq.ru/slashes
	
    function slashes(&$el)
	{
		if (is_array($el))
			foreach($el as $k=>$v)
				slashes($el[$k]);
		else $el = stripslashes($el); 
    }
	
	if (ini_get('magic_quotes_gpc'))
	{
	    slashes($_GET);
	    slashes($_POST);    
	    slashes($_COOKIE);
	}


function GetDateWeek($number) 
                { 
                    $k = strtotime("last Monday"); 
                    $Year = date("Y",$k); 
                    $Month = date("m",$k); 
                    $Day = date("d",$k); 
                    if ($Month < 2 && $Day < 8) { 
                    $Year = $Year--; 
                    $Month = $Month--; 
                    } 
                    if ($Month > 1 && $Day < 8) 
                    $Month = $Month--; 

                    $Day = $Day+7*$number; 
                    $first = date('dmy', mktime(0, 0, 0, $Month, $Day, $Year)); 
                    $Day = $Day+6; 
                    $second = date('dmy', mktime(0, 0, 0, $Month, $Day, $Year)); 
                    return $first.''.$second;
                } 

        /*NEW*/
        function dateSelect($shag){

            $monthes = array(
                            1 => 'Января', 2 => 'Февраля', 3 => 'Марта', 4 => 'Апреля',
                            5 => 'Мая', 6 => 'Июня', 7 => 'Июля', 8 => 'Августа',
                            9 => 'Сентября', 10 => 'Октября', 11 => 'Ноября', 12 => 'Декабря'
                        );


            for($i = 0;$i<7;++$i){
            $monday=strtotime("last Monday"); 
            $brain_fuck = date('y',mktime(10,0,0,date('n',$monday),date('d',$monday)+$i+$shag)).date('m',mktime(10,0,0,date('n',$monday),date('d',$monday)+$i+$shag)).date('d',mktime(10,0,0,date('n'),date('d',$monday)+$i+$shag)); // 10 часов, для сдвига на таймзоны, дабы не скакало 
            $brain_name =date('d',mktime(10,0,0,date('n'),date('d',$monday)+$i+$shag)).' '.$monthes[(date('n', mktime(10, 0, 0, date('n'),date('d',$monday)+$i+$shag)))];

            $brain_name_arr['name'][$i]=$brain_name;
            $brain_name_arr['date'][$i]=$brain_fuck;
            }
        return $brain_name_arr;
        }
        /*NEW*/
        //іecho '<pre>';
        //print_r($brain_name_arr);

        //die();
        
        
        
        
        
         $weekID = GetDateWeek($var);
         $data = dateSelect($shag);
         
        //echo '<pre>';
         //            print_r($data);
          //           die();
        
        
        $inBD = array(
                    array(

                       "info"=>array(
                          "day"=>$data['name'][0],
                          "skidka"=>"-20%",
                          "skidkaName"=>"День студента",
                          "data"=>$data['date'][0],
                          "dayName"=>"Пн",
                          "weekID"=>$weekID
                          
                       ),
                       "10:30" => 0,
                       "11:45" => 0,
                       "13:00" => 0,
                       "14:15" => 0,
                       "15:30" => 0,
                       "16:45" => 0,
                       "18:00" => 0,
                       "19:15" => 0,
                       "20:30" => 0,
                       "21:45" => 0,
                       "23:00" => 0                        
                    ),
                    array(
                         "info"=>array(
                          "day"=>$data['name'][1],
                          "skidka"=>"-10%",
                          "skidkaName"=>"Женский день",
                          "data"=>$data['date'][1],
                          "dayName"=>"Вт"
                          
                       ),
                       
                       "10:30" => 0,
                       "11:45" => 0,
                       "13:00" => 0,
                       "14:15" => 0,
                       "15:30" => 0,
                       "16:45" => 0,
                       "18:00" => 0,
                       "19:15" => 0,
                       "20:30" => 0,
                       "21:45" => 0,
                       "23:00" => 0                           
                    ),
                    array(
                        "info"=>array(
                          "day"=>$data['name'][2],
                          "skidka"=>"-15%",
                          "skidkaName"=>"День бородача",
                          "data"=>$data['date'][2],
                          "dayName"=>"Ср"
                       ),
                       
                       "10:30" => 0,
                       "11:45" => 0,
                       "13:00" => 0,
                       "14:15" => 0,
                       "15:30" => 0,
                       "16:45" => 0,
                       "18:00" => 0,
                       "19:15" => 0,
                       "20:30" => 0,
                       "21:45" => 0,
                       "23:00" => 0                             
                    ),
                    array(
                        "info"=>array(
                          "day"=>$data['name'][3],
                          "skidka"=>"-15%",
                          "skidkaName"=>"Семейный день",
                          "data"=>$data['date'][3],
                          "dayName"=>"Чт"
                          
                       ),
                       
                       "10:30" => 0,
                       "11:45" => 0,
                       "13:00" => 0,
                       "14:15" => 0,
                       "15:30" => 0,
                       "16:45" => 0,
                       "18:00" => 0,
                       "19:15" => 0,
                       "20:30" => 0,
                       "21:45" => 0,
                       "23:00" => 0                             
                    ),
                    array(
                        "info"=>array(
                          "day"=>$data['name'][4],
                          "skidka"=>"-5%",
                          "skidkaName"=>"Веселый день",
                          "data"=>$data['date'][4],
                          "dayName"=>"Пт"
                          
                       ),
                       "10:30" => 0,
                       "11:45" => 0,
                       "13:00" => 0,
                       "14:15" => 0,
                       "15:30" => 0,
                       "16:45" => 0,
                       "18:00" => 0,
                       "19:15" => 0,
                       "20:30" => 0,
                       "21:45" => 0,
                       "23:00" => 0                          
                    ),
                    array(
                        "info"=>array(
                          "day"=>$data['name'][5],
                          "skidka"=>"-%",
                          "skidkaName"=>"Супер день",
                          "data"=>$data['date'][5],
                          "dayName"=>"Сб"
                          
                       ),
                       "10:30" => 0,
                       "11:45" => 0,
                       "13:00" => 0,
                       "14:15" => 0,
                       "15:30" => 0,
                       "16:45" => 0,
                       "18:00" => 0,
                       "19:15" => 0,
                       "20:30" => 0,
                       "21:45" => 0,
                       "23:00" => 0                           
                    ),
                    array(
                        "info"=>array(
                          "day"=>$data['name'][6],
                          "skidka"=>"-%",
                          "skidkaName"=>"Супер день",
                          "data"=>$data['date'][6],
                          "dayName"=>"Вс"
                          
                       ),
                       "10:30" => 0,
                       "11:45" => 0,
                       "13:00" => 0,
                       "14:15" => 0,
                       "15:30" => 0,
                       "16:45" => 0,
                       "18:00" => 0,
                       "19:15" => 0,
                       "20:30" => 0,
                       "21:45" => 0,
                       "23:00" => 0                            
                    )
        );


        
        
        $inBD =  base64_encode(serialize($inBD));
        

        
        
        $check = "SELECT id FROM c_database WHERE weekID = '$weekID'";
        $checkSql = mysql_query($check) or die(mysql_error());
        
        if(mysql_num_rows($checkSql) < 1){
           
            $query = "INSERT INTO c_database (weekID,bd) VALUES ('$weekID','$inBD')";
            $sql = mysql_query($query) or die(mysql_error());
            if($sql == true){
                echo 'Ok';
            }

        }
        else{
            echo 'Уже созданно';
        }
        
        
        
        
        
        
       
                
                