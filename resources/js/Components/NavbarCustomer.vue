<template>
    <nav class="bg-white border-b border-gray-100">
        <!-- Primary Navigation Menu -->
        <div class="container">
            <div class="flex items-center h-16 relative">
                <!-- Logo -->
                <Link :href="route('home')">
                    <ApplicationLogo />
                </Link>

                <!-- Navigation Links -->
                <div class="text-center flex gap-8 items-center mx-auto">
                    <Link
                        v-for="link in links"
                        :key="link.route"
                        :href="route(link.route)"
                        class="font-medium hover:text-primary"
                        :class="{ 'text-primary': route().current(link.route) }"
                    >
                        {{ link.label }}
                    </Link>
                </div>

                <!-- Button Authentication -->
                <div class="absolute right-0">
                    <div v-if="props.canLogin">
                        <Link
                            :href="route('dashboard')"
                            class="text-sm font-semibold text-center bg-primary text-white py-1 px-6 rounded-full"
                            >Dashboard</Link
                        >
                    </div>
                    <div v-else class="flex gap-3">
                        <Link
                            :href="route('login')"
                            class="text-sm font-semibold text-center border border-primary py-1 px-8 rounded-full text-primary hover:bg-primary hover:text-white"
                            >Login</Link
                        >
                        <Link
                            :href="route('register')"
                            class="text-sm font-semibold text-center bg-primary text-white py-1 px-6 rounded-full"
                            >Mulai Jualan</Link
                        >
                    </div>
                </div>
            </div>
        </div>
    </nav>
</template>

<script setup>
import { ref, defineProps } from "vue";
import { Link } from "@inertiajs/vue3";
import ApplicationLogo from "@/Components/ApplicationLogo.vue";

const props = defineProps({
    canLogin: {
        type: Boolean,
        default: false,
    },
    canRegister: {
        type: Boolean,
        default: false,
    },
});

const links = ref([
    { route: "home", label: "Home" },
    { route: "discover", label: "Discover" },
    { route: "pricing", label: "Pricing" },
]);
</script>
