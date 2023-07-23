 <!DOCTYPE html>
<html lang="en">
<head>
  <title>CodeTantra company</title>
  <link rel="icon"  href="CodeTantra_images/logo.png">
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
    <a class="navbar-brand " href="#"><img src="CodeTantra_images/logo.png" alt="rgukt" height="50px" width="50px" class="flip-icon">MINI_PROJECT</a>
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
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1000">
        <ol class="carousel-indicators">
          <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
          <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
          <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
             
            <img src="CodeTantra_images/CodeTantra1.jpg" class="d-block  w-100" alt="Image 1">
          </div>
          <div class="carousel-item" data-bs-interval="1000">
            <img src="CodeTantra_images/CodeTantra2.jpg" class="d-block w-100" alt="Image 2">
          </div>
          <div class="carousel-item" data-bs-interval="1000">
            <img src="CodeTantra_images/CodeTantra3.jpg"class="d-block  w-100" alt="Image 3">
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
            <p class="para">CodeTantra is a tech-startup company which has developed a Cloud Based Automated Programming Tutor that builds coding abilities through an interactive, learn by doing methodology.Codetantra Tech Solutions Private Limited is a Private incorporated on 13 March 2014. It is classified as Non-govt company and is registered at Registrar of Companies, Hyderabad. Its authorized share capital is Rs. 5,000,000 and its paid up capital is Rs. 1,174,350. It is inolved in Database activities and distribution of electronic content [This includes data base development, data storage and data base availability. The provision of data in a certain order/sequence, accessible to everybody or to limited users and can be sorted on demand.(computerised documentation activities provided by libraries and archives are classified in class 9231)]. </p> <br>

                <p class="para">Codetantra Tech Solutions Private Limited's Annual General Meeting (AGM) was last held on 28 September 2022 and as per records from Ministry of Corporate Affairs (MCA), its balance sheet was last filed on 31 March 2022.Directors of Codetantra Tech Solutions Private Limited are Satya Venkata Ramana Telidevara, Ravi Sekhar Chilmakuri and Chaitanya Nandana Vanguri. </p> <br>

                <p class="para">Codetantra Tech Solutions Private Limited's Corporate Identification Number is (CIN) U72400TG2014PTC093496 and its registration number is 93496.Its Email address is ramana@codetantra.com and its registered address is SHOP No.2, GROUND FLOOR, V.C. PLAZA H.No.12-6-2/273/2 HYDERABAD TG 500072 INI </p>
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

      Product Support Engineer
<br>
Experience: 0 - 3 yrs

</td>
      <td>₹ 4,01,300/year <br>
(₹3.3L/yr - ₹4.6L/yr)

</td>
    </tr>
    <tr>
      <td>

      Product Engineer
<br>
Experience: 1 - 3 yrs


</td>
      <td>₹ 3,09,167/year <br>
(₹2.5L/yr - ₹4.2L/yr)


</td>
    </tr>
    <tr>
      <td>

     
Production Engineer
<br>
Experience: 0 - 3 yrs


</td>
      <td>₹ 2,66,000/year <br>
(₹2.2L/yr - ₹3.4L/yr)


</td>
    </tr>
    <tr>
      <td>

   
Software test Engineer
<br>
Experience: 2 - 3 yrs 


</td>
      <td>₹ 6,76,000/year <br>
(₹3.8L/yr - ₹8.0L/yr)


</td>
    </tr>
    <tr>
      <td>

      Devops Engineer
<br>
Experience: 3 - 8 yrs 


</td>
      <td>₹ 5,51,250/year <br>

(₹3.8L/yr - ₹10.8L/yr)

</td>
    </tr>
    <tr>
      <td>

Support Engineer
<br>
Experience:  Fresher


</td>
      <td>₹ 2,98,750/year <br>
(₹10.0K/yr - ₹4.5L/yr)


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
    <br>Global headquarters for CodeTantra Tech Solutions is located in Hyderabad,Telangana,India.The overall rating of CodeTantra Tech Solutions is 4.1, with Work-Life balance being rated at the top and given a rating of 4.1. However, Work Satisfaction is rated the lowest at 3.0. To know first hand how is it like to work at CodeTantra Tech Solutions read detailed reviews by job profile, department and location in the reviews section.
            <p class="para">The CodeTantra recruitment process consists of four rounds of selection and It includes Resume Shortlist.this was based on your percentage of your degree.After thaat<br>
1.Aptitude Test.
2.Group Discussion.
3.One-on-one Round.[It consists either HR interview or Technical interview]
 CodeTantra Tech Solutions employs 51 to 200 employees in India.</p>
     
    </p>
  </div>
