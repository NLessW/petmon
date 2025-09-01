<script setup>
defineProps({
    title: {
        type: String,
    },
    subTitle: {
        type: String,
    },
});
</script>
<!-- https://www.hyperui.dev/ -->
<template>
    <section class="bg-white text-center">
        <div class="mx-auto max-w-screen-xl px-4 py-8 lg:py-12">
            <div class="flex flex-col space-y-4 space-y-reverse">
                <h1 v-if="!!subTitle" class="order-last text-lg text-gray-700">
                    {{ subTitle }}
                </h1>
                <h2 class="text-4xl font-bold text-gray-900 sm:text-5xl">
                    {{ title }}
                </h2>
            </div>
        </div>
    </section>
</template>
