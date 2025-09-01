<script setup>
import FrontLayout from "@/Layouts/FrontLayout.vue";
import { Head } from "@inertiajs/vue3";
</script>

<template>
    <Head title="CI" />
    <FrontLayout
        title="PETMON"
        sub-title="CI"
        bg="/images/bg-building2.jpg"
        op="opacity-50"
    >
        <div class="mx-auto max-w-screen-lg px-4 py-16 sm:px-6 lg:px-8">
            <div class="mb-24">
                <h2
                    class="text-3xl font-bold leading-tight text-gray-700 sm:text-4xl lg:text-4xl mb-8"
                >
                    심벌마크
                </h2>
                <div
                    class="w-full lg:flex justify-between items-center mb-12 border border-gray-300 shadow-xl py-12"
                >
                    <img
                        src="/images/logo.svg"
                        alt="PETMON"
                        loading="lazy"
                        class="mx-auto w-52 max-w-52"
                    />
                </div>
                <p class="text-lg">
                    투명 페트병과 버스를 조합한 마크입니다. ESG경영을 실천하고
                    고품질 자원순환의 활성화를 위해 달리는 기업의 이미지를
                    상징합니다.
                </p>
            </div>
            <div class="mb-24">
                <h2
                    class="text-3xl font-bold leading-tight text-gray-700 sm:text-4xl lg:text-4xl mb-8"
                >
                    브랜딩문구
                </h2>
                <div
                    class="w-full lg:flex justify-between items-center mb-12 border border-gray-300 shadow-xl py-12"
                >
                    <img
                        src="/images/petmon-ci.svg"
                        alt="ESG"
                        loading="lazy"
                        class="mx-auto px-2 lg:px-12"
                    />
                </div>
                <p class="text-lg">
                    자사 프로그램 “으쓱버스”를 통해 투명 페트병의 고품질
                    자원순환을 사람들에게 알리고 “PETMON”을 통해 이를
                    실현함으로써 지구의 기후위기 문제를 해결하기 위해
                    노력하겠다는 의미가 담긴 문구입니다.
                </p>
            </div>
            <div class="mb-12">
                <h2
                    class="text-3xl font-bold leading-tight text-gray-700 sm:text-4xl lg:text-4xl mb-8"
                >
                    시그니처 조합
                </h2>
                <div
                    class="w-full lg:flex justify-center items-center mb-12 border border-gray-300 shadow-xl py-12"
                >
                    <div class="mx-auto px-2 lg:px-0">
                        <img
                            src="/images/petmon-ci2.svg"
                            alt="ESG"
                            loading="lazy"
                            class="mx-auto my-4 max-h-20"
                        />
                        <p class="text-center text-gray-600">로고 + 심벌마크</p>
                    </div>
                    <div class="mx-auto px-2 lg:x-0 mt-8 sm:mt-0">
                        <img
                            src="/images/petmon-esg.svg"
                            alt="ESG"
                            loading="lazy"
                            class="mx-auto my-4 max-h-20"
                        />
                        <p class="text-center text-gray-600">
                            브랜딩 문구 + 기업명
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </FrontLayout>
</template>
