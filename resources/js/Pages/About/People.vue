<script setup>
import FrontLayout from "@/Layouts/FrontLayout.vue";
import people from "@/people";
import { Head } from "@inertiajs/vue3";
</script>

<template>
    <Head title="함께하는 사람들" />
    <FrontLayout
        title="PETMON"
        sub-title="함께하는 사람들"
        bg="/images/bg-building2.jpg"
        op="opacity-50"
    >
        <div class="mx-auto max-w-screen-lg px-4 py-24 sm:px-6 lg:px-8">
            <div class="text-center text-2xl lg:text-3xl text-primary">
                우수한 협력기업과 함께 더 나은 지구를 만듭니다.
            </div>
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8 py-16">
                <!-- <div class="max-w-2xl mx-auto text-center">
                    <h2
                        class="text-2xl font-bold text-gray-800 sm:text-4xl sm:leading-tight"
                    >
                        Trusted by world class companies, design teams & popular
                        designers
                    </h2>
                </div> -->

                <div
                    data-aos="flip-up"
                    data-aos-duration="1500"
                    class="grid items-center max-w-4xl grid-cols-2 mx-auto md:grid-cols-3 gap-x-10 gap-y-16"
                >
                    <div
                        v-for="(item, index) in people"
                        :key="index"
                        class="text-center"
                    >
                        <img
                            class="object-contain w-full mx-auto"
                            :src="item.logo"
                            alt=""
                        />
                        <div class="text-center mt-4 font-bold">
                            {{ item.name }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </FrontLayout>
</template>
