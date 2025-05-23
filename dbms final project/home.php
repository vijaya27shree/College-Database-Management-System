<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
       
<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}
h2 {
    color: green;
}

.container1 {
  position: relative;
  margin: 0 auto;
   /* Center it */
}

.container1 img {vertical-align: middle;}

.container1 .content1 {
    position: absolute;
    font-size: 18px;
  bottom: 0;
  display:flex;
  height: 150px;
  flex-direction:column;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  width: 100%;
  padding: 10px;
}


#container {
  margin-left: 100px;
  width: 200px;
  right: 20px;
}
.three-bars,
.red,
.orange,
.blue {
  color: white;
  height: 70px;
  margin: 10px;
  padding: 5px;
  float: right;
  font-size: 20px;
  text-align: right;
  position: relative;
}
.red {
  width: 100px;
  background-color: #da3421;
}
.orange {
    width: 150px;
  background-color: #ec9a4c;
}
.blue {
  width: 200px;
  background-color: #5ab7c4;
}
a > div:before {
  content: '';
  position: absolute;
  left: 0;
  top: 0;
  width: 0;
  height: 10;
  border-style: solid;
  border-width: 0 0 70px 70px;
  border-color: transparent transparent black;
  transform: translateX(-100%);
}
.red:before {
  border-color: transparent transparent #da3421;
}
.orange:before {
  border-color: transparent transparent #ec9a4c;
}
.blue:before {
  border-color: transparent transparent #5ab7c4;
}


.social-icon {
            font-size: 20px; /* Adjust the size as needed */
            margin: 5px; /* Add margin between icons */
            color: #000; /* Set the color to black */
        }

        .social-icon:hover {
            color: #555; /* Darker color on hover */
        }

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators 
.dot {
  cursor: pointer;
  height: 7px;
  width: 7px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}

body {
  font-family: "Lato", sans-serif;
}

