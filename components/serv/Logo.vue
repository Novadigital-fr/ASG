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
        required: true
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
    padding: 0 0 20vh 0;

    .logo{
        margin-bottom: 20vh;
    }
    h4{
        width: 50%;
        margin: auto;
    }
}


</style>