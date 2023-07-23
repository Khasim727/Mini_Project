 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Mindtree company</title>
  <link rel="icon"  href="mindtree_images/logo.png">
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
    border-bottom: 2px solid black;
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
    border-bottom: 1px solid black;
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


/* inserting the css for the new table */
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
    <a class="navbar-brand " href="#"><img src="mindtree_images/logo.png" alt="rgukt" height="50px" width="50px" class="flip-icon">MINI_PROJECT</a>
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
             
            <img src="mindtree_images/mindtree1.jpg" class="d-block  w-100" alt="Image 1">
          </div>
          <div class="carousel-item" data-bs-interval="3000">
            <img src="mindtree_images/mindtree2.jpg" class="d-block w-100" alt="Image 2">
          </div>
          <div class="carousel-item" data-bs-interval="3000">
            <img src="mindtree_images/mindtree3.jpg"class="d-block  w-100" alt="Image 3">
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
            <p class="para">Mindtree Ltd was an Indian multinational information technology services and consulting company, headquartered in Bangalore. Mindtree was acquired by Larsen & Toubro in 2019 before being merged with L&T Infotech (LTI) in 2022 to form LTIMindtree.[6][7][8]

The company had business interests in e-commerce, mobile applications, cloud computing, digital transformation, data analytics, testing, enterprise application integration, and enterprise resource planning. It had more than 307 active clients and 43 offices in over 18 countries, as of 31 March 2019. </p> <br>
                <p class="para">In August 1999, Mindtree Consulting Private Limited was founded by ten IT professionals, three of which invested through an entity incorporated in Mauritius. It was funded by the venture capital firms Walden International and Sivan Securities and received further funding in 2001 from the Capital Group and Franklin Templeton.

It became a public company on 12 December 2006, and was listed on the Bombay Stock Exchange and National Stock Exchange. Its IPO debuted on 9 February 2007, and closed on 14 February 2007.The IPO was oversubscribed by more than a hundred times.[13] Mindtree announced a new brand identity and logo, with the slogan "Welcome to possible" on 28 September 2012 </p> <br>

                <p class="para">In 2012, Mindtree set up its first U.S. delivery center (USDC) in Gainesville, Florida, under the leadership of Scott Staples, co-founder and Global Head of Sales.As of 2017, the company has 43 offices in over 17 countries.[16]

Larsen & Toubro (L&T), an infrastructure major and one of the largest conglomerates in India, took over control of Mindtree in June 2019 and currently has a 61.08% stake in the company.L&T's takeover of Mindtree was described at the time as the first hostile takeover in the Indian IT industry.</p>
        </div>

        
    </div>
</div>

</div>

<!-- inserting roles here -->
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
Devops Engineer
<br>
Experience: 1 - 6 yrs</td>
      <td>₹ 6,71,702/year <br>
(₹2.8L/yr - ₹15.4L/yr)

</td>
    </tr>
    <tr>
      <td>

      Specialist Testing <br>
 
Experience: 4 - 11 yrs

</td>
      <td>₹ 11,73,778/year <br>
(₹5.6L/yr - ₹17.5L/yr)

</td>
    </tr>
    <tr>
      <td>
      Technical Specialist <br>
      Experience: 3 - 11 yrs
</td>
      <td> ₹ 11,95,508/year <br>
(₹5.0L/yr - ₹21.0L/yr)

</td>
    </tr>
    <tr>
      <td>

      Module Lead <br>

Experience: 3 - 10 yrs

</td>
      <td> ₹ 14,25,643/year <br>
(₹4.5L/yr - ₹25.0L/yr)

</td>
    </tr>
    <tr>
      <td>

      Technical Lead <br>

Experience: 5 - 14 yrs

</td>
      <td> ₹ 19,32,599/year <br>
(₹6.3L/yr - ₹34.0L/yr)

</td>
    </tr>
    <tr>
      <td>
IT Analyst C2 <br>

Experience: 3 - 10 yrs
</td>
      <td>₹ 10,08,695/year <br>
(₹3.6L/yr - ₹30.0L/yr)
</td>
    </tr>
    <tr>
      <td>
Software Engineer <br>

Experience: 0 - 8 yrs
</td>
      <td>₹ 5,80,832/year <br>
(₹2.0L/yr - ₹14.5L/yr)
/td>
    </tr>

    <tr>
      <td>
 
Senior Software Engineer <br>

Experience: 1 - 7 yrs

</td>
      <td> ₹ 8,83,631/year <br>
(₹4.0L/yr - ₹19.7L/yr)

</td>
    </tr>

    <tr>
      <td>
Software Developer <br>

Experience: 0 - 9 yrs
</td>
      <td>₹ 5,74,491/year <br>  
(₹2.0L/yr - ₹14.5L/yr)
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
    Mindtree has a total of 35,071 employees as of fiscal year 2022Its workforce consists of employees from over 80 nationalities working from various offices around the globe. Out of its total workforce, 95% are software professionals and remaining 5% work in support and sales<br>
    MindTree Recuitment Process·
    <ul style="font-size:20px">
    <li>Step 1- Pre Placement Talk · </li>
    <li>Step 2 - Online Written Test (Round - 1)</li>
    <li>Step 3 - Interview Round ·</li>
    <li>Step 4 - HR Interview.</li></ul><br>
  </div>
</div>
<!-- INSERTING RECRUITMENT PROCESS WITH IMAGES -->




<div class="row">
<div class="col-md-6">
      
      <img src="mindtree_images/preplacementtalk.JPG" alt="" class="img-fluid" id='recruitingimages'>
     </div>
