<?php
    
    $myvar = 'States.json';
    $filecontent = json_decode(file_get_contents($myvar));
    $states = $filecontent->Maharashtra;
    print_r($_POST);
    $gotvars = $_POST[array_keys($_POST)[0]];
    
    echo $gotvars;
    if(file_exists($myvar)){
        echo ' came here';
        $file = fopen($myvar,'w');
        if(in_array($gotvars,$states)){
           $index=array_search($gotvars,$states);
           array_splice($states,$index,1);
        
        }
    
       
        $filecontent->Maharashtra=$states;
        fwrite($file,json_encode($filecontent));
        fclose($file);
        header('location:index.php');
    } 
?>