<template>
  <div>
    <header>
      <div class="menu_ordi">
        <img class="logo_ordi" src="../assets/img/logo.svg" alt="" />

        <p class="text_logo">
          alexander <br />
          strategy <br />
          group
        </p>

        <nav>
          <ul>
            <li class="link link--metis">
              <NuxtLink to="/">Home</NuxtLink>
            </li>
            <li class="link link--metis top_sous">
              <NuxtLink to="/">Services</NuxtLink>
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

        <div class="button">
          <button @click="openContact()" class="mail"></button>
        </div>
        <div
          class="transition_rond"
          :class="{ 'transition_rond--click': rond }"
        ></div>
      </div>
      <div class="navtel">
        <NuxtLink to="/">
          <div class="logo_mobile">
            <img
              src="/img/Logos/alexander_strategy_group_Logo_horizontal.svg"
              alt=""
            /></div
        ></NuxtLink>
        <div class="menu_top">
          <ul>
            <li class="link line-link">Services</li>
            <li class="link">
              <NuxtLink to="/expertise">Expertise</NuxtLink>
            </li>
            <li class="link">
              <NuxtLink to="/contact">Contact</NuxtLink>
            </li>
          </ul>
        </div>
        <div class="menu__content">
          <div class="menu__back unbutton">
            <svg
              width="17"
              height="17"
              viewBox="0 0 17 17"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M8.5 10.3099L2.1654 16.6445C1.92839 16.8815 1.62674 17 1.26046 17C0.89417 17 0.592522 16.8815 0.355513 16.6445C0.118504 16.4075 0 16.1058 0 15.7395C0 15.3733 0.118504 15.0716 0.355513 14.8346L6.69011 8.5L0.355513 2.1654C0.118504 1.92839 0 1.62674 0 1.26046C0 0.89417 0.118504 0.592522 0.355513 0.355513C0.592522 0.118504 0.89417 0 1.26046 0C1.62674 0 1.92839 0.118504 2.1654 0.355513L8.5 6.69011L14.8346 0.355513C15.0716 0.118504 15.3733 0 15.7395 0C16.1058 0 16.4075 0.118504 16.6445 0.355513C16.8815 0.592522 17 0.89417 17 1.26046C17 1.62674 16.8815 1.92839 16.6445 2.1654L10.3099 8.5L16.6445 14.8346C16.8815 15.0716 17 15.3733 17 15.7395C17 16.1058 16.8815 16.4075 16.6445 16.6445C16.4075 16.8815 16.1058 17 15.7395 17C15.3733 17 15.0716 16.8815 14.8346 16.6445L8.5 10.3099Z"
                fill="white"
              />
            </svg>
          </div>
          <nav class="menu__nav-content">
            <div class="column">
              <img
                src="/img/Logos/alexander_strategy_group_Logo_iconwhite.svg"
                alt=""
              />
              <h4>Services</h4>
              <div>
                <NuxtLink to="/national_security">
                  <div class="service menu__back">
                    <div class="image image1"></div>
                    <div>
                      <h3>National Security</h3>
                      <p>Create secure environments</p>
                    </div>
                  </div>
                </NuxtLink>
                <NuxtLink to="/law_enforcement">
                  <div class="service menu__back">
                    <div class="image image2"></div>
                    <div>
                      <h3>Law Enforcement</h3>
                      <p>Make communities safer</p>
                    </div>
                  </div>
                </NuxtLink>
                <NuxtLink to="/urban_planning">
                  <div class="service menu__back">
                    <div class="image image3"></div>
                    <div>
                      <h3>Urban Planning</h3>
                      <p>Thrive in the 21st century</p>
                    </div>
                  </div>
                </NuxtLink>
                <NuxtLink to="/city_resilience">
                  <div class="service menu__back">
                    <div class="image image4"></div>
                    <div>
                      <h3>City Resilience</h3>
                      <p>Ready for the unexpected</p>
                    </div>
                  </div>
                </NuxtLink>
                <NuxtLink to="/communications">
                  <div class="service menu__back">
                    <div class="image image5"></div>
                    <div>
                      <h3>Communications</h3>
                      <p>Get the message across</p>
                    </div>
                  </div>
                </NuxtLink>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </header>
  </div>
</template>

<script setup>
import { onMounted, onUnmounted, ref } from "vue";
import { gsap } from "gsap";

import { ScrollTrigger } from "gsap/ScrollTrigger";
gsap.registerPlugin(ScrollTrigger);

const scrollTween = ref(null);
const rond = ref(false);

