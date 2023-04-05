<template>
    <div>
sdcscs
    </div>
</template>

<script>
onMounted(() => {
  const header = document.querySelector('header');
const sections = document.querySelectorAll('.light_mode');

sections.forEach(section => {
  section.addEventListener('mouseenter', () => {
      header.classList.add('dark');
  });
  section.addEventListener('mouseleave', () => {
    header.classList.remove('dark');
  });
});
})
</script>

<style lang="scss" >
.dark{
  color: var(--color-secondaire);
  transition: color 0.5s ease-in-out;
}
</style>