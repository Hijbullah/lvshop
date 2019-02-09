
@extends('backend.layouts.master')

@section('page-title', 'Blank Page')

@section('main-content')
<section class="content">
    <div class="body_scroll">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Stater</strong> page</h2>
                        </div>
                        <div class="body">
                            <h5>Stater page</h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <form action="" method="post">

                                @csrf
                                           
                                <div class="form-group">  
                                    <label class="label" for="category_name">Name</label>                                  
                                    <input type="text"  id="category_name" class="form-control" placeholder="Category Name" name="name">
                                   
                                </div>
                                <div class="form-group">  
                                    <label class="label" for="category_slug">Slug</label>                                   
                                    <input type="text" id="category_slug" class="form-control" placeholder="Slug" name="slug">
                                    
                                </div>
                                <div class="form-group">
                                    <label class="label" for="category_parent">Parent</label>   
                                    
                                    <select  class="form-control" id="category_parent" name="parent_id">
                                        <option value="0">No Parents</option>
                                        <option value="1">Burger, Shake and a Smile</option>
                                        <option value="2">Sugar, Spice and all things nice</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="label" for="category_desc">Description</label>  
                                    <div class="form-line">
                                        <textarea  rows="4" name="description" id="category_desc" class="form-control" placeholder="Please type what you want..."></textarea>
            
                                    </div>
                                </div>   
                                <div class="checkbox">
                                    <input id="status" name="status" type="checkbox">
                                    <label for="status">
                                        Published
                                    </label>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-raised btn-primary btn-round  float-right">ADD NEW </button>
                                </div>
                            </form>
                       
                        </div>
                    </div>
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
