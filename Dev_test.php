<?php
	
	
	require_once "SF_CLASS.php";



	echo SF::Get_User_Ip();
	echo SF::Get_Ip_Info("94.8.47.115");

	
	
    exit("<hr>123");


	sleep(5);

	//SF::File_Delete("filename.txt");
	SF::File_Clear("filename.txt");



    echo "End main";



	
	
?>