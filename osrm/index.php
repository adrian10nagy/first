<!DOCTYPE html>
<?php
  require 'config.php';
  require 'autorizare.php';
?>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>Fixed Top Navbar Example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/index.css" rel="stylesheet">
    <link rel="stylesheet" href="css/smoothness/jquery-ui.css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="bootstrap/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css"></style>
  </head>

  <body>

    <!-- Fixed navbar -->
    <?php
      include 'Extern/navbar.php';
    ?>

    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="row">
        <div class="col-xs-4 col-md-3">
          <div class="thumbnail">
            <img src="images/task.png" alt="...">
            <div class="caption">
              <h3>Tasks</h3>
              <p>See, manage, add Tasks</p>
              <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
            </div>
          </div>
        </div>
        <div class="col-xs-4 col-md-3">
          <div class="thumbnail">
            <img src="images/project.png" alt="...">
            <div class="caption">
              <h3>Projects</h3>
              <p>See, manage, add projects</p>
              <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
            </div>
          </div>
        </div>
        <div class="col-xs-4 col-md-3">
          <div class="thumbnail">
            <img src="images/user.png" alt="...">
            <div class="caption">
              <h3>Memebers</h3>
              <p>See, manage, add Members</p>
              <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
     <script src="js/jqueryui/jquery-ui.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap/js/ie10-viewport-bug-workaround.js"></script>
    <script src="js/index.js"></script>
    <script>
    $( "#accordion" ).accordion({ heightStyle: "content"});
  </script>

</body></html>