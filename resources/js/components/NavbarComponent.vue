<template>
    <div class="menu">
        <div class="brand">
            <a href=""><img :src="'/iconsLogo/logo.png'" alt=""></a>
        </div>   
        <div class="navbar" ref="nav">
            <div class="nav-links">
                <router-link class="link" to="/">HOME</router-link>
                <button class="dropdown-btn dropdown-toggle" id="dropdownCat" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    CATEGORIE
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownCat">
                    <router-link class="dropdown-item link" to="/categorie">Man</router-link>
                    <router-link class="dropdown-item link" to="/categorie">Women</router-link>
                </div>
                <router-link class="link" to="/about">ABOUT</router-link>
                <router-link class="link" to="/contact">CONTACT US</router-link>
            </div>
            <div class="nav-lang">
                <button class="dropdown-btn" id="dropdownLang" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img :src="'/iconsLogo/translate.png'" alt="">
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownLang">
                    <router-link class="dropdown-item link" to="#">EN</router-link>
                    <router-link class="dropdown-item link" to="#">FR</router-link>
                    <router-link class="dropdown-item link" to="#">AR</router-link>
                </div>
            </div>
        </div>
        <div class="burgerMenu">
            <div id="burger" @click="makeRed"><img :src="'/iconsLogo/burgerMenu.png'" alt=""></div>
        </div>
    </div>
</template>

<script>
    export default {
        methods: {
            makeRed: function() {
            const nav = this.$refs.nav.classList;
            nav.contains("show")
                ? nav.remove("show")
                : nav.add("show");
            }
        }
    }
</script>

<style lang="scss">
    @import 'resources/sass/_variables.scss'; 
    .menu{
        background-color: #fff;
        display: flex;
        justify-content: flex-end;
        padding: 0px 7%;
        align-items: center;
        height: 70px;
        font-family: $heebo;
        // padding-bottom: 20px;
        box-shadow: 0px 1px 22px 0px rgba(0, 0, 0, 0.25);
        .brand{
            margin-right: auto;
        }
        .navbar{
            display: flex;
            align-items: center;
            .nav-links{
                margin-bottom: 15px;
                .link, button{
                    background: none;
                    outline: none;
                    border: none;
                    padding: 30px 30px;
                    color: $bleu;
                    .icone{
                        margin-bottom: 5px;
                    }
                }
                .dropdown-menu{
                    left: 20%;
                }
                .router-link-active{
                    color: #fff;
                    background-color: $bleu;
                    border-radius: 0 0 10px 10px;
                    height: 60px;
                    text-decoration: none;
                    padding: 30px 30px;
                }
            }
            .nav-lang{
                margin-left: 30px;
                button{
                    background: none;
                    outline: none;
                    border: none;
                }
                .dropdown-menu{
                    left: 90%;
                    min-width: 50px;
                }
            }
            .dropdown-menu{
                // width: auto;
                border: none;
                border-radius: none;
                .dropdown-item{
                    color: $darkG;
                    &:hover{
                        border-radius: 50px;
                        background-color: $bleu;
                        color: #fff;
                    }
                }
            }
        }
        .burgerMenu{
            display: none;
        }
        @media screen and (max-width: 1000px) {
            .navbar{
                .nav-links{
                    router-link, button{
                        padding: 15px 15px;
                    }
                }
            }
        }
        @media screen and (max-width: 768px) {
            .navbar{
                display: none;
                position: absolute;
                top: 80px;
                width: 40%;
                flex-direction: column;
                border-radius: 10px;
                background-color: #fff !important;
                max-width: 200px;
                .nav-links{
                    display: flex;
                    flex-direction: column;
                    router-link, button{
                        padding: 15px 15px;
                        text-align: left;
                    }
                    .dropdown-menu{
                        left: -50%;
                        top: 20%;
                        min-width: 90px;
                    }
                }
                .nav-lang{
                    margin-left: 0px;
                    text-align: center;
                    .dropdown-menu{
                        left: 33%;
                        // top: 20%;
                        min-width: 90px;
                    }
                }
            }
            .burgerMenu{
                display: block;
            }
        }
        .show{
            display: block;
        }
    }
</style>