</div>
<!-- INSERTING RECRUITMENT PROCESS WITH IMAGES -->
<div class="row">
<div class="col-md-6 text-align-center">
  <br><br>
     <h3 align="center" id='headings'>1.Aptitude Test</h3>
     <p class="para">The aptitude test consists of four sections and total time allotted is 90 minutes.It includes:</p>
    
     <ul style="font-size:20px">
      <li>Quantitative Aptitude</li>
      <li>Programming Language Efficiency</li>
      <li>Coding Test and</li>
      <li>E-mail Writing</li>
     </ul>
     </div>
     <div class="col-md-6">
      
      <img src="CodeTantra_images/apptitude.png" alt="" class="img-fluid"  id='recruitingimages'>
     </div>
     
</div>

<div class="row mt-2">
<div class="col-md-6"><br><br><br><br>
    <img src="CodeTantra_images/GROUP.jpEg" alt="" class='img-fluid'  id='recruitingimages'>
    </div>
  <div class="col-md-6">
    <br>
  <h3 align="center" id='headings'>2.Group Disscussion</h3>
  <p class="para">A group discussion in an interview is a hiring technique employer uses to evaluate a group of participants on a subject. Companies use GDs to test candidates' communication, leadership and knowledge of given topics. Employers conduct GDs to hire several people with similar academic backgrounds and apply for similar roles. Candidates in the GD have a topic to prepare and present their facts and opinions. The discussion of the group helps an employer gauge their skills.</p><br>
  <p class='para'>Awareness of Topics Relating to Your Background Is Crucial. ...
Take the Lead. ...
There Is No Place for Aggression in Group Discussions. ...
Communicate Effectively. ...
Listen Carefully, Do Not Just Hear. ...
Work On Your Body Language. ...
Avoid Deviating From the Topic. ...
Be the First to Summarize the Discussion.</p>
  
</div>
</div>





<div class="row mt-2">
  <div class="col-md-6">
    <br>
  <h3 align="center" id='headings'>3(a)Technical Interview</h3>
  <p class="para">This round is based on your resume, branch of specialization, favorite subjects, etc. Be prepared to answer basic questions relating to each of these topics. Don’t be surprised if you are asked to write code. Also be ready to answer puzzle questions.</p><br>
  <p class='para'>In certain cases, the interviewer may also try and confuse/mislead you into giving the wrong answer so watch out for such trick questions.</p>
</div><div class="col-md-6">
    <img src="CodeTantra_images/interview.png" alt="" class='img-fluid'  id='recruitingimages'>
  </div>
</div>




<div class="row">
<div class="col-md-6"><br><br><br>
  <img src="CodeTantra_images/hr_interview.png" alt="" class="img-fluid" id='recruitingimages'>
  </div>
  <div class="col-md-6">
    <br>
  <h3 align="center" id='headings'>3(b)HR Interview</h3>
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
        <img class="card-img-top img-fluid h-25 w-100" src="CodeTantra_images/p.jpeg" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title">Positive</h4>
          <p class="card-text">
            <?php
$pythonPath = "C:\\Users\\91630\\AppData\\Local\\Programs\\Python\\Python311\\pythonw.exe"; //python interpreter
$PositiveScript = 'C:\xampp\new\htdocs\miniproject\khasim\python\codetantra_pos.py'; //python file path
exec($pythonPath.' '.$PositiveScript, $PositiveOutput); // Corrected exec() command
// echo $mindtreePositiveOutput;
$s="-->";
$k=0;
foreach($PositiveOutput as $line){
  if($k<20){
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
        <img class="card-img-top img-fluid" src="CodeTantra_images/n.jpeg" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title">Negative</h4>
          <p class="card-text">
          <?php
    $pythonPath = "C:\\Users\\91630\\AppData\\Local\\Programs\\Python\\Python311\\pythonw.exe"; //python interpreter
    $NegtiveScript = 'C:\xampp\new\htdocs\miniproject\khasim\python\codetantra_neg.py'; //python file path
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
        <img class="card-img-top img-fluid" src="CodeTantra_images/nu.jpeg" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title">Netural</h4>
          <p class="card-text"><?php
    $pythonPath = "C:\\Users\\91630\\AppData\\Local\\Programs\\Python\\Python311\\pythonw.exe"; //python interpreter
    $NeturalScript = 'C:\xampp\new\htdocs\miniproject\khasim\python\codetantra_netural.py'; //python file path
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