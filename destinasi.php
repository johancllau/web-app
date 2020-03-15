<!DOCTYPE html>
<html>
  <head>
    <title>Akakom Travel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    
    <!--Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Belgrano|Courgette&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    <!--Bootshape-->
    <link href="css/bootshape.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
  <body>
   <?php 
      include "navbar.html"; 
   ?>
    <!-- Slide gallery -->
    <div class="jumbotron">
    <!-- End Slide gallery -->
    </div>

    <!-- Thumbnails -->
    <div class="btn-toolbar text-center">

    </div>

    <div class="container thumbs">
    <h1>Yogyakarta</h1>
    <?php
      include "koneksi.php";
      $lokasi = "";
      $query = mysqli_query($kon, "SELECT * FROM destinasi WHERE lokasi_destinasi='Yogyakarta' ORDER BY id_destinasi DESC LIMIT 3");
      while ($row = mysqli_fetch_assoc($query)) {
        $lokasi = $row['lokasi_destinasi'];
        echo "
            <div class='col-sm-6 col-md-4'>
              <div class='thumbnail'>
                <img src='pict/".$row['image_destinasi']."' alt='' class='img-responsive'>
                <div class='caption'>
                <h4>".$row['nama_destinasi']."</h4>
                <p>".(str_word_count($row['description'])> 10 ? substr($row['description'],0,100)."..." : $row['description'])."</p>
                  <div class='btn-toolbar text-center'>
                    <a href='detail_destinasi.php?id_destinasi=".$row['id_destinasi']."' role='button' class='btn btn-primary pull-right'>Details</a>
                  </div>
                </div>
              </div>
            </div>";
      }
  ?>
  
  <?php
    $query = mysqli_query($kon, "SELECT * FROM destinasi WHERE lokasi_destinasi='Gunung Kidul' ORDER BY id_destinasi LIMIT 3");
    while ($row = mysqli_fetch_assoc($query)) {
      $lokasi = $row['lokasi_destinasi'];
      echo "
            <div class='col-sm-6 col-md-4'>
              <div class='thumbnail'>
                <img src='pict/".$row['image_destinasi']."' alt='' class='img-responsive'>
                <div class='caption'>
                <h4>".$row['nama_destinasi']."</h4>
                <p>".(str_word_count($row['description'])> 10 ? substr($row['description'],0,100)."..." : $row['description'])."</p>
                  <div class='btn-toolbar text-center'>
                    <a href='detail_destinasi.php?id_destinasi=".$row['id_destinasi']."' role='button' class='btn btn-primary pull-right'>Details</a>
                  </div>
                </div>
              </div>
            </div>";
    }
  ?>

  <?php
    $query = mysqli_query($kon, "SELECT * FROM destinasi WHERE lokasi_destinasi=-'Kulon Progo' ORDER BY id_destinasi LIMIT 3");
    while ($row = mysqli_fetch_assoc($query)) {
      $lokasi = $row['lokasi_destinasi'];
      echo "
            <div class='col-sm-6 col-md-4'>
              <div class='thumbnail'>
                <img src='pict/".$row['image_destinasi']."' alt='' class='img-responsive'>
                <div class='caption'>
                <h4>".$row['nama_destinasi']."</h4>
                <p>".(str_word_count($row['description'])> 10 ? substr($row['description'],0,100)."..." : $row['description'])."</p>
                  <div class='btn-toolbar text-center'>
                    <a href='#' role='button' class='btn btn-primary pull-right'>Details</a>
                  </div>
                </div>
              </div>
            </div>";
    }
  ?>

  <?php
    $query = mysqli_query($kon,"SELECT * FROM destinasi WHERE lokasi_destinasi = 'Bantul' ORDER BY id_destinasi LIMIT 3");
    while ($row = mysqli_fetch_assoc($query)) {
      $lokasi = $row['lokasi_destinasi'];
      echo "
            <div class='col-sm-6 col-md-4'>
              <div class='thumbnail'>
                <img src='pict/".$row['image_destinasi']."' alt='' class='img-responsive'>
                <div class='caption'>
                <h4>".$row['nama_destinasi']."</h4>
                <p>".(str_word_count($row['description'])> 10 ? substr($row['description'],0,100)."..." : $row['description'])."</p>
                  <div class='btn-toolbar text-center'>
                    <a href='#' role='button' class='btn btn-primary pull-right'>Details</a>
                  </div>
                </div>
              </div>
            </div>";
    }
  ?>

  <?php
    $query = mysqli_query($kon, "SELECT * FROM destinasi WHERE lokasi_destinasi='Sleman' ORDER BY id_destinasi LIMIT 3");
    while ($row = mysqli_fetch_assoc($query)) {
      $lokasi = $row['lokasi_destinasi'];
      echo "
            <div class='col-sm-6 col-md-4'>
              <div class='thumbnail'>
                <img src='pict/".$row['image_destinasi']."' alt='' class='img-responsive'>
                <div class='caption'>
                <h4>".$row['nama_destinasi']."</h4>
                <p>".(str_word_count($row['description'])> 10 ? substr($row['description'],0,100)."..." : $row['description'])."</p>
                  <div class='btn-toolbar text-center'>
                    <a href='#' role='button' class='btn btn-primary pull-right'>Details</a>
                  </div>
                </div>
              </div>
            </div>";
    }
  ?>

</div>
    <!-- Footer -->
    <?php
      include "footer.html";
      ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootshape.js"></script>

  </body>
</html>
