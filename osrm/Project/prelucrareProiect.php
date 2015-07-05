<?php
  require '../config.php';
  require '../autorizare.php';
  	
  	$var_id_companie = 0;
  	//check company id by session
  	$sqlCompanie = "select * from companie, utilizator where companie.id_companie=utilizator.id_cpe 
  					and id_utilizator=".$_SESSION['id_utilizator'];
  	$resursaCompanie = $mysqli->query($sqlCompanie);
  	if($resursaCompanie->num_rows != 1){
  		header("Location: ../index.php");
  	}else{
  		$rowCompanie = $resursaCompanie->fetch_object();
  		$var_id_companie= $rowCompanie->id_companie;
  	}

  	//Adding Proiect
  	if(isset($_POST['addProiect']))
    {
        $pAddName=$_POST['inputProjectName'];
        $pAddDesc=$_POST['inputDescription'];
	  	if( $pAddName!= '' && $_SESSION['id_utilizator'] && $var_id_companie != 0){
	  		$pAddDate = date('Y/m/d h:i:s a', time());
	  		$sqlAddProiect = "insert into proiect(id_cpe,denumire_proiect,descriere_proiect) values($var_id_companie,'$pAddName','$pAddDesc')";
	  		$insertProiectCheck = $mysqli->query($sqlAddProiect);
	  		if($insertProiectCheck){
	  			echo " Success!";
	  			header("Location: project.php");
	  		}else{
	  			echo "eroare :(";
	  		}
	  	}
    }
      

?>