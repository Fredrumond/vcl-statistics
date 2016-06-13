<?php
require_once ('class/ConDB.class.php');
require_once ('class/CRUD.class.php');
require_once ('includes/header/header.php');

$id = $_GET["id"];
$total_pontos = $_GET["total_pontos"];


$crd=new CRUD;
#SELECT *,MAX(pontos_rodada) as maximo,MIN(pontos_rodada) as minimo FROM times INNER JOIN rodadas WHERE rodadas.time_rodada = times.id_time and id_time = 1
$sel=$crd->select('*','times','INNER JOIN rodadas WHERE rodadas.time_rodada = times.id_time and id_time = '.$id.'',array());

?>

<table class="table">
  <tr>
    <td>Rodada</td>
    <td>Pontos</td>
  </tr>
  <?php
  $rodada = 0;
  $pior_rodada = 0;
  $melhor_rodada = 0;
  $pontos = 0;
  $lista_pontos = array();
  foreach($sel as $reg){
  ?>
  <tr>
	<td><h5><?php print $rodada = $reg['numero_rodada']; ?></h5></td>
	<td><h5><?php print $pontos = $reg['pontos_rodada']; ?></h5></td>
  </tr>
<?php	
	array_push($lista_pontos, $pontos);
}
?>
 </table>

<h1><?php print $reg['nome_time']; ?></h1>
<h5><?php print $reg['tecnico_time']; ?></h5>
<h5><?php print $total_pontos; ?></h5>

<table class="table">
	<tr>
		<td>Pior Rodada</td>
		<td>Melhor Rodada</td>
	</tr>
	<tr>
		<td><?php print $pior_rodada = min($lista_pontos); ?></td>
		<td><?php print $melhor_rodada = max($lista_pontos); ?></td>
	</tr>
</table>

<h1>COMPARAR COM CADA TIME</h1>
<table class="table">
	<tr>
		<td>Adversario</td>
		<td>Diferença</td>
	</tr>
	<?php 

    $sel=$crd->select('*,nome_time,Round(SUM(pontos_rodada),2) as total_pontos','rodadas','INNER JOIN times WHERE rodadas.time_rodada = times.id_time GROUP BY id_time ORDER BY total_pontos DESC',array());
    foreach($sel as $reg){
    	$dif = $total_pontos - $reg['total_pontos'];
    	if($id != $reg['id_time']){ 
      ?>
      <tr>        
        <td><?php print $reg['nome_time'] ?></td>
        <td><?php print $dif ?></td>
      </tr>     
      <?php
      	}      
    } ?>
</table>


