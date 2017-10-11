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
      <h4>Office of Diversity and International Programs</h4>

      <p>

        The Office of Diversity and International Programs (ODIP) coordinates and promotes all external collaborations and partnerships of the University as well as driving initiatives and programs aimed at advancing cross-cultural learning, awareness and acceptance of diversity and inclusion as a core tenant of the University.
      </p>
        
      <h5>What We Do</h5>
      <p>
        The Office of Diversity and International Programs focuses on:

        Orienting the international community present at Ashesi to succeed while studying and living in Ghana through pre-arrival, onsite and re-entry orientation programs.
        Provides onsite cross-cultural counseling services and support especially on issues of diversity and adjustment challenges.
        Creating a campus ethos that promotes awareness of, respect for and an attitude of celebrating diversity through various programs.
        Developing and offering international educational opportunities for students, faculty and staff through teaching, research, academic and study abroad exchanges.
        Organizing and hosting yearlong, semester and summer programs.
        Providing advice on regularizing immigration status while studying in Ghana.

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