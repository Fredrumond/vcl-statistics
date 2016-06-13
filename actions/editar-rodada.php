<?php
require_once ('../class/ConDB.class.php');
require_once ('../class/CRUD.class.php');
require_once ('../class/Rodada.class.php');


$id_rodada   = $_POST["id"];
$pontos_rodada = $_POST['pontos_rodada'];


$rodada=new Rodada;
$rodada->edita($pontos_rodada,$id_rodada);

header("Location: ../index.php");

?>
