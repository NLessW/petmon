<script setup>
import FrontLayout from "@/Layouts/FrontLayout.vue";
import { Head } from "@inertiajs/vue3";
</script>

<template>
    <Head title="우리의 ESG" />
    <FrontLayout
        title="ESG"
        sub-title="우리의 ESG"
        bg="/images/bg-esg4.jpg"
        op="opacity-50"
    >
        <div class="max-w-screen-lg mx-auto py-8">
            <div class="py-16">
                <!-- ESG 비전 -->
                <div class="bg-white py-6 sm:py-8 lg:py-12">
                    <div class="mx-auto max-w-screen-2xl px-4">
                        <div
                            class="flex flex-col overflow-hidden rounded-lg bg-green-100 sm:flex-row md:h-64 shadow-xl"
                        >
                            <!-- content - start -->
                            <div
                                class="flex w-full flex-col p-4 sm:w-1/2 sm:p-8 lg:w-3/5"
                            >
                                <h2
                                    class="mb-4 text-xl text-gray-800 md:text-xl"
                                >
                                    ESG 비전
                                </h2>

                                <p
                                    class="mb-8 max-w-md text-lg sm:text-3xl font-bold text-gray-900"
                                >
                                    지속가능한 탄소중립 실천 문화 정착
                                </p>
                            </div>
                            <!-- content - end -->

                            <!-- image - start -->
                            <div
                                class="order-first h-48 w-full bg-gray-700 sm:order-none sm:h-auto sm:w-1/2 lg:w-2/5"
                            >
                                <img
                                    src="/images/sm-esg3.jpg"
                                    loading="lazy"
                                    alt="Photo by Dom Hill"
                                    class="h-full w-full object-cover object-center"
                                />
                            </div>
                            <!-- image - end -->
                        </div>
                    </div>
                </div>

                <!-- 핵심가치 -->
                <div
                    class="container m-auto space-y-8 px-6 md:px-12 lg:px-10 mt-16 mb-24"
                >
                    <div>
                        <h2
                            class="mt-4 mb-16 text-center text-3xl font-bold text-gray-800 dark:text-white md:text-4xl"
                        >
                            핵심가치
                        </h2>
                    </div>
                    <div
                        class="grid gap-8 sm:grid-cols-2 md:-mx-8 lg:grid-cols-3"
                    >
                        <div
                            class="p-8 py-12 sm:p-10 rounded-3xl bg-white border border-gray-100 dark:shadow-none dark:border-gray-700 dark:bg-gray-800 bg-opacity-50 shadow-2xl shadow-gray-600/10"
                        >
                            <div class="space-y-16">
                                <div class="space-y-4">
                                    <h3
                                        class="text-2xl font-semibold text-gray-800 transition dark:text-white"
                                    >
                                        Environmental
                                    </h3>
                                    <p
                                        class="text-gray-600 dark:text-gray-300 text-xl"
                                    >
                                        탄소중립 선도
                                    </p>

                                    <ul
                                        class="max-w-md space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400"
                                    >
                                        <li>탄소감축</li>
                                        <li>자원순환 체계 확립</li>
                                        <li>미래의 환경 시민 양성</li>
                                    </ul>
                                </div>
                                <!-- <img
                                    src="https://cdn-icons-png.flaticon.com/512/7983/7983132.png"
                                    class="w-16"
                                    width="512"
                                    height="512"
                                    alt="burger illustration"
                                /> -->
                            </div>
                        </div>
                        <div
                            class="p-8 py-12 sm:p-10 rounded-3xl bg-white border border-gray-100 dark:shadow-none dark:border-gray-700 dark:bg-gray-800 bg-opacity-50 shadow-2xl shadow-gray-600/10"
                        >
                            <div class="space-y-16">
                                <div class="space-y-4">
                                    <h3
                                        class="text-2xl font-semibold text-gray-800 transition dark:text-white"
                                    >
                                        Social
                                    </h3>
                                    <p
                                        class="text-gray-600 dark:text-gray-300 text-xl"
                                    >
                                        사회가치 창출
                                    </p>
                                    <ul
                                        class="max-w-md space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400"
                                    >
                                        <li>
                                            자원순환 분야 양질의 일자리 창출
                                        </li>
                                        <li>협력과 인권 중심 경영</li>
                                        <li>지역 사회와 상생 추구</li>
                                    </ul>
                                </div>
                                <!-- <img
                                    src="https://cdn-icons-png.flaticon.com/512/7983/7983306.png"
                                    class="w-16"
                                    width="512"
                                    height="512"
                                    alt="burger illustration"
                                /> -->
                            </div>
                        </div>
                        <div
                            class="p-8 py-12 sm:p-10 rounded-3xl bg-white border border-gray-100 dark:shadow-none dark:border-gray-700 dark:bg-gray-800 bg-opacity-50 shadow-2xl shadow-gray-600/10"
                        >
                            <div class="space-y-16">
                                <div class="space-y-4">
                                    <h3
                                        class="text-2xl font-semibold text-gray-800 transition dark:text-white"
                                    >
                                        Governance
                                    </h3>
                                    <p
                                        class="text-gray-600 dark:text-gray-300 text-xl"
                                    >
                                        투명한 경영
                                    </p>
                                    <ul
                                        class="max-w-md space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400"
                                    >
                                        <li>투명한 지배구조 구축</li>
                                        <li>윤리적 기업 운영</li>
                                    </ul>
                                </div>
                                <!-- <img
                                    src="https://cdn-icons-png.flaticon.com/512/7983/7983333.png"
                                    class="w-16"
                                    width="512"
                                    height="512"
                                    alt="burger illustration"
                                /> -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 지속가능경영 보고서 -->
                <div
                    class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8 lg:py-16"
                >
                    <div
                        class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-16"
                    >
                        <div
                            class="relative h-64 overflow-hidden rounded-lg sm:h-80 lg:h-full"
                        >
                            <img
                                alt=""
                                src="/images/esg-report.svg"
                                class="absolute inset-0 h-full w-full object-cover"
                            />
                        </div>

                        <div class="lg:py-24">
                            <h2 class="text-3xl font-bold sm:text-4xl">
                                지속가능경영 보고서
                            </h2>

                            <p class="mt-4 text-gray-600">
                                지속가능한 발전을 위해
                                실천해온 활동들을 알리고자 보고서를 공개하고
                                있습니다.
                            </p>

                            <a
                                href="#"
                                class="mt-8 inline-block rounded bg-primary px-12 py-3 text-sm font-medium text-white transition hover:bg-primary/90 focus:outline-none focus:ring focus:ring-yellow-400"
                            >
                                2024 지속가능경영 보고서
                            </a>
                            <a
                                href="#"
                                class="mt-4 inline-block rounded bg-primary px-12 py-3 text-sm font-medium text-white transition hover:bg-primary/90 focus:outline-none focus:ring focus:ring-yellow-400"
                            >
                                2024 지속가능경영 보고서
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </FrontLayout>
</template>
