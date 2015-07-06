<!DOCTYPE html>
<?php
  require '../config.php';
  require '../autorizare.php';
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
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/index.css" rel="stylesheet">

    <!-- Smoothness css jquery ui -->
    <link rel="stylesheet" href="../css/smoothness/jquery-ui.css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../bootstrap/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css"></style>
  </head>

  <body <?php if($projectView==0){ ?> onload="loadExternalPage('team',0)" <?php  } ?> >
    <!-- Fixed navbar -->
    <?php
      include '../Extern/navbar.php';
      /*

            <a href="#" class="list-group-item" onclick="loadExternalPage('overall',  <?php echo $projectView; ?>);return false;">Overall State</a>
            <a href="#" class="list-group-item" onclick="loadExternalPage('team',  <?php echo $projectView; ?>);return false;">The Team</a>
            <a href="#" class="list-group-item" onclick="loadExternalPage('issues',<?php echo $projectView; ?>);return false;">Active Tasks</a>
            <a href="#" class="list-group-item" onclick="loadExternalPage('test', <?php echo $projectView; ?>);return false;">Closed Tasks</a>
      */
    ?>

    <!-- Div to choose a project if is bnot set -->


      <!-- Main component for a primary marketing message or call to action -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../bootstrap/js/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
     <script src="../js/jqueryui/jquery-ui.js"></script>
    <script src="../js/index.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../bootstrap/js/ie10-viewport-bug-workaround.js"></script>
</body></html>