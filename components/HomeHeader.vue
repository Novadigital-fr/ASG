<template>
    <div class="full">
    <img class="logo" src="../assets/img/Logos/alexander_strategy_group_Logo_icon.svg" alt="">
    <h1>We help mitigate risk to keep <br> communities, companies, <br> and individuals safe</h1>
    <h4>alexander strategy group</h4>
    </div>
</template>

<script setup>

</script>

<style lang="scss" scoped>
.full{
    height: 100vh;
    width: 100vw;
    background: linear-gradient(180deg, rgba(32, 42, 53, 0) 37.45%, rgba(32, 42, 53, 0.395797) 65.9%, rgba(32, 42, 53, 0.87) 100%), url('../assets/img/Img_HP/alexander_strategy_group_homepage.webp');
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding-top: 10%;

    h1{
        margin: 2% 0;
    }
    h4{
        color: var(--color-orange);
    }
}
@media screen and (max-width: 767px) {
    /* mobile */
    .full{
    background: linear-gradient(180deg, rgba(32, 42, 53, 0) 37.45%, rgba(32, 42, 53, 0.395797) 65.9%, rgba(32, 42, 53, 0.87) 100%), url('../assets/img/Img_HP/alexander_strategy_group_homepage_mobile.webp');
        background-size: cover;

        img{
            width: 25%;
        }
}
  }

</style>