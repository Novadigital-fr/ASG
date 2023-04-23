<template>
  <div class="full dark_mode">
    <div class="top">
      <div class="sticky">
        <!-- <client-only>
            <Vue3Lottie
              class="rond"
              id="firstLottie"
              animationLink="https://lottie.host/d00219da-570b-46c4-9e43-06ea32081e16/m4JGdRnPmi.json"
              :height="100"
              :width="100"
              :speed=".5"
            />
          </client-only> -->
        <div class="div_logo">
        <img class="video" src="/img/Logos/alexander_strategy_group_Logo_icon.svg" alt="">
          
        </div>
        <div class="title" >
          <!-- <div class="div top_title"></div> -->
          <h1 class="h1">
            We help mitigate risk to keep <br />
            communities, companies, <br />
            and individuals safe
          </h1>
          <!-- <div class="div bottom_title"></div> -->
        </div>
        <h4 class="h4">alexander strategy group</h4>

        <div class="cercle"></div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { onMounted, onUnmounted, ref } from "vue";
import gsap from "gsap";

let scrollListener = null; // Déclarer une variable pour stocker la référence de l'événement de défilement

onMounted(() => {
  const cercle = document.querySelector(".cercle");
  const back = document.querySelector(".sticky");
  const title = document.querySelector(".h1");
  const blockTitle = document.querySelector(".title");
  const sousTitle = document.querySelector(".sticky h4");

  gsap.from(blockTitle, {
      duration: 1,
      opacity: 0,
      y: 50,
      ease: "power4.out",
      delay: 0.5,
    });
  

    let animationJouee = false;

scrollListener = function (e) {
    // cercle.style.transform="scale(" + window.scrollY / 100 + ")";
    const title = document.querySelector(".h1");

    // console.log(this.scrollY);
    cercle.style.borderWidth = window.scrollY * 2 + "px";
    cercle.style.width = 11000 - window.scrollY * 10 + "px";
    cercle.style.height = 11000 - window.scrollY * 10 + "px";

    if (window.scrollY > 530) {
      title.innerHTML =
        "Alexander Strategy Group <br> is a leading global <br> <span class='orange'>consulting services firm</span> ";
      sousTitle.innerHTML = ". ";
      title.classList = "anim_text";
      blockTitle.style.zIndex = 20;
    }
    if (window.scrollY > 530 && !animationJouee) {
      gsap.fromTo(
        title,
        { y: 50, opacity: 0 },
        { y: 0, opacity: 1, duration: 1 }
      );
      animationJouee = true;
    }
    if (window.scrollY < 530) {
      title.innerHTML =
        "We help mitigate risk to keep <br/> communities, companies, <br /> and individuals safe";
      sousTitle.innerHTML = "alexander strategy group";
      blockTitle.style.zIndex = 4;
      animationJouee = false;
    }
    if (window.scrollY > 1900) {
      cercle.style.display = "none";
    } else {
      cercle.style.display = "block";
    }
  };
  window.addEventListener("scroll", scrollListener);

});


onUnmounted(() => {
  // Supprimer l'événement de défilement lors du démontage du composant
  window.removeEventListener("scroll", scrollListener);
});


</script>

<style lang="scss" scoped>
.top {
  height: 200vh;
}
@keyframes opacit {
  0% {
    opacity: 1;
  }

  100% {
    opacity: 0;
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
  // animation: loading 4s linear;
  overflow: hidden;
 
  // transform: scale(0);

  // @keyframes loading {
  //   0% {
  //     background-image: none;
  //     background-color: var(--color-bg-dark);
  //     // opacity: 1;
  //     // transform: scale(1);
  //   }
  //   80% {
  //     // opacity: 1;
  //     background-color: var(--color-bg-dark);
  //   }
  //   100% {
  //     background-color: rgba(32, 42, 53, 0) 37.45%;
  //     // opacity: 0;
  //     // transform: scale(1);
  //   }
  // }

  .video {
    position: relative;
    z-index: 6;
    width: 125px;
  }

  .title {
    z-index: 4;
    overflow: hidden;
  }

  h1 {
    margin: 55px 0 39px 0;
    @media (max-width: 1381px) {
      margin: 25px 0 15px 0;
    }
    // animation: title 2s;

    // @keyframes title {
    //   0% {
    //     transform: translateY(-250px);
    //   }
    //   70% {
    //     transform: translateY(-250px);
    //   }
    //   100% {
    //   }
    // }
  }
  h4 {
    color: var(--color-orange);
    // animation: soustitle 2s;

    // @keyframes soustitle {
    //   0% {
    //     opacity: 0;
    //   }
    //   30% {
    //     opacity: 0;
    //   }
    //   50% {
    //     opacity: 1;
    //     transform: translateY(-150px);
    //   }
    //   70% {
    //     transform: translateY(-150px);
    //   }
    //   100% {
    //   }
    // }
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
  z-index: 5;
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

@media screen and (max-width: 840px) {
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

    h1{
      margin: 40px 0 20px 0;

    }
    .video {
      width: 85px;
    }
    // h4 {
    //   animation: soustitle 2s;

    //   @keyframes soustitle {
    //     0% {
    //       opacity: 0;
    //     }
    //     30% {
    //       opacity: 0;
    //     }
    //     50% {
    //       opacity: 1;
    //       transform: translateY(-100px);
    //     }
    //     70% {
    //       transform: translateY(-100px);
    //     }
    //     100% {
    //     }
    //   }
    // }
  }
  .div_logo {
    margin-top: 15vh;
  }
  .cercle {
    max-width: 260vw;
    max-height: 260vw;
    margin: auto -80vw;
  }
}
</style>
