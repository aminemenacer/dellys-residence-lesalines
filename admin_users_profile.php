
<?php 
error_reporting(0);
$conn = mysqli_connect('localhost', 'amine', 'test1234', 'dellys' );

$result = mysqli_query($conn,"SELECT username, email, date_created FROM users");


while($row = mysqli_fetch_array($result)){

/* $username = $row['username'];
 $email = $row['email'];
 $date_created = $row['date_created'];*/

 $username = $_SESSION['username'];
 $email = $_SESSION['email'];
 $date_created = $_SESSION['date_created'];

}
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

                
                <div class="row">
                    <div class="col-md-12">
                        <form>
                              <div class="form-group row">
                                <label for="name" class="col-4 col-form-label"><b>Username:</b></label> 
                                <div class="col-8">
                                 <p><?php echo $_SESSION['username']; ?></p>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="email" class="col-4 col-form-label"><b>Email:</b></label> 
                                <div class="col-8">                              
                                 <p><?php echo $_SESSION['email']; ?></p>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="date" class="col-4 col-form-label"><b>Date:</b></label> 
                                <div class="col-8">
                                  <p><?php echo $_SESSION['date_created']; ?></p>
                                </div>
                              </div>

                              <form action="admin_user_profile_edit.php">
                               <a href="admin_user_profile_edit.php" id="edit" class="btn btn-success" role="button" aria-pressed="true">Edit profile</a>
                              </form>
                             
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

