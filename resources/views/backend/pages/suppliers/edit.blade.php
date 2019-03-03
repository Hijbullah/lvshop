@extends('backend.layouts.master')

@section('page-header', 'Suppliers')
@section('page-title', 'Suppliers - Edit')

@section('main-content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <a href="{{ route('suppliers.index') }}" class="btn btn-md bg-dark text-white btn-flat float-right">
                        <i class="fas fa-hand-point-left"></i> Go Back
                    </a>
                </div>
                
                <div class="col-md-8 offset-md-2">
                    <div class="card card-dark">
                        <form action="{{ route('suppliers.update', $supplier->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="card-header clearfix">
                                <h3 class="card-title float-left">Update | {{ $supplier->name }}</h3> 
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="label"for="name">Supplier Name <small class="text-muted">(Must Provide)</small></label>
                                    <input type="text" id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ $supplier->name ? $supplier->name : old('name') }}" placeholder="Product Name" name="name" autofocus>
                                    @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div> 

                                <div class="form-group">  
                                    <label class="label" for="slug">Slug <small class="text-muted">(Auto Generatd Or You can Provide your own)</small></label>
                                    <input type="text" id="slug" class="form-control" value="{{ $supplier->slug }}" placeholder="Product Slug" name="slug" readonly>
                                </div>

                                <div class="form-group">
                                    <label class="label"for="email">Supplier Email <small class="text-muted">(Must Provide)</small></label>
                                    <input type="email" id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ $supplier->email ? $supplier->email : old('email') }}" placeholder="Email" name="email" autofocus>
                                    @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div> 

                                <div class="form-group">
                                    <label class="label"for="phone">Supplier Phone <small class="text-muted">(Must Provide)</small></label>
                                    <input type="tel" id="phone" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" value="{{ $supplier->phone ? $supplier->phone : old('phone') }}" placeholder="Phone" name="phone" autofocus>
                                    @if ($errors->has('phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                    @endif
                                </div> 

                                <div class="form-group">
                                    <label class="label" for="address">Address <small class="text-muted">(Must Provide)</small></label>  
                                    <textarea rows="4" name="address" id="address" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" placeholder="Please type what you want...">{{ $supplier->address ? $supplier->address : old('address') }}</textarea>
                                    @if ($errors->has('address'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('address') }}</strong>
                                        </span>
                                    @endif
                                </div> 
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer clearfix">
                                <div class="form-group float-right">
                                    <button class="btn btn-md btn-dark btn-flat">Update Supplier</button>
                                </div>
                            </div>
                        </form>
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
