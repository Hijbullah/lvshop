<template>
    <div>
        <form @submit.prevent="createNewPurchase">
            <div class="row">
                <div class="col-md-12 mb-5">
                    <h3>Receiving ID: #P665765266</h3>
                </div>
                <div class="col-md-6">
                    <div class="supplier">
                        <div class="form-group">
                            <label for="supplier" class="label">Select Supplier</label>
                            <select class="form-control" :class="{ 'is-invalid': form.errors.has('supplier_id') }" v-model="form.supplier_id" name="supplier_id" id="supplier">
                                <option v-for="supplier in suppliers" :value="supplier.id" :key="supplier.id"> {{ supplier.name }} </option>
                            </select>
                            <has-error :form="form" field="supplier_id"></has-error>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="date" class="label">Date</label>
                        <input type="date" id="date" v-model="form.purchase_date" class="form-control">
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
                <tr class="text-center" v-for="(product, index) in form.products" :key="index">
                    <td>
                        <select class="form-control" :class="{ 'is-invalid': form.errors.errors['products.' + index + '.product_id'] }"  name="product_id" v-model="product.product_id">
                            <option v-for="exProduct in exProducts" :value="exProduct.id" :key="exProduct.id" >{{ exProduct.name }}</option>
                        </select>
                    </td>
                    <td>
                        <input type="number" name="quantity"  v-model="product.quantity" class="form-control" :class="{ 'is-invalid': form.errors.errors['products.' + index + '.quantity'] }" placeholder="Quantity">
                    </td>
                    <td>
                        <input type="number" name="unit_price"  v-model="product.unit_price" class="form-control" :class="{ 'is-invalid': form.errors.errors['products.' + index + '.unit_price'] }" placeholder="Price">
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
            <div class="row">
                <div class="col text-center">
                    <button :disabled="form.busy" type="submit" class="btn btn-md bg-dark text-white">Add New Purchase</button>
                </div>
            </div>
        </form>
    </div>
     
</template>

<script>
    export default {
        data() {
            return {
                suppliers: {},
                exProducts: {},
                form: new Form({
                    supplier_id: null,
                    purchase_date: new Date().toISOString().slice(0,10),
                    products: [
                        {
                            product_id: null,
                            quantity: 1,
                            unit_price: 0

                        }
                    ]
                })
            }
           
        },
        methods: {
            createNewPurchase () {
                this.form.post('/admin/purchases')
                .then(({ data }) => { console.log(data) })
                .catch(function (error) {
                    console.log(error);
                })
            },
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
                this.form.products.push({
                    product_id: null,
                    quantity: 1,
                    unit_price: 0
                })
            },
            deleteRow(index) {
                this.form.products.splice(index, 1);
            } 

        }, 
        computed: {
            totalAmount() {
                return this.form.products.reduce(function(carry, product) {
                    return carry + (parseFloat(product.quantity) * parseFloat(product.unit_price));
                }, 0);
            },
            totalQunatity() {
                return this.form.products.reduce(function(carry, product) {
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
