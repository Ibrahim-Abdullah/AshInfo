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

    </head>
<body>
    <!--NAVIGATION BAR-->
    <div class="row">
      <?php
        include 'navbar.php';
      ?>

    <div class="row container content">
      <h4>Career Services</h4>
      <p>
        Since our inception, Ashesi has focused on training students to move Africa forward. Driven by the opportunities that exist within the continent’s challenges, Ashesi students continue to make a difference in the world through the impact they make in different organisations. 

        Recruiting students from Ashesi puts your organisation at the forefront of Africa’s development. 
      </p>

      <h5>Recruits who hit the ground running</h5>
      <p>
        Through an intentional development curriculum, the Career Services Office works with staff and faculty to prepare students to succeed. Our community allows students to study in an environment that mirrors today’s work world. Students are prepared to thrive and lead at any level, in any industry; that’s why from Accra to London, Ashesi’s graduates come highly recommended.
      </p>

      <h5>An entrepreneurial spirit</h5>
      <p>
        One of every twenty-five graduates currently has started their own businesses. Right from their first-year on campus, students take required courses in Design and Entrepreneurship, with funding partnerships for social innovation projects. 
      </p>
      <h5>A world-class standard</h5>
      <p>
        Since our first graduating class, all Ashesi’s graduates have received job placement, started their own business or gone on to graduate schools. Our students’ success in some of the world’s best graduate school programmes has been a benchmark for Ashesi’s education.
      </p>
      
    </div>

    <!--FOOTER-->
    <div class="black row">
      <?php
        include 'footer.php';
      ?>
    </div>

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