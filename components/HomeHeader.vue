<template>
    <div class="full">
    <div class="div_logo">
    <img class="logo" src="../assets/img/Logos/alexander_strategy_group_Logo_icon.svg" alt="">
    </div>
    <div class="title">
    <!-- <div class="div top_title"></div> -->
    <h1>We help mitigate risk to keep <br> communities, companies, <br> and individuals safe</h1>
    <!-- <div class="div bottom_title"></div> -->
    </div>
    <h4>alexander strategy group</h4>

    </div>
</template>

<script setup>

</script>

<style lang="scss" scoped>
.full{
    min-height: 100vh;
    width: 100vw;
    background: linear-gradient(180deg, rgba(32, 42, 53, 0) 37.45%, rgba(32, 42, 53, 0.395797) 65.9%, rgba(32, 42, 53, 0.87) 100%), url('../assets/img/Img_HP/alexander_strategy_group_homepage.webp');
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding-top: 10%;

    .div_logo{
        overflow: hidden;

        .logo{
            animation: logo 4s;

            @keyframes logo {

                0%{
                    transform: translateY(200px);
                }
                60%{
                    transform: translateY(200px);
                }
                100%{
                }
                
            }
        }
    }

    .title{
        overflow: hidden;
    }

    h1{
        margin: 2% 0;
        animation: title 4s;

        @keyframes title {
        
            0%{
                transform: translateY(-150px);
            }
            40%{
                transform: translateY(-150px);
            }
            60%{
            //   transform: translateY(20px);
            }
            100%{
            }
        }
    }
    h4{
        color: var(--color-orange);
        // position: fixed;
        z-index: 13;
        animation: loading 4s;

    @keyframes loading {
    0% {
      opacity: 0;
    }
    9%{
        opacity: 0;
    }
    10%{
        opacity: 1;
    }
    30%{
        transform: translateY(-150px);
    }
    40%{
        transform: translateY(-150px);
    }
    60%{
    //   transform: translateY(20px);
    }
    100%{
    }
  }
    }
}
@media screen and (max-width: 767px) {
    /* mobile */
    .full{
    background: linear-gradient(180deg, rgba(32, 42, 53, 0) 37.45%, rgba(32, 42, 53, 0.395797) 65.9%, rgba(32, 42, 53, 0.87) 100%), url('../assets/img/Img_HP/alexander_strategy_group_homepage_mobile.webp');
        background-size: cover;

        img{
            width: 25%;
        }
}
  }

</style>