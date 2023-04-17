<template>
    <div>
        <Header />
        <HomeHeader />
        <HomeHorizontal/>
        <PresentationServices/>
        <HomeExpertise/>
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

</style>