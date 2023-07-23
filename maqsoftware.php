 <!DOCTYPE html>
<html lang="en">
<head>
  <title>maqsoftware company</title>
  <link rel="icon"  href="maqsoftware_images/logo.png">
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
.roles{
  padding-top: 80px;
  box-shadow: 5px 10px 8px #888888;
}
 


/* table */
#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size:20px;
  font-family:serif;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}

 

 </style>
</head>
<body>


<!-- inserting nav bar here -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand " href="#"><img src="maqsoftware_images/logo.png" alt="rgukt" height="50px" width="50px" class="flip-icon">MINI_PROJECT</a>
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
          <a class="nav-link" href="#roles" id="navitems">ROLES</a>
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
        <li class="nav-item">
          <a class="nav-link" href="secondpage.php" id="navitems">BACK</a>
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
             
            <img src="maqsoftware_images/maqsoftware3.jpg" class="d-block  w-100" alt="Image 1">
          </div>
          <div class="carousel-item" data-bs-interval="1000">
            <img src="maqsoftware_images/maqsoftware2.jpg" class="d-block w-100" alt="Image 2">
          </div>
          <div class="carousel-item" data-bs-interval="1000">
            <img src="maqsoftware_images/maqsoftware3.jpg"class="d-block  w-100" alt="Image 3">
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
            <p class="para">Founded in 2000, MAQ Software is a company of digital marketing and analytics. MAQ Software serves in various industries which include technology, energy, retail and healthcare. The company mainly focuses on three sectors that are Artificial Intelligence, Data Analytics and Cloud. The company believes its success in two simple ideas which is ‘focus’and ‘execution’. The company has been working with Microsoft Corporation for sixteen years and considered as a Microsoft Preferred Supplier. It is the partner of Microsoft in the field of Data Analytics, Application Development and Data Platform. Also, it is in the consulting partnership with the Amazon Web Services.</p> <br>

                <p class="para">the Head Quarters of maq software is placed at
United States and 
Key People are the
Founder and CEO – Rajiv Aggarwal.Here is 
The logo of the company represents the name of the company in the red and gray color.
Net Revenue of the company is
Undisclosed.
Total Number of Employees are working
More than 1000 employees</p> <br>

                <p class="para">The company was certified with ISO 27001:2013- Information Security by British Standards.MAQ was listed for the eighth time in the Inc. 500 for the fasting growing companies in America.MAQ Software was considered as one of the growing companies in the Washington State for five successive years.The company was also in the Hall of Fame by the Business Journal.</p>
        </div>

        
    </div>
</div>

</div>
<!-- inserting roles division here -->
<div class="roles" id='roles'>
<h2 align="center" id='headings'>COMPANY  ROLES</h2>

<table id="myTable" class='table'>
  <thead>
    <tr class="header">
      <th style="width: 60%; font-size:25px;">Designation</th>
      <th style="width: 40%; font-size:25px;">Average Salary</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
Software Engineer Level 1
<br>
Experience: 0 - 3 yrs
</td>
      <td>₹ 8,11,872/year <br>
(₹6.0L/yr - ₹10.5L/yr)

</td>
    </tr>
    <tr>
      <td>

      Software Engineer2
<br>
Experience: 1 - 4 yrs

</td>
      <td>₹ 11,39,580/year <br>
(₹8.0L/yr - ₹17.0L/yr)

</td>
    </tr>
    <tr>
      <td>

      Software Engineer
<br>
Experience: 0 - 2 yrs

</td>
      <td>₹ 8,53,035/year <br>
(₹6.0L/yr - ₹12.2L/yr)

</td>
    </tr>
    <tr>
      <td>

      Senior Software Engineer
<br>
Experience: 3 - 6 yrs 

</td>
      <td>₹ 14,16,781/year <br>
(₹10.0L/yr - ₹19.0L/yr)

</td>
    </tr>
    <tr>
      <td>

      Associate Software Engineer
<br>
Experience: 0 - 1 yrs 

</td>
      <td>₹ 6,51,593/year <br>
(₹36.0K/yr - ₹10.0L/yr)

</td>
    </tr>
    <tr>
      <td>

      Software Engineer II
