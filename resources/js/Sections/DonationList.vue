<script setup>
import Pagination from "@/Components/Pagination.vue";
import { router } from "@inertiajs/vue3";

defineProps({
    donations: Object,
});
const cancel = (id) => {
    if (!confirm("예약을 정말로 취소하시겠습니까?")) {
        return false;
    }

    router.patch(route("booking.cancel", { id: id }), {
        preserveScroll: true,
        onSuccess: (page) => {
            if (page.props.flash.success) {
                alert(page.props.flash.success);
                router.get(route("booking.index"));
            }
            if (page.props.flash.error) {
                alert(page.props.flash.error);
            }
        },
    });
};
</script>
<template>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table
            class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400"
        >
            <thead
                class="text-sm text-white uppercase bg-green-500 dark:bg-gray-700 dark:text-gray-400"
            >
                <tr>
                    <th scope="col" class="px-6 py-3 min-w-32">등록일</th>
                    <th scope="col" class="px-6 py-3 min-w-24">구분</th>
                    <th scope="col" class="px-6 py-3 min-w-24">결제방법</th>
                    <th scope="col" class="px-6 py-3 min-w-24">후원금</th>
                    <th scope="col" class="px-6 py-3 min-w-36">신청현황</th>
                </tr>
            </thead>
            <tbody class="text-gray-900">
                <tr
                    v-for="donation in donations.data"
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600"
                >
                    <th
                        scope="row"
                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                    >
                        {{ donation.reg_date }}
                    </th>
                    <td class="px-6 py-4">{{ donation.type }}</td>
                    <td class="px-6 py-4">{{ donation.pay_method }}</td>
                    <td class="px-6 py-4">{{ donation.donation }}</td>
                    <td
                        class="px-6 py-4 text-gray"
                        :class="{
                            'text-gray-500': donation.checked === 0,
                            'font-bold text-red-500': donation.checked === 1,
                        }"
                    >
                        {{ donation.status }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="mt-4">
        <Pagination :links="donations.meta.links" />
    </div>
</template>
