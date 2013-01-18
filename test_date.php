<?php 
 /*
 $diff2= date_diff(date_create("2012-05-02"), date_create("2012-05-1"));
 print_r($diff2);
 if(strtotime("2012-05-05")>strtotime("2012-05-4"))
 echo "<br>--";
 */
  // previous to PHP 5.1.0 you would compare with -1, instead of false
  //$str = 21223 ; 
	//if (($timestamp = strtotime($str)) === false) {
	//	echo "The string ($str) is bogus";
	//} else {
	//	echo "$str == " . date('h:i:s A', $str);
	//}
$time = date( "h:i:s", 604800 ) ; 
//51649 

echo $time ;
echo "\n";
/*echo date('2030-07-d');

$listStoryId = array();
$sTime       = date('Y-m-d H:i:s');
$eTime       = date('Y-m-d H:i:s', (time() - 1800));
$select_sql  = 'SELECT sub_story_id, type FROM m_sub_story_setting WHERE (start_at <= "'.$sTime.'" AND end_at >= "'.$eTime.'")';
//echo $select_sql;
// echo $_SERVER['SERVER_NAME'];
echo strtotime("16:00:00");
// echo "-->\n";
// echo date('Y-m-d H:i:s',1341190800)." <= ".date('Y-m-d H:i:s',1340960359) ." && ".date('Y-m-d H:i:s',1340960359) ." <= ". date('Y-m-d H:i:s',2682424800);
//echo "-->\n<br>";

echo strtotime("16:00:00") ."->".strtotime("05:00:00");
 
echo "\n <br> 1341234000       1341190800    ";
echo "<br>".date('H:i:s A',intval(intval(strtotime("16:00:00")) + intval(strtotime("05:00:00"))));

$x=intval(strtotime("16:00:00")) ;
$y= intval(strtotime("05:00:00")) ;

 echo "<br>".date('H:i:s ',$x);
 echo "<br>".date('H:i:s ',$y);
 //echo date('H:i:s A',1341190800)." + ". date('H:i:s',1341234000);

echo "<br><br>";

$date = date_create('2000-01-01');
date_add($date, date_interval_create_from_date_string('5 hours'));
//echo date_format($date, 'Y-m-d H:i:s');

$event_time = "16:00:00";
$event_length = convertTimeToSeconds("");
 
$timestamp = strtotime("$event_time");
$etime = strtotime("+$event_length seconds", $timestamp);
$next_time = date('H:i:s', $etime);
echo "<br><br>".$next_time;


function convertTimeToSeconds($str)
{
		if(!empty($str)){
			$arr_time=explode(":",$str);
			$seconds =0;
			if(isset($arr_time[0]) && $arr_time[0] != "00" ){ $seconds = 60*60*intval($arr_time[0]);}
			if(isset($arr_time[1]) && $arr_time[1]!="00" ){ $seconds += 60*intval($arr_time[1]);}
			if(isset($arr_time[2]) && $arr_time[2]!="00" ){ $seconds += intval($arr_time[2]);}
		return $seconds;
		}
}
*/
 ?>