<template>
    <div>
    <Header/>
    <ServHero
        image ="/img/Img_National_security/alexander_strategy_group_services_national_security.webp"
        logo ="/img/Services_Icons/alexander_strategy_group_services_national_security.svg"
        title ="National Security"
        text ="Create secure environments"

         />

         <div class="reveal">
           <h2> <span class="text_reveal"> Having worked at the highest level of national security and law enforcement, the Alexander</span><span class="text_reveal"> Strategy Group team provides cutting edge risk analysis, threat assessments, policy evaluation </span><span class="text_reveal">  and development to help create secure environments.</span></h2>
        </div>
    </div>

    <ServLogo
      logo="/img/Services_Icons/alexander_strategy_group_services_national_security.svg"
    />
    <ServImage
    src1="/img/Img_National_security/alexander_strategy_group_services_national_security_cybersecurity.webp"
    src2="/img/Img_National_security/alexander_strategy_group_services_national_security_terrorism.webp"
    titre="Cybersecurity and Cyber Resilience"
    description="As cities become more connected, more digital, and more integrated with the “Internet Of Things,” robust cybersecurity strategies and capabilities have never been more vital."
    sousDesc1="Nefarious actors, state-backed, criminal groups, and private individuals, have targeted cities with cyberattacks. Major cities around the world have been crippled by ransomware attacks, holding critical data and services hostage until attackers are paid off."
    sousDesc2="The Alexander Strategy Group team of advisors offers cybersecurity and cyber resilience solutions to help ensure that citizens, companies, and public entities are able to freely use digital channels without fear of privacy violations, theft, or malicious online attacks."
    titrePrime="Terrorism"
    descriptionPrime="Terrorist attacks can bring cities to a standstill. The terrible loss of innocent lives can have profound impacts on a city and must be prevented at all costs."
    sousDesc1Prime="Additionally the risk of terrorism can hamper a city’s economic growth, tourism industry, and harm community relations. Preventing terrorist attacks requires a comprehensive strategy across law enforcement, intelligence agencies, federal and local officials, and other stakeholders."
    sousDesc2Prime="Alexander Strategy Group ’s analysis and consulting services take a holistic approach in’ understanding, and countering terrorist threats."
    />

    <ServKeyServ
    title1="Risk Analysis"
    summary1="To mitigate risk, one must understand where the threats emanate. Our experts provide a 360 degree understanding of the national security risks that companies or communities face. From state actors, to terrorist groups, to cyber risks, Alexander Strategy Group takes a holistic approach to risk analysis to ensure that our clients are able to detect, deter, prevent, and respond to evolving threats."
    title2="Intelligence"
    summary2="Security depends on intelligence. Utilizing open and closed source intelligence and deep global relationships, Alexander Strategy Group produces timely intelligence reports on the most pressing threats they face, ranging from those emanating from terrorist groups, cyberattackers, and hostile nation-states. Alexander Strategy Group’s intelligence products enable clients to be aware of threats before they materialize."
    title3="Policy Evaluation & Development"
    summary3="Risk analysis and intelligence is only beneficial if organizations and governments have policies and strategies in place to utilize such information. Alexander Strategy Group provides policy evaluation and development to ensure our end users have comprehensive policies to defend against a variety of security threats, including cyberattacks, terrorism, white collar crime, chemical, biological, radiological and nuclear threats, and more. These policies enable policymakers to implement a security-first approach that keeps communities safe."
    title4="Policy Implementation"
    summary4="Driven by excellence, our dedicated team offers a proactive approach to help clients implement their national security strategies. From intelligence gathering, to threat monitoring, to helping implement response efforts, our consultants stay with you every step of the way."
    />
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
    width: clamp(530px, 50vw, 999px);
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
