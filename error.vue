<template>
    <div class="error">
      <h1 v-if="error.statusCode === 404">Page not found</h1>
      <h1 v-else>An error occurred</h1>
      <p>Unfortunately, the page you are looking for does not exist.</p>
      <NuxtLink to="/">
        <Button text="Back home" />
    </NuxtLink>
    </div>
</template>
  

<script>
export default {
    props: ['error'],
    layout: 'error' // you can set a custom layout for the error page
}
</script>

<style lang="scss" scoped>
.error{
    background-color: var(--color-bg-dark);
    background-image: url(./assets/img/fond_logo.svg);
    background-repeat: no-repeat;
    background-position: center center;
    height: 100vh;
    width: 100vw;
    display: flex;
    flex-direction: column;
    text-align: center;
    justify-content: center;
    gap: 30px;
}


</style>