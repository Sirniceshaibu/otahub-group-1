<?php
    session_start();
    require  "database-Connect.php";
    // fetchall method used when youre not specific of the selected Documentto get?

    $sql ="SELECT * FROM post ORDER BY id  DESC";
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $post = $statement->fetchAll(PDO::FETCH_ASSOC);


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
<nav class="navbar navbar-expand-lg navbar-white bg-white">
            <img  style="width:5%"src="photo/logos.jpg" alt="" class="image img-fluid">

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
                    <p><a href="logout.php" class="btn btn-dark mt-3">SignOut</a></p>
                </div>
            </div>
            </nav>

   <div style=" align-items:center;  margin-left: 100px; font-size:2rem">
   <?php foreach($post as $posts){?>
    <h4 style="text-align;color:white; font-size:3rem ">ATTACHMENT</h4>
                <a href="posts/<?Php echo $posts["attachment"];?>"><img style=" border-radius:20%;align-items: center;  width:15%"  src="posts/<?php echo $posts["attachment"];?>" alt=""  class="img-fluid"></a>
                <h4>USERID</h4>
                <?php echo $posts["userid"];?>
                <strong><h4 style="font-size:3rem ;align-items: center; ">DATE</h4></strong>
             <?php echo $posts["date_posted"];?>
             <?php
             date_default_timezone_set("Africa/Lagos");
                    echo date("l,h:i:");
                ?>
                     <strong><h4>FULLNAME</h4></strong>
             <?php echo $posts["fullname"];?>
             <strong><h4>POST</h4></strong>
             <?php echo $posts["post"];?>
          
      


<?php }?>

   </div>
   

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
