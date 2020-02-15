<!doctype html>
<html lang="en">
  <head>
    <title>Dellys website</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="./about_us.css" rel="stylesheet" type="text/css">
    
    <!-- light gallery-->

    <link rel="shortcut icon" type="image/png" href="images/favicon.png" />

    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
</head>
</html>
  <body>
      

  <?php
        session_start();
        error_reporting(0);
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
            <!-- availability-->

            <div class="container" style="background-color: rgb(76, 90, 172);">
                <div class="row" style="text-align:center">
                    <div class='col-12'>
                         <h4>Welcome <?php echo $_SESSION['username']; ?></h4>

                        <h2 style="color: rgb(255, 255, 255);">Disponibilite des Logements</h2>
                        
                    </div>
                </div>
            </div>
            <div class="container" style="background-color: rgb(147, 161, 243);">
                <div class="row" style="text-align:center" >
                    <div class="col-0"></div>
                    <div class="col-12">
                        <h5> Le tableau ci-dessous donne un appercus sur la vente et la disponibilite des logements jusqua'a Decembre 2019
                             (Le tableau seras mis-a-jour chaque mois)
                            <br>
                            Veuillez consultez nos <a href="./updates.html" style="color: #0b0566;">"offres"</a> currentes, et contactez nous pour plus de details ou/et reservation. 
                            <br>
                        </h5>
                    </div>
                    <div class="col-0"></div>
                </div>
            </div>
                    <div class="container"  style="background-color: rgb(99, 117, 218);">
                            <div class="row" style="text-align:center">
                                  <div class="col-12" style="align-content: center">
                                      <img src="./images/availability-update.jpg" style="margin-top=10px" style="width:800px; height:600px" alt="image" >
                                  </div>  
                            </div>
                           <hr><hr>
                    </div>    
                <!-- navbar-->
                <?php
                  include_once('C:\xampp\htdocs\dellys\footer.php');
                ?>
    
  </body>
  
  
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>