<template>
    <div class="relative w-full h-96 overflow-hidden">
        <div
            v-for="(imagem, index) in imagens"
            :key="index"
            :class="{
                'opacity-100': index === indexImagem,
                'opacity-0': index !== indexImagem,
            }"
            class="absolute w-full h-full transition-opacity duration-500"
        >
            <img
                :src="imagem"
                alt="Carousel Photo"
                class="w-full h-full object-cover"
            />
        </div>

        <button
            @click="imagemAnterior"
            class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-blue-800 bg-opacity-50 text-white border-none cursor-pointer rounded-full flex items-center justify-center h-16 w-16 transition-background-color duration-300 hover:bg-opacity-75"
            aria-label="Previous Photo"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                class="w-8 h-8"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M15 19l-7-7 7-7"
                />
            </svg>
        </button>

        <button
            @click="proximaImagem"
            class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-blue-800 bg-opacity-50 text-white border-none cursor-pointer rounded-full flex items-center justify-center h-16 w-16 transition-background-color duration-300 hover:bg-opacity-75"
            aria-label="Next Photo"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                class="w-8 h-8"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M9 5l7 7-7 7"
                />
            </svg>
        </button>
    </div>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from "vue";

const imagens = ref([
    "https://picsum.photos/id/237/1920/1080",
    "https://picsum.photos/id/238/1920/1080",
    "https://picsum.photos/id/239/1920/1080",
    "https://picsum.photos/id/240/1920/1080",
    "https://picsum.photos/id/241/1920/1080",
]);

const indexImagem = ref(0);
let intervaloSlide;

const proximaImagem = () => {
    indexImagem.value = (indexImagem.value + 1) % imagens.value.length;
    resetarAutoSlide();
};

const imagemAnterior = () => {
    indexImagem.value =
        (indexImagem.value - 1 + imagens.value.length) % imagens.value.length;
    resetarAutoSlide();
};

const startAutoSlide = () => {
    intervaloSlide = setInterval(() => {
        proximaImagem();
    }, 3000);
};

const resetarAutoSlide = () => {
    clearInterval(intervaloSlide);
    startAutoSlide();
};

onMounted(startAutoSlide);
onUnmounted(() => clearInterval(intervaloSlide));
</script>
