<template>

    <div class="home">
        <div class="banner">
            <div class="left">
                <div class="content">
                    <h1>Decorate Your Face</h1>
                    <p>
                        and give your life a style <br />
                        with our product
                    </p>
                    <router-link to="/about" class="btn"
                        >DISCOVER MORE</router-link
                    >
                    <div class="social">
                        <a href=""
                            ><img :src="'/iconsLogo/socialFb.png'" alt=""
                        /></a>
                        <a href=""
                            ><img :src="'/iconsLogo/socialIg.png'" alt=""
                        /></a>
                        <a href=""
                            ><img :src="'/iconsLogo/socialPhone.png'" alt=""
                        /></a>
                    </div>
                </div>
            </div>
            <div class="right">
                <img :src="'/images/boyTransparant.png'" alt="" />
            </div>
        </div>
<<<<<<< HEAD
        <div class="products-div">
            <h1>same products</h1>
            <div class="products">
                <router-link class="link"
                    v-for="product in products"
                    :key="product.id" :to="'product/'+ product.id ">
                    <product-component
                        :image="'/' + product.image"
                        v-bind:name="product.name"
                        v-bind:description="product.description"
                        v-bind:price="product.price"
                    ></product-component>
                </router-link>
            </div>
=======
      </div>
      <div class="right">
        <img :src="'/images/boyTransparant.png'" alt="">
      </div>
    </div>
    <div class="products-div">
      <h1>same products</h1>
      <div class="products">
        <router-link v-for="product in products" :key="product.id" :to="'product/'+ product.id ">
              <product-component :image="product.image" v-bind:name="product.name" v-bind:description="product.description" v-bind:price="product.price"></product-component>
        </router-link>
      </div>
    </div>
    <div class="kids">
      <h1>for  your  kids</h1>
      <div class="content">
        <div class="offer">
          <img :src="'/images/girl.png'" alt="">
          <div class="offer-content">
            <p>Pour tout un tas de raisons Pour tout un raisons tout un tas de raisonsPour tout un ta raisons our tout un tas de raisonsur tout us de raisons</p>
            <router-link to="/about" class="btn">see more</router-link>
          </div>
>>>>>>> dd0fedac14d3349a2a1115c4626f36a460778904
        </div>
        <div class="kids">
            <h1>for your kids</h1>
            <div class="content">
                <div class="offer">
                    <img :src="'/images/girl.png'" alt="" />
                    <div class="offer-content">
                        <p>
                            Pour tout un tas de raisons Pour tout un raisons
                            tout un tas de raisonsPour tout un ta raisons our
                            tout un tas de raisonsur tout us de raisons
                        </p>
                        <router-link to="/about" class="btn"
                            >see more</router-link
                        >
                    </div>
                </div>
                <router-link class="link" v-for="kid in kids" :key="kid.id" :to="'product/'+ kid.id ">
                    <product-component
                        :image="'/' + kid.image"
                        v-bind:name="kid.name"
                        v-bind:description="kid.description"
                        v-bind:price="kid.price"
                    ></product-component>
                </router-link>
            </div>
        </div>
        <div class="women">
            <h1>for women</h1>
            <div class="content">
                <img :src="'/images/women.png'" alt="" />
                <div class="products">
                    <router-link class="link" v-for="women in womens" :key="women.id"  :to="'product/'+ women.id ">
                        <product-component
                            :image="'/' + women.image"
                            v-bind:name="women.name"
                            v-bind:description="women.description"
                            v-bind:price="women.price"
                        ></product-component>
                    </router-link>
                </div>
            </div>
        </div>
        <div class="marks-div">
            <h1><h1>Marques</h1></h1>
            <div class="marks">
                <router-link class="link" v-for="marque in marques"  :key="marque.id"  :to="'product/'+ marque.id ">
                    <img :src="'/' + marque.image" alt="">
                </router-link>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            products: {},
            kids: {},
            womens: {},
            marques: {}
        };
    },
    methods: {
        getProduct() {
            axios.get("/productList").then(response => {
                this.products = response.data;
            });
        },
        getProductKid() {
            axios.get("/productKid").then(response => {
                this.kids = response.data;
            });
        },
        getProductWomen() {
            axios.get("/productWomen").then(response => {
                this.womens = response.data;
            });
        },
        getMarque() {
            axios.get("/marqueList").then(response => {
                this.marques = response.data;
            });
        }
    },
    created() {
        this.getProduct(),
        this.getProductWomen(),
        this.getProductKid(),
        this.getMarque();
    }
};
</script>

