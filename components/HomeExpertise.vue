<template>
  <div class="expertise light_mode">
    <div class="top">
      <div class="left animation1">
        <!-- <img
          src="../assets/img/Img_HP/alexander_strategy_group_expertise_governement.webp"
          alt=""
        /> -->
      </div>
      <div class="right animation">
        <h2>Expertise at the highest-levels of government</h2>
        <p>
          Drawing on decades of corporate, media and intelligence expertise at the highest-levels of government, ASG provides advisory services to clients worldwide.
        </p>
        <NuxtLink to="/expertise">
        <Button text="Expertise" />
        </NuxtLink>
      </div>
    </div>
    <div class="bottom">
      <div class="left animation1">
        <h2>Integrated cross-sector strategies</h2>
        <p>
          ASG provides integrated cross-sector strategies across law enforcement, intelligence, emergency planning, and urban resilience & infrastructure verticals to provide customers with solutions to the most complex challenges.
        </p>
      </div>
      <div class="right animation">
        <div class="textligne">
          <h2>
            Strategic guidance, implementation support, and tactical solutions
          </h2>

          <p>
            ASG provides strategic counsel to leaders seeking a global partner from planning to execution.
          </p>
        </div>
        <!-- <img
          src="../assets/img/Services_Icons/alexander_strategy_group_services_law_enforcement_white.svg"
          alt=""
        />      -->
        <!-- <client-only>
          <Vue3Lottie
            animationLink="https://assets3.lottiefiles.com/packages/lf20_nNsl3QFaqM.json"
            :height="200"
            :width="200"
          />
        </client-only> -->
        <div id="lottie-logo-white" />

      </div>
    </div>
  </div>
</template>

<script setup>
import lottie from 'lottie-web';
let animation = ref(null);

onMounted(() => {
  animation.value = lottie.loadAnimation({
    container: document.getElementById('lottie-logo-white'), // ID du conteneur défini dans le template
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: '/img/Anim/asg_services_wheel_white.json' // Chemin vers votre fichier d'animation JSON
  });
})
onUnmounted(() => {
  animation.value.destroy();
})
</script>

<style lang="scss" scoped>


.expertise {
  padding: 20vh 0 20vh 12vw;
  background-color: var(--color-bg);
  position: relative;
  z-index:20;
}
.top {
  display: flex;
  color: var(--color-secondaire);

  .left {
    width: 65vw;
    height: auto;
    background-image: url(../assets/img/Img_HP/alexander_strategy_group_expertise_governement.webp);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center top;
    border-radius: 20px;
    @media (min-width: 1924px) {
      min-height: 60vh;
    }

  }
  .right {
    padding: 3vh 5%;
    margin: 2% 0;
    width: 35vw;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
    p {
      margin: 4vh 0;
    }
  }
}

.bottom {
  display: flex;
  color: var(--color-text);
  margin: 2% 0;
  h2 {
    margin-bottom: 2vh;
  }

  .left {
    border-radius: 20px;
    background-color: var(--color-bg-dark);
    padding: 4%;
    width: 35vw;
  }
  .right {
    background-color: var(--color-orange);
    border-radius: 20px;
    padding: 4%;
    margin: 0 5vw 0 2%;
    display: flex;
    flex-direction: row-reverse;
    width: 65vw;

    #lottie-logo-white{
  // height: 200px;
  width: 90%;
      margin-right: 4vw;
}
  }
}
@media screen and (max-width: 840px) {
  /* mobile */
  .expertise {
    padding: 10vh 0 20vh 0vw;
  }
  .top {
    display: flex;
    flex-direction: column;
    color: var(--color-secondaire);

    .left {
      width: 100%;
      border-radius: 20px 20px 0 0;
      height: 40vh;
    }
    .right {
      padding: 30px;
      width: 100%;

      p {
        margin: 30px 0;
      }
    }
  }
  .bottom {
    display: flex;
    flex-direction: column-reverse;
    color: var(--color-text);
    margin: 5vh 0;

    h2 {
      margin-bottom: 30px;
    }

    .left {
      border-radius: 20px;
      background-color: var(--color-bg-dark);
      padding: 60px 30px;
      width: 100%;
      margin-top: 5vh;
    }
    .right {
      background-color: var(--color-orange);
      border-radius: 20px;
      padding: 60px 30px;
      margin: 0;
      display: flex;
      flex-direction: column-reverse;
      width: 100%;

      #lottie-logo-white {
        width: 35%;
        margin: 0 auto 5vh auto;
      }
    }
  }
}
</style>
