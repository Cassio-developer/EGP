<template>
    <nav class="w-full py-2 border-t border-b bg-gray-100">
        <div class="block sm:hidden">
            <a
                href="#"
                class="md:hidden text-base font-bold uppercase text-center flex justify-center items-center"
                @click="open = !open"
            >
                Menu ☰
            </a>
        </div>
        <div
            :class="open ? 'block' : 'hidden'"
            class="w-full flex-grow sm:flex sm:items-center sm:w-auto"
        >
            <div
                class="w-full container mx-auto flex flex-col sm:flex-row items-center justify-center text-sm font-bold uppercase mt-0 px-6 py-2"
            >
                <a href="#" class="hover:bg-gray-400 rounded py-2 px-4 mx-2"
                    >Início</a
                >
                <a href="#" class="hover:bg-gray-400 rounded py-2 px-4 mx-2"
                    >Institucional</a
                >
                <a href="#" class="hover:bg-gray-400 rounded py-2 px-4 mx-2"
                    >Cursos</a
                >
                <a href="#" class="hover:bg-gray-400 rounded py-2 px-4 mx-2"
                    >Notícias</a
                >
                <a href="#" class="hover:bg-gray-400 rounded py-2 px-4 mx-2"
                    >Contato</a
                >
            </div>
        </div>
    </nav>
</template>

<script setup>
import { ref } from "vue";
const open = ref(false);
</script>
