<template>
    <Head title="Cart" />

    <AuthenticatedLayout>
        <div class="container">
            <div class="pt-24 px-12">
                <div class="flex justify-between items-center mb-16">
                    <p class="text-3xl font-semibold">Keranjang</p>
                    <div class="text-center">
                        <Link
                            href="/"
                            class="block cursor-pointer mx-auto bg-white w-max text-black py-2.5 px-14 border border-gray-700 rounded-full font-semibold hover:shadow-lg"
                            >Lanjut Belanja</Link
                        >
                    </div>
                </div>
                <div class="grid grid-cols-6 gap-5">
                    <div class="col-span-4 flex flex-col gap-5">
                        <div
                            v-for="(product, index) in cart"
                            :key="index"
                            class="py-3 pl-3 pr-7 flex gap-2.5 rounded-3xl shadow-md"
                        >
                            <img
                                src="/assets/product.png"
                                class="w-60 h-auto object-cover rounded-3xl"
                                alt=""
                            />
                            <div
                                class="w-full flex flex-col justify-center gap-2.5"
                            >
                                <p class="font-semibold text-xl">
                                    {{ product.name }}
                                </p>
                                <p class="font-medium">
                                    {{ product.seller }}
                                </p>
                                <p class="font-semibold text-xl">
                                    Rp. {{ product.price }}
                                </p>
                                <div class="flex justify-between items-center">
                                    <p class="font-semibold">
                                        Qty:
                                        <span class="font-medium">{{
                                            product.qty
                                        }}</span>
                                    </p>
                                    <p class="font-medium cursor-pointer">
                                        Hapus
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="p-5 rounded-3xl shadow-md flex justify-between items-center text-xl font-semibold"
                        >
                            <p>Total</p>
                            <p class="text-primary">{{ totalPrice }}</p>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div class="px-4 pt-4 pb-8 rounded-3xl shadow-md">
                            <h2 class="text-lg font-semibold">
                                Informasi Kontak
                            </h2>
                            <p class="font-medium">Email</p>
                            <div class="flex flex-col items-center px-8 mt-9">
                                <p class="text-center font-medium">
                                    Masih bingung metode pembayarannya seperti
                                    apa
                                </p>
                                <button
                                    class="w-full py-3 mt-9 rounded-full font-semibold text-white bg-primary hover:bg-primary-hover hover:shadow-xl focus:bg-primary-active active:bg-primary-active focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
                                >
                                    Bayar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link } from "@inertiajs/vue3";
import { ref, computed } from "vue";

const totalPrice = computed(() => {
    const total = cart.value.reduce((accumulator, product) => {
        const price = parseFloat(
            product.price.replace(".", "").replace(",", ".")
        );
        return accumulator + price * product.qty;
    }, 0);

    return total.toLocaleString("id-ID", {
        style: "currency",
        currency: "IDR",
        minimumFractionDigits: 2,
    });
});

const cart = ref([
    {
        id: 1,
        image: "/assets/product.png",
        name: "How to Paint Watercolor Book 1: Design Paintings from Photos by Daniel Novotny (e-book)",
        seller: "Arif Saputra",
        price: "98.000,00",
        rating: 4.8,
        category: "Desain",
        sold: 100,
        qty: 1,
    },
    {
        id: 2,
        image: "/assets/product.png",
        name: "Digital Product",
        seller: "Arif Saputra",
        price: "98.000,00",
        rating: 4.8,
        category: "Tulisan dan Publikasi",
        sold: 100,
        qty: 1,
    },
    {
        id: 3,
        image: "/assets/product.png",
        name: "Digital Product",
        seller: "Arif Saputra",
        price: "98.000,00",
        rating: 4.8,
        category: "Film",
        sold: 100,
        qty: 1,
    },
]);
</script>
