

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
        echo '<link rel="stylesheet" href="./style.css">';
        echo "<ul>";
        foreach(json_decode($filecontents)->Maharashtra as $st){
            echo "<li><span>$st</span><i class='delete' onclick='show(".json_encode($st).")'></i></li>";
        }
        echo "</ul>";
        echo "$filecontents";
        
        echo '<h3>Display an input box to add states</h3>';
        echo '<form action="save.php" method="POST"><input name="states"><br><button>Add</button></form>';
    
    }else{
        echo 'File not found';
    }
    echo "<script>function show(item){  alert(item)     }</script>";
?>

