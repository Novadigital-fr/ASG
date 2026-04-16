<template>
  <div>
    <Header/>
    <ExpertiseHero />
    <ExpertiseDegrade />
    <ExpertiseCapabilities />
    <ExpertiseBovim />
  
    <TheFooter />

  </div>
</template>

<script setup>
const config = useRuntimeConfig()
useSeoMeta({
  title: 'We help solve your toughest challenges - Strategic consulting services | ASG',
  ogTitle: 'We help solve your toughest challenges - Strategic consulting services | ASG',
  description: 'Driven by excellence and a global expertise, we offer a wide array of strategic consulting services supported by our team of experts at the highest levels',
  ogDescription: 'Driven by excellence and a global expertise, we offer a wide array of strategic consulting services supported by our team of experts at the highest levels',
  ogImage: `${config.public.siteUrl}/img/Social_image/alexanderstrategygroup_expertise.png`,
  ogUrl: `${config.public.siteUrl}/expertise`,
  ogType: 'website',
  twitterCard: 'summary_large_image',
  twitterSite: '@ASGroup',
})
useHead({ link: [{ rel: 'canonical', href: `${config.public.siteUrl}/expertise` }] })
// definePageMeta({
//   layout: "custome",
// });
// import { onMounted, onUnmounted, onUpdated, ref } from "vue";
// import { gsap } from "gsap";
// import { ScrollTrigger } from "gsap/ScrollTrigger";
// if (process.client) gsap.registerPlugin(ScrollTrigger);

// let triggerArray = [];

// onMounted(() => {
//   const menu = document.querySelector('.menu_ordi');
//   const lightModeSections = document.querySelectorAll('.light_mode');

//   lightModeSections.forEach(section => {
//     const trigger = ScrollTrigger.create({
//       trigger: section,
//       start: 'top top',
//       end: 'bottom bottom',
//       markers: true,
//       onEnter: () => {
//         menu.classList.add('dark');
//       },
//       onLeaveBack: () => {
//         menu.classList.remove('dark');
//       }
//     });
//     triggerArray.push(trigger);
//   });
// });

// onUpdated(() => {
//   triggerArray.forEach(trigger => {
//     trigger.kill();
//   });
//   triggerArray = [];

//   const menu = document.querySelector('.menu_ordi');
//   const lightModeSections = document.querySelectorAll('.light_mode');

//   lightModeSections.forEach(section => {
//     const trigger = ScrollTrigger.create({
//       trigger: section,
//       start: 'top top',
//       end: 'bottom bottom',
//       markers: true,
//       onEnter: () => {
//         menu.classList.add('dark');
//       },
//       onLeaveBack: () => {
//         menu.classList.remove('dark');
//       }
//     });
//     triggerArray.push(trigger);
//   });
// });

// onUnmounted(() => {
//   triggerArray.forEach(trigger => {
//     trigger.kill();
//   });
//   triggerArray = [];
// });
</script>

<style lang="scss" scoped>

.top_expertise{
  background-color: var(--color-bg);

}
.div_logo {
  color: var(--color-secondaire);
  text-align: center;
  margin: 0 auto;
  width: clamp(500px, 550px, 650px);


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

@media screen and (max-width: 840px) {

  .div_logo {  

  h2 {
    text-align: start;
  }
  p{
    text-align: start;
  }
}
}
</style>
