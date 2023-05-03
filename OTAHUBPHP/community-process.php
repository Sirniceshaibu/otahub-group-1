<?php

    if(isset($_POST["send"])){
        session_start();
        require  "database-Connect.php";
        $allowed_ext = ["png","jpg","jpeg","gif","pdf","mp3","mp4","PNG","JPG","JPEG","GIF","PDF","MP3","MP4"]; 

        $userid=filter_input(INPUT_POST,'userid',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $fullname =filter_input(INPUT_POST,'fullname',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $post=filter_input(INPUT_POST,'post',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $attachment = $_FILES["attachment"]["name"]; 

        if(empty($post)){
            $_SESSION["error"] = "All fields are required";
            header("location:community.php");
            exit();
        }
        if(empty($attachment)){
            $sql = "INSERT INTO post (userid,fullname,attachment,post) VALUES (?, ?, ?, ?)";
            $statement = $pdo->prepare($sql);
            $statement->execute([$userid,$fullname,$attachment,$post]);
            
            move_uploaded_file($attachment_tmp, $final_dir);
            
            if($statement->rowCount()>0){
                $_SESSION["success"] = "Post sent";
                header("location:community.php");
            
            }else{
                $_SESSION["error"]= "Failed to post";
                header("location:community.php");
            }
        }

        if(!empty($attachment)){
            $attachment_size = $_FILES["attachment"]["size"];
            $attachment_tmp = $_FILES["attachment"]["tmp_name"];
            $attachment_ext = explode(".", $attachment);
            $attachment_ext = strtolower(end($attachment_ext));
            $dayInNumber = date("d");
            $monthInNumber = date("m");
            $year =date("Y");
            $time24Hrs = date("G");
            $timeMin = date("i");
            $secs = date("s");
            $attachment ="{$phone}{$dayInNumber}{$monthInNumber}{$year}{$time24Hrs}{$timeMin}{$secs}.{$attachment_ext}";
            $final_dir = "posts/{$attachment}";


            if (!in_array($attachment_ext,$allowed_ext)){
                $_SESSION["error"] = "Invalid file type";
                header("location:community.php");
                exit();
            }
            if($attachment_size > 1000000){
                $_SESSION["error"] = "file size is too large";
                header("location:community.php");
                exit();
            }

            $sql = "INSERT INTO post (userid,fullname,attachment,post) VALUES (?, ?, ?, ?)";
            $statement = $pdo->prepare($sql);
            $statement->execute([$userid,$fullname,$attachment,$post]);
            
            move_uploaded_file($attachment_tmp, $final_dir);
            
            if($statement->rowCount()>0){
                $_SESSION["success"] = "Post sent";
                header("location:community.php");
            
            }else{
                $_SESSION["error"]= "Failed to post";
                header("location:community.php");
            }

        }
            
        if(empty($attachment)){
            $sql = "INSERT INTO post (userid,fullname,attachment,post) VALUES (?, ?, ?, ?)";
            $statement = $pdo->prepare($sql);
            $statement->execute([$userid,$fullname,$attachment,$post]);
            
        }
        
    }

        
    
?>
    