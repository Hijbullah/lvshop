<template>
    <div>
        <div class="row">
            <div class="col-md-12 mb-5">
                <h3>Receiving ID: #P665765266</h3>
            </div>
            <div class="col-md-6">
                <div class="supplier">
                    <div class="form-group">
                        <label for="supplier" class="label">Select Supplier</label>
                        <select class="form-control" v-model="purchase.supplier" name="" id="supplier">
                            <option v-for="supplier in suppliers" :value="supplier.id" :key="supplier.id"> {{ supplier.name }} </option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="date" class="label">Date</label>
                    <input type="date" id="date" class="form-control">
                </div>
            </div>
        </div>
         <table class="table table-sm table-bordered mt-5">
            
            <tr class="text-center">
                <th  style="width: 30%">
                     <label class="label">Select Product</label>
                </th>
                <th style="width: 20%">
                     <label class="label">Quantity</label>
                </th>
                <th  style="width: 20%">
                     <label class="label">Price</label>
                </th>
                <th  style="width: 20%">
                     <label class="label">Sub Total</label>
                </th>
                <th  style="width: 10%">
                     
                </th>

            </tr>
            <tr class="text-center" v-for="(product, index) in purchase.products" :key="index">
                <td>
                    <!-- <select class="form-control"  name="" id="supplier" v-model="product.product_id">
                        <option v-for="exProduct in exProducts" :value="exProduct.id" :key="exProduct.id" >{{ exProduct.name }}</option>
                    </select> -->
                    <input type="text" id="name"  v-model="product.name" class="form-control" placeholder="Name">
                </td>
                <td>
                    <input type="number" id="quantity"  v-model="product.quantity" class="form-control" placeholder="Quantity">
                </td>
                <td>
                    <input type="number" id="price"  v-model="product.unit_price"   class="form-control" placeholder="Price">
                </td>
                <td>
                    <span>{{ product.quantity * product.unit_price }}</span>
                </td>
                <td>
                    <a href="#" class="btn btn-sm btn-danger mt-1" @click.prevent="deleteRow(index)"><i class="fas fa-times"></i></a>
                </td>
            </tr>
            <tr>
                <td colspan="5" class="text-right">
                    <a href="#" class="btn btn-sm bg-dark text-white" @click.prevent="addRow"> Add More</a>
                </td>
            </tr>
            <tr>
                <th class="text-right">Total Quantity</th>
                <th class="text-center"> {{ totalQunatity }} </th>
                <th class="text-right">Total Amount</th>
                <th class="text-center">$ {{ totalAmount }}</th>
            </tr>
            
         </table>

       

        

       
        
     
    </div>
     
</template>

<script>
    export default {
        data() {
            return {
                suppliers: {},
                exProducts: {},
                purchase: {
                    supplier: 1,
                    purchase_date: null,
                    total_price: 0,
                    total_quantity: 0,
                    products: [
                        {
                            name: '',
                            quantity: 1,
                            unit_price: 0

                        }
                    ]
                }
            
            // form: new Form({
            //     id: '',
            //     name: '',
            //     email: '',
            //     password: '',
            //     password_confirmation: ''
            // })
            }
           
        },
        methods: {
            loadProductsAndSuppliers() {
                axios.get('/admin/purchases/products-suppliers')
                .then(response => {
                    this.exProducts = response.data[0];
                    this.suppliers = response.data[1];
                    console.log(response.data);
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                })
            },

            addRow() {
                this.purchase.products.push({
                    name: '',
                    quantity: 1,
                    unit_price: 0
                })
            },
            deleteRow(index) {
                this.purchase.products.splice(index, 1);
            } 

        }, 
        computed: {
            totalAmount() {
                return this.purchase.products.reduce(function(carry, product) {
                    return carry + (parseFloat(product.quantity) * parseFloat(product.unit_price));
                }, 0);
            },
            totalQunatity() {
                return this.purchase.products.reduce(function(carry, product) {
                    return carry + (parseFloat(product.quantity));
                }, 0);
            }
        },
        created() {
            this.loadProductsAndSuppliers();
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
