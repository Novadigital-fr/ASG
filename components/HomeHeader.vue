<template>
  <div class="full">
    <div class="top">
      <div class="sticky">
        <div class="div_logo">
          <client-only>
            <Vue3Lottie
              class="video"
              animationLink="https://lottie.host/f16fecf0-bd2e-4429-a628-a9e108e25576/5HPDh1eRql.json"
              :height="100"
              :width="100"
              :speed="2.5"
              loop=false
            />
          </client-only>
        </div>
        <div class="title">
          <!-- <div class="div top_title"></div> -->
          <h1>
            We help mitigate risk to keep <br />
            communities, companies, <br />
            and individuals safe
          </h1>
          <!-- <div class="div bottom_title"></div> -->
        </div>
        <h4>alexander strategy group</h4>
        <div class="cercle"></div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { onMounted, onUnmounted, ref } from "vue";

onMounted(() => {
  // if (window.matchMedia("(min-width: 1024px)").matches) {

  const cercle = document.querySelector(".cercle");
  const back = document.querySelector(".sticky");
  const title = document.querySelector("h1");
  const sousTitle = document.querySelector(".sticky h4");

  window.addEventListener("scroll", function (e) {
    // cercle.style.transform="scale(" + window.scrollY / 100 + ")";
    // console.log(this.scrollY);
    cercle.style.borderWidth = window.scrollY * 2 + "px";
    cercle.style.width = 9000 - window.scrollY * 10 + "px";
    cercle.style.height = 9000 - window.scrollY * 10 + "px";

    if (window.scrollY > 330) {
      title.innerHTML =
        "Alexander Strategy Group <br> is a leading global <br> <span class='orange'>consulting services firm</span> ";
      sousTitle.innerHTML = ". ";
      title.classList = "anim_text";
    }
    if (window.scrollY < 330) {
      title.innerHTML =
        "We help mitigate risk to keep <br/> communities, companies, <br /> and individuals safe";
      sousTitle.innerHTML = "alexander strategy group";
    }
    if (window.scrollY > 1500) {
      cercle.style.display = "none";
    } else {
      cercle.style.display = "block";
    }
  });
});
</script>

<style lang="scss" scoped>
.top {
  height: 150vh;
}
.anim_text{
  animation: opacit 10s;
  @keyframes opacit {
    0% {
     opacity: 1;
    }
    
    100% {
     opacity: 0;
    }
  }
}
.sticky {
  min-height: 100vh;
  width: 100vw;
  background-image: linear-gradient(
      180deg,
      rgba(32, 42, 53, 0) 37.45%,
      rgba(32, 42, 53, 0.395797) 65.9%,
      rgba(32, 42, 53, 0.87) 100%
    ),
    url("../assets/img/Img_HP/alexander_strategy_group_homepage.webp");
  background-repeat: no-repeat;
  background-size: cover;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
  padding-top: 10%;
  top: 0;
  z-index: 1;
  position: sticky;
  position: -webkit-sticky; /* pour une meilleure compatibilité avec Safari */
  animation: loading 4s linear;
  overflow: hidden;
  // transform: scale(0);

  @keyframes loading {
    0% {
      background-image: none;
      background-color: var(--color-bg-dark);
      // opacity: 1;
      // transform: scale(1);
    }
    80% {
      // opacity: 1;
      background-color: var(--color-bg-dark);
    }
    100% {
      background-color: rgba(32, 42, 53, 0) 37.45%;
      // opacity: 0;
      // transform: scale(1);
    }
  }

  .video {
    position: relative;
    z-index: 4;
    width: 8vw;
  }

  .title {
    z-index: 4;
    overflow: hidden;
  }

  h1 {
    margin: 2% 0;
    animation: title 4s;

    @keyframes title {
      0% {
        transform: translateY(-250px);
      }
      70% {
        transform: translateY(-250px);
      }
      100% {
      }
    }
  }
  h4 {
    color: var(--color-orange);
    animation: soustitle 4s;

    @keyframes soustitle {
      0% {
        opacity: 0;
      }
      30% {
        opacity: 0;
      }
      50% {
        opacity: 1;
        transform: translateY(-150px);
      }
      70% {
        transform: translateY(-150px);
      }
      100% {
      }
    }
  }
}

.cercle {
  pointer-events: none;
  border-color: #202a35;
  border-width: 0;
  border-style: solid;
  border-radius: 100%;
  max-width: 120vw;
  max-height: 120vw;
  align-items: center;
  display: flex;
  align-items: center;
  text-align: center;
  justify-content: center;
  position: absolute;
  margin: auto -10vw;
  inset: 0;
  z-index: 1;
}

@media screen and (max-width: 1024px) {
  .cercle {
    max-width: 180vw;
    max-height: 180vw;
    margin: auto -40vw;
  }

  .sticky {
    .video {
      width: 15vw;
    }
  }
}

@media screen and (max-width: 767px) {
  /* mobile */
  .sticky {
    background: linear-gradient(
        180deg,
        rgba(32, 42, 53, 0) 37.45%,
        rgba(32, 42, 53, 0.395797) 65.9%,
        rgba(32, 42, 53, 0.87) 100%
      ),
      url("../assets/img/Img_HP/alexander_strategy_group_homepage_mobile.webp");
    background-size: cover;

    .video {
      width: 25vw;
    }
    h4 {
    animation: soustitle 4s;

    @keyframes soustitle {
      0% {
        opacity: 0;
      }
      30% {
        opacity: 0;
      }
      50% {
        opacity: 1;
        transform: translateY(-100px);
      }
      70% {
        transform: translateY(-100px);
      }
      100% {
      }
    }
  }
  }

  .cercle {
    max-width: 260vw;
    max-height: 260vw;
    margin: auto -80vw;
  }
}
</style>
