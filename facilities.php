<!doctype html>

<html lang="en">
  <head>
    <title>Dellys</title>
    <link href="facilities.css" rel="stylesheet" type="text/css">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" type="image/png" href="images/favicon.png" />


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
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

        <div class="container-fluid">


        <div class="row" >
                <div class="col-12" style="margin:20px">
                    <h1 class="news-title" style="text-align:center" >
                        <b style="margin-top:30px">Commoditees</b>
                    </h1>
                        <h4>Welcome <?php echo $_SESSION['username']; ?></h4>

                </div>   
        </div>
        
        <div class="col-12" style="margin:10px">
                  <p></p>
            </div>

                

            <div class="row"  style="margin:30px">
                
                <div class="col-2"  id="icons">
                    <img src="./images/el1.png" class="img-size">
                    <h4 class="fac-feat">Ascenseur</h4>
                </div>
                <div class="col-2"  id="icons">
                  <img src="./images/icons8-parking-50.png" class="img-size">
                  <h4 class="fac-feat">Parking</h4>
              </div>
                <div class="col-2"  id="icons">
                    <img src="./images/cctv1.png" class="img-size">
                    <h4 class="fac-feat">CCTV</h4>
                </div>
                
                <div class="col-2"  id="icons">
                  <img src="./images/icons8-dining-room-50.png" class="img-size">
                  <h4 class="fac-feat">Cafeteria</h4>
              </div>
                <div class="col-2"  id="icons">
                    <img src="./images/icons8-mosque-50.png" class="img-size">
                    <h4 class="fac-feat">Salle de Priere</h4>
                </div>
                
                <div class="col-2" id="icons" >
                  <img src="./images/sh1.png" class="img-size">
                  <h4 class="fac-feat">Smart Home</h4>
              </div>
            </div>

            <div class="row"  style="margin:30px">
              <div class="col-2"  id="icons">
                <img src="./images/sw1.png" class="img-size">
                <h4 class="fac-feat">Piscines</h4>
              </div>
                <div class="col-2" id="icons" >
                    <img src="./images/icons8-dumbbell-50.png" class="img-size">
                    <h4 class="fac-feat">Gym</h4>
                </div>
                <div class="col-2"  id="icons">
                    <img src="./images/icons8-sauna-50.png" class="img-size">
                    <h4 class="fac-feat">Sauna</h4>
                </div>
                
                 <div class="col-2"  id="icons">
                    <img src="./images/pg1.png" class="img-size">
                    <h4 class="fac-feat">Salle de Jeux</h4>
                </div>
                <div class="col-2"  id="icons">
                    <img src="./images/wifi1.png" class="img-size">
                    <h4 class="fac-feat">Wifi</h4>
                </div>
                <div class="col-2"  id="icons">
                  <img src="./images/sd1.png" class="img-size">
                  <h4 class="fac-feat">Parabole</h4>
              </div>
            </div>

            <hr>
          
      <div style="color: #000">
          <div class="row" id="title-color">
                  <div class="col-12" class="title-about">
                          <p class="h1"><b>ANNEXES</b></p>
                  </div>
          </div>

          <div class="row">
                  <div class="col-4">
                    <a href="./images/6.jpg">
                      <img src="./images/image002.jpg" class="rounded float-left" width="400px" height="300px" style="margin-bottom:20px">
                    </a>
                    </div>
                  <div class="col-4">
                    <a href="./images/12.jpg">
                      <img src="./images/image007.jpg" class="rounded float-center" width="400px" height="300px" >
                    </a>  
                  </div>
                  <div class="col-4">
                    <a href="./images/5.jpg">
                      <img src="./images/image006.jpg" class="rounded float-left" width="400px" height="300px" >
                    </a>  
                  </div>
          </div>

          <div class="container-sec-14">
          <div class="row">
                  <div class="col-12" class="title-apart">
                          <p class="h3" style="color:rgb(255, 255, 255)"><b>Annexe (1) pour Hommes</b></p>
                  </div>
          </div> 

          <div class="row" >

                <div class="col-4" >
                    <iframe width="460" height="315" src="https://www.youtube.com/embed/reoy_8ZdZB8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
                  <div class="col-3">
                      <ul class="list" style="margin-top: 20px" >

                              <ol>
                                <h5>
                                  <li style="color:  rgb(255, 255, 255)">Piscine pour Hommes</li>
                                  <li style="color:  rgb(255, 255, 255)">Piscine pour enfants</li>
                                  <li style="color:  rgb(255, 255, 255)">Gym</li>
                                  <li style="color:  rgb(255, 255, 255)">Sauna</li>
                                  <li style="color: #ffffff">Salle de repos</li> 
                                  <li style="color:  rgb(255, 255, 255)">Douches et vestiaires</li>
                                  <li style="color:  rgb(255, 255, 255)">Aire de jeux pour enfants</li>
                                </h5>
                              </ol> 
                      </ul>
                  </div>
          

                  <div class="col-5">
                      <img src="./images/image008.jpg" class="rounded float-left" width="500px" height="300px" style="margin:20px">
                    </div>
              </div>
          </div>

                      <div class="row">
                              <div class="col-12" class="title-apart" style="margin-top:20px">
                                      <p class="h3" style="color:#000000"><b>Annexe (2) pour Femmes</b> (Dimensions)</p>
                              </div>
                      </div> 

                  <div class="row" class="container-sec-14" >

                          <div class="col-5">
                              <img src="./images/image004.jpg" class="rounded float-left" width="500px" height="300px" style="margin:20px">
                            </div>

                          <div class="col-3">
                              <ul class="list" style="margin-top: 20px" >

                                      <ol>
                                        <h5>                             
                                          <li style="color: #000000">Piscine pour Femmes</li>
                                          <li style="color: #0e0a0a">Piscine pour enfants</li>
                                          <li style="color: #000000">Gym</li>
                                          <li style="color: #000000">Sauna</li>
                                          <li style="color: #000000">Salle de repos</li> 
                                          <li style="color: #000000">Douches et vestiaires</li> 
                                          <li style="color:  rgb(255, 255, 255)">Aire de jeux pour enfants</li>
                                        </h5>
                                      </ol> 
                              </ul>
                          </div>

                              <div class="col-4">
                                  <iframe width="460" height="315" src="https://www.youtube.com/embed/q4arU9RtnjI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                              </div>

                      </div>
                                                                 
                      <div class="container-sec-14">
                              <div class="row">
                                      <div class="col-12" class="title-apart">
                                          <p class="h3" style="color:#ffffff"><b>Annexe (3) Familiale</b> (Dimensions)</p>
                                      </div>
                              </div> 
  
                          <div class="row" class="container-sec-14" >

                              <div class="col-4">
                                  <iframe width="460" height="315" src="https://www.youtube.com/embed/xZvgrtIUM5I" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                              </div>

                                  <div class="col-3">
                                      <ul class="list" style="margin-top: 20px" >
  
                                              <ol>
                                                </h5>                                                   
                                                    <h5><li style="color: #ffffff">Cafeteria</li></h5>
                                                    <h5><li style="color: #ffffff">Salle de Priere</li></h5>
                                                    <h5><li style="color: #ffffff">Terrasse</li></h5>
                                                    <h5><li style="color: #ffffff">Aire de jeux pour enfants</li></h5>
                                                </h5>        
                                            </ol>                                      
                                          </ul>
                                      </div>

                                      

                                  <div class="col-5">
                                      <img src="./images/image005.jpg" class="rounded float-left" width="500px" height="300px" style="margin:20px">
                                  </div>

                              </div>
                      </div>  
          
  </div>

               

            </div>
             <?php
                  include_once('C:\xampp\htdocs\dellys\footer.php');
                ?>

      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>