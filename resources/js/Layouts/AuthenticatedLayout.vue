<script setup>
import Navbar from "@/Components/Navbar.vue";
import Footer from "@/Components/Footer.vue";
</script>

<template>
    <div>
        <div class="min-h-screen bg-white">
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

            <!-- Page Content -->
            <main>
                <slot />
            </main>

            <Footer />
        </div>
    </div>
</template>
