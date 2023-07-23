 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Nagarro company</title>
  <link rel="icon"  href="nagarro_images/logo.png">
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
    color:#000000;
  
    
    
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
    <a class="navbar-brand " href="#"><img src="nagarro_images/logo.png" alt="rgukt" height="50px" width="50px" class="flip-icon">MINI_PROJECT</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end"  id="collapsibleNavbar">
      <ul class="navbar-nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link" href="secondpage.php" id="navitems">HOME</a>
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
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
        <ol class="carousel-indicators">
          <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
          <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
          <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
             
            <img src="nagarro_images/nagarro1.jpg" class="d-block  w-100" alt="Image 1">
          </div>
          <div class="carousel-item" data-bs-interval="3000">
            <img src="nagarro_images/nagarro2.jpg" class="d-block w-100" alt="Image 2">
          </div>
          <div class="carousel-item" data-bs-interval="3000">
            <img src="nagarro_images/nagarro3.jpg"class="d-block  w-100" alt="Image 3">
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
            <p class="para">Nagarro SE is a digital engineering company. It offers application development and management, digital product engineering, artificial intelligence and machine learning, cloud solutions, digital marketing, IoT solutions, digital commerce solutions, managed services, and others.Nagarro is the Best MNC in Delhi NCR </p> <br>
                <p class="para">Nagarro employs 10,001 to 50,000 employees in India.great company to work for and to grow depending on project you get. Work culture is great and CEO is supportive.The company's geographical segment includes North America, Central Europe, Rest of Europe, and Rest of World. It derives a majority of its revenue from the Central Europe segment.</p> <br>

                <p class="para">Nagarro (Frankfurt: NA9) helps to transform, adapt, and build new ways into the future through a forward-thinking, agile and caring mindset. We excel at digital product engineering and deliver on our promise of thinking breakthroughs.Highest reported salary offered at Nagarro is ₹40lakhs.
A good work/life balance and lot to learn and grow. Management can be improved as mangers acts bossy. Changing its working culture and salary structure abruptly. So, if you are joining Nagarro for money than you should have to think twice but work culture is good.</p>
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
Associate Staff Engineer
<br>
Experience: 4 - 9 yrs
</td>
      <td>₹ 21,29,183/year <br>
(₹8.8L/yr - ₹33.0L/yr)

</td>
    </tr>
    <tr>
      <td>

      Staff Engineer
<br>
Experience: 5 - 11 yrs

</td>
      <td>₹ 26,59,781/year <br>
(₹13.5L/yr - ₹38.2L/yr)

</td>
    </tr>
    <tr>
      <td>

      Senior Engineer
<br>
Experience: 2 - 6 yrs

</td>
      <td>₹ 16,99,147/year <br>
(₹6.0L/yr - ₹27.0L/yr)

</td>
    </tr>
    <tr>
      <td>

      Senior Associate
<br>
Experience: 2 - 6 yrs

</td>
      <td>₹ 9,96,575/year <br>
(₹3.6L/yr - ₹16.4L/yr)

</td>
    </tr>
    <tr>
      <td>

      Senior Associate Technology L1
<br>
Experience: 2 - 6 yrs

</td>
      <td>₹ 10,49,182/year <br>
(₹4.7L/yr - ₹16.5L/yr)

</td>
    </tr>
    <tr>
      <td>

      Associate Engineer
<br>
Experience: 0 - 2 yrs

</td>
      <td>₹ 4,36,072/year <br>
(₹2.6L/yr - ₹7.0L/yr)

</td>
    </tr>
    <tr>
      <td>

      Associate Lead Technology
<br>
Experience: 5 - 10 yrs

</td>
      <td>₹ 17,99,072/year <br>
(₹9.0L/yr - ₹30.0L/yr)

</td>
    </tr>

    <tr>
      <td>

      Associate Software Engineer
<br>
Experience: 0 - 2 yrs

</td>
      <td>₹ 4,82,062/year <br>
(₹3.0L/yr - ₹12.0L/yr)

</td>
    </tr>

    <tr>
      <td>

      Associate Technical Leader
<br>
Experience: 4 - 10 yrs

</td>
      <td>₹ 15,63,162/year <br>
(₹7.0L/yr - ₹23.0L/yr)

