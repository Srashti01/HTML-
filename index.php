<?php

if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $name=$_POST['name'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $age=$_POST['age'];
    $phone=$_POST['phone'];
    $interest=$_POST['interest'];
    $other=$_POST['other'];
    
    $sql="INSERT INTO 'writers'.`detail` ( `name`, `email`, `gender`, `age`, `phone`, `interest`, `other`, `date`) 
VALUES ( '$name','$email', '$gender', '$age', '$phone', '$interest', '$other', current_timestamp())";

    // echo $sql;

    // Execute the query
   
    // Close the database connection
   
}
?>