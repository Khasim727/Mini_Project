 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Gridlex Company </title>
  <link rel="icon"  href="infosys_images/logo.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">


  <style>
    *{
      max-width: 100%;
      font-family:serif;
    }
/* css for navbar  items */
.navbar {
      /* margin-bottom: 0;
      border-radius: 0;
      position: sticky;
       */

       position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 100;
    }
#navitems{
    color: white;
    margin-left: 20px;
}

#navitems:hover {
  
  color: rgb(228, 99, 0);
   
}

/* company tab */
.company-picture{
  
    max-width: 100%;
    height: auto;

}
 

 

   

.aboutus{
    margin-top: 20px;
    /* border-bottom: 1px solid black; */
    box-shadow: 5px 10px 8px #888888;
    background-image: linear-gradient(to bottom, #3498db, #ffffff);
    padding-top: 80px;
}
 
  .recrutment{
    margin-top: 2px;
    /* border-bottom: 2px solid black; */
    box-shadow: 5px 10px 8px #888888;
  
    padding-top: 80px;
    
    
  }
 .para{
  margin-left: 10px;
  /* background-color: orange; */
  font-size:20px;
  font-family:serif;
 }
/* this is for corousel pics adjusting height and width */
 .carousel-item img {
    max-height: 600px; /* Adjust this value as needed */
    max-width: 100%;
    padding-top: 80px;
  }

  /* for reviews */
  .reviews{
    /* border-bottom: 1px solid black; */
    box-shadow: 5px 10px 8px #888888;
    height:auto;
    padding:15px;
    
    padding-top: 80px;
    /* margin-top: 10px; */
  }
    
   

   
   .card{
    border-radius: 15px;
    box-shadow: 5px 10px 8px #888888;
    padding: 50px;
    margin-top: 10px;
   }

   .footerparas{
    color: #f2f2f2;
   }

   /* using animatiins  for rotating */
   .rotate{
   width:80px;
   height:80px;
   animation: rotation infinite 3s linear;
}

@keyframes rotation{
  from{
    transform:rotate(0deg);
  }
  
  to{
    transform:rotate(360deg);
  }
}

/* it is for flipping */
.flip-icon {
  -webkit-animation: flip-icon 1s linear infinite;
  -moz-animation: flip-icon 1s linear infinite;
  animation: flip-icon 1s linear infinite;
}

@-webkit-keyframes flip-icon {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(180deg);
  }
}

@keyframes flip-icon {
  0% {
    transform: rotateY(0deg);
  }
  100% {
    transform: rotateY(180deg);
  }
}
 
 

#recruitingimages{
  border-radius:10px;
  box-shadow: 5px 10px 8px #888888;

}
#headings{
  color:black;
  text-shadow: 1px 1px red;
}
.slideshow{
  box-shadow: 5px 10px 8px #888888;
}
 
 

 </style>
</head>
<body>


<!-- inserting nav bar here -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand " href="#"><img src="gridlex_images/logo.png" alt="rgukt" height="50px" width="50px" class="flip-icon">MINI_PROJECT</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end"  id="collapsibleNavbar">
      <ul class="navbar-nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link" href="#" id="navitems">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#aboutus" id="navitems">ABOUT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#recrutement" id="navitems">RECRUITMENT</a>
        </li>    
        <!-- <li class="nav-item">
          <a class="nav-link" href="#" id="navitems">PICTURES</a>
        </li>   -->
        <li class="nav-item">
          <a class="nav-link" href="#reviews" id="navitems">REVIEWS</a>
        </li>      
      </ul>
      <!-- <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
       
    </div>
  </div>
</nav>

<!-- from here  next nav items are started -->
<div class="company-picture">


 
<div class="slideshow">
  <div class="row">
    <div class="col-md-12">
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1000">
        <ol class="carousel-indicators">
          <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
          <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
          <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
             
            <img src="gridlex_images/grid1.jpg" class="d-block  w-100" alt="Image 1">
          </div>
          <div class="carousel-item" data-bs-interval="1000">
            <img src="gridlex_images/grid2.jpg" class="d-block w-100" alt="Image 2">
          </div>
          <div class="carousel-item" data-bs-interval="1000">
            <img src="gridlex_images/grid3.jpg"class="d-block  w-100" alt="Image 3">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </a>
      </div>
      
    </div>
  </div>
</div>
<!-- from above completed the slideshow -->
 
 


<!-- inserting  about us -->
 <div id="about">
