<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';

defineProps({
    areaParts: Object,
})
</script>

<template>
    <div>
        <label for="parts-select">Choose type of festival participation: </label>
        <select id="parts-select">
            <option selected disabled>Please select...</option>
            <optgroup v-for="(group, name) in areaParts" :label="name">
                <option v-for="option in group" :value="option.name">
                    {{ option.name }}
                </option>
            </optgroup>
        </select>
    </div>
</template>
