    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header"> 
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo "$urlPath";?>index.php">OSRM</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="http://getbootstrap.com/examples/navbar-fixed-top/#">Manage</a></li>
            <li><a href="http://getbootstrap.com/examples/navbar-fixed-top/#about">Tasks</a></li>
            <!-- Projects -->
            <li class="dropdown">
              <a href="http://getbootstrap.com/examples/navbar-fixed-top/#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Projects <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <?php
                    $resursaProjects = $mysqli->query("select * from proiect where id_cpe = ".$_SESSION['id_utilizator']);
                    while($rowProjects = $resursaProjects->fetch_object()) {
                      echo "<li><a href='$urlPath"."Project/project.php?projectView=".$rowProjects->id_proiect."''>".$rowProjects->denumire_proiect."</a></li>";
                    }
                ?>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="http://getbootstrap.com/examples/navbar-fixed-top/#">Add new + </a></li>
                <?php echo "<li><a href='$urlPath"."Project/project.php?projectView=0'>All projects</a></li>";  ?>
              </ul>
            </li>
            <!-- Tasks -->
            <li class="dropdown">
              <a href="http://getbootstrap.com/examples/navbar-fixed-top/#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tasks <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="http://getbootstrap.com/examples/navbar-fixed-top/#">Action</a></li>
                <li><a href="http://getbootstrap.com/examples/navbar-fixed-top/#">Another action</a></li>
                <li><a href="http://getbootstrap.com/examples/navbar-fixed-top/#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="http://getbootstrap.com/examples/navbar-fixed-top/#">Separated link</a></li>
                <li><a href="http://getbootstrap.com/examples/navbar-fixed-top/#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Setari</a></li>
            <?php echo "<li class='active'><a href='$urlPath"."Extern/logout.php'>Log Out<span class='sr-only'>(current)</span></a></li>";  ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <?php
      // right panel
      require 'rightPanel.php';
      // left panel
      require 'leftPanel.php';
      require 'modal.php';
    ?>


