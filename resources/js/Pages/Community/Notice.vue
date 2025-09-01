<script setup>
import NoData from "@/Components/NoData.vue";
import FrontLayout from "@/Layouts/FrontLayout.vue";
import CommunityNotice from "@/Sections/CommunityNotice.vue";
import { Head } from "@inertiajs/vue3";
const props = defineProps({
    boards: Object,
    limit: Number,
    page: Number,
});
</script>

<template>
    <Head title="공지사항" />
    <FrontLayout
        title="Community"
        sub-title="공지사항"
        bg="/images/bg-tree.jpg"
    >
        <div class="max-w-screen-lg mx-auto py-16">
            <div class="px-4 sm:px-0">
                <CommunityNotice
                    v-if="props.boards.data.length > 0"
                    :boards="props.boards"
                    :limit="props.limit"
                    :page="props.page"
                />
                <NoData v-else />
            </div>
        </div>
    </FrontLayout>
</template>
