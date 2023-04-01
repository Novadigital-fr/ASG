<template>
  <div>
    <header>
      <div class="menu_ordi">
        <img
          src="../assets/img/logo.svg"
          alt=""
        />
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
            <li class="link link--metis">
              <NuxtLink to="/">Services</NuxtLink>
              <ul class="sous">
                <li>
                  <NuxtLink to="/national_security">National Security</NuxtLink>
                </li>
                <li>
                  <NuxtLink to="/law_enforcement">Law Enforcement</NuxtLink>
                </li>
                <li><NuxtLink to="/urban_planning">Urban Planing</NuxtLink></li>
                <li>
                  <NuxtLink to="/city_resilience">City Resilience</NuxtLink>
                </li>
                <li><NuxtLink to="/communications">Communication</NuxtLink></li>
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
        <div class="button"><button class="mail"></button></div>
      </div>
      <div class="navtel">
        <div class="menu_top">
          <ul>
            <li class="link line-link">
              <NuxtLink to="/">Services</NuxtLink>
            </li>
            <li class="link line-link">
              <NuxtLink to="/">Expertise</NuxtLink>
            </li>
            <li class="link line-link">
              <NuxtLink to="/contact">Contact</NuxtLink>
            </li>
          </ul>
        </div>
        <div class="menu__content">
          <nav class="menu__nav-content">
            <div class="column">
            <img src="/img/Logos/alexander_strategy_group_Logo_iconwhite.svg" alt="">
            <h4>Services</h4>
            <div>
              <NuxtLink to="/national_security">
                <div class="service">
                  <div class="image image1"></div>
                  <div>
                    <h3>National Security</h3>
                    <p>Create secure environments</p>
                  </div>
                </div>
              </NuxtLink>
              <NuxtLink to="/law_enforcement">
                <div class="service">
                  <div class="image image2"></div>
                  <div>
                    <h3>Law Enforcement</h3>
                    <p>Make communities safer</p>
                  </div>
                </div>
              </NuxtLink>
              <NuxtLink to="/urban_planning">
                <div class="service">
                  <div class="image image3"></div>
                  <div>
                    <h3>Urban Planning</h3>
                    <p>Thrive in the 21st century</p>
                  </div>
                </div>
              </NuxtLink>
              <NuxtLink to="/city_resilience">
                <div class="service">
                  <div class="image image4"></div>
                  <div>
                    <h3>City Resilience</h3>
                    <p>Ready for the unexpected</p>
                  </div>
                </div>
              </NuxtLink>
              <NuxtLink to="/communications">
                <div class="service">
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
          <button class="menu__back unbutton">
            <svg
              width="10"
              height="182"
              viewBox="0 0 10 121"
              preserveAspectRatio="xMidYMin meet"
            >
              <path d="M5 0 .5 9h9L5 0Zm.5 120.5V8h-1v113h1v-.5Z" />
            </svg>
          </button>
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

onMounted(() => {



const header = document.querySelector('header');
const sections = document.querySelectorAll('.light_mode');

sections.forEach(section => {
  section.addEventListener('mouseenter', () => {
      header.classList.add('dark');

  });
  
  section.addEventListener('mouseleave', () => {
    header.classList.remove('dark');
  });
});


  // DOM elements
  const DOM = {
    // For demo purposes, trigger the effect when clicking any link in the menu (.line-link)
    menuLinks: [...document.querySelectorAll(".line-link")],
    // Cover element (wrap, outer and image inner elements)
   
    // Some of the main page content elements
    // We'll animate some of the content elements when expanding the menu
  
    // Menu element (.menu)
    menu: document.querySelector(".menu"),
    // Element that slides out
    menuContent: document.querySelector(".menu__content"),

    // Close button
    closeCtrl: document.querySelector(".menu__back"),
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
    )

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
  DOM.closeCtrl.addEventListener("click", (ev) => {
    ev.preventDefault();
    collapseMenu();
  });
});
</script>

<style lang="scss" scoped>

.dark{
  color: var(--color-secondaire);
  transition: color 0.5s ease-in-out;
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
  img {
    width: 65%;
    mix-blend-mode: normal;
  }
}
header{
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
  position: absolute;
  width: 100%;
  z-index: 1000;
}
nav > ul li:hover .sous {
  display: block;
}
.sous li {
  position: relative;
  float: none;
  width: 100%;
  text-align: left;
}
button {
  background-color: var(--color-orange);
  border: none;
  border-radius: 100px;
  width: 40px;
  height: 40px;
  background-image: url(../assets/img/contact.svg);
  background-size: 20px 20px;
  background-position: center;
  background-repeat: no-repeat;
}
button:hover {
  // scale: 1.1;
  transition: 0.5s;
}
.button {
  position: absolute;
  bottom: 5%;
  width: 40px;
  height: 40px;
  border-radius: 100px;

}
.button:hover {
  border: solid 1px var(--color-orange);
  transition: 0.3s;
  // scale: 1.2;
  width: 50px;
  height: 50px;
  display: flex;
  align-items: center;
  text-align: center;
  justify-content: center;
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
    pointer-events: none;
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
    margin-top: -4.35rem;
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
  .column{
    display: flex;
    flex-direction: column;
    align-items: center;

    img{
      width: 18vw;
      margin: 2vh 0 8vh 0;
    }
    h4{
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
  .menu__back {
	position: relative;
	grid-area: back;
	height: 90px;
	align-self: start;
	margin-top: calc(5.5vh + 2rem);
}

.menu__back svg {
	display: block;
	fill: #000;
	height: 100%;
	max-height: 201px;
	transition: transform 0.3s;
}

.menu__back:hover svg,
.menu__back:focus svg {
	transform: translateY(-10px);
}
}
</style>
