<script setup>
import { Link } from "@inertiajs/vue3";
defineProps({
    links: Array,
});
</script>
<template>
    <!-- https://www.positronx.io/laravel-vue-inertia-pagination-integration-tutorial/ -->
    <div v-if="links.length > 3">
        <div class="flex flex-wrap -mb-1 py-3">
            <template v-for="(link, p) in links" :key="p">
                <div
                    v-if="link.url === null"
                    class="mr-1 px-3 py-2 md:px-4 md:py-3 text-sm leading-4 text-gray-400 border rounded"
                    v-html="link.label"
                />
                <Link
                    v-else
                    preserve-scroll
                    class="mr-1 px-3 py-2 md:px-4 md:py-3 text-sm leading-4 border rounded hover:bg-main hover:text-primary focus:border-primary cursor-pointer"
                    :class="{
                        'bg-primary text-white hover:text-white': link.active,
                    }"
                    :href="link.url"
                    v-html="link.label"
                />
            </template>
        </div>
    </div>
</template>
