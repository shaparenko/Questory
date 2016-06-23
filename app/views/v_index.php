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
                              
                              <div class="soglash">Бронируя время, вы соглашаетесь с <a id="user_agreement" href="#zakaz">пользовательским соглашением</a></div> 
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
         <div class="modal-title">Пользовательское соглашение</div>
     </div>
     <div class="modal-body">
         
    <div class="popup-info-i-text"><p>Я согласен(а) с условиями политики конфиденциальности и разрешаю использовать мои персональные данные на законных основаниях.</p>

<div class="modal-text-title">Персональные данные</div>
<p>На виконання вимог Закону України "Про захист персональних даних" даю згоду на обробку моїх персональних даних з метою забезпечення реалізації цивільно-правових відносин, надання/отримання та здійснення розрахунків за придбані товари/послуги, в тому числі шляхом кредитування. Не заперечую щодо перевірки інформації у відповідних бюро кредитних історій з метою з’ясування відомостей, які стосуються виконання мною взятих на себе зобов’язань по договорам (в т.ч. кредитним), у випадку наявності таких, тим самим розуміючи, що об’єм інформації, яка буде перевірятися, може включати в себе інформацію, яка стосується банківської таємниці, і з’ясування якої буде такою, яка буде повною та достатньою для розуміння мого соціального, майнового стану, платоспроможності та несення можливої подальшої майнової відповідальності, у випадку її необхідності. Я також погоджуюсь з тим, що володілець має право надавати доступ та передавати мої персональні дані третім особам без будь-яких додаткових повідомлень, не змінюючи при цьому мети їх обробки. В тому числі, на перевірку зазначеної в даній Заявці інформації та не заперечую про передачу для можливого необхідного з'ясування даної інформації третім особам, під якими розумію: фінансові установи, колекторські компанії, оператори мобільного та поштового зв’язку, інші фізичні та/або юридичні особи.</p>
<p>Ми цінуємо Ваше право на особисте життя та нерозголошення Вашої персональної інформації. Ця Політика конфіденційності - правило, яким користуються всі співробітники нашого сервісу, та регламентує збір і використання особистої інформації, яка може бути запрошена/отримана при відвідуванні нашого веб-сайту http://rozetka.com.ua, при використанні сервісу, при замовленні, листуванні або телефонній розмові. Якщо у Вас виникнуть питання або проблеми у зв’язку з конфіденційністю, надсилайте, будь ласка, свої питання або зауваження на електронну адресу: doc@rozetka.ua.

</p><div class="modal-text-title">Яку інформацію ми збираємо</div>
<p>На нашому сайті, в разі, коли Ви робите замовлення, берете учать в акції, дослідженнях або іншим чином взаємодієте з нами, ми збираємо як особисту інформацію, так і загальні дані.</p>
<p>Особиста інформація стосується окремого споживача - приміром, ім'я, адреса, номер телефону, e-mail, тощо. Такі дані ми отримуємо лише від осіб, які надають її свідомо та з власного бажання. Наприклад, зареєструвавшись на нашому сайті, або вказуючи ім'я та адресу із запитом на отримання подальшої інформації від нас. Ми не вимагаємо реєстрації або надання такої інформації для перегляду нашого сайту та отримання доступу до його змісту.</p>
<p>Для того щоб зробити замовлення товарів/послуг, брати участь у акціях, дослідженнях або іншим чином взаємодіяти з нами, Ви повинні уважно ознайомитися з Вашими правами та обов’язками щодо обробки персональних даних, які зазначені в  ст. 8 З.У. «Про захист персональних даних» ,     уважно ознайомитися з даною Політикою конфіденційності, а також висловити свою повну згоду з їх умовами.</p>
<p>Якщо Ви не погоджуєтеся з будь-якою з умов даної Політики конфіденційності та вищезазначеного Положення про захист персональних даних, будь ласка, не надавайте особисту інформацію.</p>
<p>Згоду на використання Вашої особистої інформації Ви можете відкликати в будь-який момент. Для цього достатньо надіслати повідомлення електронною поштою, з поміткою в темі листа «Персональні дані», за адресою: doc@rozetka.ua.</p>

