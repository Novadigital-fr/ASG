<template>
    <div>
    <div class="loader">
    <video src="../assets/img/Anim/video.mov" autoplay></video>
    </div>
    <TheHeader />
    <slot />
    <TheFooter/>
  </div>
</template>

<style scoped lang="scss">

.loader{
  background-color: #202a35;
  width: 100%;
  height: 100vh;
  position: fixed;
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 12;
}



</style>
