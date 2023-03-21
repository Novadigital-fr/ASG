<template>
    <div class="home7" ref="container">
    <div  id="container" class="container" >
    <section class="panel"></section>
      <section class="panel">
        <div>
          <img src="../assets/img/Img_HP/alexander_strategy_group_world_interconnected.webp" alt="" />
          <h2>Our world is increasingly interconnected.</h2>
          <p>
            Provide customers with solutions to the most complex challenges.
          </p>
        </div>
      </section>
      <section class="panel">
        <div>
          <img src="../assets/img/Img_HP/alexander_strategy_group_front_lines.webp" alt="" />
          <h2>We live on the front lines</h2>
          <p>
            National security and risk management advisory services to clients worldwide.
          </p>
        </div>
      </section>
      <section class="panel">
        <div>
          <img src="../assets/img/Img_HP/alexander_strategy_group_horizon.webp" alt="" />
          <h2>We are on the ground and over-the-horizon</h2>
          <p>
            We are with you from planning to execution.
          </p>
        </div>
      </section>
      
    </div>
    </div>
</template>
  
  <script setup>
  import { onMounted, onUnmounted, ref } from 'vue';
  import { gsap } from "gsap";
  import { ScrollTrigger } from "gsap/ScrollTrigger";
  gsap.registerPlugin(ScrollTrigger);
  
  const scrollTween = ref(null);
  
  onMounted(() => {    
    const container = document.querySelector('.container');
  
    if (window.matchMedia("(min-width: 1024px)").matches) {
      let sections = gsap.utils.toArray(".panel");
  
      scrollTween.value = gsap.to(sections, {
        xPercent: -100 * (sections.length - 2),
        ease: "none", // <-- IMPORTANT!
        scrollTrigger: {
          trigger: "#container",
          pin: true,
          scrub: 0.1,
          //snap: directionalSnap(1 / (sections.length - 1)),
          end: "+=2000",
        },
      });
    }
  });
  
  onUnmounted(() => {
    if (scrollTween.value) {
      scrollTween.value.scrollTrigger.kill();
      scrollTween.value = null;
    }
  });
  </script>
  
  <style  lang="scss" scoped>
  .container {
    width: 200vw;
    height: 100vh;
    display: flex;
    flex-wrap: nowrap;
    overscroll-behavior: none;
    padding-top: 15vh;
 }
  
  .panel {
    width: 35vw;
    color: var(--color-secondaire);
    // text-align: center;
    img{
        width: 70%;
        margin-bottom: 10%;
    }
    h3,p{
        width: 70%;
    }
  }
  

 
  
  @media screen and (max-width: 1024px) {
    /* tablettte */
  
    .home7{
      overflow-x: auto;
      -webkit-overflow-scrolling: touch;
    }
    .container {
      width: 600%;
      height: 90vh;
      display: flex;
      flex-wrap: nowrap;
    }
    .panel {
      position: relative;
      z-index: 4;
      width: 100vw;
      margin: 15vh 10vw 10vh 3vw;
      font-weight: 300;
      overflow: hidden;
    }
    .panel div {
      margin: 0 4%;
    }
    .panel img{
    height: 100px;
  }
  }
  
  @media screen and (max-width: 767px) {
    /* mobile */
  }
  </style>
  