<template>
  <div></div>
</template>
<script>
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
gsap.registerPlugin(ScrollTrigger);

export default {
  mounted() {
    let title = document.querySelectorAll(".animation");
    let title1 = document.querySelectorAll(".animation1");
    let titleh1 = document.querySelectorAll(".animationh1");
    let titleh2 = document.querySelectorAll(".animationh2");
    let titleh3 = document.querySelectorAll(".animationh3");
    if (window.matchMedia("(min-width: 1024px)").matches) {


    for (let index = 0; index < title.length; index++) {
      const element = title[index];
      // const ourText = new SplitType(element, { types: 'chars' })
      // const chars = ourText.chars

      gsap.fromTo(
        element,
        {
          y: 100,
          opacity: 0,
        },
        {
          y: 0,
          opacity: 1,
          stagger: 0.05,
          duration: 1,
          ease: "power4.out",
          scrollTrigger: {
            trigger: element,
            start: "center+=40% bottom+=20%",
            end: "+=50%",
            scrub: true,
          },
        }
      );
    }
    for (let index = 0; index < title1.length; index++) {
      const element = title1[index];
      // const ourText = new SplitType(element, { types: 'chars' })
      // const chars = ourText.chars

      gsap.fromTo(
        element,
        {
          y: 100,
          opacity: 0,
        },
        {
          y: 0,
          opacity: 1,
          stagger: 0.05,
          duration: 1,
          ease: "power4.out",
          scrollTrigger: {
            trigger: element,
            start: "center+=40% bottom+=30%",
            end: "+=50%",
            scrub: true,
          },
        }
      );
    }
    for (let index = 0; index < titleh1.length; index++) {
        const element = titleh1[index];
        // const ourText = new SplitType(element, { types: 'chars' })
        // const chars = ourText.chars
    
        gsap.fromTo(
            element,
            { 
            y: 100,
            opacity: 0
            },
            {
            y: 0,
            opacity: 1,
            stagger: 0.05,
            duration: 1,
            ease: 'power4.out',
            scrollTrigger: {
                trigger: element,
                start: 'center+=15% bottom+=20%',
                end: '+=50%',
                scrub: true
            },
            }
        )
    };
    for (let index = 0; index < titleh2.length; index++) {
        const element = titleh2[index];
        // const ourText = new SplitType(element, { types: 'chars' })
        // const chars = ourText.chars
    
        gsap.fromTo(
            element,
            { 
            y: 100,
            opacity: 0
            },
            {
            y: 0,
            opacity: 1,
            stagger: 0.05,
            duration: 1,
            ease: 'power4.out',
            scrollTrigger: {
                trigger: element,
                start: 'center+=25% bottom+=20%',
                end: '+=50%',
                scrub: true
            },
            }
        )
    };
    for (let index = 0; index < titleh3.length; index++) {
        const element = titleh3[index];
        // const ourText = new SplitType(element, { types: 'chars' })
        // const chars = ourText.chars
    
        gsap.fromTo(
            element,
            { 
            y: 100,
            opacity: 0
            },
            {
            y: 0,
            opacity: 1,
            stagger: 0.05,
            duration: 1,
            ease: 'power4.out',
            scrollTrigger: {
                trigger: element,
                start: 'center+=35% bottom+=20%',
                end: '+=50%',
                scrub: true
            },
            }
        )
    };
}
  },
};
</script>

<style scoped>
.animation,
.animationHeader {
  clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);
}
</style>
