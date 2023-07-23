 
<?php


$con=mysqli_connect("localhost","root","","project");
if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    // Retrieve the submitted username and password
    $id = $_POST['id'];
    $password = $_POST['password'];

    // Perform the database query to validate the credentials
    $sql = "SELECT * FROM passwords WHERE ID = '$id' AND PWD = '$password'";
    $result = mysqli_query($con, $sql);

    // Check if a matching row is found
    if (mysqli_num_rows($result) == 1) {
        // Credentials are correct, redirect to secondpage.php
        header('Location: secondpage.php');
        exit(); // Terminate the script after redirection
    }
     else 
     {
        // Credentials are incorrect, display an error message
        echo 'Incorrect username or password.';
        header('Location: Projectpage.php');
    }
}

?>