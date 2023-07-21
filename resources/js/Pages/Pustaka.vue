<template>
    <Head title="Pustaka" />

    <AuthenticatedLayout>
        <template #header>
            <h1 class="text-[2rem] font-bold">Pustaka</h1>
        </template>
        <div class="py-12">
            <div class="grid grid-cols-3 gap-5">
                <div v-for="(value, index) in product" :key="index">
                    <div class="box w-full p-3">
                        <Link :href="'/product/' + value.id">
                            <img
                                :src="value.image"
                                class="w-full h-56 rounded-2xl object-cover"
                                alt=""
                            />
                            <h1 class="mt-3 mb-2 font-semibold text-xl">
                                {{ value.name }}
                            </h1>
                            <div class="flex gap-2 items-center">
                                <img
                                    src="/assets/product.png"
                                    class="h-6 w-6 rounded-full object-cover"
                                    alt=""
                                />
                                <p class="font-semibold">
                                    {{ value.seller }}
                                </p>
                            </div>
                        </Link>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link } from "@inertiajs/vue3";
import { ref } from "vue";

const product = ref([
    {
        id: 1,
        image: "/assets/product.png",
        name: "Digital Product",
        seller: "Arif Saputra",
    },
    {
        id: 2,
        image: "/assets/product.png",
        name: "Digital Product",
        seller: "Arif Saputra",
    },
    {
        id: 3,
        image: "/assets/product.png",
        name: "Digital Product",
        seller: "Arif Saputra",
    },
    {
        id: 4,
        image: "/assets/product.png",
        name: "Digital Product",
        seller: "Arif Saputra",
    },
    {
        id: 5,
        image: "/assets/product.png",
        name: "Digital Product",
        seller: "Arif Saputra",
    },
    {
        id: 6,
        image: "/assets/product.png",
        name: "Digital Product",
        seller: "Arif Saputra",
    },
    {
        id: 7,
        image: "/assets/product.png",
        name: "Digital Product",
        seller: "Arif Saputra",
    },
    {
        id: 8,
        image: "/assets/product.png",
        name: "Digital Product",
        seller: "Arif Saputra",
    },
]);
</script>

<style scoped>
.box {
    border-radius: 1.25rem;
    box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.1);
    height: 21rem;
    text-align: start;
}
.box:hover {
    box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
}
</style>
