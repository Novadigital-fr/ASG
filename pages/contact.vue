<template>
          <Header/>

  <div class="contact">
  <div class="contenu-global-parent">
    <div class="contenu-global"></div>
    <div class="formulaire">
      <div class="texte">
        <h1>Engage</h1>
        <br />
        <p>Use the contact form or direct mail to:</p>
        <p class="orange">contact@alexanderstrategygroup.co</p>
        <br />
      </div>
      <Formulaire/>
    </div>
  </div>
    <div class="sous-div"></div>
    <div class="offices">
      <div class="sevices">
          <div class="service">
            <div class="image image1"></div>
            <div>
              <h3>Washington DC</h3>
              <p>United States of America</p>
            </div>
          </div>
          <div class="service">
            <div class="image image2"></div>
            <div>
              <h3>Los Angeles</h3>
              <p>United States of America</p>
            </div>
          </div>
          <div class="service">
            <div class="image image2"></div>
            <div>
              <h3>London</h3>
              <p>United Kingdom</p>
            </div>
          </div>
          <div class="service">
            <div class="image image2"></div>
            <div>
              <h3>Paris</h3>
              <p>France</p>
            </div>
          </div>
          <div class="service">
            <div class="image image2"></div>
            <div>
              <h3>Riyadh</h3>
              <p>Kingdom of Saudi Arabia</p>
            </div>
          </div>
          <div class="service">
            <div class="image image2"></div>
            <div>
              <h3>Tokyo</h3>
              <p>Japan</p>
            </div>
          </div>
      </div>
    </div>
  </div>
  <TheFooter />

</template>

<script setup>
const config = useRuntimeConfig()
useSeoMeta({
  title: 'Alexander Strategy Group - Worldwide offices | ASG',
  ogTitle: 'Alexander Strategy Group - Worldwide offices | ASG',
  description: 'Get in touch. Washington DC, Riyadh, Tokyo, Paris, London, Los Angeles.',
  ogDescription: 'Get in touch. Washington DC, Riyadh, Tokyo, Paris, London, Los Angeles.',
  ogImage: `${config.public.siteUrl}/img/Social_image/alexanderstrategygroup_contact.png`,
  ogUrl: `${config.public.siteUrl}/contact`,
  ogType: 'website',
  twitterCard: 'summary_large_image',
  twitterSite: '@ASGroup',
})
useHead({ link: [{ rel: 'canonical', href: `${config.public.siteUrl}/contact` }] })

</script>

<style lang="scss" scoped>
.contact {
  position: relative;
  z-index: 21;
  display: flex;
  flex-direction: column;
}
.contenu-global-parent {
  position: relative;
  overflow: hidden;
}
.contenu-global {
  height: 100vh;
  background-color: var(--color-bg-dark);
  background-image: linear-gradient(180deg, rgba(32, 42, 53, 0) 50.3%, #202A35 91%), url("/img/contact/alexander_strategy_group_contact.webp");
  background-size: cover;
  background-position: center bottom;
  background-repeat: no-repeat;
  transform: scale(1.1);
  animation: 2s back;

  @keyframes back {
    0%{
      transform: scale(1);
    }
    100%{
    }
  }
}

.texte {
  margin: 4vh 0;
  p {
    font-weight: 700;
  }
}
.formulaire {
  position: absolute;
  top: 50%;
  right: 10vw;
  transform: translateY(-50%) scale(0.9);
  display: flex;
  flex-direction: column;
  background-color: rgba(33, 42, 53, 0.9);
  border-radius: 20px;
  padding: 0 4% 4% 4%;
  width: 38vw;
  z-index: 1;
  height: fit-content;
  @media (min-width: 1000px) and (max-width: 1381px) {
    width: 44vw;
    transform: translateY(-50%) scale(0.7);
  }
}


.sous-div {
  width: 100%;
  height: 900px;
  background-image: url("../public/img/contact/map-contact.jpeg");
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}
.Worldwide {
  background-color: var(--color-bg-dark);
  text-align: center;
  padding: 10vh 0;
}
.service {
display: none;
}


@media screen and (max-width: 1024px) {
  /* tablettte */
  .contenu-global {
    background-position: center bottom;
  }
  .formulaire {
    width: 48vw;
  }
  .sous-div {
    background-position: center center;
  }
}

@media screen and (max-width: 840px) {
  .contenu-global-parent {
    overflow: visible;
  }
  .contenu-global {
    height: 60vh;
    min-height: 60vh;
    background-position: top center;
    transform: none;
    animation: none;
  }
  .formulaire {
    position: static;
    top: auto;
    right: auto;
    transform: none;
    width: 100%;
    border-radius: 0;
  }
  .sous-div {
    height: 50vh;
    background-image: url("/img/contact/map-contact.jpeg");
    background-size: cover;
    background-position: center;
  }
  .offices {
    display: none;
  }
}
</style>
