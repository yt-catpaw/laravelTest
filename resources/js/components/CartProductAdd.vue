<template>
    <div class="col-md-4 border" style="text-align:center; padding-top: 10px;margin-bottom: 10px;">
        <div>
            <!-- <img alt="猫" src="{{ asset('/assets/img/neko.png') }}"> -->
            <p>カート追加コンポーネント</p>
        </div>
        <div v-for="(product, id) in products" :key="id">
            <div class="caption">
               
                <p><b>{{ product.name }}</b></p>
                <p>{{ product.price }}</p>
                <button class="btn btn-primary mb-3" v-on:click="cartAddProduct( product.id)">ボタン</button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "CartAddComponent",
        data() {
            return {
                products:[
                    {id:1, name:"IphoneX", price:100000},
                    {id:2, name:"mac book pro 2020", price:300000},
                    {id:3, name:"ウォークマン", price:300000},
                ],
                // products:[],
            }
        },
        mounted() {
            // this.getProduct();
        },
        methods: {
            getProduct: function() {
                console.log('get product list');
                console.log(this.products);
                axios.get('/api/product')
                .then( respose => {
                    console.log(respose.data);
                    // this.products = JSON.parse(respose.data);
                    // this.products = respose.data;
                })
                .catch( errors => {
                    console.log(errors);
                });
            }
            ,
            cartAddProduct: function(productId) {
                console.log(this.products);
                console.log(productId);
                // alert("カートに追加いたしました。");
                axios.post('/api/cart/' + productId)
                .then( respose => {
                    console.log("カートに追加いたしました。");
                })
                .catch( errors => {
                    console.log(errors);
                });
            }
        }
    }
</script>