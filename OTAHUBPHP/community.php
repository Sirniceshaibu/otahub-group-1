
<?php
    session_start();
    require  "database-Connect.php";

        $user_id = $_SESSION['id'];

        $sql = "SELECT * FROM profiles WHERE userid= ? ";
        $statement =$pdo->prepare($sql);
        $statement->execute([$user_id]);
        $row = $statement->fetch(PDO::FETCH_ASSOC);
        $rowCount = $statement->rowCount();
        
    if($rowCount >0){
         $row['fullname'];
     }
        
    
?>
<!DOCTYPE html>
<html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title> 
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
        </h1>
        <?php
            if(isset($_SESSION['error'])){
                echo $_SESSION['error'];
            }
            unset($_SESSION['error']);

        ?>
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
                        <li class="nav-item">
                        <a class="nav-link" href="postTable.php"> VIEW POSTS</a>
                        </li>
                    
                    </ul>
                    <p><a href="logout.php" class="btn btn-danger mt-3">SignOut</a></p>
                </div>
            </div>
            </nav>
        </div>
        <marquee behavior="scroll" direction="left" style="color:white"><h1>WELCOME TO COMMUNITY PAGE</h1></marquee>
        <div class="email">
        <h1 style="color:white;"><?php echo $_SESSION['email'];?></h1></p>

    </div>

</div>
        <form action="community-process.php" class="mt-5"  method="post" enctype="multipart/form-data">
            <section class="container forms">
            <div class="form login" style= " border-radius: 30PX;text-align: center;padding: 30px;">
                <div class="form-content">
                <h2>LET'S INTERACT</h2>
                <hr>
                
                   <div class="row justify-content-md-center">
                        <div class="col-md-6 ">
                            <input type="text" name="userid" placeholder="Userid" value=" <?php echo $_SESSION['id']?>" class="form-control" style="display:none">
                        </div>
                    </div>
                    <div class="row justify-content-md-center">
                        <div class="col-md-6 ">
                            <input type="text" name="fullname" id="" placeholder="fullname"  class="form-control" value="<?php echo $row['fullname']; ?>" style="display:none">
                        </div>
                    </div>
                    <div class="row justify-content-md-center">
                        <div class="col-md-6 mt-5">
                            <input type="file" name="attachment" id="" placeholder="file"  class="form-control">
                        </div>
                    </div>
                    <div class="row justify-content-md-center">
                        <div class="col-md-6 mt-5">
                            <textarea name="post" id="" cols="30" rows="10" Placeholder="Message"  class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="field button-field mt-3">
                        <button class="btn btn-primary text-white" name="send" type="submit">Send</button>
                    </div>
                </div>
            </div>
        </form>

        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>

      

       
        