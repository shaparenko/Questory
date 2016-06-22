<?php
                function GetDateWeek($komnataID) 
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
                    echo date('d.m', mktime(0, 0, 0, $Month, $Day, $Year)); 
                    echo ' - ';
                    $Day = $Day+6; 
                    echo date('d.m', mktime(0, 0, 0, $Month, $Day, $Year)); 
                    
                } 
                
                function weekselect($id){
                    
                    $sql = "SELECT weekID FROM c_database WHERE komnataID = '$id' AND open = '1'";
                    $query = mysql_query($sql) or die(mysql_error());
                    
                    
                    
                    
                }










                function GetDateWeekID($number) 
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
                
                
                function timeMaker($data){
                                $i = 0;
                                $a =0;
                                foreach ($data as $key => $value) {
                                    
                                    if($key == 'info'){
                                        
                                            foreach ($value as $key2 => $value2) {
                                                if($key2 == 'data'){
                                                    if((int) $value2>= (int) date('ymd')){$i = 1;}
                                                }
                                                if($key2 == 'dayName'){
                                                    if($value2== 'Сб' || $value2== 'Вс'){$a = 1;}
                                                }
                                            }
                                    }

                                    if($value == 0 && $i>0 ){
                                        
                                        
                                        if($a == 0){
                                            if($key == '10:30' || $key == '11:45' || $key == '13:00' || $key == '14:15' || $key == '15:30' || $key == '16:45')
                                            {echo '<a href="#zakaz"><span class="l-time smoothScroll">'.$key.'</span></a>';}
                                            else { echo '<a href="#zakaz"><span class="h-time smoothScroll">'.$key.'</span></a>'; }
                                        }
                                        else if($a == 1){
                                            echo '<a href="#zakaz"><span class="h-time smoothScroll">'.$key.'</span></a>';
                                        }
                                        
                                        
                                        
                                        
                                        
                                        
                                    }
                                    else if($key !== 'info'){
                                        echo '<a><span>'.$key.'</span></a>';
                                    }
                                   
                                }
                }
                
                function topCssCheck($data){
                    $DayNow = (int) date("ymd");
                    $dayCheck = (int) $data;
                    
                    if($DayNow == $dayCheck){ echo 'class="head-day green"'; }
                    if($DayNow > $dayCheck) { echo 'class="head-day gray"'; }
                    if($DayNow < $dayCheck) { echo 'class="head-day red"'; }
                }
                
         function clear_to_db($ffrom){
                $statya=trim($ffrom);
                $statya=htmlspecialchars($statya);
                $statya=mysql_real_escape_string($statya);
                return $statya;
        }