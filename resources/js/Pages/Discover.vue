<template>
    <Head title="Discover" />

    <CustomerLayout>
        <template #header>
            <div class="flex gap-5 justify-center items-center">
                <a
                    href="#"
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
                <!-- Banner -->
                <div id="banner">
                    <Carousel v-bind="settings">
                        <Slide v-for="value in banner" :key="value">
                            <div class="banner_image">
                                <Link :href="route('dashboard')">
                                    <img
                                        :src="value"
                                        class="w-[100%] object-cover"
                                        :alt="value"
                                    />
                                </Link>
                            </div>
                        </Slide>

                        <template #addons>
                            <Pagination />
                            <Navigation />
                        </template>
                    </Carousel>
                </div>
                <!-- End Banner -->

                <!-- product -->
                <section id="product">
                    <div
                        class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-1"
                    >
                        <div
                            class="box_orange py-7 px-8 flex flex-col justify-between my-2 col-span-1 overflow-hidden"
                        >
                            <h1 class="text-4xl text-white font-bold">
                                Trend Digital Product
                            </h1>
                            <img
                                src="/assets/chart-iso-premium.png"
                                alt="Chart"
                            />
                        </div>
                        <div
                            class="col-span-1 sm:col-span-2 md:col-span-3 lg:col-span-4"
                        >
                            <Carousel
                                v-bind="settings_product"
                                :breakpoints="breakpoints"
                            >
                                <Slide
                                    v-for="(value, index) in product"
                                    :key="index"
                                >
                                    <div class="my-2 mx-2.5">
                                        <Link
                                            :href="
                                                route(
                                                    'product.detail',
                                                    value.id
                                                )
                                            "
                                        >
                                            <div class="box p-3">
                                                <img
                                                    :src="
                                                        'assets/' + value.image
                                                    "
                                                    class="w-full h-56 rounded-2xl object-cover"
                                                    alt=""
                                                />
                                                <h1
                                                    class="mt-3 mb-2 font-semibold text-xl"
                                                >
                                                    {{ value.name }}
                                                </h1>
                                                <div
                                                    class="flex gap-2 items-center"
                                                >
                                                    <img
                                                        src="/assets/product.png"
                                                        class="h-6 w-6 rounded-full object-cover"
                                                        alt=""
                                                    />
                                                    <p class="font-semibold">
                                                        {{ value.seller }}
                                                    </p>
                                                </div>
                                                <h1
                                                    class="my-2 font-semibold text-xl"
                                                >
                                                    Rp {{ value.price }}
                                                </h1>
                                                <div
                                                    class="flex gap-2 items-center"
                                                >
                                                    <img
                                                        src="/assets/icon/star.svg"
                                                        class="h-6 w-6"
                                                        alt=""
                                                    />
                                                    <p class="text-sm">
                                                        {{ value.rating }} |
                                                        Terjual
                                                        {{ value.sold }}
                                                    </p>
                                                </div>
                                            </div>
                                        </Link>
                                    </div>
                                </Slide>

                                <template #addons>
                                    <Navigation />
                                </template>
                            </Carousel>
                        </div>
                    </div>
                </section>
                <!-- end product -->

                <!-- innovative product -->
                <section id="innovative">
                    <h1 class="text-3xl font-bold mb-5">Produk Inovatif</h1>
                    <div
                        class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4"
                    >
                        <div v-for="(value, index) in product" :key="index">
                            <div class="box w-full p-3">
                                <Link :href="'/product/' + value.id">
                                    <img
                                        :src="'assets/' + value.image"
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
                                    <h1 class="my-2 font-semibold text-xl">
                                        Rp {{ value.price }}
                                    </h1>
                                    <div class="flex gap-2 items-center">
                                        <img
                                            src="/assets/icon/star.svg"
                                            class="h-6 w-6"
                                            alt=""
                                        />
                                        <p class="text-sm">
                                            {{ value.rating }} | Terjual
                                            {{ value.sold }}
                                        </p>
                                    </div>
                                </Link>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8 text-center">
                        <Link
                            href="#"
                            class="block mx-auto w-max text-primary py-2.5 px-14 border border-primary rounded-full font-semibold hover:bg-primary hover:text-white hover:shadow-lg"
                            >Muat Lebih Banyak</Link
                        >
                    </div>
                </section>
                <!-- end innovative product -->

                <!-- product by category -->
                <section id="category">
                    <h1 class="text-3xl font-bold mb-5">
                        Produk Berdasarkan Kategori
                    </h1>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
                        <div v-for="(value, index) in category" :key="index">
                            <Link href="#">
                                <div
                                    class="bg-white rounded-[1.25rem] p-[.62rem] box_category flex gap-6"
                                >
                                    <img
                                        :src="'/assets/' + value.image"
                                        class="h-full w-32 rounded-2xl object-cover"
                                        :alt="value.name"
                                    />
                                    <div class="mt-[3%]">
                                        <h1
                                            class="text-xl font-semibold mb-[.6rem]"
                                        >
                                            {{ value.name }}
                                        </h1>
                                        <p class="font-medium mb-[.38rem]">
                                            {{ value.description }}
                                        </p>
                                        <!-- <div
                                            class="flex gap-2 items-center mb-1"
                                        >
                                            <img
                                                src="/assets/icon/user-solid.svg"
                                                alt=""
                                            />
                                            <p class="text-sm">
                                                21839 Pencipta
                                            </p>
                                        </div>
                                        <div class="flex gap-2 items-center">
                                            <img
                                                src="/assets/icon/boxes.svg"
                                                alt=""
                                            />
                                            <p class="text-sm">
                                                9813847 Produk Digital
                                            </p>
                                        </div> -->
                                    </div>
                                </div>
                            </Link>
                        </div>
                    </div>
                </section>
                <!-- end product by category -->

                <!-- slogan -->
                <section class="mt-10 mb-16">
                    <Slogan>
                        <template #content>
                            Bersama Digi, siapa pun dapat memperoleh uang secara
                            online.
                        </template>
                    </Slogan>
                </section>
                <!-- end slogan -->
            </div>
        </div>
    </CustomerLayout>
