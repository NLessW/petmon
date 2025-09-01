<script setup>
import { Carousel, Pagination, Slide } from "vue3-carousel";
import "vue3-carousel/dist/carousel.css";
</script>

<template>
    <Carousel
        :autoplay="3000"
        :wrap-around="true"
        :pause-autoplay-on-hover="false"
        :transition="300"
    >
        <Slide v-for="slide in 4" :key="slide">
            <!-- <section
                        class="py-10 sm:py-16 lg:py-24 w-full h-[500px] bg-[url('/images/bg1.jpg')]"
                    > -->
            <section
                class="py-10 sm:py-16 lg:py-24 w-full h-[500px] bg-green-600"
            >
                <div class="px-8 mx-auto max-w-7xl sm:px-6 lg:px-12 pt-14">
                    <div class="max-w-2xl text-left">
                        <p
                            class="text-3xl font-bold lg:leading-tight text-white sm:text-4xl lg:text-5xl mb-4"
                        >
                            찾아가는 자원순환 CAMP <br />
                        </p>
                        <p
                            class="text-3xl font-bold lg:leading-tight text-white sm:text-4xl"
                        >
                            여러분과 함께하는 <br />
                            으쓱버스입니다
                        </p>
                    </div>
                </div>
            </section>
        </Slide>

        <template #addons>
            <!-- <Navigation /> -->
            <Pagination />
        </template>
    </Carousel>
</template>
