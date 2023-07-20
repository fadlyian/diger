<template>
    <Head title="Categories" />

    <AdminLayout>
        <template #header>
            <h1 class="text-[2rem] font-bold">Categories</h1>
        </template>
        <div class="py-12">
            <Link
                :href="route('create.categories')"
                class="w-12 text-white text-sm cursor-pointer py-2.5 px-6 rounded-full font-semibold bg-primary hover:shadow-lg"
                >Tambah Categories</Link
            >
            <h1 class="mt-8 font-medium mb-5">Semua Catergories</h1>
            <table class="table w-full">
                <tr>
                    <th class="text-sm font-medium text-start p-4">No</th>
                    <th class="text-sm font-medium text-start p-4">Category</th>
                    <th class="text-sm font-medium text-start p-4">Action</th>
                </tr>
                <tr
                    v-for="(value, index) in categories"
                    :key="index"
                    class="rounded-[.625rem] border border-[#F1F1F1] mb-1"
                >
                    <td class="text-sm font-medium text-start p-4">
                        {{ ++index }}
                    </td>
                    <td class="text-sm font-medium text-start p-4">
                        {{ value.name }}
                    </td>
                    <td class="text-sm font-medium text-start p-4">
                        <div class="flex gap-4">
                            <button>
                                <img src="/assets/icon/refresh.svg" alt="" />
                            </button>
                            <button>
                                <img src="/assets/icon/delete.svg" alt="" />
                            </button>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </AdminLayout>
</template>

<script setup>
import AdminLayout from "@/Layouts/AdminLayout.vue";
import { Head, Link, usePage } from "@inertiajs/vue3";
import { ref } from "vue";

const { props } = usePage();
const categories = ref(props.categories);
</script>
