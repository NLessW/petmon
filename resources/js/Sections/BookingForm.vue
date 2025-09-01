<!-- https://www.hyperui.dev/components/marketing/forms#component-4 -->
<template>
    <section class="bg-gray-50">
        <div class="mx-auto max-w-screen-lg px-4 py-16 sm:px-0 lg:px-0">
            <div class="grid grid-cols-1 gap-x-16 gap-y-8 lg:grid-cols-5">
                <div class="lg:col-span-2 lg:py-12">
                    <p class="max-w-xl text-md font-NanumSquareNeo">
                        문의사항이 있으실 경우 관리자에게 문의해 주세요. <br />
                        입금 계좌번호 : 343-910035-35904 <br />
                        입금을 완료하셔야 예약이 정상적으로 확정됩니다.
                    </p>

                    <div class="mt-8">
                        문의 :
                        <a href="#" class="text-2xl font-bold text-pink-600">
                            1644-1224
                        </a>

                        <!-- <address class="mt-2 not-italic">
                            282 Kevin Brook, Imogeneborough, CA 58517
                        </address> -->
                    </div>
                </div>

                <div
                    class="rounded-lg bg-white p-8 shadow-lg lg:col-span-3 lg:p-12"
                >
                    <form action="#" class="space-y-4">
                        <div>
                            <label>날짜선택</label>
                            <div class="my-2">
                                <VCalendar expanded />
                            </div>
                        </div>

                        <!-- <div>
                            <label class="sr-only" for="name">Name</label>
                            <input
                                class="w-full rounded-lg border-gray-300 p-3 text-sm"
                                placeholder="Name"
                                type="text"
                                id="name"
                            />
                        </div> -->

                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                            <div>
                                <label for="how-many" class="text-sm"
                                    >신청인원</label
                                >
                                <input
                                    class="w-full rounded-lg border-gray-300 p-3 text-sm my-2"
                                    placeholder="숫자를 입력하세요"
                                    type="number"
                                    id="how-many"
                                />
                            </div>
                            <div></div>
                        </div>

                        <hr
                            class="my-6 border-gray-100 sm:mx-auto dark:border-gray-700 lg:my-8"
                        />

                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                            <div>
                                <label for="name" class="text-sm">이름</label>
                                <input
                                    class="w-full rounded-lg border-gray-300 p-3 text-sm my-2"
                                    placeholder="실명을 입력해 주세요"
                                    autocomplete="true"
                                    type="tel"
                                    id="name"
                                />
                            </div>
                            <div>
                                <label for="phone" class="text-sm"
                                    >연락처</label
                                >
                                <input
                                    class="w-full rounded-lg border-gray-300 p-3 text-sm my-2"
                                    placeholder="연락처를 입력해 주세요"
                                    type="tel"
                                    id="phone"
                                />
                            </div>
                            <div>
                                <label for="email" class="text-sm">Email</label>
                                <input
                                    class="w-full rounded-lg border-gray-300 p-3 text-sm my-2"
                                    placeholder="Email을 입력해 주세요"
                                    type="email"
                                    id="email"
                                />
                            </div>
                            <div>
                                <label for="attach" class="text-sm"
                                    >세금계산서 발행용 첨부주소</label
                                >
                                <input
                                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 my-2"
                                    aria-describedby="user_avatar_help"
                                    id="attach"
                                    type="file"
                                />
                                <!-- <div
                                    class="mt-1 text-sm text-gray-500 dark:text-gray-300"
                                    id="user_avatar_help"
                                >
                                    A profile picture is useful to confirm your
                                    are logged into your account
                                </div> -->
                            </div>
                        </div>

                        <!-- <div>
                            <label class="sr-only" for="message">Message</label>

                            <textarea
                                class="w-full rounded-lg border-gray-300 p-3 text-sm"
                                placeholder="Message"
                                rows="8"
                                id="message"
                            ></textarea>
                        </div> -->

                        <div class="mt-4">
                            <button
                                type="submit"
                                class="inline-block w-full rounded-lg bg-primary px-5 py-3 font-medium text-white sm:w-auto"
                            >
                                예약하기
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</template>
