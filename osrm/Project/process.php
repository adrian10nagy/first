
      <?php
      require('../config.php');
      if(isset($_POST['addProiect']))
      {
         $fname=$_POST['inputProjectName'];
         $lname=$_POST['inputDescription'];


        echo $fname."<br>";
        echo $lname."<br>";

      }else{
        echo "nono non on o";

      }
      ?>