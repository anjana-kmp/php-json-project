<?php
    $datafile = 'States.json';
    $file = fopen($datafile,'r');
    if($file != NULL || $file !=  false){
        echo 'Opened<br>';
        $filesize = filesize($datafile);
        echo 'Filesize ';
        echo $filesize;
        $filecontents = fread($file, $filesize);
        fclose($file);
        echo "$filecontents";
        
        echo '<h3>Display an input box to add states</h3>';
        echo '<form action="save.php"><input name =states/><br><button>Add</button></form>';
        print_r(array_values(json_decode($filecontents)->Maharashtra)) ;

        


    }else{
        echo 'File not found<br>';
    }

?>