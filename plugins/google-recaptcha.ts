import { VueReCaptcha } from 'vue-recaptcha-v3';

export default defineNuxtPlugin((nuxtApp) => {
    nuxtApp.vueApp.use(VueReCaptcha, {
        siteKey: '6Ld6T9omAAAAAK3Qe2XmKV-9It8U0IcA_2unvThC',
    });
});