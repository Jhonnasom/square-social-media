<script setup>
import { toRefs, ref, defineProps } from "vue";
import moment from "moment";
const props = defineProps({
    user_name: String,
    date: String,
    post_id: Number,
    description: String,
    comments_count: Number,
    likes_count: Number,
    liked: Number,
    saved: Number,
    shares_count: Number,
    saveds_count: Number,
});
const emit = defineEmits(["post_updated"]);

const selected_color = "#FF0000";
const unselected_color = "#92929D";
//const post = toRefs(props, "post");

function formatDate(date) {
    return moment(String(date)).format("DD MMMM [at] hh:mm A");
}

function likePost(id) {
    axios
        .post("http://127.0.0.1:8000/api/posts/" + id + "/likes")
        .then((response) => {
            const likes = response.data;
        })
        .catch((error) => {
            console.log(error);
        })
        .finally(() => {
            emit("post_updated", id);
        });
}

function savePost(id) {
    axios
        .post("http://127.0.0.1:8000/api/posts/" + id + "/saved")
        .then((response) => {
            const saved = response.data;
        })
        .catch((error) => {
            console.log(error);
        })
        .finally(() => {
            emit("post_updated", id);
        });
}
</script>
<template>
    <div
        class="min-h-[269px] h-auto bg-white px-5 py-5 rounded-[15px] font-[Poppins] text-sm font-medium text-text-h2-gray"
    >
        <!-- Container Photo, Name and Datetime -->
        <div class="flex justify-between mb-5">
            <div class="h-[42px] flex">
                <img
                    src="#"
                    alt="profile-photo"
                    class="bg-gray-800 w-[42px] h-[42px] rounded-[25px] mr-5 flex"
                />
                <div class="w-[109px] h-[42px] flex flex-col gap-1">
                    <h2>{{ user_name }}</h2>
                    <!-- Fecha en que se publico el post -->
                    <p class="text-xs font-normal font-[Roboto] text-textgray">
                        <!-- 12 April at 09.28 PM -->
                        {{ formatDate(date) }}
                    </p>
                </div>
            </div>

            <!-- Button with Dropdown -->
            <div class="flex justify-end">
                <Dropdown align="right" width="280">
                    <template #trigger>
                        <span class="inline-flex rounded-md">
                            <button
                                type="button"
                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150"
                            >
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
                                        d="M7 12C7 10.8954 6.10457 10 5 10C3.89543 10 3 10.8954 3 12C3 13.1046 3.89543 14 5 14C6.10457 14 7 13.1046 7 12Z"
                                        fill="#92929D"
                                    />
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M14 12C14 10.8954 13.1046 10 12 10C10.8954 10 10 10.8954 10 12C10 13.1046 10.8954 14 12 14C13.1046 14 14 13.1046 14 12Z"
                                        fill="#92929D"
                                    />
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M21 12C21 10.8954 20.1046 10 19 10C17.8954 10 17 10.8954 17 12C17 13.1046 17.8954 14 19 14C20.1046 14 21 13.1046 21 12Z"
                                        fill="#92929D"
                                    />
                                </svg>
                            </button>
                        </span>
                    </template>

                    <template #content>
                        <!-- Se tiene que hacer el metodo save link-->
                        <DropdownLink :href="route('profile.edit')">
                            <div class="flex gap-3">
                                <!-- <fa :icon="['far','bookmark']" size="lg" style="color:#92929D" /> -->
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
                                        d="M7.85738 1.04761H17.1431C19.247 1.04761 20.9526 2.75319 20.9526 4.85713V20.2119C20.9526 21.2639 20.0998 22.1167 19.0479 22.1167C18.6153 22.1167 18.1956 21.9694 17.8579 21.6992L12.5002 17.4125L7.1426 21.6992C6.32119 22.3564 5.12253 22.2233 4.46532 21.4019C4.19508 21.0641 4.04785 20.6445 4.04785 20.2119V4.85713C4.04785 2.75319 5.75343 1.04761 7.85738 1.04761ZM7.85738 2.95237C6.8054 2.95237 5.95261 3.80516 5.95261 4.85713V20.2119L11.3102 15.9252C12.0059 15.3686 12.9945 15.3686 13.6902 15.9252L19.0479 20.2119V4.85713C19.0479 3.80516 18.1951 2.95237 17.1431 2.95237H7.85738Z"
                                        fill="#92929D"
                                    />
                                </svg>
                                <div class="flex flex-col gap-[6px]">
                                    <a href="#">Save Link</a>
                                    <span
                                        class="font-[Roboto] text-xs font-normal text-textgray leading-4"
                                        >Add this to your saved items</span
                                    >
                                </div>
                            </div>
                        </DropdownLink>
                        <DropdownLink
                            :href="route('logout')"
                            method="post"
                            as="button"
                        >
                            <div class="flex gap-3">
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
                                        d="M16 1H8C4.13401 1 1 4.13401 1 8V16C1 19.866 4.13401 23 8 23H16C19.866 23 23 19.866 23 16V8C23 4.13401 19.866 1 16 1ZM3 8C3 5.23858 5.23858 3 8 3H16C18.7614 3 21 5.23858 21 8V16C21 18.7614 18.7614 21 16 21H8C5.23858 21 3 18.7614 3 16V8Z"
                                        fill="#B5B5BE"
                                    />
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M10.4142 11.8284L8.29289 9.70711C7.90237 9.31658 7.90237 8.68342 8.29289 8.29289C8.68342 7.90237 9.31658 7.90237 9.70711 8.29289L11.8284 10.4142L13.9497 8.29289C14.3403 7.90237 14.9734 7.90237 15.364 8.29289C15.7545 8.68342 15.7545 9.31658 15.364 9.70711L13.2426 11.8284L15.364 13.9497C15.7545 14.3403 15.7545 14.9734 15.364 15.364C14.9734 15.7545 14.3403 15.7545 13.9497 15.364L11.8284 13.2426L9.70711 15.364C9.31658 15.7545 8.68342 15.7545 8.29289 15.364C7.90237 14.9734 7.90237 14.3403 8.29289 13.9497L10.4142 11.8284Z"
                                        fill="#B5B5BE"
                                    />
                                </svg>
                                <div class="flex flex-col gap-[6px]">
                                    <a href="#"
                                        >Hide all from “Pan Feng Shui”</a
                                    >
                                    <span
                                        class="font-[Roboto] text-xs font-normal text-textgray leading-4"
                                        >Stop seeing post from this person</span
                                    >
                                </div>
                            </div>
                        </DropdownLink>
                        <DropdownLink
                            :href="route('logout')"
                            method="post"
                            as="button"
                        >
                            <div class="flex gap-3">
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
                                        d="M7.76923 7.82353C7.76923 5.15957 9.88727 3 12.5 3C15.1127 3 17.2308 5.15957 17.2308 7.82353C17.2308 9.49625 16.3957 10.9701 15.1274 11.8353C17.9737 12.9209 20 15.7192 20 19V21H5V19C5 15.7192 7.02635 12.9209 9.87257 11.8353C8.6043 10.9701 7.76923 9.49625 7.76923 7.82353ZM12.5 10.5294C13.9657 10.5294 15.1538 9.31795 15.1538 7.82353C15.1538 6.32911 13.9657 5.11765 12.5 5.11765C11.0343 5.11765 9.84615 6.32911 9.84615 7.82353C9.84615 9.31795 11.0343 10.5294 12.5 10.5294ZM12.5 13.4706C9.54347 13.4706 7.13953 15.8829 7.07813 18.8824H17.9219C17.8605 15.8829 15.4565 13.4706 12.5 13.4706Z"
                                        fill="#92929D"
                                    />
                                </svg>
                                <div class="flex flex-col gap-[6px]">
                                    <a href="#">Unfollow “Pan Feng Shui”</a>
                                    <span
                                        class="font-[Roboto] text-xs font-normal text-textgray leading-4"
                                        >Disconnected with this person</span
                                    >
                                </div>
                            </div>
                        </DropdownLink>
                    </template>
                </Dropdown>
            </div>
        </div>
        <!-- Container de post content -->
        <label
            for="#"
            class="text-sm font-normal leading-6 font-[Roboto] text-[#44444F]"
            >{{ description }}</label
        >

        <slot name="post-content"></slot>
        <!-- Linea -->
        <div
            class="mt-5 mb-5 border-linegray border-x-0 border-b-0 border"
        ></div>

        <!-- Comments likes and saved -->
        <div
            class="w-[585px] flex gap-12 font-[Roboto] text-color-posts pl-[10px]"
        >
            <div class="flex gap-[10px] items-center">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="25"
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
                <div>
                    <span>{{ comments_count }} Comments</span>
                </div>
            </div>
            <div class="flex gap-[10px] items-center">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    @click="likePost(post_id)"
                >
                    <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M12 4.12905L12.2215 3.9013C14.6871 1.36623 18.6965 1.36623 21.1621 3.9013C23.6126 6.42082 23.6126 10.4946 21.1621 13.0141L13.4337 20.9602C12.6636 21.752 11.3974 21.7696 10.6056 20.9994C10.5857 20.98 10.5857 20.98 10.5663 20.9602L2.83787 13.0141C0.387375 10.4946 0.387375 6.42082 2.83787 3.9013C5.3035 1.36623 9.31287 1.36623 11.7785 3.9013L12 4.12905ZM19.7284 11.6196C21.4239 9.87644 21.4239 7.03895 19.7284 5.29574C18.0481 3.56809 15.3355 3.56809 13.6552 5.29574L12.7169 6.26053C12.3242 6.66424 11.6758 6.66424 11.2831 6.26053L10.3448 5.29574C8.66445 3.56809 5.95192 3.56809 4.27159 5.29574C2.57614 7.03895 2.57614 9.87644 4.27159 11.6196L12 19.5657L19.7284 11.6196Z"
                        :fill="liked > 0 ? selected_color : unselected_color"
                    />
                </svg>
                <div>
                    <span>{{ likes_count }} Likes</span>
                </div>
            </div>
            <div class="flex gap-[10px] items-center">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    @click="savePost(post_id)"
                >
                    <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M7.85738 1.04762H17.1431C19.247 1.04762 20.9526 2.7532 20.9526 4.85715V20.2119C20.9526 21.2639 20.0998 22.1167 19.0479 22.1167C18.6153 22.1167 18.1956 21.9694 17.8579 21.6992L12.5002 17.4125L7.1426 21.6992C6.32119 22.3564 5.12253 22.2233 4.46532 21.4019C4.19508 21.0642 4.04785 20.6445 4.04785 20.2119V4.85715C4.04785 2.7532 5.75343 1.04762 7.85738 1.04762ZM7.85738 2.95238C6.8054 2.95238 5.95261 3.80518 5.95261 4.85715V20.2119L11.3102 15.9253C12.0059 15.3686 12.9945 15.3686 13.6902 15.9253L19.0479 20.2119V4.85715C19.0479 3.80518 18.1951 2.95238 17.1431 2.95238H7.85738Z"
                        :fill="saved > 0 ? selected_color : unselected_color"
                    />
                </svg>
                <div>
                    <span>{{ saveds_count }} Saved</span>
                </div>
            </div>
        </div>

        <!-- Linea -->
        <div
            class="mt-5 mb-5 border-linegray border-x-0 border-b-0 border"
        ></div>

        <!-- Div Write any comment -->
        <div class="h-[46p] flex items-center">
            <!-- Icon Profile -->
            <img
                src="#"
                alt="profile-photo"
                class="bg-gray-800 w-[36px] h-[36px] rounded-[25px] mr-[10px] flex"
            />

            <!--Div Input Write any comment and Upload Image -->
            <div
                class="w-[100%] h-[46px] bg-color-input border-linegray rounded-[15px] font-[Roboto] flex items-center justify-between pr-[15px]"
            >
                <!-- Input Write any comment -->
                <input
                    type="text"
                    placeholder="Write your comment"
                    class="w-[93%] h-[43px] border-none rounded[15px] flex text-color-posts pl-[15px] py-[11px] bg-color-input focus:ring-linegray"
                />
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
</template>
