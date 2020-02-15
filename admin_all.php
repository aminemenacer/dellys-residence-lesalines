<?php  
session_start();
error_reporting(0);
include_once('C:\xampp\htdocs\dellys\header_logged_in.php');
$_SESSION["is_login"] = true;

$user = 0;
$admin = 1;
$type = $_SESSION['type'];

if(isset($_SESSION['username']) && ($_SESSION['type'] == 0)){

  include_once('navbar_user.php');
} else {
    //	$username = $_SESSION['username'];
      include_once('navbar_admin.php');
} 

 $submit_suc = "";
  $conn = mysqli_connect('localhost', 'amine', 'test1234', 'dellys' );

  if(!$conn){
    echo 'Connection error: '. mysqli_connect_error();
  }

   if (isset($_POST['contact_btn'])) {
   $name = ($_POST['name']);
   $email = ($_POST['email']);
   $phone = ($_POST['phone']);
   $message = ($_POST['message']);
  // $type = ($_POST['type'])
  
   $sql = "INSERT INTO users(name, email, phone, message) VALUES('$name', '$email', '$phone', '$message')";
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
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
            <!-- contact form-->

         <div class="container" style="padding-top: 20px ">
    <h4>Welcome <?php echo $_SESSION['username']; ?></h4>

           <ul class="nav nav-tabs" id="myTab" role="tablist">
             <li class="nav-item">
               <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" style="color: green">Messages</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false" style="color: green">Users</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="messages" aria-selected="false" style="color: green">Options</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" id="title-tab" data-toggle="tab" href="#title" role="tab" aria-controls="messages" aria-selected="false" style="color: green">Title</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" id="living-tab" data-toggle="tab" href="#living" role="tab" aria-controls="messages" aria-selected="false" style="color: green">Offers</a>
             </li>
             

           </ul>

           <div class="tab-content">
             <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab"><?php require('admin_table.php'); ?></div>
             <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab"><?php require('admin_users.php'); ?></div>
             <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab"><?php require('admin_offers.php'); ?></div>
             <div class="tab-pane" id="title" role="tabpanel" aria-labelledby="title-tab"><?php require('admin_title.php'); ?></div>
             <div class="tab-pane" id="living" role="tabpanel" aria-labelledby="living-tab"><?php require('admin_living_prices.php'); ?></div>          
           </div>

           <script>
             $(function () {
               $('#myTab li:last-child a').tab('show')
             })
           </script>

         </div>


         <?php
                  include_once('C:\xampp\htdocs\dellys\footer.php');
                ?>
  </body>
  
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