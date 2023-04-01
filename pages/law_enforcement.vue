<template>
    <div>
        <ServHero
        image ="/img/Img_Law_Enforcement/alexander_strategy_group_services_law_enforcement.webp"
        logo ="/img/Services_Icons/alexander_strategy_group_services_law_enforcement.svg"
        title ="Law Enforcement"
        text ="Make communities safer"
         />

         <div class="reveal">
            <h2>
                <span class="text_reveal">
                With extensive experience in the nation’s most elite law enforcement </span><span class="text_reveal">organisations, we provides clients with comprehensive, transformational, and </span><span class="text_reveal">bespoke law enforcement strategies and tactics.</span>
            </h2>
        </div>
        <ServLogo
      logo="/img/Services_Icons/alexander_strategy_group_services_law_enforcement.svg"
    />
        <ServImage
    src1="/img/Img_Law_Enforcement/alexander_strategy_group_services_law_enforcement_criminality.webp"
    src2="/img/Img_Law_Enforcement/alexander_strategy_group_services_law_enforcement_whitecollarcrime.webp"
    titre="Criminality and Urban Violence"
    description="Criminality and urban violence has deleterious effects on cities. Crime harms economic growth, spurs urban flight, and undermines social cohesion."
    sousDesc1="Individuals should be able to freely live their lives in cities without fear of harassment and/or physical attacks."
    sousDesc2="Alexander Strategy Group deeply understands the predictors and drivers of crime — ranging from homicide, to theft, to vehicle related issues — and can provide tailored assessments and integrated solutions to make cities safer."
    titrePrime="White Collar Crime"
    descriptionPrime="White collar crime has an insidious impact. Criminal activity, like public corruption, undermines public trust in institutions and wastes taxpayer dollars."
    sousDesc1Prime="Cracking down on white collar crimes requires both establishing rules and regulations to protect individuals and corporations from financial crimes and injustices and enforcing them."
    sousDesc2Prime="Alexander Strategy Group equips policymakers with the tools and capabilities necessary to detect, prevent, and respond to white collar crimes."
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
