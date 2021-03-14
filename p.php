<?php
 include 'ip.php';
 $location_link=$_GET["location_link"];
 $file=fopen("save.txt","a+");
 fwrite($file,$location_link);
 fcolse($file);
?>