@extends('backend.layouts.master')

@section('page-title', 'Receiving')
@section('page-header', 'Receiving')

@section('main-content')
<section class="content" id="purchase-create">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mb-3">
                <a href="{{ url('admin/receivings') }}" class="btn btn-md bg-white text-dark btn-flat float-right">
                    <i class="fas fa-hand-point-left"></i> Go Back
                </a>
            </div>
            <div class="col-lg-12">
                <div class="card card-dark">
                    @include('includes.alert')
                    <div class="card-header clearfix pt-3">
                        <h3 class="card-title float-left">New Receiving</h3>
                    </div>
                    <div class="card-body">

                        <form action="">
                            <div class="row mb-5">
                                <div class="col-md-4 offset-1">
                                    <div class="form-group">
                                        <label for="supplier" class="label">Select Supplier</label>
                                        <select class="form-control" name="" id="supplier">
                                            <option value="">Mayer inc</option>
                                            <option value="">Mayer inc</option>
                                            <option value="">Mayer inc</option>
                                            <option value="">Mayer inc</option>
                                            <option value="">Mayer inc</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 offset-1">
                                    <div class="form-group">
                                        <label for="date" class="label">Date</label>
                                        <input type="date" id="date" class="form-control col-md-10">
                                    </div>
                                </div>
                            </div>
                            <div class="products">
                                {{-- <div class="row" v-for="(purchase, index) in purchases.products" :key="index">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="supplier" class="label">Select Product</label>
                                            <select class="form-control" v-model="purchase.product.product_id" name="" id="supplier">
                                                option :value="purchase.product.product_id">@{{ purchase.product.name }}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="quantity" class="label">Quantity</label>
                                            <input type="number" id="quantity" :value="purchase.product.quantity" class="form-control" placeholder="Quantity">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="price" class="label">Price</label>
                                            <input type="number" id="price" :value="purchase.product.price" class="form-control" placeholder="Price">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="total" class="label">Sub Total</label>
                                            <input type="number" id="total" class="form-control" readonly>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                           
                            <div class="row">
                                <div class="col-md-12 clearfix">
                                    {{-- <a class="btn btn-sm btn-primary float-right text-white" @click.prevent="newRow"> <i class="fas fa-plus-circle"></i> Add More</a> --}}
                                </div>
                            </div>
                        </form>

                    </div>
                    <!-- /.card-body -->
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
    new Vue({
        el: '#purchase-create',
        data: {
            suppliers: {},
           
            
            // form: new Form({
            //     id: '',
            //     name: '',
            //     email: '',
            //     password: '',
            //     password_confirmation: ''
            // })
        },
        methods: {
            
            loadSuppliers() {
                axios.get('/admin/suppliers/all')
                .then(response => {
                    this.suppliers = response.data;
                    console.log(this.suppliers);
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                })
            },

            newRow() {
                this.Products.push({
                    product_id: '',
                    name: '',
                    quantity: 1,
                    unit_price: 0
                })
            } 

        }, 
        created() {
            this.loadSuppliers();
        }
    })
</script>
@endpush

