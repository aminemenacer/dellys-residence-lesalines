

<?php 
$conn = mysqli_connect('localhost', 'amine', 'test1234', 'dellys' );

 
$query = "SELECT id FROM users LIMIT 1";

 
$result = mysqli_query($conn,"SELECT * FROM users");



while($row = mysqli_fetch_array($result)){

 $username = $row['username'];
 $email = $row['email'];
 $date_created = $row['date_created'];
}
/*mysqli_close($conn);
*/
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  </head>
  <body>
    


      <div class="container" style="padding-top: 40px">

                                        <h4>Welcome <?php echo $_SESSION['username']; ?></h4>

                <div class="row">
                    <div class="col-md-12">
                        <form>
                              <div class="form-group row">
                                <label for="name" class="col-4 col-form-label"><b>Name:</b></label> 
                                <div class="col-8">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="name" class="col-4 col-form-label"><b>Bank:</b></label> 
                                <div class="col-8">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="email" class="col-4 col-form-label"><b>Card number:</b></label> 
                                <div class="col-8">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="email" class="col-4 col-form-label"><b>Account number:</b></label> 
                                <div class="col-8">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="email" class="col-4 col-form-label"><b>Sort code:</b></label> 
                                <div class="col-8">
                                </div>
                              </div>

                            </form>
                    </div>
                </div>
               </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

