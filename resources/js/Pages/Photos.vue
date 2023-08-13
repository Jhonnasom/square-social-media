<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import { useForm } from "@inertiajs/vue3";
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
                        >
                            <option value="Newest">Newest F</option>
                            <option value="Oldest">Oldest</option>
                        </select>
                    </div>
                </div>

                <!-- Container de las photos -->
                <div class="grid md:grid-cols-3 gap-5">
                    <!-- Container de una foto -->
                    <div
                        class="h-[200px] rounded-[15px] bg-violet-800 flex items-end"
                    >
                        <!-- Comments and likes -->
                        <div
                            class="flex items-end h-[86px] w-full rounded-b-[15px] p-5 gap-3"
                        >
                            <!-- Likes -->
                            <div>
                                <span
                                    class="text-sm text-white flex gap-1 items-center"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="16"
                                        height="16"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            clip-rule="evenodd"
                                            d="M12 4.12905L12.2215 3.9013C14.6871 1.36623 18.6965 1.36623 21.1621 3.9013C23.6126 6.42082 23.6126 10.4946 21.1621 13.0141L13.4337 20.9602C12.6636 21.752 11.3974 21.7696 10.6056 20.9994C10.5857 20.98 10.5857 20.98 10.5663 20.9602L2.83787 13.0141C0.387375 10.4946 0.387375 6.42082 2.83787 3.9013C5.3035 1.36623 9.31287 1.36623 11.7785 3.9013L12 4.12905ZM19.7284 11.6196C21.4239 9.87644 21.4239 7.03895 19.7284 5.29574C18.0481 3.56809 15.3355 3.56809 13.6552 5.29574L12.7169 6.26053C12.3242 6.66424 11.6758 6.66424 11.2831 6.26053L10.3448 5.29574C8.66445 3.56809 5.95192 3.56809 4.27159 5.29574C2.57614 7.03895 2.57614 9.87644 4.27159 11.6196L12 19.5657L19.7284 11.6196Z"
                                            fill="#92929D"
                                        />
                                    </svg>
                                    Like
                                </span>
                            </div>
                            <!-- Comments -->
                            <div>
                                <span
                                    class="text-sm text-white flex gap-1 items-center"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="17"
                                        height="17"
                                        viewBox="0 0 24 25"
                                        fill="none"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            clip-rule="evenodd"
                                            d="M12.5139 18.2841L8.06545 21.6848C7.0587 22.4545 5.61004 21.7355 5.60796 20.4701L5.60414 18.1541C3.53288 17.656 2 15.7858 2 13.564V7.72006C2 5.11409 4.10604 3 6.70588 3H17.2941C19.894 3 22 5.11409 22 7.72006V13.564C22 16.17 19.894 18.2841 17.2941 18.2841H12.5139ZM7.60639 19.5183L11.5682 16.4896C11.7426 16.3563 11.956 16.2841 12.1755 16.2841H17.2941C18.7877 16.2841 20 15.0671 20 13.564V7.72006C20 6.21696 18.7877 5 17.2941 5H6.70588C5.21232 5 4 6.21696 4 7.72006V13.564C4 15.0388 5.16906 16.243 6.63013 16.2831C7.17089 16.2979 7.60181 16.7401 7.6027 17.281L7.60639 19.5183Z"
                                            fill="#92929D"
                                        />
                                    </svg>
                                    Comments
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Container de una foto -->
                    <div
                        class="h-[200px] rounded-[15px] bg-pink-800 flex items-end"
                    >
                        <!-- Comments and likes -->
                        <div
                            class="flex items-end h-[86px] w-full rounded-b-[15px] p-5 gap-3"
                        >
                            <!-- Likes -->
                            <div>
                                <span
                                    class="text-sm text-white flex gap-1 items-center"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="16"
                                        height="16"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            clip-rule="evenodd"
                                            d="M12 4.12905L12.2215 3.9013C14.6871 1.36623 18.6965 1.36623 21.1621 3.9013C23.6126 6.42082 23.6126 10.4946 21.1621 13.0141L13.4337 20.9602C12.6636 21.752 11.3974 21.7696 10.6056 20.9994C10.5857 20.98 10.5857 20.98 10.5663 20.9602L2.83787 13.0141C0.387375 10.4946 0.387375 6.42082 2.83787 3.9013C5.3035 1.36623 9.31287 1.36623 11.7785 3.9013L12 4.12905ZM19.7284 11.6196C21.4239 9.87644 21.4239 7.03895 19.7284 5.29574C18.0481 3.56809 15.3355 3.56809 13.6552 5.29574L12.7169 6.26053C12.3242 6.66424 11.6758 6.66424 11.2831 6.26053L10.3448 5.29574C8.66445 3.56809 5.95192 3.56809 4.27159 5.29574C2.57614 7.03895 2.57614 9.87644 4.27159 11.6196L12 19.5657L19.7284 11.6196Z"
                                            fill="#92929D"
                                        />
                                    </svg>
                                    Like
                                </span>
                            </div>
                            <!-- Comments -->
                            <div>
                                <span
                                    class="text-sm text-white flex gap-1 items-center"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="17"
                                        height="17"
                                        viewBox="0 0 24 25"
                                        fill="none"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            clip-rule="evenodd"
                                            d="M12.5139 18.2841L8.06545 21.6848C7.0587 22.4545 5.61004 21.7355 5.60796 20.4701L5.60414 18.1541C3.53288 17.656 2 15.7858 2 13.564V7.72006C2 5.11409 4.10604 3 6.70588 3H17.2941C19.894 3 22 5.11409 22 7.72006V13.564C22 16.17 19.894 18.2841 17.2941 18.2841H12.5139ZM7.60639 19.5183L11.5682 16.4896C11.7426 16.3563 11.956 16.2841 12.1755 16.2841H17.2941C18.7877 16.2841 20 15.0671 20 13.564V7.72006C20 6.21696 18.7877 5 17.2941 5H6.70588C5.21232 5 4 6.21696 4 7.72006V13.564C4 15.0388 5.16906 16.243 6.63013 16.2831C7.17089 16.2979 7.60181 16.7401 7.6027 17.281L7.60639 19.5183Z"
                                            fill="#92929D"
                                        />
                                    </svg>
                                    Comments
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Container de una foto -->
                    <div
                        class="h-[200px] rounded-[15px] bg-gray-800 flex items-end"
                    >
                        <!-- Comments and likes -->
                        <div
                            class="flex items-end h-[86px] w-full rounded-b-[15px] p-5 gap-3"
                        >
                            <!-- Likes -->
                            <div>
                                <span
                                    class="text-sm text-white flex gap-1 items-center"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="16"
                                        height="16"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            clip-rule="evenodd"
                                            d="M12 4.12905L12.2215 3.9013C14.6871 1.36623 18.6965 1.36623 21.1621 3.9013C23.6126 6.42082 23.6126 10.4946 21.1621 13.0141L13.4337 20.9602C12.6636 21.752 11.3974 21.7696 10.6056 20.9994C10.5857 20.98 10.5857 20.98 10.5663 20.9602L2.83787 13.0141C0.387375 10.4946 0.387375 6.42082 2.83787 3.9013C5.3035 1.36623 9.31287 1.36623 11.7785 3.9013L12 4.12905ZM19.7284 11.6196C21.4239 9.87644 21.4239 7.03895 19.7284 5.29574C18.0481 3.56809 15.3355 3.56809 13.6552 5.29574L12.7169 6.26053C12.3242 6.66424 11.6758 6.66424 11.2831 6.26053L10.3448 5.29574C8.66445 3.56809 5.95192 3.56809 4.27159 5.29574C2.57614 7.03895 2.57614 9.87644 4.27159 11.6196L12 19.5657L19.7284 11.6196Z"
                                            fill="#92929D"
                                        />
                                    </svg>
                                    Like
                                </span>
                            </div>
                            <!-- Comments -->
                            <div>
                                <span
                                    class="text-sm text-white flex gap-1 items-center"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="17"
                                        height="17"
                                        viewBox="0 0 24 25"
                                        fill="none"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            clip-rule="evenodd"
                                            d="M12.5139 18.2841L8.06545 21.6848C7.0587 22.4545 5.61004 21.7355 5.60796 20.4701L5.60414 18.1541C3.53288 17.656 2 15.7858 2 13.564V7.72006C2 5.11409 4.10604 3 6.70588 3H17.2941C19.894 3 22 5.11409 22 7.72006V13.564C22 16.17 19.894 18.2841 17.2941 18.2841H12.5139ZM7.60639 19.5183L11.5682 16.4896C11.7426 16.3563 11.956 16.2841 12.1755 16.2841H17.2941C18.7877 16.2841 20 15.0671 20 13.564V7.72006C20 6.21696 18.7877 5 17.2941 5H6.70588C5.21232 5 4 6.21696 4 7.72006V13.564C4 15.0388 5.16906 16.243 6.63013 16.2831C7.17089 16.2979 7.60181 16.7401 7.6027 17.281L7.60639 19.5183Z"
                                            fill="#92929D"
                                        />
                                    </svg>
                                    Comments
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </template>
    </AuthenticatedLayout>
</template>
