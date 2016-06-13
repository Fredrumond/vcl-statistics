<table class="table tbl_geral">
  <thead>
    <tr>
      <td>Rodada</td>
      <td>Time</td>
      <td>Pontos</td>
      <td>Diferença de pontos</td>
    </tr>
  </thead>
  <tbody>
    <?php
      $crud=new CRUD;
      $lugar = 1;
      $pontos_t1 = 0;
      $pontos_t2 = 0;
      $sel=$crud->select('*,nome_time,Round(SUM(pontos_rodada),2) as total_pontos','rodadas','INNER JOIN times WHERE rodadas.time_rodada = times.id_time GROUP BY id_time ORDER BY total_pontos DESC',array());
      foreach($sel as $reg){
        ?>
        <tr>
          <td><?php print $lugar."º" ?></td>
          <td><a href='detalhes_individuais.php?&id=<?php echo $reg['id_time'];?>&total_pontos=<?php echo $reg['total_pontos'];?>'><?php print $reg['nome_time'] ?></a></td>
          <td><?php print $pontos_t1 = $reg['total_pontos'] ?></td>
        <?php
          if ($pontos_t2 != 0) {
              $pontos_t2 -= $pontos_t1;
          }

        ?>
        <td><?php print number_format($pontos_t2,2,",",".") ?></td>
        </tr>
        <?php
          $pontos_t2 = $pontos_t1;
          $lugar++;
        } ?>
  </tbody>
</table>
