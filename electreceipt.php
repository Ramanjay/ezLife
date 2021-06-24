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
                    <?php
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
                    ?>
                </ul>
            </div>
        </div>
    </nav>

    <!-- receipt form -->
    <div class="container-fluid yellow-section">
        <br>
        <div class="row">
            <div class="col-lg-6">
                <img class="service-img" src="images/receipt.png" alt="receipt image">
            </div>
            <div class="col-lg-6">
                <h3 class="text-center font-weight-bold"> Electrician Receipt</h3>
                <br>
                <div class=" form-display yellow-section">
                    <form action="receipt.php" method="post">
                    <table class="table table-bordered">
                        <tbody>
                        <?php

                            include  'dbcon.php';

                            $selectquery=" SELECT * from electrician ORDER BY id DESC LIMIT 1 ";
                            
                            $query_run=mysqli_query($con,$selectquery);
                            
                            if($res=mysqli_fetch_array($query_run))
                            {
                                ?>


                            <tr>
                                <th scope="row">Name</th>
                                <td><?php echo $res['Name'];?></td>
                                
                            </tr>
                            <tr>
                                <th scope="row">Contact Number</th>
                                <td><?php echo $res['Mobile'];?></td>
                            </tr>
                            <tr>
                                <th scope="row">Address</th>
                                <td><?php echo $res['Address'];?></td>
                            </tr>
                            <tr>
                                <th scope="row">Date</th>
                                <td><?php echo $res['Date'];?></td>
                            </tr>
                            <tr>
                                <th scope="row">Timings</th>
                                <td><?php echo $res['Time'];?></td>
                            </tr>
                            <tr>
                                <th scope="row">Issue</th>
                                <td><?php echo $res['Issue'];?></td>
                            </tr>
                            
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </form>
                <h5 class="text-center font-weight-bold"> Please Take a Screenshot</h5>
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

</html>