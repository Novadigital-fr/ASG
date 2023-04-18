<template>
    <div>
        <Header />
        <HomeHeader />
        <HomeHorizontal/>
        <PresentationServices/>
        <HomeExpertise/>
        <TheFooter />

    </div>
</template>

<script setup>
function enableCustomLayout () {
  setPageLayout('custome')
}
definePageMeta({
  layout: 'default',
});

onUnmounted(() => {
enableCustomLayout();
});



</script>

<style lang="scss" scoped>
header {
  padding: 2%;
  position: fixed;
  height: 100vh;
  z-index: 2 !important;
}
</style>