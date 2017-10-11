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
      <h4>Academics</h4>
      <p>
        Ashesi’s core curriculum consists of courses that help students develop the ethics, innovativeness, critical thinking and communication skills necessary for a lifetime career of leadership. By teaching students to explore the connections between different information, separate the relevant from the irrelevant, question assumptions and analyse alternatives, the liberal core serves as a foundation for success and influencing the world. 
      </p>

      <h5>Small class sizes</h5>
      <p>
        Class sizes at Ashesi are kept small, because we believe the best learning takes place when students are able to have deep conversations with their classmates and professors in and out of the classroom. Our classes are full of energy, and students are encouraged to speak up, share ideas and ask critical questions. 

        Our professors care deeply about the success of the students in their classrooms. As leading voices in their areas of expertise, students will find that professors bring strong inspiration to Ashesi’s classes. 
      </p>

      <h5>Bachelor of Science Engineering</h5>
      <p>
        Africa needs better-designed infrastructure and new, efficient products tailored for local needs. Ashesi’s Engineering majors – Mechanical, Electrical & Electronic and Computer Engineering - with a focus on design, entrepreneurship and problem solving, aims to empower students to drive the important innovations that Africa needs. The industry-responsive curriculum adapts from the models of some of the world’s best engineering schools to foster systems thinking, real-world learning and design.
      </p>

      <h5>Bachelor of Science Computer Science</h5>
      <p>
        Ashesi’s Computer Science programme focuses not only on software design and programming, but also on empowering young people to be at the forefront of African growth by harnessing the power of technology. Students in the Computer Science programme are taken through robust foundational courses that prepare them to engage new technologies, and create software tools for African needs.
      </p>

      <h5>Bachelor of Science Management Information Systems</h5>
      <p>
        The Management Information Systems programme at Ashesi empowers students to improve business efficiency by effectively leveraging the connections between Information Technology and the functions of business and organizational strategy. This interdisciplinary programme trains students to be managers who are uniquely prepared to lead businesses in the new knowledge economy. 
      </p>

      <h5>Bachelor of Science Business Administration</h5>
      <p>
        Ashesi’s business programme depends on the foundation set by the core liberal curriculum, and prepares students to be leaders who can recognise opportunities in the needs of society and build businesses to help solve them. The business programme takes students through global business practices, with a focus on Africa’s dynamic economy. Class projects are done in partnership with local businesses in order to help students learn practical skills through solving real-world problems.
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