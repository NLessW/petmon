<script setup>
// import FixedSidebar from "@/Sections/FixedSidebar.vue";
import Footer from "@/Sections/Footer.vue";
// import Header from "@/Sections/Header.vue";
import GnbHeader from "@/Sections/GnbHeader.vue";
import { initFlowbite } from "flowbite";
import { onMounted } from "vue";

defineProps({
    title: {
        type: String,
    },
    subTitle: {
        type: String,
    },
    bg: {
        type: String,
        default: "/images/bg-tree.jpg",
    },
    op: {
        type: String,
        default: "opacity-10",
    },
});

// initialize components based on data attribute selectors
onMounted(() => {
    initFlowbite();
});
</script>

<template>
    <!-- <Header /> -->
    <GnbHeader />

    <div v-if="!route().current('home')" class="relative">
        <div v-if="!route().current('about.index')">
            <div class="absolute inset-0 bg-black" :class="op"></div>
            <div
                class="pt-6 lg:pt-24 h-96 bg-cover bg-center"
                :style="{ 'background-image': 'url(' + bg + ')' }"
            >
                <div
                    class="relative max-w-screen-lg mx-auto pt-10 px-2 lg:px-0"
                >
                    <div class="text-xl text-gray-200">
                        {{ title }} <span class="px-1">|</span>
                        {{ subTitle }}
                    </div>
                    <h2 class="text-5xl font-bold mt-6 text-white">
                        {{ subTitle }}
                    </h2>
                </div>
            </div>
        </div>
        <div v-else>
            <div class="absolute inset-0 bg-black" :class="op"></div>
            <div
                class="pt-6 lg:pt-24 h-96 sm:h-[550px] bg-cover bg-center"
                :style="{ 'background-image': 'url(' + bg + ')' }"
            >
                <div
                    class="relative max-w-screen-lg mx-auto pt-10 px-2 lg:px-0 text-center"
                >
                    <h2
                        data-aos="fade-up"
                        data-aos-duration="1000"
                        class="text-3xl sm:text-5xl font-bold mt-24 text-white"
                    >
                        함께하는 자원순환 실천
                    </h2>
                    <div
                        data-aos="fade-up"
                        data-aos-duration="1500"
                        class="max-w-screen-sm text-lg sm:text-xl text-gray-200 mt-4 mx-auto"
                    >
                        PETMON은 생활 속 자원이 버려지지 않고 다시 쓰일 수
                        있도록 <br class="hidden sm:block" />자원순환을 알리고
                        실천합니다.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <slot />
    <Footer />
    <!-- <FixedSidebar /> -->
</template>