.home {
            display: flex;
            height: 65px;
            
        }
        .search-icon {
            font-size: 24px; /* Adjust the size as needed */
            color: #ffffff; }

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  right: 0;
  background-color: #060607;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #ffffff;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #944c1b;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

.marquee-container {
            height: 300px;
            overflow: hidden;
            position: relative;
        }

        .marquee-content {
            animation: scroll-up 20s linear infinite;
            position: absolute;
            top: 100%;
        }

        @keyframes scroll-up {
            0% {
                top: 100%;
            }
            100% {
                top: -100%;
            }
        }
        a{
              text-decoration: none;
            }
        aside{
    width:30%;
    padding-left:25px;
    padding-right:25px;
    margin-left:10%;
    box-shadow: 5px 5px 5px 5px rgb(206, 119, 6);
    float:left;
    border-radius:15px;
    margin-bottom:50px;
}

.content1{
background: rgba(0,0,0,0);
color: #f1f1f1;
padding: 20px;
font-size: xx-large;
position: absolute; top :0;
display: flex;
flex-direction: column; 
justify-content: center;
align-items: center; 
width: 100%;
height: 100;}

.content{
background: rgba(0,0,0,0);
color: #f1f1f1;
padding: 20px;
font-size:35px;
position: absolute; bottom :0; top:0;
display: flex;
flex-direction: column; 
justify-content: center;
align-items: center; 
width: 100%;
height: 100;}

p,dt,li{font-family: 'Segoe UI', Tahoma, 'Geneva', Verdana, sans-serif;}
input{height:25px; width:200px; background-color: #c7d5fc;}

</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="department.html">Departments</a>
  <a href="result.php">Academics</a>
  <a href="dbmsread.html">About us</a>
  <a href="#">Admission</a>
  <a href="#">research</a>
  <a href="#">Innovation</a>
  <a href="#">Facilities</a>
  <a href="index.php">Examination</a>
  <a href="#">MIT Alumni</a>
  <a href="#">Placement</a>
  <a href="#">Research Centre</a>
  <a href="#">Gallery</a>
  <a href="payment.html">Contact</a>
</div>

<!--<div id="main">
  <h2>Sidenav Push Example</h2>
  <p>Click on the element below to open the side navigation menu, and push this content to the right.</p>
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
</div>-->

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>

<div style="background-color: #8f0707; height: 150px">
    <table width="100%">
        <tr><td style="width: 50%;"><img src="logo1.png" ></td>
        <td style="width: 10%;"></td>    
        <td style="width: 30%;"><input style="width: 300px; border-radius: 10px; background-color: #f1f1f1;" type="text" placeholder="Search...">&nbsp;&nbsp;&nbsp;<i class="fas fa-search search-icon"></i>
        
    </td></tr></table>
    <center>
    <table width="100%" style="height: 50;">
    <tr>
    <td style="width: 4%"></td>
    <td align="center"   class="home" style="width: 4%;"><p style=" font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
    font-size: large; font-size:large;"><a href="home.html" style="color: antiquewhite;">
    <i class="fas fa-home" style="font-size: 20px;;cursor:pointer; color: antiquewhite">&nbsp;Home</i></a></td>
    <td align="center"  style="width: 10%;border-left: 1px solid antiquewhite"><p style=" font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
    font-size: large; font-size:large;"><a href="dbmsread.html" style="color: antiquewhite;">About Us</a></td>
    <td align="center" style="width: 10%;border-left: 1px solid antiquewhite"><p style=" font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
    font-size: large; font-size:large;"><a href="department.html" style="color: antiquewhite;">Department</a></td>
    <td align="center" style="width: 10%;border-left: 1px solid antiquewhite"><p style=" font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
        font-size: large; font-size:large;"><a href="scholarship.php" style="color: antiquewhite;">Scholarship</a></td>
    <td align="center" style="width: 10%;border-left: 1px solid antiquewhite"><p style=" font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
    font-size: large; font-size:large;"><a href="index.php" style="color: antiquewhite;">Exam</a></td>
    <td align="center"  style="width: 8%;border-left: 1px solid antiquewhite"><p style=" font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
    font-size: large; font-size:large;"><a href="result.php" style="color: antiquewhite;">Result</a></td>
    <td align="center"  style="width: 10%;border-left: 1px solid antiquewhite"><p style=" font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
     font-size: large; font-size:large;"><a href="club.php" style="color: antiquewhite;">Club</a></td>
     <td align="center"  style="width: 10%;border-left: 1px solid antiquewhite"><p style=" font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
     font-size: large; font-size:large;"><a href="payment.html" style="color: antiquewhite;">Payment</a></td>
    <td align="center"  style="width: 18%;border-left: 1px solid antiquewhite"> <span style="font-size:20px;cursor:pointer; color: antiquewhite;" onclick="openNav()">QUICK LINKS &#9776; </span></td>
    
    </tr>
    </table>
</center>
    </div>
    <div class="container1">
  <img src="lo.jpg" width="1183" height="450" style="width:100%;">
  <div class="content1">
    <h1>Madras Institute of Technology</h1>
    <p>The Madras Institute of Technology has developed into an 
        important centre of engineering education and earned an excellent reputation across the globe.</p>
  </div>
</div>



    <table style="width:100%"></table>
<div style="background-color:green"><marquee><a style="color:white"> Applications Open now for January 2024 
Batch | Applications Close: Jan 14, 2024 | Exam: Feb 25, 2024</a>
</marquee></div>
    <div style="background-color: #df9292">
        


    <table style="width:100%">
        
        
        <tr>
            <td style="width: 15%"></td>
            <td style="width:35%">
                <div class="slideshow-container">

                    <div class="mySlides fade">
                      <div class="numbertext">1 / 4</div>
                      <img src="madras-institute-of-technology-chennai-campus.jpg" height="350" width="250" style="width:100%">
                      <!--<div class="text">MIT CAMPU</div>-->
                    </div>
                    
                    <div class="mySlides fade">
                      <div class="numbertext">2 / 4</div>
                      <img src="mit_admblk.jpg" height="350" width="250" style="width:100%">
                      <!--<div class="text">Caption Two</div>-->
                    </div>
                    
                    <div class="mySlides fade">
                      <div class="numbertext">3 / 4</div>
                      <img src="02.jpg" height="350" width="250" style="width:100%">
                      <!--<div class="text">Caption Three</div>-->
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">4 / 4</div>
                        <img src="lib.jpg" height="350" width="250" style="width:100%">
                        <!--<div class="text">Caption Three</div>-->
                      </div>
                    
                    <a class="prev" onclick="plusSlides(-1)">❮</a>
                    <a class="next" onclick="plusSlides(1)">❯</a>
                    
                    </div>
                    <br>
                    
                    <div style="text-align:center">
                      <span class="dot" onclick="currentSlide(1)"></span> 
                      <span class="dot" onclick="currentSlide(2)"></span> 
                      <span class="dot" onclick="currentSlide(3)"></span> 
                      <span class="dot" onclick="currentSlide(4)"></span> 
                    </div>
                    
                    <script>
                    let slideIndex = 1;
                    showSlides(slideIndex);
                    
                    function plusSlides(n) {
                      showSlides(slideIndex += n);
                    }
                    
                    function currentSlide(n) {
                      showSlides(slideIndex = n);
                    }
                    
                    function showSlides(n) {
                      let i;
                      let slides = document.getElementsByClassName("mySlides");
                      let dots = document.getElementsByClassName("dot");
                      if (n > slides.length) {slideIndex = 1}    
                      if (n < 1) {slideIndex = slides.length}
                      for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";  
                      }
                      for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" active", "");
                      }
                      slides[slideIndex-1].style.display = "block";  
                      dots[slideIndex-1].className += " active";
                    }
                    </script>
                    
            </td>
            <td style="width:3%"></td>
           <td style="width:35%"><div class="marquee-container">
            <div class="marquee-content"><ul>
                <li style="list-style-type: circle;">
                <p style="color:darkblue">International Conference on Recent Innovations
                     in Production Engineering (RIPE 2024) during 30th & 31st May 2024 at MIT Campus, Anna University</p></li>
                     <li style="list-style-type: circle;"><p style="color:darkblue">One Day hands on Training Programme On BASICS 
                    OF COMPUTER AND ITS USAGE FOR CLERICAL ASSISTANTS - GOVERNMENT OFFICE on 16-12-2023 at MIT Campus, Anna University</p></li>
                    <li style="list-style-type: circle;"><p style="color:darkblue">
                    Two days hands-on Training on "Development of IOT System using Raspberry Pi(DISR'23) during 17th and 18th November 2023 at MIT Campus, Anna University
                    </p></li>
                    <li style="list-style-type: circle;"><p style="color:darkblue">NAAN Mudhalvan TV Programme </p></li>
                        <li style="list-style-type: circle;"><p style="color:darkblue">
                        MIT- UG (Part Time Admission) 2023-24 – Schedule & Fee structure</p></li>
                        <li style="list-style-type: circle;"><p style="color:darkblue">Computer Lab Booking Form
                    </p>
                    <li style="list-style-type: circle;"><p style="color:darkblue">Condemnation ECE & CC - 2023-2024</p>
                        <li style="list-style-type: circle;"><p style="color:darkblue">6 Days Faculty Empowerment Programme - CY3151 - Engineering Chemistry</p></li>
                    </ul>
                    </div>
        </div></td> 
        <td style="width: 15%"></td>
        </tr>
    </table>
