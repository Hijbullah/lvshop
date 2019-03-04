@extends('backend.layouts.master')

@section('page-title', 'Supplier')
@section('page-header', 'Supplier')

@section('main-content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-dark">
                    <div class="card-header clearfix pt-3">
                        <h3 class="card-title float-left">Supplier : {{ $supplier->name }}</h3>
                        
                    </div>
                    <div class="card-body">
                        <div>
                            <p>Supplier Name :- {{ $supplier->name }}</p>
                            <p>Supplier Email :- {{ $supplier->email }}</p>
                            <p>Supplier Phone :- {{ $supplier->phone }}</p>
                            <p>Supplier Address :- {{ $supplier->address }}</p>
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

