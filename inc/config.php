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
	$hostname_mxit_devilsdictionary = "us-cdbr-azure-west-b.cleardb.com";
	$database_mxit_devilsdictionary = "mxitdevilsdictionary";
	$username_mxit_devilsdictionary = "b5799a500e83b2";
	$password_mxit_devilsdictionarys = "8f65b047";
	$mxit_devilsdictionary = mysql_pconnect($hostname_mxit_devilsdictionary, $username_mxit_devilsdictionary, $password_mxit_devilsdictionarys) or trigger_error(mysql_error(),E_USER_ERROR); 
	
?>