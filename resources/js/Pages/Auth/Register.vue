<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";

const form = useForm({
    name: "",
    username: "",
    email: "",
    password: "",
});

const submit = () => {
    form.post(route("register"), {
        onFinish: () => form.reset("password"),
    });
};
</script>

<template>
    <GuestLayout>
        <Head title="Register" />

        <div class="grid grid-cols-5 gap-14 items-center">
            <div class="col-span-2 ps-[4rem]">
                <h1
                    class="text-[32px] leading-normal font-medium text-center mb-10"
                >
                    Buat akunmu
                </h1>
                <form @submit.prevent="submit">
                    <div>
                        <InputLabel isRequired="true" for="name" value="Name" />

                        <TextInput
                            placeholder="Masukkan Nama Lengkapmu"
                            id="name"
                            type="text"
                            class="mt-1 block w-full"
                            v-model="form.name"
                            required
                            autofocus
                            autocomplete="name"
                        />

                        <InputError class="mt-2" :message="form.errors.name" />
                    </div>
                    <div class="mt-4">
                        <InputLabel
                            isRequired="true"
                            for="username"
                            value="Username"
                        />

                        <TextInput
                            placeholder="Masukkan Username"
                            id="username"
                            type="text"
                            class="mt-1 block w-full"
                            v-model="form.username"
                            required
                            autocomplete="off"
                        />

                        <InputError
                            class="mt-2"
                            :message="form.errors.username"
                        />
                    </div>

                    <div class="mt-4">
                        <InputLabel
                            isRequired="true"
                            for="email"
                            value="Email"
                        />

                        <TextInput
                            placeholder="Masukkan Email"
                            id="email"
                            type="email"
                            class="mt-1 block w-full"
                            v-model="form.email"
                            required
                            autocomplete="email"
                        />

                        <InputError class="mt-2" :message="form.errors.email" />
                    </div>

                    <div class="mt-4">
                        <InputLabel
                            isRequired="true"
                            for="password"
                            value="Password"
                        />

                        <TextInput
                            placeholder="Masukkan Password"
                            id="password"
                            type="password"
                            class="mt-1 block w-full"
                            v-model="form.password"
                            required
                            autocomplete="new-password"
                        />

                        <InputError
                            class="mt-2"
                            :message="form.errors.password"
                        />
                    </div>

                    <p class="mt-4 text-xs">
                        Anda menyetujui
                        <Link
                            href="/term-of-service"
                            class="text-primary font-medium"
                            >Ketentuan Penggunaan</Link
                        >
                        serta
                        <Link
                            href="/privacy-policy"
                            class="text-primary font-medium"
                            >Kebijakan Privasi</Link
                        >
                        dan
                        <Link
                            href="/our-payment"
                            class="text-primary font-medium"
                            >Biaya kami</Link
                        >
                    </p>
                    <button
                        class="w-full mt-6 bg-primary hover:bg-primary-hover hover:shadow-xl focus:bg-gray-700 active:bg-primary-active inline-flex items-center justify-center py-3 border border-transparent rounded-full font-semibold text-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
                        :class="{ 'opacity-25': form.processing }"
                        :disabled="form.processing"
                    >
                        Buat Akun
                    </button>
                    <p class="mt-3 text-sm">
                        Sudah memiliki akun?
                        <Link href="/login" class="text-primary font-medium"
                            >Masuk</Link
                        >
                    </p>
                </form>
            </div>
            <div class="col-span-3">
                <div class="mask_img1">
                    <img src="/assets/auth-banner.png" alt="" />
                    <div class="content text-center text-white font-medium">
                        <h1 class="text-3xl px-4 mb-8">
                            Menemukan Produk Digital Terbaik untuk Masa Depan
                            Anda
                        </h1>
                        <p>
                            Bergabunglah dengan lebih dari 147.388 kreator yang
                            telah menghasilkan lebih dari Rp. 980.450.000 pada
                            Digi yang menjual produk digital dan keanggotaan.
                        </p>
                        <div
                            class="flex justify-between font-normal mt-10 text-xs"
                        >
                            <div
                                class="border-2 border-white py-2 px-4 rounded-full"
                            >
                                100% Produk asli langsung dari Kreator
                            </div>
                            <div
                                class="border-2 border-white py-2 px-4 rounded-full"
                            >
                                Bisa Ditambah nih fiturrrr
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </GuestLayout>
</template>

<style scoped>
.mask_img1 {
    -webkit-mask-image: url("/assets/mask.png");
    mask-image: url("/assets/mask.png");
    -webkit-mask-repeat: no-repeat;
    mask-repeat: no-repeat;
    width: 100%;
    border-radius: 2rem;
    overflow: hidden !important;
    position: relative;
}
.mask_img1 img {
    height: 100%;
    width: 100%;
    object-fit: cover;
}
.content {
    position: absolute;
    bottom: 0;
    width: 100%;
    padding-left: 1.75rem;
    padding-right: 1.75rem;
    padding-bottom: 4rem;
}
</style>
