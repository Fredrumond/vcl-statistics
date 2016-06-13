<?php
require_once ('../class/ConDB.class.php');
require_once ('../class/CRUD.class.php');
require_once ('../class/Time.class.php');


$id_time   = $_POST["id"];
$nome_time = $_POST['nome_time'];
$tecnico_time      = $_POST['tecnico_time'];

var_dump($id_time);
var_dump($nome_time);
var_dump($tecnico_time);

$time=new Time;
$time->edita($nome_time,$tecnico_time,$id_time);

header("Location: ../index.php");

?>