</div>
<div>
<h2><p style="color: green;">DEPARTMENTS OF MIT:</p></h2>
<table>
    <tr>
    <th><img src="download1.jpeg" style="border-radius: 50%; width:100px"></th>
    <th><img src="d2.jpeg" style="border-radius: 50%; width:100px"></th>
    <th><img src="download3.jpeg" style="border-radius: 50%; width:100px"></th>
    <th><img src="inst.jpeg" style="border-radius: 50%; width:100px"></th>
    <th><img src="download4.jpeg" style="border-radius: 50%; width:100px"></th>
    <th><img src="d5.jpeg" style="border-radius: 50%; width:100px"></th>
    <th><img src="d7.jpeg" style="border-radius: 50%; width:100px"></th>
    <th><img src="d8.jpeg" style="border-radius: 50%; width:100px"></th>
    <th><img src="d9.jpeg" style="border-radius: 50%; width:100px"></th>
</tr>
    <tr>
    <td style="text-align: center;">Aerospace Engineering</td>
    <td style="text-align: center;">Automobile    Engineering</td>
    <td style="text-align: center;">Electronics    Engineering</td>
    <td style="text-align: center;">Instrumentation   Engineering</td>
    <td style="text-align: center;">Computer      Technology</td>
    <td style="text-align: center;">Information     Technology	</td>
    <td style="text-align: center;">  Production    Technology</td>
    <td style="text-align: center;">Rubber&Plastics Technology</td>
    <td style="text-align: center;">AppliedScience and Humanites</td></tr>
