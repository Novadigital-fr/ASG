<template>
    <div>
    <header>
    <!-- <img src="../assets/img/logos/alexander_strategy_group_Logo_vertical.png" alt=""> -->
    <nav>
        <ul>
          <li class="link link--metis">
            <NuxtLink to="/">Home</NuxtLink>
          </li>
          <li class="link link--metis">
            <NuxtLink to="/">Services</NuxtLink>
          </li>
          <li class="link link--metis">
            <NuxtLink to="/notreblog">Expertise</NuxtLink>
          </li>
          <li class="link link--metis">
            <NuxtLink to="/contact">Contact</NuxtLink>
          </li>
        </ul>
    </nav>
    <button><img src="" alt=""></button>
    </header>
    <div class="navtel">
      <ul>
          <li class="link link--metis">
            <NuxtLink to="/">Services</NuxtLink>
          </li>
          <li class="link link--metis">
            <NuxtLink to="/notreblog">Expertise</NuxtLink>
          </li>
          <li class="link link--metis">
            <NuxtLink to="/contact">Contact</NuxtLink>
          </li>
        </ul>
    </div>
    </div>
</template>

<script setup>

</script>

<style lang="scss" scoped>
header{
    padding: 2%;
    position: fixed;
    height: 100vh;
    z-index: 10;
}
button{
    position: absolute;
    bottom: 5%;
}
img{
  width: 60%;
}
.navtel{
  display: none;
}

@media screen and (max-width: 767px) {
    /* mobile */
    header{
      display: none;
    }
//     .navtel {
//       display: flex;
// flex-direction: row;
// justify-content: center;
// align-items: center;
// background-color: var(--color-orange);
// position: fixed;
// top: 0;

//     }
  }

</style>