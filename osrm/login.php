<?php
require 'config.php';
	if(isset($_POST['loginSbt'])){
		$sqlQuery = "select * from utilizator where username_utilizator = '".$_POST['username']."' and parola_utilizator='".$_POST['password']."'";
		echo $sqlQuery;
		$resursaLogin = $mysqli->query($sqlQuery);
		if($resursaLogin->num_rows == 1){
			$rowLogin = $resursaLogin->fetch_object();
			$_SESSION['id_utilizator'] = $rowLogin->id_utilizator;
			header("Location: index.php");
		}else{
			echo "ERoareee";
		}
	}
?>

<html>
<head>
    <!-- Bootstrap -->
   	<title>Login</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
</head>
<body>
	<img src="images/backgroungLogin.jpeg" id="imageBackground" alt="">
	<div id="divCenterPage">
		<div class="login">
			<form action="" method="post">
			    <input type="text" name="username" placeholder="Utilizator/ email" id="username">  
				<input type="password" name="password" placeholder="Parola" id="password">  
				<a href="#" class="forgot">Am uitat parola?</a>
				<input type="submit" name="loginSbt" value="Loghează-te">
			</form>
		</div>
		<div class="shadow"></div>
	</div>
</body>
</html>