<div class="modal-text-title">Чому ми обробляємо персональні дані</div>
<p>Персональні дані - відомості чи сукупність відомостей про фізичну особу, яка ідентифікована або може бути конкретно ідентифікована.<br>
Ми можемо обробляти Ваші персональні дані для наступних цілей. При цьому одночасно можуть застосовуватися одна або кілька цілей.</p>
<p><u>Отримання замовлення</u>. Ми можемо використовувати Ваші персональні дані для отримання  замовлення, яке Ви зробили, для обробки Ваших запитів, або для інших цілей, які можуть існувати для досягнення кінцевої мети – задовольнити інтереси споживача, а також для запобігання та розслідування випадків шахрайства та інших зловживань.</p>
<p><u>Спілкування з Вами</u>. Ми можемо використовувати Ваші персональні дані для зв'язку з Вами, наприклад повідомити  Вас про  зміну  наших послуг або надіслати Вам важливі повідомлення та інші подібні повідомлення, що стосуються замовлення, що було Вами зроблено та зв'язатися з Вами в цілях, пов’язаних з обслуговуванням споживача/клієнта.</p>
<p>Ми діємо відповідно до цієї Політики конфіденційності, на підставі Положення про обробку і захист персональних даних та на підставі чинного законодавства України. Володільцем персональних даних є ТОВ «Укрпартнер», що знаходиться за адресою : м. Київ, вул. Нижньоюркiвська, буд. 3.Ми маємо право зберігати Персональні дані стільки, скільки необхідно для реалізації мети, що зазначена у даній Політиці конфіденційності або у строки, встановлені чинним законодавством України або до моменту видалення Вами цих даних.</p>

<div class="modal-text-title">Як збираємо інформацію</div>
<p>Особиста інформація, як ми зазначили вище, надходить безпосередньо від Вас, та з Вашого відома. Так, коли Ви реєструєтеся на сайті, ми отримуємо надану Вами інформацію. Коли Ви реєструєтеся в промо-акції, ми збираємо інформацію, необхідну для Вашої участі, аби виконати наші зобов'язання перед Вами. Коли Ви здійснюєте замовлення товару, ми збираємо вказану Вами інформацію, щоб мати змогу оформити замовлення та доставити його Вам. Коли Ви надсилаєте нам електронного листа, ми зберігаємо вказану Вами адресу електронної пошти, щоб мати змогу відповісти.</p>
<p>Також ми постійно збираємо загальну інформацію, коли Ви заходите на наш веб-сайт. Процес збору таких даних відбувається з допомогою технологій cookies, як пояснюється нижче.</p>

