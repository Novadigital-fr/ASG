<template>
          <Header/>

  <div class="contact">
  <div class="contenu-global-parent">
    <div class="contenu-global">
      <div class="formulaire">
        <div class="texte">
          <h1>Engage</h1>
          <br />
          <p>Use the contact form or direct mail to:</p>
          <p class="orange">contact@alexanderstrategygroup.co</p>
          <br />
        </div>
        <Formulaire/>
        <!-- <form>
          <input type="text" name="name" placeholder="Name" class="name" />
          <input type="text" name="email" placeholder="Email" class="email" />
          <input
            type="text"
            name="Subject"
            placeholder="Subject"
            class="support"
          />
          <textarea
            name="message"
            cols="30"
            rows="5"
            placeholder="Message"
          ></textarea>
          <div class="bouton">
            <Button text="Send" />
          </div>
        </form> -->
      </div>
    </div>
  </div>
    <h2 class="Worldwide">Worldwide offices</h2>
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
useSeoMeta({
  title: 'Alexander Strategy Group - Worldwide offices | ASG',
  ogTitle: 'Alexander Strategy Group - Worldwide offices | ASG',
  description: 'Get in touch. Washington DC, Riyadh, Tokyo, Paris, London, Los Angeles.',
  ogDescription: 'Get in touch. Washington DC, Riyadh, Tokyo, Paris, London, Los Angeles.',
  ogImage: '/img/Social_image/alexanderstrategygroup_contact.png',
  twitterCard: 'summary_large_image',
})

</script>

<style lang="scss" scoped>
.contact {
  position: relative;
  z-index: 21;
  display: flex;
  flex-direction: column;
}
.contenu-global-parent{
  overflow: hidden;
}
.contenu-global {
  height: 100vh;
  background-color: var(--color-bg-dark);
  background-image: linear-gradient(180deg, rgba(32, 42, 53, 0) 50.3%, #202A35 91%), url("../assets/img/Img_Contact/alexander_strategy_group_contact.webp");
  background-size: cover;
  background-repeat: no-repeat;
  display: flex;
  justify-content: flex-end;
  align-items: center;
  transform: scale(1.1);
  animation: 2s back;

  @keyframes back {
    0%{
      // opacity: 0;
      transform: scale(1);
    }
    100%{

    }
    
  }
  @media (max-width: 1381px) {
    min-height: 100vh;
    height: auto;
  }
}

.texte {
margin: 4vh 0;
  p{
    font-weight: 700;
  }
}
.formulaire {
  display: flex;
  flex-direction: column;
  background-color: rgba(33, 42, 53, 0.9);
  border-radius: 20px;
  margin: 7vh 10vw 5vh 0;
  padding: 0 4% 4% 4%;
  width: 38vw;
  z-index: 1;
  height: fit-content;
  transform: scale(0.9);
  @media (min-width: 1000px) and (max-width: 1381px) {
    margin: -14vh 10vw 0vh 0;
    width: 44vw;
    transform: scale(0.6);
  }

}


.sous-div {
  width: 100%;
  height: 900px;
  background-image: url("../assets/img/Img_Contact/alexander_strategy_group_contact_map_offices.webp");
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
    background-position: center center;
  }
  .formulaire {
    width: 48vw;
  }
  .sous-div {
    background-position: center center;
  }
}

@media screen and (max-width: 840px) {
  .contenu-global {
    height: fit-content;
    background-image: linear-gradient(360deg, #202A35 0%, rgba(32, 42, 53, 0) 33.41%),
      url("../assets/img/Img_Contact/alexander_strategy_group_contact_mobile.webp");
    justify-content: center;
    background-size: 100%;
    background-position: top center;

  }

  .formulaire {
    display: flex;
    // margin-left: 0;
    margin-right: 0;
    margin-top: 60vh;
    width: 100%;
  }
  .sous-div {
    background-image: none;
    height: 10vh;
    background-color: var(--color-bg-dark);

  }
  .offices{
    background-color: var(--color-bg-dark);
  }

  .Worldwide {

  padding: 10vh 0 0 0;
}
  .service {
  padding: 0 2.5vh ;
  margin-bottom: 35px;
  display: flex;
  align-items: center;
  transition: 0.5s;
  // width: max-content;
  .image {
    width: 50px;
    height: 50px;
    margin-right: 20px;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    transform-origin: center center;
    transition: 1s;

  }
  .image1 {
    background-image: url("../assets/img/local1.svg");
  }
  .image2 {
    background-image: url("../assets/img/local2.svg");
  }
}
}
</style>
