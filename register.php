<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ezLife</title>

    <!-- css script -->
    <link rel="stylesheet" href="css/login.css">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,600;1,400&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Krona+One&family=Montserrat:wght@900&family=Poppins:wght@900&display=swap"
        rel="stylesheet">

    <!-- bootstrap scripts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

    <!-- fontawesome stylesheet -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <!-- icon -->
    <link rel="icon" href="images/home-repair.png" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
        integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous" />

</head>

<body>
    <!-- navbar -->
    <nav id="nav" class="yellow-section navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" id="logo-txt" href="index.php">ezLife</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class=" collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="ml-auto navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link nav-item" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown nav-item">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Features
                        </a>
                        <div class="dropdown-menu nav-item" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="plumber.php">Plumber</a>
                            <a class="dropdown-item" href="carpenter.php">Carpenter</a>
                            <a class="dropdown-item" href="electrician.php">Electrician</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-item" href="login.php">Login / Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- login / sign up form-->
    <div class="container-fluid yellow-section">
        <br>
        <div class="row">
            <div class="col-lg-6">
                <img class="service-img" src="images/register.png" alt="plumbing image">
            </div>
            <div class="col-lg-6">
                <div class=" form-display yellow-section">
                    
                    
                         <form action="register.php" method="post">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name" name="Name" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Contact Number</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="Contact Number" name="Mobile" pattern="[6-9]\d{9}"
                                title="Invalid Phone number" required>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Address</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="Address" name="Address" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Email</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email" name="Email" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1"
                                placeholder="Password" name="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                                title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                        </div>
                        <div class="text-center">
                            
                                <input type="submit"  class="btncreateaccount" name= "submit"  value="submit"/>
                            </a>
                        </div>
                    </form>
                </div>
                <br>
                <br>
                <div class="text-center">
                    Already have an account ?&nbsp;<a href="login.php">Login Here</a>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <hr>
    <br>
    <div class="container-fluid grey-section" id="footer">
        <footer>
            <a class="fas fa-envelope" href="mailto:ramanjaysoni55@gmail.com"></a>
            <h6>© Copyright 2021 ezLife</h6>
        </footer>
    </div>
    <br>

</body>

</html>


<?php 

include  'dbcon.php';
if(isset($_POST['submit'])){
    $username = $_POST['Name'];
    $mobile =  $_POST['Mobile'];
    $address =  $_POST['Address'];
    $email =  $_POST['Email'];
    $password =  $_POST['Password'];
    
    
    $pass = password_hash($password, PASSWORD_BCRYPT);
    
    
    $emailquery = " select * from registration where email='$email' ";
    $query = mysqli_query($con, $emailquery);
    
    
    $emailcount = mysqli_num_rows($query);
    
    
    if($emailcount>0){
       ?>
         <script>alert("This Email Already Exist")</script>';
         
         <?php
    }else{
       
       $insertquery = "insert into registration( Name,Mobile,Address,Email,Password ) 
                         values('$username', '$mobile', '$address', '$email', '$pass')";
       
       $iquery = mysqli_query($con, $insertquery);
       
       
       if($iquery){
          
            ?>
            
             <script>
             alert('Your Account Has Been Created');
             </script>
            <script>
             location.replace("login.php");
             </script>

             <?php
             

           
         }else{


            echo "<script>alert('Enter Valid Input');</script>";
            
             
                 
         }
      }
   }
?>
 
