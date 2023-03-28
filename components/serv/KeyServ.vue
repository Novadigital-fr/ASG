<template>
  <div class="key_service">
    <div class="left">
      <p class="desk_button">National Security</p>
      <h2>Key Services</h2>
      <Button text="Contact" />
    </div>
    <div class="right">
      <details>
        <summary> <h2 class="orange"> Risk Analysis</h2><img class="fleche" src="../../assets/img/fleche.svg" alt=""> </summary>
        To mitigate risk, one must understand where the threats emanate. Our
        experts provide a 360 degree understanding of the national security
        risks that companies or communities face. From state actors, to
        terrorist groups, to cyber risks, Alexander Strategy Group takes a
        holistic approach to risk analysis to ensure that our clients are able
        to detect, deter, prevent, and respond to evolving threats.
      </details>
      <details>
        <summary> <h2 class="orange"> Risk Analysis</h2><img class="fleche" src="../../assets/img/fleche.svg" alt=""> </summary>
        Security depends on intelligence. Utilizing open and closed source intelligence and deep global relationships, Alexander Strategy Group produces timely intelligence reports on the most pressing threats they face, ranging from those emanating from terrorist groups, cyberattackers, and hostile nation-states. Alexander Strategy Group’s intelligence products enable clients to be aware of threats before they materialize.
      </details>
      <details>
        <summary> <h2 class="orange"> Risk Analysis</h2><img class="fleche" src="../../assets/img/fleche.svg" alt=""> </summary>
        Risk analysis and intelligence is only beneficial if organizations and governments have policies and strategies in place to utilize such information. Alexander Strategy Group provides policy evaluation and development to ensure our end users have comprehensive policies to defend against a variety of security threats, including cyberattacks, terrorism, white collar crime, chemical, biological, radiological and nuclear threats, and more. These policies enable policymakers to implement a security-first approach that keeps communities safe.
      </details>
    </div>
  </div>
</template>

<script setup>

onMounted(() => {
  const sums = document.querySelectorAll('summary');
  
  sums.forEach(sum => {
    sum.addEventListener('click', function(e) {
      const flech = e.currentTarget.closest('details').querySelector('.fleche');
      flech.style.transform = 'rotate(45deg)';
      flech.style.transition = '0.5s';
    });
  });
});

</script>

<style lang="scss" scoped>
.key_service {
  color: var(--color-bg-dark);
  display: flex;
  margin: 10vh 0;
  .left{
    width: 40%;
    padding: 5vh 0 0 10vw;

    h2{
        margin: 2vh 0;
    }
  }
  .right{
    width: 60%;
    padding: 0 20vw 0 5vh;


    summary{
        list-style: none;
        padding-bottom: 2vh;
        display: flex;
        justify-content: space-between;    
    }
   
    details{
        margin: 5vh 0;
        padding-bottom: 2vh;
        border-bottom: solid 1px var(--color-bg-dark);
    }

  }
  
}
</style>
