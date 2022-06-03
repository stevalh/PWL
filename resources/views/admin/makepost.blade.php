@extends('admin.layouts.adminpanel')
@section('admincontent')
<main class="content">
    <div class="container-fluid p-0">

        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Posting</h1>
            <a class="badge bg-dark text-white ms-2" href="/addcategory">
                Click Here to Add Category
            </a>
        </div>
        <form action ="" method ="post" enctype ="multipart/form-data">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Judul</h5>
                    </div>
                    @error('title')
                    <div style="color: red">
                        {{ $message }}
                    </div>
                    @enderror
                    <div class="card-body">
                        <input type="text" class="form-control" placeholder="Judul" name="title" value = "{{ old('title') }}">
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Content</h5>
                        </div>
                        @error('content')
                        <div style="color: red">
                            {{ $message }}
                        </div>
                        @enderror
                        <div class="card-body">
                            <textarea class="form-control" rows="2" placeholder="Content" name="content">{{ old('content')}}</textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Category</h5>
                    </div>
                
                    <div class="card-body">
                        <select class="form-select mb-3">
                            <option selected>Select category</option>
                            @foreach($categories as $c)
                            <option>{{$c -> name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Image</h5>
                        </div>
                        @error('thumb')
                        <div style="color: red">
                            {{ $message }}
                        </div>
                        @enderror
                        <div class="card-body">
                            <input type="file" class="form-control" name="thumb" id="thumb"
                                placeholder="Upload thumbnail anda!" required>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <button class="btn btn-primary">Upload Posting</button>
                </div>
            </div>
        </div>
    </form>
</main>
@endsection