<?php 

$array = array('a' => 'foo', 'b' => 'bar', 'c' => 'baz');
//sort($array);
//asort($array,SORT_NUMERIC);
//arsort($array);
//var_dump($array);
//print_r($array);


$array = array('10t', '2t', '3t');
natsort($array);
//sort($array);
//var_dump($array);

$numbers = range(1, 20);
shuffle($numbers);
foreach ($numbers as $number) {
   // echo "$number ";
}


$cards = array (1, 2, 3, 4);
shuffle ($cards);
//var_dump ($cards);


$cards = array ('a' => 10, 'b' => 12, 'c' => 13);
$keys = array_keys ($cards);
shuffle($keys);

foreach ($keys as $v) {
//echo $v . " - " . $cards[$v] . "\n";
}

$array = array(0 => 100, "color" => "red");
//print_r(array_keys($array));

$array = array("blue", "red", "green", "blue", "blue");
//print_r(array_keys($array, "blue"));

$array = array("color" => array("blue", "red", "green"),
               "size"  => array("small", "medium", "large"));
//print_r(array_keys($array));

$cards = array ('a' => 10, 'b' => 12, 'c' => 13);
$keys = array_rand ($cards, 2);

//var_dump ($keys);
//var_dump ($cards);

$stack = array();
array_push($stack, 'bar', 'baz');
//var_dump($stack);

