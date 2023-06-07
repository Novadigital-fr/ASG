<template>
    <div>
      <Header/>

        <ServHero
        image ="/img/Img_Communication/alexander_strategy_group_services_communication"
        logo ="/img/Services_Icons/alexander_strategy_group_services_communication.svg"
        title ="Strategic Communications"
        text ="Narrative Matters "
         />
         <div class="reveal">
            <h2>
                <span class="text_reveal">Trust, credibility, and influence require clear and persuasive communication. </span><span class="text_reveal">Alexander Strategy Group has deep experience in corporate affairs, issue management,  and public affairs.</span>
            </h2>
        </div>
        <ServLogo
      logo="/img/Services_Icons/alexander_strategy_group_services_communication.svg"
    />
      <div class="key_service light_mode">
      
    <div class="left">
      <p class="desk_button">Communication</p>
      <h2>Key Services</h2>
      <NuxtLink to="/contact">
        <div class="button_ordi"><Button text="Contact" /></div>
      </NuxtLink>
    </div>
    <div class="right">
      <h2 class="orange">Corporate Strategy</h2>
      <h2 class="orange">Issue Management</h2>
      <h2 class="orange">Reputation and Brand Management </h2>
      <h2 class="orange">Product Strategy</h2>
      <h2 class="orange">Executive Engagement and Positioning</h2>
      <h2 class="orange">Messaging and Communications</h2>
      <h2 class="orange">Media Relations and Crisis Management</h2>
      <h2 class="orange">Advertising and Digital Strategy</h2>




    </div>

  </div>

    <TheFooter />
    </div>
</template>

<script setup>
useSeoMeta({
  title: 'Communication - Get the message across, trust, validity, support, and success | ASG',
  ogTitle: 'Communication - Get the message across, trust, validity, support, and success | ASG',
  description: 'Alexander Strategy Group has a deep experience in corporate and public sector communications. Trust and success are all built on one thing: effective communication',
  ogDescription: 'Alexander Strategy Group has a deep experience in corporate and public sector communications. Trust and success are all built on one thing: effective communication',
  ogImage: '/img/Social_image/alexanderstrategygroup_consulting_firm__stategic_communication.png',
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
    color: #ffffff33;
    display: inline;

  }
}
.key_service {
  color: var(--color-bg-dark);
  background-color: var(--color-bg);
  display: flex;
  padding: 10vh 0;
  position: relative;
  z-index: 21;
  .left {
    width: 40%;
    padding: 5vh 0 0 15vw;
    h2 {
      margin: 2vh 0;
    }
  }
  .right {
    width: 60%;
    padding: 5vh 20vw 0 5vh;

    h2{
      margin-bottom: 35px;
    }
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
  .key_service {
    color: var(--color-bg-dark);
    display: flex;
    flex-direction: column;

    .left {
      width: 100%;
      padding: 5vh 0 0 10vw;
    }
    .right{
      width: 100%;
      padding: 5vh 0 0 10vw;
    }
  }
}
</style>
