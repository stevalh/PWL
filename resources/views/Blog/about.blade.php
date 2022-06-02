@extends('layouts.template')
@section('content')
<!-- Page Content -->
<!-- Banner Starts Here -->
<div class="heading-page header-text">
    <section class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-content">
                        <h4>My Blogs</h4>
                        <h2>see all the posts you made!</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Banner Ends Here -->

<section class="about-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h3>All Post You Made</h3>
                <div class="row ">
                    {{-- Start loop here --}}
                    {{-- 1 --}}
                    <div class="col-lg-6 mt-4">
                        <div class="card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Kategory post</h5>
                              <p class="card-text">Isi post</p>
                              <a href="#" class="btn btn-primary">Delete post</a>
                            </div>
                          </div>
                    </div>
                    {{-- 2 --}}
                    <div class="col-lg-6 mt-4">
                        <div class="card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Kategory post</h5>
                              <p class="card-text">Isi post</p>
                              <a href="#" class="btn btn-primary">Delete post</a>
                            </div>
                          </div>
                    </div>
                    {{-- 3 --}}
                    <div class="col-lg-6 mt-4">
                        <div class="card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Kategory post</h5>
                              <p class="card-text">Isi post</p>
                              <a href="#" class="btn btn-primary">Delete post</a>
                            </div>
                          </div>
                    </div>
                    {{-- End loop --}}
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">Nama email dll</p>
                      <a href="#" class="card-link">Edit Profile</a>
                    </div>
                  </div>
            </div>
        </div>

        <!-- Profile -->
        <!-- End Profile -->

    </div>
</section>


@endsection
