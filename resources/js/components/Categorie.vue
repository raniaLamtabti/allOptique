<template>
  <div class="categorie">
    <div class="banner">
      <div class="content">
        <h1>Decorate Your Face </h1>
        <p>and give your life a style <br> with our product</p>
        <router-link to="/about" class="btn">DISCOVER MORE</router-link>
      </div>
    </div>
    <div class="products-div">
      <h1>PRODUCTS</h1>
      <div class="products">
        <product-component image="/productsImages/lunette1.png" v-bind:name="'Titre de produit'" v-bind:description="'Description du produit'" v-bind:price="'2000dh'"></product-component>
        <product-component image="/productsImages/lunette2.png" v-bind:name="'Titre de produit'" v-bind:description="'Description du produit'" v-bind:price="'2000dh'"></product-component>
        <product-component image="/productsImages/lunette3.png" v-bind:name="'Titre de produit'" v-bind:description="'Description du produit'" v-bind:price="'2000dh'"></product-component>
        <product-component image="/productsImages/lunette4.png" v-bind:name="'Titre de produit'" v-bind:description="'Description du produit'" v-bind:price="'2000dh'"></product-component>
        <product-component image="/productsImages/lunette5.png" v-bind:name="'Titre de produit'" v-bind:description="'Description du produit'" v-bind:price="'2000dh'"></product-component>
        <product-component image="/productsImages/lunette6.png" v-bind:name="'Titre de produit'" v-bind:description="'Description du produit'" v-bind:price="'2000dh'"></product-component>
        <product-component image="/productsImages/lunette7.png" v-bind:name="'Titre de produit'" v-bind:description="'Description du produit'" v-bind:price="'2000dh'"></product-component>
        <product-component image="/productsImages/lunette8.png" v-bind:name="'Titre de produit'" v-bind:description="'Description du produit'" v-bind:price="'2000dh'"></product-component>
      </div>
    </div>
    <div class="other">
      <h1>MORE CATEGORIES</h1>
      <div class="images">
        <router-link to="/categorie" class="image"><img width="300px" height="300px" :src="'/images/women.png'" alt=""></router-link>
        <router-link to="/categorie" class="image"><img width="300px" height="300px" :src="'/images/man1.png'" alt=""></router-link>
        <router-link to="/categorie" class="image"><img width="300px" height="300px" :src="'/images/girl.png'" alt=""></router-link>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    
  }
</script>

<style lang="scss" scoped>
  @import 'resources/sass/_variables.scss';
  .categorie{
    margin-top: -20px;
    .banner{
      padding: 10% 7%;
      background: url('/images/catBanner.png') no-repeat;
      font-family: $heebo;
      .content{
        h1{
          font-size: 40px;
          font-weight: 700;
          color: #fff;
        }
        p{
          font-size: 20px;
          font-weight: 700;
          color: #fff;
        }
        .btn{
          padding: 20px;
          background-color: $bleu;
          border-radius: 20px;
          color: #fff;
          font-size: 20px;
        }
      }
    }
    .products-div{
      text-align: center;
      h1{
        color: $red;
        font-style: normal;
        font-weight: 500;
        font-size: 36px;
        margin-bottom: 20px;
      }
      .products{
        padding: 3% 7%;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
        grid-column-gap: 50px;
        grid-row-gap: 50px;
      }
    }
    .other{
      text-align: center;
      margin-bottom: 50px;
      h1{
        color: $red;
        font-style: normal;
        font-weight: 500;
        font-size: 36px;
        margin-bottom: 20px;
        .images{
          display: flex;
          flex-wrap: wrap;
          .image{
            margin: 20px;
          }
        }
      }     
    }
  }
</style>