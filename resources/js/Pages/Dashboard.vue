<script setup>
import { ref } from "vue";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link } from "@inertiajs/vue3";
</script>

<template>
    <Head title="Dashboard" />

    <!-- Funcion Emit y Listeners -->
    <AuthenticatedLayout>
        <!-- AsideBar -->
    </AuthenticatedLayout>
</template>

<style>
@import url("https://fonts.googleapis.com/css2?family=Gotu&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Poppins:wght@300;400;500;600;700;800&family=Roboto:wght@300;400;700&display=swap");
</style>
