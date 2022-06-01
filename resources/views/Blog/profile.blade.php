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
                            <h4>Profile</h4>
                            <h2>Welcome Back, Name!</h2>
                            <h3 style="color: #fff;">Here You Can See Your Profile & Make Post Requests</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Banner Ends Here -->

    <section class="profile mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            Your Profile
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-3">
                                    <p>Name</p>
                                </div>
                                <div class="col-lg-1">
                                    <p>:</p>
                                </div>
                                <div class="col-lg-8">
                                    <p>Your Name</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <p>Email</p>
                                </div>
                                <div class="col-lg-1">
                                    <p>:</p>
                                </div>
                                <div class="col-lg-8">
                                    <p>Your Email</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            Make a post and then request approval from admin
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Make Your Post First</h5>
                            <p class="card-text">Post must contain about how to do something</p>
                            <a href="#" class="btn btn-primary">Make a post</a>
                        </div>
                    </div>
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

                            | Design: <a rel="nofollow" href="https://templatemo.com" target="_parent">TemplateMo</a>
                        </p>
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
