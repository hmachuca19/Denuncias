<?php

    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    include('include/client/config.php'); 
    $parent_cat = $_POST['departamento'];
    $query = mysql_query("SELECT * FROM ost_Mun WHERE dep_id= $parent_cat");
    echo '' ;
    echo "<option value= 0 >-------------</option>";
    while($row = mysql_fetch_array($query)) {
    		$str = mb_strtoupper( $row[descripcion_municipio], 'utf-8' );
                 echo "<option value='$row[id]'>$row[cod_Mun] | ". utf8_encode($str)."</option>";
    }echo '';
?>

