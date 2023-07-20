<template>
    <Head title="Terms of Use" />

    <CustomerLayout>
        <div class="pt-[14%] sm:pt-[12%] md:pt-[12%] lg:pt-[6%] mx-auto">
            <div class="container">
                <section class="mt-5 text-center text-[40px] font-semibold">
                    <h1>Diger</h1>
                    <h1>Privacy Policy</h1>
                </section>
                <section class="my-20">
                    <p class="text-[18px] my-4">Kami sangat menghargai kehadiran Anda sebagai pengguna platform Diger. Untuk memastikan pengalaman berbelanja dan berinteraksi yang positif bagi semua pengguna, berikut adalah beberapa kebijakan yang perlu diikuti saat menggunakan layanan kami:</p>
                    <div v-for="item in items">
                        <h3 class="text-[28px] font-medium">{{ item.title }}</h3>
                        <p class="text-[18px] my-4">{{ item.description }}</p>
                    </div>
                    <p class="text-[18px] my-4">Jika Anda memiliki pertanyaan atau perlu bantuan lebih lanjut mengenai kebijakan kami, silakan hubungi kami melalui informasi kontak yang tersedia di platform kami.</p>
                    <p class="text-[18px] my-4">Terima kasih telah menjadi bagian dari komunitas Diger. Selamat berbelanja dan menikmati produk digital berkualitas tinggi dari para kreator yang berbakat!</p>
                </section>
            </div>
        </div>
    </CustomerLayout>
</template>

<script setup>
import { Head } from "@inertiajs/vue3";
import CustomerLayout from "@/Layouts/CustomerLayout.vue";
const items= {
    item1: { title: "1. Kebijakan Privasi", description: "Kami menghargai privasi Anda dan berkomitmen untuk melindungi data pribadi Anda dengan cermat. Informasi pribadi Anda akan digunakan sesuai dengan Kebijakan Privasi kami. Pastikan untuk membaca dan memahami kebijakan privasi kami sebelum menggunakan platform Diger." },
    item2: { title: "2. Kebijakan Penggunaan Produk Digital", description: "Setiap produk digital yang tersedia di platform Diger adalah karya dari kreator dan penjual pihak ketiga. Dalam menggunakan produk digital tersebut, Anda setuju untuk mematuhi Kebijakan Penggunaan Produk Digital kami. Produk digital yang Anda beli hanya boleh digunakan untuk tujuan pribadi dan non-komersial." },
    item3: { title: "3. Kebijakan Pembayaran dan Pengembalian", description: "Diger menyediakan berbagai metode pembayaran yang aman dan terpercaya untuk memudahkan proses pembelian. Pastikan untuk memverifikasi informasi pembayaran Anda sebelum menyelesaikan transaksi. Kebijakan pengembalian dan refund berlaku untuk produk digital tertentu, namun beberapa produk mungkin tidak dapat dikembalikan. Pastikan untuk membaca syarat dan ketentuan yang berlaku untuk setiap produk sebelum melakukan pembelian." },
    item4: { title: "4. Kebijakan Penggunaan Platform", description: "Penggunaan platform Diger harus mematuhi hukum yang berlaku dan etika yang baik. Dilarang keras melakukan tindakan penipuan, peretasan, atau pelanggaran lainnya yang dapat merugikan pengguna lain atau merusak reputasi platform kami. Setiap pelanggaran akan mengakibatkan pemblokiran akses dan tindakan hukum sesuai dengan hukum yang berlaku." },
    item5: { title: "5. Kebijakan Keamanan", description: "Kami selalu berusaha untuk menjaga keamanan dan integritas platform kami. Namun, kami juga menghimbau pengguna untuk melindungi akun pribadi mereka dengan baik. Jangan berbagi informasi kredensial dengan pihak lain dan pastikan untuk logout setelah selesai menggunakan platform Diger." },
}
</script>

<style scoped>
.container {
    max-width: 1180px;
}
</style>