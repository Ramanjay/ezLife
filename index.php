<?php 
      session_start();
      if(isset($_SESSION['loggedin'])&& $_SESSION['loggedin'] == true){
         $loggedin = true;
      }
      else {
         $loggedin = false;
      }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ezLife</title>

    <!-- css script -->
    <link rel="stylesheet" href="css/styles.css">

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
    <?php
    echo '<nav id="nav" class="yellow-section navbar navbar-expand-lg navbar-light">
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
                    </li>';
                    if(!$loggedin){
                    echo'<li class="nav-item">
                        <a class="nav-link nav-item" href="login.php">Login / Sign Up</a>
                    </li>';
                    }
                    if($loggedin){
                        echo'<li class="nav-item dropdown nav-item">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">';
                            echo $_SESSION['Name'];
                        echo'</a>
                        <div class="dropdown-menu nav-item" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="logout.php">Logout</a>
                        </div>
                    </li>';
                    }
                echo'</ul>
            </div>
        </div>
    </nav>';
    ?>

    <!-- title -->
    <div class="container-fluid yellow-section" id="title">
        <div>Ditch the Worry about Home Repair.</div>
    </div>

    <!-- home image -->
    <div class="container-fluid yellow-section">
        <img class="home-img" src="images/bg-img.png" alt="background-img">
    </div>

    <!-- services -->
    <div class="container grey-section" id="services">
        <div class="container-fluid" id="services-heading">
            <h1>OUR SERVICES</h1>
            <hr>
            <h2>Find Local Service Men Near You</h2>
        </div>

        <!-- cards -->
        <div class="row">
            <div class="card">
                <img class="card-img-top" src="images/plumber.png" alt="Plumber img">
                <div class="card-body">
                    <h5 class="card-title text-center">Plumber</h5>
                    <div class="text-center"><a href="plumber.php" class="card-link">Find</a></div>
                </div>
            </div>

            <div class="card">
                <img class="card-img-top" src="images/carpenter.png" alt="Carpenter img">
                <div class="card-body">
                    <h5 class="card-title text-center">Carpenter</h5>
                    <div class="text-center"><a href="carpenter.php" class="card-link">Find</a></div>
                </div>
            </div>

            <div class="card">
                <img class="card-img-top" src="images/electrician.png" alt="Electrician img">
                <div class="card-body">
                    <h5 class="card-title text-center">Electrician</h5>
                    <div class="text-center"><a href="electrician.php" class="card-link">Find</a></div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>

    <!-- About us -->
    <div class="container-fluid yellow-section" id="aboutus">
        <br>
        <div class="row">
            <div class="col-lg-6">
                <ul>
                    <h2>About us</h2>
                    <li>
                        <h5>In ezLife, we are available with the services that one needs to keep their home well
                            maintained. we are increasing our no of services day by day.</h5>
                    </li>
                    <br>
                    <li>
                        <h5>Right now we have some services on our list and we will be increasing them in the coming
                            days.</h5>
                    </li>
                    <br>
                    <li>
                        <h5>We believe in serving the best quality service to our customers.</h5>
                    </li>
                    <br>
                    <li>
                        <h5>Currently, we are serving in Shalimar Bagh, Burari & Keshav Puram only. In near future, we
                            are looking forward to expanding our services to the entire Delhi.</h5>
                    </li>
                </ul>
                <br>
                <h5>&emsp;&ensp;<i class="fas fa-times-circle"></i>&ensp;No Additional Charges</h5>
                <h5>&emsp;&ensp;<i class="fas fa-check-circle"></i>&ensp;Just Pay for Your Services</h5>
                <h5>&emsp;&ensp;<i class="fas fa-user-circle"></i>&ensp;All Local Handymen</h5>
                <br>
            </div>
            <div class="col-lg-6">
                <h5>For Any Query:</h5>
                <!-- form -->
                <div class=" form-display yellow-section">
                        <form action="index.php" method="post">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name" name="Name" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Email</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email" name="Email" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Phone Number</label>
                            <input type="number" class="form-control" id="exampleFormControlInput1"
                                placeholder="Phone Number" name="Mobile" pattern="[6-9]\d{9}"  title="Invalid Phone number" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Message</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                placeholder="Enter your Message here" name="Message" required></textarea>
                        </div>
                        <div class="text-center">
                                <input type="submit" class="btncreateaccount" name= "submit" value="submit"/>
                        </div>
                    </form>
                </div>
                <br>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>

    <!-- features -->

    <!-- footer -->
    <hr>
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
    
 if(isset($_POST['submit']))
 {
    $username =  $_POST['Name'];
    $email = $_POST['Email'];
    $contact =  $_POST['Mobile'];
    $description =  $_POST['Message'];


    
    
    $insertquery = "insert into query (Name, Email , Mobile , Message
                 ) values( '$username' , '$email' , '$contact','$description')";
       
       $iquery = mysqli_query($con, $insertquery);
       
       
       if($iquery){
              ?>
                 <script>
                    alert("we will contact you soon ");
                 </script>
              <?php

         }else{
  
             ?>
                 <script>
                    alert(" error ");
                 </script>
             <?php
                 
         }
     
    
        }
     
 ?>