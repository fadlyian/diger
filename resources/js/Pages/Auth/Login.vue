<script setup>
import Checkbox from "@/Components/Checkbox.vue";
import GuestLayout from "@/Layouts/GuestLayout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    email: "",
    password: "",
    remember: false,
});

const submit = () => {
    form.post(route("login"), {
        onFinish: () => form.reset("password"),
    });
};
</script>

<template>
    <GuestLayout>
        <Head title="Log in" />

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <div class="w-2/5 px-14 flex flex-col justify-center">
            <h1
                class="text-[32px] leading-normal font-medium text-center mb-10"
            >
                Masuk ke akunmu
            </h1>
            <form @submit.prevent="submit">
                <div>
                    <InputLabel for="email" value="Email" isRequired="true" />

                    <TextInput
                        id="email"
                        type="email"
                        class="mt-1 block w-full"
                        v-model="form.email"
                        placeholder="Masukkan Email"
                        required
                        autofocus
                        autocomplete="username"
                    />

                    <InputError class="mt-2" :message="form.errors.email" />
                </div>

                <div class="mt-4">
                    <InputLabel
                        for="password"
                        value="Password"
                        isRequired="true"
                    />

                    <TextInput
                        id="password"
                        type="password"
                        class="mt-1 block w-full"
                        v-model="form.password"
                        placeholder="Masukkan Password"
                        required
                        autocomplete="current-password"
                    />

                    <InputError class="mt-2" :message="form.errors.password" />
                </div>

                <button
                    class="w-full mt-10 bg-primary hover:bg-primary-hover focus:bg-gray-700 active:bg-primary-active inline-flex items-center justify-center py-3 border border-transparent rounded-full font-semibold text-white uppercase tracking-wider focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
                    :class="{ 'opacity-25': form.processing }"
                    :disabled="form.processing"
                >
                    Masuk
                </button>

                <!-- <div class="block mt-4">
                    <label class="flex items-center">
                        <Checkbox
                            name="remember"
                            v-model:checked="form.remember"
                        />
                        <span class="ml-2 text-sm text-gray-600"
                            >Remember me</span
                        >
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <Link
                        v-if="canResetPassword"
                        :href="route('password.request')"
                        class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    >
                        Forgot your password?
                    </Link>

                    <PrimaryButton
                        class="ml-4"
                        :class="{ 'opacity-25': form.processing }"
                        :disabled="form.processing"
                    >
                        Log in
                    </PrimaryButton>
                </div> -->
            </form>
        </div>
        <div class="w-auto">
            <svg
                height="802"
                viewBox="0 0 746 802"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M50 164C22.3858 164 0 186.386 0 214V752C0 779.614 22.3858 802 50 802H696C723.614 802 746 779.614 746 752V50C746 22.3858 723.614 0 696 0H213C185.386 0 163 22.3858 163 50V114C163 141.614 140.614 164 113 164H50Z"
                    fill="black"
                    fill-opacity="0.2"
                />
            </svg>
        </div>
    </GuestLayout>
</template>
