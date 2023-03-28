<template>
    <div class="expertise">

    </div>
</template>

<script>
 
</script>

<style lang="scss" scoped>
.expertise{
    height: 100vh;
    width: 100vw;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding-top: 10%;
    background-position: center top;
    background-size: cover;
    background: linear-gradient(180deg, rgba(3, 12, 34, 0) 53.65%, #070B1D 100%),
    url("../../assets/img/Img_Expertise/alexander_strategy_group_expertise.webp");

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