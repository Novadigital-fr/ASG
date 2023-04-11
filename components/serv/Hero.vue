<template>
  <div class="services">
  <div
    class="service_hero"
    :style="{
      backgroundImage: `linear-gradient(180deg, rgba(32, 42, 53, 0) 35.3%, #202A35 100%), url(${image})`,
    }"
  >
    <img class="logo" :src="logo" alt="" />
    <h1 class="title" ref="title">{{ title }}</h1>
    <h4>{{ text }}</h4>
  </div>
</div>
</template>

<script>
import gsap from "gsap";

export default {
  props: {
    image: {
      type: String,
      required: true,
    },
    logo: {
      type: String,
      required: true,
    },
    title: {
      type: String,
      required: true,
    },
    text: {
      type: String,
      required: true,
    },
  },
  mounted() {
    gsap.from(this.$refs.title, {
      duration: 1,
      opacity: 0,
      y: 50,
      ease: "power4.out",
      delay: 0.5,
    });
  },
};
</script>

<style lang="scss" scoped>

.services{
  overflow: hidden;
}
.service_hero {
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
  background-repeat: no-repeat;
  background-color: var(--color-bg-dark);

  // opacity: 1;
  transform: scale(1.1);
  animation: 2s back;

  @keyframes back {
    0%{
      // opacity: 0;
      transform: scale(1);
    }
    100%{

    }
    
  }

  .title {
    margin: 3% 0 1% 0;
    color: var(--color-orange);
    font-size: 70px;

  }
  img {
    width: 8%;

  }
}
@media screen and (max-width: 840px) {
  /* mobile */
  .service_hero {

      padding-top: 0;
      padding-bottom: 15vh;
    justify-content: flex-end;

    .title {
      font-size: 38px;
      margin: 10% 0 4% 0;
    }
    img {
      width: 20%;
    }
  }
}
</style>
