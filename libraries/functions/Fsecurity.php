<?php 

 	function AES256($string,$action){
	  $secret_key = "f4C!n5t1T0et";
	  $secret_iv = "FAC_INST_Secret_iv";

	  $output = false;
	  $encrypt_method = "AES-256-CBC";
	  $key = hash('sha256',$secret_key);
	  $iv = substr(hash('sha256', $secret_iv), 0,16);
	  if ($action=='e') {
	    $output = base64_encode(openssl_encrypt($string, $encrypt_method, $key,0,$iv));
	  }elseif ($action=='d') {
	    $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key,0,$iv);
	  }
	  return $output;
	}