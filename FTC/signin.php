<?php

session_start();
    if(isset($_POST['submitLogin'])){

        include_once 'dbSetup.php';
    
        $UserName = mysqli_real_escape_string($conn, $_POST['email']);
        $UserPass = mysqli_real_escape_string($conn,$_POST['password']);

        if(empty($UserName) || empty($UserPass)){

         

            header("Location: index.php?login=empty");

            

            exit();

        }else{
            $sql = "SELECT * FROM users WHERE Contact='$UserName' OR Email='$UserName';";
            $result = mysqli_query($conn,$sql);
            $resultCheck = mysqli_num_rows($result);
            if($resultCheck < 1){
                header("Location: index.php?login=error");

             
                
                exit();
            }else{
                if($row = mysqli_fetch_assoc($result)){
                    $PassVerify = password_verify($UserPass,$row['Password']);
                    if($PassVerify == false){
                        header("Location: index.php?login=error");

                       

                         exit();
                    }elseif($PassVerify == true){

                        //session variable is super global variable which can be accessible to all pages as long as session is running
                        $_SESSION['u_id'] = $row['id'];
                        $_SESSION['u_fname'] = $row['FirstName'];
                        $_SESSION['u_lname'] = $row['LastName'];
                        $_SESSION['u_email'] = $row['Email'];
                        $_SESSION['u_Contact'] = $row['Contact'];

                        header("Location: map.php?login=success");
                        exit();

                    }
                }
            }
        }
    }else{
        header("Location: index.php?login=zzz");
        exit();
    }
?>