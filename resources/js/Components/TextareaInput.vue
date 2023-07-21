<script setup>
import { onMounted, ref } from "vue";

defineProps({
    modelValue: {
        type: String,
        required: true,
    },
    placeholder: {
        type: String,
    },
});

defineEmits(["update:modelValue"]);

const input = ref(null);

onMounted(() => {
    if (input.value.hasAttribute("autofocus")) {
        input.value.focus();
    }
});

defineExpose({ focus: () => input.value.focus() });
</script>

<template>
    <textarea
        class="border border-gray-400 focus:border-primary focus:ring-primary placeholder:text-gray-400 rounded-3xl px-6 py-3 shadow-sm"
        :value="modelValue"
        rows="5"
        @input="$emit('update:modelValue', $event.target.value)"
        :placeholder="placeholder"
        ref="input"
    ></textarea>
</template>
