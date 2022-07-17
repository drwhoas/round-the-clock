<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <meta name="description" content="Doctors,hospital management,patient,medical help">
  <meta name="keywords" content="Hospital ,Doctors,Patients">
  <link rel="stylesheet" href="styleindex.css">
  <title>Round the Clock | Hospital Management System </title>
  <link rel="shortcut icon" type="image/png" href="Images/favicon.png">
</head>
<body>
  <div class="container">
    <header>
      <div id="branding">
        <img src="Images/logo.png" alt="This is the logo">
      </div>
      <nav class="navigation">
        <ul id="id-1">
          <li><a href="#" >Home</a></li>
          <li><a href="#about-us">About Us</a></li>
          <li><a href="#contact">Contact Us</a></li>
          <li><a href="News.html">News</a></li>
        </ul>
      </nav>
    </header>
    <section>
      <div id="showcase">
        <h2>Round The Clock</h2>
        <div class="item-1">
          <p>An easily accesible healthcare management system</p>
        </div>
        <div class="item-2">
          <p>Go digital and access your data anytime,anywhere</p>
        </div>
        <div class="item-3">
          <p>Secure and User friendly with an interactive UI</p>
        </div>
      </div>
    </section>
    <section id="boxes">
      <div class="box">
          <a href="Admin_Module/login_header.php"><img src="Images/admin.png" alt="Admin"></a>
        <h3>Admin Login</h3>
      </div>
      <div class="box">
        <a href="Doctor/login_header.php"><img src="Images/doctor.png" alt="Doctor"></a>
        <h3>Doctor Login</h3>
      </div>
      <div class="box">
          <a href="Patient/login_header.php"><img src="Images/patient.png" alt="Patient"></a>
        <h3>Patient Login</h3>
      </div>
    </section>
    <section id="about">
      <div id="box-1">
        <h2 id="about-us">About Us</h2>
        <p>We strongly believe in easy access to medical support   for each and everyone. With this resolution in mind, we created 'Round The Clock' , a  platform for care givers and the general public for easy access to medical help,
          anytime, anywhere. It allows care givers to manage their patients and doctors.This allows them to improve their reach and proper organization leading to smooth and efficient everyday functioning. </p>
        </div>
        <div id= "box-2">
          <h3>Our Vision</h3>
          <img src="Images/vision.png" alt="vision">
          <p>Our Vision is to be a mothern healthcare platform which provides for a user friendly , easily accesible sytem to manage one's medical resources.</p>
        </div>
        <div id ="box-3">
          <h3>Our Commitment</h3>
          <img src="Images/commitment.png" alt="commitment">
          <p>We largely value the privacy and happiness of our customers. It is the root of why we do what we do.</p>
        </div>
      </section>
      <div class="clr"></div>
      <section class="testimonials">

        <div class="cont">
          <input type="radio" name="nav" id="first" checked/>
          <input type="radio" name="nav" id="second" />
          <input type="radio" name="nav" id="third" />

          <label for="first" class="first"></label>
          <label for="second"  class="second"></label>
          <label for="third" class="third"></label>

          <div class="one slide">
            <blockquote>
              <span class="leftqoute quotes">&ldquo;</span>This simple, user friendly software has enhanced the efficiency of the staff and benefitted the patients a lot. I strongly recommend using Round The Clock.<span class="rightqoute quotes">&bdquo; </span>
            </blockquote>
            <img src="Images/test1.jpg"  width= "160" height="245">
            <h2>Dr. Harshita Khapra</h2>
          </div>

          <div class="two slide">
            <blockquote>
              <span class="leftqoute quotes">&ldquo;</span>As somebody seeking medical help, Round The Clock helps you out with its user friendly interface and good support team. We are really impressed.<span class="rightqoute quotes">&bdquo; </span>
            </blockquote>
            <img src="Images/test2.jpg" width="180" height="248" >
            <h2>Mr. John Doe</h2>
          </div>

          <div class="three slide">
            <blockquote>
              <span class="quotes leftqoute">&ldquo;</span>It is simple and easy to use,on top of that it has a great support team. I strongly recommend this to anybody who is in this field.<span class="rightqoute quotes">&bdquo; </span>
            </blockquote>
            <img src="Images/test3.jpg" width="180" height="248" />
            <h2>Dr. Stevie Stevenson</h2>
          </div>
        </div>
      </section>
      <footer>
        <div class="container1">
          <div class="footer-cols">
            <ul class="about-footer">
              <li>
                <a href="#about-us">About Us</a>
              </li>
              <li>
                <a href="#contact-us">Contact Us</a>
              </li>
              <li>
                <a href="News.html">News</a>
              </li>
            </ul>

            <ul class="about-contact" id="contact">
              <li><b>Support</b>: 9253647821</li>
              <li><b>Email</b>: contact@RoundTheClock.net</li>
              <li><b>Email</b>: support@RoundTheClock.net</li>
            </ul>

            <div id="newsletter">
              <p id="heading">Newsletter<p>
              <form id="form-1">
                <input type="email"  name="email" placeholder="Enter Email" required/>
                <div class= "wrapper">
                  <button type="button" id="modalBtn" class="button1"><p>Subscribe</p></button>
                </div>
                <div id="simpleModal" class="modal">
                  <div class="modal-content">
                    <span class="closeBtn">&times;</span>
                    <p>Subscribed!</p>
                  </div>
                </div>
              </form>
            </div>
            <ul class="images">
              <li><img src="Images/facebook.png" alt="facebook"><p>Facebook</p></li>
              <li><img src="Images/instagram.png" alt="instagram"><p>Instagram</p></li>
              <li>  <img src="Images/linkedin.png" alt="linkedin"><p>Linkedin</p></li>
            </ul>
          </div>
          <div class="top">
          <a href="#branding">Back To Top <img src="Images/up-arrow.png" alt="arrow"></a>
          </div>
        </div>
        <div class="footer-bottom text-center">
          Copyright &copy 2021 Round The Clock
        </div>
      </footer>

    </div>

     <script type="text/javascript">

        var modal= document.getElementById('simpleModal');
        var modalBtn= document.getElementById('modalBtn');
        var closeBtn= document.getElementsByClassName('closeBtn')[0];
        modalBtn.addEventListener('click',openModal);
        closeBtn.addEventListener('click',closeModal);
        window.addEventListener('click',outsideClick);
        function openModal(){
           modal.style.display='block';
        }
        function closeModal(){
           modal.style.display='none';
        }
       function outsideClick(e){
          if(e.target==modal)
          modal.style.display='none';
         }


    </script>
</body>
</html>
