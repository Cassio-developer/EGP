<template>
    <section>
        <Header />
        <Navbar />
    </section>
    <section>
        <slot />
       
    </section>
    <section>
        <Footer></Footer>
    </section>
</template>
<script setup>
import Header from "../../Components/Header.vue";
import Navbar from "../../Components/Navbar.vue";
import Footer from "@/Pages/Paginas/Layout/Footer.vue";

</script>
