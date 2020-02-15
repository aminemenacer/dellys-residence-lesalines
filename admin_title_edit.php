
<?php
//Database Connection
session_start();
$conn = mysqli_connect('localhost', 'amine', 'test1234', 'dellys' );

  if(!$conn){
    echo 'Connection error: '. mysqli_connect_error();
  }


//Get ID from Database
if(isset($_GET['edit_id'])){
 $edit_id = mysqli_real_escape_string($conn, $_GET['edit_id']);
 $sql = "SELECT * FROM title WHERE id =" .$_GET['edit_id'];
 $result = mysqli_query($conn, $sql);
 $row = mysqli_fetch_array($result);
}

//Update Information
if(isset($_POST['btn-update'])){
// $item = $_POST['item'];
 $message = $_POST['message'];

 
 $update = "UPDATE title SET message ='$message' WHERE id=". $_GET['edit_id'];
 $update = mysqli_query($conn, $update);
// if(!isset($sql)){
// die ("Error $sql" .mysqli_connect_error());
// }
// else
// {
 header("location: admin_all.php");
// }
}
?>

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
      

    <!-- header-->
     <?php
       include_once('C:\xampp\htdocs\dellys\header_logged_in.php');?>

       <?php
                  include_once('C:\xampp\htdocs\dellys\navbar.php');
                ?>

            <!-- about us-->

            <div class="container-fluid">

           <div class="container" style="padding: 20px">
  <div class="row">
    
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Edit Information</h4>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <form method="post">
                         <div class="form-group row">
                                
                              </div>
                              <div class="form-group row">
                                <label for="name" class="col-4 col-form-label"><b>Text:</b></label> 
                                <div class="col-8">
                                 <input type="text" name="message" aria-label="text" class="form-control" value="<?php echo $row['message']; ?>"> 
                                </div>
                              </div>                              
                                                          
                              
                             <form action="admin_title_edit.php" method="GET">
                               <button type="submit" name="btn-update" class="btn btn-success">Update</button>

                               <a href="admin_all.php" class="btn btn-success" role="button" aria-pressed="true" name="btn-update">Cancel</a>
                              </form>

                              </div>
         
                           </form>
                    </div>
                </div>
                
            </div>
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






<style type="text/css">
table {
}

th {
	
  text-align: center;
  background-color: #1D65EC;
  color: white;
}

table, th, td, tr {
  
  margin-top: 30px
}

</style>

