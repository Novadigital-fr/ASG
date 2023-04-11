<template>
    <div class="div_logo">
        <img class="logo" :src="logo" alt="">
        <h4 class="orange">{{ text }}</h4>
    </div>
</template>

<script>
export default {
    props: {
      text: {
        type: String,
        required: false
      },
      logo:{
        type: String,
        required: true
      },
    },
}
</script>

<style lang="scss" scoped>

.div_logo{
    text-align: center;
    background-color: var(--color-bg-dark);
    padding: 0 0 15vh 0;

    .logo{
        margin-bottom: 0vh;
        width: 70px;
    }
    h4{
        width: 50%;
        margin: 10vh auto 0 auto;
    }
}

@media screen and (max-width: 1024px) {
    /* tablettte */
    .div_logo{

      padding: 0 0 5vh 0;

    h4{
        width: 70%;

    }
}
}



</style>