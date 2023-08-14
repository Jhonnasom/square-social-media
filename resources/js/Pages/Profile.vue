<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link } from "@inertiajs/vue3";
import { Modal } from "flowbite-vue";
import ShapePost from "@/Components/ShapePost.vue";
import { ref } from "vue";
const isShowModal = ref(false);
function closeModal() {
    isShowModal.value = false;
}
function showModal() {
    isShowModal.value = true;
}
const publishPost = ref({
    description: "",
    images: [],
});
function createPost() {
    if (publishPost.value.description === "") {
        alert("Please write something");
        return;
    }
    const formData = new FormData();
    formData.append("description", publishPost.value.description);
    for (let i = 0; i < publishPost.value.images.length; i++) {
        formData.append("images[]", publishPost.value.images[i]);
    }
    axios
        .post("http://127.0.0.1:8000/api/posts", formData, {
            headers: {
                "Content-Type": "multipart/form-data",
            },
        })
        .then((response) => {
            const newPost = response.data;
            posts.value.unshift(newPost);
        })
        .catch((error) => {
            console.log(error);
        })
        .finally(() => {
            publishPost.value.description = "";
            publishPost.value.images = [];
            closeModal();
        });
}

function post_updated(post_id) {
    axios
        .get("http://127.0.0.1:8000/api/posts/" + post_id)
        .then((response) => {
            const post_updated = response.data;
            const index = posts.value.findIndex((post) => post.id === post_id);
            posts.value[index] = post_updated;
        })
        .catch((error) => {
            console.log(error);
        });
}

function post_deleted(post_id) {
    const index = posts.value.findIndex((post) => post.id === post_id);
    posts.value.splice(index, 1);
}