</table></div>
<br><br>
<center>
<div id="container">
        <a class="page-scroll" href="#red ">
            <div class="red">
                <p>SOCIETY</p>
            </div>
        </a>
        <a class="page-scroll" href="#orange">
            <div class="orange">
                <p>EDUCATION</p>
            </div>
        </a>
        <a class="page-scroll" href="#blue">
            <div class="blue">
                <p>KNOWLEDGE</p>
            </div>              
        </a>
        </div>
                </center>
<br><br><br><br><br><br><br><br><br><br><br><br>
<h2><p style="color: green;">INNOVATIONS:</p></h2>
 <center><br><br>  
<table style="width: 78%;">
    <tr>
        <th style="width: 18%;">
            RESEARCH</th>
            <th style="width:2%"></th>
        <th style="width: 18%;">PLACEMENTS</th>
        <th style="width:2%"></th>
        <th style="width: 18%;">LIBRARY</th>
        <th style="width:2%"></th>
        <th style="width: 18%;">ACCREDITATION</th>
    </tr>
    
    </tr>
    
    <tr>
        <td><img src="research.jpeg" height="170" width="220"></td>
        <td style="width:2%"></td>
        <td><img src="pla.jpg" height="170" width="220"></td>
        <td style="width:2%"></td>
        <td><img src="lib.jpg" height="170" width="220"></td>
        <td style="width:2%"></td>
        <td><img src="acc.jpg" height="170" width="220"></td>
    </tr>
    <tr>
        <td> Students can engage in research through class projects, internships, 
            or faculty-led initiatives, and successful projects may lead to publications or presentations. </td>
        <td style="width:2%"></td>
        <td>Placement Office facilitating campus recruitment for multinational and national organizations.</td>
        <td style="width:2%"></td>
        <td>Our Library was established in the year 2001. It holds more than one lakh book volumes.</td>
        <td style="width:2%"></td>
        <td>We are more likely to be recognized and respected within academic and professional circles, enhancing the credibility and reputation of the institution and the degrees it confers.

        </td>
    </tr>
</table></center>

<table>
    <td style="width:54%">
        <p style="color: #717171;"><i>Last Updated: 12 January 2024</i></p>
        <p style="color: green"><b>MADRAS INSTITUTE OF TECHNOLOGY:</b></p>
        <p></p><p style="text-indent: 40px;">In 1949,Shri.C.Rajam, gave the newly independent India-Madras Institute of Technology, so that MIT could establish the strong technical base it needed to take its place in the world. <br>
        <p style="text-indent: 40px;">It was the rare genius and daring of its founder that made MIT offer courses like Aeronautical Engineering, Automobile Engineering, Electronics Engineering and Instrument Technology for the first time in our country. <br>
                </p><p style="text-indent: 40px;">Now it also provides technical education in other engineering fields such as Rubber and Plastic Technology & Production Technology. It was merged with Anna University in the year 1978. Sixty years hence, while it continues to be a pioneer in courses that it gave birth to, it is already renowned for producing the crème de la crème of the scientific community in more nascent courses such as Computer Science and Information Technology.<br>
                </p><p style="text-indent: 40px;">MIT has produced great scientist like Dr.A.P.J.Abdul Kalam, versatile genius like Sujatha and many more. The broad-based education, coupled with practice-oriented training in their speciality, has enabled the students of MIT to handle with skill and success a wide variety of technical problems.<br>
                <td style="width:4%"></td>
        <td style="width:42%"><p><b>FACILITIES:</b></p>
            <p><center><img src="faci.png"></center></p></td>
    </table>
