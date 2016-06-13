<?php 
require_once ('../class/ConDB.class.php');
require_once ('../class/CRUD.class.php');
require_once ('../class/Time.class.php');

$nome_time     = $_POST['nome_time'];
$tecnico_time  = $_POST['tecnico_time'];

if (empty($nome_time) || empty($tecnico_time)) {  
  	echo"<script type='text/javascript'>";

		echo "alert('Por favor insira o nome e o tecnico do time!');location.href='../index.php'";

	echo "</script>";
}
else{
	$time=new Time;
	$time->insere($nome_time,$tecnico_time);

	echo"<script type='text/javascript'>";

		echo "alert('Time inserido com sucesso!');location.href='../index.php'";

	echo "</script>";	
}




#header("Location: ../index.php");


?>