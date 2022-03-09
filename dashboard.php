<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");

// ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="./about.html">
    <link rel="stylesheet" href="style.css" />
</head>


<nav class="navbar">
    

    

       <div class="menu">
         <li><a href="/">Home</a></li>
         <li><a href="about.html">About</a></li>
         <li class="services"><a href="/">contact</a>         </li>
         <hr>

         
         <li><a href="send.html">send</a></li>
         
         <li><a href="logout.php">track</a></li>
         <hr>

        <li><a href="logout.php">Logout</a></li>

       </div>
     </ul>
   </nav>

    

<br>


   

 <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="./slide3-1.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="./slide3-3.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="https://cdn-bgkbm.nitrocdn.com/nOQxqGbCrxFYIcJpIvBcpcJDmxIbcngR/assets/static/optimized/rev-d40e142/wp-content/uploads/2020/03/Door-to-door-ship-rail-plane-1030x424.jpg" style="width:100%">
  <div class="text">online payment or mpesa Three</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>



 <div class="remainder">
       <h1> send percel 📦 </h1>       
       <h1>online payment or mpesa</h1>
       <h1>track item</h1>
       <h1>goggle map</h1>
       <h1>admin</h1>
       <h1>received item 👍</h1>


       <!-- slide show  -->
    


       
</div>

      <script src="script.js"></script>

</body>
</html>