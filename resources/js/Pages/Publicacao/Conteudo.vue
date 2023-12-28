<template>
    <p class="text-justify leading-6 my-4">
        {{ conteudo }}
    </p>
</template>

<script setup>
const props = defineProps({
    conteudo: String,
});
</script>
