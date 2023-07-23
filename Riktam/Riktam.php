 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Riktam Company</title>
  <link rel="icon"  href="Riktam_images/logo.png">
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
    color: #f0f0f0;
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
    <a class="navbar-brand " href="#"><img src="Riktam_images/logo.png" alt="rgukt" height="50px" width="50px" class="flip-icon">MINI_PROJECT</a>
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
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
        <ol class="carousel-indicators">
          <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
          <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
          <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
             
            <img src="Riktam_images/Riktam1.jpg" class="d-block  w-100" alt="Image 1">
          </div>
          <div class="carousel-item" data-bs-interval="3000">
            <img src="Riktam_images/Riktam2.jpg" class="d-block w-100" alt="Image 2">
          </div>
          <div class="carousel-item" data-bs-interval="3000">
            <img src="Riktam_images/Riktam3.jpg"class="d-block  w-100" alt="Image 3">
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
            <p class="para">Riktam Technology Consulting Private Limited is a Private incorporated on 18 October 2010. It is classified as Non-govt company and is registered at Registrar of Companies, Hyderabad. Its authorized share capital is Rs. 500,000 and its paid up capital is Rs. 100,000. It is inolved in Other computer related activities [for example maintenance of websites of other firms/ creation of multimedia presentations for other firms etc.]Riktam Technology Consulting Private Limited's Annual General Meeting (AGM) was last held on 30 November 2021 and as per records from Ministry of Corporate Affairs (MCA), its balance sheet was last filed on 31 March 2021.</p>
           <p class="para">Directors of Riktam Technology Consulting Private Limited are Prasad Kancharla, Shingshetty Siddharam .Riktam helps develop awesome apps for the mobile and the web. Riktam was established in 2007 and today is a leading provider of web and mobile apps development services. With over 150+ projects executed successfully for the Web, iPhone/iPad, Android, Windows Phone we know what it takes to build great mobile and web apps. We take pride in the relationships we have built with our customers over the years and their awesome testimonials. We differentiate ourselves by offering experienced consultants, best in class design and immaculate execution.Riktam Technologies was founded in 2007.there are  employs 51 to 200 employees in India.Global headquarters for Riktam Technologies is located in Hyderabad/Secunderabad, Telangana,India.</p>
           <p class="para">The overall rating of Riktam Technologies is 4.6, with Skill development being rated at the top and given a rating of 4.6. However, Salary & Benefits is rated the lowest at 4.4. To know first hand how is it like to work at Riktam Technologies read detailed reviews by job profile, department and location in the reviews section.100% of employees reported the working days at Riktam Technologies as Monday to Friday.</P></div>

        
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
    Get detailed salary information for salaries of popular job profiles in Riktam Technologies: Software Developer: ₹ 6,20,000 per year, Software Engineer: ₹ 6,50,000 per year and many more. Click here to view detailed Riktam Technologies Salaries.The average Riktam Technologies salary ranges from approximately ₹6.2 Lakhs per year for a Software Developer to ₹6.5 Lakhs per year for a Software Engineer. Salary estimates are based on 76 Riktam Technologies salaries received from various employees of Riktam Technologies.
    </p>
    <p class="para">Average Trenser Technology Solutions Private Limited Software Engineer salary in India is ₹ 4.2 Lakhs for experience between 1 years to 3 years. Software Engineer salary at Trenser Technology Solutions Private Limited India ranges between ₹ 2.8 Lakhs to ₹ 7.0 Lakhs.
 </p><p class="para">The selection process for these roles will be conducted through online/offline mode in four steps:</p>
  <UL STYLE="FONT-SIZE:20PX"><li>Step 1-Aptitude </li>
    <li>Step 2- interview </li>
    <li>Step 3- HR interview </li></ul>

   
  </div>
</div>
<!-- INSERTING RECRUITMENT PROCESS WITH IMAGES -->




<div class="row">
<div class="col-md-6"><BR><BR><BR><br>
      
      <img src="Riktam_images/apptitude.png" alt="" class="img-fluid"  id='recruitingimages'>
     </div>
    
<div class="col-md-6 text-align-center"><br><br>
     <h3 align="center" id='headings'>1.Aptitude Test</h3>
     <p class="para">The questions that you will be asked in an aptitude test will vary based on the type of role you are applying for. They may ask you to identify a missing number, shape or image at the end of a series, or they might give you a written scenario that you will answer questions from.If you're being asked to take multiple tests the pass mark may be 50% for all of those tests compared to if you are set one test the employer may decide that it wants to set a pass mark of 70%.An aptitude test usually consists of sections measuring </p>
     <ul style="font-size:20px">
      <li> verbal ability</li> <li> numerical ability</li>
       <li>  spatial ability</li>
       <li>mechanical ability</li> 
     <li>logical reasoning</li>
     <li>clerical speed </li>
     </ul>
     </div>
</div>





<div class="row">
  <div class="col-md-6">
    <br><BR><BR>
  <h3 align="center" id='headings'>2.Technical Interview</h3>
<br>
<p class='para'>This round is based on your resume, branch of specialization, favorite subjects, etc. Be prepared to answer basic questions relating to each of these topics. Don’t be surprised if you are asked to write code. Also be ready to answer puzzle questions and  assess your technical ability for the role, and the depth and breadth of your knowledge in your chosen field. Technical interviews are also designed to assess your problem-solving skills, your communication skills, and your ability to think under pressure.During the technical phone interview</p>
<ul style="font-size:20px"><li>Be excited about the company or project, and that positivity will come across in the interview.</li>
<li>Know your audience. ....</li>
<li>Be honest: tell the interviewer what most interests you in a job and what kinds of projects you'd like to work on..</li>
<li>Answer behavioral questions by showing, not telling..</li></ul>

<p style="font-size:20px">So what are you waiting for? Go ahead and apply now!</p>
  </div>
<div class="col-md-6"><br><br><br><br><br>
    <img src="Riktam_images/interview.png" alt="" class='img-fluid'  id='recruitingimages'>
  </div>
</div>





<div class="row">
<div class="col-md-6"><br><br><br><br><br><br>
  <img src="Riktam_images/hr_interview.png" alt="" class="img-fluid" id='recruitingimages'>
  </div>
  <div class="col-md-6">
    <br>
  <h3 align="center" id='headings'>3.HR Interview</h3>
  <p class='para'>Expect questions on work experience, education, hobbies and family background apart from the usual HR questions like strengths and weaknesses, reasons for applying to the company, why you should be hired, etc.

Most candidates tend to think that the HR interview is easy, but remember that a bad HR interview could end your chances of getting the job even after passing all the previous obstacles (aptitude test, technical round, etc.). The key here is to remain polite and confident. Interviews can be long and dreary so don’t forget to wear a smile!</p> <br>
<p class='para'>In order to prepare for your HR interview you should:
  <ul style="font-size:20px"><li>Research the company you are interviewing with.</li>
  <li>Research the person wo is interviewing you if possible.</li>
  <li>Read and understand the job description and everything that it entails.</li>
  <li>Review your CV and be prepared to answer questions related to it</li></ul>.</p>
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
        <img class="card-img-top img-fluid h-25 w-100" src="Riktam_images/p.jpeg" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title">Positive</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          
        </div>
      </div>
    </div>
    <div class="col-md-4 king">
      <div class="card">
        <img class="card-img-top img-fluid" src="Riktam_images/n.jpeg" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title">Negitive</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
           
        </div>
      </div>
    </div>
    <div class="col-md-4 king">
      <div class="card">
        <img class="card-img-top img-fluid" src="Riktam_images/nu.jpeg" alt="Card image cap">
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