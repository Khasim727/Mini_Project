<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secondpage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">


<!-- inserting css here -->
<style>
     
     *{
      max-width: 100%;
      font-family:serif;
    }
/* css for navbar  items */
.navbar {
      margin-bottom: 0;
      border-radius: 0;
      position: sticky;
    }
#navitems{
    color: white;
    margin-left: 20px;
}

/* .items:hover {
  
  color: rgb(228, 99, 0);
   
} */
#navitems:hover {
  
  color: rgb(228, 99, 0);
   
}

.footer{
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color:black;
    color: white;
    }
    i{
      padding:3px;
    }
    /* #person{
      height:20px;
    } */
</style>
</head>
<body>
    <?php
    include("secondnavbar.php")
    ?>
    <!-- inserting search bar here -->
  <div>

    

  







<?php
   
    include("serchbar.html");
    ?>

  

     



<div class="footer">
<footer class="text-light py-4">
  <div class="container text-center">
    <p>&copy; 2023 Your Company. All rights reserved.</p>
    <ul class="list-inline mb-0">
       
      <i class="bi bi-facebook"></i>
      <i class="bi bi-whatsapp"></i>
      <i class="bi bi-instagram"></i>
      <i class="bi bi-linkedin"></i>
    </ul>
  </div>
</footer>
</div>
</div>
    
    

    

<!-- inserting footer here -->

</body>
</html>