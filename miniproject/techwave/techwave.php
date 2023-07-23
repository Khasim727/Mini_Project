 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Techwave company</title>
  <link rel="icon"  href="tech_images/logo.png">
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
    
    padding-top: 80px;
    
    /* margin-top: 10px; */
  }
    
   

   
   .card{
    border-radius: 15px;
    box-shadow: 5px 10px 8px  #888888;
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
    <a class="navbar-brand " href="#"><img src="tech_images/logo.png" alt="rgukt" height="50px" width="50px" class="flip-icon">MINI_PROJECT</a>
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
             
            <img src="tech_images/tech1.jpg" class="d-block  w-100" alt="Image 1">
          </div>
          <div class="carousel-item" data-bs-interval="1000">
            <img src="tech_images/tech2.jpg" class="d-block w-100" alt="Image 2">
          </div>
          <div class="carousel-item" data-bs-interval="1000">
            <img src="tech_images/tech3.jpg"class="d-block  w-100" alt="Image 3">
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
            <p class="para">Established in 2004, Techwave. is USA based global software solutions company with headquarters in Houston, USA. Our mission at Techwave is to connect you with end-to-end solutions that unlock real value, making your business more innovative and efficient than ever before., Techwave Consulting, Inc. is a global integrated cloud and digital transformation partner servicing global blue-chip enterprises.Techwave Consulting has an overall rating of 3.9 out of 5, based on over 231 reviews left anonymously by employees.</p> <br>

                <p class="para">Techwave is a leading global IT and engineering services and solutions company revolutionizing digital transformation.Damodar Rao Gummadapu is a veteran IT & engineering solutions leader, serial entrepreneur, and strategic tech investor with over two decades of experience facilitating digital transformation journeys for companies across the globe.Techwave, which currently has an India headcount of 1,800, plans to house 80% of its employees in state by 2025, which translates into nearly 8,000 techies to be based in the Hyderabad GDC by then, its chairman Damodar Gummadapu told TOI.</p> <br>

                <p class="para">It was founded in 1981 in Pune by seven engineers with an initial capital of $250. Infosys made an initial stock public offer in February 1993 and was listed on stock exchanges in India in June 1993. Infosys was recognized among the Top 10 best companies for women in India in 2021.We enhance the architecture, technology and functionality of transactional / ERP platforms for finance, HR, content management, and legal services. In addition, we create web portals and dashboards for self-service by business users.Average Techwave Consulting Design Engineer salary in India is ₹ 3.5 Lakhs for less than 1 year of experience to 6 years. Design Engineer salary at Techwave Consulting India ranges between ₹ 2.0 Lakhs to ₹ 6.2 Lakhs.</p>
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
      Techwave is one of India’s leading IT services, consulting and business solutions organization with The average Techwave Consulting salary ranges from approximately ₹2.1 Lakhs per year for a Trainee Design Engineer to ₹35.1 Lakhs per year for a Senior Solution Architect.Techwave Consulting employs 1,001 to 5,000 employees in India.
      <br>
      The BANGALORE-headquartered company is one of the best places to work if you are looking for a career in the IT industry <br>
      The Techwave recruitment process consists of THREE rounds of selection and includes:
       
      
      <p class="para">In order to be eligible you need to have a minimum of 75% throughout your degree with no backlog. A gap in career up to a maximum of two years is permissible but with a valid explanation.</p>
     
    </p>
  </div>
</div>
<!-- INSERTING RECRUITMENT PROCESS WITH IMAGES -->
<div class="row">
<div class="col-md-6 text-align-center">
     <h3 align="center" id='headings'>1.Resume Shortlist&Written Test</h3>
     <p class="para">The Written test consists of four sections and total time allotted is 120 minutes.</p>
     <p>It includes:</p>
     <ul style="font-size:20px">
      <li>Quantitative Aptitude</li>
      <li>Programming Language Efficiency</li>
      <li>Coding Test and</li>
      <li>E-mail Writing</li>
     </ul>
     </div>
     <div class="col-md-6">
      
      <img src="tech_images/apptitude.png" alt="" class="img-fluid"  id='recruitingimages'>
     </div>
     
</div>

<div class="row mt-2">
  <div class="col-md-6">
    <img src="tech_images/interview.png" alt="" class='img-fluid'  id='recruitingimages'>
  </div>
  <div class="col-md-6">
  <h3 align="center" id='headings'>2.Technical Interview</h3>
  <p class="para">This round is based on your resume, branch of specialization, favorite subjects, etc. Be prepared to answer basic questions relating to each of these topics. Don’t be surprised if you are asked to write code. Also be ready to answer puzzle questions.</p><br>
  <p class='para'>In certain cases, the interviewer may also try and confuse/mislead you into giving the wrong answer so watch out for such trick questions.</p>

  </div>
</div>




<div class="row">
  <div class="col-md-6">
  <h3 align="center" id='headings'>3.HR Interview</h3>
  <p class='para'>Expect questions on work experience, education, hobbies and family background apart from the usual HR questions like strengths and weaknesses, reasons for applying to the company, why you should be hired, etc.

Most candidates tend to think that the HR interview is easy, but remember that a bad HR interview could end your chances of getting the job even after passing all the previous obstacles (aptitude test, technical round, etc.). The key here is to remain polite and confident. Interviews can be long and dreary so don’t forget to wear a smile!</p> <br>
<p class='para'>With Techwave being named one of the world’s top employers by the Top Employer Institute for consecutive years, a career at this company could be rich and rewarding experience for job seekers.

So what are you waiting for? Go ahead and apply now!</p>
  </div>
  <div class="col-md-6">
  <img src="tech_images/hr_interview.png" alt="" class="img-fluid" id='recruitingimages'>
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
        <img class="card-img-top img-fluid h-25 w-100" src="tech_images/p.jpeg" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title">Positive</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          
        </div>
      </div>
    </div>
    <div class="col-md-4 king">
      <div class="card">
        <img class="card-img-top img-fluid" src="tech_images/n.jpeg" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title">Negitive</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
           
        </div>
      </div>
    </div>
    <div class="col-md-4 king">
      <div class="card">
        <img class="card-img-top img-fluid" src="tech_images/nu.jpeg" alt="Card image cap">
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