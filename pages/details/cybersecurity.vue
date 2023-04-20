<template>
    <div class="carte">  
        <NuxtLink to="../national_security">
      <img class="icone_tel_close" src="../../assets/img/close.svg" alt="" />
      </NuxtLink>
      <div
        class="image"
        id="popup1"
       ></div>
        <div class="content">
        <h2>Cybersecurity and Cyber Resilience</h2>
        <p class="issou content_small">
            As cities become more connected, more digital, and more integrated with the “Internet Of Things,” robust cybersecurity strategies and capabilities have never been more vital.
        </p>
        <p class="chancla content_small">
            Nefarious actors, state-backed, criminal groups, and private individuals, have targeted cities with cyberattacks. Major cities around the world have been crippled by ransomware attacks, holding critical data and services hostage until attackers are paid off.
        </p>
        <p class="chancla content_small">
           The Alexander Strategy Group team of advisors offers cybersecurity and cyber resilience solutions to help ensure that citizens, companies, and public entities are able to freely use digital channels without fear of privacy violations, theft, or malicious online attacks.
        </p>
    </div>
    </div>    
</template>

<script setup>
definePageMeta({
  layout: "custom",
});
</script>

<style lang="scss" scoped>
 .icone_tel_close{
    display: flex;
    position: fixed;
    top: 27px;
    right: 20px;
  }
  .carte {   
    width: 100vw;
    min-height: 100vh;
    transition: all 1s;
    inset: 0;

  .content{
    display: flex;
    flex-direction: column;
    gap: 20px;
    padding: 20px;
  }

    .image{
        background-image: url("/img/Img_National_security/alexander_strategy_group_services_national_security_cybersecurity.webp");
        background-size: cover;
        margin-bottom: 20px;
      height: 250px;
    }

  
  .icone_tel_close{
    position: fixed;
    top: 27px;
    right: 20px;
  }
  .icone_tel {
    display: none;
  }
  
}
</style>