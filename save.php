<?php
    $myvar = 'States.json';
    $filecontent = json_decode(file_get_contents($myvar));
    $states = $filecontent->Maharashtra;
    $gotvars = $_POST["states"];
    echo $gotvars;
    if(file_exists($myvar)){
        $file = fopen($myvar,'w');
        if(!in_array($gotvars,$states)){
            array_push($states,$gotvars);
            $canpush = true;
            foreach($states as $st){
                if(in_array($st,)){
                    
                }
            }
        }
       
        $filecontent->Maharashtra=$states;
        fwrite($file,json_encode($filecontent));
        fclose($file);
        header('location:index.php');
    } 
?>