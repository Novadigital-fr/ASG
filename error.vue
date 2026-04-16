<template>
    <div class="error">
      <h1 v-if="error.statusCode === 404">Page not found</h1>
      <h1 v-else>An error occurred</h1>
      <p>Unfortunately, the page you are looking for does not exist.</p>
      <div class="buttons">
        <button class="retry" @click="retry">Retry</button>
        <NuxtLink to="/">
          <Button text="Back home" />
        </NuxtLink>
      </div>
    </div>
</template>

<script setup>
const props = defineProps(['error'])
const retry = () => clearError({ redirect: useRoute().fullPath })
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
.buttons {
    display: flex;
    justify-content: center;
    gap: 16px;
    align-items: center;
}
.retry {
    background-color: var(--color-orange);
    color: var(--color-text);
    border: none;
    border-radius: 100px;
    padding: 12px 28px;
    font-size: 16px;
    font-weight: 700;
    cursor: pointer;
    font-family: inherit;
    transition: opacity 0.2s;
    &:hover { opacity: 0.85; }
}


</style>