<div class="modal-text-title">Cookies</div>
<p>Як і багато інших компаній, ми використовуємо технологію cookies на нашому сайті та поза його межами. Cookies - це уривки інформації, які веб-сайт передає на жорсткий диск споживача для зберігання інформації, пов’язаної з веб-сайтом.  Ця технологія розширює Ваші можливості використання інтернету, зберігаючи Ваші пріоритети під час перегляду певного сайту. Технологія cookies не містить особистої інформації і не може жодним чином налаштовувати Вашу систему або зчитувати інформацію з Вашого жорсткого диска.</p>
<p>Під час перегляду нашого веб-сайту ми можемо розмістити cookies на Вашому комп'ютері. Такі тимчасові cookies використовують для підрахунку кількості візитів на наш сайт. Вони видаляються, коли Ви виходите з браузера. Постійні cookies можуть зберігатися на Вашому комп'ютері Вашим браузером. Під час реєстрації цей тип cookies повідомляє: вперше Ви до нас завітали чи заходили на наш сайт раніше. Cookie не містять Персональних даних і можуть бути заблоковані Вами у будь-який момент. Сookies не отримують особистої інформації про Вас та не надають нам Вашої контактної інформації, а також не отримують жодної інформації з Вашого комп'ютера. Ми використовуємо cookies для визначення характеристик сайту та пропозицій, які Вам найбільше подобаються з метою надання Вам більше інформації, в якій Ви зацікавлені. Крім того, файли cookie використовуються, щоб зробити веб-сайт http://rozetka.com.ua безпечним, захищеним і зручним. Файли cookie забезпечують підтримку функцій безпеки та їх запуск. Файли cookie також дозволяють відстежувати порушення ПОЛІТИКИ КОНФІДЕНЦІЙНОСТІ відвідувачами або пристроями. Файли cookie допомагають оцінити кількість і частоту запитів, а також виявляти і блокувати тих відвідувачів або пристрої, які намагаються виконати пакетні завантаження інформації з веб-сайту.</p>
<p>Ярлик "help" на панелі більшості браузерів проінформує Вас як заборонити браузеру приймати нові cookies, як отримувати повідомлення від браузера, що Ви отримали нові cookies, або як відключити cookies. Пам'ятайте, що cookies дозволяють Вам повною мірою користуватися всіма можливостями веб-сайту http://rozetka.com.ua, і ми рекомендуємо Вам залишати їх ввімкненими.</p>
<p>Крім того, веб-сайт  http://rozetka.com.ua може містити посилання на сайти, які не управляються  ТОВ "Укрпартнер ". Такі посилання наведені виключно для інформаційних цілей.</p>
Технічне оснащення сторінок сайту http://rozetka.com.ua може включати в себе модулі:<br>
<ul style="list-style-type:disc;padding:10px 0 10px 20px">
<li>Соціальної мережі Facebook (facebook.com), управління якої відбувається зі штаб-квартири компанії Facebook Inc , Facebook Corporate Office, який знаходиться за адресою: Headquarters 1601 S. California Ave . Palo Alto , CA 94304 , USA, телефон: +1 (650 ) 543-4800</li>
<li>Інформаційної мережі Twitter (twitter.com), управління якою здійснюється з офісу компанії Twitter , Inc., який знаходиться за адресою: 1355 Market St, Suite 900 San Francisco, CA 94103, USA, телефон: +1 ( 415 ) 222-9958;</li>
<li>Соціального форуму Youtube (youtube.com) , управління яким здійснюється з офісу компанії YouTube, LLC, який знаходиться за адресою: 901 Cherry Ave., San Bruno, CA 94066, USA, телефон: +1 (650 ) 253-0000</li>
<li>Соціальної мережі "ВКонтакте" (vk.com), управління якою здійснюється з офісу ТОВ "В Контакті", який знаходиться за адресою: вул. Тверська , буд. 8, літ. Б, м. Санкт -Петербург, 191015, Росія.</li>
</ul>
<p>Ці модулі можуть бути кнопками синхронізації аккаунту на веб-сайті http://rozetka.com.ua , Like, ретвітнути або відповідно "Мені подобається". Якщо відвідувач відкривав одну з веб-сторінок, оснащену таким плагіном, його інтернет-браузер безпосередньо підключить його до серверів Facebook, Twitter, LinkedIn, ВКонтакте, Google+ або Youtube. Плагін буде передавати на сервер дані про те, які саме веб-сторінки веб-сайту http://rozetka.com.ua  відвідувач переглядав.
При використанні будь-яких функцій плагіну, ця інформація також буде синхронізована з обліковим записом відвідувача на Facebook, Twitter, ВКонтакте, Google+ або Youtube. Більш детальну інформацію про збір і використання даних мережами Facebook, Twitter, ВКонтакте, Google+ або Youtube, а також про права і можливості щодо захисту персональних даних в даному контексті можна знайти в розділі про конфіденційність на сайтах Facebook, Twitter, LinkedIn, ВКонтакте, Google+ або Youtube</p>

