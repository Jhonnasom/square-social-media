<script setup>
import { Head, Link } from "@inertiajs/vue3";

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});
</script>

<template>
    <Head title="Welcome" />

    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-center bg-white dark:bg-gray-900 selection:bg-red-500 selection:text-white"
    >
        <div
            v-if="canLogin"
            class="sm:fixed sm:top-0 sm:right-0 p-6 text-right"
        >
            <Link
                v-if="$page.props.auth.user"
                :href="route('dashboard')"
                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                >Dashboard</Link
            >

            <template v-else>
                <Link
                    :href="route('login')"
                    class="font-semibold text-white hover:text-gray-700 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-white"
                    >Log in</Link
                >

                <Link
                    v-if="canRegister"
                    :href="route('register')"
                    class="ml-4 font-semibold text-white hover:text-gray-700 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-white"
                    >Register</Link
                >
            </template>
        </div>

        <div
            class="max-w-7xl min-h-screen min-w-full mx-auto p-6 lg:p-8 bg-primary-color"
        >
            <div class="flex justify-center"></div>

            <div class="mt-16">
                <div class="flex">
                    <!-- <div class="grid grid-cols-1 md:grid-cols-1 gap-6 lg:gap-8"></div> -->

                    <div
                        class="scale-100 p-6 dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex flex-1 motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500"
                    >
                        <div
                            class="flex justify-center flex-col items-center flex-1"
                        >
                            <div
                                class="w-64 dark:bg-red-800/20 flex items-center justify-center rounded-full"
                            >
                                <svg
                                    width="168"
                                    height="49"
                                    viewBox="0 0 168 49"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <g clip-path="url(#clip0_0_1677)">
                                        <path
                                            d="M66.03 15.15C65.19 15.15 64.5 15.37 63.96 15.81C63.44 16.23 63.18 16.82 63.18 17.58C63.18 18.34 63.37 18.94 63.75 19.38C64.15 19.8 64.67 20.13 65.31 20.37C65.95 20.59 66.65 20.79 67.41 20.97C68.17 21.15 68.93 21.37 69.69 21.63C70.45 21.89 71.15 22.21 71.79 22.59C72.43 22.97 72.94 23.53 73.32 24.27C73.72 24.99 73.92 25.87 73.92 26.91C73.92 28.63 73.23 30.11 71.85 31.35C70.49 32.59 68.67 33.21 66.39 33.21C64.13 33.21 62.3 32.68 60.9 31.62C59.5 30.54 58.8 29.03 58.8 27.09H63.3C63.46 28.93 64.51 29.85 66.45 29.85C67.41 29.85 68.17 29.6 68.73 29.1C69.29 28.6 69.57 27.94 69.57 27.12C69.57 26.28 69.2 25.62 68.46 25.14C67.72 24.66 66.82 24.3 65.76 24.06C64.72 23.82 63.67 23.53 62.61 23.19C61.55 22.85 60.65 22.26 59.91 21.42C59.17 20.56 58.8 19.43 58.8 18.03C58.8 16.13 59.49 14.61 60.87 13.47C62.25 12.33 64.02 11.76 66.18 11.76C68.36 11.76 70.11 12.26 71.43 13.26C72.75 14.24 73.47 15.74 73.59 17.76H68.97C68.89 16.96 68.59 16.33 68.07 15.87C67.55 15.39 66.87 15.15 66.03 15.15ZM88.5607 28.29C89.4407 27.41 89.8807 26.21 89.8807 24.69C89.8807 23.17 89.4407 21.98 88.5607 21.12C87.6807 20.24 86.6507 19.8 85.4707 19.8C84.2907 19.8 83.2607 20.23 82.3807 21.09C81.5207 21.95 81.0907 23.14 81.0907 24.66C81.0907 26.18 81.5307 27.38 82.4107 28.26C83.2907 29.14 84.3107 29.58 85.4707 29.58C86.6507 29.58 87.6807 29.15 88.5607 28.29ZM79.0207 30.84C77.5407 29.22 76.8007 27.16 76.8007 24.66C76.8007 22.16 77.5407 20.12 79.0207 18.54C80.5007 16.94 82.3807 16.14 84.6607 16.14C86.9407 16.14 88.6807 17.08 89.8807 18.96V16.38H94.0807V40.92H89.8807V30.21C88.6207 32.23 86.8707 33.24 84.6307 33.24C82.3907 33.24 80.5207 32.44 79.0207 30.84ZM110.026 16.38H114.256V33H110.026V30.48C108.966 32.3 107.236 33.21 104.836 33.21C102.956 33.21 101.416 32.59 100.216 31.35C99.0164 30.09 98.4164 28.35 98.4164 26.13V16.38H102.616V25.53C102.616 26.83 102.946 27.83 103.606 28.53C104.266 29.23 105.166 29.58 106.306 29.58C107.446 29.58 108.346 29.23 109.006 28.53C109.686 27.83 110.026 26.83 110.026 25.53V16.38ZM129.342 28.29C130.222 27.41 130.662 26.21 130.662 24.69C130.662 23.17 130.222 21.98 129.342 21.12C128.462 20.24 127.432 19.8 126.252 19.8C125.072 19.8 124.042 20.23 123.162 21.09C122.302 21.95 121.872 23.14 121.872 24.66C121.872 26.18 122.312 27.38 123.192 28.26C124.072 29.14 125.092 29.58 126.252 29.58C127.432 29.58 128.462 29.15 129.342 28.29ZM119.802 30.84C118.322 29.22 117.582 27.16 117.582 24.66C117.582 22.16 118.322 20.12 119.802 18.54C121.282 16.94 123.162 16.14 125.442 16.14C127.722 16.14 129.462 17.08 130.662 18.96V16.38H134.862V33H130.662V30.21C129.402 32.23 127.652 33.24 125.412 33.24C123.172 33.24 121.302 32.44 119.802 30.84ZM143.578 16.38V19.32C144.698 17.2 146.318 16.14 148.438 16.14V20.46H147.388C146.128 20.46 145.178 20.78 144.538 21.42C143.898 22.04 143.578 23.12 143.578 24.66V33H139.348V16.38H143.578ZM158.467 33.24C156.047 33.24 154.077 32.46 152.557 30.9C151.037 29.32 150.277 27.24 150.277 24.66C150.277 22.08 151.037 20.02 152.557 18.48C154.097 16.92 156.077 16.14 158.497 16.14C160.937 16.14 162.937 16.9 164.497 18.42C166.057 19.92 166.837 21.93 166.837 24.45C166.837 25.03 166.797 25.57 166.717 26.07H154.597C154.697 27.15 155.097 28.02 155.797 28.68C156.497 29.34 157.387 29.67 158.467 29.67C159.927 29.67 161.007 29.07 161.707 27.87H166.267C165.787 29.45 164.857 30.74 163.477 31.74C162.097 32.74 160.427 33.24 158.467 33.24ZM162.457 23.34C162.397 22.24 161.987 21.36 161.227 20.7C160.487 20.04 159.587 19.71 158.527 19.71C157.467 19.71 156.577 20.04 155.857 20.7C155.157 21.36 154.737 22.24 154.597 23.34H162.457Z"
                                            fill="white"
                                        />
                                        <rect
                                            x="3"
                                            y="6.5"
                                            width="36"
                                            height="36"
                                            rx="12"
                                            stroke="white"
                                            stroke-width="6"
                                        />
                                        <rect
                                            x="19.5"
                                            y="8"
                                            width="18"
                                            height="18"
                                            rx="9"
                                            stroke="white"
                                            stroke-width="6"
                                        />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_0_1677">
                                            <rect
                                                width="168"
                                                height="49"
                                                fill="white"
                                            />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>

                            <h2
                                class="mt-2 text-6xl font-semibold text-white dark:text-white"
                            >
                                Welcome
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style>
@media (prefers-color-scheme: dark) {
    .dark\:bg-dots-lighter {
        background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E");
    }
}
</style>
