<?php
 include 'component/db.php';
 session_start();
 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="./css/home.css" />
    <title>Home</title>
  </head>
  <body>
    <section class="heros">
      <div class="hero container">
        <nav class="nav">
          <!-- <a class="heading" href="/">Portfolio</a> -->
          <ul>
            <li><a class="active" href="home.php">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <!-- <li><a href="template.php">Templates</a></li> -->
            
            <!-- <li><a href="logout.php">Logout</a></li> -->
            
          <?php
              if($_SESSION['iportfolio']){?>
               <li><a href="index.php">Create</a></li>
               <li><a href="view.php">View</a></li>
               <li><a href="logout.php">Logout</a></li>
           <?php   }else{?>
                <li><a href="login.php">Login</a></li>
            <li><a href="register.php">Register</a></li>

           <?php } ?>
            
          </ul>
        </nav>
        <div class="div">Welcome <br />to portfolio Maker</div>
        <div class="background"></div>
      </div>
    </section>

    <section class="templates">
      <h1>How to make a portfolio</h1>
      
      <div class="template">
        <div class="image">
          <!-- <img src="/images/template1.png" alt="" /> -->
          <img src="./images/template2.png" alt="" />
          <!-- <img src="/images/template3.png" alt="" /> -->
        </div>
        <div class="process">
          <h2>Process</h2>
          <ul>
           
            <li>First step is registration. </li>
            <li>
              Next you have to create by filling your details in create section above.
            </li>
            <li>
              Next after submitting your details, you can check your details in view section.
            </li>
            <li>
              You can visit this site to check your portfolio everytime you login.
            </li>
            <li>This is a free site for portfolio making.</li>
          </ul>
        </div>
      </div>
    </section>

    <footer class="footer">
      <div id="about" class="containers">
        <div class="left-container">
          <h2>About Us</h2>
          <ul>
            <li>
              <a href=""><i class="fab fa-instagram"></i></a> Instagram
            </li>
            <li>
              <a href=""><i class="fab fa-twitter"></i></a> Twitter
            </li>
            <li>
              <a href=""><i class="fab fa-facebook"></i></a> Facebook
            </li>
          </ul>
        </div>
        <div id="contact" class="right-container">
          <h2>Contact</h2>
          <ul>
            <li>
              <h3><i class="fas fa-envelope-open-text"></i>        Email:</h3>
              <ul>
                <li><p>gl.sai.mansi8@gmail.com</p></li>
                <li><p>anshikaupadhyay@gmail.com</p></li>
              </ul>
            </li>
            <li>
              <h3><i class="fas fa-phone"></i>        Phone:</h3>
              <ul>
                <li><p>6302626360</p></li>
                <li><p>9511141064</p></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <div class="copy">&copy Portfolio Maker 2021</div>
    </footer>
  </body>
</html>
