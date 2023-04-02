<template>
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
  background-image: linear-gradient(
      180deg,
      rgba(32, 42, 53, 0) 37.45%,
      rgba(32, 42, 53, 0.395797) 65.9%,
      rgba(32, 42, 53, 0.87) 100%
    ),
    url("../assets/img/Img_Contact/alexander_strategy_group_contact.webp");
  background-size: cover;
  background-repeat: no-repeat;
  display: flex;
  justify-content: flex-end;
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
  padding: 5%;
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
  font-size: 1rem;
  outline: none;
  color: var(--color-text);
}
form textarea {
  border: none;
  background-color: rgba(82, 93, 103, 0.427);
  padding: 20px 30px;
  width: 100%;
  border-radius: 10px;
  margin: 1vh 0;
  outline: none;
  color: var(--color-text);
  font-family: "Nexa";
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

@media screen and (max-width: 766px) {
  .contenu-global {
    height: fit-content;
    background-image: linear-gradient(
        180deg,
        rgba(32, 42, 53, 0) 37.45%,
        rgba(32, 42, 53, 0.395797) 65.9%,
        rgba(32, 42, 53, 0.87) 100%
      ),
      url("../assets/img/Img_Contact/alexander_strategy_group_contact_mobile.webp");
    justify-content: center;
  }

  .formulaire {
    // margin-left: 0;
    margin-right: 0;
    margin-top: 70vh;
    width: 100%;
  }
  .sous-div {
    height: 40vh;
  }
}
</style>
