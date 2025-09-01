<script setup>
import menus from "@/menu";
import { Link } from "@inertiajs/vue3";
import { ref } from "vue";
const open = ref(false);
</script>

<template>
    <header
        @mouseover="open = true"
        @mouseleave="open = false"
        class="lg:fixed w-full z-50 border-b"
    >
        <nav class="bg-white/95 border-gray-200 py-3 dark:bg-gray-900">
            <div
                class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto"
            >
                <Link :href="route('home')" class="flex items-center">
                    <img
                        src="/images/logo.svg"
                        class="h-10 mr-3 sm:h-12"
                        :alt="$page.props.appName"
                    />
                </Link>
                <div class="flex justify-end items-center lg:order-2">
                    <!-- <a href="#" class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">Log in</a> -->

                    <form class="max-w-sm mx-auto w-32">
                        <label
                            for="site-link"
                            class="hidden mb-2 text-sm font-medium text-gray-900 dark:text-white"
                            >Select an option</label
                        >
                        <select
                            id="site-link"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2.2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        >
                            <option selected>페트몬</option>
                            <option value="US">협약기업</option>
                            <option value="CA">협동조합</option>
                        </select>
                    </form>
                    <button
                        data-collapse-toggle="mobile-menu-2"
                        data-dropdown-trigger="hover"
                        type="button"
                        class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="mobile-menu-2"
                        aria-expanded="false"
                    >
                        <span class="sr-only">Open main menu</span>
                        <svg
                            class="w-6 h-6"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"
                            ></path>
                        </svg>
                        <svg
                            class="hidden w-6 h-6"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"
                            ></path>
                        </svg>
                    </button>
                </div>
                <div
                    class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1"
                    id="mobile-menu-2"
                >
                    <ul
                        class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0"
                    >
                        <li
                            v-for="(menu, index) in menus"
                            :key="index"
                            class="lg:w-32"
                        >
                            <a
                                href="#"
                                class="link-default text-lg font-bold"
                                >{{ menu.name }}</a
                            >
                            <ul
                                class="block lg:hidden ml-8 mt-2 text-gray-700 font-medium"
                            >
                                <li
                                    v-for="(submenu, index2) in menu.submenus"
                                    :key="index2"
                                    class="mb-1"
                                >
                                    <Link
                                        :href="route(submenu.route)"
                                        class="hover:text-primary"
                                    >
                                        {{ submenu.name }}
                                    </Link>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- 서브메뉴 -->
        <nav
            v-show="open"
            class="hidden lg:block bg-white/95 border-gray-200 pb-6 dark:bg-gray-900"
        >
            <div
                class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto"
            >
                <a href="/" class="flex items-center w-[130px]"></a>
                <div class="flex items-center lg:order-2">
                    <div class="w-32"></div>
                </div>
                <div
                    class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1"
                >
                    <ul
                        class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0"
                    >
                        <li
                            v-for="(menu, index) in menus"
                            :key="index"
                            class="w-32"
                        >
                            <!-- <a href="#" class="link-default text-lg font-bold"
                                >으쓱버스소개</a
                            > -->
                            <ul class="mt-2 text-gray-700 font-medium">
                                <li
                                    v-for="(submenu, index2) in menu.submenus"
                                    class="mb-1"
                                >
                                    <Link
                                        v-if="!!submenu.html"
                                        :href="route(submenu.route)"
                                        class="hover:text-primary"
                                        v-html="submenu.html"
                                    ></Link>
                                    <Link
                                        v-else
                                        :href="route(submenu.route)"
                                        class="hover:text-primary"
                                    >
                                        {{ submenu.name }}
                                    </Link>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="inline-flex items-center justify-center w-full mt-2">
                <hr
                    class="w-80 my-4 bg-gray-200 border rounded dark:bg-gray-700"
                />
                <div
                    class="absolute px-4 -translate-x-1/2 left-1/2 dark:bg-gray-900 pb-8"
                >
                    뉴스룸
                </div>
            </div>
            <div class="text-center space-x-2">
                <Link
                    class="w-32 overflow-hidden rounded-md bg-white hover:bg-gray-100 px-3 py-2 text-gray-800 border border-gray-300"
                    :href="route('community.newsroom', { cid: 1 })"
                >
                    <span
                        class="text-sm font-medium transition-all group-hover:ms-4"
                    >
                        보도자료
                    </span>
                </Link>
                <Link
                    class="w-32 overflow-hidden rounded-md bg-white hover:bg-gray-100 px-3 py-2 text-gray-800 border border-gray-300"
                    :href="route('community.newsroom', { cid: 2 })"
                >
                    <span
                        class="text-sm font-medium transition-all group-hover:ms-4"
                    >
                        협업 Project
                    </span>
                </Link>
                <Link
                    class="w-32 overflow-hidden rounded-md bg-white hover:bg-gray-100 px-3 py-2 text-gray-800 border border-gray-300"
                    :href="route('community.newsroom', { cid: 3 })"
                >
                    <span
                        class="text-sm font-medium transition-all group-hover:ms-4"
                    >
                        PETMON 기자단
                    </span>
                </Link>
            </div>
        </nav>
    </header>
</template>
