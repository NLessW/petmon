<script setup>
import FrontLayout from "@/Layouts/FrontLayout.vue";
import { Head } from "@inertiajs/vue3";
</script>

<template>
    <Head title="조직도" />
    <FrontLayout
        title="PETMON"
        sub-title="조직도"
        bg="/images/bg-building2.jpg"
        op="opacity-50"
    >
        <div class="max-w-screen-lg mx-auto py-8 overflow-x-auto">
            <img src="/images/lg-organization2.png" class="min-w-lg" alt="" />
        </div>
    </FrontLayout>
</template>
