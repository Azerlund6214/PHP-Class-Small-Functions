<?php
	
	
	require_once "SF_CLASS.php";


	function test($a=123)
    {

        SF::Echo_Call_Stack( true );

    }

test("12345");

exit("123");


	sleep(5);

	//SF::File_Delete("filename.txt");
	SF::File_Clear("filename.txt");



    echo "End main";



	
	
?>