<?php
	
	//Configuration for Shinka Banners
	$config = array('AdUnitID_320'  => '388384',
                    'RESIZE_IMAGES' => TRUE,
                    'REFERER'       => 'devilsdictionary',
                    'TESTUSER'      => 'tkembo');
	
	//Configuration for Google Analytics
	$GA_ACCOUNT = "MO-28800751-1";
	$GA_PIXEL = "ga.php";
	
	//DB Settings
	$hostname_mxit_devilsdictionary = getenv('DB_HOST');
	$database_mxit_devilsdictionary = getenv('DB_NAME');
	$username_mxit_devilsdictionary = getenv('DB_USER');
	$password_mxit_devilsdictionarys = getenv('DB_PASS');
	$mxit_devilsdictionary = mysql_pconnect($hostname_mxit_devilsdictionary, $username_mxit_devilsdictionary, $password_mxit_devilsdictionarys) or trigger_error(mysql_error(),E_USER_ERROR); 
	
?>