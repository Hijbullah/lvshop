@extends('backend.layouts.master')

@section('page-header', 'Suppliers')
@section('page-title', 'Suppliers - Add')

@section('main-content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card card-dark">
                        <form action="{{ route('suppliers.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-header clearfix">
                                <h3 class="card-title float-left">Add New Suppliers</h3> 
                                <a href="{{ route('suppliers.index') }}" class="btn btn-sm btn-default btn-flat text-dark float-right">
                                    <i class="fas fa-backward"></i> Back To All Suppliers
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="label"for="name">Supplier Name <small class="text-muted">(Must Provide)</small></label>
                                    <input type="text" id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') }}" placeholder="Product Name" name="name" autofocus>
                                    @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div> 

                                <div class="form-group">  
                                    <label class="label" for="slug">Slug <small class="text-muted">(Auto Generatd Or You can Provide your own)</small></label>
                                    <input type="text" id="slug" class="form-control{{ $errors->has('slug') ? ' is-invalid' : '' }}" value="{{ old('slug') }}" placeholder="Product Slug" name="slug">
                                    @if ($errors->has('slug'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('slug') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label class="label"for="email">Supplier Email <small class="text-muted">(Must Provide)</small></label>
                                    <input type="email" id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" placeholder="Email" name="email" autofocus>
                                    @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div> 

                                <div class="form-group">
                                    <label class="label"for="phone">Supplier Phone <small class="text-muted">(Must Provide)</small></label>
                                    <input type="tel" id="phone" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" value="{{ old('phone') }}" placeholder="Product Name" name="phone" autofocus>
                                    @if ($errors->has('phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                    @endif
                                </div> 

                                <div class="form-group">
                                    <label class="label" for="address">Address <small class="text-muted">(Must Provide)</small></label>  
                                    <textarea rows="4" name="address" id="address" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" placeholder="Please type what you want...">{{ old('address') }}</textarea>
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
                                    <button class="btn btn-md btn-dark btn-flat">Add New Supplier</button>
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
<script>
    
    $(document).ready(function() {
        //slug Activation
        $('#name').keyup(function () {
           var str = $(this).val();
           var trimmed = $.trim(str);
           var slug = trimmed.replace(/[^a-z0-9-]/gi, '-').replace(/-+/g, '-').replace(/^-|-$/g, '');
           $('#slug').val(slug.toLowerCase().substr(0, 100));
        });
    });
</script>
@endpush
