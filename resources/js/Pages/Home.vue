<template>
    <Head title="Home" />

    <CustomerLayout>
        <div class="pt-24 px-12">
            <div class="container">
                <!-- banner -->
                <section class="grid grid-cols-5 gap-8 items-center">
                    <div class="col-span-3">
                        <h1 class="font-semibold text-5xl leading-[3.875rem]">
                            Rasakan masa depan digital dengan berinovasi.
                        </h1>
                        <p class="mb-12 mt-14">
                            Dengan Diger, siapa pun bisa mendapatkan rupiah
                            pertama secara online. Mulailah dengan apa yang anda
                            ketahui, lihat apa yang berhasil, dan dapatkan
                            bayaran. Sesimple itu.
                        </p>
                        <Link
                            :href="route('dashboard')"
                            class="bg-primary text-white py-3 px-16 rounded-full font-semibold hover:shadow-lg"
                            >Mulai Jualan</Link
                        >
                    </div>
                    <div class="col-span-2">
                        <img
                            src="/assets/banner-home.png"
                            class="w-full h-full object-cover"
                            alt=""
                        />
                    </div>
                </section>
                <!-- end banner -->

                <!-- about -->
                <section class="my-[6.25rem]">
                    <div class="text-end">
                        <h1 class="font-semibold text-[2rem] mb-5">
                            Jual apa saja
                        </h1>
                    </div>
                    <div class="grid grid-cols-2 gap-8">
                        <div class="row-span-1">
                            <img
                                src="/assets/about.png"
                                class="w-full h-[20rem] rounded-[1.25rem] object-cover"
                                alt=""
                            />
                        </div>
                        <div class="row-span-1">
                            <p class="mb-4">
                                Software. Pelajaran video. Album Lagu. Apa pun!
                                Diger dibuat untuk membantu Anda bereksperimen
                                dengan semua jenis ide dan format.
                            </p>
                            <div class="ms-4">
                                <div
                                    v-for="(value, key) in advantages"
                                    :key="key"
                                    class="flex gap-3 items-center mb-[.62rem]"
                                >
                                    <img src="/assets/icon/ul.svg" alt="" />
                                    <p>{{ value }}</p>
                                </div>
                            </div>
                            <p class="mt-4">
                                Ini serius, anda dapat menjual apa saja!
                            </p>
                        </div>
                    </div>
                </section>
                <!-- end about -->

                <!-- product by category -->
                <section class="mb-[6.25rem]">
                    <div class="text-center mb-[1.875rem]">
                        <h1
                            class="font-semibold text-[2rem] w-2/4 mx-auto mb-4"
                        >
                            Mencari inspirasi tentang apa yang bisa anda jual?
                        </h1>
                        <p class="font-medium text-2xl">
                            Temukan produk dan kreator terlaris di Diger
                        </p>
                    </div>
                    <div class="grid grid-cols-2 gap-5">
                        <div v-for="value in 8" :key="value">
                            <Link href="#">
                                <div
                                    class="bg-white rounded-[1.25rem] p-[.62rem] box_category flex gap-6"
                                >
                                    <img
                                        src="/assets/product.png"
                                        class="h-[8.625rem] w-32 rounded-2xl object-cover"
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
                <section class="my-[6.25rem]">
                    <div class="box_slogan py-12">
                        <h1
                            class="text-center text-white text-[2rem] font-semibold w-4/5 mx-auto"
                        >
                            Bagikan produk digital Anda. <br />
                            Seseorang di luar sana membutuhkannya.
                        </h1>
                        <div class="mt-4 text-center">
                            <Link
                                :href="route('dashboard')"
                                class="block w-max mx-auto bg-white text-primary py-2.5 px-14 border border-primary rounded-full font-semibold hover:shadow-lg"
                                >Mulai Jualan</Link
                            >
                        </div>
                    </div>
                </section>
                <!-- end slogan -->
            </div>
        </div>
    </CustomerLayout>
</template>

<script setup>
import { Head, Link } from "@inertiajs/vue3";
import CustomerLayout from "@/Layouts/CustomerLayout.vue";
import { ref } from "vue";

const advantages = ref([
    "Jual daftar Top 10 Anda",
    "Jual kiat kripto Anda",
    "Jual paket fraktal Anda",
    "Jual buku masak keto Anda",
    "Jual adegan C4D Anda",
    "Jual emoji baru Anda",
]);
</script>

<style scoped>
/* product by category */
.box_category {
    box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.1);
    height: 9.875rem;
}
/* end product by category */

/* slogan */
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
