<script setup>
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <div class="min-h-screen pt-6 sm:pt-0 bg-white">
        <!-- <div>
            <Link href="/">
                <ApplicationLogo class="w-20 h-20 fill-current text-gray-500" />
            </Link>
        </div> -->

        <div class="w-full flex py-4 px-3 overflow-hidden">
            <slot />
        </div>
    </div>
</template>
