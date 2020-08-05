<?php
    
    
    
    require_once "SF_CLASS.php";
    
    $arr_info = SF::Get_Ip_Info(SF::Get_User_Ip());
    # $arr_info = SF::Get_Ip_Info("213.32.43.12");

    //SF::PRINTER($arr_info);
    
    
    $file_name = "IP_Log.txt";
    
    if( is_string($arr_info))
    {
        SF::File_Put($file_name, $arr_info);
        exit("Была ошибка в запросе - выход");
    }
    //exit;
    
    SF::File_Put($file_name, "=== BEGIN ===");
    SF::File_Put($file_name, "= ".SF::Get_DateTime()." =");

    
    foreach ($arr_info as $key=>$val)
    {
        $string = "$key => $val";
        
        SF::File_Put($file_name, $string);
        
    }
    
    SF::File_Put($file_name, "=== END ===");
    
    


    


    echo "End main. Все";



    
    
?>