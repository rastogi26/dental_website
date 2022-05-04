<!-- mysql -->
<?php

$conn= mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if (isset($_POST['submit'])) {
     $name =mysqli_real_escape_string($conn,$_POST['name']);
     $email =mysqli_real_escape_string($conn, $_POST['email']);
     $number =$_POST['number'];
     $date =$_POST['date'];

     $insert =mysqli_query($conn,"INSERT INTO `contact_form`(name,email,number,date) 
     VALUES('$name','$email','$number','$date')") or die('query failed');
     mysqli_close($conn);

     if ($insert) {
          $message[] = 'appointment made succesfully';

   
     }
     else{$message[]='appointment failed';}

     mysqli_close($conn);
  
}


?> 

<!-- mysql -->





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dental Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
     <style><?php include 'style.css'; ?></style>
    
</head>
<body>
  <!-- header -->
  <header class="header fixed-top">
      <div class="container">
          <div class="row align-items-center justify-content-between">
              <a href="#home" class="logo">dental<span>Clinic.</span></a>
                
              <nav class="nav">
                  <a href="#home">home</a>
                  <a href="#about">about</a>
                  <a href="#services">services</a>
                  <a href="#reviews">reviews</a>
                  <a href="#contact">contact</a>
              </nav>

              <a href="#contact" class="link-btn">make appointment</a>
              <div id="menu-btn" class="fas fa-bars"></div>

          </div>
      </div>


  </header>
  <!-- header -->
<!-- home section -->

<section  class="home" id="home">
    <div class="container">
        <div class="row min-vh-100 align-items-center">
              <div class="content text-center text-md-left">
                  <h3>Smile, it lets your teeth breathe</h3>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium dicta vero repellat, in expedita optio.</p>
                  <a href="#contact" class="link-btn">make appointment</a>
                </div>
        </div>
    </div>
</section>
<!-- home section -->


<!-- about  section -->

<section class="about" id="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 image">
                <img src="images\about.jpg" class="w-100 mb-5 mb-mb-0" alt="dentist image">

            </div>
            <div class="col-md-6 content">
                      <span>about us</span>
                      <h3>Bringing you the hightest quality dental care</h3>
                      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione deserunt odio quasi a! Praesentium, enim! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, quis.</p>
                      <a href="#contact " class="link-btn">make appointment</a>

            </div>
        </div>
    </div>
</section>

<!-- about  section -->

<!-- service section -->
       <section class="services" id="services">
           <h1 class="heading">our services</h1>
           <div class="box-container container">

           <div class="box">
               <img src="images\tooth3.png" alt="tooth-image">
               <h3>Alignment specialist</h3>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ratione?</p>
           </div>
           <div class="box">
               <img src="images\cosmetic.png" alt="tooth-image">
               <h3>Cosmetic dentistry</h3>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ratione?</p>
           </div>
           <div class="box">
               <img src="images\oral2.png" alt="tooth-image">
               <h3>oral hygiene experts</h3>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ratione?</p>
           </div>
           <div class="box">
               <img src="images\root.png" alt="tooth-image">
               <h3>root canal spectialist</h3>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ratione?</p>
           </div>
           <div class="box">
               <img src="images\live.png" alt="tooth-image">
               <h3>live dental advisory</h3>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ratione?</p>
           </div>
           <div class="box">
               <img src="images\cavity.png" alt="tooth-image">
               <h3>cavity inspection</h3>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ratione?</p>
           </div>
           </div>
       </section>
<!-- service section -->

<!-- process section -->
<section class="process">
<h1 class="heading">Work Process</h1>
        <div class="box-container container">

           <div class="box">
               <img src="images\cos_special2.jpg" alt="tooth-image">
               <h3>Cosmetric Dentistry</h3>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ratione?</p>
           </div>
           <div class="box">
               <img src="images\p3.webp" alt="tooth-image">
               <h3>Pediatric Dentistry</h3>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ratione?</p>
           </div>
           <div class="box">
               <img src="images\p4.webp" alt="tooth-image">
               <h3>Dental Implants</h3>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ratione?</p>
           </div>



        </div>
</section>
<!-- process section -->


<!-- review section -->

<section class="reviews" id="reviews">
<h1 class="heading">Clients Reviews</h1>
        <div class="box-container container">

           <div class="box">
               <img src="images\client3.jpeg" alt="tooth-image">
               
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ratione?Lorem ipsum dolor sit, amet consectetur adipisicing elit. At, iste.</p>
               <div class="stars">
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star-half-alt"></i>
               </div>
               <h3>Andrew</h3>
               <span>satisfied client</span>
           </div>
           <div class="box">
               <img src="images\client4.webp" alt="tooth-image">
               
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ratione?Lorem ipsum dolor sit, amet consectetur adipisicing elit. At, iste.</p>
               <div class="stars">
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star-half-alt"></i>
               </div>
               <h3>Jennefier</h3>
               <span>satisfied client</span>
           </div>           <div class="box">
               <img src="images\client1.jpg" alt="tooth-image">
               
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ratione?Lorem ipsum dolor sit, amet consectetur adipisicing elit. At, iste.</p>
               <div class="stars">
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star-half-alt"></i>
               </div>
               <h3>Micheal James</h3>
               <span>satisfied client</span>
           </div>
      </div>
</section>

<!-- review section -->

<!-- contact section -->

<section class="contact" id="contact">

<h1 class="heading">make appointment</h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
     
    <?php
            if (isset($message)) {
                foreach ($message as $message) {
                    echo '<p class="message">'.$message.'</p>';
                }
              
            }
    
    
    ?>
    
    <span>your name:</span>
    <input type="text" name="name" placeholder="enter your name" class="box" required>
    <span>your email:</span>
    <input type="email" name="email" placeholder="enter your email" class="box" required>
    <span>your number:</span>
    <input type="number" name="number" placeholder="enter your number" class="box" required>
    <span>your appointment date:</span>
    <input type="datetime-local" name="date" class="box" required>
    <div class="specialbtn">
    <input type="submit" value="make appointment" name="submit" class="link-btn" >
        </div>
</form>
</section>

<!-- contact section -->

<section class="footer">
 <div class="box-container container">
     <div class="box">
         <i class="fas fa-phone"></i>
         <h3>phone number</h3>
          <p>987-654-3210</p>
          <p>0171-26317822</p>
     </div>
     <div class="box">
         <i class="fas fa-map-marker-alt"></i>
         <h3>our address</h3>
          <p>solan ,india</p>
         
     </div>
     <div class="box">
         <i class="fas fa-clock"></i>
         <h3>working hours</h3>
          <p>10:00am to 5:00pm</p>
          
     </div>
     <div class="box">
         <i class="fas fa-envelope"></i>
         <h3>email address</h3>
          <p>abcd@gmail.com</p>
          <p>201183@gmail.com</p>
     </div>
 </div>

</section>

<!-- footer section -->




    
    <script><?php include 'script.js';?></script>
   
</body>
</html>