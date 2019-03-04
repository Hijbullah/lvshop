@extends('backend.layouts.master')

@section('page-header', 'Products')
@section('page-title', 'Products')

@section('main-content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mb-3">
                <a href="{{ route('products.create') }}" class="btn btn-md bg-dark text-white btn-flat float-right">
                    <i class="fas fa-plus-circle"></i> Add New Product
                </a>
            </div>
            <div class="col-lg-12">
                <div class="card card-dark">
                    @include('includes.alert')
                    <div class="card-header clearfix">
                        <h3 class="card-title float-left">All Products</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Category</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                @foreach($products as $product)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ str_limit($product->name, 15, '...') }}</td>
                                    <td> {{ $product->sale_price ? '$' . $product->sale_price : 'Not Set' }}</td>
                                    <td> {{ $product->quantity ? $product->quantity : 'NOT SET' }}</td>
                                    <td>{{ $product->category->name }}</td>
                                    <td>
                                        {!! $product->status ? '<span class="badge bg-success p-2">Published</span>' : '<span class="badge bg-danger">NOT Published</span>' !!} 
                                    </td>
                                    <td>
                                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-info btn-sm text-white mr-2"><i class="fas fa-eye"></i></a>
                                        <a href="{{ route('products.edit', $product->id) }}" title="Edit" class="btn btn-info btn-sm text-white mr-2"><i class="fas fa-edit"></i></a>
                                        <a href="{{ route('products.destroy', $product->id) }}" title="DELETE" class="btn btn-sm btn-danger text-white product-delete"><i class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
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
    <script>
            var products = document.querySelectorAll('.product-delete');
            var deleteForm = document.getElementById('product-delete-form');
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