<br>
Experience: 1 - 3 yrs

</td>
      <td>₹ 10,87,500/year <br>
(₹9.0L/yr - ₹13.0L/yr)

</td>
    </tr>
    <tr>
      <td>

      Associate Technical Project Manager
<br>
Experience: 2 - 7 yrs

</td>
      <td>₹ 16,65,217/year <br>
(₹12.0L/yr - ₹22.0L/yr)

</td>
    </tr>

    <tr>
      <td>
Senior Process Associate <br>

Experience: 0 - 11 yrs
</td>
      <td>₹ 4,30,329/year <br>
(₹1.9L/yr - ₹7.2L/yr)
</td>
    </tr>

    <tr>
      <td>

      Associate Project Manager
<br>
Experience: 2 - 6 yrs

</td>
      <td>₹ 14,52,976/year <br>
(₹11.0L/yr - ₹18.3L/yr)

</td>
    </tr>

    <tr>
      <td>

      Software Developer
<br>
Experience: 0 - 2 yrs

</td>
      <td>₹ 7,51,250/year <br>
(₹5.0L/yr - ₹12.5L/yr)

</td>
    </tr>
    <tr>
      <td>
        
Software Intern
<br>
Experience: 0 - 1 yrs

      </td>
      <td>
      ₹ 4,81,324/year <br>
(₹2.4L/yr - ₹9.0L/yr)

      </td>
    </tr>

    
       
   
      </tbody>
      </table>
  
</div>


 

<!-- inserting rucruitment division here -->


 



<div class="recrutment" id="recrutement">
<!-- inserting some info here -->
<h2 align="center" id='headings'>RECRUITMENT</h2>

<div class="row">
  <div class="col-md-10">
    <p class="para"> 
    <br>If you are an aspiring candidate looking to get hired in MAQ Software, you must know about MAQ Software Recruitment Process, Job Roles and CTC Offered, MAQ Software Eligibility Criteria, How to apply for MAQ off campus, MAQ Software Selection Process, documents required for MAQ Software.<br>
    MAQ Software Recruitment Process - Eligibility Criteria and Skills RequiredMAQ Software Recruitment Process
Before applying to the company's hiring process, make sure you are eligible in the following areas:

Software Engineer
<ul style="font-size:20px">
<li>B. Tech./ B.E. (CSE/ IT) or M. Tech. (CS/ IT) or BCA + MCA or B.Sc. (IT) + MCA or B.Sc. (CS) + MCA</li>
<li>65 percent or above in Class X and XII.</li>
<li>60% plus or equivalent in Computer Science/Information Technology</li>
<li>No backlogs at the time of interview.</li>
<li>Good technical knowledge.</li>
<li>Excellent communication skills (spoken and written English).</li>
<li>Ability to handle and take responsibility for multiple tasks for the growth of the company.</li>
<li>Excellent problem resolution, judgment, and decision-making skills.</li>
<li>The MAQ Software recruitment process consists of four rounds of selection and It includes Resume Shortlist.this was based on your percentage of your degree.After that</li>
1.Aptitude Test.
2.Technical Interview
3.HR Interview
</p>
     
    </p>
  </div>
</div>
<!-- INSERTING RECRUITMENT PROCESS WITH IMAGES -->
<div class="row">
<div class="col-md-6">
      
      <img src="maqsoftware_images/apptitude.png" alt="" class="img-fluid"  id='recruitingimages'>
     </div>
<div class="col-md-6 text-align-center">
  <br><br>
     <h3 align="center" id='headings'>1.Aptitude Test</h3>
     <p class="para">The aptitude test consists of four sections and total time allotted is 90 minutes.It includes:</p>
    
     <ul style="font-size:20px">
      <li>Quantitative Aptitude -Academic Criteria: 65,
Coding: 2,
Aptitude: 30.</li>
      <li>Programming Language Efficiency</li>
      <li>Coding Test and</li>
      <li>E-mail Writing</li>
     </ul>
     </div>
     
</div>





