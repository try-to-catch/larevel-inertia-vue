<template>
    <Head>
        <title>{{ title }}</title>
    </Head>
    <h1>Home page</h1>
</template>

<script>
import {Head} from "@inertiajs/vue3";

export default {
    name: "Home",
    props: {
        title: String
    },
    components: {Head}
}
</script>
