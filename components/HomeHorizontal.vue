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
        </div>
      </section>
    </div>
    <div class="slider__progress-wrap js-progress-wrap">
      <div class="slider__progress js-progress"></div>
    </div>
  </div>
</template>

<script setup>
import { onMounted, onUnmounted, ref } from "vue";
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
if (process.client) gsap.registerPlugin(ScrollTrigger);

const scrollTween = ref(null);
const mobileScrollHandler = ref(null);

onMounted(() => {
  const progressBar = document.querySelector(".slider__progress");

  if (window.matchMedia("(min-width: 920px)").matches) {
    // Desktop : GSAP scroll horizontal
    const progressWrap = document.querySelector(".slider__progress-wrap");
    let sections = gsap.utils.toArray(".panel");
    scrollTween.value = gsap.to(sections, {
      xPercent: -100 * (sections.length - 3),
      ease: "none",
      scrollTrigger: {
        trigger: "#container",
        pin: true,
        scrub: 0.1,
        end: "+=1000",
        onEnter: () => { progressWrap.style.opacity = "1"; },
        onLeave: () => { progressWrap.style.opacity = "0"; },
        onEnterBack: () => { progressWrap.style.opacity = "1"; },
        onLeaveBack: () => { progressWrap.style.opacity = "0"; },
        onUpdate: (self) => {
          progressBar.style.transform = `scaleX(${self.progress})`;
        },
      },
    });

  } else {
    // Mobile : scroll horizontal natif
    const container = document.querySelector(".container");
    mobileScrollHandler.value = () => {
      const maxScroll = container.scrollWidth - container.clientWidth;
      const progress = maxScroll > 0 ? container.scrollLeft / maxScroll : 0;
      progressBar.style.transform = `scaleX(${progress})`;
    };
    container.addEventListener("scroll", mobileScrollHandler.value);
  }
});

onUnmounted(() => {
  if (scrollTween.value) {
    scrollTween.value.scrollTrigger?.kill();
    scrollTween.value = null;
  }
  const container = document.querySelector(".container");
  if (container && mobileScrollHandler.value) {
    container.removeEventListener("scroll", mobileScrollHandler.value);
  }
});
</script>

<style lang="scss" scoped>
.home7 {
  z-index: 20;
  background-color: var(--color-bg);
  position: relative;
  padding-bottom: 4vh;
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
  display: block;
  position: fixed;
  left: 20vw;
  bottom: 6vh;
  width: 60vw;
  height: 3px;
  overflow: hidden;
  background-color: #d5512733;
  border-radius: 10px;
  opacity: 0;
}

.slider__progress {
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: var(--color-orange);
  transform: scaleX(0);
  transform-origin: left center;
  border-radius: 10px;
  will-change: transform;
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
  /* tablette / mobile : scroll horizontal natif */
  .home7 {
    overflow: visible;
  }
  .container {
    overflow-x: scroll;
    overflow-y: visible;
    -webkit-overflow-scrolling: touch;
    scroll-snap-type: x mandatory;
    width: 100%;
    min-height: auto;
    height: auto;
    display: flex;
    flex-wrap: nowrap;
    padding: 8vh 5vw 4vh 5vw;
    align-items: flex-start;
    gap: 5vw;
    box-sizing: border-box;
  }
  .panel {
    position: relative;
    z-index: 4;
    width: 82vw;
    flex-shrink: 0;
    scroll-snap-align: start;
    font-weight: 300;
    overflow: visible;
  }
  .panel div {
    padding-left: 5vw;
  }
  .tel {
    display: none;
  }
  .slider__progress-wrap {
    position: relative;
    left: auto;
    bottom: auto;
    opacity: 1;
    margin: 3vh 5vw;
    width: 90vw;
  }
}

@media screen and (max-width: 767px) {
  .panel {
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
