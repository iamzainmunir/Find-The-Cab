<?php

    if(isset($_POST['signupButton'])){
        include_once 'dbSetup.php';

        $FName = mysqli_real_escape_string($conn, $_POST['name']);
        $LName = mysqli_real_escape_string($conn,$_POST['Last-Name']);
        $Email = mysqli_real_escape_string($conn,$_POST['email']);
        $Contact = mysqli_real_escape_string($conn,$_POST['Contact-Number']);
        $Pass = mysqli_real_escape_string($conn,$_POST['password']);
        $ConPass = mysqli_real_escape_string($conn,$_POST['passwordConfirm']);

        if(empty($FName) || empty($LName) || empty($Email) || empty($Contact) || empty($Pass)){
            header("Location: index.php?signup=empty");
            exit();
        }else{

            if(!preg_match("/^[a-zA-Z]*$/", $FName) || !preg_match("/^[a-zA-Z]*$/", $LName)){
                 header("Location: index.php?signup=char");
                 exit();
            }
            else {
                if(!preg_match("/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/", $Email)){
                    header("Location: index.php?signup=email");
                    exit(); 
                }
                else{
                    if(!preg_match("/^(\+\d{1,3}[- ]?)?\d{10}$/",$Contact)){
                        header("Location: index.php?signup=contactinvalid");
                        exit();
                    }
                    else{
                    $sql = "SELECT * FROM users WHERE Contact='$Contact' OR Email='$Email';";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result); //found any row with same contact?

                    if($resultCheck > 0){
                        header("Location: index.php?signup=exist");
                    exit(); 
                    }
                    else{
                        if($Pass != $ConPass){
                            header("Location: index.php?signup=password");
                            exit(); 
                        }
                        else{
                            $securePass = password_hash($Pass, PASSWORD_DEFAULT);
                            $sql = "INSERT INTO users (FirstName, LastName, Email, Password, Contact) VALUES ('$FName','$LName','$Email','$securePass','$Contact');";
                            mysqli_query($conn, $sql);

                            header("Location: index.php?signup=success");
                            exit(); 
                        }

                    }
                    }
                }
            }

            
        }



    }else{
        header("Location: index.php");
        exit();
    }
  
   

?>