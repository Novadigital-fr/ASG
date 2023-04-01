<template>
   <div class="tout">
    <div class="contenu-global" id="contenu-global">
      <div class="carte carte1" id="popup1" :style="{ backgroundImage: `linear-gradient(180deg, rgba(32, 42, 53, 0) 35.3%, #202A35 100%), url(${src1})` }">
        <div class="carte_title">
        <img class="icone" src="../../assets/img/fleche_fond.svg" alt="">
        <a href="#contenu-global" class="fermer"></a>
          <h2>{{ titre }}</h2>
          <p class="issou content_small">
            {{ description }}
          </p>
        </div>
        <div class="description">
          <p class="chancla content_small">
            {{ sousDesc1 }}
          </p>
          <p class="chancla content_small">
            {{ sousDesc2 }}
          </p>
        </div>
      </div>
      <div class="carte carte2" :style="{ backgroundImage: `linear-gradient(180deg, rgba(32, 42, 53, 0) 35.3%, #202A35 100%), url(${src2})` }">
        <div class="carte_title2">
          <img class="icone2" src="../../assets/img/fleche_fond.svg" alt="">
          <h2>{{ titrePrime }}</h2>
          <p class="issou content_small">
            {{ descriptionPrime }}
          </p>
        </div>
        <div class="description2">
          <p class="chancla2 content_small">
            {{ sousDesc1Prime }}
          </p>
          <p class="chancla2 content_small">
            {{ sousDesc2Prime }}
          </p>
        </div>
      </div>
    </div>
    <div class="popup1" id="popup1">
    </div>
  </div>
</template>

<script>
export default {
  props: {
    src1: {
      type: String,
      required: true
    },
    src2: {
      type: String,
      required: true
    },
    titre: {
      type: String,
      required: true
    },
    description: {
      type: String,
      required: true
    },
    sousDesc1: {
      type: String,
      required: true
    },
    sousDesc2: {
      type: String,
      required: false
    },
    titrePrime: {
      type: String,
      required: true
    },
    descriptionPrime: {
      type: String,
      required: true
    },
    sousDesc1Prime: {
      type: String,
      required: true
    },
    sousDesc2Prime: {
      type: String,
      required: false
    }
  },
  mounted() {
    const icone = document.querySelector(".icone");
    const icone2 = document.querySelector(".icone2");

    const carte = document.querySelector(".carte1");
    const description = document.querySelector(".description");
    const cartTitle = document.querySelector(".carte_title");
    const p = document.querySelector(".carte1 .issou");
    carte.addEventListener("mouseover", () => {
      description.style.bottom = "2vh";
      cartTitle.style.bottom = "20vh";
      icone.style.transform = "rotate(0deg)";
    });
    carte.addEventListener("mouseout", () => {
      description.style.bottom = "-200px";
      cartTitle.style.bottom = "5vh";
      icone.style.transform = "rotate(-45deg)";

    });
    /* */
    const carte2 = document.querySelector(".carte2");
    const description2 = document.querySelector(".description2");
    const cartTitle2 = document.querySelector(".carte_title2");

    carte2.addEventListener("mouseover", () => {
      description2.style.bottom = "2vh";
      cartTitle2.style.bottom = "20vh";
      icone2.style.transform = "rotate(0deg)";

    });
    carte2.addEventListener("mouseout", () => {
      description2.style.bottom = "-200px";
      cartTitle2.style.bottom = "5vh";
      icone2.style.transform = "rotate(-45deg)";

    });
  },
};
</script>

<style lang="scss" scoped>
.contenu-global {
  width: 100%;
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: var(--color-bg-dark);
}
.carte {
  background-size: cover;
  background-position: center center;
  width: 30vw;
  height: 65vh;
  position: relative;
  overflow: hidden;
  transition: all 0.5s;
  border-radius: 20px;
  margin: 0 1vw;

  .carte_title, .carte_title2 {
    width: 25vw;
    margin: 0 2vw;
    transition: all 0.5s;
    position: absolute;
    bottom: 5vh;

    h2{
        margin: 1vh 0;
    }
    .icone, .icone2{
        transition: 0.5s;
    }
    
  }
}
.carte1 {
  background-image: linear-gradient(
      180deg,
      rgba(0, 0, 0, 0) 9.25%,
      rgba(0, 0, 0, 0.8) 100%
    ),
    url("/img/Img_City_Resilience/alexander_strategy_group_services_urban_planning_resiliency_assesment.webp");
}
.carte2 {
  background-image: linear-gradient(
      180deg,
      rgba(0, 0, 0, 0) 9.25%,
      rgba(0, 0, 0, 0.8) 100%
    ),
    url("/img/Img_City_Resilience/alexander_strategy_group_services_urban_planning_resiliency_plan.webp");
}

.carte:hover {
  width: 60vw;
}
.carte2:hover {
  width: 60vw;
}
.description,
.description2 {
  display: flex;
  justify-content: space-between;
  margin: 0 2vw;
  position: absolute;
  bottom: -200px;
  transition: all 0.5s;
  border-top: 1px solid white;
  padding-top: 15px;
  width: 55vw;

  p {
    width: 26vw;
  }
}

// @media screen and (max-width: 767px) {
//   /* mobile */

//   .contenu-global {
//   width: fit-content;
//   justify-content: flex-start;
// }
//   .carte {
//   background-size: cover;
//   background-position: center center;
//   width: 70vw;
//   height: 50vh;
//   position: relative;
//   overflow: hidden;
//   transition: all 0.5s;
//   border-radius: 20px;
//   margin: 0 5vw;

//   .carte_title, .carte_title2 {
//     width: 60vw;
//     margin: 0 2vw;
//     transition: all 0.5s;
//     position: absolute;
//     bottom: 5vh;

//     h2{
//         margin: 1vh 0;
//     }
//     .icone, .icone2{
//         transition: 0.5s;
//     }
    
//   }
// }

// .carte:hover {
//   width: 100vw;
// }
// .carte2:hover {
//   width: 100vw;
// }
// .description,
// .description2 {
//   display: flex;
//   justify-content: space-between;
//   margin: 0 2vw;
//   position: absolute;
//   bottom: -1400px;
//   transition: all 0.5s;
//   border-top: 1px solid white;
//   padding-top: 15px;
//   width: 90vw;

//   p {
//     width: 45vw;
//   }
// }
// }

</style>
