<?php
	
	echo "<br><font size=3 color=MediumVioletRed> Объявлен трейт </font> => <font color=blue> Мелкие функции.</font>";

	trait T_Small_Func  ### SF
	{
	
	
		### Склейка строк из массива в одну
		function SF__Combine_Strings( &$Input , $Separator = "###"  )
		{
			#echo "<br>Заход в " , __FUNCTION__;
			
			
			$Union_Str = "";
			
			foreach( $Input as $One_Str )
			{	
				if ( $Union_Str === "" ) ### 1 Элемент
					$Union_Str.= $One_Str;
				else
					if( $One_Str != "" ) ### Пропуск пустых
						$Union_Str.= $Separator.$One_Str;
	
			}
		
			$Input = $Union_Str;

		} ### END func union
		
		
		### Массив строк  или  строка
		function SF__ERASE_ONE_SUMB( &$array , $Sumb )
		{
			### Принимает сразу массив ИЛИ строку
			$array = str_replace( $Sumb , " " , $array);
		}
	
	
		# Работает
		### array_walk( $ARR , "SF__TRIM" );
		function SF__TRIM( &$array )
		{
			if( is_string( $array ) )
				$array = trim($array);
		
			if( is_array( $array ) )
				foreach( $array as &$item )
					$item = trim($item);
		
		}
	
		### Работает
		function SF__CONVERT_ENCODING( &$array , $Current_Encode , $Target_Encode = null)
		{	
			if( $Target_Encode === null )
				$Target_Encode = $this -> CNST_target_text_encode;
		
			if( is_string( $array ) )
				$array = mb_convert_encoding(  $array , $Target_Encode , $Current_Encode );
		
			if( is_array( $array ) )
				foreach( $array as &$item )
					$item = mb_convert_encoding(  $item , $Target_Encode , $Current_Encode );
		}
	
	
	
	
	
		### G M K B
		function SF__Echo_Memory_Usage( $val = "M" , $Real = false)
		{
			$MSG = "Сейчас занято памяти";
			
			$ram = memory_get_usage($Real);
			
			switch( $val )
			{
				case "G": 	echo "<br>$MSG ГБайт: ".(double)$ram/1024/1024/1024; break;
				case "M": 	echo "<br>$MSG МБайт: ".(double)$ram/1024/1024; break;
				case "K": 	echo "<br>$MSG КБайт: ".(double)$ram/1024; break;
				case "B": 	echo "<br>$MSG Байт : ".(double)$ram; break;				
			}

		}
		
		### G M K B
		function SF__Get_Memory_Usage( $val = "M" , $Peak = false , $Real = false)
		{
			
			$ram = 0;
			
			if( $Peak )
				$ram = memory_get_peak_usage($Real);
			else
				$ram = memory_get_usage($Real);
			
			
			switch( $val )
			{
				
				case "G": 	return (double)$ram/1024/1024/1024; break;
				case "M": 	return (double)$ram/1024/1024; break;
				case "K": 	return (double)$ram/1024; break;
				case "B": 	return (double)$ram; break;
				
			}
		
		}
	
	
	
	
	
	
	
	
	
		### print_r / var_dump
		function SF__Print( $ARR , $MODE = "print_r" )
		{
			echo "<hr color=red>"; 
			echo "<pre>";
		
			switch( $MODE )
			{
				case "print_r": 
								print_r( $ARR );
								break;
				case "var_dump":
								var_dump( $ARR );
								break;
				default: echo "SF__Print: Дефолт";  break;
			}
		
		
		
		
			echo "</pre>";
			echo "<hr color=red>"; 			
		}
	
		
		
		
		
		### ЗАКОНЧЕНО
		# Класс + трейты = $this
		# Только трейт = "T_Small_Func" (как в use) # Без ковычек выдест Notice, но выведет
		# Anychar , FUNC , VARS
		function SF__Print_Func_and_Vars( $target='Main_class' , $what="any char")
		{
			unset( $this->SHD_Current_HTML );
			echo "<br>Сделан UNSET SHD_Current_HTML !";
			
			echo "<pre>";
			
			echo "<hr color=red>"; 
			echo "<hr color=red>"; 
			
			switch( $what )
			{
				case "FUNC":
					echo "<hr>Все методы класса:";
					print_r( @get_class_methods( $target ) );
					break;
					
				case "VARS":
					echo "<hr>Все ПОЛЯ класса:"; 
					print_r( @get_object_vars( $this ) );
					break;
					
				default:
						echo "<hr>Все методы класса:";
						print_r( @get_class_methods( $target ) );
						echo "<hr color=blue>Все ПОЛЯ класса:"; 
						print_r( get_object_vars( $this ) );
			}
			
			echo "<hr color=red>"; 
			echo "<hr color=red>"; 
	
			echo "</pre>";
		}
	
	
	}### end treit

	
	
	
	######################################
	# Юзлесс, но должно быть тут
	
	// Вывод массива
	/*
	### Нормальный вывод
	function func_all_debug($vars , $debug_mode = FALSE , $description_all="Не задано" , $description_custom = NULL) 
	{
		
		### Для отмены через define
		if ( ! $debug_mode )
			return;

		echo DEBUG_MIAN_BORDER;
		echo "<pre>";
			
		echo "<br>Общее описание: $description_all <br><br>";
		
		for ( $f=0 ;  $f != count($vars)  ; $f++ )
		{
			### Заполняем пустые пописания
			if ( @$description_custom[$f] == "" ) ### @ тк если описания нет, выпадет ошибка
				 $description_custom[$f] = " Не задано "; 
		
			echo DEBUG_SIMPLE_BORDER; ### Разделитель если выводов много
			
			### echo "Описание: ".$description_custom[$f]." <br>";
			
			if ( $debug_mode == "print_r")
				print_r($vars[$f]);
			else
			if ( $debug_mode == "var_dump")
				var_dump($vars[$f]);
		}
		
		echo "</pre>";
		echo DEBUG_MIAN_BORDER;
		
	}
	
	
	*/
	
	
	//Обратный отсчет
	/*
	define ( "DEBUG_MIAN_BORDER" , "<hr color=red>" );
	define ( "DEBUG_SIMPLE_BORDER" , "<hr>" );
	###define ( "DEBUG_MIAN_BORDER" , "<font size=5 color=red> ###debug### </font>" );
	
	#func_all_debug(array( $maps_str , $maps_separator) , DEBUG_MODE_VD , "Приход из формы" , array("maps_str","maps_separator",""));	
	#1 000 000 Мс = 1с	 
	###универсальный обратный отсчет
	### Аргументы:
	### time_sec  => Время ожидания
	### time_step => Шаг вывода оставшегося времени
	### text_beg  => Текст(или теги) перед числом
	### text_end  => Текст(или теги) после числа
	function UNIV_countdown( $time_sec = 3 , $time_step = 1 , $text_beg = "" , $text_end = "" )	 
	{
		###Перевод в Msec
		$time_msec = $time_sec * 1000000;
		$time_step_msec = $time_step * 1000000;
		
		
		for ( $remained_m = $time_msec     ;    $remained_m > 0    ;     $remained_m -= $time_step_msec )
		{	
			
			### Перевод в секунды для нормального вывода
			$remained_s = $remained_m / 1000000;
			echo $text_beg . $remained_s . $text_end;

			
			usleep($time_step_msec);
		}

		### Чтобы писал 0 в конце
		echo $text_beg."0".$text_end;
		
	}
	*/
	
	
	
	
	
	
	
	
?>