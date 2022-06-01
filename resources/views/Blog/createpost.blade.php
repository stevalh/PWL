<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link
    href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap"
    rel="stylesheet">

  <title>AllT Blog - Post Details</title>

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
                <div class="form-group">
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




  <!-- Bootstrap core JavaScript -->
  <script src="vendors/jquery/jquery.min.js"></script>
  <script src="vendors/bootstrap/js/bootstrap.bundle.min.js"></script>


  <!-- Additional Scripts -->
  <script src="js/custom.js"></script>
  <script src="js/owl.js"></script>
  <script src="js/slick.js"></script>
  <script src="js/isotope.js"></script>
  <script src="js/accordions.js"></script>
  <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
  <script type="text/javascript">
      $(document).ready(function () {
          $('.ckeditor').ckeditor();
      });
  </script>
  <script type="text/javascript">
    CKEDITOR.replace('text-tab',{tabSpaces:4});
var config = {
    toolbar: [
        ['Font','FontSize'],
        ['Bold','Italic','Underline'],
        ['TextColor','BGColor'],
        ['JustifyLeft', 'JustifyCenter', 'JustifyRight']
    ],
};
$('.text-tab').ckeditor(config);
 </script>

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
