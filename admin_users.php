<?php  
 $_SESSION["is_login"] = "green";

  $conn = mysqli_connect('localhost', 'amine', 'test1234', 'dellys' );

  if(!$conn){
    echo 'Connection error: '. mysqli_connect_error();
  }

   if (isset($_POST['contact_btn'])) {
   $username = ($_POST['username']);
   $email = ($_POST['email']);
   $type = ($_POST['type']);
   $logged_in = ($_POST['logged_in']);
   $date_created = ($_POST['date_created']);
  
   $sql = "INSERT INTO users(username, email, type, logged_in, date_created) VALUES('$username', '$email', '$type', '$logged_in', '$date_created')";
   $result = mysqli_query($conn ,$sql);
   if($result){
        echo "Submitted successfully";
        }
  }else{
   //  echo 'submitted unsuccessfully';
  } 



?>


            <div class="container">

           <?php

     $conn = mysqli_connect('localhost', 'amine', 'test1234', 'dellys' );

    if(!$conn){
     echo 'Connection error: '. mysqli_connect_error();
    }

    $sql = "SELECT id, username, email, type, logged_in, date_created from users";

  //  $username = $email = $password = '';
  //  $errors = array('username' => '', 'email' => '', 'password' => '', 'password2' => '');



    if(isset($_GET['id'])){
     
     // escape sql chars
     $id = mysqli_real_escape_string($conn, $_GET['id']);
     // make sql
     $sql = "SELECT * FROM users WHERE id = $id";
     // get the query result
     $result = mysqli_query($conn, $sql);
     // fetch result in array format
     $pizza = mysqli_fetch_assoc($result);
     mysqli_free_result($result);
     mysqli_close($conn);
    }



   if($result = mysqli_query($conn, $sql)){
       if(mysqli_num_rows($result) > 0){

        ?>

 
      

  <?php

         echo "<table class='table table-striped' id='table-size' ";
             echo "<tr>";
                 echo "<th>id</th>";
                 echo "<th>Userame</th>";
                 echo "<th>Email</th>";
               //  echo "<th>Type</th>";
               //  echo "<th>Date</th>";
                 echo "<th>logged_in</th>";
                 echo "<th>Actions</th>";
                 

         while($row = mysqli_fetch_array($result)){
             echo "<tr>";
                 echo "<td style='text-align:center'>" . $row['id'] . "</td>";
                 echo "<td style='text-align:center'>" . $row['username'] . "</td>";
                 echo "<td style='text-align:center'>" . $row['email'] . "</td>";
               //  echo "<td style='text-align:center'>" . $row['type'] . "</td>";
               //  echo "<td style='text-align:center'>" . $row['date_created'] . "</td>";
                 if($_SESSION['is_login'] == true){
                  echo "<td style='text-align:center'>" . 'logged_in' . "</td>";    
								}
     
              echo "<td>
                 <button style='background-color:#F94040'  class='col_d'><a class='abtn' href=\"admin_users_delete.php?id=".$row['id']."\">Delete</a></button> 
                 <button style='background-color:#5AE339' onclick='test()' class='col_v'><a class='abtn' href=\"admin_users_view.php?id=".$row['id']."\">View</a></button> 
                 </td>";
             
               ?>
  <?php
  //
  //            
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