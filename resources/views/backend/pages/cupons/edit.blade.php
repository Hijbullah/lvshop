@extends('backend.layouts.master')

@section('page-header', 'Cupon')
@section('page-title', 'Cupons - Add')

@section('main-content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <a href="{{ route('cupons.index') }}" class="btn btn-md bg-dark text-white btn-flat float-right">
                        <i class="fas fa-hand-point-left"></i> Go Back
                    </a>
                </div>
                <div class="col-md-8 offset-md-2">
                    <div class="card card-dark">
                        <form action="{{ route('cupons.update', $cupon->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="card-header clearfix">
                                <h3 class="card-title float-left">Update | {{ $cupon->name }}</h3>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="label"for="name">Cupon Name <small class="text-muted">(Must Provide & Unique)</small></label>
                                    <input type="text" id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') ? old('name') : $cupon->name }}" placeholder="Cupon Name" name="name" autofocus>
                                    @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div> 
                                 <div class="form-group">  
                                    <label class="label" for="cupon_code">Cupon Code <small class="text-muted">(Auto Generatd Or You can Provide your own)</small></label>
                                    <input type="text" id="cupon_code" class="form-control{{ $errors->has('cupon_code') ? ' is-invalid' : '' }}" value="{{ old('cupon_code') ? old('cupon_code') : $cupon->cupon_code }}" placeholder="Cupon Code" name="cupon_code">
                                    @if ($errors->has('cupon_code'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('cupon_code') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="label"for="type">Type <small class="text-muted">(Must Provide)</small></label>
                                    <select name="type" id="type" class="form-control">
                                        <option {{ $cupon->type == 0 ? 'selected' :'' }} value="0">Amount</option>
                                        <option {{ $cupon->type == 1 ? 'selected' :'' }} value="1">Percentage</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label class="label"for="value">Cupon Value <small class="text-muted">(Must Provide)</small></label>
                                    <input type="number" min="0" id="value" class="form-control{{ $errors->has('value') ? ' is-invalid' : '' }}" value="{{ old('value') ? old('value') : $cupon->value }}" placeholder="Cupon Value" name="value" autofocus>
                                    @if ($errors->has('value'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('value') }}</strong>
                                    </span>
                                    @endif
                                </div> 

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer clearfix">
                                <div class="form-group float-right">
                                    <button class="btn btn-md btn-dark btn-flat">Update Cupon</button>
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
       
        $('#name').keyup(function () {
           var str = $(this).val();
           var trimmed = $.trim(str);
           var cuponCode = trimmed.replace(/[^a-z0-9-]/gi, '-').replace(/-+/g, '-').replace(/^-|-$/g, '');
           $('#cupon_code').val(cuponCode.toLowerCase().substr(0, 100));
        });
    });
</script>
@endpush
