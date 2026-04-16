<template>
  <div class="capabilities light_mode">
    <div class="left">
      <div class="image-wrap">
        <NuxtImg src="/img/hp/alexander_strategy_group_scope_action.webp" alt="The Scope of Action" class="scope-img" loading="lazy" />
      </div>
      <h2>The Scope of Action</h2>
      <NuxtLink to="/contact">
        <Button text="Contact" />
      </NuxtLink>
      <div class="taglines">
        <p>Our work is felt in every major capital and across six continents.</p>
        <p>We move through the friction where private interests meet state power.</p>
      </div>
    </div>

    <div class="right">
      <div v-for="(item, index) in capabilities" :key="index" class="item">
        <div class="item__header">
          <img :src="item.icon" class="item__icon" alt="" />
          <h3>{{ item.title }}</h3>
        </div>
        <p>{{ item.description }}</p>
        <hr />
      </div>
    </div>
  </div>
</template>

<script setup>
const capabilities = [
  {
    title: 'Political & Sovereignty',
    description: 'We resolve the deadlocks between private enterprise and government policy. We provide the counsel and the intermediation required when traditional diplomacy has reached its limit.',
    icon: '/img/Services_Icons/alexander_strategy_group_services_national_security.svg',
  },
  {
    title: 'Intelligence',
    description: 'We provide the ground-truth. We uncover the reality of a market or a counterparty before a move is made, ensuring our clients act from a position of total clarity.',
    icon: '/img/Services_Icons/alexander_strategy_group_services_law_enforcement.svg',
  },
  {
    title: 'Conflict & Reputation',
    description: 'We control the environment. In litigation or crisis, we ensure the narrative serves the desired outcome, managing the fallout before it can manifest.',
    icon: '/img/Services_Icons/alexander_strategy_group_services_communication.svg',
  },
  {
    title: 'Capital & Transformation',
    description: 'We unlock commercial potential in environments where the obstacles are as much about geopolitical friction as they are about the balance sheet.',
    icon: '/img/Services_Icons/alexander_strategy_group_services_urban_planning.svg',
  },
]
</script>

<style lang="scss" scoped>
.capabilities {
  background-color: var(--color-bg);
  color: var(--color-secondaire);
  display: flex;
  padding: 12vh 15vw;
  gap: 6vw;
}

.left {
  width: 40%;
  flex-shrink: 0;
  position: sticky;
  top: 12vh;
  height: fit-content;

  h2 {
    margin-bottom: 4vh;
  }
}

.image-wrap {
  margin-bottom: 6vh;
  width: 55%;

  .scope-img {
    width: 100%;
    height: auto;
    display: block;
  }
}

.taglines {
  margin-top: 5vh;

  p {
    font-size: 18px;
    font-weight: 700;
    line-height: 1.5;
    opacity: 1;
    margin-bottom: 3vh;

    &:last-child {
      margin-bottom: 0;
    }
  }
}

.right {
  width: 60%;
}

.item {
  padding-bottom: 5vh;

  &__header {
    display: flex;
    align-items: center;
    gap: 16px;
    margin-bottom: 2vh;
  }

  &__icon {
    width: 40px;
    height: 40px;
    flex-shrink: 0;
  }

  h3 {
    color: var(--color-orange);
  }

  p {
    font-size: 16px;
    line-height: 1.7;
    max-width: 600px;
    opacity: 0.85;
  }

  hr {
    margin-top: 5vh;
    border: none;
    border-top: 1px solid rgba(32, 42, 53, 0.15);
  }

  &:last-child hr {
    display: none;
  }
}

@media screen and (max-width: 1024px) {
  .capabilities {
    padding: 10vh 8vw;
    gap: 5vw;
  }
  .left {
    width: 220px;
  }
  .right {
    width: calc(100% - 220px - 5vw);
  }
}

@media screen and (max-width: 840px) {
  .capabilities {
    flex-direction: column;
    padding: 8vh 5vw;
    gap: 0;
  }

  .left {
    width: 100%;
    position: static;
    margin-bottom: 6vh;
  }

  .image-wrap {
    width: 45%;
  }

  .right {
    width: 100%;
  }

  .item p { font-size: 15px; }
}
</style>
