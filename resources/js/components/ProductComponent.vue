<template>
  <div class="product">
    <img :src="image" alt="">
    <!-- <p>{{ image }}</p> -->
    <h1>{{ name }}</h1>
    <p>{{ description }}</p>
    <span>{{ price }}</span>
  </div>
</template>

<script>
  export default {
    props: [
      'image',
      'name',
      'description',
      'price',
      'backColor'
    ],
  }
</script>

<style lang="scss" scoped>
  @import 'resources/sass/_variables.scss';
  .product{
    background: #FFFFFF;
    box-shadow: 0px 0px 30px rgba(193, 192, 192, 0.25);
    border-radius: 12px;
    min-width: 200px;
    font-family: $allerta;
    padding: 20px;
    height: 100%;
    h1{
      font-style: normal;
      font-weight: normal;
      font-size: 24px;
      line-height: 23px;
      color: #000000;
    }
    p{
      font-style: normal;
      font-weight: 300;
      font-size: 16px;
      line-height: 16px;
      color: #000000;
    }
    span{
      color: $red;
    }
  }
</style>