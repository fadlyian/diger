<template>
    <div class="min-h-screen bg-white">
        <div class="fixed top-0 w-full z-10">
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
        </main>

        <FooterCustomer />
    </div>
</template>

<script setup>
import NavbarCustomer from "@/Components/NavbarCustomer.vue";
import FooterCustomer from "@/Components/FooterCustomer.vue";
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
</style>
