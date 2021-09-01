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

  <title>ข้อมูลเชิงลึก สวนพฤษศาสตร์ อทว.</title>

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
  
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="products.php">ข้อมูลพรรณไม้</a>
          </li>
          <li class="nav-item active px-lg-4">
            <a class="nav-link text-uppercase text-expanded" >ข้อมูลเชิงลึก</a>
          </li>
 
        </ul>
      </div>
    </div>
  </nav>

  <section class="page-section about-heading">
    <div class="container">
    <?php
          $stmt = $pdo->query("select * from garden where garden_id = '".$_REQUEST['varname']."' ");
          while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
          echo ' <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="garden/'.$row['pic_file'].'" >' ;
          }
?>
     
      <div class="about-heading-content">
        <div class="row">
          <div class="col-xl-9 col-lg-10 mx-auto">


<?php
          $stmt = $pdo->query("select * from garden where garden_id = '".$_REQUEST['varname']."' ");
          while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
          echo '<div class="bg-faded rounded p-5">' ;
          echo '<h2 class="section-heading mb-4">';
          echo '<span class="section-heading-lower">ชื่อพรรณไม้ :  '.$row["name_general"] ;
          echo '</span>';
          echo '</h2>';
          echo '<p>ลำดับ : '.$row["garden_id"].' </p>';
          echo '<p>รหัสพรรณไม้ : '.$row["garden_key"].' </p>';
          echo '<p>ชื่อวิทยาศาสตร์ : '.$row["name_science"].'</p>';
          echo '<p>ชื่อวงศ์ : '.$row["name_family"].'</p>';
          echo '<p>ชื่อสามัญ : '.$row["name_common"].'</p>';
          echo '<p>ชื่ออื่นๆ : '.$row["name_other"].'</p>';
          echo '<p>ถิ่นกำเนิด : '.$row["location"].'</p>';
          echo '<p>การขยายพันธุ์ : '.$row["propagate_species"].'</p>';
          echo '<p>ลักษณะทางพฤษศาสตร์ : '.$row["format"].'</p>';
          echo '<p>ประโยชน์ : '.$row["service"].'</p>';
          echo '</div>';
          }
?>

            
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
