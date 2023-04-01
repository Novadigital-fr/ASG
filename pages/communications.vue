<template>
    <div>
        <ServHero
        image ="/img/Img_Communication/alexander_strategy_group_services_communication.webp"
        logo ="/img/Services_Icons/alexander_strategy_group_services_communication.svg"
        title ="Communication"
        text ="Get the message across"
         />
         <div class="reveal">
            <h2>
                <span class="text_reveal">Trust, validity, support, and success are all built on one thing: </span><span class="text_reveal"> effective communication. Alexander Strategy Group has a</span><span class="text_reveal"> deep experience in corporate and public sector communications.</span>
            </h2>
        </div>
        <ServLogo
      logo="/img/Services_Icons/alexander_strategy_group_services_communication.svg"
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
    color: #ffffff33;
    display: inline;

  }
}
@media screen and (max-width: 767px) {
  /* mobile */
  .reveal {
    h2 {
      width: 80%;
    }
  }
}
</style>
