<template>
  <div class="contenu-global" id="contenu-global">
    <!-- <div class="carte"> -->
    <div
      class="carte"
      id="popup1"
      :style="{
        backgroundImage: `linear-gradient(180deg, rgba(0, 0, 0, 0) 9.25%, rgba(0, 0, 0, 0.8) 100%), url(${src1})`,
      }"
    >
      <div
        class="image"
        id="popup1"
        :style="{
          backgroundImage: ` url(${src1})`,
        }"
      ></div>

      <div class="carte_title">
        <img class="icone" src="../../assets/img/fleche_fond.svg" alt="" />
        <h2>{{ titre }}</h2>
        <p class="issou content_small">
          {{ description }}
        </p>
        <img class="icone_tel" src="../../assets/img/fleche_fond.svg" alt="" />
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
      class="carte"
      :style="{
        backgroundImage: `linear-gradient(180deg, rgba(0, 0, 0, 0) 9.25%, rgba(0, 0, 0, 0.8) 100%), url(${src2})`,
      }"
    >
      <div
        class="image"
        id="popup1"
        :style="{
          backgroundImage: `url(${src2})`,
        }"
      ></div>

      <div class="carte_title">
        <img class="icone" src="../../assets/img/fleche_fond.svg" alt="" />
        <h2>{{ titrePrime }}</h2>
        <p class="issou content_small">
          {{ descriptionPrime }}
        </p>
        <img class="icone_tel" src="../../assets/img/fleche_fond.svg" alt="" />
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
  mounted() {
    const icone = document.querySelector(".icone");
    // const icone2 = document.querySelector(".icone2");
    const carte = document.querySelector(".carte");
    const description = document.querySelector(".sous_titre");
    const cartTitle = document.querySelector(".carte_title");
    // const p = document.querySelector(".carte1 .issou");
    carte.addEventListener("mouseover", () => {
      // description.style.marginBottom = "0px";
      // cartTitle.style.bottom = "20vh";
      icone.style.transform = "rotate(0deg)";
    });
    carte.addEventListener("mouseout", () => {
      // description.style.marginBottom = "-200px";
      // cartTitle.style.bottom = "5vh";
      icone.style.transform = "rotate(-45deg)";
    });
    /* */
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


const cartes = document.querySelectorAll('.carte');

cartes.forEach(carte => {
  carte.addEventListener('click', () => {
    const descriptionParent = carte.querySelector('.sous_titre');
    // Ajouter ou supprimer la classe "full-width" pour chaque carte
    if (carte.classList != 'carte full-width'){
      carte.classList.add('full-width');
      console.log(descriptionParent);
      descriptionParent.style.display = "flex"
    }
    else{
      carte.classList.remove('full-width')
      descriptionParent.style.display = "none"

    }
    
  });
});

  },
};
</script>

<style lang="scss" scoped>
.contenu-global {
  display: flex;
  width: 100vw;
  overflow: scroll;
  gap: 20px;
  background-color: var(--color-bg-dark);
  padding: 10vh 0 10vh 6vw;
  justify-content: flex-start;

  @media (min-width: 767px) {
    // width: 90%;
    padding-left: 10vw;
    align-items: center;
    justify-content: center;
  }
}
.full-width{
  @media (max-width: 767px) {

  width: 100vw;
  min-height: 100vh;
  transition: all 1s;
position: fixed;
inset: 0;
  }
}
.carte {
  // height: fit-content;
  min-width: 300px;
  display: flex;
  flex-direction: column;
  border-radius: 20px;
  @media (max-width: 767px) {
    background: #161d25 !important;
  }

  @media (min-width: 767px) {
    background-size: cover;
    background-repeat: no-repeat;
    height: 65vh;
    justify-content: flex-end;
    transition: width 0.8s;
    width: 30vw;
    overflow: hidden;
  }

  &:hover {
    @media (min-width: 767px) {
      width: 60vw;
      transition: width 0.8s;
    }
  }

  &:hover > .sous_titre {
    @media (min-width: 767px) {

    display: flex;
    transition: all 1s;
    }
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
      justify-content: space-between;
      border-top: solid 1px var(--color-text);
      width: 54vw;
      margin: 0 2vw;
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
  border-radius: 20px 20px 0 0;
  // background-image: linear-gradient(
  //     180deg,
  //     rgba(0, 0, 0, 0) 9.25%,
  //     rgba(0, 0, 0, 0.8) 100%
  //   ),
  //   url("/img/Img_City_Resilience/alexander_strategy_group_services_urban_planning_resiliency_assesment.webp");
  @media (min-width: 767px) {
    display: none;
  }
}
.icone {
  display: none;
  @media (min-width: 767px) {
    width: 40px;
    height: 40px;
    transition: 0.5s;
    display: block;
  }
}
.icone_tel {
  width: 30px;
  height: 30px;
  transition: 0.5s;
  @media (min-width: 767px) {
    display: none;
  }
}
h2 {
  width: 100%;
}
</style>
