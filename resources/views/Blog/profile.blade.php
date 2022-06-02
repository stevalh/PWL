@extends('layouts.template')
@section('content')
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
                                <div class="row">
                                    <div class="col-1 col-lg-1"></div>
                                    <div class="col-8 col-lg-6"><img style="width: 75;height:75;"
                                            src="{{ auth()->user()->image }}"
                                            class="rounded-circle" alt="...">
                                    </div>
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title">{{ auth()->user()->name }}</h5> <!-- Nama -->
                                    <p class="card-text">Email: {{ auth()->user()->email }}</p> <!-- Email -->
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
                      <h5 class="card-title">{{ auth()->user()->name }}</h5> <!-- Nama -->
                      <p class="card-text mt-2">Email</p>
                      <h5 class="card-title">{{ auth()->user()->email }}</h5> <!-- Email -->
                      <a href="#" class="btn btn-warning mt-2" style="background-color: #f48840; color: white;">Edit Profile</a>
                    </div>
                  </div>
            </div>

        </div>
    </div>
</section>
@endsection
