<template>
  <div class="full">
    <div class="top">
      <div class="left">
        <!-- <img
          src="../assets/img/Img_HP/alexander_strategy_group_expertise_governement.webp"
          alt=""
        /> -->
      </div>
      <div class="right">
        <h2>Expertise at the highest-levels of government</h2>
        <p>
          Drawing on decades of military, law enforcement, and intelligence
          expertise at the highest-levels of government, Alexander Strategy
          Group provides national security and risk management advisory services
          to clients worldwide.
        </p>
        <Button text="Expertise" />
      </div>
    </div>
    <div class="bottom">
      <div class="left">
        <h2>Integrated cross-sector strategies</h2>
        <p>
          Alexander Strategy Group provides integrated cross-sector strategies
          across law enforcement, intelligence, emergency planning, and urban
          resilience & infrastructure verticals to provide customers with
          solutions to the most complex challenges.
        </p>
      </div>
      <div class="right">
      <div class="textligne">
        <h2>
          Strategic guidance, implementation support, and tactical solutions
        </h2>
       
        <p>
          Alexander Strategy Group provides strategic guidance, implementation
          support, and tactical solutions in security systems, training, human
          capital, and technology development. We are with you from planning to
          execution.
        </p>
      </div>  
      <!-- <img
          src="../assets/img/Services_Icons/alexander_strategy_group_services_law_enforcement_white.svg"
          alt=""
        />      -->
     
    <client-only>
  <Vue3Lottie
    animationLink="https://lottie.host/70f6fbc0-495d-48e7-90da-3ba359faa8ae/4nxMyA2nn3.json"
    :height="200"
    :width="200"
  />
</client-only>
      
      </div>
    </div>
  </div>
</template>

<script setup></script>

<style lang="scss" scoped>
.full {
  margin: 20vh 0;
  margin-left: 12vw;
}
.top {
  display: flex;
  color: var(--color-secondaire);

  .left  {
    width: 65vw;
    height: auto;
    background-image: url(../assets/img/Img_HP/alexander_strategy_group_expertise_governement.webp);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    border-radius: 20px;
  }
  .right {
    padding:2% 5%;
    margin: 2% 0;
    width:35vw;
    p {
      margin: 4vh 0;
    }
  }
}

.bottom{
    display: flex;
    color: var(--color-text);
    margin: 2% 0;
    h2{
          margin-bottom: 2vh;
            
        }

    .left{
        border-radius: 20px;
        background-color: var(--color-bg-dark);
        padding: 4%;
        width: 35vw;

    }
    .right{
        background-color: var(--color-orange);
        border-radius: 20px;
        padding: 4%;
        margin: 0 5vw 0 2%;
        display: flex;
        flex-direction: row-reverse;
        width: 65vw;


        .lottie-animation-container{
          width: 90%;
          margin-right: 4vw;
        }

        

    }
}
@media screen and (max-width: 767px) {
    /* mobile */
    .full {
  margin: 20vh 0;
  margin-left: 0;
}
  .top {
  display: flex;
  flex-direction: column;
  color: var(--color-secondaire);

  .left {
    width: 100%;
    border-radius: 20px 20px 0 0;
    height: 35vh;
  }
  .right {
    padding: 2% 5%;
    width: 100%;

    p {
      margin: 4vh 0;
    }
    
  }
}
.bottom{
    display: flex;
    flex-direction: column-reverse;
    color: var(--color-text);
    margin: 5vh 0;


    .left{
        border-radius: 20px;
        background-color: var(--color-bg-dark);
        padding: 15% 5%;
        width: 100%;
        margin-top: 5vh;

    }
    .right{
        background-color: var(--color-orange);
        border-radius: 20px;
        padding: 15% 5%;
        margin: 0;
        display: flex;
        flex-direction: column-reverse;
        width: 100%;

       .lottie-animation-container{
        width: 35%;
        margin:0 auto 5vh auto;

       }

    }
}

  }
</style>
