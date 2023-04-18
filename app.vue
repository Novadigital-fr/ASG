<template>
  <div>
    <NuxtLayout>
    <NuxtPage />
  </NuxtLayout>
  <Header/>
  </div>
</template>
<script>
import Lenis from "@studio-freight/lenis";


export default {
  mounted() {
    const lenis = new Lenis()

function raf(time) {
  lenis.raf(time)
  requestAnimationFrame(raf)
}

requestAnimationFrame(raf)
  }
};

</script>

<style>
@import url("./assets/css/base.scss");

.rotate-enter-active,
.rotate-leave-active {
  transition: all 0.4s;
}
.rotate-enter-from,
.rotate-leave-to {
  opacity: 0;
  transform: rotate3d(1, 1, 1, 15deg);
}


</style>