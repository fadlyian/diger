<template>
    <Head title="Pesanan" />

    <AdminLayout>
        <template #header>
            <h1 class="text-[2rem] font-bold">Pesanan</h1>
        </template>
        <div class="py-12">
            <div class="grid grid-cols-2 gap-4">
                <div
                    class="bg-white border border-[#F1F1F1] rounded-[1.25rem] p-8 text-center"
                >
                    <h1 class="font-medium">Total Kreator</h1>
                    <h1 class="text-[2rem] font-semibold mt-14">289</h1>
                </div>
                <div
                    class="bg-white border border-[#F1F1F1] rounded-[1.25rem] p-8 text-center"
                >
                    <h1 class="font-medium">Total Produk</h1>
                    <h1 class="text-[2rem] font-semibold mt-14">511</h1>
                </div>
                <div
                    class="bg-white border border-[#F1F1F1] rounded-[1.25rem] p-8 text-center"
                >
                    <h1 class="font-medium">Produk Terjual</h1>
                    <h1 class="text-[2rem] font-semibold mt-14">1230</h1>
                </div>
                <div
                    class="bg-white border border-[#F1F1F1] rounded-[1.25rem] p-8 text-center"
                >
                    <h1 class="font-medium">Total Transaksi</h1>
                    <h1 class="text-[2rem] font-semibold mt-14">
                        Rp. 2,065,320,000
                    </h1>
                </div>
            </div>
        </div>
    </AdminLayout>
</template>

<script setup>
import AdminLayout from "@/Layouts/AdminLayout.vue";
import { Head } from "@inertiajs/vue3";
</script>
