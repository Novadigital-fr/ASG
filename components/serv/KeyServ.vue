<template>
  <div class="key_service light_mode">
    <div class="left">
      <p class="desk_button">{{ domaine }}</p>
      <h2>Key Services</h2>
      <NuxtLink to="/contact">
        <div class="button_ordi"><Button text="Contact" /></div>
      </NuxtLink>
    </div>
    <div class="right">
      <details open>
        <summary>
          <h2 class="orange">{{ title1 }}</h2>
          <img class="fleche first_fleche" src="../../assets/img/fleche.svg" alt="" />
        </summary>
        <p class="content_small">
          {{ summary1 }}
        </p>
      </details>
      <details>
        <summary>
          <h2 class="orange">{{ title2 }}</h2>
          <img class="fleche" src="../../assets/img/fleche.svg" alt="" />
        </summary>
        <p class="content_small">
          {{ summary2 }}
        </p>
      </details>
      <details>
        <summary>
          <h2 class="orange">{{ title3 }}</h2>
          <img class="fleche" src="../../assets/img/fleche.svg" alt="" />
        </summary>
        <p class="content_small">
          {{ summary3 }}
        </p>
      </details>
      <details>
        <summary>
          <h2 class="orange">{{ title4 }}</h2>
          <img class="fleche" src="../../assets/img/fleche.svg" alt="" />
        </summary>
        <p class="content_small">
          {{ summary4 }}
        </p>
      </details>
      <details>
        <summary>
          <h2 class="orange">{{ title5 }}</h2>
          <img class="fleche" src="../../assets/img/fleche.svg" alt="" />
        </summary>
        <p class="content_small">
          {{ summary5 }}
        </p>
      </details>
    </div>
    <NuxtLink to="/contact">
      <div class="button_tel"><Button text="Contact" /></div>
    </NuxtLink>
  </div>
</template>

<script>
export default {
  props: {
    domaine:{
      type: String,
      required: false,
    },
    title1: {
      type: String,
      required: false,
    },
    summary1: {
      type: String,
      required: false,
    },
    title2: {
      type: String,
      required: false,
    },
    summary2: {
      type: String,
      required: false,
    },
    title3: {
      type: String,
      required: false,
    },
    summary3: {
      type: String,
      required: false,
    },
    title4: {
      type: String,
      required: false,
    },
    summary4: {
      type: String,
      required: false,
    },
    title5: {
      type: String,
      required: false,
    },
    summary5: {
      type: String,
      required: false,
    },
  },
  mounted() {
    const sums = document.querySelectorAll("summary");
    const details = document.querySelectorAll("details");

    details.forEach((detail) => {
      const title = detail.querySelector("h2");
      if (title.innerHTML === "") {
        detail.style.display = "none";
      }
    });// Récupération de tous les éléments <details>
const detailsElements = document.querySelectorAll('details');

// Parcours de tous les éléments <details>
detailsElements.forEach(details => {
  // Récupération de la flèche correspondante à l'élément <details>
  const arrow = details.querySelector('.fleche');

  // Ajout d'un écouteur d'événements pour le clic sur l'élément <summary>
  details.querySelector('summary').addEventListener('click', () => {
    // Rotation de la flèche de 45 degrés si l'élément <details> est ouvert
    if (details.open) {
      arrow.style.transform = 'rotate(0)';
    } else {
      arrow.style.transform = 'rotate(45deg)';
    }
  });
});
  },
};
</script>

<style lang="scss" scoped>
.key_service {
  color: var(--color-bg-dark);
  background-color: var(--color-bg);
  display: flex;
  padding: 10vh 0;
  position: relative;
  z-index: 21;
  .left {
    width: 40%;
    padding: 5vh 0 0 15vw;
    h2 {
      margin: 2vh 0;
    }
  }
  details summary::-webkit-details-marker {
    display: none;
  }
  .right {
    width: 60%;
    padding: 0 20vw 0 5vh;

    summary {
      list-style: none;
      padding-bottom: 2vh;
      display: flex;
      justify-content: space-between;

      &:hover > .fleche {
        transform: rotate(45deg);
      }
      .first_fleche{
        transform: rotate(45deg);
      }
    }
    summary:hover {
      cursor: pointer;
    }
    p {
      margin-top: 2vh;
    }

    details {
      margin: 5vh 0;
      padding-bottom: 3vh;
      border-bottom: solid 1px var(--color-bg-dark);
    }
  }
}

.fleche {
  transform: rotate(0deg);
  transition: transform 0.5s;
}
.button_tel {
  display: none;
}

@media screen and (max-width: 840px) {
  /* mobile */

  .key_service {
    color: var(--color-bg-dark);
    display: flex;
    flex-direction: column;

    .left {
      width: 100%;
      padding: 5vh 0 0 10vw;

      h2 {
        margin: 2vh 0;
      }
    }
    .right {
      width: 100%;
      padding: 0 10vw 0 5vh;
    }
  }
  .button_ordi {
    display: none;
  }
  .button_tel {
    display: block;
    padding-left: 10vw;
  }
}
</style>
