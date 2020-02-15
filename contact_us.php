<?php  

 $submit_suc = "";
 session_start();
 error_reporting(0);
  $conn = mysqli_connect('localhost', 'amine', 'test1234', 'dellys' );

  if(!$conn){
    echo 'Connection error: '. mysqli_connect_error();
  }

   if (isset($_POST['contact_btn'])) {
    $name = ($_POST['name']);
    $email = ($_POST['email']);
    $phone = ($_POST['phone']);
    $message = ($_POST['message']);
  
   $sql = "INSERT INTO contacts(name, email, phone, message) VALUES('$name', '$email', '$phone', '$message')";
   $result = mysqli_query($conn ,$sql);
   if($result){
							// echo "Submitted successfully";
							
							echo '<script language="javascript">';
							echo 'alert("message successfully submitted")';
							echo '</script>';

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

        $conn = mysqli_connect('localhost', 'amine', 'test1234', 'dellys' );

        if(!$conn){
        echo 'Connection error: '. mysqli_connect_error();
        }
								$_SESSION["is_login"] = true;

								$user = 0;
								$admin = 1;
								//$type = $_SESSION['type'];

        if(isset($_SESSION['username']) && ($_SESSION['type'] == 0)){
									
										include_once('navbar_user.php');
									} else if (isset($_SESSION['username']) && ($_SESSION['type'] == 1)){
											$username = $_SESSION['username'];
												include_once('navbar_admin.php');
									} else if(!isset($_SESSION['username']) && ($_SESSION['type'] == 0)){
										include_once('navbar_annonymous.php');
									}else if(!isset($_SESSION['username']) && ($_SESSION['type'] == 1)){
										include_once('navbar_annonymous.php');
									}else{
										echo '';
									}

/*
								if(isset($_SESSION["is_login"])){
									include_once('C:\xampp\htdocs\dellys\navbar_annonymous.php');
									}else if(!isset($_SESSION["is_login"])){
										include_once('C:\xampp\htdocs\dellys\navbar_admin.php');
									}
*/
							
?>
            <!-- contact form-->

            <div class="container-fluid">

           <form method="POST" action="contact_us.php">  
            <div class="contact-form" >
                    <div class="col-12" style="margin:20px">
                        <h1 class="contact-title" style="text-align:center" style="margin:30px"><b>Contacte</b></h1>
                            <h4>Welcome <?php echo $_SESSION['username']; ?></h4>

                        <p class="title-para">
                                <h4>
                                        
                                Votre avis, suggestion, ou remerciement nous interesse. Veuillez utiliser ce formulaire en ligne pour nous contactes et la prise en charge de vos demandes:

                                </h4> 
                        </p>

                        <div class="row" style="margin-top:40px">
                                <div class="col-3">
                                    
                                </div>
                                <div class="col-6" >
                                        <div class="form-group">
                                                <label for="formGroupExampleInput"><b>Nom et Prenom:</b></label>
                                                <input name="name" type="text" class="form-control" id="text" placeholder="name">
                                            </div>
                                </div>
                                <div class="col-3">
                                    
                                </div>

                        </div>

                        <div class="row">
                                <div class="col-3">

                                </div>
                                <div class="col-6" >
                                        <div class="form-group">
                                                <label for="exampleFormControlInput1"><b>Email addresse:</b></label>
                                                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                            </div>
                                </div>
                                <div class="col-3">
                                    
                                </div>
                        </div>

                        <div class="row">
                                        <div class="col-3">
        
                                        </div>
                                        <div class="col-6" >
                                                <div class="form-group">
                                                        <label for="exampleFormControlInput1"><b>Telephone:</b></label>
                                                        <input type="text" class="form-control" id="inputAddress2" placeholder="phone number" name="phone">
                                                    </div>
                                        </div>
                                        <div class="col-3">
                                            
                                        </div>
                                </div>

                            <div class="row">
                                        <div class="col-3">
                                    
                                        </div>
                                        <div class="col-6" >
                                                <div class="form-group">
                                                        <label for="exampleFormControlTextarea1"><b>Votre Message:</b></label>
                                                        <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
                                                    </div> 
                                        </div>
                                        <div class="col-3">
                                    
                                        </div>
                                </div>

                                <div class="row">
                                        <div class="col-3">

                                        </div>
                                        <div class="col-6">
                                                <form>
                                                        <div class="form-group">
                                                          <label for="exampleFormControlFile1" ></label>
                                                          <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                                        </div>
                                                </form>
                                        </div>
                                        <div class="col-3">

                                        </div>

                                </div>

                                <div class="row">
                                    <div class="col-3">

                                    </div>
                                    <div class="col-6" style="text-align:end">
                                        <button type="submit" name="contact_btn" class="btn btn-primary">Parcourir</button>


                                    </div>
                                    <div class="col-3">

                                    </div>
                                </div>
                     <span class="error" style="color: green" style="font-size: 40px" onclick="myFunction()"></span>
                            <form>
                                            
                    </form>
                    </div>        
                        
            </div>
           </form>
        </div>

                <?php
                  include_once('C:\xampp\htdocs\dellys\footer.php');
                ?>


  </body>
  
		<script>
			function myFunction() {
					alert("Message submitted successfully!");
			}
</script>
  
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>