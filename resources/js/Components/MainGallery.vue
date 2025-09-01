<script setup>
import { Link } from "@inertiajs/vue3";
defineProps({
    title: {
        type: String,
    },
    item: {
        type: Object,
    },
    routeUrl: {
        type: String,
    },
});
</script>
<template>
    <div class="flex justify-between items-end">
        <h3 class="text-3xl font-bold text-gray-800 dark:text-white">
            {{ title }}
        </h3>
        <div><Link :href="route(routeUrl)">더보기</Link></div>
    </div>
    <hr />
    <div
        v-if="item != null"
        class="py-4"
        >
        <div class="xl:container mx-auto">
            <div class="grid gap-6 px-4 sm:px-0">
                <Link
                    :href="
                        route('community.show', {
                            board: item.data,
                            cid: item.data.cid,
                        })
                    "
                    class="group relative rounded-3xl space-y-6 overflow-hidden"
                >
                    <img
                        class="mx-auto h-[360px] w-full grayscale object-cover object-top ransition duration-500 group-hover:scale-105 group-hover:grayscale-0"
                        :src="item.data.image_url"
                        alt="woman"
                        loading="lazy"
                        width="640"
                        height="805"
                    />
                    <div
                        class="absolute bottom-0 inset-x-0 h-max mt-auto px-8 py-6 bg-primary dark:bg-white translate-y-0 transition duration-300 ease-in-out"
                    >
                        <div>
                            <h4
                                class="text-xl font-semibold dark:text-gray-700 text-white"
                            >
                                {{ item.data.title_limit }}
                            </h4>
                            <!-- <span class="block text-sm text-gray-100"
                                >2024.10.10</span
                            > -->
                        </div>
                    </div>
                </Link>
                <!-- <a
                    href="#"
                    class="group relative rounded-3xl space-y-6 overflow-hidden"
                >
                    <img
                        class="mx-auto h-[380px] w-full grayscale object-cover object-top ransition duration-500 group-hover:scale-105 group-hover:grayscale-0"
                        src="/images/bg0.jpg"
                        alt="woman"
                        loading="lazy"
                        width="640"
                        height="805"
                    />
                    <div
                        class="absolute bottom-0 inset-x-0 h-max mt-auto px-8 py-6 bg-primary dark:bg-white translate-y-0 transition duration-300 ease-in-out"
                    >
                        <div>
                            <h4
                                class="text-xl font-semibold dark:text-gray-700 text-white"
                            >
                                포토 갤러리 (ESG)
                            </h4>
                            <span class="block text-sm text-gray-100"
                                >2024.10.10</span
                            >
                        </div>
                    </div>
                </a> -->
            </div>
        </div>
    </div>
</template>
