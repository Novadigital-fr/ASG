<template>
  <div> 
    <div class="loader">
      <client-only>
        <Vue3Lottie
          class="video"
          animationLink="https://lottie.host/f16fecf0-bd2e-4429-a628-a9e108e25576/5HPDh1eRql.json"
          :height="100"
          :width="100"
          :speed="2.5"
          loop="none"
        />
      </client-only>
      <div class="title2">
          <!-- <div class="div top_title"></div> -->
          <h1>
            We help mitigate risk to keep <br />
            communities, companies, <br />
            and individuals safe
          </h1>
          <!-- <div class="div bottom_title"></div> -->
        </div>
        <h4>alexander strategy group</h4>
    </div>

    <TheHeader />
    <slot />
    <div class="reveal"></div>
    <TheFooter />
    <div class="light_mode"></div>
  </div>
</template>

<script setup>


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

  var titre = document.querySelector('.h1');
  var sousTitre = document.querySelector('.h4');
  titre.style.opacity = 0;
  sousTitre.style.opacity = 0;

  setTimeout(function() {
  // Sélectionner les éléments à montrer
  var titre = document.querySelector('.h1');
  var sousTitre = document.querySelector('.h4');
  
  // Changer la propriété "display" pour les montrer
  titre.style.opacity = 1;
  sousTitre.style.opacity = 1;

}, 2000); 


})

</script>

<style scoped lang="scss">


.reveal{
  width: 100%;
  margin-bottom: 57vh;
  background: none;
  z-index: 1;
  pointer-events: none;

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
  padding-top: 10%;
  animation: loading 5s linear;
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
    animation: soustitle 3s linear;
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
    margin: 55px 0 39px 0;
    animation: title 3s;

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
  .video {
    position: relative;
    z-index: 6;
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
    animation: soustitle 2.5s;

    @keyframes soustitle {
      0% {
        opacity: 0;
      }
      30% {
        opacity: 0;
      }
      45% {
        opacity: 1;
        transform: translateY(-100px);
      }
      75% {
        transform: translateY(-100px);
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
