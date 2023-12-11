<template>
    <Link class="hover:bg-gray-400 rounded py-2 px-4 mx-2">
        <slot />
    </Link>
</template>
<script setup>
import { Link } from "@inertiajs/vue3";
</script>
