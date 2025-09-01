<script setup>
import Pagination from "@/Components/Pagination.vue";
import { Link } from "@inertiajs/vue3";
const props = defineProps({
    boards: Object,
    limit: Number,
    page: Number,
    cid: Number,
});
</script>
<template>
    <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6">
        <div v-for="(board, index) in boards.data" :key="index" class="group">
            <div
                class="bg-white rounded-md border border-gray-300 group-hover:shadow-lg"
            >
                <div class="relative">
                    <Link
                        :href="
                            route('community.show', {
                                board: board,
                            })
                        "
                    >
                        <img
                            v-if="!!board.image_url"
                            class="rounded-t-md w-full object-cover h-48"
                            :src="board.image_url"
                        />
                        <img
                            v-else
                            class="rounded-t-md w-full object-cover h-48 opacity-50"
                            src="/images/no-image.jpg"
                        />
                    </Link>
                </div>
                <div class="relative flex gap-4 py-4 px-2">
                    <div class="space-y-1">
                        <h2 class="text-lg font-semibold text-dark">
                            {{ board.title }}
                        </h2>
                        <p class="font-normal text-sm text-gray-400">
                            {{ board.reg_date }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-4 mx-auto">
        <Pagination :links="boards.meta.links" />
    </div>
</template>
