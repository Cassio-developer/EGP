<template>
    <h1 class="text-4xl font-bold">{{ titulo }}</h1>
    <p class="text-xs my-1">Publicado em {{ dataPublicacao }}</p>
</template>

<script setup>
const props = defineProps({
    titulo: String,
    dataPublicacao: String,
});
</script>
