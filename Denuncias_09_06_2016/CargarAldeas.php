<?php
      
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    include('include/client/config.php');
    $parent_cat = $_POST['municipio'];    
    $query = mysql_query("SELECT * FROM ost_Ald WHERE Mun_id= $parent_cat");    
    echo '' ;    
    echo "<option value= 0 >-------------</option>";
    while($row = mysql_fetch_array($query)) {
    		$str = mb_strtoupper( $row[Descripcion_Aldea], 'utf-8' );
            echo "<option value='$row[id]'>$row[cod_Aldea] | ". utf8_encode($str)."</option>";
    }echo '';
?>



