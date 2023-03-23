<template>
  <div>
    <footer>
      <div class="top">
        <div class="signup">
          <h4>
            Alexander Strategy Group is carefully <br />
            crafting insights each month
          </h4>
          <input type="email" placeholder="your@email.com" />
          <ButtonWhite text="Sign up" />
        </div>

        <div>
          <img
            src="../assets/img/Logos/alexander_strategy_group_Logo_iconwhite.svg"
            alt=""
          />
        </div>
      </div>
      <div class="bottom">
        <div class="left">
          <div>
            <div class="service">
              <img
                src="../assets/img/Services_Icons/alexander_strategy_group_services_national_security_white.svg"
                alt=""
              />
              <p>National Security</p>
            </div>
            <div class="service">
              <img
                src="../assets/img/Services_Icons/alexander_strategy_group_services_urban_planning_white.svg"
                alt=""
              />
              <p>National Security</p>
            </div>
          </div>
          <div>
            <div class="service">
              <img
                src="../assets/img/Services_Icons/alexander_strategy_group_services_law_enforcement_white.svg"
                alt=""
              />
              <p>National Security</p>
            </div>
            <div class="service">
              <img
                src="../assets/img/Services_Icons/alexander_strategy_group_services_city_resilience_white.svg"
                alt=""
              />
              <p>National Security</p>
            </div>
          </div>
          <div class="service">
            <img
              src="../assets/img/Services_Icons/alexander_strategy_group_services_communication_white.svg"
              alt=""
            />
            <p>National Security</p>
          </div>
        </div>
        <div class="right">
        <p>©2023 All rights reserved alexander strategy group | Privacy Policy</p>
        </div>
      </div>
    </footer>
  </div>
</template>

<script setup></script>

<style lang="scss" scoped>
footer {
  background-color: var(--color-orange);
  background-image: url("../assets/img/alexander_strategy_group_pattern.webp");
  background-size: cover;
  padding: 10vh 10vw;
}
.top {
  display: flex;
  justify-content: space-between;
  margin-bottom: 10vh;
}
input{
  margin: 2vh 0;
  width: 100%;
  border-radius: 100px;
  padding: 1.5vh 1vw;
  border: none;
  outline: none;
  background-color: #FFFFFF66;
  color: var(--color-text);
  font-size: 20px;
}

.signup {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
}
.bottom {
    display: flex;
    align-items: flex-end;
    justify-content: space-between;

  .left {
    display: flex;
    align-items: flex-end;
    .service {
      display: flex;
      align-items: center;
      margin-bottom: 2vh;
    }
    img {
      width: 10%;
      margin-right: 1vw;
    }
  }
  .right{
    font-size: 12px;
    margin-bottom: 2vh;
text-align: end;
  }
}

@media screen and (max-width: 767px) {
    /* mobile */

    .top{
      flex-direction: column-reverse;
      text-align: center;
    }
    .bottom{
      .left{
        display: none;
      }
      .right{
        text-align: center;
      }
    }

    .signup{

      h4{
        margin: 5vh 0;
      }
    }
  }
</style>
