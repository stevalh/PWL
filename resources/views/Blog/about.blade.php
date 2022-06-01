<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="TemplateMo">
  <link
    href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap"
    rel="stylesheet">

  <title>AllT Blog - About</title>

  <!-- Bootstrap core CSS -->
  <link href="vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="css/fontawesome.css">
  <link rel="stylesheet" href="css/templatemo-stand-blog.css">
  <link rel="stylesheet" href="css/owl.css">
  <!--

TemplateMo 551 Stand Blog

https://templatemo.com/tm-551-stand-blog

-->
</head>

<body>
  <!-- Header -->
 @include('partials.navbar')

  <!-- Page Content -->
  <!-- Banner Starts Here -->
  <div class="heading-page header-text">
    <section class="page-heading">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="text-content">
              <h4>about us</h4>
              <h2>more about us!</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- Banner Ends Here -->

  <section class="about-us">
    <div class="container">
      <!-- Data Diri -->
      <section>
        <div class="card-deck">
          <div class="card">
            <img src="..." class="card-img-top" alt="#kenziefubrianto">
            <div class="card-body">
              <h5 class="card-title">Kenzie Fubrianto</h5>
              <p class="card-text">211402139</p>
            </div>
          </div>
          <div class="card">
            <img src="..." class="card-img-top" alt="#mariaanggaraininatio">
            <div class="card-body">
              <h5 class="card-title">Maria Anggraini Natio</h5>
              <p class="card-text">211402052</p>
            </div>
          </div>
          <div class="card">
            <img src="..." class="card-img-top" alt="mariyosyahraza">
            <div class="card-body">
              <h5 class="card-title">M. Ariyo Syahraza</h5>
              <p class="card-text">211402055</p>
            </div>
          </div>
          <div class="card">
            <img src="images/steven.jpg" class="card-img-top" alt="#stevenvalentino">
            <div class="card-body">
              <h5 class="card-title">Steven Valentino</h5>
              <p class="card-text">211402127 <br> 14 Februari 2004</p>
            </div>
          </div>
        </div>
      </section>
      <!-- End Data Diri -->

      <div class="row mt-3">
        <div class="col-lg-3">
          <ul class="social-icons">
            <li><a href="https://www.instagram.com/kenzie_fu_/"><i class="fa fa-instagram"></i></a></li>
          </ul>
        </div>
        <div class="col-lg-3">
          <ul class="social-icons">
            <li><a href="https://www.instagram.com/maria.natio/"><i class="fa fa-instagram"></i></a></li>
          </ul>
        </div>
        <div class="col-lg-3">
          <ul class="social-icons">
            <li><a href="https://www.instagram.com/ariyo_syahraza/"><i class="fa fa-instagram"></i></a></li>
          </ul>
        </div>
        <div class="col-lg-3">
          <ul class="social-icons">
            <li><a href="https://www.instagram.com/steven.vlntino/"><i class="fa fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <ul class="social-icons">
            <li><a href="#">Instagram</a></li>
          </ul>
        </div>
        <div class="col-lg-12">
          <div class="copyright-text">
            <p>Copyright 2020 Stand Blog Co.

              | Design: <a rel="nofollow" href="https://templatemo.com" target="_parent">TemplateMo</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendors/jquery/jquery.min.js"></script>
  <script src="vendors/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Additional Scripts -->
  <script src="js/custom.js"></script>
  <script src="js/owl.js"></script>
  <script src="js/slick.js"></script>
  <script src="js/isotope.js"></script>
  <script src="js/accordions.js"></script>

  <script language="text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t) {                   //declaring the array outside of the
      if (!cleared[t.id]) {                      // function makes it static and global
        cleared[t.id] = 1;  // you could use true and false, but that's more typing
        t.value = '';         // with more chance of typos
        t.style.color = '#fff';
      }
    }
  </script>

</body>

</html>
