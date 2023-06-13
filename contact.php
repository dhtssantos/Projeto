<?php include('form_handler.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Work Template</title>
</head>

<body>
  <section class="sub-header">

    <nav>
      <a href="index.html"><img src="img/logo.png" alt=""></a>
      <div class="nav-links" id="navLinks">
        <i class="fa fa-times" onclick="hideMenu()"></i>
        <ul>
          <li><a href="">HOME</a></li>
          <li><a href="">ABOUT</a></li>
          <li><a href="">COURSE</a></li>
          <li><a href="">BLOG</a></li>
          <li><a href="">CONTACT</a></li>
        </ul>
      </div>
      <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>
    <h1>Contact Us</h1>
  </section>

  <!-----------------      Contact us content   -------------->
  <section class="location">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d510564.6498664422!2d36.56720029142611!3d-1.3031933719272915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1172d84d49a7%3A0xf7cf0254b297924c!2sNairobi!5e0!3m2!1sen!2ske!4v1618084906713!5m2!1sen!2ske"
      width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  </section>

  <section class="contact-us">
    <div class="row">
      <div class="contact-col">
        <div>
          <i class="fa fa-home"></i>
          <span>
            <h5>Xyz Road, Nairobi Kenya</h5>
            <p>Xyz Road, Nairobi Kenya</p>
          </span>
        </div>

        <div>
          <i class="fa fa-phone"></i>
          <span>
            <h5>+254 07000 0000 000</h5>
            <p>Monday to saturday, 10 Am to 6pm</p>
          </span>
        </div>

        <div>
          <i class="fa fa-envelope-o"></i>
          <span>
            <h5>info@easytutorialspro.com</h5>
            <p>Email us your query</p>
          </span>
        </div>
      </div>


      <div class="contact-col">
        <form id="contact" action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
          <h3>Quick Contact</h3>
          <h4>Contact us today, and get reply with in 24 hours!</h4>

            <input placeholder="Your name" type="text" tabindex="1" required autofocus>
            <span class="error"><?= $name_error ?></span>

            <input placeholder="Your Email Address" type="email" tabindex="2" required>
            <span class="error"><?= $email_error ?></span>

            <input placeholder="Your Phone Number" type="tel" tabindex="3" required>
             <span class="error"><?= $phone_error ?></span>

            <textarea placeholder="Type your Message Here...." tabindex="5" required></textarea>
             <span class="error"><?= $name_error ?></span>

            <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>

        </form>

      </div>

</section>
      <!-----------------
      <div class="contact-col">
        <form action="form handler.php" action="<?= $_SERVER['PHP_SELF']; ?>" method="post">

          <input type="text" name="name" placeholder="Enter Your Name" value="<?= $name ?>">
          <span class="error"><?= $name_error ?></span>
          <input type="email" name="email" placeholder="Enter email address" value="<?= $email ?>">
          <span class="error"><?= $email_error ?></span>
          <input type="text" name="phone" placeholder="Enter Your phone number" value="<?= $phone ?>">
          <span class="error"><?= $phone_error ?></span>
          <textarea rows="8" name="message" placeholder="message" required></textarea>
          <button type="submit" class="hero-btn red-btn"> Send Message</button>
        </form>
      </div>
    </div>
  </section>

-------------->


      <!-----------------      Section seven   -------------->

      <section class="footer">
        <h4>About Us</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
          sed do eiusmod tempor incididunt ut labore et dolore magna
          aliqua.<br> Ut enim ad minim veniam.eiusmod tempor incididunt ut labore et dolore magna
          aliqua. Ut enim ad minim veniam.</p>
        <div class="icons">
          <i class="fa fa-facebook"></i>
          <i class="fa fa-twitter"></i>
          <i class="fa fa-instagram"></i>
          <i class="fa fa-linkedin"></i>
          <p>Made by Alex </p>
        </div>
      </section>





      <script>
        var navLinks = document.getElementById("navLinks");

        function showMenu() {
          navLinks.style.right = "0";
        }

        function hideMenu() {
          navLinks.style.right = "-200px";
        }
      </script>
</body>

</html>
