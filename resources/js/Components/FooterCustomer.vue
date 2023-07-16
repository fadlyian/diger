<template>
    <footer class="container">
        <div class="border-t border-gray-100 pt-6 pb-8">
            <!-- Logo -->
            <Link :href="route('home')">
                <ApplicationLogo />
            </Link>
            <div class="grid grid-cols-5 gap-40 justify-between items-center">
                <div class="col-span-3">
                    <p class="my-6 font-semibold text-xl">
                        Jangan sia-siakan kesempatanmu untuk tumbuh dan sukses!
                        Berlanggananlah sekarang dan dapatkan manfaatnya.
                    </p>
                    <div
                        class="flex border border-primary rounded-full pl-8 overflow-hidden"
                    >
                        <input
                            type="email"
                            class="border-0 focus:ring-0 bg-none p-0 w-full"
                            placeholder="Alamat email mu"
                        />
                        <button
                            type="submit"
                            class="text-white bg-primary py-3 px-16 rounded-full font-semibold"
                        >
                            Berlangganan
                        </button>
                    </div>
                    <p class="text-sm font-medium text-[#555] mt-12">
                        &#169; {{ new Date().getFullYear() }} Diger. Hak cipta
                        dilindungi Undang-Undang.
                    </p>
                </div>
                <div class="col-span-2 justify-self-end">
                    <div class="flex gap-5">
                        <a
                            v-for="(value, key) in medsoc"
                            :key="key"
                            :href="value.link"
                            target="_blank"
                            ><img
                                :src="value.image"
                                alt="value.name"
                                class="hover-img h-8"
                        /></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</template>

<script setup>
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import { Link } from "@inertiajs/vue3";
import { ref } from "vue";

const medsoc = ref([
    {
        image: "/assets/icon/LinkedIn.svg",
        name: "Instagram",
        link: "https://www.linkedin.com/",
    },
    {
        image: "/assets/icon/github.svg",
        name: "Instagram",
        link: "https://www.github.com/",
    },
    {
        image: "/assets/icon/instagram.svg",
        name: "Instagram",
        link: "https://www.instagram.com/",
    },
    {
        image: "/assets/icon/twitter.svg",
        name: "Instagram",
        link: "https://www.twitter.com/",
    },
]);
</script>

<style scoped>
.hover-img:hover {
    filter: invert(78%) sepia(19%) saturate(5932%) hue-rotate(350deg)
        brightness(106%) contrast(102%) !important;
}
</style>
