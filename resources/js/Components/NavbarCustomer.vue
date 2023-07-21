<template>
    <nav class="bg-white border-b border-gray-100 h-16 flex items-center">
        <!-- Primary Navigation Menu -->
        <div class="container">
            <div class="relative">
                <!-- Logo -->
                <div class="absolute left-0 top-1/2 -translate-y-1/2">
                    <Link :href="route('home')">
                        <ApplicationLogo class="w-20 lg:w-24" />
                    </Link>
                </div>

                <!-- Navigation Links -->
                <div
                    class="mx-auto md:flex gap-8 justify-center text-sm xl:text-base hidden"
                >
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
                <div class="absolute right-0 top-1/2 -translate-y-1/2">
                    <div v-if="$page.props.auth.user">
                        <div
                            v-if="$page.props.auth.user"
                            class="flex gap-8 items-center"
                        >
                            <Link :href="route('cart')" class="hidden md:block">
                                <img src="/assets/icon/cart.svg" alt="" />
                            </Link>
                            <!-- Settings Dropdown -->
                            <div class="relative">
                                <Dropdown align="right" width="48">
                                    <template #trigger>
                                        <img
                                            src="/assets/icon/user.svg"
                                            alt=""
                                            class="cursor-pointer"
                                        />
                                    </template>

                                    <template #content>
                                        <div
                                            v-if="
                                                $page.props.auth.user.role ===
                                                'admin'
                                            "
                                        >
                                            <DropdownLink
                                                :href="route('admin.beranda')"
                                            >
                                                Dashboard Admin
                                            </DropdownLink>
                                            <DropdownLink
                                                :href="route('dashboard')"
                                            >
                                                Dashboard User
                                            </DropdownLink>
                                            <DropdownLink
                                                :href="route('logout')"
                                                method="post"
                                                as="button"
                                                class="text-red-500"
                                            >
                                                Log Out
                                            </DropdownLink>
                                        </div>
                                        <div v-else>
                                            <DropdownLink
                                                :href="route('dashboard')"
                                            >
                                                Dashboard
                                            </DropdownLink>
                                            <DropdownLink
                                                :href="route('logout')"
                                                method="post"
                                                as="button"
                                                class="text-red-500"
                                            >
                                                Log Out
                                            </DropdownLink>
                                        </div>
                                    </template>
                                </Dropdown>
                            </div>
                            <!-- <button
                                @click="
                                    showingNavigationDropdown =
                                        !showingNavigationDropdown
                                "
                                class="md:hidden"
                            >
                                <img
                                    src="/assets/icon/hamburger.svg"
                                    width="20"
                                    alt=""
                                />
                            </button> -->
                        </div>
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
import Dropdown from "@/Components/Dropdown.vue";
import DropdownLink from "@/Components/DropdownLink.vue";

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

// const showingNavigationDropdown = ref(false);

const links = ref([
    { route: "home", label: "Home" },
    { route: "pricing", label: "Pricing" },
    { route: "discover", label: "Discover" },
]);

const currentUrl = window.location.pathname;
console.log(currentUrl);
</script>
