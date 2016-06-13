<?php

require_once ('../class/ConDB.class.php');
require_once ('../class/CRUD.class.php');
require_once ('../class/Rodada.class.php');

$time    = $_POST['time'];
$numero_rodada  = $_POST['numero_rodada'];
$pontos  = $_POST['pontos'];

$rodada = new Rodada;
$rodada->insere($numero_rodada,$time,$pontos);



header("Location: ../index.php");


?>