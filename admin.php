<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<style>
    #button{
        /* background-color:blue; */
        margin-left:200px;
        border-radius:5px;
        font-size:large;

    }
</style>
<body>
    
<!-- <?php

// $id=$_POST['id'];



echo " <div class='container'>

// <h1> echo '.$id.' Your response has been submitted succesfullly..</h1> 
// <h1> We will get back to you...</h1>
// <a href='secondpage.php'> <p class='btn btn-outline-success'>Back</p></a>



// </div>";




 

?> -->



<h1>Welcome <?php echo $_POST["id"]; ?></h1><br>
<h1>Your response has been submitted succesfullly..</h1>; 
<h1> We will get back to you...</h1>
 <a href='secondpage.php'> <p class='btn btn-outline-success'>Back</p></a>
 

</body>
</html>