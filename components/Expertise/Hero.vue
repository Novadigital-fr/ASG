<template>
  <div class="espertise_parent">
  <div class="expertise">
    <div class="hero_text">
      <h1 ref="title" class="title">We help solve your toughest challenges</h1>
      <p>
        We thrive to deliver sophisticated solutions,
daring to become a proactive and dedicated partner through the whole project.
      </p>
      <NuxtLink to="/contact">
      <Button text="Contact" />
      </NuxtLink>
    </div>
  </div>
</div>
</template>

<script >
import gsap from "gsap";

export default {

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

.espertise_parent{
  overflow: hidden;
}
.expertise {
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
  background-image: linear-gradient(
      180deg,
      rgba(3, 12, 34, 0) 53.65%,
      #070b1d 100%
    ),
    url("../../assets/img/Img_Expertise/alexander_strategy_group_expertise.webp");

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
}
.hero_text {
  margin-top: 10vh;
  width: clamp(520px, 600px, 650px);
  p {
    margin: 2vh 0 5vh 0;
  }
}

@media screen and (max-width: 840px) {
  /* mobile */
  .expertise {
    background-image: linear-gradient(
      180deg,
      rgba(3, 12, 34, 0) 53.65%,
      #070b1d 100%
    ),
      url("../../assets/img/Img_Expertise/alexander_strategy_group_expertise_mobile.webp");
    background-size: cover;
    justify-content: flex-end;
    background-position: center center;

    img {
      width: 25%;
    }
  }
  h1{
    font-size: 28px;
  }
  .hero_text {
    margin-top: 0;
    padding-bottom: 25vh;
    width: 80vw;
    p {
      margin: 2vh 0 5vh 0;
    }
  }
}
</style>
