<h1>Tabela por rodada </h1>
<table class="table">
  <tr>
    <td>Posição</td>
    <td>Time</td>
    <td>Pontos</td>
  </tr>

  <?php     
    $crud=new CRUD;
    $lugar = 1;
    $id = 3;
    $pontos = array();
    #SELECT *,nome_time FROM rodadas INNER JOIN times WHERE rodadas.time_rodada = times.id_time AND numero_rodada = 1 ORDER BY pontos_rodada DESC
    $sel=$crud->select('*,nome_time','rodadas','INNER JOIN times WHERE rodadas.time_rodada = times.id_time AND numero_rodada = '.$id.' ORDER BY pontos_rodada DESC ',array());
    foreach($sel as $reg){ 
      ?>
      <tr>
        <td><?php print $lugar."º" ?></td>
        <td><?php print $reg['nome_time'] ?></td>
        <td><?php print $reg['pontos_rodada'] ?></td>
        <td><a href='actions/form_editar_rodada.php?&id=<?php echo $reg['id_rodada'];?>' class="glyphicon glyphicon-wrench" ></a></td>
      </tr>
      <?php
        array_push($pontos, $reg['pontos_rodada']);
        $media = array_sum($pontos) / count($pontos);
        $lugar++;
      } ?>
</table>

<h1>Media da rodada</h1>
<table class="table">
  <tr>
    <td>Pontuação media</td>
  </tr>
  <tr>
    <td><?php print number_format($media,2,",",".")  ?></td>
  </tr>
</table>