<div class="row mt-2">
  <div class="col-md-6">
    <br>
  <h3 align="center" id='headings'>2.Technical Interview</h3>
  <p class="para">This round is based on your resume, branch of specialization, favorite subjects, etc. Be prepared to answer basic questions relating to each of these topics. Don’t be surprised if you are asked to write code. Also be ready to answer puzzle questions.</p><br>
  <p class='para'>In certain cases, the interviewer may also try and confuse/mislead you into giving the wrong answer so watch out for such trick questions.</p>
</div><div class="col-md-6">
    <img src="maqsoftware_images/interview.png" alt="" class='img-fluid'  id='recruitingimages'>
  </div>
</div>




<div class="row">
<div class="col-md-6"><br><br><br>
  <img src="maqsoftware_images/hr_interview.png" alt="" class="img-fluid" id='recruitingimages'>
  </div>
  <div class="col-md-6">
    <br>
  <h3 align="center" id='headings'>3.HR Interview</h3>
  <p class='para'>Expect questions on work experience, education, hobbies and family background apart from the usual HR questions like strengths and weaknesses, reasons for applying to the company, why you should be hired, etc.

Most candidates tend to think that the HR interview is easy, but remember that a bad HR interview could end your chances of getting the job even after passing all the previous obstacles (aptitude test, technical round, etc.). The key here is to remain polite and confident. Interviews can be long and dreary so don’t forget to wear a smile!</p> <br>
<p class='para'>In order to prepare for your HR interview you should:
Research the company you are interviewing with.
Research the person wo is interviewing you if possible.
Read and understand the job description and everything that it entails.
Review your CV and be prepared to answer questions related to it.</p>
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
        <img class="card-img-top img-fluid h-25 w-100" src="maqsoftware_images/p.jpeg" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title">Positive</h4>
          <p class="card-text">
          <?php
    $pythonPath = "C:\\Users\\91630\\AppData\\Local\\Programs\\Python\\Python311\\pythonw.exe"; //python interpreter
    $PositiveScript = 'C:\xampp\new\htdocs\miniproject\khasim\python\maq_pos.py'; //python file path
    exec($pythonPath.' '.$PositiveScript, $PositiveOutput); // Corrected exec() command
    // echo $mindtreePositiveOutput;
    $s="-->";
    $k=0;
    foreach($PositiveOutput as $line){
      if($k<35){
        echo '<p>'.$s.' '.$line.'</p>';
      }
      $k+=1;
        
    }
?>
          </p>
          
        </div>
      </div>
    </div>
    <div class="col-md-4 king">
      <div class="card">
        <img class="card-img-top img-fluid" src="maqsoftware_images/n.jpeg" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title">Negative</h4>
          <p class="card-text">
          <?php
    $pythonPath = "C:\\Users\\91630\\AppData\\Local\\Programs\\Python\\Python311\\pythonw.exe"; //python interpreter
    $NegtiveScript = 'C:\xampp\new\htdocs\miniproject\khasim\python\maq_neg.py'; //python file path
    exec($pythonPath.' '.$NegtiveScript, $NegativeOutput); // Corrected exec() command
    // echo $mindtreePositiveOutput;
    $s="-->";
    $k=0;
    foreach($NegativeOutput as $line){
      if($k<35){
        echo '<p>'.$s.' '.$line.'</p>';
      }
      $k+=1;
        
    }
?>
          </p>
           
        </div>
      </div>
    </div>
    <div class="col-md-4 king">
      <div class="card">
        <img class="card-img-top img-fluid" src="maqsoftware_images/nu.jpeg" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title">Netural</h4>
          <p class="card-text">
          <?php
    $pythonPath = "C:\\Users\\91630\\AppData\\Local\\Programs\\Python\\Python311\\pythonw.exe"; //python interpreter
    $NeturalScript = 'C:\xampp\new\htdocs\miniproject\khasim\python\maq_netural.py'; //python file path
    exec($pythonPath.' '.$NeturalScript, $NeturalOutput); // Corrected exec() command
    // echo $mindtreePositiveOutput;
    $s="-->";
    $k=0;
    foreach($NeturalOutput as $line){
      if($k<35){
        echo '<p>'.$s.' '.$line.'</p>';
      }
      $k+=1;
        
    }
?>
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