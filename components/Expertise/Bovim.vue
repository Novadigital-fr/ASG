<template>
  <div class="bovim light_mode">
    <div class="left">
      <NuxtImg
        src="/img/expertise/alexander_strategy_group_expertise_eric_bovim.webp"
        alt="Eric Bovim - Founder & CEO of Alexander Strategy Group"
        class="photo"
       
      />
    </div>
    <div class="right">
      <h2 class="name">Eric Bovim</h2>
      <h3 class="role">Founder & CEO</h3>
      <p>Mr. Eric Bovim is a global advisor who has represented CEOs, governments, and executives from some of the world's top companies.</p>
      <p>Bovim is the founder and CEO of ASG, an advisory firm based in Washington, D.C. that counsels clients across the world on how to mitigate legal, political and reputational risk and win. He has advised C-suite executives at Google, NASDAQ, Gilead Sciences, Vodafone, Pfizer, handled sensitive cases for financial powerhouse, Elliott Management, and worked alongside legal giants like Gibson Dunn and Quinn Emmanuel.</p>
      <p>His penchant for solving high-stakes cases has made him an in-demand figure among sovereigns in Africa, the Middle East, and in Japan, managing several matters involving the United Nations this past decade.</p>
      <p>Bovim began his career in journalism as a foreign correspondent for Dow Jones Newswires/Wall Street Journal and Reuters, based in Madrid.</p>
      <p>He later served as communications advisor to a U.S. Senator before launching an international consulting career the led him to found several companies like Gibraltar Associates, which he sold in 2012.</p>
    </div>
  </div>
</template>

<script setup>
</script>

<style lang="scss" scoped>
.bovim {
  background-color: var(--color-bg);
  color: var(--color-secondaire);
  display: flex;
  align-items: flex-start;
  padding: 12vh 15vw;
  gap: 6vw;
}

.left {
  width: 40%;
  flex-shrink: 0;

  .photo {
    width: 100%;
    height: auto;
    display: block;
  }
}

.right {
  width: 60%;

  .name {
    color: var(--color-orange);
    margin-bottom: 0.5vh;
  }

  .role {
    color: var(--color-secondaire);
    margin-bottom: 4vh;
  }

  p {
    margin-bottom: 2.5vh;
    font-size: 16px;
    line-height: 1.7;
    opacity: 0.85;

    &:last-child {
      margin-bottom: 0;
    }
  }
}

@media screen and (max-width: 1024px) {
  .bovim {
    padding: 10vh 8vw;
    gap: 5vw;
  }

  .left {
    width: 35%;
  }

  .right {
    width: 65%;
  }
}

@media screen and (max-width: 840px) {
  .bovim {
    flex-direction: column;
    padding: 8vh 5vw;
    gap: 0;
  }

  .left {
    width: 70%;
    margin: 0 auto 6vh auto;
  }

  .right {
    width: 100%;

    .role {
      margin-bottom: 3vh;
    }
  }
}
</style>
