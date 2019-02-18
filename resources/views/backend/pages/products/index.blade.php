@extends('backend.layouts.master')

@section('page-header', 'Products')
@section('page-title', 'Products')

@section('main-content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    @include('includes.alert')
                    <div class="card-header clearfix">
                        <h3 class="card-title float-left">All Products</h3>
                        <a href="{{ route('products.create') }}" class="btn btn-sm btn-success btn-flat text-white float-right">
                            <i class="fas fa-plus-circle"></i> Add New Product
                        </a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
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
                                    <td>$ {{ $product->sale_price }}</td>
                                    <td> {{ $product->quantity }}</td>
                                    <td>{{ $product->category->name }}</td>
                                    <td>{{ $product->category->name }}</td>
                                    <td>
                                        <span class="badge bg-danger">55%</span>
                                    </td>
                                    <td>
                                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-info btn-sm text-white mr-2"><i class="fas fa-eye"></i></a>
                                        <a href="{{ route('products.edit', $product->id) }}" title="Edit" class="btn btn-info btn-sm text-white mr-2"><i class="fas fa-edit"></i></a>
                                        <a href="{{ route('products.destroy', $product->id) }}" title="DELETE" class="btn btn-sm btn-danger text-white category-delete"><i class="fas fa-trash-alt"></i></a>
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