<p></p>

<h2><p style="color: green;">AU-KBC RESEARCH CENTRE:</p></h2>
<table><tr>
<aside>
    <h4 style="color: darkblue;">Information Sciences Division:</h4>
    <img src="information-img-2.jpg" width="100%">
    <p>The division pursues research in the areas of Discourse and Conversational Analysis, Indian Language Computing and Knowledge Discovery. Also in the area of open and free software.</p>
    <p>The Computational Linguistics Research Group (CLRG) at AU-KBC Research Centre works on the scientific study of language from a computational perspective. We develop computational models of various linguistic phenomena, with the aim of building practical natural language processing systems.
    </p>
    <p>The primary focus is on Discourse analysis and Machine Translation. The group works at intra and inter sentential (Discourse) level. At the Discourse level we do cognitive analysis of discourse such as coherence analysis, anaphora and connective resolution etc. Language families interested are in Dravidian, Indo -European and Indo-Aryan.</p>
</aside>
<aside>
    <h4 style="color: darkblue;">Life sciences:</h4>
    <img src="information-img-1.jpg" width="100%" >
    <p>The primary focus of the life sciences group is fundamental biology with a focus on translational research in the domain. The group works on different aspects of biology including disease biology, agricultural biology, immunology, cardiovascular biology, neurobiology and bioinformatics. The projects executed here has an amalgamation of scientists from the centre with clinicians, industries and scientists from other walks of science. It is equipped with state-of-the-art facilities in the areas of biophysics, biochemistry, molecular biology and cell biology, the unit aims to conduct research on various facets of biology.</p>
    <p>The biology group extends its hand to scientists from both academia and industry for collaborations, consultancies and also offers training programs to students and researchers in various disciplines of biology.</p>
</aside>
</tr></table>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<h2 style="color: darkred;">CONTACT:</h2>

<div style="background-color: rgb(23, 21, 39);  height: 180px">
    <table style="width: 100%;">  
    <tr>
    <th width="25%" style="color:green; margin-left: auto; margin-right: auto;"><bold>Address:</bold></th>
    <th width="25%" style="color:green; margin-left: auto; margin-right: auto;"><bold>E-mail:</bold></th>
    <th width="35%" style="color:green; margin-left: auto; margin-right: auto;"><bold>Phone:</bold></th>
    <th width="25%" style="color:green; margin-left: auto; margin-right: auto;"><bold>Links:</bold></th>
    
</tr>
    <tr>
    <td style="text-align: center;color:azure"><p> MIT Road,</p><p>Radha Nagar,</p><p> Chennai,</p><p> Tamil Nadu-600044</p></td>
    <td style="text-align: center;color:azure"><a href="mailto:www.mitindia.edu" style="color:white">www.mitindia.edu</a></td>
    <td style="text-align: center;color:azure"><a href="tel:044 2251 6002" style="color:white">044-2251-6002</a>
    </td>

<td><a href="https://www.instagram.com/pda_mit/" style="color:white" target="_blank" class="social-icon">
        <i class="fab fa-instagram"></i>  pda_mit 
    </a><br><a href="https://in.linkedin.com/school/madras-institute-of-technology/" style="color:white" target="_blank" class="social-icon">
        <i class="fab fa-linkedin"></i>  MIT chennai
    </a><br> <a href="https://www.facebook.com/mitindia.edu/" style="color:white" target="_blank" class="social-icon">
        <i class="fab fa-facebook"></i>  MIT india
    </a><br><a href="https://twitter.com/MITchennai" style="color:white" target="_blank" class="social-icon">
        <i class="fab fa-twitter"></i>  MIT
    </a></td>
</tr>

</table>
    </div>

</body>
</html> 
