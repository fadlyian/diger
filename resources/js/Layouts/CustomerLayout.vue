<template>
    <div class="min-h-screen bg-white">
        <NavbarCustomer />
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
