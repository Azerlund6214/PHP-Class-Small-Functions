<?php
	
	
	require_once "SF_CLASS.php";
	$SF_test = new SF();
	
	
	echo "Демо для SF_CLASS.php";
	
	
	echo 'SF::PRINTER( Array("123","12") ); - Выведет любую переменную в читаемом виде';
	SF::PRINTER( Array("123"=>["1","2"],"12") , "print_r" , "Описание print_r" );
	SF::PRINTER( Array("123"=>["1","2"],"12") , "var_dump" , "Описание var_dump" );
	SF::PRINTER( "123456" , "var_dump" );
	
	echo 'SF::Print_Class_Func_and_Vars($SF_test); - Выведет Все методы и поля класса';
	SF::Print_Class_Func_and_Vars($SF_test);
	
	echo 'SF::Memory_Usage_EchoGet("M","Echo"); - Данные об использовании памяти';
	SF::Memory_Usage_EchoGet("M","Echo");
	SF::Memory_Usage_EchoGet("K","Echo");
	SF::Memory_Usage_EchoGet("K","Echo", false , true);
	
	echo '<hr>SF::Echo_This_File_Path(); - Путь до текущего файла<br>';
	SF::Echo_This_File_Path();
	
	echo '<hr>SF::Get_This_Server_Domain(true,true,"213"); - Домен этого сервера';
	echo "<br>" . SF::Get_This_Server_Domain(true,true);
	echo "<br>" . SF::Get_This_Server_Domain(false,true);
	echo "<br>" . SF::Get_This_Server_Domain(true,false);
	echo "<br>" . SF::Get_This_Server_Domain(false,false);
	
	echo '<hr>SF::PRINTER( SF::Get_HTTP_Response("https://www.php.net/") ); - Получить код ответа сервера';
	SF::PRINTER( SF::Get_HTTP_Response("https://www.php.net/") );
	
	echo '<hr>SF::PRINTER( SF::Get_Server_Headers("https://www.php.net/") ); - Получить заголовки сервера';
	SF::PRINTER( SF::Get_Server_Headers("https://www.php.net/") );
	
	
	
	
?>