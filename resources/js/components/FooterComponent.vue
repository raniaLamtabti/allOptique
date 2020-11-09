<template>
  <div class="footer">
    <div class="links">
      <div class="part">
        <h1>about all optique</h1>
        <router-link class="link" to="/">where we are</router-link>
        <router-link class="link" to="/">our company</router-link>
        <router-link class="link" to="/">our company</router-link>
      </div>
      <div class="part">
        <h1>your question</h1>
        <router-link class="link" to="/">where we are</router-link>
        <router-link class="link" to="/">where we are</router-link>
        <router-link class="link" to="/">where we are</router-link>
        <router-link class="link" to="/">where we are</router-link>
        <router-link class="link" to="/">where we are</router-link>
      </div>
      <div class="part">
        <h1>your have to be our client</h1>
        <router-link class="link" to="/">good services</router-link>
        <router-link class="link" to="/">guarantee</router-link>
        <router-link class="link" to="/">best products</router-link>
      </div>
    </div>
    <p>copy right 2020</p>
  </div>
</template>

<script>
  export default {
    
  }
</script>

<style lang="scss" scoped>
  @import 'resources/sass/_variables.scss';
  .footer{
    background-color: $black;
    padding: 3% 7%;
    text-align: center;
    .links{
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      grid-column-gap: 50px;
      .part{
        text-align: left;
        display: flex;
        flex-direction: column;
        h1{
          font-family: $hermeneus-one;
          font-style: normal;
          font-weight: normal;
          font-size: 24px;
          line-height: 29px;
          color: #FFFFFF;
          margin-bottom: 50px;
        }
        .link{
          font-family: $heebo;
          font-style: normal;
          font-weight: 300;
          font-size: 18px;
          line-height: 26px;
          color: #e9e7e7;
          margin-bottom: 10px;
        }
      }
    }
    p{
      margin: 10px auto;
      font-family: $allerta;
      font-style: normal;
      font-weight: normal;
      font-size: 18px;
      line-height: 23px;
      color: #FFFFFF;
    }
  }
</style>