function onFileChanged($event) {
    publishPost.value.images = [];
    const target = $event.target;
    if (target && target.files) {
        if (target.files.length > 3) {
            alert("You can select up to 3 images");
            return;
        }
        for (let i = 0; i < target.files.length; i++) {
            publishPost.value.images.push(target.files[i]);
        }
    }
}
// consumiendo un api con axios
const posts = ref([]);
axios
    .get("http://127.0.0.1:8000/api/posts")
    .then((response) => {
        posts.value = response.data;
        console.log(posts.value);
    })
    .catch((error) => {
        console.log(error);
    });

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
    <Head title="My Profile" />
    <AuthenticatedLayout>
        <template #asideright>
            <!-- Container Principal -->
            <div class="min-w-[970px] min-h[331px] mt-[32px]">
                <!-- Container de Banner en la portada tiene que ir una foto -->
                <div class="h-[331px]">
                    <div
                        class="h-[260px] bg-gradient-to-r p-5 from-indigo-500 via-purple-500 to-pink-500 rounded-tl-[15px] rounded-tr-[15px] flex flex-col"
                    >
                        <!-- <img src="#"> -->
                        <!-- Div Edit Profile -->
                        <div class="h-[154px] flex justify-end">
                            <Link :href="route('profile.edit')">
                                <button
                                    class="w-[95px] h-[38px] bg-gray-800/50 rounded-[10px] border border-white text-white text-xs font-semibold font-[Poppins]"
                                >
                                    <span class="">Edit Profile</span>
                                </button>
                            </Link>
                        </div>
                        <!-- Div Photo and Information Profile -->
                        <div class="h-[106px] flex gap-[33px]">
                            <!-- Photo Profile -->
                            <div
                                class="w-[161px] h-[161px] rounded-full border-4 border-white"
                            >
                                <img
                                    :src="$page.props.photo_profile"
                                    alt=""
                                    class="w-full h-full rounded-full"
                                />
                            </div>
                            <!-- Information Profile -->
                            <div class="mt-[29px]">
                                <!-- Name -->
                                <h2
                                    class="text-color-input text-2xl font-[Poppins] font-semibold leading-9"
                                >
                                    {{ $page.props.auth.user.name }}
                                </h2>
                                <!-- Alias -->
                                <span
                                    class="text-base leading-[26px] font-[Roboto] text-[#D5D5DC]"
                                    >@{{ $page.props.auth.user.alias }}</span
                                >
                            </div>
                        </div>

                        <div class=""></div>
                    </div>
                    <!-- Container de Posts, Followers,Following and Likes -->
                    <div
                        class="h-[71px] bg-white rounded-bl-[15px] rounded-bg-[15px] flex justify-end pr-[147px]"
                    >
                        <!-- Posts -->
                        <div
                            class="min-w-[72px] flex flex-col justify-between text-center pt-[10px]"
                        >
                            <span
                                class="text-sm font-[Poppins] font-normal text-primary-color"
                                >Post</span
                            >
                            <span
                                class="text-base font-[Poppins] font-semibold text-primary-color"
                                >10.3K</span
                            >
                            <div
                                class="h-[3px] bg-primary-color rounded-tl-[15px] rounded-tr-[15px] flex items-end"
                            ></div>
                        </div>
                        <!-- Followers -->
                        <div
                            class="min-w-[94px] flex flex-col justify-between text-center pt-[10px]"
                        >
                            <span
                                class="text-sm font-[Poppins] font-normal text-textgray"
                                >Followers</span
                            >
                            <span
                                class="text-base font-[Poppins] font-semibold text-color-posts"
                                >2,564</span
                            >
                            <div
                                class="invisible h-[3px] bg-primary-color rounded-tl-[15px] rounded-tr-[15px] flex items-end hi"
                            ></div>
                        </div>
                        <!-- Following -->
                        <div
                            class="min-w-[94px] flex flex-col justify-between text-center pt-[10px]"
                        >
                            <span
                                class="text-sm font-[Poppins] font-normal text-textgray"
                                >Following</span
                            >
                            <span
                                class="text-base font-[Poppins] font-semibold text-color-posts"
                                >3,154</span
                            >
                            <div
                                class="invisible h-[3px] bg-primary-color rounded-tl-[15px] rounded-tr-[15px] flex items-end hi"
                            ></div>
                        </div>
                        <!-- Likes -->
                        <div
                            class="min-w-[74px] flex flex-col justify-between text-center pt-[10px]"
                        >
                            <span
                                class="text-sm font-[Poppins] font-normal text-textgray"
                                >Likes</span
                            >
                            <span
                                class="text-base font-[Poppins] font-semibold text-color-posts"
                                >12.2k</span
                            >
                            <div
                                class="invisible h-[3px] bg-primary-color rounded-tl-[15px] rounded-tr-[15px] flex items-end hi"
                            ></div>
                        </div>
                        <!-- Photos -->
                        <div
                            class="min-w-[74px] flex flex-col justify-between text-center pt-[10px]"
                        >
                            <span
                                class="text-sm font-[Poppins] font-normal text-textgray"
                                >Photos</span
                            >
                            <span
                                class="text-base font-[Poppins] font-semibold text-color-posts"
                                >35</span
                            >
                            <div
                                class="invisible h-[3px] bg-primary-color rounded-tl-[15px] rounded-tr-[15px] flex items-end hi"
                            ></div>
                        </div>
                        <!-- Saved -->
                        <div
                            class="min-w-[74px] flex flex-col justify-between text-center pt-[10px]"
                        >
                            <span
                                class="text-sm font-[Poppins] font-normal text-textgray"
                                >Saved</span
                            >
                            <span
                                class="text-base font-[Poppins] font-semibold text-color-posts"
                                >18</span
                            >
                            <div
                                class="invisible h-[3px] bg-primary-color rounded-tl-[15px] rounded-tr-[15px] flex items-end hi"
                            ></div>
                        </div>
                    </div>
                </div>
                <!-- Container de los divs-cols Complete Your Profiles|Post Something -->
                <div class="flex mt-5 gap-[30px]">
                    <!-- Div Izquierdo -->
                    <div class="w-[335px] flex flex-col gap-5">
                        <!-- Div Complete Your Profile and Progress Bar -->
                        <div
                            class="h-[89px] rounded-[15px] bg-white px-5 pt-[15px] flex flex-col gap-[15px]"
                        >
                            <h2
                                class="font-[Poppins] text-sm font-medium text-text-h2-gray"
                            >
                                Complete Your Profile
                            </h2>
                            <!-- Progress Bar -->
                            <div class="flex items-center gap-[15px]">
                                <div
                                    class="w-[255px] bg-gray-200 rounded-full h-[6px] dark:bg-gray-700 flex"
                                >
                                    <div
                                        class="bg-blue-600 h-[6px] rounded-tl-[8.5px] rounded-bl-[8.5px]"
                                        style="width: 75%"
                                    ></div>
                                </div>
                                <span>75%</span>
                            </div>
                        </div>

                        <!-- Div About Me -->
                        <div
                            class="min-h-[345px] bg-white rounded-[15px] flex flex-col"
                        >
                            <!-- About me and dots -->
                            <div
                                class="h-[50px] px-5 flex justify-between items-center border-x-0 border-t-0 border-b-linegray border"
                            >
                                <h2
                                    class="font-[Poppins] text-sm font-medium text-text-h2-gray"
                                >
                                    About Me
                                </h2>
                                <!-- Dots Icons -->
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
                            </div>
                            <!-- Text -->
                            <div class="pl-5 w-[335px] pt-[15px] h-[78px]">
                                <div
                                    class="w-[290px] font-[Roboto] text-sm font-normal leading-6 text-color-posts"
                                >
                                    <span>
                                        “Pushing pixels and experiences in
                                        digital products for Sebostudio”
                                    </span>
                                </div>
                            </div>
                            <!-- linea -->
                            <div
                                class="h-[1px] w-[305px] bg-linegray ml-[15px]"
                            ></div>
                        </div>

                        <!-- Div Photos -->
                        <div class="h-[280px] bg-white rounded-[15px]">
                            <!-- Photos and see all -->
                            <div class="flex justify-between h-[49px]">
                                <h2
                                    class="font-[Poppins] text-sm font-medium text-text-h2-gray px-5 pt-[15px]"
                                >
                                    Photos
                                </h2>
                                <Link
                                    :href="route('photos')"
                                    class="text-xs font-[Poppins] font-medium text-primary-color px-5 pt-[15px]"
                                >
                                    SEE ALL
                                </Link>
                            </div>
                            <hr />

                            <!-- Grid de Photos -->
                            <div class="py-5 grid grid-cols-3 pl-[15px]">
                                <div
                                    v-for="(image, i) in images"
                                    :key="i"
                                    class="w-[90px] h-[90px] bg-lime-500 rounded-[15px] mb-[10px] mt-5"
                                >
                                    <img
                                        :src="image"
                                        class="w-[90px] h-[90px] object-cover rounded-[15px]"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Div Derecho  -->
                    <div class="w-[595px] flex flex-col gap-5 mb-5">
                        <!-- Div Post Something -->
                        <div class="h-[107px] rounded-[15px] bg-white">
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
                                    :src="$page.props.photo_profile"
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
                                            <div
                                                class="flex items-center gap-5"
                                            >
                                                <!-- Icon Profile -->
                                                <img
                                                    :src="
                                                        $page.props
                                                            .photo_profile
                                                    "
                                                    alt="#"
                                                    class="bg-gray-800 w-9 h-9 rounded-3xl mr-[10px] flex"
                                                />

                                                <!--Div Input Write any comment and Upload Image -->
                                                <div
                                                    class="w-[100%] border-linegray rounded-[15px] font-[Roboto] flex items-center justify-between"
                                                >
                                                    <!-- Input Write any comment -->
                                                    <textarea
                                                        v-model="
                                                            publishPost.description
                                                        "
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
                                                        <span class="sr-only"
                                                            >Loading...</span
                                                        >
                                                    </div>
                                                </div>
                                            </div>
                                        </template>
                                        <template #footer>
                                            <div
                                                class="flex justify-between items-center"
                                            >
                                                <input
                                                    type="file"
                                                    class="hidden"
                                                    id="file-upload"
                                                    @change="
                                                        onFileChanged($event)
                                                    "
                                                    accept="image/*"
                                                    multiple
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
                                                <label
                                                    >{{
                                                        publishPost.images
                                                            .length
                                                    }}
                                                    Imagenes
                                                    Seleccionadas</label
                                                >

                                                <button
                                                    @click="createPost"
                                                    type="button"
                                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                                >
                                                    Share Post
                                                </button>
                                            </div>
                                        </template>
                                    </Modal>

                                    <!-- Input Upload image or file -->
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
                                </div>
                            </div>
                        </div>
                        <shape-post
                            v-for="post in posts"
                            :key="post.id"
                            :auth_id="post.auth_id"
                            :user_id="post.user.id"
                            :user_name="post.user.name"
                            :date="post.created_at"
                            :post_id="post.id"
                            :description="post.description"
                            :comments_count="post.comments_count"
                            :likes_count="post.likes_count"
                            :shares_count="post.shares_count"
                            :saveds_count="post.saveds_count"
                            :liked="post.liked"
                            :saved="post.saved"
                            :media="post.media"
                            :auth_photo="
                                post.user.media.length > 0
                                    ? post.user.media[0].original_url
                                    : ''
                            "
                            @post_updated="post_updated"
                            @post_deleted="post_deleted"
                        ></shape-post>
                    </div>
                </div>
            </div>
        </template>
    </AuthenticatedLayout>
</template>
