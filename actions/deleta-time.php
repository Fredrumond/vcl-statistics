<?php
require_once ('../class/ConDB.class.php');
require_once ('../class/CRUD.class.php');
require_once ('../class/Time.class.php');


$id_time = $_GET["id"];

var_dump($id_time);


$time=new Time;
$time->deleta($id_time);

header("Location: ../index.php");

?>
