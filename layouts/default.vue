<template>
  <div> 
    <div id="loading-screen"></div>

    <div class="loader">

    <div class="contain-video">
      <div id="lottie-animation" class="video" />
    </div>
      <!-- <client-only>
        <Vue3Lottie
          class="video"
          animationLink="https://assets8.lottiefiles.com/packages/lf20_i8H5xPhhcQ.json"
          :height="100"
          :width="100"
          :speed="2.5"
          loop="none"
        />
      </client-only> -->
      <div class="title2">
          <!-- <div class="div top_title"></div> -->
          <h1>
            ASG is a global advisory firm
            helping clients solve complex
            challenges and redefine the future.

          </h1>
          <!-- <div class="div bottom_title"></div> -->
        </div>
        <h4>alexander strategy group</h4>
    </div>

    <TheHeader />
    <slot />
    <div class="reveal"></div>
    <!-- <div v-if="showFooter"> -->
    <!-- </div> -->
    <div class="light_mode"></div>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import lottie from 'lottie-web';
const showFooter = ref(false);
let animation = ref(null);
let isAnimationStarted = false;

onMounted(() => {

  setTimeout(function() {
  document.getElementById('loading-screen').style.display = 'none';
  }, 900)
  
  setTimeout(function() {

  animation.value = lottie.loadAnimation({
    container: document.getElementById('lottie-animation'), // ID du conteneur défini dans le template
    renderer: 'svg',
    loop: false,
    autoplay: true,
    path: '/img/Anim/asg_logo.json', // Chemin vers votre fichier d'animation JSON
   
  });
  animation.value.setSpeed(2);

}, 1000)


var titre = document.querySelector('.h1');
// Vérifier si l'élément titre a été trouvé
if(titre !== null) {
  // Si l'élément titre a été trouvé, cacher le titre
  titre.style.opacity = 0;
}

// Sélectionner l'élément sous-titre avec la classe ".h4"
var sousTitre = document.querySelector('.h4');
// Vérifier si l'élément sous-titre a été trouvé
if(sousTitre !== null) {
  // Si l'élément sous-titre a été trouvé, cacher le sous-titre
  sousTitre.style.opacity = 0;
}

// Attendre 2 secondes avant de montrer les éléments
setTimeout(function() {
  // Montrer les éléments titre et sous-titre
  if(titre !== null) {
    titre.style.opacity = 1;
  }
  if(sousTitre !== null) {
    sousTitre.style.opacity = 1;
  }
}, 3000);
})
</script>

<style scoped lang="scss">
#loading-screen {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100vh;
  background-color: #202a35;
  z-index: 99009;
}

@font-face {
	font-display: swap;
	font-family: "Nexa";
	src: local("Nexa"), url(/assets/fonts/Nexa-Book.woff2) format("woff2");
	font-weight: 500;
}
@font-face {
	font-display: swap;
	font-family: "Nexa";
	src: local("Nexa"), url(/assets/fonts/Nexa-Bold.woff2) format("woff2");
	font-weight: 700;
}
@font-face {
	font-display: swap;
	font-family: "Nexa";
	src: local("Nexa"), url(/assets/fonts/Nexa-Heavy.woff2) format("woff2");
	font-weight: 900;
}
.reveal{
  width: 100%;
  margin-bottom: 54vh;
  background: none;
  z-index: 1;
  pointer-events: none;
  @media (min-width: 1924px) {
    margin-bottom: 50vh;
  }
  @media (max-width: 1281px) {
    margin-bottom: 59vh;
  }

}


.loader {
  background-color: #202a35;
  width: 100%;
  height: 100vh;
  opacity: 0;
  position: fixed;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
  z-index: 20;
  display: flex;
  padding-top: 15%;
  animation: loading 5s linear;
  transform: scale(0);

  @keyframes loading {
    0% {
      opacity: 1;
      transform: scale(1);
    }
    80% {
      opacity: 1;
      background-color: #202a35;

    }
    100% {
      opacity: 1;
      transform: scale(1);
      background-color: #202a3500;

    }
  }
}
h4 {
    color: var(--color-orange);
    z-index: 10;
    animation: soustitle 4s ease-in-out;
    @keyframes soustitle {
      0% {
        opacity: 0;
      }
      55% {
        opacity: 0;
      }
      75% {
        opacity: 1;
        transform: translateY(-150px);
      }
      80% {
        transform: translateY(-150px);
      }
      90% {
        //   transform: translateY(20px);
      }
      100% {
      }
    }
  }
  .title2 {
    z-index: 4;
    overflow: hidden;
  }

  h1 {
    width: 60%;
    margin: 55px auto 39px auto;
    animation: title 4s ease-in-out;

    @keyframes title {
      0% {
        transform: translateY(-300px);
      }
      80% {
        transform: translateY(-300px);
      }
      100% {
      }
    }
    @media (max-width: 1381px) {
      margin: 25px auto 15px auto;
      width: 65%;

    }
    @media (max-width: 850px) {
      width: 100%;
      padding: 0 5%;

    }
  }
  .contain-video{
    min-height: 130px;
  }
  .video {
    position: relative;
    z-index: 6;
    margin: -2px 0 2px 0;
    width: 125px;
    @media (max-width: 1024px) {
      width: 15vw;

    }
    @media (max-width: 840px) {
      width: 85px;
      margin-top: 15vh;
    }
  }

  @media screen and (max-width: 840px) {
    /* mobile */
    .reveal{
  margin-bottom: 79vh;
}
h4 {
    animation: soustitle 4s ease-in-out;

    @keyframes soustitle {
      0% {
        opacity: 0;
      }
      30% {
        opacity: 0;
      }
      45% {
        opacity: 1;
        transform: translateY(-120px);
      }
      70% {
        transform: translateY(-120px);
      }
      100% {
      }
    }
  }

  h1{
    margin: 40px 0 20px 0;
  }
}


</style>
