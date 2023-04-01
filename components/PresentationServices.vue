<template>
  <div class="full light_mode">
    <div class="left">
      <h2>
        We offer a wide array of <span class="orange">strategic consulting services</span> supported by our
        team of advisors
      </h2>
      
      <div class="sevices">
        <NuxtLink to="/national_security">
        <div class="service">
          <div class="image image1"></div>
          <div>
            <h3>National Security</h3>
            <p>Create secure environments</p>
          </div>
        </div>
      </NuxtLink>
        <NuxtLink to="/law_enforcement">
        <div class="service">
          <div class="image image2"></div>
          <div>
            <h3>Law Enforcement</h3>
            <p>Make communities safer</p>
          </div>
        </div>
      </NuxtLink>
      <NuxtLink to="/urban_planning">
        <div class="service">
          <div class="image image3"></div>
          <div>
            <h3>Urban Planning</h3>
            <p>Thrive in the 21st century</p>
          </div>
        </div>
      </NuxtLink>
      <NuxtLink to="/city_resilience">
        <div class="service">
          <div class="image image4"></div>
          <div>
            <h3>City Resilience</h3>
            <p>Ready for the unexpected</p>
          </div>
        </div>
      </NuxtLink>
      <NuxtLink to="/communications">
        <div class="service">
          <div class="image image5"></div>
          <div>
            <h3>Communications</h3>
            <p>Get the message across</p>
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
          animationLink="https://lottie.host/685ab8ec-13b5-45af-a9d3-17ab62db421b/tHboDR8bB8.json"
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
.full{
    color: var(--color-secondaire);
    display: flex;
    justify-content: space-around;
   padding: 20vh 0;
}
.left{
    width: 70%; 
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    padding-left: 15vw;

    h2{
        margin-bottom: 10vh;
        width: 80%;
    }
    
}
.service{
    background: rgba(32, 42, 53, 0.05);
    border-radius: 100px;  
    padding: 2.5vh 4vw 2.5vh 2.5vw; 
    margin-bottom: 5vh;
    display: flex;
    align-items: center;
    transition: 0.5s;
    // width: max-content;
    .image{
      width: 50px;
      height: 50px;
      margin-right: 2vw;
      background-repeat: no-repeat;
      background-size: cover;
    }
    .image1{
      background-image: url('/img/Services_Icons/alexander_strategy_group_services_national_security.svg');
    }
    .image2{
      background-image: url('/img/Services_Icons/alexander_strategy_group_services_law_enforcement.svg');
    }
    .image3{
      background-image: url('/img/Services_Icons/alexander_strategy_group_services_urban_planning.svg');
    }
    .image4{
      background-image: url('/img/Services_Icons/alexander_strategy_group_services_city_resilience.svg');
    }
    .image5{
      background-image: url('/img/Services_Icons/alexander_strategy_group_services_communication.svg');
    }

}
.service:hover{
  background: var(--color-orange);
  transition: 0.5s;
  color: var(--color-text);

    .image{
        rotate: 45deg;
        transition:  1s;
    }
    .image1{
      background-image: url('/img/Services_Icons/alexander_strategy_group_services_national_security_white.svg');
    }
    .image2{
      background-image: url('/img/Services_Icons/alexander_strategy_group_services_law_enforcement_white.svg');
    }
    .image3{
      background-image: url('/img/Services_Icons/alexander_strategy_group_services_urban_planning_white.svg');
    }
    .image4{
      background-image: url('/img/Services_Icons/alexander_strategy_group_services_city_resilience_white.svg');
    }
    .image5{
      background-image: url('/img/Services_Icons/alexander_strategy_group_services_communication_white.svg');
    }

}
.right{
    text-align: start;
    .video{
        width: 80%;
        top: 10vh;
        bottom: 40vh;
        position: sticky;


    }
}

@media screen and (max-width: 767px) {
    /* mobile */
    .full{
    color: var(--color-secondaire);
    display: flex;
    flex-direction: column-reverse;
    align-items: center;
    justify-content: space-around;
    padding: 10vh 0;

}
.right{
    text-align: center;
    margin-bottom: 10vh;


    .video{
      margin: auto;
        width: 70%;

    }
}
.left{
    width: 100%; 
    align-items: flex-start;
    padding: 0 5vw;

    h2{
        margin-bottom: 10vh;
        width: 100%;
        text-align: center;

    }
    
}
.service{
    padding: 2vh 6vw 2vh 6vw; 
    margin-bottom: 5vh;
    img{
        margin-right: 5vw;
        width: 15%;
    }

}


  }
</style>