</td>
    </tr>

    <tr>
      <td>
Process Associate <br>

Experience: 0 - 9 yrs
</td>
      <td>₹ 18,97,504/year <br>
(₹8.2L/yr - ₹29.0L/yr)

</td>
    </tr>

    
       
   
      </tbody>
      </table>
  
</div>


 

<!-- inserting rucruitment division here -->


 



<div class="recrutment" id="recrutement">
<!-- inserting some info here -->
<h2 align="center" id='headings'>RECRUITMEMT</h2>

<div class="row">
  <div class="col-md-10">
    <p class="para"> 
    Average Nagarro Trainee salary in India is ₹ 3.8 Lakhs for less than 1 year of experience. Trainee salary at Nagarro India ranges between ₹ 3.0 Lakhs to ₹ 4.5 Lakhs. According to our estimates it is 101% more than the average Trainee Salary in IT Services & Consulting Companies.Every software development candidate must go through <b>3-4 rounds</b> of the Nagarro recruitment process. 
   <UL STYLE="FONT-SIZE:20PX"> <li>Step 1- General Aptitude Exam: 30 MCQs in 40 mins ... </li>
    <li>Step 2 - Technical Test: 20 questions in 20 mins </li>
    <li>Step 3 - Coding Test: 2-3 coding questions/ problem st...</li></UL><br>
  </div>
</div>
<!-- INSERTING RECRUITMENT PROCESS WITH IMAGES -->




<div class="row">
<div class="col-md-6"><BR><BR><BR>
      
      <img src="nagarro_images/apptitude.png" alt="" class="img-fluid"  id='recruitingimages'>
     </div>
<div class="col-md-6 text-align-center">
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
  <div class="col-md-6"><BR><BR>
  <img src="nagarro_images/hr_interview.png" alt="" class="img-fluid" id='recruitingimages'>
  </div>
</div>





<div class="row mt-2">
  <div class="col-md-6"><BR><BR><BR><BR>
    <img src="nagarro_images/CODING.JPg" alt="" class='img-fluid'  id='recruitingimages'>
  </div>
  <div class="col-md-6">
    <br>
  <h3 align="center" id='headings'>3.Coding Round</h3>
  <p class="para">Coding test are assessments that are designed to evaluate a developer's coding skills and aptitude. They can be used in a variety of situations.</p>
  <p class='para'>No, coding is not hard to learn; however, it can initially seem intimidating. When learning anything new, the beginning can be challenging. Coding gets easier over time with patience and persistence. If you're considering learning how to code, it can be easy to focus on the difficulty.</p>
 <OL STYLE="FONT-SIZE:20PX"><li> Master Basic Programming. Great success usually begins with small habits. ...</li>
 <li>Doing company research. ...</li>
 <li>Focus on the programming language that you are good at! ...</li>
 <li>Practice, Practice, and Practice.</li></OL>

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
        <img class="card-img-top img-fluid h-25 w-100" src="nagarro_images/p.jpeg" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title">Positive</h4>
          <p class="card-text">
<?php
    $pythonPath = "C:\\Users\\91630\\AppData\\Local\\Programs\\Python\\Python311\\pythonw.exe"; //python interpreter
    $PositiveScript = 'C:\xampp\new\htdocs\miniproject\khasim\python\nagarro_pos.py'; //python file path
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
        <img class="card-img-top img-fluid" src="nagarro_images/n.jpeg" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title">Negative</h4>
          <p class="card-text">
          <?php
    $pythonPath = "C:\\Users\\91630\\AppData\\Local\\Programs\\Python\\Python311\\pythonw.exe"; //python interpreter
    $NegtiveScript = 'C:\xampp\new\htdocs\miniproject\khasim\python\sysnopsys_neg.py'; //python file path
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
        <img class="card-img-top img-fluid" src="nagarro_images/nu.jpeg" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title">Neutral</h4>
          <p class="card-text"><?php
    $pythonPath = "C:\\Users\\91630\\AppData\\Local\\Programs\\Python\\Python311\\pythonw.exe"; //python interpreter
    $NeturalScript = 'C:\xampp\new\htdocs\miniproject\khasim\python\nagarro_netural.py'; //python file path
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