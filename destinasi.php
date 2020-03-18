<!DOCTYPE html>
<html>
  <head>

    <title>Akakom Travelling</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!--Bootshape-->
    <link href="css/bootshape.css" rel="stylesheet">

  </head>

  <body>
    <?php 
      include "navbar.html"; 
      include "koneksi.php";
    ?>
    
    <!-- Slide gallery -->
    <div class="jumbotron">
    
    </div> <!-- End Slide gallery -->

    <!-- Thumbnails -->
    <div class="btn-toolbar text-center">

    </div><!-- End Thumbnails -->

    <div class="container thumbs">
      <h1 align="center"><b>Daftar Wisata Di Yogyakarta</b></h1>
      <br>

      <?php
        $query = mysqli_query($kon, "SELECT * FROM destinasi");
        while ($row = mysqli_fetch_assoc($query)) : 
      ?>

      <div class='col-sm-6 col-md-4'>
        <div class='thumbnail'>
          <img src="pict/<?= $row['image_destinasi'] ?>" alt='' class='img-responsive'>
          <div class='caption'>
            <h3 class=''><?= $row['nama_destinasi']?></h3>
            <p>
              <?php 
                echo((str_word_count($row['description']) > 10 ? substr($row['description'], 0, 80)."..." : $row['description'])) 
              ?>
            </p>
            <div class='btn-toolbar text-center'>
              <a href='detail_destinasi.php?id_destinasi=<?= $row['id_destinasi']?>' role='button' class='btn btn-primary pull-right'>Details</a>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
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
