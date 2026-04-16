<template>
  <div class="provenance light_mode">
    <div class="left">
      <h2>The Provenance</h2>
      <p class="statement">Our network is deep and quiet.</p>
      <p>It is built on decades spent within the highest tiers of global politics and power.</p>
      <p>From the recovery of sovereign debt to the defense of national assets against hostile actors, our track record is not a list of "projects."</p>
      <p>It is a history of outcomes secured where others saw no path forward.</p>
    </div>
    <div class="right">
      <img src="/img/hp/alexander_strategy_group_provenance.webp" alt="The Provenance" class="provenance-img" />
    </div>
  </div>
</template>

<script setup>
</script>

<style lang="scss" scoped>
.provenance {
  background-color: var(--color-bg);
  color: var(--color-secondaire);
  display: flex;
  align-items: center;
  padding: 12vh 15vw;
  gap: 6vw;
}

.left {
  width: 50%;
  flex-shrink: 0;

  h2 {
    margin-bottom: 4vh;
  }

  .statement {
    font-size: 20px;
    font-weight: 700;
    line-height: 1.4;
    margin-bottom: 3vh;
    opacity: 1;
  }

  p {
    font-size: 16px;
    line-height: 1.7;
    opacity: 0.85;
    margin-bottom: 2.5vh;

    &:last-child {
      margin-bottom: 0;
    }
  }
}

.right {
  width: 50%;

  .provenance-img {
    width: 100%;
    height: auto;
    display: block;
  }
}

@media screen and (max-width: 1024px) {
  .provenance {
    padding: 10vh 8vw;
    gap: 5vw;
  }
}

@media screen and (max-width: 840px) {
  .provenance {
    flex-direction: column;
    padding: 8vh 5vw;
    gap: 6vh;
  }

  .left {
    width: 100%;
  }

  .right {
    width: 80%;
    margin: 0 auto;
  }
}
</style>
