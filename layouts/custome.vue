<template>
    <div>
    <TheHeader />
    <slot />
    <div class="reveal"></div>
    <TheFooter />
    <div class="light_mode"></div>
    </div>
</template>

<script setup>

</script>

<style lang="scss" scoped>

.reveal{
  width: 100%;
  margin-bottom: 57vh;
  background: none;
  z-index: 1;
  pointer-events: none;

}
@media screen and (max-width: 840px) {
    /* mobile */
    .reveal{
  margin-bottom: 79vh;
}
}
</style>