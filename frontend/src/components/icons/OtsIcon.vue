<script setup>
import { icons } from './icons.js';

const props = defineProps({
    icon: {
        type: String,
        default: 'account',
    },
    color: {
        type: String,
        default: 'black',
    },
    size: {
        type: String,
        default: 48,
    },
});

const findIcon = () => {
    const ico = icons.find(a => a.name === props.icon);
    if (ico) {
        return ico.path;
    } else {
        return icons[0].path;
    }
}

</script>

<template>
    <svg xmlns="http://www.w3.org/2000/svg"
        :height="size"
        :fill="color"
        viewBox="0 -960 960 960"
        :width="size">
        {{ findIcon() }}
    </svg>
</template>
<style scoped>
:host {
    display: block;
    padding: auto;
}
</style>
