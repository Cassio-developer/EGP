<template>
    <v-carousel
        cycle
        interval="4000"
        height="400"
        show-arrows
        hide-delimiter-background
    >
        <template v-slot:prev="{ props }">
            <v-btn variant="elevated" color="#1e40af" @click="props.onClick">
                <v-icon icon="mdi-chevron-left"></v-icon>
            </v-btn>
        </template>
        <template v-slot:next="{ props }">
            <v-btn variant="elevated" color="#1e40af" @click="props.onClick">
                <v-icon icon="mdi-chevron-right"></v-icon>
            </v-btn>
        </template>
        <v-carousel-item
            v-for="(imagem, index) in imagens"
            :key="index"
            :src="imagem"
            cover
        />
    </v-carousel>
</template>

<script setup>
const imagens = [
    "https://picsum.photos/id/237/1920/1080",
    "https://picsum.photos/id/238/1920/1080",
    "https://picsum.photos/id/239/1920/1080",
    "https://picsum.photos/id/240/1920/1080",
    "https://picsum.photos/id/241/1920/1080",
];
</script>
