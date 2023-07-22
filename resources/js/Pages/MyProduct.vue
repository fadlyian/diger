<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";
import { Head, useForm, usePage } from "@inertiajs/vue3";
import { ref, computed, onMounted } from "vue";

const { props } = usePage();
const data = ref({
    products: props.products,
    categories: props.categories,
});

const form = useForm({
    name: "",
    category: "",
    description: "",
    price: "",
    productFile: null,
    productImage: null,
});

const clearForm = () => {
    form.name = "";
    form.category = "";
    form.description = "";
    form.price = "";
    form.productFile = null;
    form.productImage = null;
};

const editProduct = (index) => {
    form.name = data.value.products[index].name;
    form.category = data.value.products[index].category;
    form.description = data.value.products[index].description;
    form.price = data.value.products[index].price;
    form.productFile = data.value.products[index].productFile;
    form.productImage = data.value.products[index].productImage;
};

// const categories = ref([
//     "Desain",
//     "Tulisan dan Publikasi",
//     "Film",
//     "Software Development",
//     "Pendidikan",
//     "Musik",
//     "Lainnya",
// ]);

const showForm = ref(false);
const formTambah = ref(true);
const formEdit = ref(false);

const onFileChange = (event) => {
    console.log(event);
    const file = event.target.files[0];
    if (file) {
        form.productFile = file;
    }
    console.log(form.productFile);
};

const onImageChange = (event) => {
    console.log(event);
    const image = event.target.files[0];
    if (image) {
        form.productImage = image;
    }
    console.log(form.productImage);
};

const removeImage = () => {
    form.productImage = null;
};

const fileInput = ref(null);

const imageInput = ref(null);

const triggerFileInput = () => {
    if (fileInput.value) {
        fileInput.value.click();
    }
};

const triggerImageInput = () => {
    if (imageInput.value) {
        imageInput.value.click();
    }
};

const submit = () => {
    console.log("form kesubmit");
    form.post(route("product.store"), {
        onSuccess: () => {
            console.log("berhasil");
            showForm.value = true;
        },
        onError: () => {
            console.log("gagal");
        },
    });
};

const formatRupiah = (number) => {
    const formatter = new Intl.NumberFormat("id-ID", {
        style: "currency",
        currency: "IDR",
        minimumFractionDigits: 0,
        maximumFractionDigits: 0,
    });

    return formatter.format(number);
};

onMounted(() => {
    console.log(data.value);
});
</script>

