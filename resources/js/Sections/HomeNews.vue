<script setup>
import MainGallery from "@/Components/MainGallery.vue";
import MainNews from "@/Components/MainNews.vue";
defineProps({
    notices: Object,
    gallery: Object,
    newsroom: Object,
});
</script>
<!-- https://tailus.io/blocks/team -->
<!-- https://tailus.io/blocks/blog -->
<template>
    <div class="py-16">
        <div class="xl:container m-auto px-6 text-gray-600 xl:px-0">
            <div class="grid gap-12 md:gap-6 md:grid-cols-2 lg:gap-12">
                <div class="space-y-6">
                    <MainNews title="공지사항" :notices="notices" />
                </div>
                <div class="grid gap-12 md:gap-6 md:grid-cols-2 lg:gap-12">
                    <div class="space-y-6">
                        <MainGallery
                            title="포토갤러리"
                            :item="gallery"
                            routeUrl="community.gallery"
                        />
                    </div>
                    <div class="space-y-6">
                        <MainGallery
                            title="뉴스룸"
                            :item="newsroom"
                            routeUrl="community.newsroom"
                        />
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
