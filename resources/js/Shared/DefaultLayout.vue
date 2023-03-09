<template>
    <p v-if="$page.props.flash_message"
       class="bg-indigo-600 h-10 flex items-center justify-center text-sm font-medium text-white px-4 sm:px-6 lg:px-8">
        {{ $page.props.flash_message }}
    </p>
    <nav class="bg-gray-800">
        <div class="max-w-7xl mx-auto">
            <div class="relative flex items-center justify-between h-16">
                <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="flex space-x-4">
                        <Link :href="$route('home')"
                              class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
                            Home
                        </Link>
                        <template v-if="$page.props.user">
                            <Link :href="$route('users.index')"
                                  class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
                                Users
                            </Link>
                            <a @click.prevent="logout"
                               class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
                                Logout
                            </a>
                        </template>
                        <template v-else>
                            <Link :href="$route('login')"
                                  class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
                                Login
                            </Link>
                        </template>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="container mx-auto">
        <div class="my-10">
            <slot/>
        </div>
    </div>
</template>

<script>
import {Link} from "@inertiajs/vue3";

export default {
    name: "DefaultLayout",
    components: {
        Link
    },
    methods: {
        logout() {
            this.$inertia.delete(route('logout'))
        }
    }
}
</script>
