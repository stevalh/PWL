@extends('admin.layouts.adminpanel')
@section('admincontent')
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Table #02</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-wrap">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID no.</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="alert" role="alert">
                                <th scope="row">001</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>markotto@email.com</td>
                                <td>
                                    <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true"><i class="fa fa-close"></i></span>
                                    </a>
                                </td>
                            </tr>
                            <tr class="alert" role="alert">
                                <th scope="row">002</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>jacobthornton@email.com</td>
                                <td>
                                    <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true"><i class="fa fa-close"></i></span>
                                    </a>
                                </td>
                            </tr>
                            <tr class="alert" role="alert">
                                <th scope="row">003</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>larrybird@email.com</td>
                                <td>
                                    <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true"><i class="fa fa-close"></i></span>
                                    </a>
                                </td>
                            </tr>
                            <tr class="alert" role="alert">
                                <th scope="row">004</th>
                                <td>John</td>
                                <td>Doe</td>
                                <td>johndoe@email.com</td>
                                <td>
                                    <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true"><i class="fa fa-close"></i></span>
                                    </a>
                                </td>
                            </tr>
                            <tr class="alert" role="alert">
                                <th scope="row">005</th>
                                <td>Gary</td>
                                <td>Bird</td>
                                <td>garybird@email.com</td>
                                <td>
                                    <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true"><i class="fa fa-close"></i></span>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
