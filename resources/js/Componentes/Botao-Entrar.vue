<script setup>
defineProps({
    tipo: {
        tipo: String,
        padrao: 'submit',
    },
});
</script>

<template>
    <button    class="mb-3 inline-block w-full rounded px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_rgba(0,0,0,0.2)] transition duration-150 ease-in-out hover:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:outline-none focus:ring-0 active:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)]"
                                                type="button" data-te-ripple-init data-te-ripple-color="light" style="
                        /* background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593); */
                        background: linear-gradient(to right, #2f59f0, #2949e1, #3665dd, #213ae1)">
        <slot />
    </button>
</template>
