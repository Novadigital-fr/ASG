<template>
  <div>
    <div class="loader">
      <client-only>
        <Vue3Lottie
          class="video"
          animationLink="https://lottie.host/f16fecf0-bd2e-4429-a628-a9e108e25576/5HPDh1eRql.json"
          :height="100"
          :width="100"
          :speed="2.5"
          loop="none"
        />
      </client-only>
    </div>
    <TheHeader />
    <slot />
    <TheFooter />
  </div>
</template>

<style scoped lang="scss">
.loader {
  background-color: #202a35;
  width: 100%;
  height: 100vh;
  opacity: 0;
  position: fixed;
  align-items: center;
  justify-content: center;
  z-index: 1;
  display: flex;
  animation: loading 3s linear;
  transform: scale(0);

  @keyframes loading {
    0% {
      opacity: 1;
      transform: scale(1);
    }
    90% {
      opacity: 1;
    }
    100% {
      opacity: 0;
      transform: scale(1);
    }
  }
}
.video {
  width: 10vw;
}
</style>
