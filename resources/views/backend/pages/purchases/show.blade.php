@extends('backend.layouts.master')

@section('page-title', 'Receiving')
@section('page-header', 'Receiving')

@section('main-content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mb-3">
                <a href="{{ url('admin/receivings') }}" class="btn btn-md bg-white text-dark btn-flat float-right">
                    <i class="fas fa-hand-point-left"></i> Go Back
                </a>
            </div>
            <div class="col-lg-12">
                <div class="card card-dark">
                    @include('includes.alert')
                    <div class="card-header clearfix pt-3">
                        <h3 class="card-title float-left">Date: 01-01-2019</h3>
                        <h3 class="float-right">Supplier: Mayer inc</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Product Name</th>
                                        <th>Product Quantity</th>
                                        <th>Unit Price</th>
                                        <th>Sub Total</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Product 1</td>
                                        <td>100</td>
                                        <td>120</td>
                                        <td class="text-right">12000</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Product 2</td>
                                        <td >50</td>
                                        <td >10</td>
                                        <td class="text-right" >500</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Product 3</td>
                                        <td>1</td>
                                        <td>100</td>
                                        <td class="text-right">100</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td class="text-right pr-5" colspan="4">Total </td>
                                        <td class="text-right">12600</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <form id="delete-form"  method="post" style="display:none">
                            @csrf
                            @method('DELETE')
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
</section>

@endsection



@push('page-css')

@endpush



@push('page-scripts')
 

@endpush

