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
        title: 'Agence web | Novadigital ',
        meta: [
          // <meta name="description" content="My amazing site">
          { name: 'description', content: 'Agence web lyon Novadigital' }
        ],
        link: [{ rel: 'icon', type: 'image/x-icon', href: '/img/favicon.ico' }],
       
      }
    },
  })