<div class="modal-text-title">Конкурси та акції</div>
<p>Наш сайт іноді розміщує повідомлення про наші промо-акції, й іноді ми можемо дозволити Вам зареєструватися онлайн. У таких випадках ми використаємо надану Вами інформацію, щоб провести акцію (наприклад, повідомити Вас у разі виграшу). Через певний час після закінчення промо-акції особисту інформацію ми видаляємо із нашої бази даних, якщо Ви не надали згоди на її збереження та використання для отримання подальшої інформації від нас. Беручи участь в акції ви надаєте однозначну згоду на безкоштовне використання вашого імені, прізвища, фотографії, інтерв’ю або інших матеріалів про вас з рекламною метою, у тому числі право публікації вашого імені та фотографії у засобах масової інформації, будь-яких друкованих, аудіо- та відеоматеріалах, інтерв’ю зі ЗМІ. Таке використання не компенсується (не оплачується).</p>

<div class="modal-text-title">Треті сторони, що надають послуги</div>
<p>У процесі роботи ми звертаємося до інших компаній та осіб, які виконують багато функцій. Наприклад, виконання та доставку замовлень,  надання підтримки споживачів, замовляємо в певних агенцій адміністрування промо-кампаній, аналіз даних,. Ці агенції можуть мати доступ до особистої інформації, якщо це необхідно для виконання їхніх функцій, однак їм заборонено використовувати особисту інформацію з іншою метою, ніж та, яка зазначена в нашій  Політиці конфіденційності та в нашому Положенні про обробку і захист персональних даних, і ми вимагаємо від них дотримання конфіденційності.</p>
<p>Загальна інформація стосується таких аспектів, як кількість відвідувачів сайту, на які сторінки вони заходять, яку інформацію завантажують, тип веб-браузера та операційна система, яку вони використовують, назва провайдера інтернет-послуг, тощо. Коли Ви заходите на наш сайт, ми автоматично отримуємо цю інформацію та узагальнюємо з подібними даними про інших відвідувачів. Збираючи таку інформацію, ми аналізуємо, як краще пристосувати наш веб-сайт до потреб відвідувачів.</p>

<div class="modal-text-title">Розголошення та передача даних</div>
Ми не продаємо, не передаємо та не розголошуємо особисту інформацію, яку отримуємо на нашому сайті, третім сторонам без Вашої попередньої згоди. Ми розкриваємо особисту інформацію лише у випадках визначених чинним законодавством України, а також:<br>
<ol type="1" style="padding:10px 0 10px 20px">
<li>Ми розкриємо інформацію в випадку запобігання злочину або завдання шкоди нам або третім особам;</li>
<li>Ми розкриємо інформацію третім особам, що надають нам підтримку та послуги за допомогою яких Ви отримуєте Ваше замовлення.</li>
</ol>
<p>Може статися, що ми надамо загальну інформацію про наших відвідувачів (наприклад, відсоток відвідувачів сайту жіночої та чоловічої статі) рекламним агенціям, бізнес партнерам, спонсорам та іншим третім сторонам, щоб налаштувати або розширити зміст і рекламу на нашому сайті для наших споживачів. Ми також можемо збирати дані з файлів веб-реєстрації (таких як Ваш веб-браузер, операційна система, відвідані сторінки тощо), щоб зрозуміти, як відвідувачі подорожують сайтом, та які його сторони є найпопулярнішими.</p>

<div class="modal-text-title">Оновлення цього попередження</div>
<p>Ми можемо в односторонньому порядку змінювати або оновлювати частини цієї політики в будь-який час, без попереднього повідомлення. Будь-ласка, час від часу переглядайте Політику конфіденційності, щоб знати про її зміни та оновлення. Усі зміни до цієї Політики конфіденційності набувають чинності з моменту їх публікації. Коли ви робите замовлення, берете учать в акції, дослідженнях або іншим чином взаємодієте з нами,  ви погоджуєтесь з новими умовами Політики конфіденційності в редакції, що діє на цей момент.</p>
<p>У випадку визнання недійсною або нездійсненною будь-якої частини даної Політики конфіденційності, інші її частини будуть залишатися чинними.</p>
     </div>
     <div class="modal-footer">
         <button type="button" class="btn btn-white" id="modalClose">Закрыть</button>
     </div>
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
