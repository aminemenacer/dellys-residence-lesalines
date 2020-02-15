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

<!doctype html>
<html lang="en">

  <head>
    <title>Dellys</title>
    <!-- Required meta tags -->
        <link href="./apartments.css" rel="stylesheet" type="text/css">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" type="image/png" href="images/favicon.png" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>


        <div class="container-fluid">
                <h1 class="news-title" style="text-align:center" >
                    <b style="margin-top:50px" >Appartements</b>
                </h1>
                    <h4>Welcome <?php echo $_SESSION['username']; ?></h4>


            <div class="row"  style="size:60px">
                <div class="col-6">
                    <ul class="list" >
                            <h4><b>Tous les appartements sont equipés des commodites suivantes:</b></h4>
                        <ul class="bullet-list" style="size:60px"><h5>
                            <li>Vue sur Mer (180 degrees)</li>
                            <li>Kit de Cuisine moderne </li>
                            <li>Sanitaire haute gamme</li>
                            <li>Chauffage </li>
                            <li>Climatisation</li>
                            <li>Baie vitre et portes en PVC</li>
                            <li>Revêtement céramique et parquet en bois</li>
                            <li>Peinture intérieur au choix du propriétaire</li>
                            <li>Antenne parabolique collective et couverture WIFI</li>
                            <li>Accès aux immeubles contrôlés par digicode/visiophone</li>
                            <li>Accès télécommandé a la residence et au parking</li>
                          </h5>
                        </ul>
                          
                     </ul>
                    
                </div>
                <div class="col-6">
                        <table class="table table-bordered" class="table" style="text-align:center">
                                <thead><h4> 
                                  <tr style="background-color:#64be23;">                                                      
                                    <th scope="col"><h4>Appartement</h4></th>
                                    <th scope="col"><h4>Number</h4></th>
                                    <th scope="col"><h4>Superficie habitable</h4></th>
                                  
                                  </tr>
                                </h4></thead>
                                <tbody >
                                  <tr >                                    
                                    <td><h5>F4/F5</h5></td>
                                    <td><h5>5</h5></td>
                                    <td><h5>125 m<sup>2</sup></h5></td>
                                  </tr>
                                  <tr>
                                    
                                    <td><h5>F3/F4</h5></td>
                                    <td><h5>7</h5></td>
                                    <td><h5>99 - 108 m<sup>2</sup></h5></td>
                                  </tr>
                                  <tr>
                                    
                                    <td><h5>F2</h5></td>
                                    <td><h5>8</h5></td>
                                    <td><h5>57 - 75 m<sup>2</sup></h5></td>
                                    </tr>
                                <tr>
                                    
                                    <td><h5>F1</h5></td>
                                    <td><h5>4</h5></td>
                                    <td><h5>37 m<sup>2</sup></h5></td>
                                </tr>
                                <tr>
                                    <td><h5>Studio</h5></td>
                                   
                                    <td><h5>11</h5></td>
                                    <td><h5>28 m<sup>2</sup></h5></td>
                                </tr>

                                </tbody>
                              </table>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <ul class="list" >
                        <h5 style="color:#ff0202;"><b >Note:</b> Les appartements F4 et F3 peuvent etre convertis en F5 et F4, selon le choix de l'acheteur, soit avec une cuisine separee ou une cuisine ouverte sur le salon avec comptoir.</h5>  
                        <br>
                        <h4><b>Options :</b></h4>
                          <ul class="bullet-list" style="size:40px"><h5> 
                              <li>Smart Home technology pour le controle a  distance et en ligne (en option) de la résidence et des logements</li>
                              <li>Ameublement total du logement de haute gamme avec style pratique pour la location</li>
                              <li>La location de votre logement pendant les periodes vacantes avec une garantie de revenue selon le type de logement et la duree vacante, inclus tous les frais et charges de la résidence et des services.</li>
                            </h5></ul>
                    </ul>
                </div> 
            </div> 
            
            <hr>
            <div  style="color: #000">
                    <div class="row" id="title-color">
                            <div class="col-12" class="title-about">
                                    <p class="h1"><b>Bloc de Logements</b></p>
                            </div>
                    </div>

                    <div class="row" style ="width: 100%; height:400px; overflow-x: scroll;">
                            <div class="col-4">
                                <img src="./images/9.jpg" class="rounded float-left" width="400px" height="300px" style="margin-bottom:20px">
                              </div>
                            <div class="col-4">
                                <img src="./images/image001.jpg" class="rounded float-center" width="400px" height="300px" style="margin-bottom:20px">
                              </div>
                            <div class="col-4">
                                <img src="./images/image003.jpg" class="rounded float-left" width="400px" height="300px" style="margin-bottom:20px">
                            </div>
                            <div class="col-4">
                                <img src="./images/image002.jpg" class="rounded float-left" width="400px" height="300px" style="margin-bottom:20px">
                            </div>
                            <div class="col-4">
                                <img src="./images/image004.jpg" class="rounded float-center" width="400px" height="300px" style="margin-bottom:20px">
                              </div>
                            <div class="col-4">
                                <img src="./images/image006.jpg" class="rounded float-left" width="400px" height="300px" style="margin-bottom:20px">
                            </div>
                            <br><br>
                    </div>

