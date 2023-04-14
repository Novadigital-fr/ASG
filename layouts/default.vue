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

// onMounted(() => {
// const header = document.querySelector(".menu_ordi");

// // Cacher le header avec la méthode CSS "display:none"
// header.style.display = "none";

// // Attendre 2 secondes avec la méthode "setTimeout()"
// setTimeout(() => {
//   // Afficher à nouveau le header après 2 secondes
//   header.style.display = "block";
// }, 2000);
// })
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
  animation: loading 3s linear;
  transform: scale(0);

  @keyframes loading {
    0% {
      opacity: 1;
      transform: scale(1);
    }
    90% {
      opacity: 1;
    }
    100% {
      opacity: 0;
      transform: scale(1);
    }
  }
}
h4 {
    color: var(--color-orange);
    z-index: 10;
    animation: soustitle 4s linear;
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
    margin: 4% 0;
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
  .video {
    position: relative;
    z-index: 6;
    width: 125px;
    @media (max-width: 1024px) {
      width: 15vw;

    }
    @media (max-width: 840px) {
      width: 85px;
      padding-top: 25vh;
    }
  }

  @media screen and (max-width: 840px) {
    /* mobile */
    .reveal{
  margin-bottom: 79vh;
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


</style>