function openContact() {
  rond.value = true;
  setTimeout(() => {
    window.location.href =
      "https://phenomenal-pothos-655a2a.netlify.app/contact";
  }, "2000");
}

onMounted(() => {
  const header = document.querySelector("header");
  const sections = document.querySelectorAll(".light_mode");

  sections.forEach((section) => {
    section.addEventListener("mouseenter", () => {
      header.classList.add("dark");
    });
    section.addEventListener("mouseleave", () => {
      header.classList.remove("dark");
    });
  });

  let logo = document.querySelector(".logo_mobile");
  let lastScrollValue = 0;

  document.addEventListener("scroll", () => {
    let top = document.documentElement.scrollTop;
    if (lastScrollValue < top) {
      logo.classList.add("hidden");
    } else {
      logo.classList.remove("hidden");
    }
    lastScrollValue = top;
  });

  // DOM elements
  const DOM = {
    // For demo purposes, trigger the effect when clicking any link in the menu (.line-link)
    menuLinks: [...document.querySelectorAll(".line-link")],
    // Menu element (.menu)
    menu: document.querySelector(".menu"),
    // Element that slides out
    menuContent: document.querySelector(".menu__content"),
    // Close button
    closeCtrl: document.querySelectorAll(".menu__back"),
    service: document.querySelector(".service"),
    // Extra elements that will be animated inside the menu
  };

  let menuStatus = {
    isOpen: false,
    isAnimating: false,
  };

  // Animation gsap timeline
  const menuTimeline = gsap
    .timeline({
      paused: true,
      onComplete: () => (menuStatus.isAnimating = false),
      onReverseComplete: () => (menuStatus.isAnimating = false),
      defaults: {
        duration: 1.2,
        ease: "power4.inOut",
      },
    })

    .to(
      DOM.menuContent,
      {
        duration: 1,
        startAt: { y: "-120%" },
        y: "0%",
      },
      "menu"
    );

  // Menu expand
  const expandMenu = () => {
    if (menuStatus.isAnimating || menuStatus.isOpen) return;
    menuStatus.isAnimating = true;
    menuStatus.isOpen = true;
    menuTimeline.play();
  };

  // Menu collapse
  const collapseMenu = () => {
    if (menuStatus.isAnimating || !menuStatus.isOpen) return;
    menuStatus.isAnimating = true;
    menuStatus.isOpen = false;
    menuTimeline.reverse(0);
  };

  // Expand the menu when pressing any of the menu top links...
  DOM.menuLinks.forEach((link) => {
    link.addEventListener("click", (ev) => {
      ev.preventDefault();
      expandMenu();
    });
  });

  // Collapse it when pressing the close button
  DOM.closeCtrl.forEach((close) => {
    close.addEventListener("click", (ev) => {
      // ev.preventDefault();
      collapseMenu();
    });
  });
});
</script>

<style lang="scss" scoped>
.transition_rond {
  position: fixed;
  left: -1000px;
  bottom: -1000px;
  border-radius: 100%;
  background-color: var(--color-bg-dark);

  &--click {
    // animation: rond 1s;
    animation: rond 2.2s linear;
    @keyframes rond {
      0% {
        width: 0;
        height: 0;
        // display: block;
        opacity: 0;
      }
      90% {
        opacity: 1;
        height: 3500px;
        width: 3500px;
      }
      100% {
        opacity: 1;
        height: 3500px;
        width: 3500px;
      }
    }
  }
}

