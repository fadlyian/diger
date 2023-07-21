<template>
    <Head title="Detail Product" />

    <CustomerLayout>
        <div class="container">
            <div class="pt-24 px-12">
                <div class="grid grid-cols-5 gap-10">
                    <div class="col-span-2 flex">
                        <img
                            :src="'/assets/' + product.image"
                            class="w-full h-auto object-cover rounded-3xl"
                            alt=""
                        />
                    </div>
                    <div class="col-span-3">
                        <h1 class="font-semibold text-3xl mb-[.62rem]">
                            {{ product.name }}
                        </h1>
                        <div class="flex gap-2 items-center mb-7">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="17"
                                height="16"
                                viewBox="0 0 17 16"
                                fill="none"
                            >
                                <path
                                    d="M8.5 0L10.4084 5.87336L16.584 5.87336L11.5878 9.50329L13.4962 15.3766L8.5 11.7467L3.50383 15.3766L5.41219 9.50329L0.416019 5.87336L6.59163 5.87336L8.5 0Z"
                                    fill="#FEB20E"
                                />
                            </svg>
                            <!-- <p>
                                {{ product.rating }} | Terjual
                                {{ product.sold }}
                            </p> -->
                        </div>
                        <div class="flex gap-3 items-center mb-20">
                            <img
                                src="/assets/product.png"
                                class="h-10 w-10 object-cover rounded-full"
                                alt=""
                            />
                            <p class="text-2xl font-semibold">
                                {{ product.user.name }}
                            </p>
                        </div>
                        <div class="flex justify-between items-center">
                            <p class="text-3xl font-semibold">
                                {{
                                    new Intl.NumberFormat("id-ID", {
                                        style: "currency",
                                        currency: "IDR",
                                        minimumFractionDigits: 0,
                                    }).format(product.price)
                                }}
                            </p>
                            <div class="text-center">
                                <Link
                                    :href="route('addToCart', product.id)"
                                    class="block cursor-pointer mx-auto bg-primary w-max text-white py-2.5 px-14 border border-primary rounded-full font-semibold hover:shadow-lg"
                                    >+ Keranjang</Link
                                >
                            </div>
                        </div>
                    </div>
                </div>

                <!-- description product -->
                <div class="grid grid-cols-5 gap-7 my-10">
                    <div class="col-span-3">
                        <h1 class="text-2xl font-medium mb-[.62rem]">
                            Deskripsi Produk
                        </h1>
                        <div
                            class="contents"
                            v-html="product.description"
                        ></div>
                    </div>
                    <div class="col-span-2">
                        <h1 class="text-2xl font-medium mb-[.62rem]">
                            Informasi Produk
                        </h1>
                        <div class="border_table">
                            <table>
                                <tr>
                                    <td>
                                        Anda akan mendapatkan publikasi
                                        elektronik dalam format PDF. Bukan
                                        produk fisik.
                                    </td>
                                </tr>
                                <!-- <tr>
                                    <td
                                        class="flex justify-between items-center"
                                    >
                                        <p class="font-medium">
                                            Rekomendasi level skill
                                        </p>
                                        <p>{{ product.level }}</p>
                                    </td>
                                </tr> -->
                                <tr>
                                    <td
                                        class="flex justify-between items-center"
                                    >
                                        <p class="font-medium">Tipe produk</p>
                                        <p>{{ product.type }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        class="flex justify-between items-center"
                                    >
                                        <p class="font-medium">Ukuran</p>
                                        <p>{{ product.sizeFile }}</p>
                                    </td>
                                </tr>
                                <!-- <tr>
                                    <td
                                        class="flex justify-between items-center"
                                    >
                                        <p class="font-medium">Panjang</p>
                                        <p>{{ product.pages }} pages</p>
                                    </td>
                                </tr> -->
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </CustomerLayout>
</template>

<script setup>
import CustomerLayout from "@/Layouts/CustomerLayout.vue";
import { Head, Link, usePage } from "@inertiajs/vue3";
import { ref } from "vue";

// const product = ref({
//     title: " How to Paint Watercolor Book 1: Design Paintings from Photos by Daniel Novotny (e-book)",
//     rating: 4.5,
//     sold: 100,
//     seller: "Arif Saputra",
//     price: 25000,
//     level: "Semua Level",
//     type: "e-book (PDF download)",
//     size: "3.89 MB",
//     pages: "100",
//     description: `<p>Learn to design paintings from photos in this step-by-step guide!</p>
// <ul>
//     <li>Analyze photo reference</li>
//     <li>Fix visual problems</li>
//     <li>Tell a story</li>
//     <li>Draw your subject correctly</li>
//     <li>Utilize positive &amp; negative space, perspective, light &amp; form</li>
//     <li>and more!</li>
// </ul>
// <p>About this book series</p>
// <p>The purpose of this book series is to provide the student with an easy-to-follow guide to the creative process. It maps the completion of one painting project from start to finish. The painting routine differs from artist to artist. But it&rsquo;s my belief that the creative process can be laid out as a set of universal steps.</p>
// <p>Book #1</p>
// <p>In Book #1 you&rsquo;ll learn about the challenges of working from a photo reference. You&rsquo;ll see how I analyze and transform my picture into a cohesive design. Yet my concern isn&rsquo;t purely visual. Painting is storytelling. You&rsquo;ll learn how I deal with narrative concerns as the design evolves.</p>
// <p>Book #2 (sold separately)</p>
// <p>Book #2 demonstrates the importance of value. In order for painting to make visual sense the painter must design a readable value pattern. You&rsquo;ll learn how I go about creating solid value patterns and understand how to approach value in your own designs.</p>
// <p>Book #3 (sold separately)</p>
// <p>In Book #3 everything comes together. Watercolor takes over the process of exploration. Two watercolor studies are demonstrated in full but more are shown to demonstrate the variety of ideas one subject offers. All of these experiences lead to the final full sheet demonstration which utilizes the most refined version of the design.</p>
// <p>For a prolific painting routine one needs knowledge, experience but also guidance. The purpose of this series is to accompany you on your journey and help you take that next step towards painting mastery. I hope that this series can help you establish or fine-tune your own painting practice and ultimately become a small part of your journey towards becoming your own, independent artist.</p>
// <p>Table of Contents</p>
// <p>1 Reference Photos &amp; Creativity</p>
// <p>2 Painting &amp; Storytelling</p>
// <p>3 Photo Reference Analysis</p>
// <p>1 How To Resolve Visual Clutter2 How To Create Narrative Hierarchy</p>
// <p>4 From Photo To Design</p>
// <p>1 Large Shapes First: The Gesture2 Analysis &amp; Spatial Distortion3 How To Fix Distorted Perspective</p>
// <p>5 The Painting Rectangle</p>
// <p>1 Context2 The Design Rectangle3 Positive &amp; Negative Space4 The Concept Of Integration</p>
// <p>6 Creative Solutions To Painting Problems</p>
// <p>1 Imagine Objects In Space2 Shapes As Puzzle Pieces3 Search The Neighborhood4 Perspective Doesn&rsquo;t Create Depth5 Light Vs. Form</p>
// <p>7 Design Paintings from Photos Cheat Sheet</p>
// <p><br></p>
// <p>PLEASE NOTE</p>
// <p>This is Book #1 in a 3-part series. By purchasing Book #1 you don&rsquo;t automatically gain access to parts 2 or 3 and will have to purchase them separately.</p>`,
// });

const { props } = usePage();
const product = ref(props.product);
</script>

<style scoped>
table {
    border-collapse: collapse;
    width: 100%;
    overflow: hidden;
}
.border_table {
    border-radius: 0.625rem;
    border: 1px solid #9b9b9b;
}

table tr td {
    padding: 0.62rem;
    border-bottom: 1px solid #9b9b9b;
    font-size: 0.875rem;
}

table tr:last-child td {
    border-bottom: none;
}
</style>

<style>
.contents ul {
    list-style-type: disc !important;
    padding-left: 1.5em !important;
}
</style>
