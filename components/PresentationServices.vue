<template>
  <div class="full light_mode">
    <div class="left">
      <h2 class="animation">
        Alexander Strategy Group’s world class<span class="orange"> advisory services</span> encompass diverse disciplines: 
      </h2>

      <div class="sevices">
        <NuxtLink to="/communications">
          <div class="service">
            <div class="image image5"></div>
            <div>
              <h3>Communications</h3>
              <p>Narrative Matters</p>
            </div>
          </div>
        </NuxtLink>
        <NuxtLink to="/national_security">
          <div class="service">
            <div class="image image1"></div>
            <div>
              <h3>National Security</h3>
              <p>Making  communities safer</p>
            </div>
          </div>
        </NuxtLink>
        <NuxtLink to="/law_enforcement">
          <div class="service">
            <div class="image image2"></div>
            <div>
              <h3>Law Enforcement</h3>
              <p>Creating secure environments</p>
            </div>
          </div>
        </NuxtLink>
        <NuxtLink to="/urban_planning">
          <div class="service">
            <div class="image image3"></div>
            <div>
              <h3>Urban Planning</h3>
              <p>Trendsetting in the 21<sup>st</sup> century</p>
            </div>
          </div>
        </NuxtLink>
        <NuxtLink to="/city_resilience">
          <div class="service">
            <div class="image image4"></div>
            <div>
              <h3>City Resilience</h3>
              <p>Preparing for the unexpected</p>
            </div>
          </div>
        </NuxtLink>
      </div>
    </div>
    <div class="right">
      <div class="video">
        <client-only>
          <Vue3Lottie
            class="video"
            animationLink="https://assets9.lottiefiles.com/packages/lf20_5B0BbDeBuI.json"
            :height="100"
            :width="100"
          />
        </client-only>
      </div>
    </div>
  </div>
</template>

<script setup></script>

<style lang="scss" scoped>

.full {
  color: var(--color-secondaire);
  display: flex;
  justify-content: space-around;
  padding: 20vh 0;
  background-color: var(--color-bg);
  position: relative;
  z-index:20;
}
.left {
  width: 70%;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  padding-left: 15vw;
  @media (min-width: 1924px) {
    width: 60%;

  }

  h2 {
    margin-bottom: 10vh;
    width: 80%;

    @media (min-width: 1524px) {
    width: 70%;

  }
  }
}
.service {
  background: rgba(32, 42, 53, 0.05);
  border-radius: 100px;
  padding: 2.5vh 4vw 2.5vh 2.5vw;
  margin-bottom: 5vh;
  display: flex;
  align-items: center;
  transition: 0.5s;
  // width: max-content;

  &:active{
    outline: none;
  border: none;
  -webkit-box-shadow: none !important;
  box-shadow: none !important;
  }
  .image {
    width: 50px;
    height: 50px;
    margin-right: 2vw;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    transform-origin: center center;
    transition: 1s;



    @media (min-width: 1924px) {
      width: 70px;
    height: 70px;
  }
  }
  .image1 {
    background-image: url("/img/Services_Icons/alexander_strategy_group_services_national_security.png");
  }
  .image2 {
    background-image: url("/img/Services_Icons/alexander_strategy_group_services_law_enforcement.png");
  }
  .image3 {
    background-image: url("/img/Services_Icons/alexander_strategy_group_services_urban_planning.png");
  }
  .image4 {
    background-image: url("/img/Services_Icons/alexander_strategy_group_services_city_resilience.png");
  }
  .image5 {
    background-image: url("/img/Services_Icons/alexander_strategy_group_services_communication.png");
  }
}
.service:hover {
  background: var(--color-orange);
  transition: 0.5s;
  cursor: pointer;
  color: var(--color-text);

  .image {
  rotate: 22deg;
  transition: 1s;
  transform-origin: center center;
  -webkit-transform: rotate(22deg);
  -webkit-transform-origin: center;
  transform-style: preserve-3d;
  max-width: none;
  max-height: none;

  }
  .image1 {
    background-image: url("/img/Services_Icons/alexander_strategy_group_services_national_security_white.png");
 
  }
  .image2 {
    background-image: url("/img/Services_Icons/alexander_strategy_group_services_law_enforcement_white.png");
  }
  .image3 {
    background-image: url("/img/Services_Icons/alexander_strategy_group_services_urban_planning_white.png");
  }
  .image4 {
    background-image: url("/img/Services_Icons/alexander_strategy_group_services_city_resilience_white.png");
  }
  .image5 {
    background-image: url("/img/Services_Icons/alexander_strategy_group_services_communication_white.png");
  }
}
.right {
  text-align: start;
  @media (min-width: 1924px) {
    width: 40%;

  }
  .video {
    width: 80%;
    top: 10vh;
    bottom: 40vh;
    position: sticky;

  }
}



@media screen and (max-width: 1281px) {
    /* tablettte */
    .video {
    margin-left: 10%;
  }
}

@media screen and (max-width: 840px) {
  /* mobile */
  .full {
    color: var(--color-secondaire);
    display: flex;
    flex-direction: column-reverse;
    align-items: center;
    justify-content: space-around;
    padding: 10vh 0;
  }
  .right {
    text-align: center;
    margin-bottom: 10vh;

    .video {
      margin: auto;
      width: 70%;
    }
  }
  .left {
    width: 100%;
    align-items: center;
    padding: 0 2vw;

    h2 {
      margin-bottom: 10vh;
      padding: 0 5vw;
      width: 100%;
      text-align: center;
      line-height: 30px;
      @media (min-width: 767px) {
        line-height: 45px;
      }
    }
  }
  .service {
    padding: 2vh 6vw 2vh 6vw;
    margin-bottom: 5vh;

    .image {
      margin-right: 20px;
    }
    p{
      font-size: 16px;
    }
  }
  .service:hover{
    pointer-events: none;
  }
}
</style>
