
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
                
																	$_SESSION["is_login"] = true;

																	$user = 0;
																	$admin = 1;
															//		$type = $_SESSION['type'];
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
                ?>

            <!-- about us-->

            <div class="container-fluid">

            <div class="container-main">
                    <div class="row">
                      <div class="col-12">
                            <h4>Welcome <?php echo $_SESSION['username']; ?></h4>

                          <h1 class="title-about" style="text-align:center"><b>Profile et Contacte</b></h1>
                      </div>
                      <div class="row" >
                        <div class="col-8">
                            <p><h5>
                                
                              <ul>
                                <li>Adresse:BET BELAID NOUREDDINE VILLA 89 SITE AADL, BIR MOURAD RAIS, ALGER</li>
                                <li>Tel:(+213) 0698 31 32 19 /( +213) 0776 93 41 10</li>
                                <li>Fixe:(+213) 021 54 32 04</li>
                                <li>Email: inforesidsalines@gmail.com</li>
                                <li>Website: www.Lessalinesdellys.com </li>
                              </ul>
                                    
                            </h5>    
                            </p>
                        </div>
                        <div class="col-4" style="text-align:center">
                          
                            <a href="./images/11.jpg">
                              <img src="./images/image005.jpg" width="100%" height="250"/>
                            </a>
    
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr>


                  <div class="container-main">
                        <h1 class="title-about" style="text-align:center"><b>Chef de Projet</b></h1>
    
                        <div class="row">
                            <div class="col-9">
                                <h3 class="team-title">Nourredine Belaid</h3>
                                <h5 class="team-title">Architect</h5>
                                <p class="text-about"><h5>
                                     Mr Nourredine Belaid is un architect et entrepreneur avec plus de 30 ans d'experience dans le batiment. 
                              </h5> </p>
                            </div>
                            <div class="col-3">
    
                                <img class="img-responsive" src="./images/Photo-ID-Unkown.png" width="320" height="200">
                                
                            </div>
                            <hr>
                    </div>
                  </div>          
                </div>
      
    

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