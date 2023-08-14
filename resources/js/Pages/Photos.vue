<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import { ref } from "vue";
// consumiendo un api con axios
const images = ref([]);
const sort = ref("desc");
getImages();
function getImages() {
    axios
        .get("http://127.0.0.1:8000/api/photos", {
            params: {
                sort: sort.value,
            },
        })
        .then((response) => {
            images.value = response.data;
            console.log(images.value);
        })
        .catch((error) => {
            console.log(error);
        });
}
</script>
<template>
    <Head title="Photos" />
    <AuthenticatedLayout>
        <template #asideright>
            <!-- Container Principal de Photos -->
            <div class="min-w-[902px] min-h[40px] mt-[32px]">
                <!-- Container de la barra de busqueda -->
                <div class="flex h-10 items-center justify-between mb-9">
                    <h2
                        class="w-[18%] flex justify-center font-semibold text-2xl leading-9 font-[Poppins]"
                    >
                        Your Photos
                    </h2>
                    <div
                        class="flex items-center w-[55%] rounded-[10px] pl-3 bg-white"
                    >
                        <h2
                            class="text-sm font-normal font-[Roboto] text-[#696974]"
                        >
                            Sort by:
                        </h2>
                        <select
                            class="border-none focus:ring-0 w-[87%] rounded-[10px] pr-0 text-sm font-[Roboto]"
                            v-model="sort"
                            @change="getImages"
                        >
                            <option value="desc">Newest F</option>
                            <option value="asc">Oldest</option>
                        </select>
                    </div>
                </div>

                <!-- Container de las photos -->
                <div class="grid md:grid-cols-3 gap-5 mb-5">
                    <!-- Container de una foto -->
                    <div
                        class="h-[200px] rounded-[15px]"
                        v-for="(image, i) in images"
                        :key="i"
                    >
                        <img
                            class="object-cover h-[200px] w-full rounded-[15px]"
                            :src="image"
                            alt=""
                        />
                        <!-- Comments and likes -->
                    </div>
                </div>
            </div>
        </template>
    </AuthenticatedLayout>
</template>
