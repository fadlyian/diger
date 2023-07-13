<script setup>
import Logo from "@/Components/Logo.vue";
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <div>
        <footer class="container">
            <!-- Logo -->
            <div
                class="flex justify-between items-center bg-white border-t border-gray-100 py-3"
            >
                <Link :href="route('dashboard')">
                    <Logo class="block h-9 w-auto fill-current text-gray-800" />
                </Link>
                <p class="text-sm font-medium text-[#555]">
                    &#169; {{ new Date().getFullYear() }} Digi. Hak cipta
                    dilindungi Undang-Undang.
                </p>
            </div>
        </footer>
    </div>
</template>