<style lang="scss" scoped>
@import "resources/sass/_variables.scss";
.home {
    .banner {
        display: flex;
        background: $gradient;
        padding: 5% 7%;
        font-family: $heebo;
        .left {
            width: 50%;
            h1 {
                font-size: 48px;
                font-weight: 700;
                color: $gray1;
            }
            p {
                font-size: 24px;
                font-weight: 700;
                color: $gray2;
            }
            .btn {
                padding: 20px;
                background-color: $bleu;
                border-radius: 20px;
                color: #fff;
                font-size: 30px;
            }
            .social {
                margin-top: 50px;
                a {
                    margin-right: 20px;
                }
            }
        }
        .right {
            width: 50%;
            text-align: center;
            background: url("/images/homeBannerPath.png") no-repeat;
            background-position: right 50% top 0;
            background-size: 90%;
        }
    }
    .products-div {
        text-align: center;
        padding: 0 7%;
        h1 {
            color: $red;
            font-family: $heebo;
            font-style: normal;
            font-weight: 500;
            font-size: 36px;
            margin-bottom: 20px;
        }
        .products {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            grid-column-gap: 50px;
            grid-row-gap: 50px;
        }
    }
    .kids {
        text-align: center;
        padding: 0 7%;
        margin-top: 50px;
        margin-bottom: 50px;
        h1 {
            color: $red;
            font-family: $heebo;
            font-style: normal;
            font-weight: 500;
            font-size: 36px;
            margin-bottom: 20px;
        }
        .content {
            display: grid;
            grid-template-areas: "offer offer offer prod";
            grid-column-gap: 50px;
            .offer {
                grid-area: offer;
                background-color: $pink;
                display: grid;
                border-radius: 12px;
                grid-template-areas: "img cont cont";
                img {
                    grid-area: img;
                    height: 100%;
                    border-radius: 12px;
                }
                .offer-content {
                    grid-area: cont;
                    text-align: left;
                    font-family: $allerta;
                    padding: 7% 2% 7% 2%;
                    p {
                        font-style: normal;
                        font-weight: normal;
                        font-size: 24px;
                        line-height: 31px;
                        color: #ffffff;
                    }
                    .btn {
                        box-shadow: 0px 4px 4px rgba(255, 6, 6, 0.25);
                        border-radius: 19px;
                        background-color: $red2;
                        color: #fff;
                        font-style: normal;
                        font-weight: normal;
                        font-size: 24px;
                        line-height: 31px;
                        padding: 20px 50px;
                        margin-top: 50px;
                    }
                }
            }
            .prod {
                grid-area: prod;
            }
            @media screen and (max-width: 768px) {
                .offer {
                    grid-template-areas: "img" "cont";
                    img {
                        margin: auto;
                        height: auto;
                    }
                    .offer-content {
                        text-align: center;
                    }
                }
            }
        }
        @media screen and (max-width: 1000px) {
            .content {
                grid-template-areas: "offer" " prod";
                grid-row-gap: 50px;
                .prod {
                    width: 300px;
                    margin: auto;
                }
            }
        }
    }
    .women {
        text-align: center;
        font-family: $heebo;
        margin-bottom: 50px;
        h1 {
            color: $red;
            font-style: normal;
            font-weight: 500;
            font-size: 36px;
            margin-bottom: 20px;
        }
        .content {
            padding: 3% 7%;
            background-color: $bleuLight;
            display: grid;
            grid-template-areas: "img prods";
            grid-column-gap: 50px;
            img {
                grid-area: img;
                height: 100%;
                width: 100%;
            }
            .products {
                grid-area: prods;
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(200px, 0.5fr));
                grid-column-gap: 50px;
                grid-row-gap: 50px;
            }
        }
    }
    .marks-div {
        text-align: center;
        font-family: $heebo;
        h1 {
            color: $red;
            font-style: normal;
            font-weight: 500;
            font-size: 36px;
            margin-bottom: 20px;
        }
        .marks {
            padding: 3% 7%;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            grid-column-gap: 50px;
            grid-row-gap: 50px;
        }
    }
    .link{
        text-decoration: none;
    }
    @media screen and (max-width: 1083px) {
        .banner {
            .right {
                position: relative;
                img {
                    position: absolute;
                    width: 400px;
                    bottom: 0;
                    right: 0;
                }
            }
        }
    }
    @media screen and (max-width: 860px) {
        .banner {
            .right {
                position: relative;
                background-position: right 50% bottom 0;
            }
        }
    }
    @media screen and (max-width: 768px) {
        .banner {
            .right {
                display: none;
            }
            .left {
                width: 100%;
                text-align: center;
                .social {
                    a {
                        margin-right: 0px;
                        padding: 10px;
                    }
                }
            }
        }
    }
}
</style>
