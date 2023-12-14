<template>
    <Header />

    <!-- Topic Nav -->
    <nav
        class="w-full py-2 border-t border-b bg-gray-100"
        x-data="{ open: false }"
    >
        <div class="block sm:hidden">
            <a
                href="#"
                class="md:hidden text-base font-bold uppercase text-center flex justify-center items-center"
                @click="open = !open"
            >
                Menu
                <i
                    :class="open ? 'fa-chevron-down' : 'fa-chevron-up'"
                    class="fas ml-2"
                ></i>
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

    <v-carousel cycle height="400" hide-delimiter-background show-arrows>
        <v-carousel-item v-for="(slide, i) in slides" :key="i">
            <v-sheet :color="colors[i]" height="100%">
                <div class="d-flex fill-height justify-center align-center">
                    <div class="text-h2">{{ slide }} Slide</div>
                </div>
            </v-sheet>
        </v-carousel-item>
    </v-carousel>

    <div class="container mx-auto flex flex-wrap py-6">
        <section
            class="w-full md:w-2/3 flex flex-col items-center px-3 font-family-karla"
        >
            <Post v-for="post in posts">
                <template #imagem>
                    <img :src="post.imagem" />
                    <!-- <img :src="post.imagem" class="w-1/2"> -->
                </template>
                <template #tag>
                    {{ post.tag }}
                </template>
                <template #titulo>
                    {{ post.titulo }}
                </template>
                <template #autor>
                    {{ post.autor }}
                </template>
                <template #data>
                    {{ post.data }}
                </template>
                <template #texto>
                    {{
                        post.texto.length > 50
                            ? post.texto.substring(0, 250 - 3) + "..."
                            : post.texto
                    }}
                </template>
            </Post>
            <!-- </section> -->

            <!-- Pagination -->
            <div class="flex items-center py-8">
                <a
                    href="#"
                    class="h-10 w-10 bg-blue-800 hover:bg-blue-600 font-semibold text-white text-sm flex items-center justify-center"
                    >1</a
                >
                <a
                    href="#"
                    class="h-10 w-10 font-semibold text-gray-800 hover:bg-blue-600 hover:text-white text-sm flex items-center justify-center"
                    >2</a
                >
                <a
                    href="#"
                    class="h-10 w-10 font-semibold text-gray-800 hover:text-gray-900 text-sm flex items-center justify-center ml-5"
                    >Próxima <i class="fas fa-arrow-right ml-2"></i
                ></a>
            </div>
        </section>

        <!-- Sidebar Section -->
        <aside class="w-full md:w-1/3 flex flex-col items-center px-3">
            <div class="w-full bg-white shadow flex flex-col my-4 p-6">
                <p class="text-xl font-semibold pb-5">Sobre</p>
                <p class="pb-2">
                    A EGP é responsável pelas atividades de formação,
                    capacitação profissional e educação continuada dos/as
                    servidores/as, contemplando todas as práticas relacionadas à
                    aprendizagem no âmbito profissional, dentre elas,
                    treinamento, desenvolvimento, qualificação, atualização,
                    aperfeiçoamento, aprimoramento e educação
                </p>
                <a
                    href="#"
                    class="w-full bg-blue-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-4"
                >
                    Saiba mais
                </a>
            </div>

            <div class="w-full bg-white shadow flex flex-col my-4 p-6">
                <p class="text-xl font-semibold pb-5">Facebook</p>
                <div class="grid grid-cols-3 gap-3">
                    <img
                        class="hover:opacity-75"
                        src="https://source.unsplash.com/collection/1346951/150x150?sig=1"
                    />
                    <img
                        class="hover:opacity-75"
                        src="https://source.unsplash.com/collection/1346951/150x150?sig=2"
                    />
                    <img
                        class="hover:opacity-75"
                        src="https://source.unsplash.com/collection/1346951/150x150?sig=3"
                    />
                    <img
                        class="hover:opacity-75"
                        src="https://source.unsplash.com/collection/1346951/150x150?sig=4"
                    />
                    <img
                        class="hover:opacity-75"
                        src="https://source.unsplash.com/collection/1346951/150x150?sig=5"
                    />
                    <img
                        class="hover:opacity-75"
                        src="https://source.unsplash.com/collection/1346951/150x150?sig=6"
                    />
                    <img
                        class="hover:opacity-75"
                        src="https://source.unsplash.com/collection/1346951/150x150?sig=7"
                    />
                    <img
                        class="hover:opacity-75"
                        src="https://source.unsplash.com/collection/1346951/150x150?sig=8"
                    />
                    <img
                        class="hover:opacity-75"
                        src="https://source.unsplash.com/collection/1346951/150x150?sig=9"
                    />
                </div>
                <a
                    href="#"
                    class="w-full bg-blue-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-6"
                >
                    <i class="fab fa-facebook mr-2"></i> Escola de Gestão
                    Pública de São Leopoldo
                </a>
            </div>
        </aside>
    </div>

    <footer class="w-full border-t bg-white py-4">
        <div class="w-full container mx-auto flex flex-col items-center">
            <div class="flex flex-col p-6">
                <p>Escola de Gestão Pública de São Leopoldo</p>
                <p>Rua Princesa Isabel, 123 - Centro - São Leopoldo/RS</p>
                <p>Telefone: (51) 3635-1212</p>
                <p>Email: escola.gestao@saoleopoldo.rs.gov.br</p>
            </div>
        </div>
    </footer>

    <!-- </div> -->
