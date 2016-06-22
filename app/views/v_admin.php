<?php
$dayofmonth = date('t');
  $day_count = 1;
  $num = 0;
  for($i = 0; $i < 7; $i++)
  {
    $dayofweek = date('w',
    mktime(0, 0, 0, date('m'), $day_count, date('Y')));
    $dayofweek = $dayofweek - 1;
    if($dayofweek == -1) $dayofweek = 6;

    if($dayofweek == $i)
    {
      $week[$num][$i] = $day_count;
      $day_count++;
    }
    else
    {
      $week[$num][$i] = "";
    }
  }
  while(true)
  {
    $num++;
    for($i = 0; $i < 7; $i++)
    {
      $week[$num][$i] = $day_count;
      $day_count++;
      if($day_count > $dayofmonth) break;
    }
    if($day_count > $dayofmonth) break;
  }
  $graph_w= '<table><tr bgcolor=#6CA6CD style="color:white"><td>Пн</td>
<td>Вт</td>
<td>Ср</td>
<td>Чт</td>
<td>Пт</td>
<td>Сб</td>
<td>Вс</td></tr>';
  for($i = 0; $i < count($week); $i++)
  {
    $graph_w.= '<tr>';
    for($j = 0; $j < 7; $j++)
    {
      if(!empty($week[$i][$j]))
      {
	  $dff=$week[$i][$j];
	  if($arrd[$dff]!='0'){if($login=='fmd'){$monney=round($arrf[$dff]*$bablo_sql[zp_hour]);$ccntd='<span style="font-size:11px;color:#4F4F4F">'.$monney.'ss</span>';$fggc='#90EE90';} else{$ccntd='<span style="font-size:8px;color:#4F4F4F">'.$arrd[$dff].'</span>';$fggc='#90EE90';}}else{$fggc='#E0FFFF';$ccntd='<br>';}
        if($j == 5 || $j == 6) 
		
             $graph_w.= '<td width=40 bgcolor='.$fggc.'><font color=red><b>'.$week[$i][$j].'</b></font><br>'.$ccntd.'</td>';
        else $graph_w.= '<td width=40 bgcolor='.$fggc.'><b>'.$week[$i][$j].'</b><br>'.$ccntd.'</td>';
      }
      else $graph_w.= '<td bgcolor=#DCDCDC>&nbsp;</td>';
    }
    $graph_w.= '</tr>';
  } 
  $graph_w.= '</table>';

  echo $graph_w;
  
  
  
  
  
  
  
  /* Функция генерации календаря */
function draw_calendar($month,$year){
  /* Начало таблицы */
  $calendar = '<table cellpadding="0" cellspacing="0" class="calendar">';
  /* Заглавия в таблице */
  $headings = array('Понедельник','Вторник','Среда','Четверг','Пятница','Субота','Воскресенье');
  $calendar.= '<tr class="calendar-row"><td class="calendar-day-head">'.implode('</td><td class="calendar-day-head">',$headings).'</td></tr>';
  /* необходимые переменные дней и недель... */
  $running_day = date('w',mktime(0,0,0,$month,1,$year));
  $running_day = $running_day - 1;
  $days_in_month = date('t',mktime(0,0,0,$month,1,$year));
  $days_in_this_week = 1;
  $day_counter = 0;
  $dates_array = array();
  /* первая строка календаря */
  $calendar.= '<tr class="calendar-row">';
  /* вывод пустых ячеек в сетке календаря */
  for($x = 0; $x < $running_day; $x++):
    $calendar.= '<td class="calendar-day-np"> </td>';
    $days_in_this_week++;
  endfor;
  /* дошли до чисел, будем их писать в первую строку */
  for($list_day = 1; $list_day <= $days_in_month; $list_day++):
    $calendar.= '<td class="calendar-day">';
      /* Пишем номер в ячейку */
      $calendar.= '<div class="day-number">'.$list_day.'</div>';
      /** ЗДЕСЬ МОЖНО СДЕЛАТЬ MySQL ЗАПРОС К БАЗЕ ДАННЫХ! ЕСЛИ НАЙДЕНО СОВПАДЕНИЕ ДАТЫ СОБЫТИЯ С ТЕКУЩЕЙ - ВЫВОДИМ! **/
      $calendar.= str_repeat('<p> </p>',2);
      
    $calendar.= '</td>';
    if($running_day == 6):
      $calendar.= '</tr>';
      if(($day_counter+1) != $days_in_month):
        $calendar.= '<tr class="calendar-row">';
      endif;
      $running_day = -1;
      $days_in_this_week = 0;
    endif;
    $days_in_this_week++; $running_day++; $day_counter++;
  endfor;
  /* Выводим пустые ячейки в конце последней недели */
  if($days_in_this_week < 8):
    for($x = 1; $x <= (8 - $days_in_this_week); $x++):
      $calendar.= '<td class="calendar-day-np"> </td>';
    endfor;
  endif;
  /* Закрываем последнюю строку */
  $calendar.= '</tr>';
  /* Закрываем таблицу */
  $calendar.= '</table>';
  
  /* Все сделано, возвращаем результат */
  return $calendar;
}
/* СПОСОБ ПРИМЕНЕНИЯ */
echo '<h2>Июнь 2012</h2>';
echo draw_calendar(6,2012);
