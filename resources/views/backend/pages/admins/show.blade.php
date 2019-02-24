@extends('backend.layouts.master') 
@section('page-title', 'admin') 
@section('page-header', 'Admin | ' . $admin->name) 
@section('main-content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="{{ asset('backend/img/user4-128x128.jpg') }}" alt="User profile picture">
                        </div>
                        <h3 class="profile-username text-center">{{ $admin->name }}</h3>
                        <p class="text-muted text-center">admin role</p>
                    </div>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                 <!-- About Me Box -->
                 <div class="card card-primary">
                    <div class="card-header clearfix">
                        <h3 class="card-title float-left">Admin Info</h3>
                        <a href="{{ route('admins.index') }}" class="btn btn-sm btn-success btn-flat float-right">Back to All Admins</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <strong><i class="fa fa-book mr-1"></i> Education</strong>

                        <p class="text-muted">
                            B.S. in Computer Science from the University of Tennessee at Knoxville
                        </p>

                        <hr>

                        <strong><i class="fa fa-map-marker mr-1"></i> Location</strong>

                        <p class="text-muted">Malibu, California</p>

                        <hr>

                        <strong><i class="fa fa-pencil mr-1"></i> Skills</strong>

                        <p class="text-muted">
                            <span class="tag tag-danger">UI Design</span>
                            <span class="tag tag-success">Coding</span>
                            <span class="tag tag-info">Javascript</span>
                            <span class="tag tag-warning">PHP</span>
                            <span class="tag tag-primary">Node.js</span>
                        </p>

                        <hr>

                        <strong><i class="fa fa-file-text-o mr-1"></i> Notes</strong>

                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
    
</section>
@endsection
 @push('page-css') 
@endpush @push('page-scripts') 
@endpush