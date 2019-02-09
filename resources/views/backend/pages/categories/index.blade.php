
@extends('backend.layouts.master')

@section('page-title', 'Categories')

@section('main-content')
<section class="content" id="categories">
    <div class="body_scroll">
        <div class="container-fluid">
            <form action="{{ route('categories.store') }}" method="post">
                @csrf
                <div class="row clearfix">
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <div class="card">
                            <div class="header">
                                <h2><strong>Add New</strong> Category</h2>
                            </div>
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        
                                        <div class="form-group">  
                                            <label class="label" for="category_name">Name <small class="text-muted">(Must Provide)</small></label> 
                                            <input type="text" id="category_name" class="form-control" placeholder="Category Name" name="name">
                                        </div>
                                        <div class="form-group">  
                                            <label class="label" for="category_slug">Slug <small class="text-muted">(Auto Generatd Or You can Provide your own)</small></label>
                                            <input type="text" id="category_slug" class="form-control" placeholder="Slug" name="slug">
                                        </div>
                                        <div class="form-group">
                                            <label class="label" for="category_cover">Cover Image <small class="text-primary">(Optional)</small></label> 
                                            <input type="file" class="form-control" name="cover_img" id="category_cover">
                                        </div>
                                        <div class="form-group">
                                            <label class="label" for="category_desc">Description <small class="text-primary">(Optional)</small></label>  
                                            <div class="form-line">
                                                <textarea rows="4" name="description" id="category_desc" class="form-control" placeholder="Please type what you want..."></textarea>
                                            
                                            </div>
                                        </div>   
                                        <div class="checkbox">
                                            <input id="status" name="status" value="1" type="checkbox" checked>
                                            <label for="status">
                                                Published
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-raised btn-primary btn-round  float-right">ADD NEW </button>
                                        </div>
                                    
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12">
                        <div class="card">
                            <div class="header">
                                <h2><strong>All</strong> Categories</h2>
                                <small class="text-primary">(If new Category belongs to another, you must select a parent)</small>
                            </div>
                            <div class="body">
                                <div class="categories">
                                        <div class="category">
                                            <div class="radio">
                                                <input type="radio" id="cat-none" checked value="0" name="parent_id">
                                                <label for="cat-none"> NO PARENT </label>
                                            </div>
                                        </div>
                                        @foreach ($categories as $category)
                                            <ul class="category">
                                                <li>
                                                    <div class="radio">
                                                        <input type="radio" name="parent_id" id="{{ $category->id }}" value="{{ $category->id }}">
                                                        <label for="{{ $category->id }}"> {{ $category->name }} </label>
                                                    </div>
                                                    @if (count($category->children) > 0)
                                                        @foreach($category->children as $category)
                                                            @include('backend.pages.categories.child', $category)
                                                        @endforeach
                                                    @endif
                                                </li>
                                               
                                            </ul>
                                        
                                        @endforeach
                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection

@push('page-css')

@endpush



@push('page-scripts')
    <script>
        $('#category_name').keyup(function () {
           
            var str = $(this).val();
            var trimmed = $.trim(str);
            var slug = trimmed.replace(/[^a-z0-9-]/gi, '-').replace(/-+/g, '-').replace(/^-|-$/g, '');
            $('#category_slug').val(slug.toLowerCase().substr(0, 100));
        });
    </script>
@endpush
