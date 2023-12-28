<template>
    <Layout>
        <section class="container mx-auto w-1/2 my-10">
            <Header :titulo="publicacao.titulo" :data="publicacao.createdAt" />
            <Imagem
                :imagem-url="publicacao.imagem"
                :legenda="publicacao.legenda"
            />
            <Conteudo :conteudo="publicacao.conteudo" />
        </section>
    </Layout>
</template>

<script setup>
import Layout from "../Shared/Layout.vue";
import Header from "./Header.vue";
import Imagem from "./Imagem.vue";
import Conteudo from "./Conteudo.vue";

const props = defineProps({
    publicacao: Object,
});
</script>
