<script setup>
import NoData from "@/Components/NoData.vue";
import FrontLayout from "@/Layouts/FrontLayout.vue";
import CommunityGallery from "@/Sections/CommunityGallery.vue";
import { Head } from "@inertiajs/vue3";
const props = defineProps({
    boards: Object,
    limit: Number,
    page: Number,
});
</script>

<template>
    <Head title="포토 갤러리" />
    <FrontLayout
        title="Community"
        sub-title="포토 갤러리"
        bg="/images/bg-tree.jpg"
    >
        <div class="max-w-screen-lg mx-auto py-16">
            <div class="px-4 sm:px-0">
                <CommunityGallery
                    v-if="props.boards.data.length > 0"
                    :boards="props.boards"
                />
                <NoData v-else />
            </div>
        </div>
    </FrontLayout>
</template>
