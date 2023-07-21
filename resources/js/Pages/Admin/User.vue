<template>
    <Head title="User" />

    <AdminLayout>
        <template #header>
            <h1 class="text-[2rem] font-bold">User</h1>
        </template>
        <div class="py-10">
            <h1 class="font-medium mb-5">Semua User</h1>
            <table class="table w-full">
                <tr>
                    <th class="text-sm font-medium text-start p-4">No</th>
                    <th class="text-sm font-medium text-start p-4">Nama</th>
                    <th class="text-sm font-medium text-start p-4">Email</th>
                    <th class="text-sm font-medium text-start p-4">Role</th>
                    <th class="text-sm font-medium text-center p-4">Action</th>
                </tr>
                <tr
                    v-for="(value, index) in users"
                    :key="index"
                    class="rounded-[.625rem] border border-[#F1F1F1] pb-4"
                >
                    <td class="text-sm font-medium text-start p-4">
                        {{ ++index }}
                    </td>
                    <td class="text-sm font-medium text-start p-4">
                        {{ value.name }}
                    </td>
                    <td class="text-sm font-medium text-start p-4">
                        {{ value.email }}
                    </td>
                    <td class="text-sm font-medium text-start p-4">
                        {{ value.role }}
                    </td>
                    <td class="text-sm font-medium text-center p-4">
                        <button type="button" @click="destroy(value.id)">
                            <img src="/assets/icon/delete.svg" alt="" />
                        </button>
                    </td>
                </tr>
            </table>
        </div>
    </AdminLayout>
</template>

<script setup>
import AdminLayout from "@/Layouts/AdminLayout.vue";
import { Head, usePage } from "@inertiajs/vue3";
import { ref } from "vue";
import { Inertia } from '@inertiajs/inertia'

const { props } = usePage();
const users = ref(props.users);

// Method untuk menghapus item dari keranjang
const destroy = (id) => {
    if(confirm("Hapus User?")){
        Inertia.delete(route('admin.deleteUser',id))
    }

    return {destroy}
};
</script>
