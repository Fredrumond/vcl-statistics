<?php
require_once ('../class/ConDB.class.php');
require_once ('../class/CRUD.class.php');

$id = $_GET["id"];



$crd=new CRUD;
$sel=$crd->select('*','rodadas','WHERE id_rodada = '.$id.'',array());
;
foreach($sel as $reg){
	#print $reg['status'];
	var_dump($reg);
}
?>

<form  method="post" action="editar-rodada.php">
	<h1>Editar Rodada</h1>
	<input name="id" type="hidden" value="<?php print $reg['id_rodada']; ?>"/>	
	<input name="pontos_rodada" type="text"  value="<?php print $reg['pontos_rodada']; ?>" />	      
	<input  type="submit"  value="Atualizar" />
</form>


