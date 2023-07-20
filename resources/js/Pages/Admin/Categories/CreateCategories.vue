<template>
    <Head title="Categories" />

    <AdminLayout>
        <template #header>
            <h1 class="text-[2rem] font-bold">Categories - add</h1>
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
                            for="file"
                            value="Gambar"
                            isRequired="true"
                        />

                        <TextInput
                            id="file"
                            type="file"
                            class="mt-1 hidden w-full"
                            v-model="form.file"
                            required
                            autocomplete="off"
                            accept="image/*"
                            @change="onFileChange"
                        />

                        <label for="file">
                            <div
                                class="border w-full border-primary cursor-pointer focus:border-primary px-6 py-3 focus:ring-primary placeholder:text-gray-400 rounded-full shadow-sm"
                            >
                                <div class="flex gap-3 items-center">
                                    <img src="/assets/icon/file.svg" alt="" />
                                    <p class="text-primary">{{ label }}</p>
                                </div>
                            </div>
                        </label>

                        <!-- <InputError class="mt-2" :message="errors.file" /> -->
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
                    Add
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
    file: null,
});

const label = ref("Pilih Gambar");

const onFileChange = (event) => {
    const file = event.target.files[0];
    if (file) {
        label.value = file.name;
    } else {
        label.value = "Pilih Gambar";
    }
};

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
