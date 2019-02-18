@extends('backend.layouts.master')

@section('page-title', 'User - Customers')

@section('page-header', 'User - Customers')

@section('main-content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    @include('includes.alert')
                    <div class="card-header ">
                        <h3 class="card-title">All Customers</h3>
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
                                </tr>
                                @foreach($customers as $customer)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $customer->name }}</td>
                                    <td>{{ $customer->email }}</td>
                                    <td> {{ $customer->created_at->diffForHumans() }}</td>
                                    <td>
                                        <span class="badge bg-success">Active</span> 
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


