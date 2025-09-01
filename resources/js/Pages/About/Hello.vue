<script setup>
import FrontLayout from "@/Layouts/FrontLayout.vue";
import { Head } from "@inertiajs/vue3";
</script>

<template>
    <Head title="인사말" />
    <FrontLayout
        title="PETMON"
        sub-title="인사말"
        bg="/images/bg-building2.jpg"
        op="opacity-50"
    >
        <!-- <div class="max-w-screen-xl mx-auto py-8">인사말</div> -->
        <div class="mx-auto max-w-screen-lg px-4 py-16 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:h-screen lg:grid-cols-2">
                <div class="relative z-10 lg:py-16">
                    <div class="relative h-64 sm:h-80 lg:h-full">
                        <img
                            alt=""
                            src="/images/sm-esg3.jpg"
                            class="absolute inset-0 h-full w-full object-cover"
                        />
                    </div>
                </div>

                <div class="relative flex items-center bg-green-700">
                    <span
                        class="hidden lg:absolute lg:inset-y-0 lg:-start-16 lg:block lg:w-16 lg:bg-green-700"
                    ></span>

                    <div class="p-8 sm:p-16 lg:p-14">
                        <h2
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            class="text-2xl font-bold sm:text-3xl text-white"
                        >
                            지구를 구하는 우리만의 이야기, PETMON 홈페이지를
                            방문해 주셔서 감사합니다.
                        </h2>

                        <div data-aos="fade-up" data-aos-duration="2000">
                            <p class="text-xl mt-8 text-gray-100">
                                PETMON은 자원순환 체계를 확립하기 위해서 각
                                기업과 협력을 통해 투명 페트병 무인회수기를
                                설치하여 고품질 자원 수집에 최선을 다하고
                                있습니다. 버려지는 쓰레기의 양을 줄이고 투명
                                페트병이 다시 투명 페트병으로 순환하는 구조
                                “Bottle to bottle”를 실현하기 위해 사명감을
                                가지고 땀 흘리겠습니다.
                            </p>

                            <p class="text-xl mt-4 text-gray-100">
                                또한, ESG리더 양성 프로그램을 통해 아이들에게
                                재밌게 다가가 기후 위기에 공감하고 탄소중립을
                                실천할 수 있는 미래의 환경 시민으로 성장할 수
                                있도록 교육할 것입니다.
                            </p>
                            <!-- <p class="text-xl mt-8 text-gray-200">
                                - Social Coop ESG 임직원 일동 -
                            </p> -->
                        </div>

                        <!-- <a
                            href="#"
                            class="mt-8 inline-block rounded border border-indigo-600 bg-indigo-600 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-indigo-600 focus:outline-none focus:ring active:text-indigo-500"
                        >
                            Get in Touch
                        </a> -->
                    </div>
                </div>
            </div>
        </div>
    </FrontLayout>
</template>