<div class="aboutus" id="aboutus">
    <h2 align="center" id='headings'>ABOUT US</h2>
    <div class="row">
        <div class="col-md-12">
            <!-- <h3 align="center">OVERVIEW</h3> -->
            <p class="para">Gridlex is a multi disciplinary team in the US & India. Gridlex was founded by Nikhilesh Rao, who leads the product management, research, and analytics efforts at Gridlex and its affiliated brand, Dexur.Gridlex is rated 3.8 out of 5, based on 26 reviews by employees on AmbitionBox. Gridlex is known for Salary & Benefits which is rated at the top and given a rating of 3.9. However, Company culture is rated the lowest at 3.3 and can be improved.</p> <br>

                <p class="para">Gridlex was founded by Nikhilesh Rao, who leads the product management, research, and analytics efforts at Gridlex and its affiliated brand, Dexur.Gridlex is a multi disciplinary team in the US & India. Gridlex was founded by Nikhilesh Rao, who leads the product management, research, and analytics efforts ...</p> <br>

                <p class="para">Gridlex is a multi disciplinary team in the US & India. Gridlex was founded by Nikhilesh Rao, who leads the product management, research, and analytics efforts at Gridlex and its affiliated brand,Our mission is to improve your organization’s productivity. Our applications come up with implementation & support services so that your organization is successful.</p>
        </div>

        
    </div>
</div>

</div>


<!-- inserting rucruitment division here -->


 



<div class="recrutment" id="recrutement">
<!-- inserting some info here -->
<h2 align="center" id='headings'>RUCRUITMEMT</h2>

<div class="row">
  <div class="col-md-10">
    <p class="para"> 
    The average Gridlex salary ranges from approximately ₹2.3 Lakhs per year for a Analyst to ₹5.9 Lakhs per year for a Python Developer. Salary estimates are based on 221 Gridlex salaries received from various employees of Gridlex. Gridlex employees rate the overall salary and benefits package 3.9/5 stars. <br>
      The Hyderabad-headquartered company is one of the best places to work if you are looking for a career in the IT industry <br>
      The Gridlex recruitment process consists of THREE rounds of selection and includes:
       
      
      <p class="para">In order to be eligible you need to have a minimum of 60% throughout your degree with no backlog. A gap in career up to a maximum of two years is permissible but with a valid explanation.</p>
     
    </p>
  </div>
</div>
<!-- INSERTING RECRUITMENT PROCESS WITH IMAGES -->
<div class="row">
<div class="col-md-6 text-align-center">
     <h3 align="center" id='headings'>1.Resume Shortlist.</h3>
     
     
</div>

<div class="row mt-2">
  
  <div class="col-md-6">
  <h3 align="center" id='headings'>2.Group discussion</h3>
  
  <p class='para'>In certain cases, the interviewer may also try and confuse/mislead you into giving the wrong answer so watch out for such trick questions.</p>

  </div>
</div>




<div class="row">
  <div class="col-md-6">
  <img src="gridlex_images/hr_interview.png" alt="" class="img-fluid" id='recruitingimages'>
  </div>
  <div class="col-md-6">
  <h3 align="center" id='headings'>3.One-on-one Round.</h3>
  <p class='para'>Expect questions on work experience, education, hobbies and family background apart from the usual HR questions like strengths and weaknesses, reasons for applying to the company, why you should be hired, etc.

Most candidates tend to think that the one to one  is easy, but remember that a bad one to one could end your chances of getting the job even after passing all the previous obstacles (aptitude test, technical round, etc.). The key here is to remain polite and confident. Interviews can be long and dreary so don’t forget to wear a smile!</p> <br>
<p class='para'>With gridlex being named one of the world’s top employers by the Top Employer Institute for consecutive years, a career at this company could be rich and rewarding experience for job seekers.

So what are you waiting for? Go ahead and apply now!</p>
  </div>
</div>
     <!-- <div class="col-md-10">
      <h3 align="center">Technical Interview</h3>
      <img src="tcs_images/interview.png" alt="" class="img-fluid">
     </div>
     <div class="col-md-10">
      <h3 align="center">Managerial Interview</h3>
      <img src="tcs_images/Managerial Interview.png" alt="" class="img-fluid">
     </div>
     <div class="col-md-10">
      <h3 align="center">HR Interview</h3>
      <img src="tcs_images/hr_interview.png" alt="" class="img-fluid">
     </div>
     
  </div> -->

</div>

<!-- inserting  riviews here -->

<div class="reviews" id="reviews">
  <h3 align="center" id='headings'>REVIEWS</h3>
  <div class="row">
    <div class="col-md-4 king">
      <div class="card">
        <img class="card-img-top img-fluid h-25 w-100" src="gridlex_images/p.jpeg" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title">Positive</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          
        </div>
      </div>
    </div>
    <div class="col-md-4 king">
      <div class="card">
        <img class="card-img-top img-fluid" src="gridlex_images/n.jpeg" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title">Negitive</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
           
        </div>
      </div>
    </div>
    <div class="col-md-4 king">
      <div class="card">
        <img class="card-img-top img-fluid" src="gridlex_images/nu.jpeg" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title">Neutral</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.
           
          </p>
          
        </div>
      </div>
    </div>
    <!-- ṇew card -->
   
    
  </div>

  
</div>
  
 

<footer class="bg-dark text-light py-4">
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
 

</body>
</html>