<script setup>
import ShapePost from "@/Components/ShapePost.vue";
import IconUploadImage from "@/Components/IconUploadImage.vue";
import { Modal } from "flowbite-vue";
import { ref } from "vue";
const isShowModal = ref(false);
function closeModal() {
    isShowModal.value = false;
}
function showModal() {
    isShowModal.value = true;
}
</script>

<template>
    <div class="w-[625px] min-h-screen flex flex-col gap-5">
        <!-- div post something -->
        <div class="h-[107px] rounded-[15px] bg-white mt-[13px]">
            <div class="h-10 pl-5 pt-[10px]">
                <h2
                    class="text-sm text-text-h2-gray font-medium font-[Poppins]"
                >
                    Post Something
                </h2>
            </div>
            <hr />
            <!-- Div Whats on your mind -->
            <div class="h-[66px] flex items-center pl-[15px]">
                <!-- Icon Profile -->
                <img
                    src="#"
                    alt="#"
                    class="bg-gray-800 w-9 h-9 rounded-full mr-[20px] flex"
                />

                <!--Div Input Write any comment and Upload Image -->
                <div
                    class="w-[100%] h-[46px] bg-color-input border-linegray rounded-[15px] font-[Roboto] flex items-center justify-between pr-[15px]"
                >
                    <!-- Input Write any comment -->
                    <button
                        @click="showModal"
                        class="text-base font-[Roboto] text-textgray"
                    >
                        What’s on your mind?
                    </button>

                    <!-- Modal whats on your mind -->
                    <Modal
                        :size="size"
                        :escapable="true"
                        v-if="isShowModal"
                        @close="closeModal"
                    >
                        <template #header>
                            <div
                                class="flex items-center text-sm font-semibold font-[Poppins] text-text-h2-gray"
                            >
                                Post Something
                            </div>
                        </template>
                        <template #body>
                            <!-- Div Whats on your mind -->
                            <div class="flex items-center gap-5">
                                <!-- Icon Profile -->
                                <img
                                    src="#"
                                    alt="#"
                                    class="bg-gray-800 w-9 h-9 rounded-3xl mr-[10px] flex"
                                />

                                <!--Div Input Write any comment and Upload Image -->
                                <div
                                    class="w-[100%] border-linegray rounded-[15px] font-[Roboto] flex items-center justify-between"
                                >
                                    <!-- Input Write any comment -->
                                    <textarea
                                        placeholder="What’s on your mind?"
                                        class="w-[100%] h-auto border-none rounded[15px] flex text-color-posts pl-[15px] py-[11px] bg-white focus:ring-white"
                                    />
                                </div>
                                <!-- Spinner Indicator -->
                                <div
                                    class="flex items-center justify-center rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700"
                                >
                                    <div role="status">
                                        <svg
                                            aria-hidden="true"
                                            class="w-8 h-8 mr-2 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600"
                                            viewBox="0 0 100 101"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                                fill="currentFill"
                                            />
                                        </svg>
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                </div>
                            </div>
                        </template>
                        <template #footer>
                            <div class="flex justify-between items-center">
                                <input
                                    type="file"
                                    class="hidden"
                                    id="file-upload"
                                />
                                <label for="file-upload">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            clip-rule="evenodd"
                                            d="M22.5 18.65C22.5 20.5061 20.9274 22 19 22H5C3.07258 22 1.5 20.5061 1.5 18.65V5.35C1.5 3.49395 3.07258 2 5 2H19C20.9274 2 22.5 3.49395 22.5 5.35V18.65ZM21.5 15.0708L16.7865 10.775L12.0725 15.0284L17.4604 21H19C20.3863 21 21.5 19.942 21.5 18.65V15.0708ZM21.5 13.7178V5.35C21.5 4.05803 20.3863 3 19 3H5C3.61372 3 2.5 4.05803 2.5 5.35V17.445L8.31356 11.646C8.51602 11.444 8.84633 11.4527 9.0379 11.6651L11.4026 14.2859L16.4533 9.72878C16.6443 9.55643 16.9349 9.55716 17.125 9.73045L21.5 13.7178ZM16.1135 21L8.64759 12.7253L2.50884 18.8487C2.61604 20.0487 3.68548 21 5 21H16.1135ZM8.19048 8.7C7.12564 8.7 6.2619 7.83843 6.2619 6.775C6.2619 5.71157 7.12564 4.85 8.19048 4.85C9.25532 4.85 10.119 5.71157 10.119 6.775C10.119 7.83843 9.25532 8.7 8.19048 8.7ZM8.19048 7.7C8.70359 7.7 9.11905 7.28558 9.11905 6.775C9.11905 6.26442 8.70359 5.85 8.19048 5.85C7.67736 5.85 7.2619 6.26442 7.2619 6.775C7.2619 7.28558 7.67736 7.7 8.19048 7.7Z"
                                            fill="#92929D"
                                        />
                                    </svg>
                                </label>

                                <button
                                    @click="closeModal"
                                    type="button"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                >
                                    Share Post
                                </button>
                            </div>
                        </template>
                    </Modal>

                    <!-- Input Upload image or file -->
                    <input type="file" class="hidden" id="file-upload" />
                    <label for="file-upload">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                        >
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M22.5 18.65C22.5 20.5061 20.9274 22 19 22H5C3.07258 22 1.5 20.5061 1.5 18.65V5.35C1.5 3.49395 3.07258 2 5 2H19C20.9274 2 22.5 3.49395 22.5 5.35V18.65ZM21.5 15.0708L16.7865 10.775L12.0725 15.0284L17.4604 21H19C20.3863 21 21.5 19.942 21.5 18.65V15.0708ZM21.5 13.7178V5.35C21.5 4.05803 20.3863 3 19 3H5C3.61372 3 2.5 4.05803 2.5 5.35V17.445L8.31356 11.646C8.51602 11.444 8.84633 11.4527 9.0379 11.6651L11.4026 14.2859L16.4533 9.72878C16.6443 9.55643 16.9349 9.55716 17.125 9.73045L21.5 13.7178ZM16.1135 21L8.64759 12.7253L2.50884 18.8487C2.61604 20.0487 3.68548 21 5 21H16.1135ZM8.19048 8.7C7.12564 8.7 6.2619 7.83843 6.2619 6.775C6.2619 5.71157 7.12564 4.85 8.19048 4.85C9.25532 4.85 10.119 5.71157 10.119 6.775C10.119 7.83843 9.25532 8.7 8.19048 8.7ZM8.19048 7.7C8.70359 7.7 9.11905 7.28558 9.11905 6.775C9.11905 6.26442 8.70359 5.85 8.19048 5.85C7.67736 5.85 7.2619 6.26442 7.2619 6.775C7.2619 7.28558 7.67736 7.7 8.19048 7.7Z"
                                fill="#92929D"
                            />
                        </svg>
                    </label>
                </div>
            </div>
        </div>

        <ShapePost>
            <!-- Container de post images -->
            <template #post-content>
                <div
                    class="grid grid-cols-6 gap-[10px] w-[585px] h-[330px] mt-[11px]"
                >
                    <div
                        class="bg-[#6523c8] row-span-2 col-span-3 h-[330px] rounded-[15px]"
                    >
                        <img
                            src="#"
                            class="w-full object-center object-cover h-[330px] rounded-[15px]"
                        />
                    </div>
                    <div
                        class="bg-[#8ec823] col-span-3 h-[160px] rounded-[15px]"
                    >
                        <img
                            src="#"
                            class="w-full object-center object-cover h-[160px] rounded-[15px]"
                        />
                    </div>
                    <div
                        class="bg-[#c8238b] row-span-3 col-span-3 h-[160px] rounded-[15px]"
                    >
                        <img
                            src="#"
                            class="w-full object-center object-cover h-[160px] rounded-[15px]"
                        />
                    </div>
                </div>
            </template>
        </ShapePost>

        <ShapePost></ShapePost>
    </div>
</template>
