<template>
    <Head title="Categories" />

    <AdminLayout>
        <template #header>
            <h1 class="text-[2rem] font-bold">Categories</h1>
        </template>
        <div class="py-12">
            <form @submit.prevent="submit">
                <div class="mb-20">
                    <InputLabel
                        for="categories"
                        value="Nama Kategory"
                        isRequired="true"
                    />

                    <TextInput
                        id="categories"
                        type="categories"
                        class="mt-1 block w-full"
                        v-model="categories"
                        required
                        autofocus
                        autocomplete="categories"
                    />

                    <!-- <InputError class="mt-2" :message="errors.categories" /> -->
                </div>
                <button
                    type="submit"
                    class="block w-max mx-auto text-white cursor-pointer py-2.5 px-14 rounded-full font-semibold bg-primary hover:shadow-lg"
                >
                    Tambah
                </button>
            </form>
        </div>
    </AdminLayout>
</template>

<script setup>
import AdminLayout from "@/Layouts/AdminLayout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";
import { ref } from "vue";
import { Head, Link, useForm } from "@inertiajs/vue3";

const categories = ref("");
</script>
