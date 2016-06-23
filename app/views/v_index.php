<nav class="container">
      <div class="navbar navbar-inverse navbar-fixed-top">
          <div class="container qFontmaim">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a id="company" class="navbar-brand" href="#home">Questory</a> 
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="#home" class="smoothScroll">Главная</a></li>
                  <li> <a href="#rules" class="smoothScroll">Правила</a></li>
                  <li> <a href="#rooms" class="smoothScroll">Комнаты</a></li>

                </ul>
            </div> 
          </div>
      </div>
    </nav>

  <!-- ====== HOME ====== -->

        <div id="home" name="home">
            <a href="#rooms" class="btn btn-warning btn-quest">Наши Квесты</a>
        </div>

  <!-- ====== RULES ===== -->

  <section id="rules" name="rules">
    <div class="container">
      <div class="row">
        <div id="group" class="col-md-3 col-sm-3">
            <img class="img-responsive" src="img/command_lg.png">
            <p class="text-center ruletitle">2-4</p><span>человека</span>
        </div>
        <div id="lamp" class="col-md-6 col-sm-6 col-xs-12">
            <h2 class="text-center">ПРАВИЛА</h2>
            <img class="line" src="img/line.png">
            <img class="img-responsive" src="img/lamp_md.png">
        </div>
        <div id="time" class="col-md-3 col-sm-3">
            <img class="img-responsive" src="img/time_lg.png">
            <p class="text-center ruletitle">60</p><span>минут</span>
        </div> 
      </div>                          
    </div>                            
  </section>

  <!-- ==== SERVICES ==== -->

        <section id="rooms" name="rooms">
          <div class="container">
            <div class="row">
              <div class="srv-box col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h2 class="text-center">КОМНАТЫ</h2>
                <img class="line" src="img/line.png">
              </div>          
                 <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">
                    <div class="box-rooms">
                      <div class="buy">
                          <span id="note"> Дневник начальника станции</span>
                          <a href="#cost"><button type="button" class="btn btn-success btn-buy" id="metro">забронировать</button></a>
                      </div>    
                    </div> 
                </div>
              </div>
          </div>
        </section> 

          <!-- ==== COST ==== -->
        <section id="cost" name="cost">
          <div class="container-fluid">
            <div class="row">
              <div class="srv-box col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h2 class="text-center">ДНЕВНИК НАЧАЛЬНИКА СТАНЦИИ</h2>
             <?php
             //$day = (int) date('dm');
              //echo $dayStart.'<br>';
              //echo date('dm');
                
                     //echo '<pre>';
                     //print_r($data[bd][0]);
                     //die();
                     ?>   
                
                
                <img id="big-line" src="img/lg_line.png">
                  <div class="col-lg-3 col-md-3">
                      <img class="price img-responsive" src="img/price_left.png">
                  </div>
                
                
                <?php $house = weekselect(1);  ?>
                
                <div class="col-lg-6 col-md-6 col-sm-12">
                   <div class="row">
                     <a href="#cost"><div class="col-md-4 col-sm-4 col-xs-4 dayimg daygreen" id="firstWeekID">
                            <span class="weekdays"><?php echo $house[0];  ?><p id="thisWeek">эта неделя</p></span>
                     </div></a>
                       <a href="#cost"><div class="col-md-4 col-sm-4 col-xs-4 dayimg dayblue" id="secondWeekID">
                            <span class="weekdays"><?php echo $house[1];  ?></span>
                       </div></a>
                       <a href="#cost"><div class="col-md-4 col-sm-4 col-xs-4 dayimg dayblue" id="thirdWeekID">
                           <span class="weekdays"><?php echo $house[2];  ?></span>
                       </div></a>
                   </div>
                </div>
                
                
                
                
                  <div class="col-lg-3 col-md-3">
                    <img class="price img-responsive" src="img/price_right.png">
                  </div>
                  <div class="col-lg-12 col-md-12">
                    
                      
                      
                      <!-- первая неделя -->
                      <div class="week" id="firstWeek">  
                       <div class="day" id="monday">
                          <div  <?php topCssCheck($data[0][0][info][data]); ?> >
                            <p class="nameday">ПОНЕДЕЛЬНИК</p>
                            <p class="namedata"><?php echo $data[0][0][info][day];  ?></p>
                            <p class="sale"><?php echo $data[0][0][info][skidka];  ?></p>
                            <p class="holiday"><?php echo $data[0][0][info][skidkaName];  ?></p>
                            <span class="hidden dayID"><?php echo $data[0][0][info][data];  ?></span>
                            <span class="hidden weekID"><?php echo $data[0][0][info][weekID];  ?></span>
                            
                          </div>
                             <?php timeMaker($data[0][0]); ?>   
                       </div>  
                       <div class="day"  id="tuesday">
                          <div  <?php topCssCheck($data[0][1][info][data]); ?> >
                            <p class="nameday">ВТОРНИК</p>
                            <p class="namedata"><?php echo $data[0][1][info][day];  ?></p>
                            <p class="sale"><?php echo $data[0][1][info][skidka];  ?></p>
                            <p class="holiday"><?php echo $data[0][1][info][skidkaName];  ?></p>
                            <span class="hidden dayID"><?php echo $data[0][1][info][data];  ?></span>
                            <span class="hidden weekID"><?php echo $data[0][0][info][weekID];  ?></span>
                          </div>
                               <?php timeMaker($data[0][1]); ?>   
                       </div> 
                       <div class="day" id="wednesday">
                            <div  <?php topCssCheck($data[0][2][info][data]); ?> >
                                <p class="nameday">СРЕДА</p>
                                <p class="namedata"><?php echo $data[0][2][info][day];  ?></p>
                            <p class="sale"><?php echo $data[0][2][info][skidka];  ?></p>
                            <p class="holiday"><?php echo $data[0][2][info][skidkaName];  ?></p>
                            <span class="hidden dayID"><?php echo $data[0][2][info][data];  ?></span>
                            <span class="hidden weekID"><?php echo $data[0][0][info][weekID];  ?></span>
                            </div>
                              <?php timeMaker($data[0][2]); ?>                    
                       </div>
                       <div class="day" id="thursday">
                          <div  <?php topCssCheck($data[0][3][info][data]); ?> >
                            <p class="nameday">ЧЕТВЕРГ</p>
                            <p class="namedata"><?php echo $data[0][3][info][day];  ?></p>
                            <p class="sale"><?php echo $data[0][3][info][skidka];  ?></p>
                            <p class="holiday"><?php echo $data[0][3][info][skidkaName];  ?></p>
                            <span class="hidden dayID"><?php echo $data[0][3][info][data];  ?></span>
                            <span class="hidden weekID"><?php echo $data[0][0][info][weekID];  ?></span>
                          </div>
                              <?php timeMaker($data[0][3]); ?>                         
                       </div>  
                       <div class="ipad-friday day" id="friday">
                          <div  <?php topCssCheck($data[0][4][info][data]); ?> >
                            <p class="nameday">ПЯТНИЦА</p>
                            <p class="namedata"><?php echo $data[0][4][info][day];  ?></p>
                            <p class="sale"><?php echo $data[0][4][info][skidka];  ?></p>
                            <p class="holiday"><?php echo $data[0][4][info][skidkaName];  ?></p>
                            <span class="hidden dayID"><?php echo $data[0][4][info][data];  ?></span>
                            <span class="hidden weekID"><?php echo $data[0][0][info][weekID];  ?></span>
                          </div>
                              <?php timeMaker($data[0][4]); ?>                        
                       </div>  
                       <div class="day" id="saturday">
                          <div  <?php topCssCheck($data[0][5][info][data]); ?> >
                            <p class="nameday">СУБОТА</p>
                            <p class="namedata"><?php echo $data[0][5][info][day];  ?></p>
                            <p class="sale"><?php echo $data[0][5][info][skidka];  ?></p>
                            <p class="holiday"><?php echo $data[0][5][info][skidkaName];  ?></p>
                            <span class="hidden dayID"><?php echo $data[0][5][info][data];  ?></span>
                            <span class="hidden weekID"><?php echo $data[0][0][info][weekID];  ?></span>
                          </div>
                              <?php timeMaker($data[0][5]); ?>                         
                       </div> 
                       <div class="day" id="sunday">
                          <div  <?php topCssCheck($data[0][6][info][data]); ?> >
                            <p class="nameday">ВОСКРЕСЕНЬЕ</p>
                            <p class="namedata"><?php echo $data[0][6][info][day];  ?></p>
                            <p class="sale"><?php echo $data[0][6][info][skidka];  ?></p>
                            <p class="holiday"><?php echo $data[0][6][info][skidkaName];  ?></p>
                            <span class="hidden dayID"><?php echo $data[0][6][info][data];  ?></span>
                            <span class="hidden weekID"><?php echo $data[0][0][info][weekID];  ?></span>
                          </div>
                              <?php timeMaker($data[0][6]); ?>                        
                       </div>                                                               
                     </div>
                      
                      <!-- вторая неделя -->
                      <div class="week " id="secondWeek">  
                       <div class="day" id="monday">
                          <div  <?php topCssCheck($data[1][0][info][data]); ?> >
                            <p class="nameday">ПОНЕДЕЛЬНИК</p>
                            <p class="namedata"><?php echo $data[1][0][info][day];  ?></p>
                            <p class="sale"><?php echo $data[1][0][info][skidka];  ?></p>
                            <p class="holiday"><?php echo $data[1][0][info][skidkaName];  ?></p>
                            <span class="hidden dayID"><?php echo $data[1][0][info][data];  ?></span>
                            <span class="hidden weekID"><?php echo $data[1][0][info][weekID];  ?></span>
                          </div>
                             <?php timeMaker($data[1][0]); ?>   
                       </div>  
                       <div class="day"  id="tuesday">
                          <div  <?php topCssCheck($data[1][1][info][data]); ?> >
                            <p class="nameday">ВТОРНИК</p>
                            <p class="namedata"><?php echo $data[1][1][info][day];  ?></p>
                            <p class="sale"><?php echo $data[1][1][info][skidka];  ?></p>
                            <p class="holiday"><?php echo $data[1][1][info][skidkaName];  ?></p>
                            <span class="hidden dayID"><?php echo $data[1][1][info][data];  ?></span>
                            <span class="hidden weekID"><?php echo $data[1][0][info][weekID];  ?></span>
                          </div>
                               <?php timeMaker($data[1][1]); ?>   
                       </div> 
                       <div class="day" id="wednesday">
                            <div  <?php topCssCheck($data[1][2][info][data]); ?> >
                                <p class="nameday">СРЕДА</p>
                                <p class="namedata"><?php echo $data[1][2][info][day];  ?></p>
                            <p class="sale"><?php echo $data[1][2][info][skidka];  ?></p>
                            <p class="holiday"><?php echo $data[1][2][info][skidkaName];  ?></p>
                            <span class="hidden dayID"><?php echo $data[1][2][info][data];  ?></span>
                            <span class="hidden weekID"><?php echo $data[1][0][info][weekID];  ?></span>
                            </div>
                              <?php timeMaker($data[1][2]); ?>                    
                       </div>
                       <div class="day" id="thursday">
                          <div  <?php topCssCheck($data[1][3][info][data]); ?> >
                            <p class="nameday">ЧЕТВЕРГ</p>
                            <p class="namedata"><?php echo $data[1][3][info][day];  ?></p>
                            <p class="sale"><?php echo $data[1][3][info][skidka];  ?></p>
                            <p class="holiday"><?php echo $data[1][3][info][skidkaName];  ?></p>
                            <span class="hidden dayID"><?php echo $data[1][3][info][data];  ?></span>
                            <span class="hidden weekID"><?php echo $data[1][0][info][weekID];  ?></span>
                          </div>
                              <?php timeMaker($data[1][3]); ?>                         
                       </div>  
                       <div class="ipad-friday day" id="friday">
                          <div  <?php topCssCheck($data[1][4][info][data]); ?> >
                            <p class="nameday">ПЯТНИЦА</p>
                            <p class="namedata"><?php echo $data[1][4][info][day];  ?></p>
                            <p class="sale"><?php echo $data[1][4][info][skidka];  ?></p>
                            <p class="holiday"><?php echo $data[1][4][info][skidkaName];  ?></p>
                            <span class="hidden dayID"><?php echo $data[1][4][info][data];  ?></span>
                            <span class="hidden weekID"><?php echo $data[1][0][info][weekID];  ?></span>
                          </div>
                              <?php timeMaker($data[1][4]); ?>                        
                       </div>  
                       <div class="day" id="saturday">
                          <div  <?php topCssCheck($data[1][5][info][data]); ?> >
                            <p class="nameday">СУБОТА</p>
                            <p class="namedata"><?php echo $data[1][5][info][day];  ?></p>
                            <p class="sale"><?php echo $data[1][5][info][skidka];  ?></p>
                            <p class="holiday"><?php echo $data[1][5][info][skidkaName];  ?></p>
                            <span class="hidden dayID"><?php echo $data[1][5][info][data];  ?></span>
                            <span class="hidden weekID"><?php echo $data[1][0][info][weekID];  ?></span>
                          </div>
                              <?php timeMaker($data[1][5]); ?>                         
                       </div> 
                       <div class="day" id="sunday">
                          <div  <?php topCssCheck($data[1][6][info][data]); ?> >
                            <p class="nameday">ВОСКРЕСЕНЬЕ</p>
                            <p class="namedata"><?php echo $data[1][6][info][day];  ?></p>
                            <p class="sale"><?php echo $data[1][6][info][skidka];  ?></p>
                            <p class="holiday"><?php echo $data[1][6][info][skidkaName];  ?></p>
                            <span class="hidden dayID"><?php echo $data[1][6][info][data];  ?></span>
                            <span class="hidden weekID"><?php echo $data[1][0][info][weekID];  ?></span>
                          </div>
                              <?php timeMaker($data[1][6]); ?>                        
                       </div>                                                               
                     </div>
                      
                      <!-- третья неделя -->
                      <div class="week" id="thirdWeek">  
                       <div class="day" id="monday">
                          <div  <?php topCssCheck($data[2][0][info][data]); ?> >
                            <p class="nameday">ПОНЕДЕЛЬНИК</p>
                            <p class="namedata"><?php echo $data[2][0][info][day];  ?></p>
                            <p class="sale"><?php echo $data[2][0][info][skidka];  ?></p>
                            <p class="holiday"><?php echo $data[2][0][info][skidkaName];  ?></p>
                            <span class="hidden dayID"><?php echo $data[2][0][info][data];  ?></span>
                            <span class="hidden weekID"><?php echo $data[2][0][info][weekID];  ?></span>
                          </div>
                             <?php timeMaker($data[2][0]); ?>   
                       </div>  
                       <div class="day"  id="tuesday">
                          <div  <?php topCssCheck($data[2][1][info][data]); ?> >
                            <p class="nameday">ВТОРНИК</p>
                            <p class="namedata"><?php echo $data[2][1][info][day];  ?></p>
                            <p class="sale"><?php echo $data[2][1][info][skidka];  ?></p>
                            <p class="holiday"><?php echo $data[2][1][info][skidkaName];  ?></p>
                            <span class="hidden dayID"><?php echo $data[2][1][info][data];  ?></span>
                            <span class="hidden weekID"><?php echo $data[2][0][info][weekID];  ?></span>
                          </div>
                               <?php timeMaker($data[2][1]); ?>   
                       </div> 
                       <div class="day" id="wednesday">
                            <div  <?php topCssCheck($data[2][2][info][data]); ?> >
                                <p class="nameday">СРЕДА</p>
                                <p class="namedata"><?php echo $data[2][2][info][day];  ?></p>
                            <p class="sale"><?php echo $data[2][2][info][skidka];  ?></p>
                            <p class="holiday"><?php echo $data[2][2][info][skidkaName];  ?></p>
                            <span class="hidden dayID"><?php echo $data[2][2][info][data];  ?></span>
                            <span class="hidden weekID"><?php echo $data[2][0][info][weekID];  ?></span>
                            </div>
                              <?php timeMaker($data[2][2]); ?>                    
                       </div>
                       <div class="day" id="thursday">
                          <div  <?php topCssCheck($data[2][3][info][data]); ?> >
                            <p class="nameday">ЧЕТВЕРГ</p>
                            <p class="namedata"><?php echo $data[2][3][info][day];  ?></p>
                            <p class="sale"><?php echo $data[2][3][info][skidka];  ?></p>
                            <p class="holiday"><?php echo $data[2][3][info][skidkaName];  ?></p>
                            <span class="hidden dayID"><?php echo $data[2][3][info][data];  ?></span>
                            <span class="hidden weekID"><?php echo $data[2][0][info][weekID];  ?></span>
                          </div>
                              <?php timeMaker($data[2][3]); ?>                         
                       </div>  
                       <div class="ipad-friday day" id="friday">
                          <div  <?php topCssCheck($data[2][4][info][data]); ?> >
                            <p class="nameday">ПЯТНИЦА</p>
                            <p class="namedata"><?php echo $data[2][4][info][day];  ?></p>
                            <p class="sale"><?php echo $data[2][4][info][skidka];  ?></p>
                            <p class="holiday"><?php echo $data[2][4][info][skidkaName];  ?></p>
                            <span class="hidden dayID"><?php echo $data[2][4][info][data];  ?></span>
                            <span class="hidden weekID"><?php echo $data[2][0][info][weekID];  ?></span>
                          </div>
                              <?php timeMaker($data[2][4]); ?>                        
                       </div>  
                       <div class="day" id="saturday">
                          <div  <?php topCssCheck($data[2][5][info][data]); ?> >
                            <p class="nameday">СУБОТА</p>
                            <p class="namedata"><?php echo $data[2][5][info][day];  ?></p>
                            <p class="sale"><?php echo $data[2][5][info][skidka];  ?></p>
                            <p class="holiday"><?php echo $data[2][5][info][skidkaName];  ?></p>
                            <span class="hidden dayID"><?php echo $data[2][5][info][data];  ?></span>
                            <span class="hidden weekID"><?php echo $data[2][0][info][weekID];  ?></span>
                          </div>
                              <?php timeMaker($data[2][5]); ?>                         
                       </div> 
                       <div class="day" id="sunday">
                          <div  <?php topCssCheck($data[2][6][info][data]); ?> >
                            <p class="nameday">ВОСКРЕСЕНЬЕ</p>
                            <p class="namedata"><?php echo $data[2][6][info][day];  ?></p>
                            <p class="sale"><?php echo $data[2][6][info][skidka];  ?></p>
                            <p class="holiday"><?php echo $data[2][6][info][skidkaName];  ?></p>
                            <span class="hidden dayID"><?php echo $data[2][6][info][data];  ?></span>
                            <span class="hidden weekID"><?php echo $data[2][0][info][weekID];  ?></span>
                          </div>
                              <?php timeMaker($data[2][6]); ?>                        
                       </div>                                                               
                     </div>
                  </div>
            </div> 
           </div>
        </section>  

          <!-- ==== ZAKAZ ==== -->
        <section id="zakaz" name="contacts">
            <div class="container">
              <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <h2 class="cnt text-center">ФОРМА ЗАКАЗА</h2>
                      <img class="line" src="img/line.png">
                  </div>
                  <div id="sel-day" class="col-md-5 sel-day">
                    <h3>Дневник начальника станции</h3>
                      <div class="col-md-8">
                          <p class="dns-p1"><span id="weekday"></span><br/><span id="day"></span><br/><span id="times"></span></p>
                          <p class="dns-p1"><span id="prc"><strong></strong> грн.</span></p>
                          <p class="dns-p1"><span id="adrs">г.Киев ул.Приречная 25</span></p>
                      </div>
                      <div class="clock col-md-4 underChange">
                          <a href="#cost" id="renew" class="smoothScroll"><img src="img/clock.png"></a>
                          <span>изменить</span>
                      </div>
                  </div>
                  <div id="forms" class="col-md-7 col-sm-12">
                         <div class="row padding-form">
                          <div class="col-lg-12">
                            
                              <div class="col-md-6 col-sm-12 col-xs-12"> 
                              <p><label><img src="img/star.png"></label>
                                  <input type="text" class="form-control myinput"id="fio" placeholder="Имя"> <span id="reqfio"></span>
                              </p>
                              <p><label><img src="img/star.png"></label>
                                  <input type="tel" class="form-control myinput" id="phone" placeholder="Телефон"></p><span id="reqphone"></span>
                              <p class="norequired"><input type="email" class="form-control myinput" id="email" placeholder="Email"></p>
                          </div>
                          <div class="col-md-6 col-sm-12 col-xs-12">    
                                  
                              <p><textarea id="comment" class="form-control myinput" id="comment" row="3" placeholder="Пожелания"></textarea></p>
                              <p><input type="email" class="form-control myinput" id="promo" placeholder="Промо код"></p>
                          </div>
                              
                              <!-- <div class="clear"></div> -->
                              <span class="hidden" id="komnataID"></span>
                              <span class="hidden" id="dayID"></span>
                              <span class="hidden" id="weekID"></span>
                              
                              <div class="soglash">Бронируя время, вы соглашаетесь с <a id="user_agreement">пользовательским соглашением</a></div> 
                            <button type="submit" class="btn btn-warning bt-buy" >ЗАБРОНИРОВАТЬ</button> 
                              </div>
                            </div>
                      </div>
                      </div>
                  </div>
     
        </section>      


          <!-- ==== CONTACTS ==== -->

        <section id="contacts" name="contacts">
            <div class="container-fluid">
              <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <h2 class="cnt text-center">КОНТАКТЫ</h2>
                      <img class="line" src="img/line.png">
                  </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <img class="map" src="img/map2.png">
                        <p id="ipad-text" class="text-center">
                             Добраться к нам можно от м.Минская,<br/>
                             маршруткой 559. ост. "Царская охота".<br/>
                             вход слева от паркхмахерской,<br/>
                             дверь с домофоном
                          </p>
                    </div>         
                  <div class="building col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <h3>г.Киев<br/>ул.Приречная 25</h3>
                        <img class="build img-responsive" src="img/build.png">
                          <p class="text-map">
                             Добраться к нам можно от м.Минская,<br/>
                             маршруткой 559. ост. "Царская охота".<br/>
                             вход слева от паркхмахерской,<br/>
                             дверь с домофоном
                          </p>
                  </div>          
              </div>
            </div>
        </section> 

 <!-- Modal -->
 <div class="modal fade" id="getCodeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div> 

          <div class="modal-body" id="getCode" data-dismiss="modal" aria-label="Close">
       </div>
    </div>
   </div>
 </div>
 
 
 <!-- Modal -->
<div class="modal fade" id="getCodeMod" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
     <div class="modal-content-info">
     <div class="modal-header">
         <h4 class="modal-title">Пользовательское соглашение</h4>
     </div>
     <div class="modal-body">
         <p>Мы собираем инфу</p>
     </div>
     <div class="modal-footer">
         <button type="button" class="btn btn-white" id="modalClose">Закрыть</button>
     </div>
   </div>
  </div>
</div>     

    <!-- ==== FOOTER ==== -->
      <footer class="footer">
         <div class="container">
           <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
                  <address>Coperight © 2015 Questory.</address>
              </div>
           </div> 
         </div>
      </footer> 


    <script>
jQuery(function($){
	$("#phone").mask("(999)999-9999");
});
</script>
