@extends('backend.layouts.master')

@section('page-title', 'Receiving | show')
@section('page-header', 'Receiving')

@section('main-content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mb-3">
                <a href="{{route('purchases.index') }}" class="btn btn-md bg-white text-dark btn-flat float-right">
                    <i class="fas fa-hand-point-left"></i> Go Back
                </a>
            </div>
            <div class="col-lg-12">
                <div class="card card-dark">
                    @include('includes.alert')
                    <div class="card-header clearfix pt-3">
                        <h3 class="card-title float-left">Date: {{ $purchase->purchase_date }}</h3>
                        <h3 class="float-right">Supplier: {{ $purchase->supplier->name }}</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Product Name</th>
                                        <th>Quantity</th>
                                        <th>Unit Price</th>
                                        <th class="text-right">Sub Total</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($purchase->products as $product)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td><a href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a></td>
                                        <td>{{ $product->pivot->quantity }}</td>
                                        <td>{{ $product->pivot->unit_price }}</td>
                                        <td class="text-right">{{ $product->pivot->sub_total }}</td>
                                    </tr>   
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td class="text-right pr-5" colspan="4">Total </td>
                                        <td class="text-right">{{ $purchase->total_price }}</td>
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

