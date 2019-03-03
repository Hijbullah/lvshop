@extends('backend.layouts.master')

@section('page-title', 'Receiving')
@section('page-header', 'Receiving')

@section('main-content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mb-3">
                <a href="{{ url('admin/receivings') }}" class="btn btn-md bg-white text-dark btn-flat float-right">
                    <i class="fas fa-hand-point-left"></i> Go Back
                </a>
            </div>
            <div class="col-lg-12">
                <div class="card card-dark">
                    @include('includes.alert')
                    <div class="card-header clearfix pt-3">
                        <h3 class="card-title float-left">New Receiving</h3>
                    </div>
                    <div class="card-body">
                        <purchase-create></purchase-create> 
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

