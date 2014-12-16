<?php 

if(array_key_exists('qt_index',$_GET) && array_key_exists('machine_name',$_GET))
    setcookie ($_GET['machine_name'], $_GET['qt_index']);
?>
