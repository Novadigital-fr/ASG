<template>
    <div>
        <Header />
        <HomeHeader />
        <HomeHorizontal/>
        <HomeCapabilities/>
        <HomeProvenance/>
        <TheFooter />
        <!-- <AnimationText /> -->


    </div>
</template>

<script setup>
const config = useRuntimeConfig()
useSeoMeta({
  title: 'Alexander Strategy Group is a leading global consulting services firm | ASG',
  ogTitle: 'Alexander Strategy Group is a leading global consulting services firm | ASG',
  description: 'We help mitigate risk to keep communities, companies, and individuals safe. A wide array of strategic consulting services supported by our team of advisors',
  ogDescription: 'We help mitigate risk to keep communities, companies, and individuals safe. A wide array of strategic consulting services supported by our team of advisors',
  ogImage: `${config.public.siteUrl}/img/Social_image/alexanderstrategygroup_homepage.png`,
  ogUrl: config.public.siteUrl,
  ogType: 'website',
  twitterCard: 'summary_large_image',
  twitterSite: '@ASGroup',
})
useHead({
  link: [{ rel: 'canonical', href: config.public.siteUrl }],
  script: [{
    type: 'application/ld+json',
    innerHTML: JSON.stringify({
      '@context': 'https://schema.org',
      '@type': 'Organization',
      name: 'Alexander Strategy Group',
      url: config.public.siteUrl,
      logo: `${config.public.siteUrl}/img/Logos/alexander_strategy_group_Logo_iconwhite.svg`,
      description: 'Alexander Strategy Group is a leading global consulting firm specializing in national security, law enforcement, communications, urban planning, and city resilience.',
      sameAs: [],
      address: {
        '@type': 'PostalAddress',
        addressLocality: 'Washington',
        addressRegion: 'DC',
        addressCountry: 'US',
      },
    })
  }]
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