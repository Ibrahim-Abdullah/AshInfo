<!DOCTYPE html>
<html>
    <head>

      <title>Ashesi University College</title>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" type="text/css" href="css/style.css">

    </head>
<body>
    <!--NAVIGATION BAR-->
    <header>
      <?php
        include 'navbar.php';
      ?>
    </header>

    <main>
    <div class="row container content">
      <h4>Admission</h4>
      <p>
        Each year we receive hundreds of applications from all across Africa from which some 20% of students are admitted to join our freshman class. Successful applicants demonstrate a commitment to growth and learning, tackle tough challenges in and out of the classroom, and have a strong desire to contribute to Ashesi's global community. If you have not done so already, visiting our campus is a great way to learn about Ashesi first-hand. The Admissions Office is open all-year, and will be happy to host you for a visit. To schedule a visit, or learn more about Ashesi's admissions process, contact us at <span class="red-text">admissions@ashesi.edu.gh or call us on: +233 302 610 330, +233 501 568 499 or +233 204 374 374</span>
      </p>
      <p>
        <ol>
          <li>Application Forms & Deadlines</li>
          <li>Admissions Requirements</li>
          <li>Fees and Scholarships</li>
          <li>International Students</li>
          <li>Math Placement at Ashesi</li>
          <li>Student and Alumni Outcomes</li>
          <li>Visit Campus</li>

        </ol>
      </p>
    </div>
  </main>
    <!--FOOTER-->
      <?php
        include 'footer.php';
      ?>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript">
        $(document).ready(function(){
          $(".button-collapse").sideNav();
          $('.carousel.carousel-slider').carousel({fullWidth: true});
        });
      </script>

</body>
</html>