$json='
{
 "resultCount":1,
 "results": [
{"kind":"software", "features":[], "supportedDevices":["all"], "isGameCenterEnabled":false, 
"screenshotUrls":["http://a3.mzstatic.com/us/r1000/096/Purple/67/d4/f8/mzl.vjjgulme.png", "http://a3.mzstatic.com/us/r1000/110/Purple/43/e2/00/mzl.onutdibg.png", "http://a4.mzstatic.com/us/r1000/084/Purple/35/c9/2c/mzl.namasajr.png", "http://a1.mzstatic.com/us/r1000/117/Purple/a1/03/13/mzl.bbzbxrlh.png", "http://a1.mzstatic.com/us/r1000/089/Purple/dc/69/4c/mzl.enuvyuot.png"], "ipadScreenshotUrls":[], "artworkUrl60":"http://a1.mzstatic.com/us/r1000/078/Purple/4e/0c/78/mzi.vmnlgxnx.png", "artworkUrl512":"http://a2.mzstatic.com/us/r1000/086/Purple/15/56/32/mzl.hvgckoaw.jpg", "artistViewUrl":"http://itunes.apple.com/us/artist/cyscorpions-inc./id327778498?uo=4", "artistId":327778498, "artistName":"Cyscorpions Inc.,", "price":0.00, "version":"1.71", 
"description":"Tick-tock, time to wake-up!\nCheck this Crazy Alarm FREE version!\n\nNo1 Alarm App in Japan.\nOver 800,000 downloads.\nApp store Ranking in japan market!!\n\"2nd\" in All category.\n\"1st\" in utility category.\n\nCrazy Alarm is a customizable app created to \nget rid of your dilemma, \u201cI-overslept-because-I-put-my-alarm-off.\" \nWe all want our morning to be much more motivating than always. Well, Guess what? This app is made just for us! So rise and shine because Crazy Alarm has OVER 100 customized `sounds\'like DJ voice, tone chants to help you put wisdom in your mind, and your very own iPod MUSIC list! With all this, you sure can set up your crazy alarm and make your morning much more moving, fun, crazy and motivating than the usual!\n\nWhy it\'s good:\n1) 100% reliability for Zero cost: App is free! \n2) It gets things pumpin\'shake it to stop it!\n3) Works on background : uses new iOS4 features!\n4) Over 100 custom alarm sounds\n5) Your iPod music can be use for alarm sound\n6) Snooze function\n7) Crazy mode!!!\n8) Auto post to Twitter! \"share the buzz that you\'re up and about\"\n\nYOU\'RE PROBLEM?\nI\'m positive you\'ve experienced complaining about your alarm clock for the following reasons:\n? You can\'t leave it running in the background?\n? Perhaps, you need to turn off your phone and still want your alarm clock to ring?\n? Even though the alarm rang your still late and has gone to sleep twice?\n? We don\'t want something free or not `free\'and `yet\'it\'s unrewarding? \n\n\nCRAZY SOLUTION!\nBe on time and get-up-and-go because the free Crazy Alarm app heard our complaints! \n? You don\'t have to worry about multitasking since this app can still run in the background.\n? Turning off your iPhone is not a setback any longer \u2013 more like, it\'s your option now. It works even when your phone has dozed-off :-)\n? There is an interesting ways to make the alarm stop; you have to shake your iPhone aggressively till it\'s finally out!\nNot enough? You can change the setting mode in which you have to swing your IPhone to make the alarm end. \nSwinging won\'t do? There\'s still another option available, you have to move your whole body to halt the alarm! It\'s sure to get any sleepy head out of bed!\n? Besides that it\'s powerful, you can download the app for FREE! Great deal, yes?\n\n\nCrazy alarm free edition! \nWake up like sparkling new!\n\nCRAZY FEATURES:\n? Alarm setting function (one)\n? \"Beep\" Select (the sound device / sound more than 100 built-in)\n? \"Alarm Sound\" selection (internal sound / iPod)\n? Snooze function (repeat after 5 minutes)\n? Shake count setting (30/50/100/300/500/1000)\n? Shake sensitivity setting\n? Crazy Mode (disabled home button)\n? Auto Post to Twitter (Text modified post / song / artist additional options)\n\n\nCRAZY TIPS! (How to use)\n? To stop snooze function, please turn off snooze or alarm manually.\n? \"Alarm\" volume will depend on your default iPhone volume.\n? Crazy Mode alarm can be stopped only by SHAKE.  \n? Setting \" \"low sensitivity\" for \"iPhone 4\" requires VERY aggressive shakes.\n? When you reboot device while app is working on background, alarm setting will be cleared. Please set alarm again.\n? Please turn off Alarm before you delete application. (iOS has bug to remain notification. When alarm fired without application, please power off device to stop notification.)\n? The Crazy Alarm free version has ads. If you ever click on the ads alarm will stop.\n? Notification requires due to iOS specification. iPod music can not use as notification due to iOS limitation.\n? JB (jailbreak) users should refrain from using this app. It has been reported\nthat you\'ll experience trouble with the terminal.\n? When updating, make sure that the application is not running in the background or to terminate the app first before using the new version.", "genreIds":["6002", "6007"], "releaseDate":"2010-07-31T03:27:25Z", "sellerName":"Cyscorpions Inc", "currency":"USD", "genres":["Utilities", "Productivity"], "bundleId":"com.cyscorpions.CrazyAlarm", "trackId":382249720, "trackName":"Crazy Alarm Free", "primaryGenreName":"Utilities", "primaryGenreId":6002, "releaseNotes":"- bug fix", "wrapperType":"software", "trackCensoredName":"Crazy Alarm Free", "languageCodesISO2A":["AR", "DE", "EN", "ES", "FR", "ID", "IT", "JA", "KO", "TH", "ZH"], "fileSizeBytes":"20393222", "sellerUrl":"http://iphone.cyscorpions.com", "formattedPrice":"Free", "contentAdvisoryRating":"4+", "averageUserRatingForCurrentVersion":4.0, "userRatingCountForCurrentVersion":4, "artworkUrl100":"http://a2.mzstatic.com/us/r1000/086/Purple/15/56/32/mzl.hvgckoaw.jpg", "trackViewUrl":"http://itunes.apple.com/us/app/crazy-alarm-free/id382249720?mt=8&u...", "trackContentRating":"4+", "averageUserRating":4.0, "userRatingCount":13}]
}
';
//$str=json_encode(trim($str),true);

//$var = json_decode($str,true, 512);
//var_dump($var); 

//$json = '{"averageUserRating":4.0, "userRatingCount":13}';
 /*
 //$json = '{"a":"1","b":2,"c":3,"d":4,"e":5}';
$var=json_decode($json, true);
$n_var = convertArray($var['results'][0]);
var_dump($var);

function convertArray($arr){
		$new_arr = array();
		foreach($arr as $key => $value){
			 if(is_array($value)){
			  convertArray($value);
			 }
			 else{
				if(is_numeric($value)) $value = "".$value;
			  $new_arr[$key] = $value;	 
			  	
			}	
		}
			return $new_arr;
}
*/

$input = array("1", "2", "3", "4", "5","6","7","8","9","10","11","12","13","14");
print_r(  array_slice($input, 1, 5, true));
print_r(  array_slice($input, 6, 10, true));
print_r(  array_slice($input, 11, 14, true));