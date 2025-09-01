<script setup>
import FrontLayout from "@/Layouts/FrontLayout.vue";
import helper from "@/helper";
import { Head, useForm, usePage } from "@inertiajs/vue3";
const initForm = {
    name: null,
    contact: null,
    email: null,
    content: null,
    organization: null,
};

const setMobileFormat = () => {
    form.contact = helper.setMobileFormat(form.contact);
};

const form = useForm(initForm);
const submitForm = (e) => {
    form.post(route("contact.store"), {
        preserveScroll: true,
        onSuccess: (page) => {
            console.log(page);
            if (page.props.flash.success) {
                alert(page.props.flash.success);
                location.reload();
            }
            if (page.props.flash.error) {
                alert(page.props.flash.error);
            }
        },
    });
};
</script>

<template>
    <Head title="도입문의" />
    <FrontLayout
        title="Contact Us"
        sub-title="도입문의"
        bg="/images/bg-sprout.jpg"
        op="opacity-40"
    >
        <div class="max-w-screen-lg mx-auto py-8">
            <div
                class="rounded-lg bg-white p-8 shadow-lg lg:col-span-3 lg:p-12"
            >
                <form
                    method="POST"
                    @submit.prevent="submitForm"
                    class="space-y-4"
                >
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                        <div>
                            <label for="name" class="text-sm"
                                >기업, 기관 또는 단체명 *</label
                            >
                            <input
                                v-model="form.organization"
                                class="bg-gray-50 w-full rounded-lg border-gray-300 p-3 text-sm my-2"
                                placeholder="항목을 입력해 주세요"
                                type="text"
                                id="name"
                                required
                            />
                            <div
                                v-if="usePage().props.errors.organization"
                                class="text-red-500 text-xs"
                            >
                                {{ usePage().props.errors.organization }}
                            </div>
                        </div>
                        <div>
                            <label for="name" class="text-sm">담당자명 *</label>
                            <input
                                v-model="form.name"
                                class="bg-gray-50 w-full rounded-lg border-gray-300 p-3 text-sm my-2"
                                placeholder="실명을 입력해 주세요"
                                type="text"
                                id="name"
                                required
                            />
                            <div
                                v-if="usePage().props.errors.name"
                                class="text-red-500 text-xs"
                            >
                                {{ usePage().props.errors.name }}
                            </div>
                        </div>
                        <div>
                            <label for="contact" class="text-sm"
                                >연락처 *</label
                            >
                            <input
                                v-model="form.contact"
                                class="bg-gray-50 w-full rounded-lg border-gray-300 p-3 text-sm my-2"
                                placeholder="'-'없이 입력해 주세요"
                                @input="setMobileFormat"
                                @blur="setMobileFormat"
                                type="text"
                                id="contact"
                                required
                            />
                            <div
                                v-if="usePage().props.errors.contact"
                                class="text-red-500 text-xs"
                            >
                                {{ usePage().props.errors.contact }}
                            </div>
                        </div>
                        <div>
                            <label for="email" class="text-sm">Email *</label>
                            <input
                                v-model="form.email"
                                class="bg-gray-50 w-full rounded-lg border-gray-300 p-3 text-sm my-2"
                                placeholder="Email을 입력해 주세요"
                                type="email"
                                id="email"
                                required
                            />
                            <div
                                v-if="usePage().props.errors.email"
                                class="text-red-500 text-xs"
                            >
                                {{ usePage().props.errors.email }}
                            </div>
                        </div>
                        <div>
                            <label for="content" class="text-sm"
                                >문의내용 *</label
                            >
                            <textarea
                                v-model="form.content"
                                rows="5"
                                class="bg-gray-50 w-full rounded-lg border-gray-300 p-3 text-sm my-2"
                                placeholder="문의내용을 입력해 주세요"
                                id="content"
                                required
                            ></textarea>
                            <div
                                v-if="usePage().props.errors.content"
                                class="text-red-500 text-xs"
                            >
                                {{ usePage().props.errors.content }}
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <button
                            type="submit"
                            class="inline-block w-full rounded-lg bg-primary px-5 py-2.5 font-medium text-white sm:w-auto"
                        >
                            문의하기
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </FrontLayout>
</template>
