@extends('layouts.template')
@section('content')
<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <h2>AllT Blog<em>.</em></h2>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About Us</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="blog.html">Blog Entries</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="post-details.html">Post Details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<!-- Page Content -->
<!-- Banner Starts Here -->
<div class="heading-page header-text">
</div>
<!-- Banner Ends Here -->

<section class="blog-posts grid-system">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="sidebar">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card " style="width: 18rem;">
                                <div class="card-header">
                                    Profile
                                </div>
                                <img src="#" class="card-img-top" alt="#">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Apa Saja</h5> <!-- Nama -->
                                    <p class="card-text">Username: apapun</p> <!-- Username -->
                                    <p class="card-text">Email: apasaja@gmail.com</p> <!-- Email -->
                                    <div class="mt-2">
                                        <a href="#" class="card-link fa fa-cogs" style="color: #f48840;"></a>
                                        <a href="ml-3" style="color: #f48840;">Edit Profile</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        Profile Details
                    </div>
                    <div class="card-body">
                      <p class="card-text">Nama</p>
                      <h5 class="card-title">Apa Saja</h5> <!-- Nama -->
                      <p class="card-text mt-2">Username</p>
                      <h5 class="card-titile">apapun</h5> <!-- Username -->
                      <p class="card-text mt-2">Email</p>
                      <h5 class="card-title">apasaja@gmail.com</h5> <!-- Email -->
                      <a href="#" class="btn btn-warning mt-2" style="background-color: #f48840; color: white;">Edit Profile</a>
                    </div>
                  </div>
            </div>

        </div>
    </div>
</section>
@endsection
