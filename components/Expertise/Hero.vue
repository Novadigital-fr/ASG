<template>
  <div class="espertise_parent">
    <div class="expertise">
      <div class="hero_text">
        <h1 ref="title" class="title">Securing favorable and high-value results
against powerful state and corporate
adversaries.</h1>
        <p>
Alexander Strategy Group (ASG) specializes in
navigating high-stakes global challenges and complex
crossborder environments. Our unique value lies in
the integration of strategic communications, global
business intelligence, and political advisory to drive
optimal commercial outcomes. We do not merely react
to market or regulatory shifts; we proactively manage
the parallel political, regulatory, and reputational
landscapes. This approach is consistently characterized
by mitigating risk, protecting enterprise value, and
securing criticalobjectives for clients in globally
contentious environments.
        </p>
        <NuxtLink to="/contact">
          <Button text="Contact" />
        </NuxtLink>
      </div>
    </div>
    <div class="hero_below">
      <p>
Alexander Strategy Group (ASG) specializes in
navigating high-stakes global challenges and complex
crossborder environments. Our unique value lies in
the integration of strategic communications, global
business intelligence, and political advisory to drive
optimal commercial outcomes. We do not merely react
to market or regulatory shifts; we proactively manage
the parallel political, regulatory, and reputational
landscapes. This approach is consistently characterized
by mitigating risk, protecting enterprise value, and
securing criticalobjectives for clients in globally
contentious environments.
      </p>
      <NuxtLink to="/contact">
        <Button text="Contact" />
      </NuxtLink>
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
  z-index: 20;
  position: relative;
  overflow: hidden;
}
.expertise {
  height: auto;
  min-height: 100vh;
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
  padding-bottom: 5vh;
  width: clamp(620px, 50vw, 900px);
  p {
    margin: 2vh 0 5vh 0;
  }
}

.hero_below {
  display: none;
}

@media screen and (max-width: 840px) {
  /* mobile */
  .espertise_parent {
    display: flex;
    flex-direction: column;
  }
  .expertise {
    background-image: linear-gradient(
      180deg,
      rgba(3, 12, 34, 0) 40%,
      rgba(3, 12, 34, 0.6) 100%
    ),
      url("../../assets/img/Img_Expertise/alexander_strategy_group_expertise_mobile.webp");
    background-size: cover;
    background-position: center center;
    min-height: 100vh;
    height: 100vh;
    justify-content: flex-end;
    padding-bottom: 12vh;
    padding-top: 0;
  }
  h1 {
    font-size: 28px;
    line-height: 36px;
  }
  .hero_text {
    margin-top: 0;
    padding-top: 0;
    padding-bottom: 0;
    width: 88vw;
    p {
      display: none;
    }
    a {
      display: none;
    }
  }
  .hero_below {
    display: flex;
    flex-direction: column;
    align-items: center;
    background-color: #070B1D;
    padding: 0vh 6vw;
    p {
      font-size: 16px;
      line-height: 1.7;
      opacity: 0.85;
      margin-bottom: 4vh;
      text-align: center;
    }
  }
}
</style>
