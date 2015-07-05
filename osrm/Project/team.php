<?php
  	require '../config.php';
  	if($_GET['id'] != 0){
  		$sqlTeam = "select * from utilizator, proiect, legutpr where utilizator.id_utilizator = legutpr.id_utr
  			and proiect.id_proiect = legutpr.id_pct and legutpr.id_pct =".$_GET['id'];		
	  	$resursaTeam = $mysqli->query($sqlTeam);
	  	while ($rowTeam = $resursaTeam->fetch_object()) {
	  		echo "<a href=''><div class='divTeamMemberBox'>".
	  			$rowTeam->nume_utilizator." ".$rowTeam->prenume_utilizator."<br></div></a>";		
	  	}
  	}else{
	  	header("Location: chooseProject.php");
  	}
?>