<div class="col-md-6 text-align-center">
     <h3 align="center" id='headings'>1.PREPLACEMENT TALK</h3>
     <p class="para">Pre-placement talk (PPT) serve as means to clarify details regarding salary break-up, job profile, place of work, bond details (if any) etc. of the companies to enable students to be well-versed with all such details.</p>
     <p style="font-size:20px">You should never miss Company's pre-placement talks and presentations. The reason you attend these sessions because most of the times questions in HR interview are asked directly from what was conveyed during company's pre-placement talk during campus placement drive.The students interact with the company officials and understand the profiles and clear their doubts during the PPT session. They are expected to get all their doubts cleared from the company officials.</p>

     </div>

<!-- INSERTING PREPLACEMENT TALK WITH IMAGES -->




<div class="row">
<div class="col-md-6 text-align-center"><br><br>
     <h3 align="center" id='headings'>2.Aptitude Test</h3>
     <p class="para">The aptitude test consists of four sections and total time allotted is 90 minutes.</p>
     <p>It includes:</p>
     <ul style="font-size:20px">
      <li>Quantitative Aptitude</li>
      <li>Programming Language Efficiency</li>
      <li>Coding Test and</li>
      <li>E-mail Writing</li>
     </ul>
     </div>
     <div class="col-md-6">
      
      <img src="mindtree_images/apptitude.png" alt="" class="img-fluid"  id='recruitingimages'>
     </div>
     
</div>

<div class="row mt-2">
  <div class="col-md-6">
    <img src="mindtree_images/interview.png" alt="" class='img-fluid'  id='recruitingimages'>
  </div>
  <div class="col-md-6">
    <br>
  <h3 align="center" id='headings'>3.HR Interview</h3>
  <p class="para">Expect questions on work experience, education, hobbies and family background apart from the usual HR questions like strengths and weaknesses, reasons for applying to the company, why you should be hired, etc.

Most candidates tend to think that the HR interview is easy, but remember that a bad HR interview could end your chances of getting the job even after passing all the previous obstacles (aptitude test, technical round, etc.). The key here is to remain polite and confident. Interviews can be long and dreary so don’t forget to wear a smile!</p><br>
  <p class='para'>In certain cases, the interviewer may also try and confuse/mislead you into giving the wrong answer so watch out for such trick questions.</p>

  </div>
</div>




<div class="row">
  <div class="col-md-6">
    <br><br>
  <h3 align="center" id='headings'>4.Technical Interview</h3>
  <p class='para'></p> <br>
<p class='para'>This round is based on your resume, branch of specialization, favorite subjects, etc. Be prepared to answer basic questions relating to each of these topics. Don’t be surprised if you are asked to write code. Also be ready to answer puzzle questions.With wipro being named one of the world’s top employers by the Top Employer Institute for consecutive years, a career at this company could be rich and rewarding experience for job seekers.

So what are you waiting for? Go ahead and apply now!</p>
  </div>
  <div class="col-md-6">
  <img src="mindtree_images/hr_interview.png" alt="" class="img-fluid" id='recruitingimages'>
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
        <img class="card-img-top img-fluid h-25 w-100" src="mindtree_images/p.jpeg" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title">Positive</h4>
          <p class="card-text">
          <?php
    $pythonPath = "C:\\Users\\91630\\AppData\\Local\\Programs\\Python\\Python311\\pythonw.exe"; //python interpreter
    $mindtreePositiveScript = 'C:\xampp\new\htdocs\miniproject\khasim\python\mind_tree_pos.py'; //python file path
    exec($pythonPath.' '.$mindtreePositiveScript, $mindtreePositiveOutput); // Corrected exec() command
    // echo $mindtreePositiveOutput;
    $s="-->";
    $k=0;
    foreach($mindtreePositiveOutput as $line){
      if($k<45){
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
        <img class="card-img-top img-fluid" src="mindtree_images/n.jpeg" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title">Negative</h4>
          <p class="card-text">
          <?php
          $path = "C:\\Users\\91630\\AppData\\Local\\Programs\\Python\\Python311\\pythonw.exe"; //python interpreter
    $negativeScript = 'C:\xampp\new\htdocs\miniproject\khasim\python\mind_tree.neg.py'; //negative python file path
    // $negativeOutput = [];
    exec($path.' '.$negativeScript, $negativeOutput); // Execute negative script
    $s="-->";
    $i=0;
    foreach($negativeOutput as $line){
      if($i<45){
        echo '<p>'.$s.' '.$line.'</p>';
      }
      $i+=1;
        
    }
?>

          </p>
           
        </div>
      </div>
    </div>
    <div class="col-md-4 king">
      <div class="card">
        <img class="card-img-top img-fluid" src="mindtree_images/nu.jpeg" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title">Netural</h4>
          <p class="card-text">
          <?php
    $pythonPath = "C:\\Users\\91630\\AppData\\Local\\Programs\\Python\\Python311\\pythonw.exe"; //python interpreter
    $mindtreeNeturalScript= 'C:\xampp\new\htdocs\miniproject\khasim\python\mind_tree_netural.py'; //python file path
    exec($pythonPath.' '.$mindtreeNeturalScript, $mindtreeNeturalOutput); // Corrected exec() command
    // echo $mindtreePositiveOutput;
    $s="-->";
    $j=0;
    foreach($mindtreeNeturalOutput as $line){
      if($j<45){
        echo '<p>'.$s.' '.$line.'</p>';
      }
      $j+=1;
        
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