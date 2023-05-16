/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import { createApp, h } from 'vue';
import { createInertiaApp, Link, router } from '@inertiajs/vue3';

import "@fortawesome/fontawesome-free/css/all.min.css";
import "@/assets/styles/tailwind.css";

import  { toast } from 'vue3-toastify';
import 'vue3-toastify/dist/index.css';

import store from "@/stores";

createInertiaApp({
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
        return pages[`./Pages/${name}.vue`]
    },
    setup({ el, App, props, plugin }) {
        const app = createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(store)
            .component('InertiaLink', Link)
        app.config.globalProperties.$route = router;
        app.config.globalProperties.$toast = toast;
        app.mount(el);
        return app;
    },
});

  
