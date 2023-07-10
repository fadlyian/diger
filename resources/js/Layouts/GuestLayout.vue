<script setup>
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <div class="h-custom relative py-4 bg-white">
        <div class="container">
            <div class="absolute top-3 left-6">
                <Link href="/">
                    <ApplicationLogo class="fill-current text-gray-500" />
                </Link>
            </div>
            <slot />
        </div>
    </div>
</template>

<style scoped>
.h-scoped {
    height: calc(100vh - 2rem);
}
</style>
