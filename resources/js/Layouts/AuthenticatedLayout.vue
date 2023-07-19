<script setup>
import { ref } from "vue";
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import { Link } from "@inertiajs/vue3";

const links = ref([
    { route: "dashboard", image: "/assets/icon/home.svg", label: "Dashboard" },
    { route: "myProduct", image: "/assets/icon/cart2.svg", label: "Produk" },
    { route: "pustaka", image: "/assets/icon/book.svg", label: "Pustaka" },
    {
        route: "pengaturan",
        image: "/assets/icon/setting.svg",
        label: "Pengaturan",
    },
]);
</script>

<template>
    <div>
        <div class="min-h-screen bg-white">
            <div class="flex gap-24">
                <div
                    class="w-80 fixed bg-white h-screen overflow-y-hidden border-r border-[#F1F1F1]"
                >
                    <div
                        class="h-24 border-b border-gray-100 flex justify-center items-center"
                    >
                        <Link :href="route('home')">
                            <ApplicationLogo />
                        </Link>
                    </div>
                    <div class="mt-8">
                        <Link
                            v-for="link in links"
                            :href="route(link.route)"
                            :key="link.route"
                        >
                            <div
                                class="flex gap-4 items-center mx-8 px-9 py-2 rounded-full mb-3"
                                :class="{
                                    'bg-primary': route().current(link.route),
                                }"
                            >
                                <img
                                    :src="link.image"
                                    class="w-4 h-4"
                                    :class="{
                                        'brightness-0 invert': route().current(
                                            link.route
                                        ),
                                    }"
                                    alt=""
                                />
                                <p
                                    :class="{
                                        'text-white': route().current(
                                            link.route
                                        ),
                                    }"
                                    class="font-medium text-lg"
                                >
                                    {{ link.label }}
                                </p>
                            </div>
                        </Link>
                    </div>
                </div>
                <div class="pt-12 w-style">
                    <header v-if="$slots.header">
                        <slot name="header" />
                    </header>
                    <!-- Page Content -->
                    <main class="mr-24">
                        <slot />
                    </main>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.w-style {
    width: calc(100% - 20rem);
    height: 100vh;
    margin-left: auto;
    overflow-y: scroll;
    padding-left: 6rem;
}
.w-style::-webkit-scrollbar {
    display: none;
}
</style>
<style>
::-webkit-scrollbar {
    max-width: 0.625rem;
}
::-webkit-scrollbar-track {
    background: #80808060;
}
::-webkit-scrollbar-thumb {
    background: linear-gradient(
        134deg,
        #feb20e 0%,
        rgba(254, 178, 14, 0.5) 100%
    );
    border-radius: 50px;
}
</style>
