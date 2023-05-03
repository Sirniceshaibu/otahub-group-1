<?php
session_start();
require  "database-Connect.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="main.css">
        <link href="https://fonts.googleapis.com/css2?family=Sora:wght@700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>REGISTRATION PAGE</title>
</head>
<body>
    
    
    <h1>
        <?php  
            if(isset($_SESSION['success'])){
                echo $_SESSION['success'];
            }
            unset($_SESSION['success']);
        ?>
    </h1>
    
    <div>
       <h1>
           <?php if(isset($_SESSION['error'])){ ?>
                <input type="text" value="<?php echo $_SESSION['error'] ?>">
            <?php } unset($_SESSION['error']); ?>
       </h1>
    </div>
    
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
                            <a class="nav-link"href="profile.php">PROFILE PAGE</a>
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
<marquee behavior="scroll" direction="left" style="color:white"><h1>WELCOME TO REGISTRATION PAGE</h1></marquee>
<div class="email">


</div>

</div>

   <section class="container forms" style=" justify-content: center;background-position: center; background-size: cover; padding: auto;">
        <div class="form-content registration mt-5" style=" ">
            <header class="header">REGISTRATION FORM</header>
            <div class="register">
                <form action="registration-process.php" class="mt-5"  method="post" enctype="multipart/form-data">
                    <h2 style="color:white">REGISTER</h2>
                    <hr>
                    <div class="row justify-content-md-center">
                        <div class="col-md-6 mt-5">
                            <input type="text" name="email" id="" placeholder="Email" class="form-control">
                        </div>

                    </div>
                    <div class="row justify-content-md-center">
                    <div class="col-md-6 mt-5"> 
                        <input type="password" name="password" id="" placeholder="enter password"class="form-control">
                    </div>

                    
                    </div>
                    <div class="row justify-content-md-center">
                    <div class="col-md-6 mt-5">
                    <input type="password" name="cpassword" id="" placeholder="confirm password"class="form-control">
                    </div> 
                    </div>

                    <div class="field button-field mt-3">
                        <button class="btn btn-primary"type="submit" name="enter" >Signup</button>

                    </div>
                    <div class="form-link mt-3">
                        <span>Already have an account? <a href="login.php" class="login-link" style="color:white">Login</a></span>
                    </div>
            
                </form>
            </div>
           
        </div>
    </section>
       



 

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>