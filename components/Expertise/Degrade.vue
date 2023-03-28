<template>
    <div class="degrade">
    <div class="text">Global  sophisticaded Eclusive Bold</div>
    <!-- <div class="top"></div>
    <div class="bottom"></div> -->
    </div>
</template>

<script setup>
import { onMounted, onUnmounted, ref } from 'vue';


onMounted(() => {  
    
    const text = document.querySelector('.text');


    window.addEventListener ( "scroll", function(e) {

        console.log(window.scrollY);
        text.style.backgroundPosition = "center " + -window.scrollY + "px";

        if (window.scrollY < 800) {
            text.style.backgroundPosition = "center top";
        }

        if (window.scrollY > 1505) {
        text.style.display = "none";
    }
    else{
        text.style.display = "block";
    }

    
   


});

})
</script>

<style lang="scss" scoped>
.degrade{
    background-color: #070B1D ;
    height: 200vh;
}
.text{
    position: sticky;
    top: 20px;
    z-index: 2;
    width: clamp(100px, 100%, 400px);
    font-size: 70px;
    text-align: center;
    margin: auto;
    background-image: url(../../assets/img/Img_Expertise/degrade.png);
    background-clip: text;
    -webkit-text-fill-color: transparent;
    background-size: 400%;
    transition: background-position 0.2s;
}


// .top{
//     background-image: url(../../assets/img/Img_Expertise/alexander_strategy_group_expertise_degrade.webp);
//     background-size: cover;
//     background-repeat: no-repeat;
//     height: 190vh;
// }
// .bottom{
//     background-image: url(../../assets/img/Img_Expertise/alexander_strategy_group_expertise_degrade.webp);
//     background-size: cover;
//     height: 190vh;
//     transform: rotate(180deg);
// }

</style>