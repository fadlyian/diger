<template>
    <Head title="Home Product" />

    <CustomerLayout>
        <template #header>
            <div class="flex gap-5 justify-center items-center">
                <a
                    :href="route('productByCategory', value.id)"
                    class="font-medium hover:text-primary"
                    v-for="value in category"
                    :key="value.id"
                >
                    {{ value.name }}
                </a>
            </div>
        </template>

        <div class="pt-[14%] sm:pt-[12%] md:pt-[12%] lg:pt-24 m-auto">
            <div class="container">
                <!-- product -->
                <section id="allProduct">
                    <div
                        class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4"
                    >
                        <div v-for="(value, index) in product" :key="index">
                            <div class="box w-full p-3">
                                <Link :href="route('product.detail', value.id)">
                                    <img
                                        :src="'storage/' + value.image"
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
                                            {{ value.user.name }}
                                        </p>
                                    </div>
                                    <h1 class="my-2 font-semibold text-xl">
                                        {{
                                            new Intl.NumberFormat("id-ID", {
                                                style: "currency",
                                                currency: "IDR",
                                                minimumFractionDigits: 0,
                                            }).format(value.price)
                                        }}
                                    </h1>
                                    <!-- <div class="flex gap-2 items-center">
                                        <img
                                            src="/assets/icon/star.svg"
                                            class="h-6 w-6"
                                            alt=""
                                        />
                                        <p class="text-sm">
                                            {{ value.rating }} | Terjual
                                            {{ value.sold }}
                                        </p>
                                    </div> -->
                                </Link>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end product -->
            </div>
        </div>
    </CustomerLayout>
</template>

<script setup>
import CustomerLayout from "@/Layouts/CustomerLayout.vue";
import { Head, Link, usePage } from "@inertiajs/vue3";
import { ref } from "vue";
// import { usePage } from "@inertiajs/vue3";

import "vue3-carousel/dist/carousel.css";

const { props } = usePage();
const product = ref(props.products);
const category = ref(props.categories);
</script>

<style scoped>
.container {
    max-width: 1180px;
}
.box,
.box_orange {
    border-radius: 1.25rem;
    box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.1);
    height: 23rem;
    /* width: 15.625rem; */
    text-align: start;
}
.box:hover {
    box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
}
/* allProduct */
#allProduct {
    margin: 2.5rem 0;
}
/* end allProduct */
</style>
