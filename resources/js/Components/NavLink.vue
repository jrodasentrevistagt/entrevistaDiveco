<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    href: String,
    active: Boolean,
    activeClass: {
        type: String,
        default: 'border-secondary text-primary'
    },
});

const classes = computed(() => {
    return props.active
        ? `inline-flex items-center px-1 pt-1 border-b-2 ${props.activeClass} text-sm font-medium leading-5 focus:outline-none transition duration-150 ease-in-out`
        : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 hover:border-gray-300 focus:outline-none transition duration-150 ease-in-out';
});
</script>

<template>
    <Link :href="href" :class="classes">
        <slot />
    </Link>
</template>
