<template>
          <Header/>

  <div class="contact">
    <div class="contenu-global">
      <div class="formulaire">
        <div class="texte">
          <h1>Get in touch</h1>
          <br />
          <p>Use the contact form or direct mail to:</p>
          <p class="orange">contact@alexanderstrategygroup.co</p>
          <br />
          <p>Support (WhatsApp):</p>
          <p class="orange">+1 (443) 440-5984</p>
        </div>
        <form>
          <input type="text" name="name" placeholder="Name" class="name" />
          <input type="text" name="email" placeholder="Email" class="email" />
          <input
            type="text"
            name="support"
            placeholder="Support"
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
        </form>
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
</template>

<script setup>
definePageMeta({
  pageTransition: {
    name: 'rotate'
  }
})
</script>

<style lang="scss" scoped>
.contact {
  display: flex;
  flex-direction: column;
}
.contenu-global {
  height: 100vh;
  background-color: var(--color-bg-dark);
  background-image: linear-gradient(180deg, rgba(32, 42, 53, 0) 50.3%, #202A35 91%),
    url("../assets/img/Img_Contact/alexander_strategy_group_contact.webp");
  background-size: cover;
  background-repeat: no-repeat;
  display: flex;
  justify-content: flex-end;
  align-items: center;
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
  margin: 5vh 10vw 5vh 0;
  padding: 0 4% 4% 4%;
  width: 38vw;
  z-index: 1;
  height: fit-content;
}

form {
  display: flex;
  flex-direction: column;
}
form input {
  border: none;
  background-color: rgba(82, 93, 103, 0.427);
  padding: 20px 30px;
  width: 100%;
  border-radius: 10px;
  margin: 1vh 0;
  font-size: 16px;
  font-weight: 400;
  line-height: 22px;
  outline: none;
  color: var(--color-text);
}
form textarea {
  border: none;
  background-color: rgba(82, 93, 103, 0.427);
  padding: 20px 30px;
  width: 100%;
  border-radius: 10px;
  margin: 1vh 0 4vh 0;
  outline: none;
  color: var(--color-text);
  font-family: "Nexa";
  font-size: 16px;
  font-weight: 400;
  line-height: 22px;
}
.sous-div {
  width: 100%;
  height: 100vh;
  background-image: url("../assets/img/Img_Contact/maps.png");
  background-size: cover;
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
    margin: 10vh 5vw 5vh 0;
    width: 48vw;
  }
  .sous-div {
    height: 50vh;
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
    height: 40vh;
  }
  .offices{
    background-color: var(--color-bg-dark);
  }
  .service {
  padding: 2.5vh ;
  margin-bottom: 3vh;
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
