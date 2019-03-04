@extends('backend.layouts.master')

@section('page-title', 'Cupon')
@section('page-header', 'Cupon')

@section('main-content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mb-3">
                <a href="{{ route('cupons.create') }}" class="btn btn-md bg-dark text-white btn-flat float-right">
                    <i class="fas fa-plus-circle"></i> Add New Cupon
                </a>
            </div>
            <div class="col-lg-12">
                <div class="card card-dark">
                    @include('includes.alert')
                    <div class="card-header clearfix pt-3">
                        <h3 class="card-title float-left">All Cupon</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Name</th>
                                        <th>Cupon Code</th>
                                        <th>Type</th>
                                        <th>Value</th>
                                        <th class="text-center" width="170px">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($cupons as $cupon)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $cupon->name }}</td>
                                        <td>{{ $cupon->cupon_code }}</td>
                                        <td>{{ $cupon->type == 0 ? 'Amount' : 'Percentage'}}</td>
                                        <td>{{ $cupon->type == 1 ? number_format($cupon->value, 0) : $cupon->value }}</td>
                                        <td>
                                            <a href="{{ route('cupons.show', $cupon->id) }}" title="view" class="btn btn-success btn-sm text-white"><i class="fas fa-eye"></i></a>
                                            <a href="{{ route('cupons.edit', $cupon->id) }}" title="Edit" class="btn btn-default btn-sm text-dark"><i class="fas fa-edit"></i></a>
                                            <a href="{{ route('cupons.destroy', $cupon->id) }}" title="DELETE" class="btn btn-sm btn-warning text-dark cupon-delete"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
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
        var cupons = document.querySelectorAll('.cupon-delete');
        var deleteForm = document.getElementById('delete-form');
        for(var cupon of Array.from(cupons)) {
            cupon.addEventListener('click', function(event) {
                event.preventDefault();
                var action = this.href;
                deleteForm.action = action;
                deleteForm.submit();
            });
        }
    })();
</script>

@endpush

