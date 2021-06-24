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
                <img class="service-img" src="images/login.png" alt="plumbing image">
            </div>
            <div class="col-lg-6">
                <div class=" form-display yellow-section">
                        <form action="login.php" method="post">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Email</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email" name="Email" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1"
                                placeholder="Password" name="Password"  required>
                        </div>
                        <div class="text-center">
                                <input type="submit" class="btncreateaccount" name= "submit" value="submit"/>
                        </div>
                    </form>
                </div>
                <br>
                <br>
                <div class="text-center">
                    Don't have an account ?&nbsp;<a href="register.php">Register Here</a>
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

include 'dbcon.php';


if(isset($_POST['submit'])){
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    
    
    $email_search = "select * from registration where email='$email' ";
    $query = mysqli_query($con, $email_search);
    
    
    $email_count = mysqli_num_rows($query);
    
    
    if($email_count){
        $email_pass = mysqli_fetch_assoc($query);
        
        $db_pass = $email_pass['Password'];

        $_SESSION['Name'] = $email_pass['Name'];
        
        $pass_decode = password_verify($password, $db_pass);
        
        
        if($pass_decode){
            ?>
                 <script>
                    alert("Login Successful");
                 </script>
                 <?php
                 $_SESSION['loggedin'] = true;
                 $_SESSION['Email'] = $email;
                 ?>
                 <script>
                    location.replace("index.php");
                 </script>
                
                
                <?php
       }
       else{
        ?>
        <script>
           alert("Invalid Password or Email");
        </script>
        
                <?php
       }
      }
    else{
      ?>
      <script>
         alert("Invalid password or email");
      </script>
      
              <?php
      }
    }
?>