</template>

<script setup>
import CustomerLayout from "@/Layouts/CustomerLayout.vue";
import { Head, Link, usePage } from "@inertiajs/vue3";
import Slogan from "@/Components/Slogan.vue";
import { ref } from "vue";
import { Carousel, Navigation, Pagination, Slide } from "vue3-carousel";
// import { usePage } from "@inertiajs/vue3";

import "vue3-carousel/dist/carousel.css";

const banner = [
    "/assets/banner1.png",
    "/assets/banner2.png",
    "/assets/banner3.png",
];

const settings = ref({
    itemsToShow: 1,
    wrapAround: true,
    autoplay: 5000,
});
const settings_product = ref({
    itemsToShow: 3.8,
    wrapAround: true,
    snapAlign: "start",
    mouseDrag: true,
});

const { props } = usePage();
const product = ref(props.products);
const category = ref(props.categories);
</script>

<style scoped>
.container {
    max-width: 1180px;
}
.banner_image {
    margin: 1.8rem 0 0;
    border-radius: 1.25rem;
    /* height: 18.75rem; */
    width: 100%;
    background: #fff;
    box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
    overflow: hidden;
}

/* product slider */
#product {
    margin-top: 1.8rem;
}
.box,
.box_orange {
    border-radius: 1.25rem;
    box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.1);
    height: 25rem;
    /* width: 15.625rem; */
    text-align: start;
}
.box:hover {
    box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
}
.box_orange {
    background: linear-gradient(
        135deg,
        #feb20e 0%,
        rgba(254, 178, 14, 0.5) 100%
    );
}
.noscroll::-webkit-scrollbar {
    display: none;
}
/* end product slider */

/* innovative */
#innovative {
    margin: 2.5rem 0;
}
/* end innovative */

/* product by category */
.box_category {
    box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.1);
    height: 9.875rem;
}
/* end product by category */
</style>

<style>
/* carousel */
.carousel__pagination-button::after {
    width: 0.5rem !important;
    height: 0.5rem !important;
    border-radius: 100% !important;
}
.carousel__pagination-button--active::after {
    background-color: #feb20e !important;
}
#banner .carousel__next,
#product .carousel__next,
#product .carousel__prev,
#banner .carousel__prev {
    background: white !important;
    color: var(--yellow) !important;
    border-radius: 100px !important;
    box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1),
        0 4px 6px -4px rgb(0 0 0 / 0.1);
}
#product .carousel__prev,
#banner .carousel__prev {
    left: -1.625rem !important;
}
#product .carousel__next,
#banner .carousel__next {
    right: -1.625rem !important;
}

@media only screen and (min-width: 1200px) {
    #banner .carousel__next,
    #banner .carousel__prev {
        visibility: hidden !important;
    }

    #banner:hover .carousel__next,
    #banner:hover .carousel__prev {
        visibility: visible !important;
    }
}
/* end carousel */
</style>
