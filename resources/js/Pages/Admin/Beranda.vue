<template>
    <Head title="Beranda" />

    <AdminLayout>
        <template #header>
            <h1 class="text-[2rem] font-bold">Beranda</h1>
        </template>
        <div class="py-12">
            <h1 class="text-center">Selamat Datang di Diger!</h1>
        </div>
    </AdminLayout>
</template>

<script setup>
import AdminLayout from "@/Layouts/AdminLayout.vue";
import { Head } from "@inertiajs/vue3";
</script>
