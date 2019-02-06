@extends('backend.layouts.master')

@section('page-title', 'All Admins')

@section('main-content')
<section class="content">
    <div class="body_scroll">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>All</strong> Admins</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" > <i class="zmdi zmdi-plus"></i> </a>
                                </li>
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover c_table">
                                <thead>
                                <tr>
                                    <th style="width:60px;">Sl.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Registered At</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($admins as $admin)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $admin->name }}</td>
                                        <td>{{ $admin->email }}</td>
                                        <td>{{ $admin->created_at->diffForHumans() }}</td>
                                        <td><span class="badge badge-success">DONE</span></td>
                                        <td>
                                            <a href="javascript:void(0);" class="btn btn-info btn-sm waves-effect"><i class="zmdi zmdi-eye"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-success waves-effect waves-float btn-sm waves-light"><i class="zmdi zmdi-edit"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-danger waves-effect waves-float btn-sm waves-light"><i class="zmdi zmdi-delete"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
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

@endpush
