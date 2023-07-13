<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import { ref } from "vue";

const product = ref([
    {
        id: 1,
        image: "/assets/product/1.jpg",
        name: "Digital Product",
        seller: "Arif Saputra",
        price: "98.000,00",
        rating: 4.8,
        category: "Desain",
        sold: 100,
    },
    {
        id: 2,
        image: "/assets/product/1.jpg",
        name: "Digital Product",
        seller: "Arif Saputra",
        price: "98.000,00",
        rating: 4.8,
        category: "Tulisan dan Publikasi",
        sold: 100,
    },
    {
        id: 3,
        image: "/assets/product/1.jpg",
        name: "Digital Product",
        seller: "Arif Saputra",
        price: "98.000,00",
        rating: 4.8,
        category: "Film",
        sold: 100,
    },
    {
        id: 4,
        image: "/assets/product/1.jpg",
        name: "Digital Product",
        seller: "Arif Saputra",
        price: "98.000,00",
        rating: 4.8,
        category: "Software Development",
        sold: 100,
    },
    {
        id: 5,
        image: "/assets/product/1.jpg",
        name: "Digital Product",
        seller: "Arif Saputra",
        price: "98.000,00",
        rating: 4.8,
        category: "Pendidikan",
        sold: 100,
    },
    {
        id: 6,
        image: "/assets/product/1.jpg",
        name: "Digital Product",
        seller: "Arif Saputra",
        price: "98.000,00",
        rating: 4.8,
        category: "Musik",
        sold: 100,
    },
]);
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <div class="flex gap-5 justify-center items-center">
                <a
                    href="#"
                    class="font-medium"
                    v-for="value in product"
                    :key="value.id"
                >
                    {{ value.category }}
                </a>
            </div>
        </template>

        <div id="home" class="px-12">
            <!-- Banner -->
            <div class="container">
                <div id="banner">
                    <img src="/assets/banner.png" alt="" />
                </div>
            </div>
            <!-- End Banner -->
        </div>
    </AuthenticatedLayout>
</template>

<style scoped>
#banner {
    margin: 1.8rem 0;
    border-radius: 1.25rem;
    height: 18.75rem;
    width: 100%;
    background: #fff;
    box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
}
</style>
