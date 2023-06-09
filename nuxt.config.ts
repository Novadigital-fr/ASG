// https://v3.nuxtjs.org/api/configuration/nuxt.config
export default defineNuxtConfig({
    build: {
      transpile: ['gsap'],
    },
    app: {

      head: {
        htmlAttrs: {
          lang: 'en'
        },
        title: 'alexander strategy group',
        meta: [
          // <meta name="description" content="My amazing site">
          { name: 'description', content: 'alexander strategy group' }
        ],
        link: [{ rel: 'icon', type: 'image/x-icon', href: '/img/favicon.ico' },
        {
          rel: 'preload',
          as: 'fetch',
          href: 'https://assets7.lottiefiles.com/packages/lf20_i8H5xPhhcQ.json',
          crossorigin: 'anonymous',
        },
        // {
        //   rel: 'preload',
        //   as: 'image',
        //   href: '/img/Img_City_Resilience/alexander_strategy_group_services_urban_planning.webp',
        // },
        // {
        //   rel: 'preload',
        //   as: 'image',
        //   href: '/img/Img_Communication/alexander_strategy_group_services_communication.webp',
        // },
        // {
        //   rel: 'preload',
        //   as: 'image',
        //   href: '/img/Img_Law_Enforcement/alexander_strategy_group_services_law_enforcement.webp',
        // },
        // {
        //   rel: 'preload',
        //   as: 'image',
        //   href: '/img/Img_National_security/alexander_strategy_group_services_national_security.webp',
        // },
        // {
        //   rel: 'preload',
        //   as: 'image',
        //   href: '/img/Img_Urban_Planning/alexander_strategy_group_services_urban_planning.webp',
        // }
      
      ], 
      }
    },
  })