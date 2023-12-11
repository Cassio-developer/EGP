<template>
    <nav class="w-full py-2 border-t border-b bg-gray-100">
        <div class="block sm:hidden">
            <a
                href="#"
                class="md:hidden text-base font-bold uppercase text-center flex justify-center items-center"
                @click="menuAberto = !menuAberto"
            >
                Menu ☰
            </a>
        </div>
        <div
            :class="menuAberto ? 'block' : 'hidden'"
            class="w-full flex-grow sm:flex sm:items-center sm:w-auto"
        >
            <div
                class="w-full container mx-auto flex flex-col sm:flex-row items-center justify-center text-sm font-bold uppercase mt-0 px-6 py-2"
            >
                <navlink
                    v-for="(link, index) in menuLinks"
                    :key="index"
                    :active="false"
                    :href="link.url"
                >
                    {{ link.nome }}
                </navlink>
            </div>
        </div>
    </nav>
</template>

<script setup>
import { ref } from "vue";
import Navlink from "./NavLink.vue";

const menuAberto = ref(false);
const menuLinks = [
    { nome: "Início", url: "#" },
    { nome: "Cursos", url: "#" },
    { nome: "Notícias", url: "#" },
    { nome: "Institucional", url: "#" },
    { nome: "Contato", url: "#" },
];
</script>
