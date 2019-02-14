@extends('backend.layouts.master')

@section('page-title', 'Products')

@section('main-content')
    <section class="content">
        <div class="body_scroll">
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="card">
                            @include('includes.alert')
                            <div class="header">
                                <h2 class="float-left"><strong>All</strong> Products</h2>
                                <div class="header-right float-right">
                                    <a href="{{ route('products.create') }}" class="btn btn-sm btn-primary">Add New</a>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover c_table">
                                    <thead>
                                    <tr>
                                        <th style="width:60px;">Sl.</th>
                                        <th>Name</th>
                                        <th>New Price</th>
                                        <th>Old Price</th>
                                        <th>Quantity</th>
                                        <th>Category</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($products as $product)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ str_limit($product->name, 15, '...') }}</td>
                                            <td>$ {{ $product->sale_price }}</td>
                                            <td>$ {{ $product->unit_price }}</td>
                                            <td>{{ $product->quantity }}</td>
                                            <td>{{ $product->category->name }}</td>
                                            <td>
                                                <a href="{{ route('products.show', $product->id) }}" class="btn btn-info btn-sm waves-effect"><i class="zmdi zmdi-eye"></i></a>
                                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-success waves-effect waves-float btn-sm waves-light"><i class="zmdi zmdi-edit"></i></a>
                                                <a href="{{ route('products.destroy', $product->id) }}" class="btn btn-danger waves-effect waves-float btn-sm waves-light data-delete"><i class="zmdi zmdi-delete"></i></a>
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
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection

@push('page-css')

@endpush



@push('page-scripts')
    <script>
            var products = document.querySelectorAll('.data-delete');
            var deleteForm = document.getElementById('delete-form');
            for(var product of Array.from(products)) {
                product.addEventListener('click', function(event) {
                    event.preventDefault();
                    var action = this.href;
                    deleteForm.action = action;
                    deleteForm.submit();
                });

            }
    </script>
@endpush
