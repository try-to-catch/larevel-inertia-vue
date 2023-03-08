<template>
    <div class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
            <div>
                <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                    <!-- active - text-blue-500 font-bold -->
                    <!-- url null - bg-gray-100 -->

                    <Link
                        v-for="(link,id) in links"
                        :key="id"
                        :href="link.url??'#'"
                        :disabled="link.url === null"
                        v-html="link.label"
                        :class="{
                            'text-blue-700 font-bold': link.active,
                            'font-medium text-gray-500':!link.active,
                            'bg-gray-100': link.url === null,
                            'bg-white': link.url !== null,

                        }"
                        class="border-gray-300  hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm"
                    />
                </nav>
            </div>
        </div>
    </div>
</template>

<script>
import {Link} from "@inertiajs/vue3";

export default {
    name: "DefaultPagination",
    props: {
        links: Array
    },
    components: {Link}
}
</script>
