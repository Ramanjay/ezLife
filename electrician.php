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
    <link rel="stylesheet" href="css/services.css">

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

    <!-- service form -->
    <div class="container-fluid yellow-section">
        <br>
        <div class="row">
            <div class="col-lg-6">
                <h2 class="text-center font-weight-bold">Electrician</h2>
                <img class="service-img" src="images/electrician-2.png" alt="plumbing image">
            </div>
            <div class="col-lg-6">
                <h3 class="text-center font-weight-bold">Book Your Service</h3>
                <div class=" form-display yellow-section">
                        <form action="electrician.php" method="post">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name" name="Name" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Contact Number</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="Contact Number" name="Mobile" pattern="[6-9]\d{9}"  title="Invalid Phone number" required>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Address</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="Address" name="Address" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Date</label>
                            <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="Date" name="Date" required>
                        </div>
                        <div class="form-group">
                            <label for="inputState">Choose Timing</label>
                            <select id="inputState" class="form-control" placeholder="Time" name="Time" required>
                                <option selected>Select</option>
                                <option>10AM - 12PM</option>
                                <option>12PM - 03PM</option>
                                <option>03PM - 06PM</option>
                                <option>06PM - 09PM</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Issue</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                placeholder="Describe your issue here" name="issue" required></textarea>
                        </div>
                        <div class="text-center">
                                <input type="submit" class="btncreateaccount" name= "submit" value="submit"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

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

</html>

<?php 

 include  'dbcon.php';
    
 if(isset($_POST['submit']))
 {
    $username =  $_POST['Name'];
    $address = $_POST['Address'];
    $contact =  $_POST['Mobile'];
    $date =  $_POST['Date'];
    $time =  $_POST['Time'];
    $description =  $_POST['issue'];


$contactquery = " select * from registration where Mobile='$contact' ";
$query = mysqli_query($con, $contactquery);


$contactcount = mysqli_num_rows($query); 

if($loggedin){

if($contactcount==0){
       ?>
         <script>alert("Error: Please Use Registered Mobile Number")</script>
         <script>
                    location.replace("electrician.php");
                 </script>
         <?php
          
    }else{
    
    $insertquery = "insert into electrician (Name, Mobile ,Address , Date, Time , Issue
                 ) values( '$username' , '$contact' , '$address','$date','$time','$description')";
       
       $iquery = mysqli_query($con, $insertquery);
       
       
       if($iquery){
              ?>
                 <script>
                    alert("Success: Your Service Has been Booked");
                 </script>
                 <script>
                    location.replace("electreceipt.php");
                 </script>
              <?php

         }else{
  
             ?>
                 <script>
                    alert("Error: Service Not Booked, Please Use Registered Mobile Number");
                 </script>
                 <script>
                    location.replace("electrician.php");
                 </script>
             <?php
                 
         }
        }
    
      
    }
      else {
        ?>
        <script>
        alert("Please login first");
     </script>

                <script>
                    location.replace("login.php");
                 </script>
     <?php
    }
}
 ?>