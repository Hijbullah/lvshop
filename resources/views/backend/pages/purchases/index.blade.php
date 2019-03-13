@extends('backend.layouts.master')

@section('page-title', 'Receiving')
@section('page-header', 'Receiving')

@section('main-content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mb-3">
                <a href="{{ route('purchases.create') }}" class="btn btn-md bg-dark text-white btn-flat float-right">
                    <i class="fas fa-plus-circle"></i> New receiving
                </a>
            </div>
            <div class="col-lg-12">
                <div class="card card-dark">
                    @include('includes.alert')
                    <div class="card-header clearfix pt-3">
                        <h3 class="card-title float-left">All Receiving</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Receiving Code</th>
                                        <th>Suppliers</th>
                                        <th>Total Quantity</th>
                                        <th>Total Amount</th>
                                        <th class="text-center" width="170px">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($purchases as $purchase)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td><a href="{{ route('purchases.show', $purchase->id) }}">{{ $purchase->purchase_code }}</a></td>
                                        <td><a href="{{ route('suppliers.show', $purchase->supplier->id) }}">{{ $purchase->supplier->name }}</a></td>
                                        <td>{{ $purchase->total_quantity }}</td>
                                        <td><i class="fas fa-dollar-sign"></i> {{ $purchase->total_price }}</td>
                                        <td>
                                            <a href="{{ route('purchases.show', $purchase->id) }}" title="view" class="btn btn-success btn-sm text-white"><i class="fas fa-eye"></i></a>
                                            <a href="" title="Edit" class="btn btn-default btn-sm text-dark"><i class="fas fa-edit"></i></a>
                                            <a href="" title="DELETE" class="btn btn-sm btn-warning text-dark product-delete"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
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

