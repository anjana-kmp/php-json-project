

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
        $ctr = 1;
        echo '<link rel="stylesheet" href="./style.css">';
        
        foreach(json_decode($filecontents)->Maharashtra as $st){
            echo "<li><form action='delete.php' method='POST'><ul><span>$st</span><input name=\"State".$ctr++."\" value=\"$st\" type=\"hidden\"><button class='btn'><i class='delete'/></button></ul></form></li>";
        }
        
        echo "$filecontents";
        
        echo '<h3>Display an input box to add states</h3>';
        echo '<form action="save.php" method="POST"><input name="states"><br><button>Add</button></form>';
    
    }else{
        echo 'File not found';
    }
    echo "<script>function show(item){  alert(item)     }</script>";
?>

