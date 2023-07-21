<template>
    <Head title="Pricing" />

    <CustomerLayout>
        <div class="pt-[14%] sm:pt-[12%] md:pt-[12%] lg:pt-[6%] mx-auto">
            <div class="container">
                <!-- banner -->
                <section class="text-center md:w-1/2 mx-auto my-[4rem] md:mb-[6rem] md:mt-[2rem]">
                    <p class="text-[2rem] font-bold">Pricing</p>
                    <h1 class="text-5xl font-bold text-primary my-5">
                        10% rata
                    </h1>
                    <p class="font-medium">
                        Kami ingin Anda menjalani kehidupan yang lebih baik,
                        tidak fokus pada biaya. Itu sebabnya kami tidak memiliki
                        biaya bulanan dan hanya mengambil potongan kecil dari
                        setiap penjualan.
                    </p>
                </section>
                <!-- end banner -->

                <!-- faq -->
                <div class="mb-[1.62rem]">
                    <h1 class="text-[2rem] font-bold mb-5">
                        Pertanyaan yang sering diajukan
                    </h1>
                    <p class="font-medium">
                        Tidak melihat pertanyaan Anda? Kunjungi pusat bantuan
                        kami.
                    </p>
                </div>
                <div class="mx-10 md:mx-24">
                    <button
                        v-for="(value, key) in faq"
                        :key="key"
                        @click="toggleCollapse(key)"
                        class="bg-white text-start px-[1.8rem] shadow-collapse w-full py-[.69rem] mb-5"
                        :class="
                            collapsed[key] ? 'rounded-full' : 'rounded-2xl pb-8'
                        "
                    >
                        <div class="flex gap-8 items-center">
                            <h1 class="font-bold">
                                {{ collapsed[key] ? "+" : "-" }}
                            </h1>
                            <h1 class="font-bold text-2xl">
                                {{ value.question }}
                            </h1>
                        </div>

                        <div v-if="!collapsed[key]" class="mt-5">
                            <h1>{{ value.answer }}</h1>
                        </div>
                    </button>
                </div>
                <!-- end faq -->

                <!-- slogan -->
                <section class="my-[4rem] md:my-[6.25rem]">
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
import { ref } from "vue";
import { Head, Link } from "@inertiajs/vue3";
import CustomerLayout from "@/Layouts/CustomerLayout.vue";

const collapsed = ref({});

const faq = ref([
    {
        question: "Apa yang Bisa Saya Jual di Diger?",
        answer: 'Produk Digital, Produk Fisik, dan Keanggotaan - hampir semuanya! Pencipta di hampir setiap industri menggunakan (dan cinta) Diger, mulai dari seniman digital, penulis, musisi, dan tipe kreatif lainnya hingga wirausahawan yang berpikiran bisnis dan ahli teknologi seperti pencipta SaaS kami. Pertanyaan yang lebih baik adalah, "apa yang tidak bisa Anda jual di Diger?"',
    },
    {
        question: "Bagaimana Saya Dibayar?",
        answer: "Tujuan Diger adalah membantu kreator mencari nafkah dengan melakukan apa yang mereka sukai, jadi kami membuatnya sesederhana mungkin untuk mendapatkan bayaran. Cara kami membayar kreator, baik melalui setoran langsung.",
    },
    {
        question: "Apa Biayanya?",
        answer: "Tidak seperti platform lain, Diger tidak membebankan biaya bulanan kepada Anda. Sebaliknya, biaya kami dipotong sebagai persentase kecil dari setiap penjualan, jadi kami hanya menghasilkan uang saat Anda melakukannya.",
    },
    {
        question: "Bisakah Saya Menggunakan Diger untuk Keanggotaan?",
        answer: "Ya! Baik itu untuk podcast, kursus online, atau langganan SaaS, Diger memudahkan pengelolaan keanggotaan.",
    },
]);

faq.value.forEach((item, index) => {
    collapsed.value[index] = true;
});

const toggleCollapse = (key) => {
    collapsed.value[key] = !collapsed.value[key];
};
</script>

<style scoped>
.container {
    max-width: 1180px;
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
</style>
