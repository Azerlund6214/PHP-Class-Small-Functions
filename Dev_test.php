<?php
    
    
    require_once "SF_CLASS.php";

    echo date("");
    
    exit;


    echo SF::Get_User_Ip();
    //$arr_info = SF::Get_Ip_Info(SF::Get_User_Ip());
    $arr_info = SF::Get_Ip_Info("213.32.43.12");

    SF::PRINTER($arr_info);
    
    if( is_string($arr_info))
        SF::File_Put("123.txt", $arr_info);
        
    //exit;
    
    SF::File_Put("123.txt", "=== BEGIN ===");
    SF::File_Put("123.txt", "=== ".date()." ===");

    
    foreach ($arr_info as $key=>$val)
    {
        $string = "$key => $val";
        
        SF::File_Put("123.txt", $string);
        
    }
    
    SF::File_Put("123.txt", "=== END ===");
    
    
    exit("<hr>123");


    sleep(5);

    //SF::File_Delete("filename.txt");
    SF::File_Clear("filename.txt");



    echo "End main";



    
    
?>