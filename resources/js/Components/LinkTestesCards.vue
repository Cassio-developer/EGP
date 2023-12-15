<template>
    <section class="flex gap-4 mt-16 items-center text-white">
        <Link 
            :href="'/testeCards'" 
            :class="{ 'bg-red-500 p-2': $page.component === 'TesteCards', 'bg-blue-500 p-2': $page.component !== 'TesteCards' }"
        >
            Teste Grid com 3 Cards
        </Link>

        <Link 
            :href="'/testeCards2'" 
            :class="{ 'bg-red-500 p-2': $page.component === 'TesteCards2', 'bg-blue-500 p-2': $page.component !== 'TesteCards2' }"
        >
            Teste Grid com 2 Imagens grandes e 3 Cards
        </Link>

        <Link 
            :href="'/testeCards3'" 
            :class="{ 'bg-red-500 p-2': $page.component === 'TesteCards3', 'bg-blue-500 p-2': $page.component !== 'TesteCards3' }"
        >
            Teste Grid com 2 Cards grandes e 3 Cards
        </Link>

        <Link 
            :href="'/testeCardsSemTags'" 
            :class="{ 'bg-red-500 p-2': $page.component === 'TesteCardsSemTags', 'bg-blue-500 p-2': $page.component !== 'TesteCardsSemTags' }"
        >
            Teste Grid com 3 Cards sem Tag
        </Link>
    </section>
</template>

<script setup>

</script>
