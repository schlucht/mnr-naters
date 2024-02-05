<script setup>
import OtsImgCard from './OtsImgCard.vue';
import OtsInfoCard from './OtsInfoCard.vue';
</script>
<template>
    <div class="card-img">
        <OtsInfoCard />
        <OtsImgCard />
    </div>
    <div class="card-info">
        <OtsInfoCard />
    </div>
</template>
<style scoped>
.card-img {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    width: 100%;
    min-width: 35rem;
    box-shadow: 0 0 1rem rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
    cursor: pointer;
    margin-bottom: 2rem;
    overflow: hidden;
    grid-column: 1 / 3;
}

OtsInfoCard {
    flex: 1 auto;
}

OtsImgCard {
    flex: 1 auto;
}
</style>