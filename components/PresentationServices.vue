<template>
  <div class="full">
    <div class="left">
      <h2>
        We offer a wide array of <span class="orange">strategic consulting services</span> supported by our
        team of advisors
      </h2>
      <div class="sevices">
        <div class="service">
          <img src="../assets/img/Services_Icons/alexander_strategy_group_services_national_security.svg" alt="" />
          <div>
            <h3>National Security</h3>
            <p>Create secure environments</p>
          </div>
        </div>
        <div class="service">
          <img src="../assets/img/Services_Icons/alexander_strategy_group_services_law_enforcement.svg" alt="" />
          <div>
            <h3>Law Enforcement</h3>
            <p>Make communities safer</p>
          </div>
        </div>
        <div class="service">
          <img src="../assets/img/Services_Icons/alexander_strategy_group_services_urban_planning.svg" alt="" />
          <div>
            <h3>Urban Planning</h3>
            <p>Thrive in the 21st century</p>
          </div>
        </div>
        <div class="service">
          <img src="../assets/img/Services_Icons/alexander_strategy_group_services_city_resilience.svg" alt="" />
          <div>
            <h3>City Resilience</h3>
            <p>Ready for the unexpected</p>
          </div>
        </div>
        <div class="service">
          <img src="../assets/img/Services_Icons/alexander_strategy_group_services_communication.svg" alt="" />
          <div>
            <h3>Communications</h3>
            <p>Get the message across</p>
          </div>
        </div>
      </div>
    </div>
    <div class="right">
    <img src="../assets/img/Anim/Service_Wheel.gif" alt="">
    </div>
  </div>
</template>

<script setup></script>

<style lang="scss" scoped>
.full{
    color: var(--color-secondaire);
    display: flex;
    justify-content: space-around;
    margin-top: 20vh;
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
    // width: max-content;
    img{
        margin-right: 2vw;
    }

}
.right{
    text-align: start;


    img{
        width: 60%;
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
    margin-top: 20vh;
}
.right{
    text-align: center;
    margin-bottom: 10vh;


    img{
        width: 50%;

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