.dark {
  color: var(--color-secondaire);
  transition: color 0.5s ease-in-out;
}
header {
  padding: 2%;
  position: fixed;
  height: 100vh;
  z-index: 9;
  font-size: 20px;
  font-weight: 700;
  mix-blend-mode: difference !important;
  color: white !important;

  .text_logo {
    font-weight: 700;
    line-height: normal;
  }
  .logo_mobile {
    display: none;
  }
  .logo_ordi {
    width: 100px;
    margin-bottom: 15px;
  }
}
header {
  animation: ordi 4s;

  @keyframes ordi {
    50% {
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
  &:hover > .image {
    rotate: 45deg;
    transition: 0.5s;
  }
  &:hover > .image1 {
    background-image: url("/img/Services_Icons/alexander_strategy_group_services_national_security.svg");
  }
  &:hover > .image2 {
    background-image: url("/img/Services_Icons/alexander_strategy_group_services_law_enforcement.svg");
  }
  &:hover > .image3 {
    background-image: url("/img/Services_Icons/alexander_strategy_group_services_urban_planning.svg");
  }
  &:hover > .image4 {
    background-image: url("/img/Services_Icons/alexander_strategy_group_services_city_resilience.svg");
  }
  &:hover > .image5 {
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

  &:hover {
    border: solid -1px var(--color-orange);
    transition: 0.3s;
    scale: 1.2;
    //width: 50px;
    //height: 50px;
    display: flex;
  }
}

.image {
  width: 25px;
  height: 25px;
  margin-right: 10px;
  background-repeat: no-repeat;
  background-size: cover;
}

.image1 {
  background-image: url("/img/Services_Icons/alexander_strategy_group_services_national_security_white.svg");
  &:hover {
    background-image: url("/img/Services_Icons/alexander_strategy_group_services_national_security.svg");
  }
}
.image2 {
  background-image: url("/img/Services_Icons/alexander_strategy_group_services_law_enforcement_white.svg");
  &:hover {
    background-image: url("/img/Services_Icons/alexander_strategy_group_services_law_enforcement.svg");
  }
}
.image3 {
  background-image: url("/img/Services_Icons/alexander_strategy_group_services_urban_planning_white.svg");
  &:hover {
    background-image: url("/img/Services_Icons/alexander_strategy_group_services_urban_planning.svg");
  }
}
.image4 {
  background-image: url("/img/Services_Icons/alexander_strategy_group_services_city_resilience_white.svg");
  &:hover {
    background-image: url("/img/Services_Icons/alexander_strategy_group_services_city_resilience.svg");
  }
}
.image5 {
  background-image: url("/img/Services_Icons/alexander_strategy_group_services_communication_white.svg");
  &:hover {
    background-image: url("/img/Services_Icons/alexander_strategy_group_services_communication.svg");
  }
}

.navtel {
  display: none;
}

@media screen and (max-width: 767px) {
  /* mobile */

  header {
    animation: ordi 4s;

    @keyframes ordi {
      50% {
        margin-top: -40vh;
      }
      100% {
        margin-top: 0vh;
      }
    }
    nav a:hover {
      color: var(--color-text);
    }
    .logo_mobile {
      width: 90vw;
      display: flex;
      justify-content: center;
      transition: margin-top 0.5s;

      img {
        height: 50px;
        margin-bottom: 20px;
      }
    }
    .logo_mobile.hidden {
      margin-top: -70px;
      transition: margin-top 0.5s;
    }
  }
  .menu_ordi {
    display: none;
  }

  .navtel {
    position: absolute;
    top: 1rem;
    left: 1rem;
    right: 1rem;
    bottom: 1rem;
    z-index: 100;
    color: var(--color-text);
    display: flex;
    flex-direction: column;
  }
  .menu_top ul {
    pointer-events: auto;
    z-index: 3;
    padding: 0.8rem 1rem;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    width: 90vw;
    background: var(--color-orange);
    border-radius: 40px;
  }
  .menu__content {
    margin-top: -2.9rem;
    position: relative;
    z-index: 15;
    overflow: hidden;
    transform: translateY(-120%);
    padding: 0 1rem;
    height: 100%;
    width: 90vw;
    background: var(--color-orange);
    border-radius: 2rem;
    padding-bottom: 1rem;
    will-change: transform;
  }
  .menu__nav-content {
    display: flex;
    flex-wrap: wrap;
    align-self: start;
    margin-top: 5.5vh;
  }
  .column {
    display: flex;
    flex-direction: column;
    align-items: center;

    img {
      width: 18vw;
      margin: 2vh 0 8vh 0;
    }
    h4 {
      margin-bottom: 4vh;
    }
  }
  .service {
    padding: 1vh 0vw;
    margin-bottom: 1vh;
    display: flex;
    align-items: center;
    .image {
      width: 30px;
      height: 30px;
      margin-right: 4vw;
      background-repeat: no-repeat;
      background-size: cover;
    }
    .image1 {
      background-image: url("/img/Services_Icons/alexander_strategy_group_services_national_security_white.svg");
    }
    .image2 {
      background-image: url("/img/Services_Icons/alexander_strategy_group_services_law_enforcement_white.svg");
    }
    .image3 {
      background-image: url("/img/Services_Icons/alexander_strategy_group_services_urban_planning_white.svg");
    }
    .image4 {
      background-image: url("/img/Services_Icons/alexander_strategy_group_services_city_resilience_white.svg");
    }
    .image5 {
      background-image: url("/img/Services_Icons/alexander_strategy_group_services_communication_white.svg");
    }
  }
  .unbutton {
    position: absolute;
    height: 50px;
    right: 50px;
    align-self: flex-end;
    margin-top: calc(5.5vh + 2rem);
  }
}
</style>
