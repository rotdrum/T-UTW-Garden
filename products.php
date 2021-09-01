

<!DOCTYPE html>
<html lang="en">
<?php
  include("config.php");
?>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ข้อมูลพรรณไม้ สวนพฤษศาสตร์ อทว.</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" href="img/pt.png">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/business-casual.min.css" rel="stylesheet">


  <style>
    @import url('https://fonts.googleapis.com/css2?family=Kanit:wght@200;300;400;500&display=swap');
  
      * {
        font-family: 'Kanit', sans-serif;
      }
    </style>
  </head>
  
  <body>
    <h1 class="site-heading text-center text-white d-none d-lg-block">
    <img style="width: 200px; padding-bottom: 10px; Opacity: 0.8;"  src="http://realbearpro.com/utw_register/public/img/logo.png">
      <span style="Opacity: 0.8;" class="site-heading-upper  text-expanded  mb-3">โรงเรียนอุทัยวิทยาคม</span>
      <span class="site-heading-lower text-primary mb-3">สวนพฤษศาสตร์</span>
  
    </h1>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">

      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">
  <img style="width: 35px; "  src="http://realbearpro.com/utw_register/public/img/logo.png">
        
        สวนพฤษศาสตร์ อทว.
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item  px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="index.php">หน้าหลัก
              <span class="sr-only">(current)</span>
            </a>
          </li>
  
          <li class="nav-item active px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="products.php">ข้อมูลพรรณไม้</a>
          </li>
      
 
        </ul>
      </div>
    </div>
  </nav>


  <section class="page-section cta">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-5">
              <span class="section-heading-upper"></span>
              <span class="section-heading-lower">ข้อมูลพรรณไม้ของโรงเรียน</span>
            </h2>
            <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
              <li class="list-unstyled-item list-hours-item d-flex">
                ชื่อพรรณไม้
                <span class="ml-auto"  >ชื่อวิทยาศาสตร์</span>
              </li>

              <?php
                $stmt = $pdo->query("select * from garden ORDER BY name_general");
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                echo '<li class="list-unstyled-item list-hours-item d-flex">' ;
                echo '<a href="about.php?varname='.$row['garden_id'].'" class="ml" >'.$row['name_general'].'</a>' ;
                echo '<a href="about.php?varname='.$row['garden_id'].'" class="ml-auto" >'.$row['name_science'].'</a>' ;
                echo '</li>';
                }
              ?>

            </ul>
  
          </div>
        </div>
      </div>
    </div>
  </section>



  <footer class="footer text-faded text-center py-5">
    <div class="container">
      <p class="m-0 small">Copyright &copy; Deverlop by K.Kiattikun && K.Natcha</p>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
