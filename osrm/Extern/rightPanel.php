<!DOCTYPE html>
    <div class="rightPanel col-sm-2 col-xs-4 hidden-sm hidden-xs">
      <a href="#" class="aNoDecoration"><div class="rightPanelField ">
        <i class="glyphicon glyphicon-plus"></i>
         Add new task
      </div></a>
      <?php
        $sqlTasks = "Select * from task, utilizator, proiect
         where task.id_utr_atribuire_task= utilizator.id_utilizator and proiect.id_proiect = task.id_pct
            AND proiect.id_cpe=".$_SESSION['id_companie']." limit 0,20";
        $resursaTasks = $mysqli->query($sqlTasks);
        while ($rowTasks = $resursaTasks->fetch_object()) {
          echo "<div class='rightPanelField'><b>".
          $rowTasks->denumire_task." </b><p>".$rowTasks->descriere_task."</p>"
          ."</div>";
        }
      ?>
    </div>

