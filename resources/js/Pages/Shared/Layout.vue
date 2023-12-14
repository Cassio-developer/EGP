<template>
    <section>
        <Header />
        <Navbar />
    </section>
    <section>
        <slot />
    </section>
</template>
<script setup>
import Header from "../../Components/Header.vue";
import Navbar from "../../Components/Navbar.vue";
</script>
