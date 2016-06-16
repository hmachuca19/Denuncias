<?php

    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    include('include/client/config.php'); 
    $parent_cat = $_POST['municipio'];
    $query = mysql_query("SELECT * FROM ost_Centros WHERE Mun_id= $parent_cat");
    echo '<select name = "Centros" id = "Centros">' ;
    while($row = mysql_fetch_array($query)) {
                 echo "<option value='$row[id]'>$row[Codigo] | $row[Centro]</option>";
    }echo '</select>';
?>






