<template>
  <div class="full">
    <div class="top">
      <div class="left">
        <img
          src="../assets/img/Img_HP/alexander_strategy_group_expertise_governement.webp"
          alt=""
        />
      </div>
      <div class="right">
        <h2>Expertise at the highest-levels of government</h2>
        <p>
          Drawing on decades of military, law enforcement, and intelligence
          expertise at the highest-levels of government, Alexander Strategy
          Group provides national security and risk management advisory services
          to clients worldwide.
        </p>
        <button>Expertise</button>
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
      <img
          src="../assets/img/Services_Icons/alexander_strategy_group_services_law_enforcement_white.svg"
          alt=""
        />     
      
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

  .left img {
    width: 45vw;
    border-radius: 20px;
  }
  .right {
    padding: 2% 5%;

    p {
      margin: 4vh 0;
    }
  }
}

.bottom{
    display: flex;
    color: var(--color-text);
    margin: 5vh 0;
    h2{
          margin-bottom: 2vh;
            
        }

    .left{
        border-radius: 20px;
        background-color: var(--color-bg-dark);
        padding: 4%;
        width: 100%;

    }
    .right{
        background-color: var(--color-orange);
        border-radius: 20px;
        padding: 4%;
        margin: 0 5vw 0 2%;
        display: flex;
        flex-direction: row-reverse;

        img{
          width: 60%;
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

  .left img {
    width: 100%;
    border-radius: 20px 20px 0 0;
  }
  .right {
    padding: 2% 5%;
    

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

       img{
        width: 20%;
        margin-right: 0;
text-align: center;
       }

    }
}

  }
</style>
