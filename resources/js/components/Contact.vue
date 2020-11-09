<template>
  <div class="contact">
    <div class="banner"></div>
    <div class="social">
      <a href=""><img :src="'/iconsLogo/socialFb.png'" alt=""></a>
      <a href=""><img :src="'/iconsLogo/socialIg.png'" alt=""></a>
      <a href=""><img :src="'/iconsLogo/socialPhone.png'" alt=""></a>
    </div>
    <div class="contactItems">
      <div class="item">
        <img :src="'/iconsLogo/local.png'" alt="">
        <h1>ADDRESS OF THE STORE</h1>
        <p>ADDRESS OF THE STORE</p>
      </div>
      <div class="item">
        <img :src="'/iconsLogo/clock.png'" alt="">
        <h1>Working hours</h1>
        <p>monday-friday 8-18</p>
      </div>
      <div class="item">
        <img :src="'/iconsLogo/phone.png'" alt="">
        <h1>call us on </h1>
        <p>055832959949</p>
      </div>
      <div class="item">
        <img :src="'/iconsLogo/gmail.png'" alt="">
        <h1>contact us a mail on</h1>
        <p>allOptique@gmail.com</p>
      </div>
    </div>
    <div class="contactForm">
      <h1>write to us</h1>
      <form action="" method="post">
        <div class="line">
          <input type="text" placeholder="your name">
          <input type="text" placeholder="your mail">
        </div>
        <div class="line">
          <input type="text" placeholder="phone number">
          <input type="text" placeholder="subject">
        </div>
        <textarea name="" id="" cols="60" rows="10" placeholder="message"></textarea>
        <button type="submit">send message</button>
      </form>
    </div>
    <div class="map">
      <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3372.0495642273863!2d-9.216677485322519!3d32.31052211493245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdac21138cb413b7%3A0xc0a126eb4fe2a10b!2sDevosoft!5e0!3m2!1sen!2sma!4v1604147345354!5m2!1sen!2sma" width="100%" height="500px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
  </div>
</template>

<script>
  export default {
    
  }
</script>

<style lang="scss" scoped>
  @import 'resources/sass/_variables.scss'; 
  .contact{
    .banner{
      background: url('/images/contactBanner.png') no-repeat;
      padding: 14.5%;
    }
    .social{
      margin: 3%;
      text-align: center;
      a{
        margin: 10px;
      }
    }
    .contactItems{
      padding: 3% 7%;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      grid-column-gap: 50px;
      grid-row-gap: 50px;
      font-family: $heebo;
      .item{
        text-align: center;
        border: 2px solid $bleu1;
        padding: 10% 7%;
        border-radius: 12px;
        h1{
          margin-top: 50px;
          font-style: normal;
          font-weight: 600;
          font-size: 18px;
          line-height: 26px;
          color: #000000;
        }
        p{
          font-style: normal;
          font-weight: 300;
          font-size: 14px;
          line-height: 21px;
          color: #000000;
        }
      }
    }
    .contactForm{
      padding: 0 20%;
      h1{
        color: $red;
        font-family: $heebo;
        font-style: normal;
        font-weight: 500;
        font-size: 36px;
        margin-bottom: 20px;
        text-align: center;
      }
      form{
        font-family: &heebo;
        input, textarea {
          border: 2px solid rgba(0, 0, 0, 0.25);
          box-sizing: border-box;
          border-radius: 13px;
          padding: 10px;
          outline: none;
          &::placeholder{
            color: #b4b3b3;
          }
        }
        .line{
          margin-bottom: 50px;
          display: grid;
          grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
          grid-column-gap: 50px;
          grid-row-gap: 50px;
        }
        textarea{
          width: 100%;
        }
        button{
          background-color: $bleu1;
          color: #fff;
          padding: 3% 5%;
          font-style: normal;
          font-weight: 500;
          font-size: 24px;
          line-height: 35px;
          text-align: center;
          letter-spacing: 0.115em;
          border: none;
          border-radius: 12px;
          margin: 50px 0;
        }
      }
    }
  }

</style>