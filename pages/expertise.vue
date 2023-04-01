<template>
  <div>
    <ExpertiseHero />
    <ExpertiseDegrade />
    <ExpertiseFondu />
    <div class="div_logo">
      <img
        class="logo"
        src="/img/Logos/alexander_strategy_group_Logo_icon.svg"
        alt=""
      />
      <h2>Expertise at the highest levels of government</h2>
      <p>
        Alexander Strategy Group's team of experts has held leadership positions
        at the highest levels of the U.S. federal government and in America’s
        leading cities.
      </p>
    </div>
    <ExpertiseHorizontal />
    <PresentationServices />
  </div>
</template>

<script setup></script>

<style lang="scss" scoped>
.div_logo {
  color: var(--color-secondaire);
  text-align: center;
  margin: 0 auto;
  width: 40vw;

  .logo {
    margin: 20vh 0;
  }
  img {
    width: 5vw;
  }

  h2 {
    margin-bottom: 5vh;
  }
}
@media screen and (max-width: 1024px) {
  /* tablettte */

  .div_logo {
    width: 80vw;

    img {
      width: 15vw;
    }
    .logo {
      margin: 15vh 0;
    }
  }
}

@media screen and (max-width: 767px) {
}
</style>
