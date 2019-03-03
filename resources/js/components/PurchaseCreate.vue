<template>
     <form action="">
         <table class="table table-sm">
            <tr>
                <td colspan="3">
                    <div class="form-group">
                        <label for="supplier" class="label">Select Supplier</label>
                        <select class="form-control" name="" id="supplier">
                            <!-- <option v-for="supplier in suppliers" :key="supplier.id" :value="supplier.id"> {{ supplier.name }} </option> -->
                        </select>
                    </div>
                </td>
                <td colspan="2">
                    <div class="form-group">
                        <label for="date" class="label">Date</label>
                        <input type="date" id="date" class="form-control">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                     <label class="label">Select Product</label>
                </td>
                <td>
                     <label class="label">Quantity</label>
                </td>
                <td>
                     <label class="label">Price</label>
                </td>
                <td>
                     <label class="label">Sub Total</label>
                </td>
                <td>
                     
                </td>

            </tr>
            <tr v-for="(product, index) in purchase.products" :key="index">
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
                    subtotal
                </td>
                <td>
                    <a href="#" @click.prevent="deleteRow(index)"> delete</a>
                </td>
            </tr>
            <tr>
                <td colspan="5" class="text-right">
                    <a href="#" class="btn btn-sm btn-default" @click.prevent="addRow"> Add New</a>
                </td>
            </tr>
            
         </table>


       
        
        
    </form>
</template>

<script>
    export default {
        data() {
            return {
                purchase: {
                    supplier: '',
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
            
        },
        created() {
            this.loadProductsAndSuppliers();
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
