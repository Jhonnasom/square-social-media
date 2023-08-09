<script setup>
import { Dropdown, ListGroup, ListGroupItem } from "flowbite-vue";
</script>
<template>
    <!-- Container Principal de Photos -->
    <div class="min-w-[902px] min-h[40px] mt-[32px]">
        <!-- Container de la barra de busqueda -->
        <div class="flex h-10 items-center justify-start gap-[29px] mb-9">
            <h2
                class="w-[18%] flex justify-center font-semibold text-2xl leading-9 font-[Poppins]"
            >
                Notifications
            </h2>
            <div class="flex items-center w-[25%] rounded-[10px] pl-3">
                <h2 class="text-base font-normal font-[Roboto] text-[#696974]">
                    Show:
                </h2>
                <select
                    class="w-[65%] bg-transparent border-none focus:ring-0 rounded-[10px] pr-0 text-base font-[Roboto] text-color-posts font-normal leading-normal"
                >
                    <option value="Newest">My Photos</option>
                    <option value="Oldest">All</option>
                    <option value="Oldest">My Friends</option>
                </select>
            </div>
        </div>

        <!-- Container de las notifications -->
        <div class="w-full flex flex-col gap-[10px]">
            <!-- Notifications Friends Posts -->
            <div
                class="h-[78px] bg-primary-color/5 rounded-[15px] flex py-[18px] px-5 justify-between"
            >
                <!-- Div Photo & Text Notifications -->
                <div class="flex gap-5">
                    <!-- Div Photo Profile -->
                    <div class="h-[42px] w-[42px] bg-black rounded-full">
                        <img src="#" alt="" class="rounded-full object-cover" />
                    </div>
                    <!-- Name and Info Notificacions -->
                    <div class="flex flex-col">
                        <div>
                            <span
                                class="text-[15px] font-semibold font-[Poppins] text-text-h2-gray"
                            >
                                Janeta Janet
                            </span>
                            <span
                                class="text-[15px] font-normal font-[Poppins] text-text-h2-gray"
                            >
                                posted in
                            </span>
                            <span
                                class="text-[15px] font-semibold font-[Poppins] text-text-h2-gray"
                            >
                                UI/UX Community :
                            </span>
                            <span
                                class="text-[15px] font-normal font-[Poppins] text-text-h2-gray"
                            >
                                “Mobile Apps UI Designer is required for Tech…”
                            </span>
                        </div>
                        <!-- Div Hours -->
                        <div>
                            <span
                                class="text-sm font-normal font-[Roboto] text-textgray"
                            >
                                12 Minutes ago
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Div Icon Notifications(Friends,Likes or comments & dropdown) -->
                <div class="flex items-center gap-5">
                    <!-- Icon Friends Blue -->
                    <svg
                        width="35"
                        height="34"
                        viewBox="0 0 35 34"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            opacity="0.1"
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M17.9178 34C27.3161 34 34.935 26.3888 34.935 17C34.935 7.61116 27.3161 0 17.9178 0C8.5194 0 0.900513 7.61116 0.900513 17C0.900513 26.3888 8.5194 34 17.9178 34Z"
                            fill="#0073FF"
                        />
                        <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M17.9178 11.4167C16.3975 11.4167 15.165 10.1855 15.165 8.66669C15.165 7.1479 16.3975 5.91669 17.9178 5.91669C19.4381 5.91669 20.6706 7.1479 20.6706 8.66669C20.6706 10.1855 19.4381 11.4167 17.9178 11.4167ZM17.9178 9.58335C18.4246 9.58335 18.8354 9.17295 18.8354 8.66669C18.8354 8.16043 18.4246 7.75002 17.9178 7.75002C17.411 7.75002 17.0002 8.16043 17.0002 8.66669C17.0002 9.17295 17.411 9.58335 17.9178 9.58335ZM17.0002 11.4167H18.8354C20.3557 11.4167 21.5882 12.6479 21.5882 14.1667V15.0834C21.5882 16.6021 20.3557 17.8334 18.8354 17.8334H17.0002C15.4799 17.8334 14.2474 16.6021 14.2474 15.0834V14.1667C14.2474 12.6479 15.4799 11.4167 17.0002 11.4167ZM17.0002 13.25C16.4934 13.25 16.0826 13.6604 16.0826 14.1667V15.0834C16.0826 15.5896 16.4934 16 17.0002 16H18.8354C19.3422 16 19.753 15.5896 19.753 15.0834V14.1667C19.753 13.6604 19.3422 13.25 18.8354 13.25H17.0002ZM24.341 19.6667C22.8206 19.6667 21.5882 18.4355 21.5882 16.9167C21.5882 15.3979 22.8206 14.1667 24.341 14.1667C25.8613 14.1667 27.0938 15.3979 27.0938 16.9167C27.0938 18.4355 25.8613 19.6667 24.341 19.6667ZM24.341 17.8334C24.8477 17.8334 25.2586 17.4229 25.2586 16.9167C25.2586 16.4104 24.8477 16 24.341 16C23.8342 16 23.4234 16.4104 23.4234 16.9167C23.4234 17.4229 23.8342 17.8334 24.341 17.8334ZM23.4234 19.6667H25.2586C26.7789 19.6667 28.0114 20.8979 28.0114 22.4167V23.3334C28.0114 24.8521 26.7789 26.0834 25.2586 26.0834H23.4234C21.903 26.0834 20.6706 24.8521 20.6706 23.3334V22.4167C20.6706 20.8979 21.903 19.6667 23.4234 19.6667ZM23.4234 21.5C22.9166 21.5 22.5058 21.9104 22.5058 22.4167V23.3334C22.5058 23.8396 22.9166 24.25 23.4234 24.25H25.2586C25.7653 24.25 26.1762 23.8396 26.1762 23.3334V22.4167C26.1762 21.9104 25.7653 21.5 25.2586 21.5H23.4234ZM11.4946 19.6667C9.97428 19.6667 8.74182 18.4355 8.74182 16.9167C8.74182 15.3979 9.97428 14.1667 11.4946 14.1667C13.0149 14.1667 14.2474 15.3979 14.2474 16.9167C14.2474 18.4355 13.0149 19.6667 11.4946 19.6667ZM11.4946 17.8334C12.0014 17.8334 12.4122 17.4229 12.4122 16.9167C12.4122 16.4104 12.0014 16 11.4946 16C10.9878 16 10.577 16.4104 10.577 16.9167C10.577 17.4229 10.9878 17.8334 11.4946 17.8334ZM10.577 19.6667H12.4122C13.9325 19.6667 15.165 20.8979 15.165 22.4167V23.3334C15.165 24.8521 13.9325 26.0834 12.4122 26.0834H10.577C9.05669 26.0834 7.82422 24.8521 7.82422 23.3334V22.4167C7.82422 20.8979 9.05669 19.6667 10.577 19.6667ZM10.577 21.5C10.0702 21.5 9.65941 21.9104 9.65941 22.4167V23.3334C9.65941 23.8396 10.0702 24.25 10.577 24.25H12.4122C12.919 24.25 13.3298 23.8396 13.3298 23.3334V22.4167C13.3298 21.9104 12.919 21.5 12.4122 21.5H10.577Z"
                            fill="#50B5FF"
                        />
                    </svg>

                    <!-- Dropdown -->

                    <dropdown text="Bottom" placement="left">
                        <template #trigger>
                            <!-- Dots Icon -->
                            <span>
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="25"
                                    height="24"
                                    viewBox="0 0 25 24"
                                    fill="none"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M7.96243 12C7.96243 10.8954 7.0661 10 5.9604 10C4.85471 10 3.95837 10.8954 3.95837 12C3.95837 13.1046 4.85471 14 5.9604 14C7.0661 14 7.96243 13.1046 7.96243 12Z"
                                        fill="#92929D"
                                    />
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M14.9695 12C14.9695 10.8954 14.0732 10 12.9675 10C11.8618 10 10.9655 10.8954 10.9655 12C10.9655 13.1046 11.8618 14 12.9675 14C14.0732 14 14.9695 13.1046 14.9695 12Z"
                                        fill="#92929D"
                                    />
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M21.9766 12C21.9766 10.8954 21.0803 10 19.9746 10C18.8689 10 17.9726 10.8954 17.9726 12C17.9726 13.1046 18.8689 14 19.9746 14C21.0803 14 21.9766 13.1046 21.9766 12Z"
                                        fill="#92929D"
                                    />
                                </svg>
                            </span>
                        </template>
                        <list-group>
                            <list-group-item>
                                Remove Notifications
                            </list-group-item>
                            <list-group-item>
                                Turn Off Notifications from Janeta
                            </list-group-item>
                        </list-group>
                    </dropdown>
                </div>
            </div>

            <!-- Notifications Likes -->
            <div
                class="h-[78px] bg-primary-color/5 rounded-[15px] flex py-[18px] px-5 justify-between"
            >
                <!-- Div Photo & Text Notifications -->
                <div class="flex gap-5">
                    <!-- Div Photo Profile -->
                    <div class="h-[42px] w-[42px] bg-black rounded-full">
                        <img src="#" alt="" class="rounded-full object-cover" />
                    </div>
                    <!-- Name and Info Notificacions -->
                    <div class="flex flex-col">
                        <div>
                            <span
                                class="text-[15px] font-semibold font-[Poppins] text-text-h2-gray"
                            >
                                Janeta Janet
                            </span>
                            <span
                                class="text-[15px] font-normal font-[Poppins] text-text-h2-gray"
                            >
                                liked your article that you’ve post.
                            </span>
                        </div>
                        <!-- Div Hours -->
                        <div>
                            <span
                                class="text-sm font-normal font-[Roboto] text-textgray"
                            >
                                12 Minutes ago
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Div Icon Notifications(Friends,Likes or comments & dropdown) -->
                <div class="flex items-center gap-5">
                    <!-- Icon Likes -->
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="35"
                        height="34"
                        viewBox="0 0 35 34"
                        fill="none"
                    >
                        <path
                            opacity="0.1"
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M17.9178 34C27.3161 34 34.935 26.3888 34.935 17C34.935 7.61116 27.3161 0 17.9178 0C8.5194 0 0.900513 7.61116 0.900513 17C0.900513 26.3888 8.5194 34 17.9178 34Z"
                            fill="#FFC542"
                        />
                        <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M17.9829 10.1349C20.1052 7.95504 23.5579 7.95504 25.6802 10.1349C27.7874 12.2992 27.7874 15.797 25.6802 17.9613L19.2333 24.583C18.5267 25.3088 17.3648 25.325 16.6382 24.619C16.62 24.6012 16.62 24.6012 16.6022 24.583L10.1553 17.9613C8.04817 15.797 8.04817 12.2992 10.1553 10.1349C12.2776 7.95504 15.7303 7.95504 17.8526 10.1349L17.9178 10.2018L17.9829 10.1349ZM17.9178 23.0657L24.245 16.5668C25.5964 15.1789 25.5964 12.9173 24.245 11.5293C22.9089 10.1569 20.7543 10.1569 19.4181 11.5293L18.6353 12.3333C18.2423 12.737 17.5932 12.737 17.2002 12.3333L16.4174 11.5293C15.0812 10.1569 12.9267 10.1569 11.5905 11.5293C10.2392 12.9173 10.2392 15.1789 11.5905 16.5668L17.9178 23.0657Z"
                            fill="#FFC542"
                        />
                    </svg>

                    <!-- Dropdown -->

                    <dropdown text="Bottom" placement="left">
                        <template #trigger>
                            <!-- Dots Icon -->
                            <span>
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="25"
                                    height="24"
                                    viewBox="0 0 25 24"
                                    fill="none"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M7.96243 12C7.96243 10.8954 7.0661 10 5.9604 10C4.85471 10 3.95837 10.8954 3.95837 12C3.95837 13.1046 4.85471 14 5.9604 14C7.0661 14 7.96243 13.1046 7.96243 12Z"
                                        fill="#92929D"
                                    />
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M14.9695 12C14.9695 10.8954 14.0732 10 12.9675 10C11.8618 10 10.9655 10.8954 10.9655 12C10.9655 13.1046 11.8618 14 12.9675 14C14.0732 14 14.9695 13.1046 14.9695 12Z"
                                        fill="#92929D"
                                    />
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M21.9766 12C21.9766 10.8954 21.0803 10 19.9746 10C18.8689 10 17.9726 10.8954 17.9726 12C17.9726 13.1046 18.8689 14 19.9746 14C21.0803 14 21.9766 13.1046 21.9766 12Z"
                                        fill="#92929D"
                                    />
                                </svg>
                            </span>
                        </template>
                        <list-group>
                            <list-group-item>
                                Remove Notifications
                            </list-group-item>
                            <list-group-item>
                                Turn Off Notifications from Janeta
                            </list-group-item>
                        </list-group>
                    </dropdown>
                </div>
            </div>

            <!-- Notifications Comments -->
            <div
                class="h-[78px] bg-primary-color/5 rounded-[15px] flex py-[18px] px-5 justify-between"
            >
                <!-- Div Photo & Text Notifications -->
                <div class="flex gap-5">
                    <!-- Div Photo Profile -->
                    <div class="h-[42px] w-[42px] bg-black rounded-full">
                        <img src="#" alt="" class="rounded-full object-cover" />
                    </div>
                    <!-- Name and Info Notificacions -->
                    <div class="flex flex-col">
                        <div>
                            <span
                                class="text-[15px] font-semibold font-[Poppins] text-text-h2-gray"
                            >
                                Janeta Janet
                            </span>
                            <span
                                class="text-[15px] font-normal font-[Poppins] text-text-h2-gray"
                            >
                                commented your post : “That’s really coll dude”
                            </span>
                        </div>
                        <!-- Div Hours -->
                        <div>
                            <span
                                class="text-sm font-normal font-[Roboto] text-textgray"
                            >
                                12 Minutes ago
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Div Icon Notifications(Friends,Likes or comments & dropdown) -->
                <div class="flex items-center gap-5">
                    <!-- Icon Comments -->
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="35"
                        height="34"
                        viewBox="0 0 35 34"
                        fill="none"
                    >
                        <path
                            opacity="0.1"
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M17.9178 34C27.3161 34 34.935 26.3888 34.935 17C34.935 7.61116 27.3161 0 17.9178 0C8.5194 0 0.900513 7.61116 0.900513 17C0.900513 26.3888 8.5194 34 17.9178 34Z"
                            fill="#82C43C"
                        />
                        <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12.4482 23.56C12.4498 24.5541 13.2579 25.3587 14.253 25.3571C14.6535 25.3564 15.0423 25.2225 15.3581 24.9765L18.3424 22.6516H23.9238C25.5824 22.6516 26.9269 21.3085 26.9269 19.6516V12C26.9269 10.3431 25.5824 9 23.9238 9H12.0785C10.42 9 9.07544 10.3431 9.07544 12V19.6516C9.07544 21.3085 10.42 22.6516 12.0785 22.6516H12.4468L12.4482 23.56ZM14.4472 21.65C14.4463 21.0983 13.9984 20.6516 13.4462 20.6516H12.0785C11.5256 20.6516 11.0775 20.2039 11.0775 19.6516V12C11.0775 11.4477 11.5256 11 12.0785 11H23.9238C24.4767 11 24.9248 11.4477 24.9248 12V19.6516C24.9248 20.2039 24.4767 20.6516 23.9238 20.6516H17.9838C17.698 20.6516 17.4472 20.7687 17.268 20.9523L14.4496 23.148L14.4472 21.65Z"
                            fill="#82C43C"
                        />
                    </svg>

                    <!-- Dropdown -->

                    <dropdown text="Bottom" placement="left">
                        <template #trigger>
                            <!-- Dots Icon -->
                            <span>
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="25"
                                    height="24"
                                    viewBox="0 0 25 24"
                                    fill="none"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M7.96243 12C7.96243 10.8954 7.0661 10 5.9604 10C4.85471 10 3.95837 10.8954 3.95837 12C3.95837 13.1046 4.85471 14 5.9604 14C7.0661 14 7.96243 13.1046 7.96243 12Z"
                                        fill="#92929D"
                                    />
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M14.9695 12C14.9695 10.8954 14.0732 10 12.9675 10C11.8618 10 10.9655 10.8954 10.9655 12C10.9655 13.1046 11.8618 14 12.9675 14C14.0732 14 14.9695 13.1046 14.9695 12Z"
                                        fill="#92929D"
                                    />
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M21.9766 12C21.9766 10.8954 21.0803 10 19.9746 10C18.8689 10 17.9726 10.8954 17.9726 12C17.9726 13.1046 18.8689 14 19.9746 14C21.0803 14 21.9766 13.1046 21.9766 12Z"
                                        fill="#92929D"
                                    />
                                </svg>
                            </span>
                        </template>
                        <list-group>
                            <list-group-item>
                                Remove Notifications
                            </list-group-item>
                            <list-group-item>
                                Turn Off Notifications from Janeta
                            </list-group-item>
                        </list-group>
                    </dropdown>
                </div>
            </div>
        </div>
    </div>
</template>
