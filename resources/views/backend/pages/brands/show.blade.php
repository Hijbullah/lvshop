@extends('backend.layouts.master')

@section('page-title', 'Brands')
@section('page-header', 'Brands | Show')

@section('main-content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-dark">
                    <div class="card-header clearfix pt-3">
                        <h3 class="card-title float-left">Brand : {{ $brand->gbin }}</h3>
                        
                    </div>
                    <div class="card-body">
                        <div>
                            <p>Brand Name :- {{ $brand->name }}</p>
                            <p>Brand GBIN :- {{ $brand->gbin }}</p>
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
<script>
    (function(){
        var suppliers = document.querySelectorAll('.supplier-delete');
        var deleteForm = document.getElementById('delete-form');
        for(var supplier of Array.from(suppliers)) {
            supplier.addEventListener('click', function(event) {
                event.preventDefault();
                var action = this.href;
                deleteForm.action = action;
                deleteForm.submit();
            });

        }
    })();
</script>

@endpush

