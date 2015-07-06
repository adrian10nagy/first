<?php
  require 'modal.php';
  if(!isset($_GET['projectView'])){
    $projectView = 0;
  }else{
    $resursaCheckProject = $mysqli->query("select null from proiect where id_proiect='".$_GET['projectView']."'");
    if($resursaCheckProject->num_rows ==0 ){
      $projectView = 0;
    }else{
      $projectView = $_GET['projectView'];
    }
  }
?>
      <!-- Div col-xs-2 -->
      <div class="col-xs-6 col-sm-3 ">
        <div class="list-group">
          <div id='accordion'>   
            <h4 style="color:blue">Add new</h4>                 
              <div>
                <a href="Project/project.php">Project</a><br>
                <a href="#">People</a><br>
                <a href="#">Task</a><br>
              </div>             
              <h4>Projects</h4>                 
              <div>
                <a href="#">Active Tasks</a><br>
                <a href="#">Active Tasks</a><br>
                <a href="#">Active Tasks</a><br>
                <a href="#y">Active Tasks</a><br>
              </div>                           
              <h4>Human resouce</h4>                 
              <div>
                <a href="">Active Tasks</a><br>
                <a href="">Active Tasks</a><br>
              </div>
              <h4>Tasks</h4>   
              <div>
                <p>Active Tasks</p>
                <p>Active Tasks</p>
                <p>Active Tasks</p>
                <p>Active Tasks</p>                
              </div>
            <h4>Cevaaa</h4>                 
              <div>
                <p>Active Tasks</p>
              
              </div>            
            </div>
            
          </div>
      </div>
      <div id="divLoadPage">
      </div>

  