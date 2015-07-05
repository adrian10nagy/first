<?php
  	require '../config.php';
  	echo "<h1> Choose a project </h1>";
  	$sqlProjects = "select * from proiect, companie, utilizator WHERE
  	companie.id_companie = utilizator.id_cpe and companie.id_companie = proiect.id_cpe and id_utilizator =".$_SESSION['id_utilizator'];
  	$resursaPorojects = $mysqli->query($sqlProjects);
  	while ($rowProjects = $resursaPorojects->fetch_object()) {
	  		echo "<a href='project.php?projectView=".$rowProjects->id_proiect."'><div class='divTeamMemberBox'>".
	  			$rowProjects->denumire_proiect." ".$rowProjects->descriere_proiect."<br></div></a>";  	}

?>