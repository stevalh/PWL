<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/adminfonts/fonts/icomoon/style.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/admincss/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/admincss/style.css">

    <title>Add Category</title>
  </head>
  <body>
  

  <div class="content">
    
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10">
          

          <div class="row justify-content-center">
            <div class="col-md-6">
              
              <h3 class="heading mb-4">Tambah Kategori</h3>
              <p>Silakan tambahkan kategori yang diinginkan!</p>

              <p><img src="images/admin-img/img/icons/undraw-contact.svg" alt="Image" class="img-fluid"></p>


            </div>
            <div class="col-md-6">
              
              <form class="mb-5" method="post" id="addForm" name="addForm">
                {{csrf_field()}}
                <div class="row">
                  <div class="col mx-4 my-3 form-group">
                    <input type="text" class="form-control" name="kategori" id="kategori" placeholder="Jenis konten">
                  </div>
                </div>
                
                <div class="row">
                  <div class="col mx-4 my-3 form-group">
                    <input type="file" class="form-control" name="file" enctype = "multipart/form-data">
                  </div>
                </div>

                <div class="row">
                  <div class="col mx-4 my-3 form-group">
                    <textarea class ="form-control" name="keterangan" placeholder="Keterangan Tambahan"></textarea>
                  </div>
                </div>

                <div class="row">
                  <div class="col-12 mx-4 my-3">
                    <input type="submit" value="Tambah" class="btn btn-primary rounded-0 py-2 px-4">
                  <span class="submitting"></span>
                  </div>
                </div>
              </form>

              <div id="form-message-warning mt-4"></div> 
              <div id="form-message-success">
               Kategori berhasil ditambah!
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
    
    

    <script src="js/adminjs/jquery-3.3.1.min.js"></script>
    <script src="js/adminjs/popper.min.js"></script>
    <script src="js/adminjs/bootstrap.min.js"></script>
    <script src="js/adminjs/jquery.validate.min.js"></script>
    <script src="js/adminjs/main.js"></script>
  </body>
</html>