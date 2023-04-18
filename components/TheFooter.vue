<template>
  <div>
    <footer>
      <div class="top">
        <div class="signup">
          <h4>
            Alexander Strategy Group is carefully 
            crafting insights each month
          </h4>
          <input type="email" placeholder="your@email.com" />
          <ButtonWhite text="Sign up" />
        </div>

        <div>
          <img
            src="/img/Logos/alexander_strategy_group_Logo_iconwhite.svg"
            alt=""
          />
        </div>
      </div>
      <div class="bottom">
        <div class="left">
          <div>
            <NuxtLink to="/national_security">
            <div class="service">
              <img
                src="/img/Services_Icons/alexander_strategy_group_services_national_security_white.svg"
                alt=""
              />
              <p>National Security</p>
            </div>
            </NuxtLink>
            <NuxtLink to="/urban_planning">
            <div class="service">
              <img
                src="/img/Services_Icons/alexander_strategy_group_services_urban_planning_white.svg"
                alt=""
              />
              <p>Urban Planing</p>
            </div>
            </NuxtLink>
          </div>
          <div>
            <NuxtLink to="/law_enforcement">
            <div class="service">
              <img
                src="/img/Services_Icons/alexander_strategy_group_services_law_enforcement_white.svg"
                alt=""
              />
              <p>Law Enforcement</p>
            </div>
            </NuxtLink>
            <NuxtLink to="/city_resilience">
            <div class="service">
              <img
                src="/img/Services_Icons/alexander_strategy_group_services_city_resilience_white.svg"
                alt=""
              />
              <p>City Resilience</p>
            </div>
            </NuxtLink>
          </div>
          <NuxtLink to="/communications">
          <div class="service">
            <img
              src="/img/Services_Icons/alexander_strategy_group_services_communication_white.svg"
              alt=""
            />
            <p>Communication</p>
          </div>
          </NuxtLink>
        </div>
        <div class="right">
          <p>
            ©2023 All rights reserved alexander strategy group | <NuxtLink to="/privacy"> Privacy Policy</NuxtLink>
          </p>
        </div>
      </div>
    </footer>
  </div>
</template>

<script setup>
onMounted(() => {

  // Sélectionner le footer
const footer = document.querySelector('footer');

// Fonction pour faire apparaître le footer
function afficherFooter() {
   footer.style.display = 'block';
}

// Attendre 1 seconde avant d'appeler la fonction afficherFooter
setTimeout(afficherFooter, 1000);


})

</script>

<style lang="scss" scoped>
footer {
  display: none;
  background-color: var(--color-orange);
  background-image: url("../assets/img/alexander_strategy_group_pattern.webp");
  background-size: cover;
  padding: 10vh 10vw;
  position: fixed;
  bottom: 0;
  width: 100%;
  height: 58vh;
  z-index: -1;
  animation: apparition-footer 0.8s;
 

  @keyframes apparition-footer {
    0% {
      opacity: 0;
    }
    90%{
      opacity: 0;
    }
    100%{
      opacity: 1;

    }
  
  }
  
}
.top {
  display: flex;
  justify-content: space-between;
  margin-bottom: 10vh;
}
input {
  margin: 2vh 0;
  width: 100%;
  border-radius: 100px;
  padding: 2vh 1vw;
  border: none;
  outline: none;
  background-color: #ffffff66;
  color: var(--color-text);
  font-size: 16px;
}

.signup {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  width: clamp(35%, 40%, 50%);
}

.bottom {
  display: flex;
  align-items: flex-end;
  justify-content: space-between;

  .left {
    display: flex;
    align-items: flex-end;
    gap: 20px;

    .service {
      display: flex;
      align-items: center;
      margin-bottom: 2vh;

      &:hover > img{
        rotate: 45deg;
        transition: rotate 0.5s;
      }
    }
    p {
      font-weight: 700;
    }
    img {
      width: 20px;
      margin-right: 1vw;
      transition: rotate 0.5s;
      
    }
  }
  .right {
    font-size: 12px;
    margin-bottom: 2vh;
    text-align: end;
  }
}

@media screen and (max-width: 840px) {
  /* mobile */

  footer {
    height: 80vh;
  }
  .top {
    flex-direction: column-reverse;
    text-align: center;
 

    img{
      width: 15vw;
    }
  }
  .bottom {
    .left {
      display: none;
    }
    .right {
      text-align: center;

      p{
        font-size: 14px;
      }
    }
  }

  .signup {
    width: 100%;
    align-items: center;

    h4 {
      margin: 5vh 5vw 0 5vw;
      line-height: 24px;
      @media (min-width: 767px) {
        line-height: 40px;
      }
    }
    input{
      margin: 5vh 0;
      padding: 2vh 4vw;

    }
  }
}
</style>
