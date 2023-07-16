<template>
    <section id="slogan">
        <div class="box_slogan py-6">
            <h1
                class="text-center text-white text-[1.75rem] font-bold w-3/5 mx-auto"
            >
                Bersama Digi, siapa pun dapat memperoleh uang secara online.
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
</template>

<style scoped>
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
</style>
