<?php
    if(isset($_POST["login"])){
        session_start();
        require  "database-Connect.php";

        $email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST,'password',FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    
        if(empty($email)||empty($password)){
            $_SESSION["error"] = "All fields are required";
            header("location:login.php");
            exit();
        }
        if(filter_var($email, FILTER_VALIDATE_EMAIL)===false){
            $_SESSION["error"] = "Invalid email format";
            header("location:login.php");
            exit;

        }
       
        if(strlen($password) < 5){
            $_SESSION["error"] = "Password must be greater than five";
            header("Location: login.php");
            exit();
        }
    
        $sql = "SELECT  id,email,password FROM users WHERE email = ? AND password=?";
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


        if($row){
            $_SESSION['success']="login successful";
            $_SESSION['email']=$row['email'];
            $_SESSION['id']=$row["id"];
            header("location:dashboard.php");
        }else{
            $_SESSION["error"]="invalid details";
            header("location:login.php");
        }
    }
?>