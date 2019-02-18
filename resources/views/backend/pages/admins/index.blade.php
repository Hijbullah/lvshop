@extends('backend.layouts.master')

@section('page-title', 'User - Admins')

@section('page-header', 'User - Admins')

@section('main-content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    @include('includes.alert')
                    <div class="card-header clearfix">
                        <h3 class="card-title float-left">All Admins</h3>
                        <a href="{{ route('admins.create') }}" class="btn btn-sm btn-success btn-flat text-white float-right">
                            <i class="fas fa-plus-circle"></i> Add New Admin
                        </a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Created At</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                @foreach($admins as $admin)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $admin->name }}</td>
                                    <td>$ {{ $admin->email }}</td>
                                    <td> {{ $admin->created_at->diffForHumans() }}</td>
                                    <td>
                                        <span class="badge bg-success">Active</span> 
                                    </td>
                                    <td>
                                        <a href="{{ route('admins.show', $admin->id) }}" class="btn btn-info btn-sm text-white mr-2"><i class="fas fa-eye"></i></a>
                                        <a href="{{ route('admins.edit', $admin->id) }}" title="Edit" class="btn btn-info btn-sm text-white mr-2"><i class="fas fa-edit"></i></a>
                                        <a href="{{ route('admins.destroy', $admin->id) }}" title="DELETE" class="btn btn-sm btn-danger text-white product-delete"><i class="fas fa-trash-alt"></i></a>
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
    
@endpush


