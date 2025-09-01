<script setup>
import { useForm } from "@inertiajs/vue3";
import { ref, watch } from "vue";

const checkCode = ref(false);
const countdown = ref(120);

const initForm = {
    name: null,
    contact: null,
    auth_code: null,
};
const form = useForm(initForm);

const secondsToMinutes = (seconds) =>
    Math.floor(seconds / 60) + ":" + ("0" + Math.floor(seconds % 60)).slice(-2);

const submitForm = (e) => {
    form.post(route("donation.auth"), {
        preserveScroll: true,
        onSuccess: (page) => {
            if (page.props.flash.success) {
                alert(page.props.flash.success);
                checkCode.value = true;
                if (form.auth_code != null) {
                    checkCode.value = false;
                    window.location.reload();
                }
            }
            if (page.props.flash.error) {
                alert(page.props.flash.error);
            }
        },
    });
};

const startCountdown = () => {
    setInterval(() => {
        if (countdown.value > 0) {
            countdown.value--;
        }
        if (countdown.value == 0) {
            countdown.value = 120;
            checkCode.value = false;
            alert("인증시간이 만료되었습니다.\n다시 시도해 주세요.");
            window.location.reload();
        }
    }, 1000);
};

watch(checkCode, (newValue) => {
    if (newValue == true) {
        startCountdown();
    }
});

const setMobileFormat = (e) => {
    if (!e.target.value) return;
    form.contact = form.contact
        .replace(/[^0-9]/g, "")
        .replace(/^(\d{2,3})(\d{3,4})(\d{4})$/, `$1-$2-$3`);
};
</script>
<template>
    <div class="container relative m-auto text-gray-500 md:px-12 xl:px-40">
        <div class="m-auto space-y-8 md:w-10/12 lg:w-6/12 xl:w-2/3">
            <div
                data-aos="fade-up"
                data-aos-duration="1000"
                class="rounded-3xl border border-gray-100 bg-white dark:bg-gray-800 dark:border-gray-700 shadow-2xl shadow-gray-600/10 backdrop-blur-2xl"
            >
                <div class="p-8 py-12 sm:p-16">
                    <h2
                        class="mb-8 text-xl md:text-2xl font-bold text-gray-800 dark:text-white"
                    >
                        확인을 위해 인증을 해 주세요
                    </h2>
                    <form
                        method="POST"
                        @submit.prevent="submitForm"
                        class="space-y-4"
                    >
                        <div>
                            <label for="name" class="text-sm">이름</label>
                            <input
                                v-model="form.name"
                                class="bg-white w-full rounded-lg border-gray-300 p-3 text-sm my-2"
                                :class="{ 'bg-gray-100': checkCode }"
                                :disabled="checkCode"
                                placeholder="이름을 입력해 주세요"
                                type="text"
                                id="name"
                                required
                            />
                        </div>

                        <div>
                            <label for="contact" class="text-sm">연락처</label>
                            <input
                                v-model="form.contact"
                                class="bg-white w-full rounded-lg border-gray-300 p-3 text-sm my-2"
                                :class="{ 'bg-gray-100': checkCode }"
                                :disabled="checkCode"
                                placeholder="'-'없이 입력해 주세요"
                                @input="setMobileFormat"
                                @blur="setMobileFormat"
                                type="text"
                                id="contact"
                                required
                            />
                        </div>

                        <div v-if="checkCode">
                            <label for="contact" class="text-sm"
                                >인증번호</label
                            >
                            <div class="flex items-center gap-4">
                                <input
                                    v-model="form.auth_code"
                                    class="bg-white w-full rounded-lg border-gray-300 p-3 text-sm my-2"
                                    placeholder="인증번호를 입력해 주세요"
                                    type="text"
                                    id="auth_code"
                                    required
                                />

                                <div class="w-12 text-right text-red-600">
                                    {{ secondsToMinutes(countdown) }}
                                </div>
                            </div>
                        </div>

                        <button
                            type="submit"
                            class="relative flex h-11 w-full items-center justify-center px-6 before:absolute before:inset-0 before:rounded-full before:bg-primary before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95"
                        >
                            <span
                                class="relative text-base font-semibold text-white dark:text-dark"
                            >
                                {{ !checkCode ? "인증번호발송" : "인증완료" }}
                            </span>
                        </button>

                        <p
                            class="border-t border-gray-100 dark:border-gray-700 pt-6 text-sm text-gray-500 dark:text-gray-400"
                        >
                            인증에 문제가 있나요?
                            <span class="font-semibold">1644-1224</span> 로
                            문의해 주세요.
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
