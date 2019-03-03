@extends('backend.layouts.master')

@section('page-title', 'Brands')
@section('page-header', 'Brands')

@section('main-content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mb-3">
                <a href="{{ route('brands.create') }}" class="btn btn-mb bg-dark text-white btn-flat float-right">
                    <i class="fas fa-plus-circle"></i> Add New Brand
                </a>
            </div>
            <div class="col-lg-12">
                <div class="card card-dark">
                    @include('includes.alert')
                    <div class="card-header clearfix pt-3">
                        <h3 class="card-title float-left">All Brands</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>GBIN</th>
                                        <th>Name</th>
            
                                        <th class="text-center" width="170px">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($brands as $brand)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $brand->gbin }}</td>
                                        <td>{{ $brand->name }}</td>
                
                                        <td>
                                            <a href="{{ route('brands.show', $brand->id) }}" title="view" class="btn btn-success btn-sm text-white"><i class="fas fa-eye"></i></a>
                                            <a href="{{ route('brands.edit', $brand->id) }}" title="Edit" class="btn btn-default btn-sm text-dark"><i class="fas fa-edit"></i></a>
                                            <a href="{{ route('brands.destroy', $brand->id) }}" title="DELETE" class="btn btn-sm btn-warning text-dark brand-delete"><i class="fas fa-trash-alt"></i></a>
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
                <form method="POST" id = "delete-form" style="display:none">
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
    (function(){
        var brands = document.querySelectorAll('.brand-delete');
        var deleteForm = document.getElementById('delete-form');
        for(var brand of Array.from(brands)) {
            brand.addEventListener('click', function(event) {
                event.preventDefault();
                var action = this.href;
                deleteForm.action = action;
                deleteForm.submit();
            });

        }
    })();
</script>

@endpush

