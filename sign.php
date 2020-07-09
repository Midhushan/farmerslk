<?php 

include_once("config.php");

?>

<?php
    
    

    $username =$district=$email=$phonenumber=$password=$conpassword=null;
    if(isset($_POST['Add'])){
        
   
        
    
          $username=$_POST['username'];
          $district=$_POST['district'];
          $email=$_POST['email'];
          $phonenumber=$_POST['phonenumber'];
          $password=$_POST['password'];
          $conpassword=$_POST['conpassword'];
          echo $district;
          echo $username;
          echo $email;
          echo $phonenumber;
          echo $password;
          echo $conpassword;


       
          
        //   $sql="INSERT INTO `reguser`(`username`) 
        //   VALUES ('$username')";
      $sql="INSERT INTO `reguser`(`username`, `email`, `district`, `phone`, `password`, `userid`) VALUES ('$username','$email','$district','$phonenumber','$password',NULL)";

    if(mysqli_query($conn,$sql)){
            echo '
              <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>'.$username.'</strong> <h4 class="text-center display-3">PAID</h4> 
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
              </div>    
            ';
          }
          else{
            
            echo '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>'.$username.'</strong> echo "Error".$sql."<br>".mysqli_error($conn);
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>
            
            ';

          
          
        
          
     
    }
    }
    
    ?>




<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>signup</title>
    <link rel="stylesheet" href="assets/bootstrapsi/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/csssi/Elegant-Registration-Form.css">
    <link rel="stylesheet" href="assets/csssi/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/csssi/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/csssi/styles.css">
</head>

<body style="background-color: rgb(251,248,248);">
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-search" style="background-color: #00e676;color: rgb(249,246,246);">
        <div class="container"><a class="navbar-brand" href="#" style="font-size: 23px;">Farmers.lk</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#" style="color: rgb(249,246,246);font-size: 18px;">Home</a></li>
                </ul>
                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"></label></div>
                </form><a class="btn btn-light text-primary border rounded border-white action-button" role="button" href="login.html" style="background-color: rgb(0,230,118);filter: blur(0px) brightness(100%);">Login</a></div>
        </div>
    </nav>
    <div class="container shadow" style="margin-top: 33px;"><div class="banner6 py-5">
  <!-- Row  -->
  <form method="POST" action="#">
  <div class="row">
    <div class="container">
      <div class="col-lg-6 align-justify-center pr-4 pl-0 contact-form">
        <div class="">
          <h2 class="mb-3 font-weight-light">Get Register For Free</h2>
          <h6 class="subtitle font-weight-normal"></h6>
          <form class="mt-3">
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <input class="form-control" type="text" placeholder="full name" name="username">
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <input class="form-control" type="email" placeholder="email address"  name="email">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group"  >
                  <select class="custom-select" id="inputGroupSelect01" name="district">
                    <option class="hidden" selected disabled>Please select your District</option>
                    <option>Ampara</option>
                    <option>Anuradhapura</option>
                    <option>Badulla</option>
                    <option>Batticaloa</option>
                    <option>Colombo</option>
                    <option>Galle</option>
                    <option>Gampaha</option>
                    <option>Hambantota</option>
                    <option>Jaffna</option>
                    <option>Kalutara</option>
                    <option>Kandy</option>
                    <option>Kegalle</option>
                    <option>Kilinochchi</option>
                    <option>Kurunegala</option>
                    <option>Mannar</option>
                    <option>Matale</option>
                    <option>Matara</option>
                    <option>Monaragala</option>
                    <option>Mullaitivu</option>
                    <option>NuwaraEliya</option>
                    <option>Polonnaruwa</option>
                    <option>Puttalam</option>
                    <option>Ratnapura</option>
                    <option>Trincomalee</option>
                    <option>Vavuniya</option>
                </select>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <input class="form-control" type="text" placeholder="phone number" name="phonenumber">
                </div>
              </div>

              <div class="col-lg-6">
                <div class="form-group">
                  <input class="form-control" type="password" placeholder="password" name="password">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <input class="form-control" type="password" placeholder="confirm password" name="conpassword">
                </div>
              </div>


              <div class="col-lg-12">
                <button type="submit" class="btn btn-md btn-block btn-danger-gradiant text-white border-0" name="Add" value="Add"><span> Create Account</span></button>
                <!--  -->
              </div>
            </div>
          </form>
          <div class="row">
            <div class="col-lg-12 text-center mt-4">
              <h6 class="font-weight-normal">Signup with Social Accounts</h6>
              <div class="row">
                <div class="col-lg-6 col-md-6">
                  <a href="#" class="btn btn-block bg-facebook text-white mt-3">Facebook</a>
                </div>
                <div class="col-lg-6 col-md-6">
                  <a href="#" class="btn btn-block bg-twitter text-white mt-3">Twitter</a>
                </div>
              </div>
            </div>
            <div class="col-lg-12 text-center mt-4">
              Already have an account? <a href="#" class="text-danger">Sign In</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6 right-image pl-3" style="background-image:url(https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/form/3.jpg);">
    </div>
  </div>
</div></div>
    <script src="assets/jssi/jquery.min.js"></script>
    <script src="assets/bootstrapsi/js/bootstrap.min.js"></script>
</body>

</html>