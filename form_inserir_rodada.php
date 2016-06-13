<h1>Frrmulario para rodada </h1>
<form method="POST" action="actions/inserir_rodada.php">
  <select id="time" name="time" >
              <option>Times</option>
              <?php     
              $crud=new CRUD;
              $sel=$crud->select('*','times','ORDER BY nome_time ASC',array());
              foreach($sel as $reg){
                ?>
                <option value="<?php print $reg['id_time'] ?>"><?php print $reg['nome_time'] ?></option>
                <?php }?>         
  </select>
  <span>Rodada</span>
  <input type="number" id="numero_rodada" name="numero_rodada">  
  <span>Pontos</span>
  <input type="text" id="pontos" name="pontos">
  <button class="btn btn-primary" type="submit" >Inserir</button>
</form>