<template>
  <div class="key_service">
    <div class="left">
      <p class="desk_button">National Security</p>
      <h2>Key Services</h2>
      <div class="button_ordi"><Button text="Contact" /></div>
    </div>
    <div class="right">
      <details>
        <summary>
          <h2 class="orange">Message Development</h2>
          <img class="fleche" src="../../assets/img/fleche.svg" alt="" />
        </summary>
        <p class="content_small">
        To mitigate risk, one must understand where the threats emanate. Our
        experts provide a 360 degree understanding of the national security
        risks that companies or communities face. From state actors, to
        terrorist groups, to cyber risks, Alexander Strategy Group takes a
        holistic approach to risk analysis to ensure that our clients are able
        to detect, deter, prevent, and respond to evolving threats.
      </p>
      </details>
      <details>
        <summary>
          <h2 class="orange">Strategic Planning</h2>
          <img class="fleche" src="../../assets/img/fleche.svg" alt="" />
        </summary>
        <p class="content_small">
        To mitigate risk, one must understand where the threats emanate. Our
        experts provide a 360 degree understanding of the national security
        risks that companies or communities face. From state actors, to
        terrorist groups, to cyber risks, Alexander Strategy Group takes a
        holistic approach to risk analysis to ensure that our clients are able
        to detect, deter, prevent, and respond to evolving threats.
      </p>
      </details>
      <details>
        <summary>
          <h2 class="orange">Press Relations</h2>
          <img class="fleche" src="../../assets/img/fleche.svg" alt="" />
        </summary>
        <p class="content_small">
        To mitigate risk, one must understand where the threats emanate. Our
        experts provide a 360 degree understanding of the national security
        risks that companies or communities face. From state actors, to
        terrorist groups, to cyber risks, Alexander Strategy Group takes a
        holistic approach to risk analysis to ensure that our clients are able
        to detect, deter, prevent, and respond to evolving threats.
      </p>
      </details>
      <details>
        <summary>
          <h2 class="orange">Crisis Communications</h2>
          <img class="fleche" src="../../assets/img/fleche.svg" alt="" />
        </summary>
        <p class="content_small">
        To mitigate risk, one must understand where the threats emanate. Our
        experts provide a 360 degree understanding of the national security
        risks that companies or communities face. From state actors, to
        terrorist groups, to cyber risks, Alexander Strategy Group takes a
        holistic approach to risk analysis to ensure that our clients are able
        to detect, deter, prevent, and respond to evolving threats.
      </p>
      </details>
      <details>
        <summary>
          <h2 class="orange">Creative</h2>
          <img class="fleche" src="../../assets/img/fleche.svg" alt="" />
        </summary>
        <p class="content_small">
        To mitigate risk, one must understand where the threats emanate. Our
        experts provide a 360 degree understanding of the national security
        risks that companies or communities face. From state actors, to
        terrorist groups, to cyber risks, Alexander Strategy Group takes a
        holistic approach to risk analysis to ensure that our clients are able
        to detect, deter, prevent, and respond to evolving threats.
      </p>
      </details>
    </div>
    <div class="button_tel"><Button text="Contact" /></div>
  </div>
</template>

<script setup>
onMounted(() => {
  const sums = document.querySelectorAll("summary");
  sums.forEach((sum) => {
    sum.addEventListener("click", function (e) {
      const flech = e.currentTarget.closest("details").querySelector(".fleche");
      if (flech.style.transform === "rotate(45deg)") {
        flech.style.transform = "rotate(0deg)";
        flech.style.transition = "0.3s";
      } else {
        flech.style.transform = "rotate(45deg)";
        flech.style.transition = "0.3s";
      }
    });
  });
});
</script>

<style lang="scss" scoped>
.key_service {
  color: var(--color-bg-dark);
  display: flex;
  margin: 10vh 0;
  .left {
    width: 40%;
    padding: 5vh 0 0 15vw;

    h2 {
      margin: 2vh 0;
    }
  }
  .right {
    width: 60%;
    padding: 0 20vw 0 5vh;

    summary {
      list-style: none;
      padding-bottom: 2vh;
      display: flex;
      justify-content: space-between;
    }
    p{
      margin-top: 2vh;
    }

    details {
      margin: 5vh 0;
      padding-bottom: 3vh;
      border-bottom: solid 1px var(--color-bg-dark);
    }
   
  }
  
}
.button_tel{
    display: none;
  }

@media screen and (max-width: 767px) {
  /* mobile */

  .key_service {
  color: var(--color-bg-dark);
  display: flex;
  flex-direction: column;
  margin: 10vh 0;

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
.button_ordi{
  display: none;
}
.button_tel{
    display: inline;

    margin-left: 10vw;
  }
}
</style>
