<?php  
 
  $conn = mysqli_connect('localhost', 'amine', 'test1234', 'dellys' );
  error_reporting(0);
  if(!$conn){
    echo 'Connection error: '. mysqli_connect_error();
  }

   if (isset($_POST['contact_btn'])) {
  // $username = ($_POST['username']);
  // $email = ($_POST['email']);
  // $phone = ($_POST['phone']);
   $message = ($_POST['message']);
   $date_created = ($_POST['date_created']);


  // $_SESSION['date_created'] = $date_created;
  // $date_created = $row['date_created'];

  // $_SESSION['message'] = $message;
  // $date_created = $row['date_created'];

  
   $sql = "INSERT INTO users(message, date_created) VALUES('$message', '$date_created')";
   $result = mysqli_query($conn ,$sql);
   if($result){
        echo "Submitted successfully";
        }
  }else{
   //  echo 'submitted unsuccessfully';
  } 



?>

<!doctype html>


<html lang="en">
  <head>
    <title>Dellys website</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" type="image/png" href="images/favicon.png" />


    <link href="./contact_us.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
</head>
</html>


            <div class="container">

    <?php

     $conn = mysqli_connect('localhost', 'amine', 'test1234', 'dellys' );

    if(!$conn){
     echo 'Connection error: '. mysqli_connect_error();
    }

    $sql = "SELECT id, message, date_created from users";


   if($result = mysqli_query($conn, $sql)){
       if(mysqli_num_rows($result) > 0){

        ?>

  

  <?php

         echo "<table class='table table-striped' id='table-size' ";
             echo "<tr>";
                 echo "<th>Message</th>";
                 echo "<th>Date</th>";
                 

         while($row = mysqli_fetch_array($result)){
             echo "<tr>";
                 echo "<td style='text-align:center'>" . $_SESSION['message'] . "</td>";
                 echo "<td style='text-align:center'>" . $_SESSION['date_created'] . "</td>";
 
               ?>
  <?php
          
echo "</tr>";
         }
         echo "</table>";
         mysqli_free_result($result);
     } else{
         echo "No records matching your query were found.";
     }
 } else{
     echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
 }


   ?>


        </div>

  
  
  <style type="text/css">
table {
}

th {
 
  text-align: center;
  background-color: green;
  color: white;
}

table, th, td, tr {
  
  margin-top: 30px
}

#table-size{
 padding-left: 60px;
}

.col_d{
padding: 9px 12px;
padding-top: 7px;
margin-bottom: 0;
font-size: 14px;
line-height: 20px;
color: #5e5e5e;
text-align: center;
vertical-align: middle;
cursor: pointer;
background-color: #d1dade;
-webkit-border-radius: 3px;
-webkit-border-radius: 3px;
-webkit-border-radius: 3px;
background-image: none !important;
border: none;
text-shadow: none;
box-shadow: none;
transition: all 0.12s linear 0s !important;
font: 14px/20px "Helvetica Neue",Helvetica,Arial,sans-serif;
}

.col_v{
 background-color: green;
 display: inline-block;
padding: 9px 12px;
padding-top: 7px;
margin-bottom: 0;
font-size: 14px;
line-height: 20px;
color: #5e5e5e;
text-align: center;
vertical-align: middle;
cursor: pointer;
background-color: #d1dade;
-webkit-border-radius: 3px;
-webkit-border-radius: 3px;
-webkit-border-radius: 3px;
background-image: none !important;
border: none;
text-shadow: none;
box-shadow: none;
transition: all 0.12s linear 0s !important;
font: 14px/20px "Helvetica Neue",Helvetica,Arial,sans-serif;
}

.col_e{
 background-color: blue;
 display: inline-block;
padding: 9px 12px;
align-items: center; 
padding-top: 7px;
margin-bottom: 0;
font-size: 14px;
line-height: 20px;
color: #5e5e5e;
text-align: center;
vertical-align: middle;
cursor: pointer;
background-color: #d1dade;
-webkit-border-radius: 3px;
-webkit-border-radius: 3px;
-webkit-border-radius: 3px;
background-image: none !important;
border: none;
text-shadow: none;
box-shadow: none;
transition: all 0.12s linear 0s !important;
font: 14px/20px "Helvetica Neue",Helvetica,Arial,sans-serif;
}
.abtn{
 color: white;
}

a:hover {
}

</style>

  
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>