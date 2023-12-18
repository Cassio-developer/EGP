<template>
    <v-card
      class="mx-auto"
      max-width="500"
    >
      <v-img
        class="align-end text-white"
        height="250"
        :src="post.imagem"
        cover
      >
        <v-card-title class="bg-blue-800/95 font-weight-bold">{{ post.tag }}</v-card-title>
      </v-img>
  
      <v-card-item class="h-12 pt-3">
        <v-card-title class="h-8 font-weight-bold">{{ post.titulo }}</v-card-title>
      </v-card-item>

      <v-card-subtitle>
        {{ post.data }}
      </v-card-subtitle>
  
      <v-card-text class="h-32">
        <div>{{ post.texto.length > 50 ? post.texto.substring(0, 200 - 3) + "..." : post.texto }}</div>
      </v-card-text>
  
      <v-card-actions>
        <v-btn 
            color="indigo-darken-1"
            append-icon="mdi-arrow-right-thick"
            :href='post.url'
            class="font-family-karla"
        >
            Continuar Lendo
        </v-btn>
      </v-card-actions>
    </v-card>
</template>

<script setup>
import { computed } from 'vue';

const props = defineProps({
  post: Object
})

//dá pra colocar pra selecionar cor da tag no formulário de cadastro de noticia tbm né, aí pega pela noticia.tagCor por exemplo
const cores = {
    'Palestra': 'bg-blue-600/90',
    'Roda de Conversa': 'bg-green-600/90',
    'Seminário': 'bg-yellow-600/90',
    'Curso': 'bg-red-600/90',
    'Reunião': 'bg-orange-500/90',
    'Ciclo de Formação': 'bg-blue-400/90'
 };

const corDaTag = computed(() => {
    return cores[props.post.tag] || 'bg-black/50';
});

</script>

<style>
@import url("https://fonts.googleapis.com/css?family=Karla:400,700&display=swap");

.font-family-karla {
    font-family: karla;
}

.v-card-subtitle {
    font-size: 0.85rem;
}

/*alinha no topo*/
.v-card .v-img__img--cover {
  object-position: top;
}
</style>
