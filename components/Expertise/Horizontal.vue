<template>
    <div class="logo_defile">
    <div class="top defile">
    <div class="txt">
    <div><img src="../../assets/img/Img_Expertise/Experts_List/alexander_strategy_group_expertise_logo_defense.webp" alt=""><p>Department of Defense</p></div>
    <div><img src="../../assets/img/Img_Expertise/Experts_List/alexander_strategy_group_expertise_logo_nsa.webp" alt=""><p>National Security Agency</p></div>
    <div><img src="../../assets/img/Img_Expertise/Experts_List/alexander_strategy_group_expertise_logo_security.webp" alt=""><p>Department of Homeland Security</p></div>
    <div><img src="../../assets/img/Img_Expertise/Experts_List/alexander_strategy_group_expertise_logo_white_house.webp" alt=""><p>The White House</p></div>
    <div><img src="../../assets/img/Img_Expertise/Experts_List/alexander_strategy_group_experts_u-s-department-of-housing-and-urban-development.webp" alt=""><p>Department of Housing and Urban Development</p></div>

   </div>
   <div class="txt">
    <div><img src="../../assets/img/Img_Expertise/Experts_List/alexander_strategy_group_expertise_logo_defense.webp" alt=""><p>Department of Defense</p></div>
    <div><img src="../../assets/img/Img_Expertise/Experts_List/alexander_strategy_group_expertise_logo_nsa.webp" alt=""><p>National Security Agency</p></div>
    <div><img src="../../assets/img/Img_Expertise/Experts_List/alexander_strategy_group_expertise_logo_security.webp" alt=""><p>Department of Homeland Security</p></div>
    <div><img src="../../assets/img/Img_Expertise/Experts_List/alexander_strategy_group_expertise_logo_white_house.webp" alt=""><p>The White House</p></div>
    <div><img src="../../assets/img/Img_Expertise/Experts_List/alexander_strategy_group_experts_u-s-department-of-housing-and-urban-development.webp" alt=""><p>Department of Housing and Urban Development</p></div>

   </div>
    </div> 
    <div class="bottom defile">
    <div class="txt">
        <div><img src="../../assets/img/Img_Expertise/Experts_List/alexander_strategy_group_expertise_logo_cia.webp" alt=""><p>Central Intelligence Agency</p></div>
        <div><img src="../../assets/img/Img_Expertise/Experts_List/alexander_strategy_group_expertise_logo_police_ny.webp" alt=""><p>NY. Police department counter terrorism bureau</p></div>
        <div><img src="../../assets/img/Img_Expertise/Experts_List/alexander_strategy_group_expertise_logo_boston.webp" alt=""><p>Boston Police Department</p></div>
        <div><img src="../../assets/img/Img_Expertise/Experts_List/alexander_strategy_group_expertise_logo_oakland.webp" alt=""><p>Oakland Police Department</p></div>
        <div><img src="../../assets/img/Img_Expertise/Experts_List/alexander_strategy_group_expertise_logo_marines.webp" alt=""><p>U.S Marine Corps</p></div>
        <div><img src="../../assets/img/Img_Expertise/Experts_List/alexander_strategy_group_experts_ArlingtonPolice.webp" alt=""><p>Arlington county Police Department</p></div>

   </div>
   <div class="txt">
        <div><img src="../../assets/img/Img_Expertise/Experts_List/alexander_strategy_group_expertise_logo_cia.webp" alt=""><p>Central Intelligence Agency</p></div>
        <div><img src="../../assets/img/Img_Expertise/Experts_List/alexander_strategy_group_expertise_logo_police_ny.webp" alt=""><p>NY. Police department counter terrorism bureau</p></div>
        <div><img src="../../assets/img/Img_Expertise/Experts_List/alexander_strategy_group_expertise_logo_boston.webp" alt=""><p>Boston Police Department</p></div>
        <div><img src="../../assets/img/Img_Expertise/Experts_List/alexander_strategy_group_expertise_logo_oakland.webp" alt=""><p>Oakland Police Department</p></div>
        <div><img src="../../assets/img/Img_Expertise/Experts_List/alexander_strategy_group_expertise_logo_marines.webp" alt=""><p>U.S Marine Corps</p></div>
        <div><img src="../../assets/img/Img_Expertise/Experts_List/alexander_strategy_group_experts_ArlingtonPolice.webp" alt=""><p>Arlington county Police Department</p></div>

   </div>
</div> 
</div>
</template>

<script setup>

</script>

<style lang="scss" scoped>

.logo_defile{
    padding: 10vh 0 25vh 0;
    background-color: var(--color-bg);

}
.defile{
    overflow-x: hidden;
    width: 100%;
    display: flex;
    align-items: center;
    margin: 5vh 0;
    color: var(--color-secondaire);
  }
   .txt{
    white-space: nowrap;
    font-weight: bold;
    display: flex;

    div{
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-around;
        width: 22vw;
        align-items: center;
        padding: 15px;
        background: rgba(32, 42, 53, 0.05);
        border-radius: 100px;
        margin-right: 5vw;

        img{
            width: 89px;
        }
        p{
            width: 60%;
            white-space:normal;
            font-weight: 700;

        }
    }
  }
  .top .txt{
    animation: Scroll 40s linear infinite;
  }
  
  @keyframes Scroll{
    0%{
      transform: translateX(-100%);
    }
    
  }
  .bottom .txt{
    animation: ScrollInverse 40s linear infinite;
  }
   
  @keyframes ScrollInverse{
    0%{
      transform: translateX(0);
    }
    100%{
        transform: translateX(-100%);
    }
    
  }


  @media screen and (max-width: 1024px) {
    /* tablettte */

    .txt{
        div{
            width: 40vw;
        }
    }
  }


  @media screen and (max-width: 767px) {

    .txt{
        div{
            width: 80vw;
        }
    }
  }
</style>