@extends('backend.layouts.master')

@section('page-title', 'Sales')
@section('page-header', 'Sales')

@section('main-content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-dark">
                    @include('includes.alert')
                    <div class="card-header clearfix pt-3">
                        <h3 class="card-title float-left">All sales</h3>
                        <a href="#" class="btn btn-sm bg-white text-dark btn-flat float-right">
                            <i class="fab fa-searchengin"></i> Completed Order's
                        </a>
                        <a href="#" class="btn btn-sm bg-white text-dark  btn-flat float-right mr-1">
                            <i class="fab fa-searchengin"></i> Paid Order's
                        </a>
                        <a href="#" class="btn btn-sm bg-white text-dark  btn-flat float-right mr-1">
                            <i class="fab fa-searchengin"></i> Uncompleted Order's
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Order Code</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Payment Status</th>
                                        <th>Payment method</th>
                                        <th>Order Status</th>
                                        <th class="text-center" width="170px">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>OD-1001</td>
                                        <td>Jon</td>
                                        <td><i class="fas fa-dollar-sign"></i> 2000</td>
                                        <td>20</td>
                                        <td>Unpaid</td>
                                        <td>Payple</td>
                                        <td>Pending</td>
                                        <td>
                                            <a href="" title="view" class="btn btn-success btn-sm text-white"><i class="fas fa-eye"></i></a>
                                            <a href="" title="Edit" class="btn btn-default btn-sm text-dark"><i class="fas fa-edit"></i></a>
                                            <a href="" title="Cancel" class="btn btn-danger btn-sm text-white"><i class="fas fa-ban"></i></a>
                                            <a href="" title="DELETE" class="btn btn-sm btn-warning text-dark product-delete"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>OD-1002</td>
                                        <td>Hakim</td>
                                        <td><i class="fas fa-dollar-sign"></i> 2000</td>
                                        <td>20</td>
                                        <td>Unpaid</td>
                                        <td>Payple</td>
                                        <td>Pending</td>
                                        <td>
                                            <a href="" title="view" class="btn btn-success btn-sm text-white"><i class="fas fa-eye"></i></a>
                                            <a href="" title="Edit" class="btn btn-default btn-sm text-dark"><i class="fas fa-edit"></i></a>
                                            <a href="" title="Cancel" class="btn btn-danger btn-sm text-white"><i class="fas fa-ban"></i></a>
                                            <a href="" title="DELETE" class="btn btn-sm btn-warning text-dark product-delete"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>OD-1003</td>
                                        <td>Jon</td>
                                        <td><i class="fas fa-dollar-sign"></i> 2000</td>
                                        <td>20</td>
                                        <td>Unpaid</td>
                                        <td>Payple</td>
                                        <td>Pending</td>
                                        <td>
                                            <a href="" title="view" class="btn btn-success btn-sm text-white"><i class="fas fa-eye"></i></a>
                                            <a href="" title="Edit" class="btn btn-default btn-sm text-dark"><i class="fas fa-edit"></i></a>
                                            <a href="" title="Cancel" class="btn btn-danger btn-sm text-white"><i class="fas fa-ban"></i></a>
                                            <a href="" title="DELETE" class="btn btn-sm btn-warning text-dark product-delete"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>OD-1004</td>
                                        <td>Jon</td>
                                        <td><i class="fas fa-dollar-sign"></i> 2000</td>
                                        <td>20</td>
                                        <td>Unpaid</td>
                                        <td>Payple</td>
                                        <td>Pending</td>
                                        <td>
                                            <a href="" title="view" class="btn btn-success btn-sm text-white"><i class="fas fa-eye"></i></a>
                                            <a href="" title="Edit" class="btn btn-default btn-sm text-dark"><i class="fas fa-edit"></i></a>
                                            <a href="" title="Cancel" class="btn btn-danger btn-sm text-white"><i class="fas fa-ban"></i></a>
                                            <a href="" title="DELETE" class="btn btn-sm btn-warning text-dark product-delete"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>OD-1005</td>
                                        <td>Jon</td>
                                        <td><i class="fas fa-dollar-sign"></i> 2000</td>
                                        <td>20</td>
                                        <td>Unpaid</td>
                                        <td>Payple</td>
                                        <td>Pending</td>
                                        <td>
                                            <a href="" title="view" class="btn btn-success btn-sm text-white"><i class="fas fa-eye"></i></a>
                                            <a href="" title="Edit" class="btn btn-default btn-sm text-dark"><i class="fas fa-edit"></i></a>
                                            <a href="" title="Cancel" class="btn btn-danger btn-sm text-white"><i class="fas fa-ban"></i></a>
                                            <a href="" title="DELETE" class="btn btn-sm btn-warning text-dark product-delete"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>OD-1006</td>
                                        <td>Jon</td>
                                        <td><i class="fas fa-dollar-sign"></i> 2000</td>
                                        <td>20</td>
                                        <td>Unpaid</td>
                                        <td>Payple</td>
                                        <td>Pending</td>
                                        <td>
                                            <a href="" title="view" class="btn btn-success btn-sm text-white"><i class="fas fa-eye"></i></a>
                                            <a href="" title="Edit" class="btn btn-default btn-sm text-dark"><i class="fas fa-edit"></i></a>
                                            <a href="" title="Cancel" class="btn btn-danger btn-sm text-white"><i class="fas fa-ban"></i></a>
                                            <a href="" title="DELETE" class="btn btn-sm btn-warning text-dark product-delete"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>OD-1007</td>
                                        <td>Jon</td>
                                        <td><i class="fas fa-dollar-sign"></i> 2000</td>
                                        <td>20</td>
                                        <td>Unpaid</td>
                                        <td>Payple</td>
                                        <td>Pending</td>
                                        <td>
                                            <a href="" title="view" class="btn btn-success btn-sm text-white"><i class="fas fa-eye"></i></a>
                                            <a href="" title="Edit" class="btn btn-default btn-sm text-dark"><i class="fas fa-edit"></i></a>
                                            <a href="" title="Cancel" class="btn btn-danger btn-sm text-white"><i class="fas fa-ban"></i></a>
                                            <a href="" title="DELETE" class="btn btn-sm btn-warning text-dark product-delete"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>OD-1008</td>
                                        <td>Jon</td>
                                        <td><i class="fas fa-dollar-sign"></i> 2000</td>
                                        <td>20</td>
                                        <td>Unpaid</td>
                                        <td>Payple</td>
                                        <td>Pending</td>
                                        <td>
                                            <a href="" title="view" class="btn btn-success btn-sm text-white"><i class="fas fa-eye"></i></a>
                                            <a href="" title="Edit" class="btn btn-default btn-sm text-dark"><i class="fas fa-edit"></i></a>
                                            <a href="" title="Cancel" class="btn btn-danger btn-sm text-white"><i class="fas fa-ban"></i></a>
                                            <a href="" title="DELETE" class="btn btn-sm btn-warning text-dark product-delete"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>OD-1009</td>
                                        <td>Jon</td>
                                        <td><i class="fas fa-dollar-sign"></i> 2000</td>
                                        <td>20</td>
                                        <td>Unpaid</td>
                                        <td>Payple</td>
                                        <td>Pending</td>
                                        <td>
                                            <a href="" title="view" class="btn btn-success btn-sm text-white"><i class="fas fa-eye"></i></a>
                                            <a href="" title="Edit" class="btn btn-default btn-sm text-dark"><i class="fas fa-edit"></i></a>
                                            <a href="" title="Cancel" class="btn btn-danger btn-sm text-white"><i class="fas fa-ban"></i></a>
                                            <a href="" title="DELETE" class="btn btn-sm btn-warning text-dark product-delete"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>OD-1010</td>
                                        <td>Jon</td>
                                        <td><i class="fas fa-dollar-sign"></i> 2000</td>
                                        <td>20</td>
                                        <td>Unpaid</td>
                                        <td>Payple</td>
                                        <td>Pending</td>
                                        <td>
                                            <a href="" title="view" class="btn btn-success btn-sm text-white"><i class="fas fa-eye"></i></a>
                                            <a href="" title="Edit" class="btn btn-default btn-sm text-dark"><i class="fas fa-edit"></i></a>
                                            <a href="" title="Cancel" class="btn btn-danger btn-sm text-white"><i class="fas fa-ban"></i></a>
                                            <a href="" title="DELETE" class="btn btn-sm btn-warning text-dark product-delete"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                        <form id="delete-form"  method="post" style="display:none">
                            @csrf
                            @method('DELETE')
                        </form>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-right">
                            <li class="page-item">
                                <a class="page-link" href="#">«</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">»</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <form method="POST" id = "product-delete-form" style="display:none">
                    @method('DELETE')
                    @csrf
                </form>
            </div>
        </div>
    </div>
</section>

@endsection



@push('page-css')

@endpush



@push('page-scripts')
 

@endpush

