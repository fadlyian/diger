<template>
    <Head title="Pengaturan" />

    <AuthenticatedLayout>
        <template #header>
            <h1 class="text-[2rem] font-bold">Pengaturan</h1>
        </template>
        <div class="my-12">
            <form @submit.prevent="submit" class="mx-auto">
                <div>
                    <InputLabel for="name" value="Nama" isRequired="true" />

                    <TextInput
                        id="name"
                        type="text"
                        class="mt-1 block w-full"
                        v-model="form.name"
                        required
                        autofocus
                        autocomplete="name"
                    />

                    <InputError class="mt-2" :message="form.errors.name" />
                </div>

                <div class="mt-4">
                    <InputLabel
                        for="username"
                        value="Username"
                        isRequired="true"
                    />

                    <TextInput
                        id="username"
                        type="text"
                        class="mt-1 block w-full"
                        v-model="form.username"
                        required
                        autocomplete="username"
                    />

                    <InputError class="mt-2" :message="form.errors.username" />
                </div>

                <div class="mt-4">
                    <InputLabel for="email" value="Email" isRequired="true" />

                    <TextInput
                        id="email"
                        type="email"
                        class="mt-1 block w-full"
                        v-model="form.email"
                        required
                        autocomplete="email"
                    />

                    <InputError class="mt-2" :message="form.errors.email" />
                </div>

                <button
                    class="w-full mt-10 bg-primary hover:bg-primary-hover hover:shadow-xl focus:bg-primary-active active:bg-primary-active inline-flex items-center justify-center py-3 border border-transparent rounded-full font-semibold text-white transition ease-in-out duration-150"
                    :class="{ 'opacity-25': form.processing }"
                    :disabled="form.processing"
                >
                    Ubah Profil
                </button>
                <button
                    class="w-full mt-7 bg-danger hover:bg-danger-hover hover:shadow-xl focus:bg-danger-active active:bg-danger-active inline-flex items-center justify-center py-3 border border-transparent rounded-full font-semibold text-white transition ease-in-out duration-150"
                    :class="{ 'opacity-25': form.processing }"
                    :disabled="form.processing"
                    @click="deleteAccount"
                >
                    Hapus Akun
                </button>
            </form>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";
import { Head, useForm } from "@inertiajs/vue3";

const form = useForm({
    name: "",
    username: "",
    email: "",
});

const deleteAccount = () => {
    console.log("Berhasil Menghapus Account");
};
</script>
