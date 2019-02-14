@extends('backend.layouts.master')

@section('page-title', 'Products - Add')

@section('main-content')
    <section class="content">
        <div class="body_scroll">
            <div class="container-fluid">
                <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row clearfix">
                        <div class="col-sm-12 col-md-7 col-lg-7">
                            <div class="card">
                                <div class="header clearfix">
                                    <h2 class="float-left"><strong>Add </strong> Products</h2>
                                    <a href="{{ route('products.index') }}" class="btn btn-sm btn-success float-right">Back to All Products</a>
                                </div>
                                <div class="body">
                                    <div class="form-group">  
                                        <label class="label" for="product_name">Product Name <small class="text-muted">(Must Provide)</small></label> 
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
                                        <div class="form-line">
                                            <textarea rows="4" name="short_description" id="product_short_desc" class="form-control{{ $errors->has('short_description') ? ' is-invalid' : '' }}" value="{{ old('short_description') }}" placeholder="Please type what you want..."></textarea>
                                            @if ($errors->has('short_description'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('short_description') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                       
                                    </div>
                                    <div class="form-group">
                                        <label class="label" for="product_description">Product Description <small class="text-muted">(Can be Null)</small></label>  
                                        <div class="form-line">
                                            <textarea name="description" id="product_description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" value="{{ old('description') }}" placeholder="Please type what you want..."></textarea>
                                            @if ($errors->has('short_description'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('short_description') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>  
                                    <div class="form-group">
                                        <label class="label" for="product_images">Other's Images <small class="text-primary">(Optional | You can upload Multiple Imagaes)</small></label> 
                                        <input type="file" class="form-control{{ $errors->has('images') ? ' is-invalid' : '' }}" value="{{ old('images') }}" name="images[]" id="product_images" multiple>
                                        @if ($errors->has('images'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('images') }}</strong>
                                            </span>
                                        @endif
                                    </div>   
                                    <div class="checkbox">
                                        <input id="status" name="status" value="1" type="checkbox" checked>
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
                                    <div class="card">
                                        <div class="header">
                                            <h2><strong>Product Pricing & Quantity</strong> Info</h2>
                                        </div>
                                        <div class="body">
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
                                            {{-- <div class="form-group">  
                                                <label class="label" for="discount_price">Discounted Price</label> 
                                                <input type="number" id="discount_price" class="form-control{{ $errors->has('discount_price') ? ' is-invalid' : '' }}" value="{{ old('discount_price') }}" placeholder="Price After Discout" name="discount_price">
                                                @if ($errors->has('discount_price'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('discount_price') }}</strong>
                                                    </span>
                                                @endif
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="header">
                                            <h2><strong>Select</strong> Category</h2>
                                        </div>
                                        <div class="body">
                                            <div class="categories">
                                                    @foreach ($categories as $category)
                                                        <ul class="category">
                                                            <li>
                                                                <div class="radio">
                                                                    <input type="radio" name="category_id" id="{{ $category->id }}" value="{{ $category->id }}"
                                                                        @if ($loop->index == 0)
                                                                            {{ 'checked' }}
                                                                        @endif
                                                                    >
                                                                    <label for="{{ $category->id }}"> {{ $category->name }} </label>
                                                                </div>
                                                                @if (count($category->children) > 0)
                                                                    @foreach($category->children as $category)
                                                                        @include('backend.pages.products.category-child', $category)
                                                                    @endforeach
                                                                @endif
                                                            </li>
                                                            
                                                        </ul>
                                                    
                                                    @endforeach
                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="header">
                                            <h2><strong>Featured</strong> Image</h2>
                                        </div>
                                        <div class="body">
                                            <div class="form-group">
                                                <label class="label" for="product_cover">Cover Image <small class="text-muted">(Must Provide)</small></label> 
                                                <input type="file" class="form-control{{ $errors->has('cover_img') ? ' is-invalid' : '' }}" value="{{ old('cover_img') }}" name="cover_img" id="product_cover">
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
                                    <div class="card">
                                        <div class="header">
                                            <h2><strong>Seo</strong> Content</h2>
                                        </div>
                                        <div class="body">
                                            <div class="form-group">  
                                                <label class="label" for="seo_title">SEO Friendly Title</label> 
                                                <input type="text" id="seo_title" class="form-control{{ $errors->has('seo_title') ? ' is-invalid' : '' }}" value="{{ old('seo_title') }}" placeholder="Title" name="seo_title">
                                            </div>
                                            <div class="form-group">  
                                                <label class="label" for="seo_description">SEO friendly Description</label>
                                                <div class="form-line">
                                                    <textarea rows="4" name="seo_description" id="seo_description" class="form-control{{ $errors->has('seo_description') ? ' is-invalid' : '' }}" value="{{ old('seo_description') }}" placeholder="Please type what you want..."></textarea> 
                                                </div>
                                    
                                            </div>
                                            <div class="form-group">
                                                <label class="label" for="seo_keywords">KeyWords <small class="text-primary">(You can enter multiple key word)</small></label>  
                                                <div class="product form-line">
                                                    <input type="text" id="seo_keywords" class="form-control{{ $errors->has('seo_keywords') ? ' is-invalid' : '' }}" value="{{ old('seo_keywords') }}" data-role="tagsinput" placeholder="Enter keywords" name="seo_keywords">
                                                </div>
                                                
                                            </div>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-lg btn-raised btn-primary btn-round">ADD NEW </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    
@endsection

@push('page-css')
<style>
    .product.form-line {
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 5px 0px;
    }
    * ul {
        list-style: none;
        margin: 0px;
        padding: 0px;
    }
    ul li ul li {
        padding-left: 25px;
    }
</style>
<link rel="stylesheet" href="{{ asset('backend/plugins/summernote/dist/summernote.css') }}">
<link rel="stylesheet" href="{{ asset('backend/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}">
@endpush



@push('page-scripts')
<script src="{{ asset('backend/plugins/summernote/dist/summernote.js') }} "></script>
<script src="{{ asset('backend/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') }} "></script>

<script>
    
    $(document).ready(function() {
        //slug Activation
        $('#product_name').keyup(function () {
           var str = $(this).val();
           var trimmed = $.trim(str);
           var slug = trimmed.replace(/[^a-z0-9-]/gi, '-').replace(/-+/g, '-').replace(/^-|-$/g, '');
           $('#product_slug').val(slug.toLowerCase().substr(0, 100));
        });
        // Summernote
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
