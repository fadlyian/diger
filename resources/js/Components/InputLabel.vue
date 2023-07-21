<script setup>
defineProps({
    value: {
        type: String,
    },
    isRequired: {
        type: Boolean,
    },
});
</script>

<template>
    <label class="block text-black">
        <span v-if="value"
            >{{ value
            }}<span v-if="isRequired" class="text-danger">*</span></span
        >
        <span v-else><slot /></span>
    </label>
</template>
