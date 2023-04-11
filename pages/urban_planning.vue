<template>
    <div>
      <Header/>
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
        <ServLogo
      logo="/img/Services_Icons/alexander_strategy_group_services_urban_planning.svg"
    />
        <ServImage
    src1="/img/Img_Urban_Planning/alexander_strategy_group_services_urban_planning_vision_planing.webp"
    src2="/img/Img_Urban_Planning/alexander_strategy_group_services_urban_planning_vision_building.webp"
    titre="Vision-Planning"
    description="Alexander Strategy Group ’s experts guide cities as they develop their vision for the future, and then work with them to build it."
    sousDesc1="Our team takes an integrated approach, focusing on sustainability, livability, environment, resilience, fiscal impact, public health, and growth to guide our urban planning strategies. "
    sousDesc2="We are a data-first, technology-oriented firm that helps build happy, healthy, and long-standing communities."
    titrePrime="Vision-Building"
    descriptionPrime="Our team has a global network of designers, architects, developers, and contractors who we can deploy internationally, bringing our clients the best experts the world has to offer as they work to transform their communities."
    sousDesc1Prime="We provide bespoke policy recommendations and implementation guidance across urban sectors"
    />
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

  elements.forEach((element, index) => {
  const startOffset = index * 90 + 100;
  const endOffset = index * 90 - 100;
  
  gsap.set(element, { color: "#ffffff33" });
  gsap.to(element, {
    scrollTrigger: {
      trigger: element,
      start: `${endOffset}% 60%`,
      end: `${startOffset}% 60%`,
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
    width: clamp(530px, 50vw, 999px);
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    display: inline;

  }
}
@media screen and (max-width: 840px) {
  /* mobile */
  .reveal {
    h2 {
      width: 80%;
    }
  }
}
</style>
