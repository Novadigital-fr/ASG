<template>
  <div class="contenu-global" id="contenu-global">
    <!-- <div class="carte"> -->
      <div
      class="carte"
      id="popup1"
      :style="{
        backgroundImage: `linear-gradient(180deg, rgba(32, 42, 53, 0) 35.3%, #202A35 100%), url(${src1})`,
      }">
      <div class="image"  id="popup1"
      :style="{
        backgroundImage: `linear-gradient(180deg, rgba(32, 42, 53, 0) 35.3%, #202A35 100%), url(${src1})`,
      }"></div>

      <div class="carte_title">
        <h2>{{ titre }}</h2>
        <p class="issou content_small">
          {{ description }}
        </p>
        <img class="icone" src="../../assets/img/fleche_fond.svg" alt="" />
      </div>
      <div class="sous_titre">
          <p class="chancla content_small">
            {{ sousDesc1 }}
          </p>
          <p class="chancla content_small">
            {{ sousDesc2 }}
          </p>
      </div>
    </div>
    <!-- <div class="carte"> -->
      <div
      class="carte "
      :style="{
        backgroundImage: `linear-gradient(180deg, rgba(32, 42, 53, 0) 35.3%, #202A35 100%), url(${src2})`,
      }"
    >
      <div class="image"></div>

      <div class="carte_title">
        <h2>{{ titrePrime }}</h2>
        <p class="issou content_small">
          {{ descriptionPrime }}
        </p>
        <img class="icone2" src="../../assets/img/fleche_fond.svg" alt="" />
      </div>
      <div class="sous_titre">
          <p class="chancla content_small">
            {{ sousDesc1Prime }}
          </p>
          <p class="chancla content_small">
            {{ sousDesc2Prime }}
          </p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    src1: {
      type: String,
      required: true,
    },
    src2: {
      type: String,
      required: true,
    },
    titre: {
      type: String,
      required: true,
    },
    description: {
      type: String,
      required: true,
    },
    sousDesc1: {
      type: String,
      required: true,
    },
    sousDesc2: {
      type: String,
      required: false,
    },
    titrePrime: {
      type: String,
      required: true,
    },
    descriptionPrime: {
      type: String,
      required: true,
    },
    sousDesc1Prime: {
      type: String,
      required: true,
    },
    sousDesc2Prime: {
      type: String,
      required: false,
    },
  },
  // mounted() {
  //   const icone = document.querySelector(".icone");
  //   const icone2 = document.querySelector(".icone2");

  //   const carte = document.querySelector(".carte1");
  //   const description = document.querySelector(".description");
  //   const cartTitle = document.querySelector(".carte_title");
  //   const p = document.querySelector(".carte1 .issou");
  //   carte.addEventListener("mouseover", () => {
  //     description.style.bottom = "2vh";
  //     cartTitle.style.bottom = "20vh";
  //     icone.style.transform = "rotate(0deg)";
  //   });
  //   carte.addEventListener("mouseout", () => {
  //     description.style.bottom = "-200px";
  //     cartTitle.style.bottom = "5vh";
  //     icone.style.transform = "rotate(-45deg)";
  //   });
  //   /* */
  //   const carte2 = document.querySelector(".carte2");
  //   const description2 = document.querySelector(".description2");
  //   const cartTitle2 = document.querySelector(".carte_title2");

  //   carte2.addEventListener("mouseover", () => {
  //     description2.style.bottom = "2vh";
  //     cartTitle2.style.bottom = "20vh";
  //     icone2.style.transform = "rotate(0deg)";
  //   });
  //   carte2.addEventListener("mouseout", () => {
  //     description2.style.bottom = "-200px";
  //     cartTitle2.style.bottom = "5vh";
  //     icone2.style.transform = "rotate(-45deg)";
  //   });
  // },
};
</script>

<style lang="scss" scoped>
.contenu-global {
  display: flex;
  width: 100vw;
  overflow: scroll;
  gap: 20px;
  background-color: var(--color-bg-dark);
  padding: 10vh;
  @media (min-width: 767px) {
    align-items: center;
    justify-content: center;
  }
}
.carte {
  height: fit-content;
  min-width: 300px;
  display: flex;
  flex-direction: column;
  border-radius: 20px;
  @media (max-width: 767px) {
    background: #161d25 !important;

  }
  // transition: all 1s;

  @media (min-width: 767px) {
    background-size: cover;
    background-repeat: no-repeat;
    height: 65vh;
    justify-content: flex-end;
    transition: width 0.8s;
    width: 30vw;
  }

  &:hover {
    @media (min-width: 767px) {
      width: 60vw;
      transition: width 0.8s;
    }
  }

  &:hover > .sous_titre {
    display: flex;
    // transition: all 1s;
  }
  &:hover > .icone,
  &:hover > .icone2 {
    display: none;
  }
  .carte_title {
    display: flex;
    flex-direction: column;
    gap: 20px;
    align-items: flex-end;
    padding: 30px;

    @media (min-width: 767px) {
      max-width: 30vw;
      // transition: all 1s;
      align-items: flex-start;
    }
  }
  .sous_titre {
    display: none;
    gap: 20px;
    flex-direction: column;
    // transition: all 1s;
    padding: 30px;
    // height: 20vh;
    @media (min-width: 767px) {
      flex-direction: row;
      border-top: solid 1px var(--color-text);
      width: 100%;
      overflow: hidden;
      

      p {
        width: 28vw;
      }
    }
  }
}

.image {
  height: 200px;
  width: 100%;
  background-size: cover;
  background-image: linear-gradient(
      180deg,
      rgba(0, 0, 0, 0) 9.25%,
      rgba(0, 0, 0, 0.8) 100%
    ),
    url("/img/Img_City_Resilience/alexander_strategy_group_services_urban_planning_resiliency_assesment.webp");
  @media (min-width: 767px) {
    display: none;
  }
}
.icone,
.icone2 {
  width: 30px;
  height: 30px;
  transition: 0.5s;
}
h2 {
  width: 100%;
}
</style>
