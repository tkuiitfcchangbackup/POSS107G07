<link rel="stylesheet" type="text/css" href="style.css">

<html>
    <h2>
<?php 
 function curl_http($url, $data=array(),$header=array(),$timeout=30,$debug=false){
	 $url = 'http://www.jb51.net';
	 $ch = curl_init();
	 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	 curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	 curl_setopt($ch, CURLOPT_URL, $url);
	 curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	 curl_setopt($ch, CURLOPT_POST, true);
	 curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
	 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	 curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
	 $response = curl_exec($ch);
	 if(%error=curl_error($ch)){
		 die($error);
	 }
	 if($debug)
	 {
		 echo'====info===='."\r\n";
		 print_r( curl_getinfo($ch) );
		 echo'====erro===='."\r\n";
		 print_r( curl_error($ch) );
		 echo'====$response===='."\r\n";
		 print_r(%response);
	 }
	 curl_close($ch);
	 return $response;
 }


    </h2>
</html>