<br>
                    <div class="container-sec-14">
                      
                            <div class="row">
                                    <div class="col-12" class="title-apart">
                                        <p class="h3" style="color:#ffffff"><b>Appartement Type F4</b> (Dimensions)</p>
                                    </div>
                            </div> 

                            

                        <div class="row" class="container-sec-14" >

                          <div class="col-4" >
                              <iframe width="100%" height="315" src="https://www.youtube.com/embed/2AYGHMmOyAY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>

                                <div class="col-3">
                                    <ul class="list" style="margin-top: 20px" >
                                        <ol>
                                          <h5>
                                              <li style="color: #ffffff">Hall: 15.78m<sup>2</sup></li>
                                              <li style="color: #ffffff">Chambre 01 : 17.00m<sup>2</sup></li>
                                              <li style="color: #ffffff">Chambre 02: 11.79m<sup>2</sup></li>
                                              <li style="color: #ffffff">Chambre 03: 11.15m<sup>2</sup></li>
                                              <li style="color: #ffffff">Sejour: 24.11m<sup>2</sup></li>
                                              <li style="color: #ffffff">Cuisine: 14.31m<sup>2</sup></li>
                                              <li style="color: #ffffff">SDB: 3.38m<sup>2</sup></li>
                                              <li style="color: #ffffff">WC: 3.15m<sup>2</sup></li>
                                              <li style="color: #ffffff">Terrace: 16.30m<sup>2</sup></li>
                                              <li style="color: #ffffff">Balcony: 5.25m<sup>2</sup></li>
                                        </h5>
                                      </ol> 
                                        <h1></h1> 
                                            <h3 style="color: #ffffff" id="total-squared"><b>Total:</b> 125.42m<sup>2</sup></h3>
                                        </ul>
                                </div>
                                    
                                      

                                <div class="col-5">
                                  <a href="./images/19.jpg">
                                    <img src="./images/19.jpg" class="rounded float-left" width="100%" height="300px" style="margin:20px">
                                  </a>
                                  </div>
                            </div>
                        </div>        

                    <div class="row">
                            <div class="col-12" class="title-apart" style="margin-top:20px">
                                    <p class="h3" style="color:#000000"><b>Appartement Type F3</b> (Dimensions)</p>
                            </div>
                    </div> 

                    <div class="row" >

                        <div class="col-5">
                          <a href="./images/17.jpg">
                                <img src="./images/17.jpg" class="rounded float-left" width="100%" height="300px" style="margin:20px">
                          </a>
                        </div>

                            <div class="col-3">
                                <ul class="list" style="margin-top: 20px" >

                                        <ol>
                                          <h5>                                 
                                            <li>Hall: 11.45m<sup>2</sup></li>
                                            <li>Chambre 01 : 14.71m<sup>2</sup></li>
                                            <li>Chambre 02: 13.50m<sup>2</sup></li>
                                            <li>Cuisine: 13.95m<sup>2</sup></li>
                                            <li>SDB: 3.38m<sup>2</sup></li>
                                            <li>WC: 2.75m<sup>2</sup></li>
                                            <li>Terrace: 15.23<sup>2</sup></li>
                                            <li>Balcony: 5.25m<sup>2</sup></li>
                                          </h5>    
                                        </ol> 
                                        <h1></h1>
                                        <h3 style="color: #000000" id="total-squared"><b>Total:</b> 108.89 m<sup>2</sup></h3>

                                    </ul>
                                </div>

                                <div class="col-4" >
                                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/yVE-Dc85og8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                              </div>        
                        </div>

                        <div class="row" style="background-color: rgb(253, 107, 22);">
                            <div class="col-12" class="title-apart" style="margin-top:20px" >
                                    <p class="h3" style="color:#ffffff"><b>Apartment Type F2</b> (Dimensions)</p>
                            </div>
                    </div> 

                    <div class="row" style="background-color: rgb(253, 107, 22);">

                        <div class="col-4" >
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/vX8EK94I_ts" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      </div>  

                            <div class="col-3">
                                <ul class="list" style="margin-top: 20px" >

                                        <ol>
                                          <h5>
                                            <li style="color: #ffffff">Hall: 11.45m<sup>2</sup></li>
                                            <li style="color: #ffffff">Chambre 01 : 10.50m<sup>2</sup></li>
                                            <li style="color: #ffffff">Cuisine: 13.95m<sup>2</sup></li>
                                            <li style="color: #ffffff">Sejour: 12.77<sup>2</sup></li>
                                            <li style="color: #ffffff">SDB: 3.38m<sup>2</sup></li>
                                            <li style="color: #ffffff">WC: 2.75m<sup>2</sup></li>
                                            <li style="color: #ffffff">Terrace: 15.23<sup>2</sup></li>
                                          </h5>  
                                        </ol> 
                                        <h1></h1>
                                        <h3 style="color: #ffffff" id="total-squared"><b>Total:</b> 65.28m<sup>2</sup></h3>

                                    </ul>
                                </div>


                                <div class="col-5">
                                    <a href="./images/17.jpg">
                                          <img src="./images/17.jpg" class="rounded float-left" width="100%" height="300px" style="margin:20px">
                                    </a>
                                  </div>

                        </div>
                        <div >
                                <div class="row">
                                        <div class="col-12" class="title-apart">
                                            <p class="h3" style="color:#000000"><b>Studio</b> (Dimensions)</p>
                                        </div>
                                </div> 
    
                            <div class="row"  >

                              <div class="col-5">
                                  <a href="./images/29.jpg">
                                    <img src="./images/29.jpg" class="rounded float-left" width="100%" height="315" style="margin:20px">
                                </a>
                                  </div>


                                    <div class="col-3">
                                        <ul class="list" style="margin-top: 20px" >
    
                                                <ol>
                                                  <h5>
                                                    <li style="color: #000000">Living room: 18.83m<sup>2</sup></li>
                                                    <li style="color: #000000">Kitchenette: 13.86m<sup>2</sup></li>
                                                    <li style="color: #000000">Balcony: 4.48m<sup>2</sup></li>
                                                    <li style="color: #000000">Salle de Bain: 3.38m<sup>2</sup></li>
                                                    <li style="color: #000000">toilette: 2.75m<sup>2</sup></li>
                                                  </h5>
                                                  </ol>
                                                <h1></h1>
                                                <h3 style="color: #000000" id="total-squared"><b>Total:</b> 28.00 m<sup>2</sup> </li> 
                                            </ul>
                                        </div>

                                        <div class="col-4" >
                                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/rA-qpqblAX0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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