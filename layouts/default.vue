<template>
    <div>
    <div class="loader">
      <video autoplay muted>
  <source src="../assets/img/Anim/asg_logo.mp4" type="video/mp4">
</video>    </div>
    <TheHeader />
    <slot />
    <TheFooter/>
  </div>
</template>

<style scoped lang="scss">

video{
width: 10vw;
}
.loader{
  background-color: #202a35;
  width: 100%;
  height: 100vh;
  opacity: 0;
  position: fixed;
  align-items: center;
  justify-content: center;
  z-index: 12;
  display: flex;
  animation: loading 2s linear;
  transform: scale(0);

  @keyframes loading {
    0% {
      opacity: 1;
      transform: scale(1);

    }
    90%{
      opacity: 1;
    }
    100%{
      opacity: 0;
      transform: scale(1);
    }
  }
}





</style>
