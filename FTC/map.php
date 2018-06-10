<?php
   session_start();
?>

<!DOCTYPE html>
<html>
<head>
    
    <title>Page Title</title>
    <script type="text/javascript" src="../jquerylib/jquery.min.js"></script>

    <style type = "text/css">
    #map{
          height: 400px;
          width: 100%;
    }
    #logout{
        float: right;
    }

    </style>

</head>
<body>

<?php

    if(isset($_SESSION['u_id'])){

        $fname = $_SESSION['u_fname'];
        $lname = $_SESSION['u_lname'];
        

        echo '<form action="logout.php" method = "POST">


                <button type="submit" name="submit" id="logout">Log-Out</button>


            </form>
        ';

        echo '<center><h2>WELCOME '.$fname." ".$lname."</h2></center>";
        echo '<h1>Google map</h1>
        <div id="map"></div>
        
        <script>
            function initMap(){
                var options = {
                    zoom:10,
                    center:{lat: 25.0700 , lng: 67.2848}
                }
        
                var map = new google.maps.Map(document.getElementById("map"), options);
            }
        </script>
        
        <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-ggrPKC83_isclBmz7UqtTJAZzeo-7q4&callback=initMap">
        </script>
        ';
  

 }else{
    header("Location: index.php");
    exit();

 }


?>


</body>
</html>