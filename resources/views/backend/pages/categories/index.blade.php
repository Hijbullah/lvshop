
@extends('backend.layouts.master')

@section('page-title', 'Categories')
@section('page-header', 'Categories')

@section('main-content')
<section class="content">
    <div class="container-fluid">
        @include('includes.alert')
        <form action="{{ route('categories.store') }}" method="post">
            @csrf
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Add New Categories</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                
                                <div class="form-group">  
                                    <label class="label" for="category_name">Name <small class="text-muted">(Must Provide)</small></label> 
                                    <input type="text" id="category_name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') }}" placeholder="Category Name" name="name">
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">  
                                    <label class="label" for="category_slug">Slug <small class="text-muted">(Auto Generatd Or You can Provide your own)</small></label>
                                    <input type="text" id="category_slug" class="form-control{{ $errors->has('slug') ? ' is-invalid' : '' }}" value="{{ old('slug') }}" placeholder="Slug" name="slug">
                                    @if ($errors->has('slug'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('slug') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="label" for="category_cover">Cover Image <small class="text-primary">(Optional)</small></label> 
                                    <input type="file" class="form-control-file{{ $errors->has('cover_img') ? ' is-invalid' : '' }}" name="cover_img" id="category_cover">
                                    @if ($errors->has('cover_img'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('cover_img') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="label" for="category_desc">Description <small class="text-primary">(Optional)</small></label>  
                                    <div class="form-line">
                                        <textarea rows="4" name="description" id="category_desc" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" value="{{ old('description') }}" placeholder="Please type what you want..."></textarea>
                                    </div>
                                    @if ($errors->has('description'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                    @endif
                                </div>   
                                <div class="form-group">
                                        <label>
                                            <input type="checkbox" class="flat-red"  name="status" value="1" checked>
                                        </label>
                                        Published
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
                    <div class="card-header">
                        <h3 class="card-title">All Categories</h3>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th >Action</th>
                                </tr>
                                <tr>
                                    <td>
                                        <label>
                                            <input type="radio" class="flat-red" name="parent_id" value="0" checked>
                                        </label>
                                    </td>
                                    <td colspan="3">NO PARENT</td>
                                </tr>
                                @foreach ($categories as $category)
                                
                                <tr>
                                    <td> 
                                        <label>
                                            <input type="radio" class="flat-red" name="parent_id" value="{{ $category->id }}">
                                        </label>
                                    </td>
                                    <td>{{  $category->name }}</td>
                                    <td>
                                        {!! $category->status ? '<span class="badge bg-success">Published</span>' : '<span class="badge bg-danger">NOT Published</span>' !!} 
                                    </td>
                                    <td>
                                        <a href="#" title="Edit" class="btn btn-info btn-sm text-white mr-2"><i class="fas fa-edit"></i></a>
                                        <a href="{{ route('categories.destroy', $category->id) }}" title="DELETE" class="btn btn-sm btn-danger text-white category-delete"><i class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>

                                @if($category->children)
                                    @foreach ($category->children as $category)
                                    @include('backend.pages.categories.child', $category)
                                    @endforeach
                                @endif

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
    <form method="POST" id = "category-delete-form" style="display:none">
        @method('DELETE')
        @csrf
    </form>
</section>
@endsection

@push('page-css')
    <link rel="stylesheet" href="{{ asset('backend/plugins/iCheck/all.css') }}">
@endpush



@push('page-scripts')
    <script src="{{ asset('backend/plugins/iCheck/icheck.min.js') }}"></script>
    <script>
        
        (function(){
            var categories = document.querySelectorAll('.category-delete');
            var deleteForm = document.getElementById('category-delete-form');
            for(var category of Array.from(categories)) {
                category.addEventListener('click', function(event) {
                    event.preventDefault();
                    var action = this.href;
                    deleteForm.action = action;
                    deleteForm.submit();
                });

            }
        })();

        $('#category_name').keyup(function () {
           
            var str = $(this).val();
            var trimmed = $.trim(str);
            var slug = trimmed.replace(/[^a-z0-9-]/gi, '-').replace(/-+/g, '-').replace(/^-|-$/g, '');
            $('#category_slug').val(slug.toLowerCase().substr(0, 100));
        });


    
    $(function() {

        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
        checkboxClass: 'icheckbox_flat-green',
        radioClass   : 'iradio_flat-green'
        })
    });

    </script>
@endpush
