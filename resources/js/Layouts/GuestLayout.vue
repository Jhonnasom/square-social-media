<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
  <!-- container -->
    <div class="min-h-screen w-full flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-primary-color">
        <div>
            <Link href="/">
                <ApplicationLogo class="w-[168-px] h-[49px] mb-[2.5rem] fill-current text-primary-color" />
            </Link>
        </div>

        <div
            class="w-[360px] min-h-[365px] sm:max-w-md  px-6 pt-[1.88rem]  bg-white shadow-md overflow-hidden rounded-[20px]"
        >
            <slot />
        </div>
    </div>
</template>
