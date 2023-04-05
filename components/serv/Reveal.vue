<template>
       <div class="reveal">
      <h2>
        <span class="text_reveal">{{ reveal1 }}</span>
        <span class="text_reveal">{{ reveal2 }}</span>
        <span class="text_reveal">{{ reveal3 }}</span>

      </h2>
    </div>
</template>

<script>
import { onMounted, onUnmounted, ref } from "vue";
import gsap from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
gsap.registerPlugin(ScrollTrigger);
let animation;
export default {

props: {
  reveal1: {
    type: String,
    required: true,
  },
  reveal2: {
    type: String,
    required: true,
  },
  reveal3: {
    type: String,
    required: true,
  },
},

// Créer une référence à l'animation en dehors de la fonction onMounted

onMounted() {
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
},
onUnmounted() {
// Utiliser la référence pour désactiver les triggers de défilement
if (animation) {
animation.scrollTrigger.disable();
}
},
}
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
    width: clamp(150px, 100%, 600px);
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