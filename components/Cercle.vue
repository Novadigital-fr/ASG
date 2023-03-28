<template>
    <div>
        <div class="cercle"></div>
    </div>
</template>

<script setup>
import { onMounted, onUnmounted, ref } from 'vue';


onMounted(() => {    
    if (window.matchMedia("(min-width: 1024px)").matches) {

const cercle = document.querySelector('.cercle');
const back = document.querySelector('.sticky')

window.addEventListener ( "scroll", function(e) {
    // cercle.style.transform="scale(" + window.scrollY / 100 + ")";
    cercle.style.borderWidth =   window.scrollY * 2 + "px";
    cercle.style.width = 9000 - window.scrollY * 10 + "px";
    cercle.style.height =  9000 - window.scrollY * 10 + "px";

    if (window.scrollY > 700) {
    }
    if (window.scrollY > 1305) {
        cercle.style.display = "none";
    }
    else{
        cercle.style.display = "block";
    }
});
    }
})

</script>

<style lang="scss" scoped>

.cercle{
    pointer-events: none;
    border-color: #202a35;
    border-width: 0;
    border-style: solid;
    border-radius: 100%;
    max-width: 120vw;
    max-height: 120vw;
    align-items: center;
    display: flex;
    align-items: center;
    text-align: center;
    justify-content: center;
    position: fixed;
    margin: auto -10vw;
    inset: 0;
}

@media screen and (max-width: 767px) {
.cercle{
    display: none;
}

}

</style>