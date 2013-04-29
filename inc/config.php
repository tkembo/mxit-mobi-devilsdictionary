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
	$hostname_mxit_devilsdictionary = "mxitdevilsdictionary.cinsddkh5wyt.us-east-1.rds.amazonaws.com";
	$database_mxit_devilsdictionary = "mxit_devilsdictionary";
	$username_mxit_devilsdictionary = "tkembo";
	$password_mxit_devilsdictionarys = "tenfeb1987";
	$mxit_devilsdictionary = mysql_pconnect($hostname_mxit_devilsdictionary, $username_mxit_devilsdictionary, $password_mxit_devilsdictionarys) or trigger_error(mysql_error(),E_USER_ERROR); 
	
?>