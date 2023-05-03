<?php
    session_start();
    require  "database-Connect.php";
    
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>
    <h1>
        <?php
        if(isset($_SESSION['success'])){
            echo $_SESSION['success'];
        }
        unset($_SESSION['success']);
        ?>
        <?php
        if(isset($_SESSION['error'])){
            echo $_SESSION['error'];
        }
        unset($_SESSION['error']);
        ?>
    </h1>

    <div class="dashboard">

        <nav class="navbar navbar-expand-lg navbar-white bg-white">
            <img src="@/assets/logos.jpg" alt="" class="image img-fluid">

            <div class="container">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link"href="profile.php">PROFILE</a>
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
        
            <marquee behavior="scroll" direction="left" style="color:white"><h1>WELCOME TO LOGIN PAGE</h1></marquee>
            <div class="email">
          

    </div>

    </div>
    <section class="container forms" style=" justify-content: center;background-position: center; background-size: cover; padding: auto;">
        <div class="form-login" >
            <div class="form-content mt-5">
                <header>lOGIN FORM</header>
                <div class="login">
                    <form action="login-process.php" class="mt-5"  method="post" enctype="multipart/form-data">
                       <h2 style="color:white"> LOGIN</h2>
                        <hr>
                        <div class="form-content">
                            <div class="row justify-content-md-center">
                                <div class="col-md-6 ">
                                    <input type="email" name="email" id="" placeholder="Email"  class="form-control">
                                </div>
                            </div>
                            <div class="row justify-content-md-center">
                                <div class="col-md-6 mt-5">
                                    <input type="password" name="password" id="" placeholder="password"  class="form-control">
                                </div>
                            </div>
                            <div class="field button-field mt-3">
                                <button class="btn btn-primary text-white" name="login" type="submit">Login</button>
                            </div>
                        </div>
                     </div>
                    </form>
                </div>
                

            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>