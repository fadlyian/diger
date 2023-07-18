<script setup>
import Navbar from "@/Components/Navbar.vue";
import Footer from "@/Components/Footer.vue";
import { ref, onMounted } from "vue";

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

<template>
    <div>
        <div class="min-h-screen bg-white">
            <div
                class="fixed top-0 w-full z-10"
                :class="{
                    'shadow-lg duration-300 transition-ease-in-out':
                        navigationStyle,
                }"
            >
                <Navbar />

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
            </main>

            <Footer />
        </div>
    </div>
</template>

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
