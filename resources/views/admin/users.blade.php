@extends('admin.layouts.adminpanel')
@section('admincontent')
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Table Users</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-wrap">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Image</th>
                                <th>Level</th>
                                <th>Created_at</th>
                                <th>Updated_at</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $u)
                            <tr class="alert" role="alert">
                                <th scope="row">{{$u ->id}}</th>
                                <td>{{$u -> name}}</td>
                                <td>{{$u -> email}}</td>
                                <td>{{$u -> password}} </td>
                                <td>{{$u -> image}}</td>
                                <td>{{$u -> level}}</td>
                                <td>{{$u -> created_at}} </td>
                                <td>{{$u -> updated_at}} </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection