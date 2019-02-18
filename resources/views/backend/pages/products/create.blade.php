@extends('backend.layouts.master')

@section('page-header', 'Products')
@section('page-title', 'Products - Add')

@section('main-content')
    <section class="content">
        <div class="container-fluid">
            <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-lg-7 col-md-7 col-sm-12">
                        <div class="card card-primary">
                            <div class="card-header clearfix">
                                <h3 class="card-title float-left"></h3> Add New Product
                                <a href="{{ route('products.index') }}" class="btn btn-sm btn-success btn-flat text-white float-right">
                                    <i class="fas fa-backward"></i> Back To All Products
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="label"for="product_name">Product Name <small class="text-muted">(Must Provide)</small></label>
                                    <input type="text" id="product_name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') }}" placeholder="Product Name" name="name" autofocus>
                                    @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">  
                                    <label class="label" for="product_slug">Slug <small class="text-muted">(Auto Generatd Or You can Provide your own)</small></label>
                                    <input type="text" id="product_slug" class="form-control{{ $errors->has('slug') ? ' is-invalid' : '' }}" value="{{ old('slug') }}" placeholder="Product Slug" name="slug">
                                    @if ($errors->has('slug'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('slug') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                
                                <div class="form-group">
                                    <label class="label" for="product_short_desc">Short Description <small class="text-muted">(Must Provide)</small></label>  
                                    <textarea rows="4" name="short_description" id="product_short_desc" class="form-control{{ $errors->has('short_description') ? ' is-invalid' : '' }}" value="{{ old('short_description') }}" placeholder="Please type what you want..."></textarea>
                                    @if ($errors->has('short_description'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('short_description') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="label" for="product_description">Product Description <small class="text-muted">(Can be Null)</small></label>  
                                
                                    <textarea name="description" id="product_description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" value="{{ old('description') }}" placeholder="Please type what you want..."></textarea>
                                    @if ($errors->has('short_description'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('short_description') }}</strong>
                                        </span>
                                    @endif
                                </div>  
                                <div class="form-group">
                                    <label class="label" for="product_images">Other's Images <small class="text-primary">(Optional | You can upload Multiple Imagaes)</small></label> 
                                    <input type="file" class="form-control-file{{ $errors->has('images') ? ' is-invalid' : '' }}" value="{{ old('images') }}" name="images[]" id="product_images" multiple>
                                    @if ($errors->has('images'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('images') }}</strong>
                                        </span>
                                    @endif
                                </div>   
                                <div class="checkbox">
                                    <input id="status" name="status" value="1" type="checkbox" class="flat-red" checked>
                                    <label for="status">
                                        Published
                                    </label>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer clearfix">
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-default">
                                    <div class="card-header">
                                        <h3 class="card-title">Pricing & Quantity</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">  
                                            <label class="label" for="product_qty">Product Quantity</label> 
                                            <input type="number" id="product_qty" class="form-control{{ $errors->has('quantity') ? ' is-invalid' : '' }}" value="{{ old('quantity') }}" placeholder="Quantity" name="quantity">
                                            @if ($errors->has('quantity'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('quantity') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">  
                                                    <label class="label" for="unit_price">New Price</label> 
                                                    <input type="number" id="unit_price" class="form-control{{ $errors->has('unit_price') ? ' is-invalid' : '' }}" value="{{ old('unit_price') }}" placeholder="Purchase Price" name="unit_price">
                                                    @if ($errors->has('unit_price'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('unit_price') }}</strong>
                                                </span>
                                            @endif
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">  
                                                    <label class="label" for="sale_price">Old Price</label> 
                                                    <input type="number" id="sale_price" class="form-control{{ $errors->has('sale_price') ? ' is-invalid' : '' }}" value="{{ old('sale_price') }}" placeholder="Sale Price" name="sale_price">
                                                    @if ($errors->has('sale_price'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('sale_price') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">  
                                            <label class="label" for="discount_price">Discounted Price</label> 
                                            <input type="number" id="discount_price" class="form-control{{ $errors->has('discount_price') ? ' is-invalid' : '' }}" value="{{ old('discount_price') }}" placeholder="Price After Discout" name="discount_price">
                                            @if ($errors->has('discount_price'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('discount_price') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card card-danger">
                                    <div class="card-header">
                                        <h3 class="card-title">Select Categories</h3>
                                    </div>
                                    <div class="card-body categories-product">
                                        <table class="table table-striped">
                                            <tbody>
                                                <tr>
                                                    <th style="width: 10px">#</th>
                                                    <th>Name</th>
                                                </tr>                                          
                                                @foreach ($categories as $category)
                                                <tr>
                                                    <td> 
                                                        <label>
                                                            <input type="radio" {{ $loop->index == 0 ? 'checked' : '' }} class="flat-red" name="category_id" value="{{ $category->id }}">
                                                        </label>
                                                    </td>
                                                    <td>{{  $category->name }}</td>
                                                </tr>
                
                                                @if($category->children)
                                                    @foreach ($category->children as $category)
                                                    @include('backend.pages.products.category-child', $category)
                                                    @endforeach
                                                @endif
                
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card card-info">
                                    <div class="card-header clearfix">
                                        <h3 class="card-title">Featured Image</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label class="label" for="product_cover">Cover Image <small class="text-muted">(Must Provide)</small></label> 
                                            <input type="file" class="form-control-file{{ $errors->has('cover_img') ? ' is-invalid' : '' }}" value="{{ old('cover_img') }}" name="cover_img" id="product_cover">
                                            @if ($errors->has('cover_img'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('cover_img') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card card-success">
                                    <div class="card-header clearfix">
                                        <h3 class="card-title">SEO Content</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">  
                                            <label class="label" for="seo_title">SEO Friendly Title</label> 
                                            <input type="text" id="seo_title" class="form-control{{ $errors->has('seo_title') ? ' is-invalid' : '' }}" value="{{ old('seo_title') }}" placeholder="Title" name="seo_title">
                                        </div>
                                        <div class="form-group">  
                                            <label class="label" for="seo_description">SEO friendly Description</label>
                                            <textarea rows="4" name="seo_description" id="seo_description" class="form-control{{ $errors->has('seo_description') ? ' is-invalid' : '' }}" value="{{ old('seo_description') }}" placeholder="Please type what you want..."></textarea> 
                                        </div>
                                        <div class="form-group">
                                            <label class="label" for="seo_keywords">KeyWords <small class="text-primary">(You can enter multiple key word)</small></label>  
                                            <input type="text" id="seo_keywords" class="form-control{{ $errors->has('seo_keywords') ? ' is-invalid' : '' }}" value="{{ old('seo_keywords') }}" data-role="tagsinput" placeholder="Enter keywords" name="seo_keywords">
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group text-center">
                    <button class="btn btn-md btn-primary btn-flat">Add New Product</button>
                </div>
            </form>    
        </div>
    </section> 
@endsection

@push('page-css')
<style>
    .categories-product {
        max-height: 300px;
        overflow: auto;
    }
</style>

<link rel="stylesheet" href="{{ asset('backend/plugins/iCheck/all.css') }}">
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
{{-- <link rel="stylesheet" href="{{ asset('backend/plugins/summernote/dist/summernote.css') }}"> --}}
{{-- <link rel="stylesheet" href="{{ asset('backend/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}"> --}}
@endpush



@push('page-scripts')
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>
<script src="{{ asset('backend/plugins/iCheck/icheck.min.js') }}"></script>
{{-- <script src="{{ asset('backend/plugins/summernote/dist/summernote.js') }} "></script> --}}
{{-- <script src="{{ asset('backend/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') }} "></script> --}}

<script>
    
    $(document).ready(function() {
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
            checkboxClass: 'icheckbox_flat-green',
            radioClass   : 'iradio_flat-green'
        })
        //slug Activation
        $('#product_name').keyup(function () {
           var str = $(this).val();
           var trimmed = $.trim(str);
           var slug = trimmed.replace(/[^a-z0-9-]/gi, '-').replace(/-+/g, '-').replace(/^-|-$/g, '');
           $('#product_slug').val(slug.toLowerCase().substr(0, 100));
        });
      
        $('#product_description').summernote({
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['style']],
                ['font', ['fontsize', 'color']],
                ['font', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['fontname']],
                ['para', ['paragraph', 'ol', 'ul', 'height']],
                ['insert', ['link','picture',  'table', 'hr', 'video']], // image and doc are customized buttons
                ['misc', ['undo', 'redo', 'codeview', 'fullscreen', 'help']],
            ],
            height: 300,
            placeholder: 'write here...'
        });
    });
</script>
@endpush
