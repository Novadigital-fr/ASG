<template>
    <div>
        <Header />
        <HomeHeader />
        <HomeHorizontal/>
        <PresentationServices/>
        <HomeExpertise/>
        <TheFooter />
        <!-- <AnimationText /> -->


    </div>
</template>

<script setup>
useSeoMeta({
  title: 'Alexander Strategy Group is a leading global consulting services firm | ASG',
  ogTitle: 'Alexander Strategy Group is a leading global consulting services firm | ASG',
  description: 'We help mitigate risk to keep communities, companies, and individuals safe. A wide array of strategic consulting services supported by our team of advisors',
  ogDescription: 'We help mitigate risk to keep communities, companies, and individuals safe. A wide array of strategic consulting services supported by our team of advisors',
  ogImage: '/img/Social_image/alexanderstrategygroup_homepage.png',
  twitterCard: 'summary_large_image',
})
</script>

<style lang="scss" scoped>
header {
  padding: 2%;
  position: fixed;
  height: 100vh;
  z-index: 2 !important;
}
</style>