<template>
    <Head title="Produk" />

    <AuthenticatedLayout>
        <template #header>
            <h1 class="text-[2rem] font-bold flex items-center gap-3">
                <svg
                    v-if="showForm"
                    @click="(showForm = !showForm), clearForm()"
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
                Produk
            </h1>
        </template>
        <div class="my-12 relative">
            <div
                v-if="data.products"
                :class="showForm ? 'opacity-0' : 'opacity-100'"
            >
                <div class="">
                    <button
                        @click="
                            (showForm = !showForm),
                                clearForm(),
                                (formTambah = true)
                        "
                        class="font-semibold py-3 px-24 bg-primary hover:bg-primary-hover hover:shadow-xl active:bg-primary-active rounded-full text-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
                    >
                        Produk Baru
                    </button>
                </div>
                <div class="mt-6">
                    <p class="font-medium">Semua Produk</p>
                    <div class="grid grid-cols-12 mt-5">
                        <div class="px-5 py-2.5 col-span-4 text-sm font-medium">
                            Nama
                        </div>
                        <div class="px-5 py-2.5 col-span-2 text-sm font-medium">
                            Harga
                        </div>
                        <div class="px-5 py-2.5 col-span-2 text-sm font-medium">
                            Tipe
                        </div>
                        <div class="px-5 py-2.5 col-span-2 text-sm font-medium">
                            Ukuran
                        </div>
                    </div>
                    <div v-for="(produk, index) in data.products" :key="index">
                        <div class="grid grid-cols-12 mt-5 shadow-md">
                            <div
                                class="px-5 py-4 col-span-4 text-sm font-medium"
                            >
                                {{ produk.name }}
                            </div>
                            <div
                                class="px-5 py-4 col-span-2 text-sm font-medium"
                            >
                                {{ formatRupiah(produk.price) }}
                            </div>
                            <div
                                class="px-5 py-4 col-span-2 text-sm font-medium"
                            >
                                {{ produk.type }}
                            </div>
                            <div
                                class="px-5 py-4 col-span-2 text-sm font-medium"
                            >
                                {{ (produk.sizeFile / 1000).toFixed(2) }}
                                KB
                            </div>
                            <div
                                class="px-5 py-4 col-span-2 text-sm font-medium"
                            >
                                <div
                                    class="flex items-center justify-end gap-1.5"
                                >
                                    <svg
                                        @click="
                                            (showForm = true),
                                                editProduct(index)
                                        "
                                        class="cursor-pointer"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M4 20.0001V13.0001H11L7.783 16.2201C8.89296 17.3551 10.4125 17.9965 12 18.0001C14.5394 17.9963 16.8015 16.3943 17.648 14.0001H17.666C17.7805 13.6747 17.8672 13.3402 17.925 13.0001H19.937C19.4331 17 16.0315 20 12 20.0001H11.99C9.86876 20.0064 7.83316 19.1638 6.337 17.6601L4 20.0001ZM6.074 11.0001H4.062C4.56575 7.00169 7.965 4.00222 11.995 4.00004H12C14.1216 3.99325 16.1577 4.83592 17.654 6.34008L20 4.00004V11.0001H13L16.222 7.78008C15.1109 6.64373 13.5893 6.00222 12 6.00008C9.46055 6.00383 7.19848 7.60586 6.352 10.0001H6.334C6.21856 10.3252 6.13189 10.6598 6.075 11.0001H6.074Z"
                                            fill="#2E3A59"
                                        />
                                    </svg>
                                    <svg
                                        class="cursor-pointer"
                                        width="18"
                                        height="20"
                                        viewBox="0 0 18 20"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M14 20H4C2.89543 20 2 19.1046 2 18V5H0V3H4V2C4 0.89543 4.89543 0 6 0H12C13.1046 0 14 0.89543 14 2V3H18V5H16V18C16 19.1046 15.1046 20 14 20ZM4 5V18H14V5H4ZM6 2V3H12V2H6ZM12 16H10V7H12V16ZM8 16H6V7H8V16Z"
                                            fill="#2E3A59"
                                        />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                v-else
                class="p-12 rounded-[20px] bg-gradient-to-t from-[#F9D381] to-primary"
            >
                <p class="text-white text-center text-[28px] font-semibold">
                    Sekarang anda belum memiliki produk ayo tambahkan produkmu
                    sekarang
                </p>
                <div class="mt-12">
                    <button
                        @click="(showForm = !showForm), clearForm()"
                        class="block mx-auto py-3 px-24 font-semibold bg-white text-primary hover:text-white hover:bg-primary active:bg-primary-active text-center rounded-full focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
                    >
                        Produk Baru
                    </button>
                </div>
            </div>
            <div
                v-show="showForm"
                class="absolute top-0 w-full bg-white"
                :class="showForm ? 'show' : 'hide-offscreen'"
            >
                <form @submit.prevent="submit">
                    <div>
                        <InputLabel isRequired="true" for="name" value="Nama" />

                        <TextInput
                            placeholder=""
                            id="name"
                            type="text"
                            class="mt-1 block w-full"
                            v-model="form.name"
                            autofocus
                            autocomplete="off"
                        />

                        <InputError class="mt-2" :message="form.errors.name" />
                    </div>
                    <div class="mt-4">
                        <InputLabel
                            isRequired="true"
                            for="category"
                            value="Kategori"
                        />

                        <select
                            id="category"
                            class="mt-1 block w-full border border-gray-400 focus:border-primary focus:ring-primary placeholder:text-gray-400 rounded-full px-6 py-3 shadow-sm"
                            v-model="form.category"
                            autocomplete="off"
                        >
                            <option value="" disabled selected>
                                Pilih Kategori
                            </option>
                            <option
                                v-for="(categories, index) in data.categories"
                                :key="index"
                                :value="categories.id"
                                :selected="categories.id ? category : ''"
                                class="bg-white text-gray-700 hover:bg-primaryx"
                            >
                                {{ categories.name }}
                                {{ categories.id }}
                            </option>
                            <div
                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700"
                            >
                                <!-- Dropdown arrow -->
                                <svg
                                    class="w-4 h-4 fill-current"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M9.293 12.95a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L10 10.586 7.707 8.293a1 1 0 10-1.414 1.414l3 3zM6 7a1 1 0 012 0v6a1 1 0 11-2 0V7z"
                                        clip-rule="evenodd"
                                    ></path>
                                </svg>
                            </div>
                        </select>

                        <InputError
                            class="mt-2"
                            :message="form.errors.category"
                        />
                    </div>

                    <div class="mt-4">
                        <InputLabel
                            isRequired="true"
                            for="description"
                            value="Deskripsi"
                        />

                        <textarea
                            placeholder=""
                            row="6"
                            id="description"
                            type="text"
                            class="mt-1 block w-full border border-gray-400 focus:border-primary focus:ring-primary placeholder:text-gray-400 rounded-[30px] px-6 py-3 shadow-sm"
                            v-model="form.description"
                            autocomplete="off"
                        />

                        <InputError
                            class="mt-2"
                            :message="form.errors.description"
                        />
                    </div>

                    <div class="mt-4">
                        <InputLabel
                            isRequired="true"
                            for="price"
                            value="Harga"
                        />

                        <TextInput
                            placeholder=""
                            id="price"
                            type="number"
                            class="mt-1 block w-full"
                            v-model="form.price"
                            autocomplete="off"
                        />

                        <InputError class="mt-2" :message="form.errors.price" />
                    </div>

                    <div class="mt-4">
                        <InputLabel
                            isRequired="true"
                            for="product_file"
                            value="File Produk"
                        />

                        <div
                            class="relative mt-1 rounded-[30px] px-6 py-3 bg-white border border-gray-400 focus-within:border-primary focus-within:ring-primary shadow-sm"
                        >
                            <input
                                ref="fileInput"
                                id="product_file"
                                type="file"
                                class="absolute inset-0 w-full h-full opacity-0 cursor-pointer"
                                @change="onFileChange"
                                accept="image"
                            />
                            <span
                                v-if="!form.productFile"
                                class="inset-0 flex items-center gap-3 w-full h-full"
                                @click="triggerFileInput"
                            >
                                <svg
                                    width="25"
                                    height="20"
                                    viewBox="0 0 25 20"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M1.25 0C0.558594 0 0 0.558594 0 1.25C0 1.94141 0.558594 2.5 1.25 2.5H1.875C2.21875 2.5 2.5 2.78125 2.5 3.125V14.375C2.5 16.1016 3.89844 17.5 5.625 17.5H6.35547C6.28516 17.6953 6.25 17.9062 6.25 18.125C6.25 19.1602 7.08984 20 8.125 20C9.16016 20 10 19.1602 10 18.125C10 17.9062 9.96094 17.6953 9.89453 17.5H17.6055C17.5352 17.6953 17.5 17.9062 17.5 18.125C17.5 19.1602 18.3398 20 19.375 20C20.4102 20 21.25 19.1602 21.25 18.125C21.25 17.9062 21.2109 17.6953 21.1445 17.5H23.75C24.4414 17.5 25 16.9414 25 16.25C25 15.5586 24.4414 15 23.75 15H5.625C5.28125 15 5 14.7188 5 14.375V3.125C5 1.39844 3.60156 0 1.875 0H1.25ZM7.5 3.125V10.625C7.5 11.6602 8.33984 12.5 9.375 12.5H21.875C22.9102 12.5 23.75 11.6602 23.75 10.625V3.125C23.75 2.08984 22.9102 1.25 21.875 1.25H18.125V6.875C18.125 7.10547 18 7.31641 17.793 7.42578C17.5859 7.53516 17.3438 7.52344 17.1523 7.39453L15.625 6.375L14.0977 7.39453C13.9062 7.52344 13.6602 7.53516 13.457 7.42578C13.2539 7.31641 13.125 7.10547 13.125 6.875V1.25H9.375C8.33984 1.25 7.5 2.08984 7.5 3.125Z"
                                        fill="black"
                                    />
                                </svg>
                                File Produk
                            </span>
                            <span
                                v-else
                                class="inset-0 flex items-center justify-between w-full h-full bg-white"
                            >
                                <span class="truncate">{{
                                    form.productFile.name
                                }}</span>
                            </span>
                        </div>

                        <InputError
                            class="mt-2"
                            :message="form.errors.productFile"
                        />

                        <div
                            class="relative mt-5 rounded-[30px] px-6 py-3 bg-white border border-primary focus-within:border-primary focus-within:ring-primary shadow-sm"
                        >
                            <input
                                ref="imageInput"
                                id="product_image"
                                type="file"
                                class="absolute inset-0 w-full h-full opacity-0 cursor-pointer"
                                @change="onImageChange"
                                accept="image"
                            />
                            <span
                                v-if="!form.productImage"
                                class="inset-0 flex items-center gap-3 w-full text-primary h-full"
                                @click="triggerImageInput"
                            >
                                <svg
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M18 21.9999H6C4.89543 21.9999 4 21.1045 4 19.9999V3.99989C4 2.89533 4.89543 1.99989 6 1.99989H13C13.009 1.99873 13.018 1.99873 13.027 1.99989H13.033C13.0424 2.00285 13.0522 2.00486 13.062 2.00589C13.1502 2.01155 13.2373 2.02869 13.321 2.05689H13.336H13.351H13.363C13.3815 2.06982 13.3988 2.0842 13.415 2.09989C13.5239 2.14832 13.6232 2.21608 13.708 2.29989L19.708 8.2999C19.7918 8.38468 19.8596 8.48395 19.908 8.5929C19.917 8.61489 19.924 8.6359 19.931 8.6589L19.941 8.68689C19.9689 8.77029 19.9854 8.85708 19.99 8.9449C19.9909 8.95486 19.9932 8.96463 19.997 8.9739V8.9799C19.9986 8.98645 19.9996 8.99315 20 8.9999V19.9999C20 20.5303 19.7893 21.039 19.4142 21.4141C19.0391 21.7892 18.5304 21.9999 18 21.9999ZM13 3.99989V8.9999H18L13 3.99989Z"
                                        fill="#FEB20E"
                                    />
                                </svg>

                                Pilih Gambar
                            </span>
                            <span
                                v-else
                                class="inset-0 flex items-center justify-between w-full h-full bg-white"
                            >
                                <span class="truncate">{{
                                    form.productImage.name
                                }}</span>
                            </span>
                        </div>
                        <p
                            v-if="form.productImage"
                            @click="removeImage"
                            class="text-red-500 hover:text-red-700 font-medium mt-1 cursor-pointer"
                        >
                            Remove
                        </p>

                        <InputError
                            class="mt-2"
                            :message="form.errors.productImage"
                        />
                    </div>

                    <button
                        class="w-full mt-5 bg-primary hover:bg-primary-hover hover:shadow-xl active:bg-primary-active inline-flex items-center justify-center py-3 border border-transparent rounded-full font-semibold text-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
                        :class="{ 'bg-primary-hover': form.processing }"
                        :disabled="form.processing"
                    >
                        {{ formTambah ? "Tambah Produk" : "Edit Produk" }}
                    </button>
                </form>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<style scoped>
input[type="file"]::-webkit-file-upload-button {
    visibility: hidden;
    width: 0;
    height: 0;
}

input[type="file"]::before {
    content: "Pilih File";
    display: inline-block;
    background-color: #feb20e;
    color: white;
    padding: 8px 12px;
    border-radius: 4px;
    cursor: pointer;
}

input[type="file"]:hover::before {
    background-color: #ffd271;
}

/* Sembunyikan komponen di luar layar */
.hide-offscreen {
    transform: translateX(100%);
}

/* Tampilkan komponen */
.show {
    transform: translateX(0);
    transition: transform 1s ease-in-out;
}
</style>
