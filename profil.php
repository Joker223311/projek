<?php
session_start();

if (empty($_SESSION['fullname'])) {
    header("Location: index.php");
    exit();
}
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>

    <style>
        .topkiri {
    position: absolute;
    top: 100px;
    left: 250px;
    font-size: 18px;
        }
        .untukusername {
    position: absolute;
    top: 120px;
    left: 650px;
    font-size: 25px;
    color: blue;
    font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
        }
        .center {
  position: absolute;
  bottom: 200px;
  width: 100%;
  text-align: center;
  font-size: 18px;
  color: aliceblue ;
  border: 5px white;
}

    </style>
</head>
<body>

    <div class="topkiri"> <img src="assets/images/lgo.jpg" alt="topleft" width="300px" ></div>
    <div class="untukusername"><br>

        <?php echo "<h1>Hallo, " . $_SESSION['fullname'] ."!". "</h1>"; ?>
        
        <?php
        include "connect.php";
        $no = 1;
        $query = mysqli_query($conn, "SELECT * FROM users WHERE fullname='$_SESSION[fullname]'");
        while ($data = mysqli_fetch_array($query)) {
        ?>
           <p><?php echo $data['email'] ?></p>
          
        
        <?php } ?>
  

    </div>
 
    

    <div class="bottomleft">
    
    <a href="home.php"><button type="button" name="myButton">Back</button></a>
    </div>

    <div class="bottomright">
    
    <a href="logout.php"><button type="button" name="myButton">Log Out</button></a></div>
</div>
    

  

</body>
</html>