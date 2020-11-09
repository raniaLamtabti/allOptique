<template>
  <div class="about">
    <div class="banner">
      <h1>ABOUT US</h1>
    </div>
    <div class="contents">
      <div class="content">
        <div class="text">
          <h1>Search, Select, Buy online</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam id purus 
            at risus pellentesque faucibus a quis eros. In eu fermentum leo. Integer ut
            eros lacus. Proin ut accumsan leo. Morbi vitae est eget dolor consequa
            t aliquam eget quis dolor. Mauris rutrum fermentum erat, at euismod
            lorem pharetra nec. Duis erat lectus, ultrices euismod sagittis at, 
            pharetra eu nisl. Phasellus id ante at velit tincidunt hendrerit. Aenean
            dolor dolor tristique nec. Tristique nulla aliquet enim tortor at auctor
            urna nunc. Sit amet aliquam id diam maecenas ultricies mi eget.</p>
        </div>
        <div class="image"><img :src="'/images/man12.png'" alt=""></div>
      </div>
      <div class="content">
        <div class="image img1"><img :src="'/images/man2.png'" alt=""></div>
        <div class="text">
          <h1>Search, Select, Buy online</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam id purus 
            at risus pellentesque faucibus a quis eros. In eu fermentum leo. Integer ut
            eros lacus. Proin ut accumsan leo. Morbi vitae est eget dolor consequa
            t aliquam eget quis dolor. Mauris rutrum fermentum erat, at euismod
            lorem pharetra nec. Duis erat lectus, ultrices euismod sagittis at, 
            pharetra eu nisl. Phasellus id ante at velit tincidunt hendrerit. Aenean
            dolor dolor tristique nec. Tristique nulla aliquet enim tortor at auctor
            urna nunc. Sit amet aliquam id diam maecenas ultricies mi eget.</p>
        </div>
        <div class="image img2"><img :src="'/images/man2.png'" alt=""></div>
      </div>
    </div>
    <div class="store">
      <h1>STORE PHOTOS</h1>
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
    
  }
</script>

<style lang="scss" scoped>
  @import 'resources/sass/_variables.scss'; 
  .about{
    .banner{
      background-color: $bleuLight;
      padding: 10% 0;
      text-align: center;
      h1{
        font-family: $heebo;
        font-style: normal;
        font-weight: 500;
        font-size: 96px;
        line-height: 141px;
        color: $bleu1;
      }
    }
    .contents{
      .content{
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
        margin-bottom: 50px;
        .image{
          img{
            max-width: 100%;
            height: auto;
            object-fit: contain; 
          }
        }
        .img2{
          display: none;
        }
        .text{
          font-family: $heebo;
          padding: 7%;
          h1{
            font-style: normal;
            font-weight: 600;
            font-size: 40px;
            line-height: 53px;
            color: #000000;
          }
          p{
            font-style: normal;
            font-size: 20px;
            line-height: 40px;
            color: #000000;
          }
        }
      }
    }
    .store{
      text-align: center;
      font-family: $heebo;
      margin-bottom: 50px;
      h1{
        color: $red;
        font-style: normal;
        font-weight: 500;
        font-size: 36px;
        margin-bottom: 20px;
      }
      .images{
        img{
          height: 300px;
          width: 300px;
          margin-bottom: 5px;
        }
      }
    }
    @media screen and (max-width: 798px) {
      .contents{
        .content{
          .img1{
            display: none;
          }
          .img2{
            display: block;
          }
          .image{
            text-align: center;
          }
        }
      }
    }
  }
</style>