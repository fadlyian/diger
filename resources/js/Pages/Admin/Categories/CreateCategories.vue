<template>
    <Head title="Categories" />

    <AdminLayout>
        <template #header>
            <h1 class="text-[2rem] font-bold flex items-center gap-3">
                <Link :href="route('admin.categories')">
                    <svg
                        class="w-6 h-6 cursor-pointer"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M19 12H5M12 19l-7-7 7-7"
                        ></path>
                    </svg>
                </Link>
                Categories - add
            </h1>
        </template>
        <div class="py-12">
            <!-- <form @submit.prevent="form.post(route('store.categories'))"> -->
            <form @submit.prevent="submitForm()">
                <div class="mb-20">
                    <div class="mb-6">
                        <InputLabel for="categories" value="Nama Category" />

                        <TextInput
                            id="categories"
                            type="text"
                            class="mt-1 block w-full"
                            name="categories"
                            v-model="form.categories"
                            autocomplete="off"
                        />

                        <!-- <InputError class="mt-2" :message="errors.categories" /> -->
                    </div>
                    <div class="mb-6">
                        <InputLabel for="image" value="Gambar" />

                        <input
                            id="image"
                            type="file"
                            class="mt-1 hidden w-full"
                            autocomplete="off"
                            ref="image"
                            name="image"
                            @input="form.image = $event.target.files[0]"
                        />

                        <label for="image">
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
                        <InputLabel for="description" value="Deskripsi" />

                        <TextareaInput
                            id="description"
                            type="text"
                            class="mt-1 block w-full"
                            name="description"
                            v-model="form.description"
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
import { ref, reactive } from "vue";
// resources/js/Pages/YourComponent.vue
import { Inertia } from "@inertiajs/inertia";
import { Head, Link, useForm } from "@inertiajs/vue3";

const categories = ref("");
// const { data, setData, post } = useForm({
// nama_kategori: categories.value
// });
const form = useForm({
    categories: "",
    description: "",
    image: null,
});

const label = ref("Pilih Gambar");

const onFileChange = (event) => {
    const file = event.target.files[0];
    // console.log(file);
    if (file) {
        label.value = file.name;
        form.image = file.name;
        console.log(file);
    } else {
        label.value = "Pilih Gambar";
    }
};

const submitForm = () => {
    // let formData = new FormData();
    // formData.append("image", form.image);
    // formData.append("categories", form.categories);
    // formData.append("description", form.description);

    // console.log(formData);

    // Inertia.post(route("store.categories"), formData, {
    //     headers: {
    //         "Content-Type": "multipart/form-data",
    //     },
    //     onSuccess: () => {
    //         console.log("Berhasil Menambahkan Kategori");
    //         // setData("nama_kategori", "");
    //     },
    // });
    console.log("step 1");
    console.log(form);
    console.log(form.image);

    form.post(route("store.categories"), {
        onSucces: () => {
            console.log("Berhasil Menambahkan Kategori");
        },

        onError: (error) => {
            console.log("Gagal Menambahkan Kategori");
            console.log(error.message);
        },
    });
};

// Menggunakan Inertia.post untuk mengirimkan data ke server

// alert('kategori berhasil ditambahkan');
// onFinish: () => form.reset("categories"),

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
</script>
