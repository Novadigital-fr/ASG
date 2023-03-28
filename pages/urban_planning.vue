<template>
    <div>
        <ServHero
        image ="/img/Img_Urban_Planning/alexander_strategy_group_services_urban_planning.webp"
        logo ="/img/Services_Icons/alexander_strategy_group_services_urban_planning.svg"
        title ="Urban Planning"
        text ="Thrive in the 21st century"
         />
         <div class="reveal">
            <h2>
              <span class="text_reveal"> Times are changing fast and cities need to adapt. Our urban planning experts</span><span class="text_reveal"> have assisted cities around the world undergo the</span><span class="text_reveal"> transformations they need to thrive in the 21st century.</span>
            </h2>
        </div>
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
