<template>
    <div class="full" :style="{ backgroundImage: `linear-gradient(180deg, rgba(32, 42, 53, 0) 35.3%, #202A35 100%), url(${image})` }">
    <img class="logo" :src="logo" alt="">
    <h1 class="title" ref="title">{{ title }}</h1>
    <h4>{{ text }}</h4>
    </div>
</template>

<script>
  import gsap from 'gsap';
  
  export default {
    props: {
      image: {
        type: String,
        required: true
      },
      logo:{
        type: String,
        required: true
      },
      title:{
        type: String,
        required: true
      },
      text:{
        type: String,
        required: true
      },
    },
    mounted() {
      gsap.from(this.$refs.title, {
        duration: 1,
        opacity: 0,
        y: 50,
        ease: 'power4.out',
        delay: 0.5,
      });
    },
  };
  </script>

<style lang="scss" scoped>
.full{
    height: 100vh;
    width: 100vw;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding-top: 10%;
    background-position: center top;
    background-size: cover;


    .title{
        margin: 3% 0 1% 0;
        color: var(--color-orange);
        font-size: 70px;
    }
    img{
      width: 8%;
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