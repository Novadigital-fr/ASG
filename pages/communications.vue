<template>
    <div>
      <Header/>

        <ServHero
        image ="/img/Img_Communication/alexander_strategy_group_services_communication"
        logo ="/img/Services_Icons/alexander_strategy_group_services_communication.svg"
        title ="Communication"
        text ="Get the message across"
         />
         <div class="reveal">
            <h2>
                <span class="text_reveal">Trust, validity, support, and success are all built on one thing: effective communication. </span><span class="text_reveal"> Alexander Strategy Group has a deep experience in corporate and public sector communications.</span>
            </h2>
        </div>
        <ServLogo
      logo="/img/Services_Icons/alexander_strategy_group_services_communication.svg"
    />

    <ServKeyServ
    title1="Message Development"
    summary1="Alexander Strategy Group enables customers across industries to develop their storytelling. We create compelling and persuasive narratives, identify the right audience, and determine the best communication vehicles to utilize to achieve results."
    title2="Strategic Planning"
    summary2="Big achievements require vision. Alexander Strategy Group develops long-term strategic communication plans to ensure that communications efforts bolster big-picture goals."
    title3="Press Relations"
    summary3="Using Alexander Strategy Group’s deep relationships across international media, we help our clients control their narrative in the press. From front-page stories to drafting and placing compelling op-eds, Alexander Strategy Group empowers our customers to get the coverage they need."
    title4="Crisis Communications"
    summary4="Crises happen. Using time-tested strategies, Alexander Strategy Group’s experts guide clients through the most complex crisis scenarios to ensure they are communicating efficiently, effectively, and in a manner that protects their reputation."
    title5="Creative"
    summary5="Creativity moves minds. Alexander Strategy Group’s creative department makes compelling graphics, written materials, social media content, and videos to push messages forward."
    />
    <TheFooter />
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
  position: relative;
  z-index: 21;
  h2 {
    width: clamp(530px, 50vw, 999px);
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    color: #ffffff33;
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
