<script setup>
import FrontLayout from "@/Layouts/FrontLayout.vue";
import helper from "@/helper";
import { Head, useForm, usePage } from "@inertiajs/vue3";
import { ref } from "vue";
const donation = ref("");
const initForm = {
    type: 1,
    pay_method: "card",
    donation: null,
    name: null,
    contact: null,
    email: null,
    content: null,
};
const form = useForm(initForm);
const setType = (type) => {
    form.type = type;
};
const setPayMethod = (type) => {
    form.pay_method = type;
};
const setComma = (e) => {
    const value = e.target.value
        .toString()
        .replace(/[^0-9]/g, "")
        .replace(/,/g, "");
    if (!value) {
        donation.value = "";
        return;
    }
    form.donation = value;
    donation.value = parseInt(value).toLocaleString();
};
const setMobileFormat = () => {
    form.contact = helper.setMobileFormat(form.contact);
};
const submitForm = (e) => {
    form.post(route("donation.store"), {
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
    <Head title="기부하기" />
    <FrontLayout
        title="기부하기"
        sub-title="기부하기"
        bg="/images/bg-sprout3.jpg"
        op="opacity-40"
    >
        <div class="max-w-screen-lg mx-auto py-8">
            <div
                class="rounded-lg bg-white p-8 shadow-lg lg:col-span-3 lg:p-12"
            >
                <form method="POST" @submit.prevent="submitForm">
                    <div class="flex justify-center">
                        <nav
                            class="flex overflow-x-auto items-center p-1.5 space-x-1 rtl:space-x-reverse text-sm text-gray-600 bg-gray-500/5 rounded-xl dark:bg-gray-500/20"
                        >
                            <button
                                role="tab"
                                type="button"
                                class="flex whitespace-nowrap items-center h-10 px-10 font-medium rounded-lg outline-none focus:ring-2 focus:ring-inset"
                                :class="{
                                    'text-yellow-600 bg-white shadow':
                                        form.type == 1,
                                    'hover:text-gray-800': form.type == 2,
                                }"
                                @click="setType(1)"
                            >
                                개인
                            </button>

                            <button
                                role="tab"
                                type="button"
                                class="flex whitespace-nowrap items-center h-10 px-10 font-medium rounded-lg outline-none focus:ring-2 focus:ring-inset"
                                :class="{
                                    'text-yellow-600 bg-white shadow':
                                        form.type == 2,
                                    'hover:text-gray-800': form.type == 1,
                                }"
                                @click="setType(2)"
                            >
                                단체
                            </button>
                        </nav>
                    </div>
                    <div
                        class="flex justify-between items-center border border-primary rounded-lg py-2 px-4 mt-4 mb-4"
                    >
                        <div class="font-bold text-primary">후원금</div>
                        <input
                            v-model="donation"
                            class="bg-red-50 w-36 rounded-lg border-red-200 px-4 py-2 text-md text-red-600 font-bold"
                            placeholder=""
                            type="text"
                            id="name"
                            required
                            @keyup="setComma"
                        />
                    </div>
                    <div
                        class="flex justify-between items-center border border-primary rounded-lg py-2 px-4 my-8"
                    >
                        <div class="font-bold text-primary">결제방법</div>
                        <div>
                            <button
                                type="button"
                                class="text-gray-900 bg-white hover:bg-gray-100 border focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 me-2"
                                :class="{
                                    'border-gray-900':
                                        form.pay_method == 'card',
                                    'border-gray-200':
                                        form.pay_method == 'transfer',
                                }"
                                @click="setPayMethod('card')"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="size-6 mr-1"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Z"
                                    />
                                </svg>
                                신용카드
                            </button>
                            <button
                                type="button"
                                class="text-gray-900 bg-white hover:bg-gray-100 border focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 me-2"
                                :class="{
                                    'border-gray-200':
                                        form.pay_method == 'card',
                                    'border-gray-900':
                                        form.pay_method == 'transfer',
                                }"
                                @click="setPayMethod('transfer')"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="size-6 mr-1"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z"
                                    />
                                </svg>

                                계좌이체
                            </button>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
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
                                >후원자의 한마디</label
                            >
                            <textarea
                                v-model="form.content"
                                rows="2"
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
                            기부하기
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </FrontLayout>
</template>