</template>

<script setup>
import Header from "../Components/Header.vue";
import Post from "../Components/Post.vue";

const posts = [
    {
        tag: "Palestra",
        titulo: "Palestra Dezembro Verde",
        autor: "Luciana",
        data: "05/12/2023",
        texto: 'No dia 14 de dezembro, a Escola de Gestão Pública estará promovendo a palestra em alusão ao Dezembro Verde com o tema "Direito e Bem-estar Animal". O evento será ministrado pelo Prefeito em Exercício Cris Moraes, da cidade de Canoas/RS, no auditório da Escola de Gestão Pública, no 2° andar do Centro Administrativo, às 9h. A palestra será aberta aos servidores do município, membros do conselho e simpatizantes. Participe! 💚 Link de inscrições: https://docs.google.com/.../1AqNr4QjmE2UVQtuM.../viewform...',
        imagem: "https://scontent.fpoa14-1.fna.fbcdn.net/v/t39.30808-6/407917016_866180562178227_3682924500607780619_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=dd5e9f&_nc_ohc=WvVjBcf1Y5oAX8rSp_6&_nc_ht=scontent.fpoa14-1.fna&oh=00_AfD6FukBfydaPEucLmFmFmS7W1Vz8zFOXIdHeAFYMGq0Yg&oe=657E39A1",
    },
    {
        tag: "Reunião",
        titulo: "Reunião sobre Proteção Animal e Vigilâncias Ambientais ",
        autor: "Luciana",
        data: "21/11/2023",
        texto: "Na data de 20 de novembro de 2023, ocorreu uma reunião com a participação de Secretarias e Diretorias de Proteção Animal e Vigilâncias Ambientais dos municípios de Canoas, Esteio, Sapucaia do Sul, Estância Velha, Novo Hamburgo e São Leopoldo para tratar dos Protocolos de Atendimento dos casos de Esporotricose felina promovidas pelo COMBEM – Conselho Municipal de Proteção e Bem-Estar Animal e Secretaria Municipal de Proteção Animal de São Leopoldo-RS.",
        imagem: "https://scontent.fpoa14-1.fna.fbcdn.net/v/t39.30808-6/404551982_856902916439325_8169276876609972106_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=dd5e9f&_nc_ohc=wT9fHuEeO4AAX86iNGG&_nc_ht=scontent.fpoa14-1.fna&oh=00_AfBCwvIRPv9oqub9DAhbquxZ5rtFTta2BvybeQC9yVks1Q&oe=657DB35E",
    },
    {
        tag: "Seminário ",
        titulo: "O papel dos Conselhos na transversalidade das políticas para as mulheres",
        autor: "Luciana",
        data: "16/11/2023",
        texto: "EGP convida: Seminário sobre o papel dos Conselhos Municipais na transversalidade das políticas públicas para as mulheres. A atividade, promovida pelo Conselho Municipal dos Direitos da Mulher (COMDIM), Coletivo Feminino Plural e Secretaria Municipal de Políticas para Mulheres (SEPOM), com apoio da EGP, acontecerá no auditório da Escola de Gestão Pública de São Leopoldo. Inscrições abertas. Participe!",
        imagem: "https://scontent.fpoa14-1.fna.fbcdn.net/v/t39.30808-6/401659838_853745453421738_5753922918562217363_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=3635dc&_nc_ohc=4qiVHWAOOzAAX-1OgJs&_nc_ht=scontent.fpoa14-1.fna&oh=00_AfCFJgwVV7bObJFmYBUXYq9nwyd00ERfYAV9GyTj8OLtZA&oe=657DAFF8",
    },
];

// const props = defineProps({
//     posts: [
//         {tag: 'Reunião', titulo: 'Titulo 1', autor: 'Admin', data: '12/12/2023', texto: 'loremloremloremlorem loremlorem loremloremlorem loremlorem loremlorem'},
//         {tag: 'Reunião', titulo: 'Titulo 2', autor: 'Admin', data: '12/12/2023', texto: 'loremloremloremlorem loremlorem loremloremlorem loremlorem loremlorem'},
//         {tag: 'Reunião', titulo: 'Titulo 3', autor: 'Admin', data: '12/12/2023', texto: 'loremloremloremlorem loremlorem loremloremlorem loremlorem loremlorem'},
//         {tag: 'Reunião', titulo: 'Titulo 4', autor: 'Admin', data: '12/12/2023', texto: 'loremloremloremlorem loremlorem loremloremlorem loremlorem loremlorem'},
//         {tag: 'Reunião', titulo: 'Titulo 5', autor: 'Admin', data: '12/12/2023', texto: 'loremloremloremlorem loremlorem loremloremlorem loremlorem loremlorem'},
//     ]
// })

//carrossel
const colors = [
    "indigo",
    "warning",
    "pink darken-2",
    "red lighten-1",
    "deep-purple accent-4",
];
const slides = ["First", "Second", "Third", "Fourth", "Fifth"];
</script>

<style scoped>
@import url("https://fonts.googleapis.com/css?family=Karla:400,700&display=swap");

.font-family-karla {
    font-family: karla;
}
</style>
