<template>
    <article class="flex flex-col shadow my-4">
        <!-- Article Image -->
        <!-- <a href="#" class="hover:opacity-75"> -->
        <!-- <a href="#" class="hover:opacity-75 px-4 pt-4"> -->
        <a href="#" class="hover:opacity-75 flex justify-center p-4">
            <slot name="imagem"/>
        </a>
        <div class="bg-white flex flex-col justify-start p-6">
            <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4"
                >
                <slot name="tag"/>
                </a
            >
            <a href="#" class="text-3xl font-bold hover:text-gray-700 pb-4"
                >
                <slot name="titulo"/>
                </a
            >
            <p href="#" class="text-sm pb-3">
                Por
                <a href="#" class="font-semibold hover:text-gray-800"
                >
                <slot name="autor"/></a
                >, Publicada dia <slot name="data"/>
            </p>
            <a href="#" class="pb-6"
                >
                <slot name="texto"/>
                </a
            >
            <a href="#" class="uppercase text-gray-800 hover:text-black"
                >Continuar Lendo <i class="fas fa-arrow-right"></i
            ></a>
        </div>
    </article>
</template>

<script setup>

</script>