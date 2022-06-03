@extends('admin.layouts.adminpanel')
@section('admincontent')
<main class="content">
    <div class="container-fluid p-0">

        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Approve Post</h1>
        </div>
        <div class="row">
            <div class="col-6 col-md-4">
                <div class="card">
                    <img class="card-img-top" src="images/admin-img/img/photos/unsplash-1.jpg" alt="Unsplash">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Cooking</h5>
                    </div>
                    <div class="card-body">
                        <h6 class="card-text">Cara memasak nasi goreng yang baik</h6>
                        <p class="card-text">Isi post sedikit aja...</p>
                        <a href="#" class="card-link">Check this post</a>
                        <a href="#" class="card-link">Approve</a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="card">
                    <img class="card-img-top" src="images/admin-img/img/photos/unsplash-2.jpg" alt="Unsplash">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Lifestyle</h5>
                    </div>
                    <div class="card-body">
                        <h6 class="card-text">Cara merawat kulit wajah pria</h6>
                        <p class="card-text">Isi post sedikit aja...</p>
                        <a href="#" class="card-link">Check this post</a>
                        <a href="#" class="card-link">Approve</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
@endsection
