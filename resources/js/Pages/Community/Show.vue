<script setup>
import FrontLayout from "@/Layouts/FrontLayout.vue";
import helper from "@/helper";
import { Head, router } from "@inertiajs/vue3";
const props = defineProps({
    board: Object,
    page: Number,
    subTitle: String,
});
const back = () => {
    // window.history.back();
    router.get(
        route("community." + props.board.data.type, {
            page: props.page,
            cid: props.board.data.cid,
        })
    );
};
</script>

<template>
    <Head :title="board.data.title" />
    <FrontLayout title="Community" :sub-title="subTitle">
        <div class="mx-auto max-w-screen-lg py-16 px-4 sm:px-0 lg:px-0">
            <div
                class="border-t-2 border-t-gray-500 border-b border-gray-400 py-4 mb-8"
            >
                <h3 class="mb-2 text-2xl font-bold">
                    {{ board.data.title }}
                </h3>
                <p class="text-gray-500">
                    {{ board.data.name }} / {{ board.data.reg_date }}
                </p>
            </div>

            <div
                class="text-lg min-h-56 pb-8 border-b border-gray-400"
                v-html="helper.removeATags(board.data.content)"
            ></div>

            <div class="mt-4 flex justify-between">
                <button
                    class="inline-flex gap-1 items-center overflow-hidden rounded-md bg-white px-3 py-2.5 text-gray-800 border border-gray-700 hover:bg-gray-100"
                    @click="back"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="size-5"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0ZM3.75 12h.007v.008H3.75V12Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm-.375 5.25h.007v.008H3.75v-.008Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z"
                        />
                    </svg>

                    <span
                        class="text-sm font-medium transition-all group-hover:ms-4"
                    >
                        목록보기
                    </span>
                </button>
            </div>
        </div>
    </FrontLayout>
</template>
