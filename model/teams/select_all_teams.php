<?php
require_once ('../../class/ConDB.class.php');
require_once ('../../class/CRUD.class.php');

$times = new CRUD;

$sel=$times->select('*,nome_time,Round(SUM(pontos_rodada),2) as total_pontos',
                    'rodadas',
                    'INNER JOIN times
                    WHERE rodadas.time_rodada = times.id_time
                    GROUP BY id_time
                    ORDER BY total_pontos DESC',array());

foreach($sel as $reg){
	$array_times[] = $reg;
}

echo json_encode(array('time' => $array_times));

?>
