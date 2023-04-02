<template>
  <div>
    <!-- <div class="loader">
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
    </div> -->

    <TheHeader />
    <slot />
    <div class="reveal"></div>
    <TheFooter />
  </div>
</template>

<style scoped lang="scss">


.reveal{
  width: 100%;
  margin-bottom: 57vh;
  background: none;
  z-index: 1;
  pointer-events: none;

}

@media screen and (max-width: 767px) {
    /* mobile */
    .reveal{
  margin-bottom: 79vh;
}
}










// .loader {
//   // background-color: #202a35;
//   width: 100%;
//   height: 100vh;
//   opacity: 0;
//   position: fixed;
//   display: flex;
//   flex-direction: column;
//   align-items: center;
//   justify-content: center;
//   z-index: 3;
//   display: flex;
//   animation: loading 3s linear;
//   transform: scale(0);

//   @keyframes loading {
//     0% {
//       opacity: 1;
//       transform: scale(1);
//     }
//     90% {
//       opacity: 1;
//     }
//     100% {
//       opacity: 0;
//       transform: scale(1);
//     }
//   }
// }
// h4 {
//     color: var(--color-orange);
//     z-index: 10;
//     animation: soustitle 4s linear;
//     @keyframes soustitle {
//       0% {
//         opacity: 0;
//       }
//       30% {
//         opacity: 0;
//       }
//       50% {
//         opacity: 1;
//         transform: translateY(-150px);
//       }
//       70% {
//         transform: translateY(-150px);
//       }
//       80% {
//         //   transform: translateY(20px);
//       }
//       100% {
//       }
//     }
//   }
.video {
  width: 10vw;
}
</style>
