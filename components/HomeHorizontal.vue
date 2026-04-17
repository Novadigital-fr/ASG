<template>
  <div class="home7 light_mode" ref="container">
    <div id="container" class="container">
      <section class="tel panel"></section>
      <section class="panel animationh1">
        <div>
          <NuxtImg
            src="/img/hp/alexander_strategy_group_entry.webp"
            alt=""
           
          />
          <h2>The Entry</h2>
          <p><strong>You discover ASG through word-of-mouth.</strong></p>
          <p>We are engaged exclusively through a trusted network of global leaders.</p>
          <p>We do not advertise.</p>
          <p>We do not seek the limelight, and we do not leave a trace.</p>
        </div>
      </section>
      <section class="panel animationh2">
        <div>
          <NuxtImg
            src="/img/hp/alexander_strategy_group_mandate.webp"
            alt=""
           
          />
          <h2>The Mandate</h2>
          <p><strong>Clients come when the situation has moved beyond average complexity, when the traditional mix of firms no longer works.</strong></p>
          <p>When a challenge has become hyper-critical, when the stakes transcend financial or legacy interests, ASG is engaged.</p>
        </div>
      </section>
      <section class="panel animationh3">
        <div>
          <NuxtImg
            src="/img/hp/alexander_strategy_group_orechestration.webp"
            alt=""
           
          />
          <h2>The Orchestration</h2>
          <p><strong>We do not offer a menu of services. We solve the matter.</strong></p>
          <p>Critical issues rarely live within one lane; they spill across legal, political, reputational, and financial borders, sometimes simultaneously.</p>
          <p>ASG designs the complete architecture of the solution and orchestrates each part to ensure it holds.</p>
          <p>Whether the intervention is a sudden, surgical strike or a partnership that spans years and multiple continents, our focus is the same: the quiet resolution of the impossible.</p>
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
if (process.client) gsap.registerPlugin(ScrollTrigger);

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
  z-index: 20;
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
    width: 50%;
    margin-bottom: 6%;
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
  width: 48vw;

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
    min-height: 90vh;
    height: auto;
    display: flex;
    flex-wrap: nowrap;
    padding: 10vh 0 0 10vw;
    align-items: flex-start;
  }
  .panel {
    position: relative;
    z-index: 4;
    width: 100vw;
    margin: 5vh 3vw 10vh 3vw;
    font-weight: 300;
    overflow: visible;
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
    overflow: visible;

    img {
      width: 70%;
      margin-bottom: 8%;
    }
    h2,
    p {
      width: 100%;
    }
  }
}
</style>
