<?php

    if(isset($_POST["enter"])){
        session_start();
        require  "database-Connect.php";

        $email = $_POST["email"];
        $password = $_POST["password"];
        $cpassword = $_POST["cpassword"];
        if(empty($email)||empty($password)||empty($cpassword)){
            $_SESSION["error"] = "All fields are required";
            header("location:registration.php");
            exit();
        }
        if(filter_var($email, FILTER_VALIDATE_EMAIL)===false){
            $_SESSION["error"] = "Invalid email format";
            header("location:registration.php");
            exit;

        }
       
        if($password !== $cpassword){
            $_SESSION['error'] = "Your password and confirm password does not match";
            header("Location: registration.php");
            exit();
        }
        if(strlen($password) < 5){
            $_SESSION["error"] = "Password must be greater than five";
            header("Location: registration.php");
            exit();
        }
    
        $sql = "SELECT email FROM users WHERE email = ? ";
        $statement =$pdo->prepare($sql);
        $statement->execute ([$email]);
        $row = $statement->fetch(PDO::FETCH_ASSOC);
        $rowCount = $statement->rowCount();
        
        if($rowCount >0){
            $_SESSION["error"] = "email already exits";
            header("location:registration.php");
            exit();
        }
        

        $sql = "INSERT INTO users (email, password) VALUES (?,?)";
        $statement = $pdo->prepare($sql);
        $statement->execute([$email,$password]);
        
        if($statement->rowCount() > 0){
            $_SESSION["success"] = "Inserted Successfully";
            header("location:login.php");
        
        }else{
            $_SESSION["error"] = "Failed to insert";
            header("location:registration.php");
        }
    }
    
    if(isset($_POST["login"])){

        $email = $_POST["email"];
        $password = $_POST["password"];

        session_start();
        require  "database-Connect.php";
        if(empty($email)||empty($password)){
            $_SESSION["error"] = "All fields are required";
            header("location:login.php");
            exit();
        }
    
        $sql = "SELECT email,password FROM users WHERE email = ? AND password=?";
        $statement =$pdo->prepare($sql);
        $statement->execute([$email,$password]);
        $row = $statement->fetch(PDO::FETCH_ASSOC);
        $rowCount  = $statement->rowCount();

        if($rowCount > 0){
            $_SESSION["success"] = "LOGIN SUCCESSFULLY";
            header("location:dashboard.php");
        }else{
            $_SESSION["error"] = "Incorrect email or passwaord";
            header("location:login.php");

        }
   }




?>