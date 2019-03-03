@extends('backend.layouts.master')

@section('page-header', 'Brands')
@section('page-title', 'Brands - Add')

@section('main-content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <a href="{{ route('brands.index') }}" class="btn btn-mb bg-dark text-white btn-flat float-right">
                        <i class="fas fa-plus-circle"></i> Go Back
                    </a>
                </div>
                <div class="col-md-8 offset-md-2">
                    <div class="card card-dark">
                        <form action="{{ route('brands.store') }}" method="post">
                            @csrf
                            <div class="card-header clearfix">
                                <h3 class="card-title float-left">Add New Brand</h3> 
                                
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="label"for="gbin">GBIN <small class="text-muted">(Must Provide)</small></label>
                                    <input type="text" id="gbin" class="form-control{{ $errors->has('gbin') ? ' is-invalid' : '' }}" value="{{ old('gbin') }}" placeholder="Global Brand Identification Number" name="gbin" autofocus>
                                    @if ($errors->has('gbin'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('gbin') }}</strong>
                                    </span>
                                    @endif
                                </div> 
                                <div class="form-group">  
                                    <label class="label" for="name">Brand Name <small class="text-muted">(Must Provide)</small></label>
                                    <input type="text" id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') }}" placeholder="Brand Name" name="name">
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">  
                                    <label class="label" for="slug">Slug <small class="text-muted">(Auto Generatd Or You can Provide your own)</small></label>
                                    <input type="text" id="slug" class="form-control{{ $errors->has('slug') ? ' is-invalid' : '' }}" value="{{ old('slug') }}" placeholder="Brand Slug" name="slug">
                                    @if ($errors->has('slug'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('slug') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer clearfix">
                                <div class="form-group float-right">
                                    <button class="btn btn-md btn-dark btn-flat">Add New Brand</button>
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
