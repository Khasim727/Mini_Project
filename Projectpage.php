<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <style>
     
    *{
      max-width: 100%;
      font-family:serif;
    }

    body {
      background-image: url("images/college.jpeg");
      /* background-image:ur("images/college.jpeg"); */
      background-size: cover;
      background-repeat: no-repeat;
      max-height: 100%;
      background-attachment: fixed;


    }
/* css for navbar  items */
.navbar {
      margin-bottom: 0;
      border-radius: 0;
      position: sticky;
    }
.items{
    color:white;
    margin-left: 20px;

}
/* #navitems{
  margin-left: 20px;
} */
i{
  margin-right:5px;
}


.items:hover {
  
  color: rgb(228, 99, 0);
   
}
.abstract{
         
        border-bottom:1px solid black;
         
        max-width:100%;
     }
      
     /* for form centering */
     .center-form {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 25vh;
    }
    #body{
      background-image:url("images/beach.webp");
      background-size:cover;
      background-repeat:no-repeat;
      background-attachment: fixed;
      height:130vh;
      /* overflow:scroll; */


    }
    .footer{
    
   
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color:black;
  color: white;
  
  
}
form{
  border:1px solid white;
  border-radius:5px;
  box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.7);
}

 
    
  </style>


</head>
<body>
    <?php include 'navbar.php';?>
    
     <div class="container-fluid" id="body">
     
      <!-- <img src="images/beach.webp" alt=""> -->

     <!-- inserting abstracr here -->
     
     
<div class="abstract" id="j" style="color:white"> 
    <h3 class="" align="center">MINI PROJECT</h3>
    <h4 class="" align="center">Sentiment Analysis on Company Reviews</h4>
    <h5><u>Abstract</u></h5>
    <p class="" style="margin-left:50px;font-size:20px;"> -College Website created for Students to choose the best company on particular domain, so for   that we are using Web Technologies and Machine Learning which includes Sentiment Analysis.The first step in this project would be to identify the domain that students are interested in. This can be done by analyzing the data on job placements from previous years. Once the domain has been identified, the next step would be to gather Reviews on the companies from students who have worked with those companies in the past.  These reviews can be collected by us and convert them as a data set and train it to calculate the overall percentage by using sentiment analysis . The next step would be to use machine learning techniques to analyze the reviews. Sentiment analysis can be used to determine the overall sentiment towards a particular company. To Train a sentiment analysis model using machine learning algorithms such as Naive Bayes, Support Vector Machines, or neural networks. This can be used to rank the companies based on the level of satisfaction expressed by the students. The website can also provide additional information such as job openings, packages, and other benefits offered by these companies. This information can help students make an informed decision about which company to apply.</p>
<h5><u>Output:</u></h5> 

<p style="margin-left:50px;font-size:20px;">  -Overall, this project can be a great way to help students make better career choices. By using web technologies and machine learning, it is possible to provide students with valuable information that can    help them make the right decisions when it comes to choosing a company in a particular domain. </p>
<a  href="abstract.pdf"  >   
    <button type="submit" class="btn btn-primary" id="signin">Read More</button></a>
    <!-- target=#login -->
<!-- data-bs-toggle="modal" data-bs-target=""    id="loginButton" -->

</div>
    
<!-- inserting  form here -->
<div class="container d-flex justify-content-center align-items-center">

  <!-- form inserting here -->
  <form action="database.php" method="POST"  id="form"  style="position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);" 
  class="p-5" style="max-width:600px;">
    <h2 class="text-center mb-4" style='color:orange;font-size:40px;font-family:sarif;'>Login</h2>
    <div class="mb-3">
      <label for="username" class="form-label" style='font-size:22px; color:red;font-family:serif;'><i class="bi bi-person-fill"></i>User Id
    </label>
      <input type="text" class="form-control" id="username" placeholder="Enter user Id" name="id" required  style='font-family:serif;'>
    </div>
    <div class="mb-3">
      <label for="password" class="form-label" style='font-size:22px; color:red;font-family:serif;'><i class="bi bi-key-fill"></i>Password</label>
      <input type="password" class="form-control" id="password" placeholder="Enter your password" name="password" required style='font-family:serif;' > 
    </div>
    <button type="submit"   class="btn btn-success align-items-center " style='font-family:serif;'  name='signin'>Sign in</button>
  </form>
</div>

 

     
    
    


 


 
 <?php
include("model.php")
?> 


</div>
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



 


<!-- javascript functions  -->
<script>
var x = document.getElementById("khasim");
document.getElementById("j").style.display="none";
// console.log(x.id);
x.addEventListener("click", myFunction);
// x.addEventListener("click", someOtherFunction);

function myFunction() {
    if(x.id=="khasim"){
        document.getElementById("j").style.display="block";
        document.getElementById("form").style.display="none";

        x.id="anand";
    }
    // console.log(x.id)
    else{
        document.getElementById("j").style.display="none";
        document.getElementById("form").style.display="block";


        x.id="khasim";
    }
}
</script>
</body>
</html>