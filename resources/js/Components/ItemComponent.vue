<template>

    <div class="bg-white p-6 rounded shadow-sm">
        <h4 class="text-2xl">Item: {{ item?.name }}</h4>
        <div class="text-gray-400">{{ item?.description }}</div>
    </div>

</template>

<script setup>

const prop = defineProps({
    item: Object
})

</script>
