<template>
    <Layout>
        <section class="container mx-auto w-1/2 my-10">
            <Header
                :titulo="publicacao.titulo"
                :data-publicacao="publicacao.createdAt"
            />
            <Imagem
                :imagem-url="publicacao.imagem"
                :legenda="publicacao.legenda"
            />
            <p class="text-justify leading-6 my-4">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                non sem non orci convallis condimentum. Nullam nisl mi, sagittis
                id ornare quis, ultricies in elit. Sed semper at leo nec
                convallis. Vestibulum malesuada lorem arcu, et condimentum est
                mollis nec. Vivamus semper turpis at sem sagittis porta. Orci
                varius natoque penatibus et magnis dis parturient montes,
                nascetur ridiculus mus. Donec vehicula venenatis vestibulum.
                Nulla ut interdum turpis. Fusce sed sem sed justo iaculis
                dignissim at in magna. Nulla finibus fermentum nibh sed auctor.
                Interdum et malesuada fames ac ante ipsum primis in faucibus.
                Fusce varius eros at lobortis lobortis. Morbi non imperdiet
                tortor, non porttitor lorem. Nullam justo nisi, finibus a nunc
                vitae, ornare ullamcorper tellus. Curabitur eget semper eros, ut
                cursus leo. Curabitur arcu felis, lacinia vitae felis id,
                sollicitudin viverra nulla. Cras vitae purus in nulla ultrices
                pellentesque sed eget velit. Suspendisse dictum tellus a aliquet
                rhoncus. Praesent cursus eros in venenatis feugiat. Donec a
                risus quis leo sodales semper a ac nisl. Maecenas imperdiet erat
                ut orci tempus posuere. Suspendisse enim felis, fringilla vel
                sem congue, porta ultrices ipsum. Mauris porttitor rutrum eros,
                at lacinia ante cursus quis. Nullam id interdum elit. Nulla
                dapibus congue ipsum, ac vulputate tortor consectetur ut. Sed
                cursus augue non nisl cursus, quis placerat mi consequat. Donec
                posuere laoreet risus, et egestas orci semper vitae.
            </p>
        </section>
    </Layout>
</template>

<script setup>
import Layout from "../Shared/Layout.vue";
import Header from "./Header.vue";
import Imagem from "./Imagem.vue";

const props = defineProps({
    publicacao: Object,
});
</script>
