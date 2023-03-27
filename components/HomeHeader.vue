<template>
  <div class="full">
    <div class="loader">
      <client-only>
        <Vue3Lottie
          class="video"
          animationLink="https://lottie.host/f16fecf0-bd2e-4429-a628-a9e108e25576/5HPDh1eRql.json"
          :height="100"
          :width="100"
          :speed="2.5"
          loop="none"
        />
      </client-only>
    </div>
    <div class="top">
      <div class="sticky">
        <div class="div_logo">
          <img
            class="logo"
            src="/img/Logos/alexander_strategy_group_Logo_icon.svg"
            alt=""
          />
        </div>
        <div class="title">
          <!-- <div class="div top_title"></div> -->
          <h1>
            We help mitigate risk to keep <br />
            communities, companies, <br />
            and individuals safe
          </h1>
          <!-- <div class="div bottom_title"></div> -->
        </div>
        <h4>alexander strategy group</h4>
      </div>
    </div>
    <div class="bottom">
     
      <h1>
        Alexander Strategy Group <br />
        is a leading global <br />
       <span class="orange"> consulting services firm</span>
      </h1>
    </div>
  </div>
</template>

<script setup></script>

<style lang="scss" scoped>
.top {
  height: 150vh;
}
.sticky {
  min-height: 100vh;
  width: 100vw;
  background: linear-gradient(
      180deg,
      rgba(32, 42, 53, 0) 37.45%,
      rgba(32, 42, 53, 0.395797) 65.9%,
      rgba(32, 42, 53, 0.87) 100%
    ),
    url("../assets/img/Img_HP/alexander_strategy_group_homepage.webp");
    background-color: #202a35;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
  padding-top: 10%;
  position: sticky;
  top: 0;
  z-index: -1;
  .div_logo {
    overflow: hidden;
    .logo {
      animation: logo 4s;

      @keyframes logo {
        0% {
          transform: translateY(200px);
        }
        60% {
          transform: translateY(200px);
        }
        100% {
        }
      }
    }
  }

  .title {
    overflow: hidden;
  }

  h1 {
    margin: 2% 0;
    animation: title 4s;

    @keyframes title {
      0% {
        transform: translateY(-150px);
      }
      70% {
        transform: translateY(-150px);
      }
      100% {
      }
    }
  }
  h4 {
    color: var(--color-orange);
    z-index: 1000;
    animation: soustitle 4s;

    @keyframes soustitle {
      0% {
        opacity: 0;
      }
      30% {
        opacity: 0;
      }
      50% {
        opacity: 1;
        transform: translateY(-150px);
      }
      70% {
        transform: translateY(-150px);
      }
      80% {
        //   transform: translateY(20px);
      }
      100% {
      }
    }
  }
}

.bottom {
  width: 100%;
  height: 120vh;
  margin-top: -5vh;
  background-color: var(--color-bg-dark);
  display: flex;
  justify-content: center;
  z-index: 10;
  align-items: flex-start;

  h1 {
    // position: sticky;
    // top: 200px;
    z-index: 10;
    text-align: center;
  }
}

.video {
  width: 10vw;
}
.loader {
  background-color: #202a35;
  width: 100%;
  height: 100vh;
  opacity: 0;
  position: fixed;
  align-items: center;
  justify-content: center;
  z-index: 12;
  display: flex;
  animation: loading 3s linear;
  transform: scale(0);

  @keyframes loading {
    0% {
      opacity: 1;
      transform: scale(1);
    }
    90% {
      opacity: 1;
    }
    100% {
      opacity: 0;
      transform: scale(1);
    }
  }
}
@media screen and (max-width: 767px) {
  /* mobile */
  .sticky {
    background: linear-gradient(
        180deg,
        rgba(32, 42, 53, 0) 37.45%,
        rgba(32, 42, 53, 0.395797) 65.9%,
        rgba(32, 42, 53, 0.87) 100%
      ),
      url("../assets/img/Img_HP/alexander_strategy_group_homepage_mobile.webp");
    background-size: cover;

    img {
      width: 25%;
    }
  }

  .bottom{
    display: none;
  }
}
</style>
