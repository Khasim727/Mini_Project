<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Contact Us</title>
    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  
    <style>

  
.about-section {
  padding: 30px;
  text-align: center;
  /* background-color: #474e5d; */
  color: rgb(14, 13, 13);
  /* background-image: linear-gradient(to right, #087EE1, #05E8BA); */
  background-image: linear-gradient(45deg, #087EE1, #05E8BA);
  /* font-size: 20 px; */
  /* background-color: #474e5d; */
}
*{
    font-family:serif;
    top:0;
    left:0;
}

label{
    font-size:20px;
    margin-top:10px;
}
.images{
    padding:40px;
    margin-top:32px;
}
 
button{
    margin-top:20px;
   
    display:block;
}

.container{
    margin-bottom:10px;
    margin-top:40px;
}
.img-fluid{
    border-radius:15px;
}

footer{
    bottom:0;
    left:0;
    background-color:skyblue;

}

input{
  border:1px solid blue;
}
 


    </style>
</head>

<body>
   

    <div class="about-section">
        <h1>Contact Us</h1>
        <p style="font-size: 20px;">If you have any queries? Please do not hesitate to contact us directly. Our team will come back to you</p>
        <p style="font-size: 20px;">within a matter of hours to help you.</p>
      </div>

      

<div class="container">


<a href='secondpage.php'  class="btn btn-primary mt-4" style="float: right; margin-right: 10px;">Back</a>
<div class="row">
    <div class="col-md-6">
        
    <form class="needs-validation"  action='admin.php' method='post' >
    <h2 align='center' class='mt-1'>Contact Form</h2>
  <div class="mb-3">
    <label for="name" class="form-label">Your name</label>
    <input type="text" class="form-control" id="name" placeholder="Your name" required name='id'>
    <div class="invalid-feedback">
      Please enter your name.
    </div>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Your email</label>
    <input type="email" class="form-control" id="email" placeholder="Your email" required>
    <div class="invalid-feedback">
      Please enter a valid email address.
    </div>
  </div>
  <div class="mb-3">
    <label for="message" class="form-label">Write your message here</label>
    <textarea class="form-control" id="message" rows="3" placeholder="Your message" required></textarea>
    <div class="invalid-feedback">
      Please enter your message.
    </div>
  </div>

  <div class="row">
    <!-- <div class="col-md-6"></div> -->
    <div class="col-md-2"></div>
    <div class="col-md-2"></div>
    <div class="col-md-2">
      
    </div>
    
    <div class="col-md-6"> <button type="submit" class="btn btn-primary">Submit</button></div>
    
  </div>

  
  <!--  -->
</form>
 



     </div>
     <div class="col-md-6 mt-4">
        <img src="images/formfilling.jpg" alt="" class="img-fluid">
      </div>
     



    <!-- inserting new col here -->

    

      
    
    
   
 </div>
 </div>

 <footer class="bg-success text-light py-4">
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

 
</body>

</html>



<!-- 
 -->
