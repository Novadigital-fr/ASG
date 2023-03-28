<template>
  <div>
    <ServHero
      image="/img/Img_City_Resilience/alexander_strategy_group_services_urban_planning.webp"
      logo="/img/Services_Icons/alexander_strategy_group_services_city_resilience.svg"
      title="City Resilience"
      text="Ready for the unexpected"
    />
    <div class="reveal">
      <h2>
        <span class="text_reveal"
          >Resilient cities can absorb, recover from, and prepare for hazards
          across the environmental,</span
        >
        <span class="text_reveal"
          >economic, societal, and governance spaces. They come out stronger
          from crises, and are</span
        >
        <span class="text_reveal">
          constantly adapting to tackle whatever challenge comes next.</span
        >
      </h2>
    </div>

    <ServLogo
      logo="/img/Services_Icons/alexander_strategy_group_services_city_resilience.svg"
      text="Alexander Strategy Group understands the importance of developing resiliency in every aspect of urban development."
    />

    <ServKeyServ/>
  </div>
</template>

<script setup>
import { onMounted, onUnmounted, ref } from "vue";
import gsap from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
gsap.registerPlugin(ScrollTrigger);

// Créer une référence à l'animation en dehors de la fonction onMounted
let animation;

onMounted(() => {
  const elements = document.querySelectorAll(".text_reveal");

  elements.forEach((element) => {
    gsap.set(element, { color: "#ffffff33" });
    gsap.to(element, {
      scrollTrigger: {
        trigger: element,
        start: "top 50%",
        end: "bottom 50%",
        toggleActions: "restart reverse restart reverse",
      },
      duration: 0.3,
      color: "#FFFFFF",
    });
  });
});
onUnmounted(() => {
// Utiliser la référence pour désactiver les triggers de défilement
if (animation) {
animation.scrollTrigger.disable();
}
});
</script>

<style lang="scss" scoped>
.reveal {
  min-height: 100vh;
  background-color: var(--color-bg-dark);
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  h2 {
    width: 50%;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
  }
}
</style>