<?php
	
	
	require_once "SF_CLASS.php";
	$SF_test = new SF();

    SF::Dir_Exist("123/12");


    exit("123");

	SF::File_Create("1/filename.txt");
	SF::File_Put("filename.txt" , "texttext");



	sleep(5);

	//SF::File_Delete("filename.txt");
	SF::File_Clear("filename.txt");



    echo "End main";



	
	
?>