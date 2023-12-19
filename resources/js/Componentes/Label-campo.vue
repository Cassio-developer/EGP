<script setup>
defineProps({
    valor: String,
});
</script>

<template>
    <label class="block font-medium text-sm text-gray-700">
        <span v-if="valor">{{ valor }}</span>
        <span v-else><slot /></span>
    </label>
</template>
