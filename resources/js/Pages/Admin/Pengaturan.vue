<script setup>
import AdminLayout from "@/Layouts/AdminLayout.vue";
import DeleteUserForm from "../Profile/Partials/DeleteUserForm.vue";
import UpdatePasswordForm from "../Profile/Partials/UpdatePasswordForm.vue";
import UpdateProfileInformationForm from "../Profile/Partials/UpdateProfileInformationForm.vue";
import { Head } from "@inertiajs/vue3";

defineProps({
    mustVerifyEmail: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});
</script>

<template>
    <Head title="Pengaturan" />

    <AdminLayout>
        <template #header>
            <h1 class="text-[2rem] font-bold">Pengaturan Profil</h1>
        </template>

        <div class="py-12">
            <div class="mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <UpdateProfileInformationForm
                        :must-verify-email="mustVerifyEmail"
                        :status="status"
                    />
                </div>

                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <UpdatePasswordForm />
                </div>

                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <DeleteUserForm />
                </div>
            </div>
        </div>
    </AdminLayout>
</template>
