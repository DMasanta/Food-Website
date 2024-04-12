<?php
$insert = false;
if(isset($_POST['name'])){
 //set connection variables
 $server = "localhost";
 $username = "root";
 $password ="";

  //create a database connection
  $con = mysqli_connect($server, $username, $password);

  // check for connection success
  if(!$con){
      die("connection to this database filed due to" . mysqli_connect_error());
  }
  //echo "Success connecting to the db";
// collect post variables
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$massage = $_POST['massage'];
$sql = "INSERT INTO `food`.`food` (`name`, `email`, `phone`, `massage`, `dt`) VALUES ('$name', '$email', '$phone', '$massage', current_timestamp());";
 //echo $sql;

    // execute the query
    if($con->query($sql) == true){
        //echo "<p class='submitMsg'>Thanks for submitting this form. We are trying to solve your problem soon</p>";

        // flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // close the database connection
    $con->close();
}
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best online Food Delivary Service in India | MyOnlineMeals.com</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" media="screen and (max-width: 1170px)" href="css/phone.css">
</head>
<style>
    .output{
        max-width: 80%;
        padding: 85px;
        margin: 80px;
    }
    .output h3{
        color: black;
        text-align: center;
        font-size: 30px;
        
    }
  
</style>
<body>
<div class="output">
    <body bgcolor="f2f2f2"> 
        <?php
        if($insert == true){
        echo "<h3 class='submitMsg'>** Thanks for submitting this form. We are trying to solve your problem soon **</h3>";
        }
        ?>
</body>
</html>