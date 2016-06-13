<?php
require_once ('../class/ConDB.class.php');
require_once ('../class/CRUD.class.php');

$id = $_GET["id"];



$crd=new CRUD;
$sel=$crd->select('*','times','WHERE id_time = '.$id.'',array());
;
foreach($sel as $reg){
	#print $reg['status'];
	var_dump($reg);
}
?>

<form  method="post" action="editar-time.php">
	<h1>Editar Jogador</h1>
	<input name="id" type="hidden" value="<?php print $reg['id_time']; ?>"/>
	<input name="nome_time" type="text"  value="<?php print $reg['nome_time']; ?>" />
	<input name="tecnico_time" type="text"  value="<?php print $reg['tecnico_time']; ?>" />	      
	<input  type="submit"  value="Atualizar" />
</form>


