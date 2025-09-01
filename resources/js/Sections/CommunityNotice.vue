<script setup>
import Pagination from "@/Components/Pagination.vue";
import { Link } from "@inertiajs/vue3";
const props = defineProps({
    boards: Object,
    limit: Number,
    page: Number,
    cid: Number,
});
const boardNumber = (index) => {
    return (
        props.boards.meta.total - props.page * props.limit + props.limit - index
    );
};
</script>
<template>
    <table
        class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400"
    >
        <thead
            class="text-sm text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400 border-t-2 border-t-gray-500 border-b border-b-gray-400"
        >
            <tr>
                <th scope="col" class="px-6 py-3">NO</th>
                <th scope="col" class="px-6 py-3">제목</th>
                <th scope="col" class="px-6 py-3 hidden md:block">등록일</th>
            </tr>
        </thead>
        <tbody>
            <tr
                v-for="(board, index) in boards.data"
                :key="index"
                class="bg-white border-b border-gray-300 dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600"
            >
                <th
                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                >
                    {{ boardNumber(index) }}
                </th>
                <td class="px-6 py-4">
                    <Link
                        :href="
                            route('community.show', {
                                board: board,
                                page: props.page,
                                cid: props.cid,
                            })
                        "
                        class="text-sm md:text-base hover:underline hover:underline-offset-4"
                    >
                        {{ board.title }}
                    </Link>
                </td>
                <td class="px-6 py-4 hidden md:block">
                    {{ board.reg_date }}
                </td>
            </tr>
        </tbody>
    </table>

    <div class="mt-4 mx-auto">
        <Pagination :links="boards.meta.links" />
    </div>
</template>
