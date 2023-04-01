<template>
  <div class="expertise">
    <div class="hero_text">
      <h1>We help solve your toughest challenges</h1>
      <p>
        Driven by excellence and an established global expertise, we offer a
        wide array of strategic consulting services supported by our team of
        advisors.
      </p>
      <Button text="Contact" />
    </div>
  </div>
</template>

<script></script>

<style lang="scss" scoped>
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
  background-image: linear-gradient(
      180deg,
      rgba(3, 12, 34, 0) 53.65%,
      #070b1d 100%
    ),
    url("../../assets/img/Img_Expertise/alexander_strategy_group_expertise.webp");
}
.hero_text {
  margin-top: 10vh;
  width: clamp(35vw, 45vw, 60vw);
  p {
    margin: 2vh 0 5vh 0;
  }
}

@media screen and (max-width: 767px) {
  /* mobile */
  .expertise {
    background-image: linear-gradient(
        180deg,
        rgba(32, 42, 53, 0) 37.45%,
        rgba(32, 42, 53, 0.395797) 65.9%,
        rgba(32, 42, 53, 0.87) 100%
      ),
      url("../../assets/img/Img_Expertise/alexander_strategy_group_expertise_mobile.webp");
    background-size: cover;
    justify-content: flex-end;


    img {
      width: 25%;
    }
  }
  .hero_text {
    margin-top: 0;
    padding-bottom: 5vh;
    width: 80vw;
    p {
      margin: 2vh 0 5vh 0;
    }
  }
}
</style>
