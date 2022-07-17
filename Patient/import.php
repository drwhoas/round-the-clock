<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,minimum-scale=1">
    <title>Sidebar Menu with sub-menu </title>
    <link rel="stylesheet" href="import.css?<?php echo rand();?>">
    <link rel="stylesheet" href="logout.css?<?php echo rand();?>">
    <link href="https:/fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https:/code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https:/kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
   <div class="line">
      <div class="logo">
            <img src="Images/logo.png">
      </div>

            <div class="header">
                <a href="../index.php">About Us</a>
                <a href="../index.php">Contact Us</a>
                <a href="../News.html">News</a>
            </div>
      </div>

      <nav class="sidebar">
      <img id="imag4" src="Images/user.png" alt="">
      <ul>
        <li class="active"><a href="dashboard.php">Dashboard</a></li>
        <li><a href="AForm.php"><span style="padding-right: 220px" class="material-icons">book</span>Book Appointment</a></li>
        <li><a href="index.php"> <span style="padding-right: 220px" class="material-icons">person_search</span> Search Doctors</a></li>
        <li><a href="Update.php"> <span style="padding-right: 220px" class="material-icons">update</span> Update Profile</a></li>
        <li><a href="MedicalHistory.php"> <span style="padding-right: 220px" class="material-icons">person_search</span>Medical History</a></li>
        <li><a href="Feedback.php"><span style="padding-right: 220px" class="material-icons">feedback</span>Feedback</a></li>
        <li><a id="modal-btn" class="button" ><span style="padding-right: 220px" class="material-icons">person</span>Logout</a></li>
      </ul>
      <div id="my-modal" class="modal">
        <div class="modal-content">
          <div class="modal-header">
            <span class="close">&times;</span>
            <h4>Logout</h4>
          </div>
          <div class="modal-body">
            Are you sure you want to logout?
          </div>
          <div class="modal-footer">
            <a href="../index.php"><button class="button4" type="button">Yes</button></a>
            <a href="dashboard.php"><button class="button5" type="button">No</button></a>
          </div>
        </div>
      </div>
    </nav>

      <script>
      $('.feat-btn').click(function(){
        $('nav ul .feat-show').toggleClass("show");
        $('nav ul .first').toggleClass("rotate");
      });
      $('.serv-btn').click(function(){
        $('nav ul .serv-show').toggleClass("show1");
        $('nav ul .second').toggleClass("rotate");
      });
      $('nav ul li').click(function(){
        $(this).addClass("active").siblings().removeClass("active");
      });
      const modal = document.querySelector('#my-modal');
      const modalBtn = document.querySelector('#modal-btn');
      const closeBtn = document.querySelector('.close');

      // Events
      modalBtn.addEventListener('click', openModal);
      closeBtn.addEventListener('click', closeModal);
      window.addEventListener('click', outsideClick);

      // Open
      function openModal() {
        modal.style.display = 'block';
      }

      // Close
      function closeModal() {
        modal.style.display = 'none';
      }

      // Close If Outside Click
      function outsideClick(e) {
        if (e.target == modal) {
          modal.style.display = 'none';
        }
      }
      </script>


</body>
</html>
