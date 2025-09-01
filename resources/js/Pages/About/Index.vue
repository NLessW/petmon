<script setup>
import FrontLayout from "@/Layouts/FrontLayout.vue";
import { Head } from "@inertiajs/vue3";
</script>

<template>
    <Head title="소개" />
    <FrontLayout
        title="PETMON"
        sub-title="소개"
        bg="/images/bg-esg3.jpg"
        op="opacity-60"
    >
        <div class="max-w-screen-lg mx-auto py-24">
            <div class="mx-auto px-4 py-8 sm:px-6 sm:py-12 lg:px-8 lg:py-16">
                <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-16">
                    <div class="overflow-hidden rounded-lg sm:h-64 lg:h-full">
                        <img
                            alt=""
                            src="/images/sm-machine.png"
                            class="inset-0 w-full lg:w-72 h-full mx-auto"
                        />
                    </div>

                    <div class="lg:py-24">
                        <h2 class="text-3xl font-bold sm:text-5xl text-primary">
                            PETMON이란?
                        </h2>

                        <p class="mt-4 text-xl sm:text-2xl text-gray-600">
                            고품질 자원의 가치를 가진 투명 페트(PET)를 선별하고
                            수집하는 무인회수기입니다.
                        </p>
                    </div>
                </div>
            </div>
            <div class="mx-auto px-4 py-8 sm:px-6 sm:py-12 lg:px-8 lg:py-16">
                <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-16">
                    <div
                        data-aos="fade-up"
                        data-aos-duration="2000"
                        class="lg:py-24 order-last lg:order-1"
                    >
                        <p
                            class="mb-2 text-2xl sm:text-3xl text-primary/75 font-bold"
                        >
                            01
                        </p>
                        <h2 class="text-2xl font-bold sm:text-3xl w-52">
                            띠 분리기를 통한 순수한 재질을 수집할 수 있습니다.
                            <p class="text-xl font-normal mt-4">
                                손으로 제거하기 어려운 잔여 띠를 PETMON만의
                                기술을 활용하여 제거합니다.
                            </p>
                        </h2>
                    </div>
                    <div
                        class="h-64 overflow-hidden rounded-lg sm:h-80 lg:h-full lg:order-2"
                    >
                        <img
                            alt=""
                            src="/images/sm-pet.jpg"
                            class="inset-0 h-full w-full object-cover"
                        />
                    </div>
                </div>
            </div>
            <div class="mx-auto px-4 py-8 sm:px-6 sm:py-12 lg:px-8 lg:py-16">
                <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-16">
                    <div
                        data-aos="fade-up"
                        data-aos-duration="2000"
                        class="lg:py-24 order-last lg:order-2"
                    >
                        <p
                            class="mb-2 text-2xl sm:text-3xl text-primary/75 font-bold"
                        >
                            02
                        </p>
                        <h2 class="text-2xl font-bold sm:text-3xl w-52">
                            AI 기술을 통해 투입된 자원이 선별됩니다.
                        </h2>
                    </div>
                    <div
                        class="h-64 overflow-hidden rounded-lg sm:h-80 lg:h-full lg:order-1"
                    >
                        <img
                            alt=""
                            src="/images/sm-ai.jpg"
                            class="inset-0 h-full w-full object-cover"
                        />
                    </div>
                </div>
            </div>
            <div class="mx-auto px-4 py-8 sm:px-6 sm:py-12 lg:px-8 lg:py-16">
                <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-16">
                    <div
                        data-aos="fade-up"
                        data-aos-duration="2000"
                        class="lg:py-24 order-last lg:order-1"
                    >
                        <p
                            class="mb-2 text-2xl sm:text-3xl text-primary/75 font-bold"
                        >
                            03
                        </p>
                        <h2 class="text-2xl font-bold sm:text-3xl w-52">
                            PET를 파쇄하여 효율적으로 운송하고 탄소 배출을
                            줄입니다.
                        </h2>
                    </div>
                    <div
                        class="relative h-64 overflow-hidden rounded-lg sm:h-80 lg:h-full lg:order-2"
                    >
                        <!-- <img
                            alt=""
                            src="/images/sm-pet2.jpg"
                            class="inset-0 h-full object-cover"
                        /> -->

                        <div
                            class="absolute inset-0 bg-black opacity-10 border border-red-400"
                        ></div>
                        <div
                            class="pt-6 lg:pt-24 h-96 sm:h-full bg-cover bg-center"
                            style="background-image: url(/images/sm-pet2.jpg)"
                        >
                            <div
                                class="relative max-w-screen-lg mx-auto px-2 lg:px-6"
                            >
                                <div class="relative overflow-x-auto">
                                    <table
                                        class="w-full text-lg text-left rtl:text-right text-gray-700 dark:text-gray-400"
                                    >
                                        <tbody>
                                            <tr
                                                class="bg-white/90 border-b dark:bg-gray-800 dark:border-gray-700"
                                            >
                                                <th
                                                    scope="row"
                                                    class="px-6 py-4 font-normal text-gray-900 whitespace-nowrap dark:text-white"
                                                >
                                                    압축
                                                </th>
                                                <td class="px-6 py-4">
                                                    부피 1/3로 감소
                                                </td>
                                            </tr>
                                            <tr
                                                class="bg-white/90 dark:bg-gray-800"
                                            >
                                                <th
                                                    scope="row"
                                                    class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap dark:text-white"
                                                >
                                                    파쇄
                                                </th>
                                                <td class="px-6 py-4 font-bold">
                                                    부피 1/30로 감소
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-auto px-4 py-8 sm:px-6 sm:py-12 lg:px-8 lg:py-16">
                <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-16">
                    <div
                        data-aos="fade-up"
                        data-aos-duration="2000"
                        class="lg:py-24 order-last lg:order-2"
                    >
                        <p
                            class="mb-2 text-2xl sm:text-3xl text-primary/75 font-bold"
                        >
                            04
                        </p>
                        <h2 class="text-2xl font-bold sm:text-3xl w-52">
                            자원을 투입하면 포인트가 제공됩니다.
                        </h2>
                    </div>
                    <div
                        class="h-64 overflow-hidden rounded-lg sm:h-80 lg:h-full lg:order-1"
                    >
                        <img
                            alt=""
                            src="/images/sm-coin.jpg"
                            class="inset-0 h-full w-full object-cover"
                        />
                    </div>
                </div>
            </div>
        </div>
        <section class="py-10 bg-gray-50 sm:py-16 lg:py-24">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="max-w-2xl mx-auto text-center">
                    <h2
                        data-aos="fade-up"
                        data-aos-duration="1500"
                        class="text-3xl font-bold leading-tight text-primary sm:text-4xl lg:text-5xl"
                    >
                        우리가 만드는 탄소중립 이야기
                    </h2>
                    <p
                        class="max-w-md mx-auto mt-4 text-xl font-semibold leading-relaxed text-gray-600"
                    >
                        PETMON 연간 기대 효과(300대 기준)
                    </p>
                </div>

                <div
                    class="grid grid-cols-1 gap-6 mx-auto mt-8 text-center md:max-w-5xl sm:grid-cols-3 md:gap-8 sm:mt-16"
                >
                    <div
                        class="relative overflow-hidden bg-transparent border-2 border-gray-100 rounded-md"
                    >
                        <div class="px-4 py-5 lg:p-8 bg-primary">
                            <p class="text-lg font-medium text-gray-200">
                                자원회수량
                            </p>
                            <p class="mt-4 text-5xl font-bold text-white">
                                8,600 kg
                            </p>
                        </div>
                    </div>

                    <div
                        class="relative overflow-hidden bg-transparent border-2 border-gray-100 rounded-md"
                    >
                        <div class="px-4 py-5 lg:p-8 bg-primary">
                            <p class="text-lg font-medium text-gray-200">
                                탄소감축량
                            </p>
                            <p class="mt-4 text-5xl font-bold text-white">
                                20.3 t
                            </p>
                        </div>
                    </div>

                    <div
                        class="relative overflow-hidden bg-transparent border-2 border-gray-100 rounded-md"
                    >
                        <div class="px-4 py-5 lg:p-8 bg-primary">
                            <p class="text-lg font-medium text-gray-200">
                                30년산 소나무 비교
                            </p>
                            <p class="mt-4 text-5xl font-bold text-white">
                                3088 그루
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div
                class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8 text-center text-gray-500 mt-8"
            >
                30년산 소나무 1그루는 1년간 약 6.6kg의 탄소를 흡수합니다.
            </div>
        </section>
    </FrontLayout>
</template>
