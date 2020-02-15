<?php

$conn = mysqli_connect('localhost', 'amine', 'test1234', 'dellys' );

    if(!$conn){
     echo 'Connection error: '. mysqli_connect_error();
    }

	$to = $_POST['to'];
	$from = $_POST['from'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	$body = "This is an automated email, do not reply to this email. \n \n $message";

	$headers = "From: $from";

	mail($to,$subject,$body,$headers);

?>

<!doctype html>

<html lang="en">
  <head>
    <title>Dellys</title>
    <link href="register.css" rel="stylesheet" type="text/css">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/png" href="images/favicon.png" />


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>

    <!-- header-->
                <?php
                error_reporting(0);
                include_once('C:\xampp\htdocs\dellys\header_logged_in.php');
                 $_SESSION["is_login"] = false;

                 if(isset($_SESSION["is_login"])){
                  include_once('C:\xampp\htdocs\dellys\navbar_annonymous.php');
                  }
                ?>
																	
            <div class="container" style="padding:10px">

												

       <form method="post" action="email_send_form.php">

            <div class="form-row col-md-8" style="padding-top:20px">
                <label for="inputEmail4"><b>Email (To):</b></label>
                <input type="text" class="form-control" id="inputEmail4"  name="to">
              </div>
             <div class="form-row col-md-8" style="padding-top:20px">   
                <label for="inputPassword4"><b>Email (From):</b></label>
                <input type="text" class="form-control" id="inputPassword4" name="from">
               </div>
            <div class="form-row col-md-8" style="padding-top:20px">
                <label for="inputEmail4"><b>Subject:</b></label>
                <input type="text" class="form-control" id="inputEmail4" name="subject">
               </div>
              
															<div class="form-row col-md-8" style="padding-top:20px">
																<label for="exampleFormControlTextarea1"><b>Message:</b></label>
																<textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="5"></textarea>
														</div>
              

              <div class="form-row col-md-8" style="padding-top:20px" >
                <button type="submit" name="submit" class="btn btn-success" onclick="test()">Submit</button>
              </div>

            </div>
             
       </form>
            </div>

             <!-- Footer -->
    <?php
                  include_once('C:\xampp\htdocs\dellys\footer.php');
                ?>
       
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

        <script src="sweetalert2.all.min.js"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 -->
        <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>

        <script src="sweetalert2.min.js"></script>
        <link rel="stylesheet" href="sweetalert2.min.css">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>