<template>
    <div class="degrade">
    <div class="text">Global <br> Sophisticaded <br> Exclusive <br> Bold</div>
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
}
.text{
    position: sticky;
    line-height: 100px;
    top: 40vh;
    bottom: 20vh;
    z-index: 2;
    width: clamp(150px, 100%, 600px);
    font-size: 70px;
    font-weight: 900;
    text-align: center;
    margin: auto;
    background-image: url(../../assets/img/Img_Expertise/degrade.png);
    background-clip: text;
    background-repeat: no-repeat;
    -webkit-text-fill-color: transparent;
    background-size: 200%;
    // transition: background-position 0.2s;
}

@media screen and (max-width: 767px) {
    /* mobile */
    .text{
    font-size: 45px;
    line-height: 60px;

}

}

</style>