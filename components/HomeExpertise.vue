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
        <img
          src="../assets/img/Services Icons/alexander_strategy_group_services_law_enforcement_white.svg"
          alt=""
        />
      </div>       
        <p>
          Alexander Strategy Group provides strategic guidance, implementation
          support, and tactical solutions in security systems, training, human
          capital, and technology development. We are with you from planning to
          execution.
        </p>
      </div>
    </div>
  </div>
</template>

<script setup></script>

<style lang="scss" scoped>
.full {
  margin-top: 20vh;
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

        .textligne{
            display: flex;
            align-items: flex-start;
        }

    }
}
</style>
