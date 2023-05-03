<?php

    if(isset($_POST["create"])|| isset($_POST["edit"])){
        session_start();
        require  "database-Connect.php";
        $allowed_ext = ["png","jpg","jpeg","gif","PNG","JPG","JPEG","GIF"];

        $userid=filter_input(INPUT_POST,'userid',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $fullname =filter_input(INPUT_POST,'fullname',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $username=filter_input(INPUT_POST,'username',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $phone = filter_input(INPUT_POST,'phone',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $gender = filter_input(INPUT_POST,'gender',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $admission = filter_input(INPUT_POST,'sessionofadmission',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    

        $image_name = $_FILES["image"]["name"]; 

        if(!empty($image_name)){
            $image_size = $_FILES["image"]["size"];
            $image_tmp = $_FILES["image"]["tmp_name"];
            $image_ext = explode(".", $image_name);
            $image_ext = strtolower(end($image_ext));
            $dayInNumber = date("d");
            $monthInNumber = date("m");
            $year =date("Y");
            $time24Hrs = date("G");
            $timeMin = date("i");
            $secs = date("s");
            $image_name ="{$phone}{$dayInNumber}{$monthInNumber}{$year}{$time24Hrs}{$timeMin}{$secs}.{$image_ext}";
            $final_dir = "uploads/{$image_name}";
        }

        if(isset($_POST["create"])){
            
           if(empty($userid)||empty($fullname)||empty($username)||empty($email)||empty($phone)||empty($gender)||empty($admission)){
             $_SESSION["error"] = "All fields are required";
             header("location:profile.php");
             exit();
            }

            if(!preg_match("/^[a-zA-z]*$/", $fullname)){
                $_SESSION["error"]="Only letters are allowed";
                header("location:profile.php");
                exit();

            }
            if(!preg_match("/^[a-zA-z]*$/",$username)){
                $_SESSION["error"]="Only letters are allowed";
                header("location:profile.php");
                exit();
            }
            if(preg_match('/^[+] [0-9]/',$phone)){
                $_SESSION["error"]="Only numbers are allowed";
                header("location:profile.php");
                exit();
            }
            $sql = "SELECT userid FROM profiles WHERE userid=?";
            $statement = $pdo->prepare($sql);
            $statement->execute([$userid]);
            $users= $statement->fetch(PDO::FETCH_ASSOC);
            if($users){
             $_SESSION["error"] = "email or phone already exists";
             header("location:profile.php");
             exit();
            }

            if(!empty($image_name)){
                if (!in_array($image_ext,$allowed_ext)){
                    $_SESSION["error"] = "Invalid file type";
                    header("location:profile.php");
                    exit();
                }
                if($image_size > 1000000){
                    $_SESSION["error"] = "file size is too large";
                    header("location:profile.php");
                    exit();
                }

                $sql = "INSERT INTO profiles (userid,fullname,username,email,phone,gender,sessionofadmission, image) VALUES (?, ?, ?, ?, ?,?,?,?)";
                $statement = $pdo->prepare($sql);
                $statement->execute([$userid,$fullname,$username,$email,$phone,$gender,$admission,$image_name]);
                
                move_uploaded_file($image_tmp, $final_dir);
                
                if($statement->rowCount()  > 0){
                    $_SESSION["success"] = "Profile Created";
                    header("location:profile.php");
                
                }else{
                    $_SESSION["error"] = "Failed to create profile";
                    header("location:profile.php");
                }
            }
            
        }
        


        if(isset($_POST["edit"])){
            if(empty($userid)||empty($fullname)||empty($username)||empty($email)||empty($phone)||empty($gender)||empty($admission)){
                $_SESSION["error"] = "All fields are required";
                header("location:profile.php");
                exit();
            }
            if(!empty($image_name)){
                if(!in_array($image_ext,$allowed_ext)){
                    $_SESSION["error"] = "Invalid file type";
                    header("location:profile.php");
                    exit();
                }
                
                if($image_size > 1000000){
                    $_SESSION["error"] = "file size is too large";
                    header("location:profile.php");
                    exit();
                }
                
            }
            if (empty($image_name)){
                $sql="UPDATE profiles SET fullname=?,username=?,phone=?,gender=?,sessionofadmission=? WHERE userid=?";
                $statement = $pdo->prepare($sql);
                $statement->execute([$fullname,$username,$phone,$gender,$admission, $userid]);
                if ($statement->rowCount()>0){
                    $_SESSION["success"]="successfully updated";
                    header("location:profile.php");
                 }else{
                    $_SESSION["error"]="failed to update without image";
                    header("location:profile.php");
                }
             }else{
                $sql="UPDATE profiles SET fullname=?,username=?,phone=?,gender=?,sessionofadmission=?,image=? WHERE userid=?";
                $statement = $pdo->prepare($sql);
                $statement->execute([$fullname,$username,$phone,$gender,$admission,$image,$userid]);
                move_uploaded_file($image_tmp,$final_dir);

                if ($statement->rowCount()>0){
                    $_SESSION["success"]="successfully updated";
                    header("location:profile.php");
                 }else{
                    $_SESSION["error"]="failed to update";
                    header("location:profile.php");
                }
             }
             
               
        }   

        
         
    }
   
    
?>