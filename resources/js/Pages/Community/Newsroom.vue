<script setup>
import NoData from "@/Components/NoData.vue";
import FrontLayout from "@/Layouts/FrontLayout.vue";
import CommunityGallery from "@/Sections/CommunityGallery.vue";
import { Head, Link, router } from "@inertiajs/vue3";
const props = defineProps({
    boards: Object,
    limit: Number,
    page: Number,
    cid: Number,
});
</script>

<template>
    <Head title="뉴스룸" />
    <FrontLayout title="Community" sub-title="뉴스룸" bg="/images/bg-tree.jpg">
        <div class="max-w-screen-lg mx-auto py-16">
            <div class="w-fit mb-6 px-2 sm:px-0">
                <div class="sm:hidden">
                    <label for="Tab" class="sr-only">Tab</label>
                    <select
                        id="Tab"
                        class="w-full rounded-md border-gray-200 text-sm"
                        @change="
                            router.get(route('community.newsroom'), {
                                cid: $event.target.value,
                            })
                        "
                    >
                        <!-- <option>전체</option> -->
                        <option value="1" :selected="props.cid == 1">
                            보도자료
                        </option>
                        <option value="2" :selected="props.cid == 2">
                            협업 Project
                        </option>
                        <option value="3" :selected="props.cid == 3">
                            PETMON 기자단
                        </option>
                    </select>
                </div>

                <div class="hidden sm:block">
                    <div class="border-b border-gray-200">
                        <nav class="-mb-px flex gap-6" aria-label="Tabs">
                            <!-- <Link
                                :href="route('community.newsroom')"
                                class="shrink-0 border-b-2 px-1 pb-4 text-sm font-medium"
                                :class="{
                                    'border-sky-500 text-sky-600':
                                        props.cid == '',
                                    'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700':
                                        props.cid != '',
                                }"
                            >
                                전체
                            </Link> -->

                            <Link
                                :href="route('community.newsroom', { cid: 1 })"
                                class="shrink-0 border-b-2 px-1 pb-4 text-sm font-medium"
                                :class="{
                                    'border-sky-500 text-sky-600':
                                        props.cid == 1,
                                    'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700':
                                        props.cid != 1,
                                }"
                            >
                                보도자료
                            </Link>

                            <Link
                                :href="route('community.newsroom', { cid: 2 })"
                                class="shrink-0 border-b-2 px-1 pb-4 text-sm font-medium"
                                :class="{
                                    'border-sky-500 text-sky-600':
                                        props.cid == 2,
                                    'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700':
                                        props.cid != 2,
                                }"
                            >
                                협업 Project
                            </Link>

                            <Link
                                :href="route('community.newsroom', { cid: 3 })"
                                class="shrink-0 border-b-2 px-1 pb-4 text-sm font-medium"
                                :class="{
                                    'border-sky-500 text-sky-600':
                                        props.cid == 3,
                                    'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700':
                                        props.cid != 3,
                                }"
                                aria-current="page"
                            >
                                PETMON 기자단
                            </Link>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="px-4 sm:px-0">
                <CommunityGallery
                    v-if="props.boards.data.length > 0"
                    :boards="props.boards"
                    :limit="props.limit"
                    :page="props.page"
                    :cid="props.cid"
                />
                <NoData v-else />
            </div>
        </div>
    </FrontLayout>
</template>
