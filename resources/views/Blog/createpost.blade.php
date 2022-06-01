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
              <h4>Create Post</h4>
              <h2>Hi,{{ auth()->user()->name }}</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- Banner Ends Here -->
  <div class="row-mt-3">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header">
                  <div class="d-flex align-items-center flex-shrink-0 me-3">
                      <div class="mx-3">
                          <img width="50px" src="assets/img/icon.png" alt="">
                        </div>
                        <div class="d-flex flex-column fw-bold">
                            <a class="text-dark mb-1" >{{ auth()->user()->name }}</a>
                            <div class="small text-muted">member</div>
                        </div>
                    </div>            
                </div>
                <form action=" {{ route('createpost') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="card-body">
                    <div class="form-group">
                        
                    <label for="judul">Judul Post</label>
                    <input type="text" class="form-control" name="title" value="{{ old('title') }}" id="judul" placeholder="Tulis judul.!" required>
                </div>
                @error('title')
                <div  style="color: red">
                    {{ $message }}

                </div>
                @enderror
                <hr>
                <div class="form-group">
                    
                    <label for="thumb">Tambah Thumbnail</label>
                    <input type="file" class="form-control-file" name="thumb"  id="thumb" placeholder="Upload thumbnail anda!" required >
                </div>
                @error('thumb')
                <div style="color: red" >
                    {{ $message }}

                </div>
                @enderror
                <hr>
                <div class="form-group" >
                    <textarea class="ckeditor form-control"id="text-tab" name="content">{{ old('content') }}</textarea>
                </div>
                @error('content')
                <div  style="color: red">
                    {{ $message }}

                </div>
                @enderror

            </div>
        </div>
    </div>
 
    
    <div class="col-6 col-md-4">
        <div class="card">
            <div class="card-body">
                <label for="kategori">Pilih Kategori</label>
                <select name="category_id">
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                <button class="btn btn-success btn-block mt-2" type="submit">POST</button>		
            </div>
        </div>
    </div>
</div>

</form>





</div>
</div>
</div>
</div>
</section>

<script src="ckeditor/ckeditor.js"></script>
  <script>
    CKEDITOR.replace('text-tab',{tabSpaces:4});
 </script>

@endsection