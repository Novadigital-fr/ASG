<template>
    <div class="fondu">
    <h2 class="text">We thrive to deliver sophisticated solutions,
daring to become a proactive and dedicated partner through the whole project.</h2>
    <!-- <div class="top"></div>
    <div class="bottom"></div> -->
    </div>
</template>

<script setup>
import { onMounted, onUnmounted, ref } from 'vue';

onMounted(() => {  
    
    const text = document.querySelector('.text');
    window.addEventListener ( "scroll", function(e) {

    const degrade =  -window.scrollY + 300         
            text.style.backgroundPosition = "center " + degrade + "px";
        //     if (window.scrollY < 800) {
        //         text.style.backgroundPosition = "center top";
        //     }

        //     if (window.scrollY > 1505) {
        //     // text.style.display = "none";
        // }
        // else{
        //     text.style.display = "block";
        // }
    });

})
</script>

<style lang="scss" scoped>
.fondu{
    background-image: url(../../assets/img/Img_Expertise/degrade.png);
    background-size: cover;
    background-position: top center;
    background-repeat: no-repeat;
    height: 390vh;
    position: relative;
  z-index: 21;
}
.text{
    position: sticky;
    top: 40vh;
    bottom: 20vh;
    z-index: 2;
    width: clamp(550px, 670px, 860px);
    // text-align: center;
    margin: auto;
    color: #070B1D;
    @media (min-width: 1924px) {
        font-size: 50px;
        line-height: 70px;
        width: clamp(550px, 770px, 860px);

  }
}
@media screen and (max-width: 840px) {
    /* mobile */
    .text{
    width: clamp(150px, 100%, 80vw);
   
}

}
</style>