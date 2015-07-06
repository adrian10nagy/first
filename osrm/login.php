<?php
require 'config.php';
	if(isset($_POST['loginSbt'])){
		$sqlQuery = "select * from utilizator where username_utilizator = '".$_POST['username']."' and parola_utilizator='".$_POST['password']."'";
		$resursaLogin = $mysqli->query($sqlQuery);
		if($resursaLogin->num_rows == 1){
			$rowLogin = $resursaLogin->fetch_object();
			$_SESSION['id_utilizator'] = $rowLogin->id_utilizator;
			$_SESSION['id_companie'] = $rowLogin->id_cpe;
			header("Location: index.php");
		}else{
			
		}
	}
?>

<html>
<head>
    <!-- Bootstrap -->
   	<title>Login</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
    <style type="text/css">

    </style>
</head>
<body>
	<img src="images/backgroungLogin.jpeg" id="imageBackground" alt="">
	<div id="divCenterPage">
		<div class="login">
			<?php
				if(isset($_POST['loginSbt'])){
					if($resursaLogin->num_rows != 1){
						echo "<p style='text-align:center; color:red; font-weight:bold; margin-top:11px;'>Incorrect username or password </p>";
					}
				}
			?>
			<form action="" method="post">
				<div class="inner-addon left-addon">
				    <i class="glyphicon glyphicon-user"></i>
				    <input type="text" class="form-control" name="username" placeholder="Utilizator/ email" id="username" />
				</div>
				<div class="inner-addon left-addon">
				    <i class="glyphicon glyphicon-chevron-right"></i>
				    <input type="password" name="password" placeholder="Parola" id="password" class="form-control" />
				</div>

				<a href="#" class="forgot">Am uitat parola?</a>
				<input type="submit" name="loginSbt" value="Loghează-te">
			</form>
		</div>
		<div class="shadow"></div>
	</div>
</body>
</html>