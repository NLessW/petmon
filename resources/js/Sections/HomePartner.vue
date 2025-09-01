<template>
    <Carousel
        v-bind="settings"
        :breakpoints="breakpoints"
        :autoplay="3000"
        :wrap-around="true"
    >
        <Slide v-for="slide in images" :key="slide">
            <div class="carousel__item">
                <img :src="slide" class="w-52" />
            </div>
        </Slide>

        <template #addons>
            <Pagination />
            <!-- <Navigation /> -->
        </template>
    </Carousel>
</template>

<script>
import { defineComponent } from "vue";
import { Carousel, Navigation, Pagination, Slide } from "vue3-carousel";
import "vue3-carousel/dist/carousel.css";
export default defineComponent({
    name: "ExamplePagination",
    components: {
        Pagination,
        Carousel,
        Slide,
        Navigation,
    },
    data: () => ({
        images: [
            "/images/partner-1.png",
            "/images/partner-2.png",
            "/images/partner-3.png",
            "/images/partner-4.png",
            "/images/partner-5.png",
            "/images/partner-6.png",
        ],
        // carousel settings
        settings: {
            itemsToShow: 1,
            snapAlign: "center",
        },
        // breakpoints are mobile first
        // any settings not specified will fallback to the carousel settings
        breakpoints: {
            // 700px and up
            700: {
                itemsToShow: 3.5,
                snapAlign: "center",
            },
            // 1024 and up
            1024: {
                itemsToShow: 5,
                snapAlign: "start",
            },
        },
    }),
});
</script>
