<?php
/*
$dbServerName = "sql210.ultimatefreehost.in";
$dbUserName = "ltm_21761635";
$dbPassword = "project1234";
$dbTableName = "ltm_21761635_ftcrecords";
*/

$dbServerName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbTableName = "ftcrecords";

$conn = mysqli_connect($dbServerName , $dbUserName , $dbPassword , $dbTableName);

  if (mysqli_connect_error())
  {
  die("Failed to connect to MySQL: " . mysqli_connect_error());
  }
  else{
      echo "Failed to connect with mysql !";
  }

/*
  $query = "UPDATE 'Records' SET name = 'zainmunirhtml' WHERE id = 2 LIMIT 1";
  $query ="INSERT INTO 'Records'('name','Password') VALUES('zainmunir','edmodo1234')";
  mysqli_query($con , $query);

    $query ="INSERT INTO Records (name,Password) VALUES('zainmunir','edmodo1234')";
  if(mysqli_query($con , $query)){
      echo "SS";
  }
  else{
      echo "FF";
  }


    $query = "UPDATE Records SET name = 'omer' WHERE id = 3 LIMIT 1";
  if(mysqli_query($con , $query)){
    echo "SS";
}
else{
    echo "FF";
}


 

$email = "ZAIN";
$pass = "ZAINKAPASS";


$con = mysqli_connect("sql210.ultimatefreehost.in","ltm_21761635","project1234","ltm_21761635_Users");

// Check connection
if (mysqli_connect_error())
  {
  die("Failed to connect to MySQL: " . mysqli_connect_error());
  }


  $query = "SELECT * FROM Records";
  $result = mysqli_query($con , $query);

  if(mysqli_num_rows($result) > 0)
  {

    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["ID"]. " - Email: " . $row["EMAIL"]. " - Password: " . $row["PASSWORD"]. "<br>";
        if($email == $row["EMAIL"] && $pass == $row["PASSWORD"])
        {
            echo "go on";
        }
        else{
            echo "fail";
        }
    }
    } else {
            echo "0 results";
    }

/*
      $row = mysqli_fetch_array($result);
      echo "Your name is ".$row['EMAIL']." Your pass is ".$row['PASSWORD'];
  }
  else{
      echo "error";
  }
*/




?>
