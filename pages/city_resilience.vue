<template>
  <div>
    <Header/>
    <ServHero
      image="/img/Img_City_Resilience/alexander_strategy_group_services_urban_planning"
      logo="/img/Services_Icons/alexander_strategy_group_services_city_resilience.svg"
      title="City Resilience"
      text="Ready for the unexpected"
    />
    <div class="reveal">
            <h2>
                <span class="text_reveal">Resilient cities  can absorb, recover from, and prepare for hazards </span> <span class="text_reveal">across the environmental, economic, societal, and governance spaces.</span> <span class="text_reveal"> They come out stronger from crises, and are constantly adapting to tackle whatever challenge comes next.</span>
            </h2>
        </div>
    <ServLogo
      logo="/img/Services_Icons/alexander_strategy_group_services_city_resilience.svg"
      text="Alexander Strategy Group understands the importance of developing resiliency in every aspect of urban development."
    />

    <ServImage
    src1="/img/Img_City_Resilience/alexander_strategy_group_services_urban_planning_resiliency_assesment.webp"
    src2="/img/Img_City_Resilience/alexander_strategy_group_services_urban_planning_resiliency_plan.webp"
    titre="Resiliency Assessments"
    description="Alexander Strategy Group provides cities comprehensive resiliency assessments for client cities."
    sousDesc1="Our experts assess the wide range of urban characteristics that determine resilience, including: environmental and climate change related issues,"
    sousDesc2="economic conditions, public safety and health emergency preparedness; critical infrastructure, city services, governance, crisis response and more."
    titrePrime="Resiliency Action Plans"
    descriptionPrime="Following an assessment, Alexander Strategy Group develops tailored resilience action plans for federal, state, and city policymakers and other stakeholders."
    sousDesc1Prime="We provide bespoke policy recommendations and implementation guidance across urban sectors"
    />
    <TheFooter />

  </div>
</template>

<script setup>
useSeoMeta({
  title: 'Resilient cities - Ready for the unexpected in every aspect of urban development | ASG',
  ogTitle: 'Resilient cities - Ready for the unexpected in every aspect of urban development | ASG',
  description: 'Resilient cities can absorb, recover from, and prepare for hazards. They come out stronger from crises and are adapting to tackle whatever challenge comes next',
  ogDescription: 'Resilient cities can absorb, recover from, and prepare for hazards. They come out stronger from crises and are adapting to tackle whatever challenge comes next',
  ogImage: '/img/Social_image/alexanderstrategygroup_consulting_firm__service_resilient_cities.png',
  twitterCard: 'summary_large_image',
})

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
  position: relative;
  z-index: 21;
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