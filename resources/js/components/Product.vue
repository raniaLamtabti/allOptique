<template>
  <div class="product">
    <div class="banner">
      <h1>NAME OF PRODUCT</h1>
    </div>
    {{product->id}}
    <div class="productInfo row">
      <div class="images col-md-12 col-lg-8 col-sm-12 row">
        <div class="subImages col-md-2 col-lg-2 col-sm-12">
          <img :src="'/productsImages/lunette2.png'" alt="">
          <img :src="'/productsImages/lunette3.png'" alt="">
          <img :src="'/productsImages/lunette4.png'" alt="">
        </div>
        <div class="principalImage col-md-10 col-lg-10 col-sm-12">
          <img :src="'/productsImages/lunette1.png'" alt="">
        </div>
      </div>
      <div class="content col-md-12 col-lg-4 col-sm-12">
        <h1>NAME OF PRODUCT</h1>
        <p> is simply dummytext of the printing
            and typesetting industry.Lorem 
            Ipsu has been the industry's</p>
        <span>122DH</span>
      </div>
    </div>
    <div class="other">
      <h1>other product you may like</h1>
      <div class="images">
        <img :src="'/images/store1.png'" alt="">
        <img :src="'/images/store2.png'" alt="">
        <img :src="'/images/store3.png'" alt="">
        <img :src="'/images/store4.png'" alt="">
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    data() {
        return {
            product: {}
        };
    },
    methods: {
        getProduct() {
            axios.get('product',this.$route.params.id).then(response => {
                this.product = response.data;
            });
        }
    },
    created() {
        this.getProduct();
    }
  }
</script>

<style lang="scss" scoped>
  @import 'resources/sass/_variables.scss'; 
  .product{
    .banner{
      background-color: $bleu2;
      padding: 7% 0;
      text-align: center;
      h1{
        font-family: $heebo;
        font-style: normal;
        font-weight: normal;
        font-size: 24px;
        line-height: 35px;
        color: #fff;
      }
    }
    .productInfo{
      margin: -50px 5% 0 5%;
      // display: flex;
      // grid-template-columns: repeat(4, 1fr);
      // grid-template-rows: repeat(4, 200px);
      background: #FFFFFF;
      box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.25);
      border-radius: 23px;
      padding: 3%;
      .images{
        // display: grid;
        // grid-template-columns: 1fr 2.5fr;
        .subImages{
          display: flex;
          flex-direction: column;
            padding: 20px;
          img{
            width: 100%;
            border: 1px solid #000;
            border-radius: 12px;
            margin-bottom: 50px;
          }
        }
        .principalImage{
          border: 1px solid #000;
          // margin: 20px;
          border-radius: 12px;
          img{
            width: 100%;
          }
        }
      }
      .content{
        padding: 7% 2%;
        text-align: center;
        font-family: $heebo;
        h1{
          font-style: normal;
          font-weight: normal;
          font-size: 24px;
          line-height: 35px;
          text-align: center;
          margin-bottom: 50px;
        }
        p{
          font-style: normal;
          font-weight: 300;
          font-size: 18px;
          line-height: 26px;
          text-align: center;
        }
        span{
          font-style: normal;
          font-weight: normal;
          font-size: 24px;
          line-height: 35px;
          text-align: center;
          color: $red;
        }
      }
    }
    .other{
      margin-top: 50px;
      margin-bottom: 50px;
      text-align: center;
      padding: 0 3%;
      h1{
        color: $red;
        font-family: $heebo;
        font-style: normal;
        font-weight: 500;
        font-size: 36px;
        margin-bottom: 20px;
      }
    }
    @media screen and (max-width: 767px) {
      .productInfo{
        text-align: center;
        .images{
          margin: auto;
          .subImages{
            flex-direction: row;
            padding: 0;
            margin-bottom: 5px;
            img{
              margin: 5px;
            }
          }
        }
      }
    }
  }
</style>