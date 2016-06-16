<?php
    /*error_reporting(E_ALL);
    ini_set('display_errors', '1');*/
	include('include/client/config.php');   
    $parent_cat = $_POST['municipio'];
    $query = mysql_query("SELECT * FROM ost_Centros WHERE Mun_id=$parent_cat order by Codigo");
    echo '' ;
    echo "<option value= 0 >-------------</option>";
    while($row = mysql_fetch_array($query)) {
         $str = mb_strtoupper( $row[Centro], 'utf-8' );
               //  echo "<option value='$row[id]'>$row[Codigo] | $row[Centro]</option>";
 		 echo "<option value='$row[id]'>$row[Codigo] | ". utf8_encode($str)."</option>";
    }echo '';
?>




