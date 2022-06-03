@extends('admin.layouts.adminpanel')
@section('admincontent')
<main class="content">
    <div class="container-fluid p-0">

        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Category yang sudah dihapus</h1>

            @foreach($make_categories as $c)
            <div class="row">
                <div class="col-6 col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="{{url('/data_file_category/'.$c->file)}}" alt="Gambar Kategori">
                        <div class="card-header">
                            <h5 class="card-title mb-0">{{$c -> jenis}}</h5>
                            <p class="card-text">{{$c -> keterangan}}</p>
                        </div>
                        <div class="card-body">
                            <p class="card-text"></p>
                            <a href="/makecategory/restore/{{$c -> id}}" class="card-link">Restore</a>
                            <a href="/makecategory/hapuspermanen/{{$c -> id}}" class="card-link">Hapus Permanen</a>
                        </div>
                        <p class="mx-3">{{$c -> updated_at}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</main>

@endsection
