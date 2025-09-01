<script setup>
import FrontLayout from "@/Layouts/FrontLayout.vue";
import DonationList from "@/Sections/DonationList.vue";
import SignIn from "@/Sections/SignIn.vue";
import { Head } from "@inertiajs/vue3";
defineProps({
    donations: Object,
    auth: Boolean,
});
</script>

<template>
    <Head title="기부 내역 확인" />
    <FrontLayout title="기부하기" sub-title="기부 내역 확인">
        <div class="mx-auto max-w-screen-lg px-4 py-16 sm:px-0 lg:px-0">
            <SignIn v-if="!auth" />
            <DonationList v-else :donations="donations" />
        </div>
    </FrontLayout>
</template>
