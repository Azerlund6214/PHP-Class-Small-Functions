<?php
	
	
	require_once "SF_CLASS.php";
	$SF_test = new SF();
	
	SF::File_Create("filename.txt");
	SF::File_Put("filename.txt" , "texttext");

	sleep(5);

	//SF::File_Delete("filename.txt");
	SF::File_Clear("filename.txt");



    echo "End main";



	
	
?>