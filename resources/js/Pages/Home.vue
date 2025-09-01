<script setup>
import FrontLayout from "@/Layouts/FrontLayout.vue";
import HomeContact from "@/Sections/HomeContact.vue";
import HomeNews from "@/Sections/HomeNews.vue";
import HomePartner from "@/Sections/HomePartner.vue";
import HomeSlider from "@/Sections/HomeSlider.vue";
import { Head } from "@inertiajs/vue3";

defineProps({
    notices: Object,
    gallery: Object,
    newsroom: Object,
});
</script>

<template>
    <Head title="메인" />
    <FrontLayout>
        <div class="max-w-screen-xl mx-auto rounded-2xl pt-6 lg:pt-24">
            <HomeSlider />
        </div>

        <div class="max-w-screen-xl mx-auto">
            <HomeContact />
        </div>

        <div class="max-w-screen-xl mx-auto">
            <HomeNews
                :notices="notices"
                :gallery="gallery"
                :newsroom="newsroom"
            />
        </div>
        <div class="max-w-screen-xl mx-auto py-8">
            <HomePartner />
        </div>
    </FrontLayout>
</template>
