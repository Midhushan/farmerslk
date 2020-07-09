
<?php 

include_once("config.php");

?>

<?php
    
    

    $productname=$district=$price=$quantity=$address=$description=$phonenumber=null;
    if(isset($_POST['Add'])){
   
    
   
        
    
        $productname=$_POST['productname'];
          $district=$_POST['district'];
          $price=$_POST['price'];
          $phonenumber=$_POST['phoneno'];
          $quantity=$_POST['quantity'];
          $address=$_POST['address'];
          $description=$_POST['description'];
          $image=$_POST['avatar-file'];
          echo $district;
          echo $price;
          echo $quantity;
          echo $phonenumber;
          echo $address;
          echo $description;
          echo $image;
          echo  $productname;
          

        


       
          
        //   $sql="INSERT INTO `reguser`(`username`) 
        //   VALUES ('$username')";
    //   $sql="INSERT INTO `post`(`username`, `email`, `district`, `phone`, `password`, `userid`) VALUES ('$username','$email','$district','$phonenumber','$password',NULL)";
     
     
     $sql="INSERT INTO `post` (`postid`, `productname`, `productprice`, `quantity`, `address`, `description`, `district`, `phoneno`, `image`) VALUES (NULL, '$productname', '$price', '$quantity', '$address', '$description', '$district', '$phonenumber', '$image')";
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
    <title>post</title>
    <link rel="stylesheet" href="assets/bootstrappo/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/csspo/Elegant-Registration-Form.css">
    <link rel="stylesheet" href="assets/csspo/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/csspo/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/csspo/Profile-Edit-Form-1.css">
    <link rel="stylesheet" href="assets/csspo/Profile-Edit-Form.css">
    <link rel="stylesheet" href="assets/csspo/styles.css">
</head>

<body style="background-color: rgb(251,248,248);">
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-search" style="background-color: #00e676;color: rgb(249,246,246);"> 
        <div class="container"><a class="navbar-brand" href="#" style="font-size: 23px;">Farmers.lk</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"><a  href="home.html" style="color: rgb(249,246,246);font-size: 18px;">Home</a></li>&nbsp;&nbsp;&nbsp;
                </ul><a href="history.html" style="color: rgb(249,246,246);font-size: 18px;">My profile</a>
                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"></label></div>
                </form><a class="btn btn-light text-primary border rounded border-white action-button" role="button" href="#" style="background-color: rgb(0,230,118);filter: blur(0px) brightness(100%);">Login</a></div>
        </div>
    </nav>
    <form method="POST" action="#">
    <div class="container border rounded shadow-lg profile profile-view" id="profile" style="margin-top: 33px;margin-bottom: 8px;">
        <div class="row">
            <div class="col-md-12 alert-col relative">
                <div class="alert alert-info absolue center" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><span>Profile save with success</span></div>
            </div>
        </div>
        <form>
            <div class="form-row profile-row">
                <div class="col-md-4 relative" style="height: 416px;">
                    <div class="avatar">
                        <div class="avatar-bg center"></div>
                    </div><input type="file" name="avatar-file" class="form-control"  style="padding-top: 3px;padding-left: 3px;"><label style="margin-top: 7px;margin-bottom: 2px;">desprtion</label><textarea class="form-control" name="description" style="height: 87px;"></textarea></div>
                <div
                    class="col-md-8">
                    <h1>Fill And Post </h1>
                    <hr>
                    <div class="form-row">
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group"><label>Product Name</label><input class="form-control" type="text" name="productname"></div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group"><label>Product Qty</label><input class="form-control" type="text" name="quantity"></div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group"><label>Product Price </label><input class="form-control" type="text" name="price"></div>
                        </div>
                    </div>
                    <div class="form-group"><label>Address </label><input class="form-control" type="text" autocomplete="off" required="" name="address"></div>
                    <div class="form-row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><label>District </label> <select class="custom-select" name="district" id="inputGroupSelect01">
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
                            </select></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><label>Phone Number</label><input class="form-control" type="text" name="phoneno" required=""></div>
                        </div>
                    </div>
                    <hr>
                    <div class="form-row">
                        <div class="col-md-12 content-right"><button class="btn btn-primary form-btn" type="submit" name="Add" value="Add"style="background-color: rgb(0,230,118);">SAVE </button>
                        <button class="btn btn-danger form-btn" type="reset">CANCEL </button></div>
                    </div>
            </div>
    </div>
    </form>
    </div>
    <script src="assets/jspo/jquery.min.js"></script>
    <script src="assets/bootstrappo/js/bootstrap.min.js"></script>
    <script src="assets/jspo/Profile-Edit-Form.js"></script>
</body>

</html>