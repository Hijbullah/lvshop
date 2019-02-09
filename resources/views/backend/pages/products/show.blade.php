@extends('backend.layouts.master')

@section('page-title', 'Products')

@section('main-content')
<section class="content">
    <div class="body_scroll">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="body">
                            <div class="row">
                                <div class="col-xl-3 col-lg-4 col-md-12">
                                    <div class="preview preview-pic tab-content">
                                        <div class="tab-pane active" id="product_1"><img src="{{ asset('backend/images/ecommerce/1.png')}}" class="img-fluid" alt="" /></div>
                                        <div class="tab-pane" id="product_2"><img src="{{asset('backend/images/ecommerce/2.png')}}" class="img-fluid" alt=""/></div>
                                        <div class="tab-pane" id="product_3"><img src="{{asset('backend/images/ecommerce/3.png')}}" class="img-fluid" alt=""/></div>
                                        <div class="tab-pane" id="product_4"><img src="{{asset('backend/images/ecommerce/4.png')}}" class="img-fluid" alt=""/></div>
                                    </div>
                                    <ul class="preview thumbnail nav nav-tabs">
                                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#product_1"><img src="{{asset('backend/images/ecommerce/1.png')}}" alt=""/></a></li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#product_2"><img src="{{asset('backend/images/ecommerce/2.png')}}" alt=""/></a></li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#product_3"><img src="{{asset('backend/images/ecommerce/3.png')}}" alt=""/></a></li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#product_4"><img src="{{asset('backend/images/ecommerce/4.png')}}" alt=""/></a></li>                                    
                                    </ul>                
                                </div>
                                <div class="col-xl-9 col-lg-8 col-md-12">
                                    <div class="product details">
                                        <h3 class="product-title mb-0">Simple Black Clock</h3>
                                        <h5 class="price mt-0">Current Price: <span class="col-amber">$180</span></h5>
                                        <h6 class="price mt-0">Purchase Price: <span class="text-danger"><del>$280</del></span></h6>
                                        <hr>
                                        <p class="product-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="body">
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#description">Description</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#review">Review</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#about">About</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="body">                            
                            <div class="tab-content">
                                <div class="tab-pane active" id="description">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                </div>
                                <div class="tab-pane" id="review">
                                    
                                    <ul class="row list-unstyled c_review mt-4">
                                        <li class="col-12">
                                            <div class="avatar">
                                                <a href="javascript:void(0);"><img class="rounded" src="{{asset('backend/images/xs/avatar2.jpg')}}" alt="user" width="60"></a>
                                            </div>                                
                                            <div class="comment-action">
                                                <h5 class="c_name">Hossein Shams</h5>
                                                <p class="c_msg mb-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. </p>
                                                <div class="badge badge-primary">iPhone 8</div>
                                                <span class="m-l-10">
                                                    <a href="javascript:void(0);"><i class="zmdi zmdi-star col-amber"></i></a>
                                                    <a href="javascript:void(0);"><i class="zmdi zmdi-star col-amber"></i></a>
                                                    <a href="javascript:void(0);"><i class="zmdi zmdi-star col-amber"></i></a>
                                                    <a href="javascript:void(0);"><i class="zmdi zmdi-star col-amber"></i></a>
                                                    <a href="javascript:void(0);"><i class="zmdi zmdi-star-outline text-muted"></i></a>
                                                </span>
                                                <small class="comment-date float-sm-right">Dec 21, 2019</small>
                                            </div>                                
                                        </li>
                                        <li class="col-12">
                                            <div class="avatar">
                                                <a href="javascript:void(0);"><img class="rounded" src="{{asset('backend/images/xs/avatar3.jpg')}}" alt="user" width="60"></a>
                                            </div>                                
                                            <div class="comment-action">
                                                <h5 class="c_name">Tim Hank</h5>
                                                <p class="c_msg mb-0">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
                                                <div class="badge badge-primary">Nokia 8</div>
                                                <span class="m-l-10">
                                                    <a href="javascript:void(0);"><i class="zmdi zmdi-star col-amber"></i></a>
                                                    <a href="javascript:void(0);"><i class="zmdi zmdi-star col-amber"></i></a>
                                                    <a href="javascript:void(0);"><i class="zmdi zmdi-star col-amber"></i></a>
                                                    <a href="javascript:void(0);"><i class="zmdi zmdi-star col-amber"></i></a>
                                                    <a href="javascript:void(0);"><i class="zmdi zmdi-star-outline text-muted"></i></a>
                                                </span>
                                                <small class="comment-date float-sm-right">Dec 18, 2019</small>
                                            </div>                                
                                        </li>                                   
                                    </ul>
                                </div>
                                <div class="tab-pane" id="about">
                                    <h6>Where does it come from?</h6>
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
                                </div>
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
