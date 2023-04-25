<template>
  <div class="home7 light_mode" ref="container">
    <div id="container" class="container">
      <section class="tel panel"></section>
      <section class="panel">
        <div>
          <img
            src="../assets/img/Img_HP/alexander_strategy_group_world_interconnected.webp"
            alt=""
          />
          <h2>Our world is increasingly interconnected.</h2>
          <p>
            Provide customers with solutions to the most complex challenges.
          </p>
        </div>
      </section>
      <section class="panel">
        <div>
          <img
            src="../assets/img/Img_HP/alexander_strategy_group_front_lines.webp"
            alt=""
          />
          <h2>We live on the front lines</h2>
          <p>
            National security and risk management advisory services to clients
            worldwide.
          </p>
        </div>
      </section>
      <section class="panel">
        <div>
          <img
            src="../assets/img/Img_HP/alexander_strategy_group_horizon.webp"
            alt=""
          />
          <h2>We are on the ground and over-the-horizon</h2>
          <p>We are with you from planning to execution.</p>
        </div>
      </section>
      <div class="slider__progress-wrap js-progress-wrap">
        <div class="slider__progress js-progress"></div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { onMounted, onUnmounted, ref } from "vue";
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
gsap.registerPlugin(ScrollTrigger);

const scrollTween = ref(null);
const updateProgressBar = ref(null);

onMounted(() => {
  const container = document.querySelector(".container");

  if (window.matchMedia("(min-width: 1024px)").matches) {
    let sections = gsap.utils.toArray(".panel");
    scrollTween.value = gsap.to(sections, {
      xPercent: -100 * (sections.length - 3),
      ease: "none", // <-- IMPORTANT!
      scrollTrigger: {
        trigger: "#container",
        pin: true,
        scrub: 0.1,
        //snap: directionalSnap(1 / (sections.length - 1)),
        end: "+=1000",
      },
    });
  } else {
    let sections = gsap.utils.toArray(".panel");
    scrollTween.value = gsap.to(sections, {
      xPercent: -100 * (sections.length - 1.5),
      ease: "none", // <-- IMPORTANT!
      scrollTrigger: {
        trigger: "#container",
        pin: true,
        scrub: 0.1,
        //snap: directionalSnap(1 / (sections.length - 1)),
        end: "+=1000",
      },
    });
  }

  const updateProgressBar = () => {
    const progressBar = document.querySelector(".slider__progress");
    const scrollLeft = window.scrollY;
    const totalWidth =
      document.documentElement.scrollWidth -
      document.documentElement.clientWidth;
    const progress = scrollLeft / totalWidth;
    progressBar.style.transform = `scaleX(${progress - 2})`;
  };
  window.addEventListener("scroll", updateProgressBar);
});

onUnmounted(() => {
  if (scrollTween.value) {
    scrollTween.value.scrollTrigger.kill();
    scrollTween.value = null;
  }
  window.removeEventListener("scroll", updateProgressBar);
});
</script>

<style lang="scss" scoped>
.home7 {
  z-index: 5;
  background-color: var(--color-bg);
  position: relative;
}
.container {
  width: 150vw;
  min-height: 100vh;
  display: flex;
  flex-wrap: nowrap;
  overscroll-behavior: none;
  padding: 10vh 0 0 20vw;
}

.panel {
  width: 35vw;
  color: var(--color-secondaire);
  img {
    width: 75%;
    margin-bottom: 10%;
  }
  h2,
  p {
    width: 75%;
  }
}

.slider__progress-wrap {
  left: 20vw;
  bottom: 6vh;
  width: 60vw;
  overflow: hidden;
  background-color: #d5512733;
  transform-origin: left center;
  opacity: 1;
  visibility: inherit;
}

.slider__progress,
.slider__progress-wrap {
  display: block;
  position: fixed;
  height: 3px;
  will-change: transform;
  border-radius: 10px;
}

.slider__progress {
  top: 0;
  left: 0;
  width: 100%;
  background-color: var(--color-orange);
  transform: scaleX(0);
  transform-origin: left center;
}


.tel {
  display: none;
}
@media screen and (max-width: 1381px) {
.container {
  padding: 7vh 0 0 20vw;
}
.panel {
  width: 40vw;

  img {
    margin-bottom: 5%;
  }

  h2,
  p {
    width: 92% !important;
  }
 
}
.slider__progress-wrap {
  bottom: 3vh;
  
}

}

@media screen and (max-width: 920px) {
  /* tablettte */

  .home7 {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
  .container {
    width: 600%;
    height: 90vh;
    display: flex;
    flex-wrap: nowrap;
    // padding-left: 10%;
    padding: 10vh 0 0 10vw;
  }
  .panel {
    position: relative;
    z-index: 4;
    width: 100vw;
    margin: 5vh 3vw 10vh 3vw;
    font-weight: 300;
    overflow: hidden;
  }
  .panel div {
    margin: 0 4%;
  }
  .tel {
    display: none;
  }
  .slider__progress,
  .slider__progress-wrap {
    height: 3px;
  }
  .slider__progress-wrap{
    display: none;
  }
}

@media screen and (max-width: 767px) {
  /* mobile */
  .panel {
    position: relative;
    z-index: 4;
    width: 100vw;
    margin: 7vh 2vw 10vh 2vw;
    font-weight: 300;
    overflow: hidden;

    img {
      width: 100%;
      margin-bottom: 10%;
    }
    h2,
    p {
      width: 100%;
    }
  }
}
</style>
