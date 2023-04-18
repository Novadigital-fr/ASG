<template>
  <div>
    <Header/>
    <ExpertiseHero />
    <ExpertiseDegrade />
    <ExpertiseFondu />
    <div class="top_expertise light_mode">
    <div class="div_logo">
      <img
        class="logo"
        src="/img/Logos/alexander_strategy_group_Logo_icon.svg"
        alt=""
      />
      <h2>Expertise at the highest levels of government</h2>
      <p>
        Alexander Strategy Group's team of experts has held leadership positions
        at the highest levels of the U.S. federal government and in America’s
        leading cities.
      </p>
    </div>
  </div>
    <ExpertiseHorizontal />
    <PresentationServices />
    <TheFooter />

  </div>
</template>

<script setup>
// definePageMeta({
//   layout: "custome",
// });
// import { onMounted, onUnmounted, onUpdated, ref } from "vue";
// import { gsap } from "gsap";
// import { ScrollTrigger } from "gsap/ScrollTrigger";
// gsap.registerPlugin(ScrollTrigger);

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
