<template>
  <div> 
    <div class="loader">
      <client-only>
        <Vue3Lottie
          class="video"
          animationLink="https://assets7.lottiefiles.com/packages/lf20_i8H5xPhhcQ.json"
          :height="100"
          :width="100"
          :speed="2.5"
          loop="none"
        />
      </client-only>
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

const showFooter = ref(false);
onMounted(() => {
// const header = document.querySelector(".menu_ordi");
// // Cacher le header avec la méthode CSS "display:none"
// header.style.display = "none";
// Attendre 2 secondes avec la méthode "setTimeout()"
// setTimeout(() => {
//   // Afficher à nouveau le header après 2 secondes
//   header.style.display = "block";
// }, 2000);
// Attendre 2 secondes avant de montrer les éléments
// Attendre 2 secondes avant de montrer les éléments
 // 2000 millisecondes = 2 secondes
 // Définir une variable pour stocker l'information de la première visite
// Sélectionner l'élément titre avec la classe ".h1"
// setTimeout(() => {
//     showFooter.value = true;
//   }, 1000);


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
}, 2800);
})
</script>

<style scoped lang="scss">


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
  animation: loading 4s linear;
  transform: scale(0);

  @keyframes loading {
    0% {
      opacity: 1;
      transform: scale(1);
    }
    60% {
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
    animation: soustitle 3s ease-in-out;
    @keyframes soustitle {
      0% {
        opacity: 0;
      }
      45% {
        opacity: 0;
      }
      65% {
        opacity: 1;
        transform: translateY(-150px);
      }
      70% {
        transform: translateY(-150px);
      }
      80% {
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
    width: 55%;
    margin: 55px auto 39px auto;
    animation: title 3s ease-in-out;

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
    @media (max-width: 1381px) {
      margin: 25px auto 15px auto;
      width: 65%;

    }
    @media (max-width: 850px) {
      width: 100%;
      padding: 0 5%;

    }
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
    animation: soustitle 3s ease-in-out;

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
