<?php
    session_start();

    if(!isset($_SESSION['email'])){
        $_SESSION['error']="you must login first";
        header("location:login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>dashboard</title>
    
</head>
<body>
    <div class="dashboard">

        <div> 
        <nav class="navbar navbar-expand-lg navbar-white bg-white">
            <img src="@/assets/logos.jpg" alt="" class="image img-fluid">

            <div class="container">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link"href="profile.php"> CREATE PROFILE</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="community.php">COMMUNITY PAGE</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="dashboard.php"> DASHBOARD</a>
                    </li>
                    
                    </ul>
                    <p><a href="logout.php" class="btn btn-danger mt-3">SignOut</a></p>
                </div>
            </div>
            </nav>
        </div>
        <marquee behavior="scroll" direction="left" style="color:white"><h1>WELCOME TO DASHBOARD PAGE</h1></marquee>
        <div class="email">
        <h1 style="color:white;"><?php echo $_SESSION['email'];?></h1></p>

        </div>

    </div>


    <!-- resources -->
    <section id="resources">
        <div class="container-fluid">
            <div class="row mb-5">
                <div class="col-md-8 mx-auto text-center">
                    <h6 class="text-primary">TEAM MEMBERS</h6>
                    <h1>Meet Our Team:</h1>

                </div>
            </div>
            <div class="row g-3">
                <div class="col-lg-4 col-sm-6">
                    <div class="project">
                        <img src="photo/dave.jpg" alt="" class="img-fluid">
                        <div class="overlay">
                            <div>
                                <h4 class="text-white">David Mark</h4>
                                <h6 class="text-white">Founder</h6>
                                
                            </div>
                            
                           
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="project">
                        <img src="photo/adarsh.jpg" alt="" class="img-fluid" style="">
                        <div class="overlay">
                            <div>
                                <h4 class="text-white">Adarsh Nagmoti</h4>
                                <h6 class="text-white">Team Member</h6>
                            </div>
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="project">
                        <img src="photo/jacob.jpg" alt=" " class="img-fluid h-50">
                        <div class="overlay">
                            <div>
                                <h4 class="text-white">Jacob Timms</h4>
                                <h6 class="text-white">Team Member</h6>
                            </div>
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="project">
                        <img src="photo/lore.jpg" alt="" class="img-fluid">
                        <div class="overlay">
                            <div>
                                <h4 class="text-white">Lore Peteers</h4>
                                <h6 class="text-white">Team Member</h6>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="project">
                        <img src="photo/victoria.jpg" alt="" class="img-fluid h-50">
                        <div class="overlay">
                            <div>
                                <h4 class="text-white">Tina</h4>
                                <h6 class="text-white">Creative-Director</h6>
                            </div>
                         
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="project">
                        <img src="photo/amedu.jpg" alt=""class="img-fluid">
                        <div class="overlay">
                            <div>
                                <h4 class="text-white">Amedu Mark</h4>
                                <h6 class="text-white">Team Member</h6>
                            </div>
                            
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
 </body>
</html>