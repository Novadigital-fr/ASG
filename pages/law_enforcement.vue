<template>
    <div>
      <Header/>

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

    <ServKeyServ
    title1="Assessments"
    summary1="Every community has different law enforcement capabilities and law enforcement needs. Alexander Strategy Group provides government officials assessments including:
              Deep understanding of the community’s crime concerns
              Current law enforcement capabilities
              Potential areas of improvement
              These assessments serve as a vital tool in improving law enforcement practices."
    title2="Policy Development"
    summary2="One-size-fits-all approaches to law enforcement don’t work. The Alexander Strategy Group team develops bespoke law enforcement strategies that are unique to the community that they serve. These strategies inform personnel, training, equipment, and operational decision making to develop the most effective and community-focused law enforcement agencies."
    title3="Real-Time Support"
    summary3="Criminal and emergency situations are ever evolving and strategies are only as effective as the manner in which they are implemented. Alexander Strategy Group provides real-time strategic, operational, and tactical level support and consulting services. Our law enforcement experts are there when our clients need them."
   
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
      font-size: 30px;
      line-height: 35px;
    }
  }
}
</style>
