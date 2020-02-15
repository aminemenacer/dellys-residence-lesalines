<?php  
 session_start();
 
  $conn = mysqli_connect('localhost', 'amine', 'test1234', 'dellys' );

$username = $_SESSION['username'];
//$email = $_SESSION['email'];
 //$date_created = $_SESSION['date_created'];

  if(!$conn){
    echo 'Connection error: '. mysqli_connect_error();
  }

   if (isset($_POST['contact_btn'])) {
   $name = ($_POST['name']);
   $email = ($_POST['email']);
   $date_created = ($_POST['date_created']);
   $message = ($_POST['message']);
  
   $sql = "INSERT INTO users(name, email, date_created, message) VALUES('$name', '$email', '$date_created', '$message')";
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
 <body>


               <?php
                  include_once('C:\xampp\htdocs\dellys\header_logged_in.php');
                ?>

                <!-- navbar-->
                <?php
                  include_once('C:\xampp\htdocs\dellys\navbar.php');
                ?>

         <div class="container" style="padding-top: 20px ">
          <h4>Welcome <?php echo $_SESSION['username']; ?></h4>

          <div class="tab-content">
           <ul class="nav nav-tabs" id="myTab" role="tablist">
             <li class="nav-item">
               <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" style="color: green">Profile</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false" style="color: green">Messages</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="messages" aria-selected="false" style="color: green">Payments</a>
             </li>
            </div>
             
             

       <div class="tab-content">
             <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab"><?php require('admin_users_profile.php'); ?></div>
             <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab"><?php require('admin_user_messages.php'); ?></div>
             <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab"><?php require('admin_user_payment.php'); ?></div>                  
           </div>


         </div>


         
  </body>

  <?php
                  include_once('C:\xampp\htdocs\dellys\footer.php');
                ?>
  
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