<template>
    <div class="degrade">
    <div class="text">Real influence is quiet. It’s the kind that shifts conversations and redirects outcomes without ever announcing itself.
    <br><br>We counsel our clients through insight, timing, and clear direction.</div>
    <!-- <div class="top"></div>
    <div class="bottom"></div> -->
    </div>
</template>

<script setup>
import { onMounted, onUnmounted, ref } from 'vue';

onMounted(() => {  
    
    const text = document.querySelector('.text');
    window.addEventListener ( "scroll", function(e) {

    const degrade =  -window.scrollY + 600         
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
.degrade{
    background-color: #070B1D ;
    height: 250vh;
    z-index: 21;
    position: relative;
}
.text{
    position: sticky;
    line-height: 60px;
    top: 27vh;
    bottom: 20vh;
    z-index: 2;
    width: clamp(450px, 100%, 800px);
    font-size: 50px;
    font-weight: 900;
    text-align: center;
    margin: auto;
    background-image: url(../../assets/img/Img_Expertise/degrade.png);
    background-clip: text;
    background-repeat: no-repeat;
    -webkit-text-fill-color: transparent;
    background-size: 200%;
    // transition: background-position 0.2s;
    @media (min-width: 1924px) {
        font-size: 70px;
        line-height: 80px;
  }
  @media screen and (max-width: 1381px) {
    top: 19vh;

  }
}

@media screen and (max-width: 740px) {
    /* mobile */
    .text{
    font-size: 22px;
    line-height: 30px;
    width: 100%;
    top: 35vh;


}

}

</style>