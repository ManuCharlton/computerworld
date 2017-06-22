<head>
    <title> index</title>
<?php
include"constants/constants.php";
include"constants/head.php";

?>
</head>

<html>
<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container">
      <?php
      include"constants/nav.php"
      ?>
    <div class="row">
        <div class="one-half column" style="margin-top: 10%">
        <h1>Computer World</h1><!--HOMEPAGE NAME-->
        <p>This is a online Computer Store covering the worlds best marketed Notebooks, Desktops, All in One Pc's</p>
      </div>
        <div class="one columns offset-by-two" style="margin-top: 10%">
            <img src="images/laptops/AcerAspireS13.jpg" height="300px" width="300px">
        </div>

    </div>

      <br>

    <div class="row">
       <div class="four column">
            <img src="images/desktops/DellXPS27.jpg" height="350px" width="310px">
            <img src="images/laptops/MacBook.jpg" height="350px" width="310px">
            <img src="images/desktops/HPPavilionWave.jpg" height="350px" width="310px">
            <h4>ALL IN ONE</h4>
            <h4 align="center">PORTABLE</h4>
            <h4 align="right">FUTURE IS HERE</h4>
       </div>
    </div>

    <div class="row">
        <div class="four">

        </div>
    </div>


  </div>

  <?php
  include"database/connection.php";
  include"database/resources.php";
  include"database/form.php";
  include"database/connection_close.php"
  ?>



<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->


</body>
</html>
