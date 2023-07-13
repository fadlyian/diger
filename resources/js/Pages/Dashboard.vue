<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <div class="flex gap-5 justify-center items-center">
                <a
                    href="#"
                    class="font-medium hover:text-primary"
                    v-for="value in product"
                    :key="value.id"
                >
                    {{ value.category }}
                </a>
            </div>
        </template>

        <div class="pt-28 px-12">
            <div class="container">
                <!-- Banner -->
                <div id="banner">
                    <img
                        src="/assets/banner1.png"
                        class="h-full w-full object-cover"
                        alt=""
                    />
                    <!-- <img
                        v-for="value in banner"
                        :key="value"
                        :src="value"
                        alt=""
                    /> -->
                </div>
                <!-- End Banner -->

                <!-- product -->
                <section id="product">
                    <div class="flex gap-5">
                        <div
                            class="box box_orange py-7 px-8 flex flex-col justify-between my-2"
                        >
                            <h1 class="text-4xl text-white font-bold">
                                Trend Digital Product
                            </h1>
                            <p class="text-white font-bold text-center">
                                disini nanti ada desain
                            </p>
                        </div>
                        <div
                            class="flex gap-3 flex-nowrap overflow-x-scroll noscroll"
                        >
                            <div
                                v-for="(value, index) in product"
                                :key="index"
                                class="my-2 mx-1"
                            >
                                <Link href="#">
                                    <div class="box p-3">
                                        <img
                                            :src="value.image"
                                            class="w-full h-56 rounded-2xl object-cover"
                                            alt=""
                                        />
                                        <h1
                                            class="mt-3 mb-2 font-semibold text-xl"
                                        >
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
                                            Rp{{ value.price }}
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
                                    </div>
                                </Link>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end product -->

                <!-- innovative product -->
                <section id="innovative">
                    <h1 class="text-3xl font-bold mb-5">Produk Inovatif</h1>
                    <div class="grid grid-cols-4 gap-5">
                        <div v-for="(value, index) in product" :key="index">
                            <div class="box w-full p-3">
                                <Link href="#">
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
                                    <h1 class="my-2 font-semibold text-xl">
                                        Rp{{ value.price }}
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
                    <div class="grid grid-cols-2 gap-5">
                        <div v-for="value in 8" :key="value">
                            <Link href="#">
                                <div
                                    class="bg-white rounded-[1.25rem] p-[.62rem] box_category flex gap-6"
                                >
                                    <img
                                        src="/assets/product.png"
                                        class="h-full w-32 rounded-2xl object-cover"
                                        alt=""
                                    />
                                    <div>
                                        <h1
                                            class="text-xl font-semibold mb-[.6rem]"
                                        >
                                            Software Development
                                        </h1>
                                        <p class="font-medium mb-[.38rem]">
                                            Lorem ipsum dolor sit amet
                                            consectetur.
                                        </p>
                                        <div
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
                                        </div>
                                    </div>
                                </div>
                            </Link>
                        </div>
                    </div>
                </section>
                <!-- end product by category -->

                <!-- slogan -->
                <section id="slogan">
                    <div class="box_slogan py-5">
                        <h1
                            class="text-center text-white text-[1.75rem] font-bold w-3/5 mx-auto"
                        >
                            Bersama Digi, siapa pun dapat memperoleh uang secara
                            online.
                        </h1>
                        <div class="mt-4 text-center">
                            <Link
                                href="#"
                                class="block w-max mx-auto bg-white text-primary py-2.5 px-14 border border-primary rounded-full font-semibold hover:shadow-lg"
                                >Mulai Jualan</Link
                            >
                        </div>
                    </div>
                </section>
                <!-- end slogan -->
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link } from "@inertiajs/vue3";
import { ref } from "vue";

const banner = [
    "/assets/banner1.png",
    "/assets/banner2.png",
    "/assets/banner3.png",
];

const product = ref([
    {
        id: 1,
        image: "/assets/product.png",
        name: "Digital Product",
        seller: "Arif Saputra",
        price: "98.000,00",
        rating: 4.8,
        category: "Desain",
        sold: 100,
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
    },
    {
        id: 4,
        image: "/assets/product.png",
        name: "Digital Product",
        seller: "Arif Saputra",
        price: "98.000,00",
        rating: 4.8,
        category: "Software Development",
        sold: 100,
    },
    {
        id: 5,
        image: "/assets/product.png",
        name: "Digital Product",
        seller: "Arif Saputra",
        price: "98.000,00",
        rating: 4.8,
        category: "Pendidikan",
        sold: 100,
    },
    {
        id: 6,
        image: "/assets/product.png",
        name: "Digital Product",
        seller: "Arif Saputra",
        price: "98.000,00",
        rating: 4.8,
        category: "Musik",
        sold: 100,
    },
    {
        id: 7,
        image: "/assets/product.png",
        name: "Digital Product",
        seller: "Arif Saputra",
        price: "98.000,00",
        rating: 4.8,
        category: "Pendidikan",
        sold: 100,
    },
    {
        id: 8,
        image: "/assets/product.png",
        name: "Digital Product",
        seller: "Arif Saputra",
        price: "98.000,00",
        rating: 4.8,
        category: "Musik",
        sold: 100,
    },
]);
</script>

<style scoped>
#banner {
    margin: 1.8rem 0;
    border-radius: 1.25rem;
    height: 18.75rem;
    width: 100%;
    background: #fff;
    box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
    overflow: hidden;
}

/* product slider */
#product .box {
    width: 15.5rem;
}
.box {
    border-radius: 1.25rem;
    box-shadow: 0px 0px 6px 0px rgba(0, 0, 0, 0.1);
    height: 25rem;
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

/* slogan */
#slogan {
    padding: 2.5rem 0;
}
.box_slogan {
    border-radius: 1.25rem;
    background: linear-gradient(
        134deg,
        #feb20e 0%,
        rgba(254, 178, 14, 0.5) 100%
    );
    box-shadow: 0px 0px 6px 0px rgba(0, 0, 0, 0.1);
}
/* end slogan */
</style>
