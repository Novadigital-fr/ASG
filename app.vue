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



</style>