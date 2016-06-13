<h1>Tabela de times </h1>
<table class="table">
  <tr>
    <td>Time</td>
    <td>Tecnico</td>
    <td>Ações</td>
  </tr>

  <?php     
    $crud=new CRUD;                                                                    
    $sel=$crud->select('*','times','',array());
    foreach($sel as $reg){ 
      ?>
      <tr>
        <td><?php print $reg['nome_time'] ?></td>
        <td><?php print $reg['tecnico_time'] ?></td>
        <td>
          <a href='actions/form-editar-time.php?&id=<?php echo $reg['id_time'];?>' class="glyphicon glyphicon-wrench" ></a>
          <a href='actions/deleta-time.php?&id=<?php echo $reg['id_time'];?>' class="glyphicon glyphicon-remove" ></a>
        </td>        
      </tr>
      <?php } ?>
</table>