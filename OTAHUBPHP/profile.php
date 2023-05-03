<?php
    session_start();
 require  "database-Connect.php";


    if(!isset($_SESSION['email'])){
        $_SESSION['error']="you must login first";
        header("location:login.php");
    }

   
?>

<?php
   
   

    $userid=$_SESSION["id"];
    $fullname="";
    $username="";
    $gender="";
    $email="";
    $phone="";
    $image="";
    $update = false;

    if(isset($_GET["edit"])){
        $id = filter_input(INPUT_GET,"edit",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $update = true;
        $sql = "SELECT * FROM profiles WHERE userid = ?";
        $statement = $pdo->prepare($sql);
        $statement->execute([$id]);
        $profile = $statement->fetch(PDO::FETCH_ASSOC);
        $rowCount= $statement->rowCount();
        if(!$rowCount>0){
            echo "No record found";
            header("location:profile.php");
        }
        else{
            
            $fullname=$profile["fullname"];
            $username=$profile["username"];
            $email=$profile["email"];
            $phone=$profile["phone"];
            $gender=$profile["gender"];
            $admission=$profile["sessionofadmission"]; 
            $image=$profile["image"];
            $userid = $profile['userid'];
        }

    }
    

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PROFILE PAGE</title>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="main.css">
        <link href="https://fonts.googleapis.com/css2?family=Sora:wght@700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        
    </head>
    <body>
        <div>
            <h1>     
            <?php
                if(isset($_SESSION['error'])){
                    echo $_SESSION['error'];
                }
                unset($_SESSION['error']);
                ?>
            </h1>
        </div>
        <div>
           <h1>
           <?php
                if(isset($_SESSION['success'])){
                    echo $_SESSION['success'];
                }
                unset($_SESSION['success']);

            ?>
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
    <marquee behavior="scroll" direction="left" style="color:white"><h1>WELCOME TO PROFILE PAGE</h1></marquee>



    </div>

</div>



        <header><strong>FILL IN THE REQUIRED FIELDS</strong></header>
        <div class="profile" >
            <hr>
            <form action="process-profile.php" class="mt-5" method="post" enctype="multipart/form-data" >
                <div  style="display:none;">
                    <label for="userid">USERID:</label>
                    <input type="text" value="<?php echo $_SESSION['id']; ?>" name="userid">
                </div>
                <div class="row  justify-content-md-center">
                    <div class="col-md-6 mt-5">
                      <label for="fullname">FULLNAME:</label>
                      <input type="text" name="fullname" placeholder="fullname" value="<?php echo $fullname; ?>"  class="form-control">
                    </div>
                </div>
                <div class="row  justify-content-md-center">
                    <div class="col-md-6 mt-5">
                        <label for="username">USERNAME:</label>
                        <input type="text" name="username" placeholder="user name" value="<?php echo $username; ?>"class="form-control">
                    </div>
                </div>
                <div class="row  justify-content-md-center" style="display:none;">
                    <div class="col-md-6 mt-5">
                        <label for="email">EMAIL:</label>
                        <input type="email" name="email" placehoder="email"  value="<?php echo $_SESSION['email']; ?>" class="form-control">
                    </div>
                </div>
                <div class="row  justify-content-md-center" >
                    <div  class="col-md-6 mt-5">
                        <label for="phone">PHONE:</label>
                        <input type="tel" name="phone" placeholder="phone" value="<?php echo $phone; ?>" class="form-control">
                    </div>
                </div>
                <div class="row  justify-content-md-center" >
                    <div  class="col-md-6 mt-5">
                         <label for="gender">GENDER:</label>
                        <select name="gender" id="gender" class="form-control">
                        
                            <?php if($update==true){?>
                                <option value="<?php echo $gender;?>"><?php echo $gender;?></option>
                                <option value="male">male</option>
                                <option value="female">female</option>
                                <?php }else{?>
                                <option value="gender" >Select gender</option> 
                                <option value="male">male</option>
                                <option value="female">female</option>
                            <?php }?>
                       </select>
                    </div>
                </div>
                <div class="row  justify-content-md-center" >
                    <div  class="col-md-6 mt-5">
                        <label for="session">SESSIONOFADMISSION:</label>
                        <select name="sessionofadmission" id="admission" class="form-control">
                        <?php if($update==true){?>
                                <option value="<?php echo $admission;?>" ><?php echo $admission;?></option>
                                <option value="2020/2021">2021/2022</option>
                                <option value="2021/2022">2021/2022</option>
                                <option value="2022/2023">2022/2023</option>                               
                            <?php }else{?>
                                <option value="gender" >Select session</option> 
                                <option value="2020/2021">2021/2022</option>
                                <option value="2021/2022">2021/2022</option>
                                <option value="2022/2023">2022/2023</option> 
                            <?php }?>

                            

                        </select>
                    </div>
                </div>
                <div class="row  justify-content-md-center" >
                    <div class="col-md-6 mt-5">
                     <label for="image">IMAGE:</label>
                     <input type="file" name="image" placeholder="image" class="form-control">
                    </div>
                </div>

                <div class="row  justify-content-md-center" >
                    <div  class="col-md-6 mt-5">
                        <?php if($update==true){?>
                        <button type="submit" name="edit" class="btn btn-dark" >Update</button>
                        <?php }else{?>   
                        <button type="submit" name="create" class="btn btn-dark mt-3">Create Profile</button>
                       <a href="profile.php?edit=<?php echo $_SESSION['id']; ?>" class="text-white bg-dark">Edit</a>
                       
                        <?php } ?>
        
                    </div>
                </div>

            </div>
            </form>

        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
