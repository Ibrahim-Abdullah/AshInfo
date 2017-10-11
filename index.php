<!DOCTYPE html>
<html>
    <head>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    </head>
<body>
    <!--NAVIGATION BAR-->
    <div class="red darken-3 row">
      <?php
        include 'navbar.php'; 
      ?>
    </div>
    <!--CONTENT-->
    <div class="carousel carousel-slider">
      <a class="carousel-item" href="#one!"><img src="images/ashesi1.jpg"></a>
      <a class="carousel-item" href="#two!"><img src="images/ashesi2.jpg"></a>
      <a class="carousel-item" href="#three!"><img src="images/ashesi3.jpg"></a>
      <a class="carousel-item" href="#four!"><img src="images/ashesi4.jpg"></a>
    </div>

    <div class="row container content">
      <h4>About Ashesi University Colleg</h4>
      <p>
        Since our founding in 2002, Ashesi has established a reputation as a leader in undergraduate education in Africa, with an educational experience that fosters ethical leadership, an entrepreneurial mindset and the ability to solve complex problems. These qualities are what set Ashesi students and alumni apart. Across various industries today, Ashesi graduates are highly sought, and over 90% have stayed to work for progress in Africa
      </p>

      <h4>Mission</h4>
      <p>
        To educate ethical and entrepreneurial leaders in Africa; to cultivate in students, the critical thinking skills, concern for others and the courage it will take to transform our continent.
      </p>
      <p>
        <span class="red-text">The Ashesi Way</span> -- the principles that define us

        <ol a>
          <li>Scholarship</li>
          <li>Leadership</li>
          <li>Citizenship</li>
        </ol>

      </p>

      <h4>At a Glance</h4>
      <p>
        <ol>
          <li>Private, non-profit</li>
          <li>4-year undergraduate</li>
          <li>Began instruction: 4th March, 2002</li>
          <li>6 degree programs</li>
          <li>Interdisciplinary core curriculum</li>
        </ol>

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