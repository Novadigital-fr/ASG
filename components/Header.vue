<template>
    <div>
    <header>
      <div class="menu_ordi">
        <NuxtLink to="/">
        <img
          class="logo_ordi"
          src="../assets/img/logo.svg"
          alt=""
        />
        <p class="text_logo">
          alexander <br />
          strategy <br />
          group
        </p>
        </NuxtLink>
        <nav>
          <ul>
            <li class="link link--metis">
              <NuxtLink to="/">Home</NuxtLink>
            </li>
            <li class="link link--metis top_sous">
              Services
              <ul class="sous">
                <li>
                  <div class="image image1"></div>
                  <NuxtLink to="/national_security">National Security</NuxtLink>
                </li>
                <li>
                  <div class="image image2"></div>
                  <NuxtLink to="/law_enforcement">Law Enforcement</NuxtLink>
                </li>
                <li>
                <div class="image image3"></div>
               <NuxtLink to="/urban_planning">Urban Planing</NuxtLink>
               </li>
                <li>
                  <div class="image image4"></div>
                  <NuxtLink to="/city_resilience">City Resilience</NuxtLink>
                </li>
                <li>
                <div class="image image5"></div>
                <NuxtLink to="/communications">Communication</NuxtLink>
                </li>
              </ul>
            </li>
            <li class="link link--metis">
              <NuxtLink to="/expertise">Expertise</NuxtLink>
            </li>
            <li class="link link--metis">
              <NuxtLink to="/contact">Contact</NuxtLink>
            </li>
          </ul>
        </nav>
        <div  class="button"><button @click="openContact()" class="mail"></button></div>
        <div class="transition_rond" :class="{ 'transition_rond--click': rond }"></div>
      </div>
    </header>
    </div>
</template>

<script setup>
import { onMounted, onUnmounted, onUpdated, ref } from "vue";
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
gsap.registerPlugin(ScrollTrigger);

const rond = ref(false);

function openContact() {
  rond.value = true;
  setTimeout (()=>{
    window.location.href ="https://phenomenal-pothos-655a2a.netlify.app/contact"
  },"1500") 
}

let triggerArray = [];

onMounted(() => {
  if (window.matchMedia("(min-width: 900px)").matches) {

  const links = document.querySelectorAll('.link');
  const lightModeSections = document.querySelectorAll('.light_mode');
  const text_logo = document.querySelector('.text_logo');
  let startOffset = 150; // initialisation de la variable à 0

links.forEach(link => {
  const trigger = ScrollTrigger.create({
    trigger: lightModeSections,
    start: `top+=${startOffset}px center`, // utilisation de la variable pour déplacer le point de départ
    end: 'bottom bottom',
    onEnter: () => {
      link.classList.add('dark');
    },
    onLeaveBack: () => {
      link.classList.remove('dark');
    }
  });
  triggerArray.push(trigger);
  
  startOffset -= 25; // incrémentation de la variable de 10px pour la prochaine boucle
});

  const trigger = ScrollTrigger.create({
      trigger: lightModeSections,
      start: 'top +150px',
      end: 'bottom bottom',
      onEnter: () => {
        text_logo.classList.add('dark');
      },
      onLeaveBack: () => {
        text_logo.classList.remove('dark');
      }
    });

  }
 
});

// onUpdated(() => {
//   triggerArray.forEach(trigger => {
//     trigger.kill();
//   });
//   triggerArray = [];

//   const links = document.querySelectorAll('.link');
//   const lightModeSections = document.querySelectorAll('.light_mode');

//   links.forEach(link => {
//     const trigger = ScrollTrigger.create({
//       trigger: link,
//       start: 'top top',
//       end: 'bottom bottom',
//       onEnter: () => {
//         link.classList.add('dark');
//       },
//       onLeaveBack: () => {
//         link.classList.remove('dark');
//       }
//     });
//     triggerArray.push(trigger);
//   });
// });



onUnmounted(() => {
  triggerArray.forEach(trigger => {
    trigger.kill();
  });
  triggerArray = [];
});
</script>

<style lang="scss" scoped >
.dark{
  color: var(--color-secondaire);
  transition: color 0.5s ease-in-out;
}

