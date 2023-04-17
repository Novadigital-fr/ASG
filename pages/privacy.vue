<template>
  <Header />

  <div class="privacy light_mode">
    <div>
      <h1>
        Privacy Policy <br />
        & Terms of Use
      </h1>
      <p class="updated">Updated on April 23, 2023</p>
      <ul class="orange">
        <li>Header 1</li>
        <li>Header 2</li>
        <li>Header 3</li>
      </ul>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum
        interdum convallis pellentesque. Integer nec quam nec lectus euismod
        convallis. Maecenas ipsum augue, varius nec justo vel, porta ultrices
        magna. <br />
        <br />
        Phasellus a varius arcu, nec feugiat ligula. Integer libero neque,
        congue et maximus in, pulvinar eget mauris. Nam sodales convallis nisi,
        eu malesuada sem blandit in. Quisque lectus metus, placerat in justo id,
        finibus placerat mauris. Aliquam at leo velit. Praesent consequat non
        magna in lacinia. Aenean lacinia, lorem eget lacinia fermentum, massa
        mauris lacinia turpis, eu interdum orci nunc a arcu. Aenean varius, diam
        vitae feugiat suscipit, lacus urna dapibus magna, nec volutpat tellus
        nibh eu massa. Aenean et arcu nec ex aliquet placerat. Aliquam est elit,
        ullamcorper vel iaculis nec, sagittis vitae turpis
      </p>
      <h3 class="orange">H1 - Vivamus sagittis magna eget tincidunt dictum.</h3>
      <p>
        <b
          >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum
          interdum convallis pellentesque. Integer nec quam nec lectus euismod
          convallis. Maecenas ipsum augue, varius nec justo vel, porta ultrices
          magna.</b
        >
        <br />
        <br />
        Phasellus a varius arcu, nec feugiat ligula. Integer libero neque,
        congue et maximus in, pulvinar eget mauris. Nam sodales convallis nisi,
        eu malesuada sem blandit in. Quisque lectus metus, placerat in justo id,
        finibus placerat mauris. Aliquam at leo velit. Praesent consequat non
        magna in lacinia. Aenean lacinia, lorem eget lacinia fermentum, massa
        mauris lacinia turpis, eu interdum orci nunc a arcu. Aenean varius, diam
        vitae feugiat suscipit, lacus urna dapibus magna, nec volutpat tellus
        nibh eu massa. Aenean et arcu nec ex aliquet placerat. Aliquam est elit,
        ullamcorper vel iaculis nec, sagittis vitae turpis
      </p>
      <h4 class="orange">H2 - Vivamus sagittis magna eget tincidunt dictum.</h4>
      <p>
        Donec justo turpis, pulvinar ut placerat a, cursus eget ligula. Quisque
        volutpat pharetra eros, quis viverra urna ultricies in. Fusce non dictum
        eros, feugiat imperdiet lectus. Proin efficitur id nibh a ullamcorper.
        Etiam convallis blandit lectus sed luctus. Suspendisse sed dapibus
        tellus. Mauris at ornare nisi, ut blandit lectus.
      </p>
      <h4 class="orange">H2 - Sed nec lorem vel metus faucibus pretium.</h4>
      <p>
        Phasellus sit amet molestie velit, ac egestas elit. Quisque magna
        lectus, tempus vitae nulla at, dignissim semper risus. Aliquam fermentum
        ipsum ac scelerisque hendrerit. Nam convallis felis eu nibh
        sollicitudin, sit amet iaculis massa molestie. Pellentesque habitant
        morbi tristique senectus et netus et malesuada fames ac turpis egestas.
        Quisque id dolor risus. Vestibulum ante ipsum primis in faucibus orci
        luctus et ultrices posuere cubilia curae; Orci varius natoque penatibus
        et magnis dis parturient montes, nascetur ridiculus mus. Donec justo
        turpis, pulvinar ut placerat a, cursus eget ligula. Quisque volutpat
        pharetra eros, quis viverra urna ultricies in. Fusce non dictum eros,
        feugiat imperdiet lectus. Proin efficitur id nibh a ullamcorper. Etiam
        convallis blandit lectus sed luctus. Suspendisse sed dapibus tellus.
        Mauris at ornare nisi, ut blandit lectus.
      </p>
    </div>
  </div>
</template>

<script setup>
definePageMeta({
  layout: "custome",
});
</script>

<style lang="scss" scoped>
.privacy {
  background-color: var(--color-bg);
  color: var(--color-bg-dark);
  div {
    width: 800px;
    display: flex;
    flex-direction: column;
    gap: 30px;
    margin: 0 auto;
    padding: 10vh 0;
    @media (max-width: 840px) {
      width: 80%;
      padding: 25vh 0 10vh 0;
    }
  }
  h1 {
    text-align: center;
    margin-bottom: 10px;
  }
  h3{
    margin-top: 30px;
  }
  .updated {
    text-align: center;
    color: gray;
    margin-bottom: 70px;
  }
  ul {
    display: flex;
    justify-content: space-around;
    margin-bottom: 50px;
  }
}
</style>
