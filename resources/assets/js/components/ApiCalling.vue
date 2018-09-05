<template>
    <div class="api-calling">
        <div class="error" v-if="errors.length">
           <span v-for="err in errors">
               {{ err }}
           </span>
           <hr>
       </div>
        <div class="create-form">
            <div class="product-name-input">
                <input type="text" v-model="product.name">
            </div>
            <div class="product-name-input">
                <input type="text" v-model.number="product.price">
            </div>
            <div class="button-create">
                <button @click="createProduct">Create</button>
            </div>
        </div>
        <hr>
          <div class="list-products">
              <h2>LIST PRODUCT</h2>
              <div class="product-table">
                  <table class="table table-bordered">
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>Name</th>
                              <th>Price</th>
                              <th>Date created</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr v-for="prod in list_products">
                              <td>{{ prod.id }}</td>
                              <td>{{ prod.name }}</td>
                              <td>{{ prod.price }}</td>
                              <td>{{ prod.created_at }}</td>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                product: {
                    name: '',
                    price: 0
                },
                errors: []
            }
        },
        created() {
           this.getListProducts()
       },
        methods: {
            createProduct() {
                axios.post('/products', {name: this.product.name, price: this.product.price})
                .then(response => {
                    console.log(response.data.result)
                })
                .catch(error => {
                   this.errors = []
   				if(error.response.data.errors.name) {
   					this.errors.push(error.response.data.errors.name)
   				}
   				if(error.response.data.errors.price) {
   					this.errors.push(error.response.data.errors.price)
   				}
               })
            },
           getListProducts() {
               axios.get('/products')
               .then(response => {
                   this.list_products = response.data
               })
               .catch(error => {
                   this.errors = []
   				if(error.response.data.errors.name) {
   					this.errors.push(error.response.data.errors.name)
   				}
   				if(error.response.data.errors.price) {
   					this.errors.push(error.response.data.errors.price)
   				}
               })
           }
        }
    }
</script>

<style lang="scss" scoped>
    .error {
        span {
            color: red;
        }
    }
</style>
