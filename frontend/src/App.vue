<script setup>

import { RouterView } from 'vue-router';
import OtsHeader from './components/OtsHeader.vue';
import OtsFooter from './components/OtsFooter.vue';

</script>

<template> 
<OtsHeader />
<RouterView />
<OtsFooter />
</template>

<style scoped>

</style>
