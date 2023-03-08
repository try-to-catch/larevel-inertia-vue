<template>
    <Head>
        <title>{{ title }}</title>
    </Head>
    <h1>About page</h1>
</template>

<script>
import {Head} from "@inertiajs/vue3";

export default {
    name: "About",
    props: {
        title: String
    },
    components: {Head}
}
</script>