.transition_rond{
  position: fixed;
  left: -1000px;
  bottom: -1000px;
  border-radius: 100%;
  background-color: var(--color-bg-dark);
 
  &--click{
    // animation: rond 1s;
    animation: rond 1.2s linear;
  @keyframes rond {
      0%{
        width: 0;
        height: 0;
        // display: block;
        opacity: 0;
      }
      90%{
        opacity: 1;
        height: 3500px;
        width: 3500px;
      }
      100%{
        opacity: 1;
        height: 3500px;
        width: 3500px;

      }
           
    }   
    
  }
}


header {
  padding: 2%;
  position: fixed;
  height: 100vh;
  z-index: 10;
  font-size: 20px;
  font-weight: 700;

  .text_logo {
    font-weight: 700;
    line-height: normal;
  }
 
  .logo_ordi {
      width: 100px;
      margin-bottom: 15px;
  }
}
header{
  animation: ordi 1s;

  @keyframes ordi {
    0% {
      margin-left: -30vw;
    }
    100% {
      margin-left: 0vw;
    }
  }
}
nav {
  margin-top: 15vh;
  li {
  //   position: absolute;
  //   top: 50%;
  // left: 50%;
    margin-bottom: 2vh;
   
  }
}
nav a:hover {
  color: var(--color-orange);
}
.sous {
  display: none;
  // position: absolute;
  width: 100%;
  z-index: 1000;
}

nav > ul li:hover .sous {
  display: block;
  padding-top: 2vh;
  width: max-content;
}

.sous li {
  // position: relative;
  display: inline-flex;
  float: none;
  width: 100%;
  text-align: left;
  align-items: center;

  &:hover > .image{
    rotate: 45deg;
    transition: 0.5s;
  }
  &:hover > .image1{
        background-image: url("/img/Services_Icons/alexander_strategy_group_services_national_security.svg");
  }
  &:hover > .image2{
        background-image: url("/img/Services_Icons/alexander_strategy_group_services_law_enforcement.svg");
      }
      &:hover > .image3{
        background-image: url("/img/Services_Icons/alexander_strategy_group_services_urban_planning.svg");
      }
      &:hover > .image4{
        background-image: url("/img/Services_Icons/alexander_strategy_group_services_city_resilience.svg");
      }
      &:hover > .image5{
        background-image: url("/img/Services_Icons/alexander_strategy_group_services_communication.svg");
      }
}
button {
  background-color: transparent;
  border: none;
  border-radius: 100px;
  width: 42px;
  height: 41px;
  position: absolute;
}
button:hover {
  scale: 1.1;
  transition: 0.5s;
  border: 1px solid var(--color-orange);
}
.button {
  background-color: var(--color-orange);
  background-image: url(../assets/img/contact.svg);
  background-size: 20px 20px;
  background-position: center;
  background-repeat: no-repeat;
  position: absolute;
  bottom: 5%;
  width: 40px;
  height: 40px;
  border-radius: 100px;
  display: flex;
  justify-content: center;
  margin-top: 20px;
}
.button:hover {
  border: solid -1px var(--color-orange);
  transition: 0.3s;
  scale: 1.2;
  //width: 50px;
  //height: 50px;
  display: flex;
}

.image {
      width: 25px;
      height: 25px;
      margin-right: 10px;
      background-repeat: no-repeat;
      background-size: cover;
      transition: 0.5s;

    }
   
    .image1 {
      background-image: url("/img/Services_Icons/alexander_strategy_group_services_national_security_white.svg");
      &:hover{
        background-image: url("/img/Services_Icons/alexander_strategy_group_services_national_security.svg");
      }
    }
    .image2 {
      background-image: url("/img/Services_Icons/alexander_strategy_group_services_law_enforcement_white.svg");
      &:hover{
        background-image: url("/img/Services_Icons/alexander_strategy_group_services_law_enforcement.svg");
      }
    }
    .image3 {
      background-image: url("/img/Services_Icons/alexander_strategy_group_services_urban_planning_white.svg");
      &:hover{
        background-image: url("/img/Services_Icons/alexander_strategy_group_services_urban_planning.svg");
      }
    }
    .image4 {
      background-image: url("/img/Services_Icons/alexander_strategy_group_services_city_resilience_white.svg");
      &:hover{
        background-image: url("/img/Services_Icons/alexander_strategy_group_services_city_resilience.svg");
      }
    }
    .image5 {
      background-image: url("/img/Services_Icons/alexander_strategy_group_services_communication_white.svg");
      &:hover{
        background-image: url("/img/Services_Icons/alexander_strategy_group_services_communication.svg");
      }
    }

    @media screen and (max-width: 840px) {
      header{
        display: none;
      }

    }
</style>