 <!DOCTYPE html>
<html lang="en">
<head>
  <title>ZohoCorperations Company</title>
  <link rel="icon"  href="ZohoCorperations_images/logo.png">
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
    <a class="navbar-brand " href="#"><img src="ZohoCorperations_images/logo.png" alt="rgukt" height="50px" width="50px" class="flip-icon">MINI_PROJECT</a>
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
             
            <img src="ZohoCorperations_images/ZohoCorperations1.jpg" class="d-block  w-100" alt="Image 1">
          </div>
          <div class="carousel-item" data-bs-interval="3000">
            <img src="ZohoCorperations_images/ZohoCorperations2.jpg" class="d-block w-100" alt="Image 2">
          </div>
          <div class="carousel-item" data-bs-interval="3000">
            <img src="ZohoCorperations_images/ZohoCorperations3 (1).jpg"class="d-block  w-100" alt="Image 3">
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
            <p class="para">Zoho Corporation is an Indian multinational technology company that makes computer software and web-based business tools.It is best known for the online office suite offering Zoho Office Suite. The company was founded in 1996 by Sridhar Vembu and Tony Thomas and has a presence in seven locations with global headquarters in Chennai, Tamil Nadu, India, and corporate headquarters outside of Austin in Del Valle, Texas.[4][5] Radha Vembu, Sridhar Vembu's sister, owns a majority stake in the company.Zoho CRM was released in 2005, along with Zoho Writer, the company's first Office suite product.[8] Zoho Projects, Creator, Sheet, and Show were released in 2006.[8] Zoho expanded into the collaboration space with the release of Zoho Docs and Zoho Meeting in 2007. In 2008, the company added invoicing and mail applications, reaching one million users by August of that year.</P>
           <p class="para">Zoho is headquartered in Chennai, India. As of 2021, it has 12 offices operating in nine countries around the world. The company operates in China and also has offices in Singapore and Japan. The bulk of its support operations are carried out from its office in Chennai. Zoho also has an office in Renigunta, Andhra Pradesh and has been operating from this office since 2018.</P>
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
Associate Technical Consultant <br>

Experience: 0 - 2 yrs
</td>
      <td>₹ 4,90,067/year <br>
(₹4.3L/yr - ₹6.3L/yr)

</td>
    </tr>
    <tr>
      <td>

      Technical Consultant
<br>
Experience: 2 - 4 yrs

</td>
      <td>₹ 7,42,656/year <br>
(₹5.6L/yr - ₹10.0L/yr)

</td>
    </tr>
    <tr>
      <td>

      Quality Engineer
<br>
Experience: 0 - 4 yrs 

</td>
      <td>₹ 6,08,750/year <br>
(₹5.2L/yr - ₹6.6L/yr)

</td>
    </tr>
    <tr>
      <td>

      Senior Quality Engineer <br>

Experience: 4 - 9 yrs 

</td>
      <td>₹ 5,75,000/year <br>
(₹4.5L/yr - ₹7.0L/yr)


</td>
    </tr>
    <tr>
      <td>

      Associate Quality Engineer
<br>
Experience: 0 - 1 yrs

</td>
      <td>₹ 3,57,000/year <br>
(₹3.0L/yr - ₹4.1L/yr)

</td>
    </tr>
    <tr>
      <td>

      Senior Technical Consultant
<br>
Experience: 3 - 4 yrs

</td>
      <td>₹ 9,52,500/year <br>
(₹8.5L/yr - ₹11.2L/yr)

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
  <div class="col-md-10"> <p class="para">Average annual salary in Zoho is INR 9.6 lakhs . Salary estimates are based on 3.9k Zoho latest salaries received from various employees of Zoho.<br>Minimum salary at Zoho depends on the role you are applying for. For Content Writer the minimum salary is ₹5.1 Lakhs per year, for Technical Support Engineer the minimum salary is ₹5.7 Lakhs per year and so on.<br>
   
   </p>
   <p class="para">The highest-paying job at Zoho is a MLS with a salary of ₹30.6 Lakhs per year. The top 10% of employees earn more than ₹15.95 lakhs per year. The top 1% earn more than a whopping ₹36 lakhs per year.</P>
    <p class="para">At ZOHO, the interview process usually consists of five rounds of written tests, basic programming, advanced programming, and HR rounds (Technical and General). It is an aptitude test that is mandatory for freshers.As you move through each round, the questions get more complex.

    </p>

  <UL STYLE="FONT-SIZE:20PX"><li>Step 1-Written Test</li><li>Step 2-Programming </li><li>Step 3-Advanced Programming </li>
    <li>Step 4- interview </li>
    <li>Step 5- HR interview </li></ul>

   
  </div>
</div>
<!-- INSERTING RECRUITMENT PROCESS WITH IMAGES -->




