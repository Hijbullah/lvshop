@extends('backend.layouts.master')

@section('page-header', 'Products')
@section('page-title', 'Products - Edit')

@section('main-content')
    <section class="content">
        <div class="container-fluid">
            <form action="{{ route('products.update', $product->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-lg-7 col-md-7 col-sm-12">
                        <div class="card card-primary">
                            <div class="card-header clearfix">
                                <h3 class="card-title float-left"></h3> Edit Product
                                <a href="{{ route('products.index') }}" class="btn btn-sm btn-success btn-flat text-white float-right">
                                    <i class="fas fa-backward"></i> Back To All Products
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="label"for="product_name">Product Name <small class="text-muted">(Must Provide)</small></label>
                                    <input type="text" id="product_name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') ? old('name') : $product->name }}" placeholder="Product Name" name="name" autofocus>
                                    @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">  
                                    <label class="label" for="product_slug">Slug <small class="text-muted">(Auto Generatd Or You can Provide your own)</small></label>
                                    <input type="text" id="product_slug" class="form-control{{ $errors->has('slug') ? ' is-invalid' : '' }}" value="{{ old('slug') ? old('slug') : $product->slug }}" placeholder="Product Slug" name="slug">
                                    @if ($errors->has('slug'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('slug') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                
                                <div class="form-group">
                                    <label class="label" for="product_short_desc">Short Description <small class="text-muted">(Must Provide)</small></label>  
                                    <textarea rows="4" name="short_description" id="product_short_desc" class="form-control{{ $errors->has('short_description') ? ' is-invalid' : '' }}" placeholder="Please type what you want...">{{ old('short_description') ? old('short_description') : $product->short_description }}" </textarea>
                                    @if ($errors->has('short_description'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('short_description') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="label" for="product_description">Product Description <small class="text-muted">(Can be Null)</small></label>  
                                
                                    <textarea name="description" id="product_description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" placeholder="Please type what you want...">
                                        {{ old('description') ? old('description') : $product->description }}"
                                    </textarea>
                                    @if ($errors->has('short_description'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('short_description') }}</strong>
                                        </span>
                                    @endif
                                </div>  
                                <div class="form-group">
                                    <label class="label" for="product_images">Other's Images <small class="text-primary">(Optional | You can upload Multiple Imagaes)</small></label> 
                                    <input type="file" class="form-control-file{{ $errors->has('images') ? ' is-invalid' : '' }}"  name="images[]" id="product_images" multiple>
                                    @if ($errors->has('images'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('images') }}</strong>
                                        </span>
                                    @endif
                                </div>   
                                <div class="checkbox">
                                    <input id="status" name="status" value="1" type="checkbox" class="flat-red" {{ $product->status ? 'checked' : '' }} >
                                    <label for="status">
                                        Published
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-dark">
                                    <div class="card-header">
                                        <h3 class="card-title">Additional Info</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">  
                                            <label class="label" for="product_sku">Product SKU <small class="text-muted">(Must Provide)</small></label> 
                                            <input type="text" id="product_sku" class="form-control{{ $errors->has('sku') ? ' is-invalid' : '' }}" value="{{ old('sku') ? old('sku') : $product->sku }}" placeholder="Product SKU" name="sku">
                                            @if ($errors->has('sku'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('sku') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group">  
                                            <label class="label" for="product_qty">Product Quantity</label> 
                                            <input type="number" id="product_qty" class="form-control{{ $errors->has('quantity') ? ' is-invalid' : '' }}" value="{{ old('quantity') ? old('quantity') : $product->quantity }}" placeholder="Quantity" name="quantity">
                                            @if ($errors->has('quantity'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('quantity') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group">  
                                            <label class="label" for="sale_price">Sale Price</label> 
                                            <input type="number" id="sale_price" class="form-control{{ $errors->has('sale_price') ? ' is-invalid' : '' }}" value="{{ old('sale_price') ? old('sale_price') : $product->sale_price }}" placeholder="Sale Price" name="sale_price">
                                            @if ($errors->has('sale_price'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('sale_price') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group">  
                                            <label class="label" for="price_after_discount">Price After Discound <small class="text-muted">(If any..)</small></label> 
                                            <input type="number" id="price_after_discount" class="form-control{{ $errors->has('price_after_discount') ? ' is-invalid' : '' }}" value="{{ old('price_after_discount') ? old('price_after_discount') : $product->price_after_discount }}" placeholder="Price After Discout" name="price_after_discount">
                                            @if ($errors->has('price_after_discount'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('price_after_discount') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card card-dark">
                                    <div class="card-header">
                                        <h3 class="card-title">Select Brand</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <select class="form-control" name="brand_id">
                                                @foreach ($brands as $brand)
                                                <option value="{{ $brand->id }}" {{ $product->brand_id === $brand->id ? 'selected' : '' }}> {{ $brand->name }} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card card-dark">
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
                                                            <input type="radio" {{ $category->id == $product->category_id ? 'checked' : '' }} class="flat-red" name="category_id" value="{{ $category->id }}">
                                                        </label>
                                                    </td>
                                                    <td>{{  $category->name }}</td>
                                                </tr>
                
                                                @if($category->children)
                                                    @foreach ($category->children as $category)
                                                    @include('backend.pages.products.category-edit-child', $category)
                                                    @endforeach
                                                @endif
                
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card card-dark">
                                    <div class="card-header clearfix">
                                        <h3 class="card-title">Featured Image</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <div class="feature_img">
                                                <img src="{{ asset($product->cover_img) }}" height="150" width="300" alt="Product Image">
                                            </div>
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
                                <div class="card card-dark">
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
                    <button class="btn btn-md btn-primary btn-flat">Update Product</button>
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
            placeholder: 'write here...',
            followingToolbar: false
        });
    });
</script>
@endpush