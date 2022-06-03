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
                                    Edit Profile
                                </div>
                                <div class="row mt-3">
                                    <div class="col-2 col-lg-3"></div>
                                    <div class="col-8 col-lg-6">
                                        <img src="{{ auth()->user()->image }}" class="img-fluid" alt="...">
                                    </div>
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title">{{ auth()->user()->name }}</h5> <!-- Nama -->
                                    <p class="card-text">Email: {{ auth()->user()->email }}</p> <!-- Email -->
                                    <div class="mt-2">
                                        {{-- Edit Foto --}}
                                        <div class="form-group text-left">
                                            <label for="thumb">
                                                <h6>Edit Profile Picture</h6>
                                            </label>
                                            <input type="file" class="form-control-file" name="thumb" id="thumb"
                                                placeholder="Upload thumbnail anda!" required>
                                        </div>
                                        {{-- End Edit Foto --}}
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
                        Edit Profile Details
                    </div>
                    <div class="card-body">
                        <p class="card-text">Nama</p>
                        <input class="form-control" type="text" placeholder="{{ auth()->user()->name }}"> {{-- Edit nama
                        --}}
                        <p class="card-text mt-2">Email <small>(can't be edited)</small></p>
                        <input class="form-control" type="text" placeholder="{{ auth()->user()->email }}" readonly> {{--
                        Email (ga bisa diedit) --}}
                        <div class="mt-3">
                            {{-- Simpan Perubahan --}}
                            <a href="#" class="btn btn-warning" style="background-color: #f48840; color: white;">Save
                                Changes</a>
                            {{-- Batalkan perubahan --}}
                            <a href="#" class="btn btn-warning ml-2"
                                style="background-color: #f48840; color: white;">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
