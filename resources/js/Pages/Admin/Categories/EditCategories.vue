<template>
    <Head title="Categories" />

    <AdminLayout>
        <template #header>
            <h1 class="text-[2rem] font-bold">Categories - edit</h1>
        </template>
        <div class="py-12">
            <form @submit.prevent="submit">
                <div class="mb-20">
                    <div class="mb-6">
                        <InputLabel
                            for="categories"
                            value="Nama Category"
                            isRequired="true"
                        />

                        <TextInput
                            id="categories"
                            type="text"
                            class="mt-1 block w-full"
                            v-model="form.categories"
                            required
                            autofocus
                            autocomplete="off"
                        />

                        <!-- <InputError class="mt-2" :message="errors.categories" /> -->
                    </div>

                    <div class="mb-6">
                        <InputLabel
                            for="description"
                            value="Deskripsi"
                            isRequired="true"
                        />

                        <TextareaInput
                            id="description"
                            type="text"
                            class="mt-1 block w-full"
                            v-model="form.description"
                            required
                            autocomplete="off"
                        />

                        <!-- <InputError class="mt-2" :message="errors.description" /> -->
                    </div>
                </div>
                <button
                    type="submit"
                    class="block w-max ml-auto text-white cursor-pointer py-2.5 px-14 rounded-full font-semibold bg-primary hover:shadow-lg"
                >
                    Edit
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
import TextareaInput from "@/Components/TextareaInput.vue";
import { ref } from "vue";
import { Head, Link, useForm } from "@inertiajs/vue3";

const categories = ref("");
// const { data, setData, post } = useForm({
// nama_kategori: categories.value
// });
const form = useForm({
    categories: "",
    description: "",
});

const submit = () => {
    form.post(route("store.categories"), {
        // alert('kategori berhasil ditambahkan');
        // onFinish: () => form.reset("categories"),
    });

    // // Submit form dengan method post() dari useForm
    // post(route('store.categories'), data.value, {
    //     onSuccess: () => {
    //         // Akan dijalankan jika request berhasil (response status 200)
    //         // Contoh: mengarahkan ke halaman lain atau menampilkan notifikasi
    //         // (Silakan sesuaikan dengan kebutuhan Anda)
    //         alert('Kategori berhasil ditambahkan!');
    //         setData('nama_kategori', ''); // Mereset nilai input setelah berhasil ditambahkan
    //     },
    //     onError: (errors) => {
    //         // Akan dijalankan jika terjadi error pada request
    //         // Misalnya: menampilkan pesan error dari server
    //         alert('Terjadi kesalahan: ' + errors.nama_kategori);
    //     },
    // });
};
</script>
