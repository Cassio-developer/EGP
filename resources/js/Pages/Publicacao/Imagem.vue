<template>
    <img class="w-full" :src="imagemUrl" :alt="legenda" />
    <p class="text-xs italic">{{ legenda }}</p>
</template>

<script setup>
const props = defineProps({
    imagemUrl: String,
    legenda: String,
});
</script>
