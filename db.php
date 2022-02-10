<?php

error_reporting(0);
$connect = mysqli_connect("localhost","root","") 
OR DIE("falha ao conectar servidor"); 
$db= mysqli_select_db($connect, "sistema")
 OR DIE("falha ao selecionar database") ;
?>