<div class="row">

<div class="col-md-6 text-align-center"><br><br>
     <h3 align="center" id='headings'>1.Written Test</h3>
     <p class="para">General Quant Test: This is actually an aptitude problem-solving round that consists of general quant questions and questions regarding the output of code.</p>
     <ul style="font-size:20px">
      <li> verbal ability</li> <li> numerical ability</li>
       <li>  spatial ability</li>
       <li>mechanical ability</li> 
     <li>logical reasoning</li>
     <li>clerical speed </li>
     </ul>
     </div>
     <div class="col-md-6"><BR><BR><BR><br>
      
      <img src="ZohoCorperations_images/apptitude.png" alt="" class="img-fluid"  id='recruitingimages'>
     </div>
  </div>


  <div class="row mt-2">
  <div class="col-md-6"><BR><BR><BR><BR>
    <img src="ZohoCorperations_images/CODING.JPg" alt="" class='img-fluid'  id='recruitingimages'>
  </div>
  <div class="col-md-6">
    <br>
  <h3 align="center" id='headings'>2&3.CODING ROUND</h3>
  <p class="para">Coding test are assessments that are designed to evaluate a developer's coding skills and aptitude. They can be used in a variety of situations.</p>
  <p class='para'>No, coding is not hard to learn; however, it can initially seem intimidating. When learning anything new, the beginning can be challenging. Coding gets easier over time with patience and persistence. If you're considering learning how to code, it can be easy to focus on the difficulty.</p>
 <OL STYLE="FONT-SIZE:20PX"><li> Master Basic Programming. Great success usually begins with small habits. ...</li>
 <li>Doing company research. ...</li>
 <li>Focus on the programming language that you are good at! ...</li>
 <li>Practice, Practice, and Practice.</li></OL>

  </div>
</div>


<div class="row">
  <div class="col-md-6">
    <br><BR><BR>
  <h3 align="center" id='headings'>4.Technical Interview</h3>
<br>
<p class='para'>This round is based on your resume, branch of specialization, favorite subjects, etc. Be prepared to answer basic questions relating to each of these topics. Don’t be surprised if you are asked to write code. Also be ready to answer puzzle questions and  assess your technical ability for the role, and the depth and breadth of your knowledge in your chosen field. Technical interviews are also designed to assess your problem-solving skills, your communication skills, and your ability to think under pressure.During the technical phone interview</p>
<ul style="font-size:20px"><li>Be excited about the company or project, and that positivity will come across in the interview.</li>
<li>Know your audience. ....</li>
<li>Be honest: tell the interviewer what most interests you in a job and what kinds of projects you'd like to work on..</li>
<li>Answer behavioral questions by showing, not telling..</li></ul>

<p style="font-size:20px">So what are you waiting for? Go ahead and apply now!</p>
  </div>
<div class="col-md-6"><br><br><br><br><br>
    <img src="ZohoCorperations_images/interview.png" alt="" class='img-fluid'  id='recruitingimages'>
  </div>
</div>





<div class="row">
<div class="col-md-6"><br><br><br><br><br><br>
  <img src="ZohoCorperations_images/hr_interview.png" alt="" class="img-fluid" id='recruitingimages'>
  </div>
  <div class="col-md-6">
    <br>
  <h3 align="center" id='headings'>5.HR Interview</h3>
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
        <img class="card-img-top img-fluid h-25 w-100" src="ZohoCorperations_images/p.jpeg" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title">Positive</h4>
          <p class="card-text">
          <?php
    $pythonPath = "C:\\Users\\91630\\AppData\\Local\\Programs\\Python\\Python311\\pythonw.exe"; //python interpreter
    $PositiveScript = 'C:\xampp\new\htdocs\miniproject\khasim\python\zoho_pos.py'; //python file path
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
        <img class="card-img-top img-fluid" src="ZohoCorperations_images/n.jpeg" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title">Negative</h4>
          <p class="card-text">
          <?php
    $pythonPath = "C:\\Users\\91630\\AppData\\Local\\Programs\\Python\\Python311\\pythonw.exe"; //python interpreter
    $NegtiveScript = 'C:\xampp\new\htdocs\miniproject\khasim\python\zoho_neg.py'; //python file path
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
        <img class="card-img-top img-fluid" src="ZohoCorperations_images/nu.jpeg" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title">Netural</h4>
          <p class="card-text">
            <!-- Some quick example text to build on the card title and make up the bulk of the card's content. -->
            <?php
    $pythonPath = "C:\\Users\\91630\\AppData\\Local\\Programs\\Python\\Python311\\pythonw.exe"; //python interpreter
    $NeturalScript = 'C:\xampp\new\htdocs\miniproject\khasim\python\zoho_netural.py'; //python file path
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