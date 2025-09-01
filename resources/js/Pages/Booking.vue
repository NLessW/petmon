<script setup>
import FrontLayout from "@/Layouts/FrontLayout.vue";
import BookingForm from "@/Sections/BookingForm.vue";
import PageTitle from "@/Sections/PageTitle.vue";
import { Head } from "@inertiajs/vue3";
</script>

<template>
    <Head title="메인" />
    <FrontLayout>
        <div class="max-w-screen-xl mx-auto rounded-2xl pt-6 lg:pt-24">
            <PageTitle title="예약하기" sub-title="체험 예약" />
        </div>

        <!-- https://flowbite.com/docs/components/tabs/#full-width-tabs -->
        <div class="mb-12">
            <div class="sm:hidden px-2">
                <label for="tabs" class="sr-only">메뉴선택</label>
                <select
                    id="tabs"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                >
                    <option>예약하기</option>
                    <option>예약 확인 및 수정</option>
                    <option>체험 견적</option>
                </select>
            </div>
            <ul
                class="hidden max-w-screen-lg mx-auto text-md font-bold text-center text-gray-500 rounded-lg shadow sm:flex dark:divide-gray-700 dark:text-gray-400"
            >
                <li class="w-full focus-within:z-10">
                    <a
                        href="#"
                        class="inline-block w-full p-4 text-primary bg-white border border-gray-200 dark:border-gray-700 rounded-s-lg focus:ring-4 focus:ring-blue-300 active focus:outline-none dark:bg-gray-700 dark:text-white"
                        aria-current="page"
                        >예약하기</a
                    >
                </li>
                <li class="w-full focus-within:z-10">
                    <a
                        href="#"
                        class="inline-block w-full p-4 bg-gray-100 border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                        >예약 확인 및 수정</a
                    >
                </li>
                <li class="w-full focus-within:z-10">
                    <a
                        href="#"
                        class="inline-block w-full p-4 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                        >체험 견적</a
                    >
                </li>
            </ul>
        </div>

        <BookingForm />

        <!-- <div
            class="mx-auto mt-8 rounded-xl bg-gray-50 border-t border-gray-100 border-b mb-8"
        >
            <div class="max-w-screen-xl mx-auto">
                <HomeVideo />
            </div>
        </div>

        <div class="max-w-screen-xl mx-auto">
            <HomeNews />
        </div> -->
    </FrontLayout>
</template>
