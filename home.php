<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="shortcut icon" type="image/png" href="images/home.png" />
  <title>Home Page</title>
</head>


<?php 
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'customerdb';
    
    //checking whether the form is submitted or not
    if(isset($_POST['username'])){
        //making the connection
        $conn = new mysqli($servername, $username, $password, $database);

        //If the connection failed, this block will be worked
        if($conn -> connect_errno){
            echo "Failed to connect to mysql database";
            exit();
        }

        //getting the username and the password
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query_string = "SELECT * FROM tblusers WHERE username='$username' AND password='$password'";

        //querying the datatable
        $result = $conn -> query($query_string);
        
        //if the result is found then this block will be worked.
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                $username=$row['fname'].' '.$row['lname'];
                $img=$row['imgpath'];

                echo "<div style='text-align:center; margin-top:5%'>";
                echo "<h1 style='text-align:center; margin-top:5%'>Welcome $username!</h1>";
                echo "<img style='' src=$img>";
                echo "</div>";
            }
        }else{
            //if there are no users with the given credentials, this block will throw an alert and redirect to the login
            echo "<script>";
            echo "alert('Sorry Invalid Username or Password');";
            echo 'window.location.href = "index.html";';
            echo "</script>";
        }

        $conn->close();   
    }else{
        //redirecting to the login page
        header("Location: index.html");
        exit();
    }
?>


</html>