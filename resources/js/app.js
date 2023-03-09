import {createApp, h} from 'vue'
import {createInertiaApp} from '@inertiajs/vue3'
import DefaultLayout from "@/Shared/DefaultLayout.vue";

createInertiaApp({
    resolve: name => {
        const page = import.meta.glob('./Pages/**/*.vue', {eager: true})[`./Pages/${name}.vue`].default

        page.layout = page.layout || DefaultLayout

        return page
    },
    setup({el, App, props, plugin}) {
        const app = createApp({render: () => h(App, props)})

        app.use(plugin)
        app.config.globalProperties.$route = route
        app.mount(el)
    },
})
