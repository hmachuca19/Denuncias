<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    include('include/client/config.php');
    $parent_cat = $_POST['centro'];
    $query = mysql_query("SELECT * FROM ost_Centros WHERE id= $parent_cat");
    echo '' ;
    while($row = mysql_fetch_array($query)) {
                echo "<option value='$row[id]'>$row[Direccion] </option>";
 		// echo "<option value= ". utf8_encode($row[Direccion])."></option>";
    }echo '';
?>






