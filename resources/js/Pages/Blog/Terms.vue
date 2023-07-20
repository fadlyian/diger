<template>
    <Head title="Terms of Use" />

    <CustomerLayout>
        <div class="pt-[14%] sm:pt-[12%] md:pt-[12%] lg:pt-[6%] mx-auto">
            <div class="container">
                <section class="mt-5 text-center text-[40px] font-semibold">
                    <h1>Diger</h1>
                    <h1>Terms of Service Agreement</h1>
                </section>
                <section class="my-20">
                    <div v-for="item in items">
                        <h3 class="text-[28px] font-medium">{{ item.title }}</h3>
                        <p class="text-[18px] my-4">{{ item.description }}</p>
                    </div>
                    <p class="text-[18px] my-4">Terima kasih telah menggunakan layanan kami. Selamat berbelanja dan menciptakan karya hebat di Diger!</p>
                </section>
            </div>
        </div>
    </CustomerLayout>
</template>

<script setup>
import { Head } from "@inertiajs/vue3";
import CustomerLayout from "@/Layouts/CustomerLayout.vue";
const items= {
    item1: { title: "1. Pengantar", description: "Selamat datang di platform digital kami, Diger! Dalam menggunakan layanan dan produk kami, Anda setuju untuk mematuhi ketentuan dan kondisi yang dijelaskan dalam dokumen ini. Pastikan untuk membaca dengan cermat dan memahami syarat-syarat penggunaan ini sebelum melanjutkan." },
    item2: { title: "2. Hak Kekayaan Intelektual", description: "Semua konten yang tersedia di platform Diger, termasuk tetapi tidak terbatas pada teks, gambar, audio, video, logo, dan merek dagang, adalah milik kami atau pihak ketiga yang memberi lisensi kepada kami. Tidak diizinkan untuk menggunakan, menggandakan, mendistribusikan, atau mengubah konten kami tanpa izin tertulis dari kami atau pemilik hak cipta." },
    item3: { title: "3. Penggunaan Platform", description: "Kami memberikan izin kepada Anda untuk mengakses dan menggunakan platform Diger untuk tujuan pribadi dan non-komersial. Anda setuju untuk tidak menggunakan platform kami untuk tujuan ilegal, menyesatkan, atau yang melanggar hak kekayaan intelektual pihak lain. Setiap pelanggaran akan mengakibatkan pemblokiran akses dan tindakan hukum sesuai dengan hukum yang berlaku." },
    item4: { title: "4. Produk Digital", description: "Produk digital yang tersedia di platform Diger adalah karya dari kreator dan penjual pihak ketiga. Kami tidak bertanggung jawab atas isi, kualitas, atau keandalan produk yang dijual oleh pihak ketiga. Pembelian produk digital adalah tanggung jawab Anda sendiri dan kami tidak memberikan jaminan terkait produk tersebut." },
    item5: { title: "5. Privasi dan Keamanan", description: "Kami menghargai privasi Anda dan berkomitmen untuk melindungi data pribadi Anda sesuai dengan kebijakan privasi kami. Namun, kami tidak dapat menjamin keamanan sepenuhnya dalam pengiriman data melalui internet. Anda bertanggung jawab atas menjaga kerahasiaan informasi pribadi dan akun Anda." },
    item6: { title: "6. Perubahan dalam Ketentuan dan Kondisi", description: "Kami berhak untuk mengubah atau memperbarui ketentuan dan kondisi ini dari waktu ke waktu tanpa pemberitahuan sebelumnya. Perubahan akan berlaku sejak tanggal dipublikasikan di platform kami. Dengan terus menggunakan platform Diger, Anda setuju untuk mematuhi versi terbaru dari ketentuan dan kondisi ini." },
    item7: { title: "7. Kontak", description: "Jika Anda memiliki pertanyaan atau perlu bantuan lebih lanjut mengenai ketentuan dan kondisi ini, silakan hubungi kami melalui informasi kontak yang tersedia di platform kami." },
}
</script>

<style scoped>
.container {
    max-width: 1180px;
}
</style>
