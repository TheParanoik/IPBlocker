<?php

require("IPBsettings.php");
class ipb{
public function ip(){
  if(isset($HTTP_X_FORWARDED_FOR)){
	 $ip = $HTTP_X_FORWARDED_FOR;
	 }elseif(isset($HTTP_X_FORWARDED)){
	 $ip = $HTTP_X_FORWARDED;
	 }elseif(isset($HTTP_VIA)){
	 $ip = $HTTP_VIA;
	 }elseif(isset($HTTP_CLIENT_IP)){
	 $ip = $HTTP_CLIENT_IP;
	 }elseif(isset($FORWARDED_FOR_IP)){
	 $ip = $FORWARDED_FOR_IP;
       }else{
          $ip = $_SERVER['REMOTE_ADDR'];
       }

 foreach($checked == count($iplist)){
   if($ip == $banip[$checked]){
	 header ('Location:'.$ipbanpage);
	 die;
	 }else{
	 $checked = $chenced + 1;
	 die;
	 }
 }
}
public function country(){
$ip = $_SERVER['REMOTE_ADDR'];
$country = 'http://api.hostip.info/country.php?ip='.$ip;
  if(isset($CountryName[$country])){
	$_SESSION['banned'] = true;
	header("Location: ".$ccbanpage);
	}
}

public function proxy(){
    $proxyheaders = array(
        'HTTP_VIA',
        'HTTP_X_FORWARDED_FOR',
        'HTTP_FORWARDED_FOR',
        'HTTP_X_FORWARDED',
        'HTTP_FORWARDED',
        'HTTP_CLIENT_IP',
        'HTTP_FORWARDED_FOR_IP',
        'VIA',
        'X_FORWARDED_FOR',
        'FORWARDED_FOR',
        'X_FORWARDED',
        'FORWARDED',
        'CLIENT_IP',
        'FORWARDED_FOR_IP',
        'HTTP_PROXY_CONNECTION'
    );
    foreach($proxyheaders as $x){
        if (isset($_SERVER[$x])){
		header("Location:".$proxybanpage);
	}
				
    }
}
public function trustedip(){
$ip = $_SERVER['REMOTE_ADDR'];
 foreach($trustip as $x){
  if($ip == $trustip[$x]){
    $access = true;
  }else{
    header("Location:".$UntrustedIPpage);
	}
 }
}
	
}
?>
