<?php
	
	
	require_once "SF_CLASS.php";



	SF::File_Create("filename.txt");
	SF::File_Put("filename.txt" , "text_text");

	exit("123");


	sleep(5);

	//SF::File_Delete("filename.txt");
	SF::File_Clear("filename.txt");



    echo "End main";



	
	
?>