
<template>
    <Head title="Log in" />
  
    <CardAutenticacao>
  
      <div class="flex items-center justify-center">
      
      </div>
  
      <br>
  
      <div class="flex flex-col items-center justify-center">
        <h2 class="text-2xl font-bold mb-4">Login</h2>
      </div>
  
      <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
        {{ status }}
      </div>
  
    </CardAutenticacao>
  </template>
  
<script setup>
import CardAutenticacao from "@/Componentes/Card-Autenticacao.vue";

defineProps({
});


</script>