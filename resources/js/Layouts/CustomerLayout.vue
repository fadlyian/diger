<template>
    <div class="min-h-screen bg-white">
        <div
            class="fixed top-0 w-full z-10"
            :class="{
                'shadow-lg duration-300 transition-ease-in-out ':
                    navigationStyle,
            }"
        >
            <NavbarCustomer />

            <!-- Page Heading -->
            <header
                class="bg-white border-b border-gray-100"
                v-if="$slots.header"
            >
                <div class="max-w-7xl mx-auto py-2 px-4 sm:px-6 lg:px-8">
                    <slot name="header" />
                </div>
            </header>
        </div>

        <!-- Page Content -->
        <main>
            <slot />
            <div
                class="bg-white fixed bottom-0 w-full py-4 shadow-footer md:hidden px-12"
            >
                <div class="container">
                    <div class="flex gap-12 mx-auto justify-between">
                        <Link
                            v-for="link in links"
                            :key="link.route"
                            :href="route(link.route)"
                            class="font-medium text-sm"
                            :class="{
                                'text-primary': route().current(link.route),
                            }"
                        >
                            <img
                                :src="link.image"
                                class="h-6 mx-auto mb-2 img_hover"
                                :class="{
                                    img_primary: route().current(link.route),
                                }"
                                alt=""
                            />
                            {{ link.label }}
                        </Link>
                    </div>
                </div>
            </div>
        </main>

        <Footer />
    </div>
</template>

<script setup>
import NavbarCustomer from "@/Components/NavbarCustomer.vue";
import Footer from "@/Components/Footer.vue";
import { ref, onMounted } from "vue";
import { Link } from "@inertiajs/vue3";

const links = ref([
    { route: "home", image: "/assets/icon/home.svg", label: "Home" },
    { route: "pricing", image: "/assets/icon/laporan.svg", label: "Pricing" },
    { route: "discover", image: "/assets/icon/shop.svg", label: "Discover" },
    { route: "cart", image: "/assets/icon/cart.svg", label: "Cart" },
]);

const navigationStyle = ref(false);
const onScroll = (p) => {
    if (p.currentTarget.scrollY > 20) {
        navigationStyle.value = true;
    } else {
        navigationStyle.value = false;
    }
};
onMounted(() => {
    window.addEventListener("scroll", onScroll);
});
</script>

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
.shadow-footer {
    box-shadow: 0 0 5px #7f89a1 !important;
}
.img_primary {
    filter: invert(71%) sepia(36%) saturate(1563%) hue-rotate(351deg)
        brightness(102%) contrast(99%);
}
@media (max-width: 768px) {
    html {
        font-size: 80%;
    }
}
@media (max-width: 576px) {
    html {
        font-size: 70%;
    }
}
</style>
