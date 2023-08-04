<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import IconUploadImage from '@/Components/IconUploadImage.vue';
import Dropdown from '@/Components/Dropdown.vue';
// import { library } from '@fortawesome/fontawesome-svg-core';
// import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
// import { faBookmark } from '@fortawesome/free-regular-svg-icons'
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
      <!-- AsideBar -->
        <template #header>
          <!-- Div Photo Profile and username -->
          <div class="flex gap-[10px] ps-3 mb-5 pt-3 w-[230px] min-h-[64px] bg-[#fafafb] rounded-[15px] border border-secondary-gray">
            <!-- Photo Profile User -->
            <div class="h-[42px] w-[32px]">
              <img src="https://i.pravatar.cc/150?img=3" class="rounded-full w-[32px] h-[32px]">
            </div>

            <!-- Name User -->
            <div>
              <div class="text-[#171725] text-sm leading-normal font-[Poppins] tracking-[0.1px] font-semibold">
                {{ $page.props.auth.user.name }}
              </div>
              <div>
                <span class="text-[#92929D] text-xs font-normal font-[Roboto] tracking-[0.1px]">@fawaid</span>
              </div>
            </div>
            
          </div>
          <!-- Div Feed,Friends,Photos -->
          <div class="flex gap-4 flex-col  w-[250px] ">
            <!-- Feed -->
              <div class="h-[34.6px] w-[250px]">
                <a href="#" class="flex gap-5 items-center">
                  <!-- svg feed -->
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M7 12H6C3.79086 12 2 13.7909 2 16V18C2 20.2091 3.79086 22 6 22H7C9.20914 22 11 20.2091 11 18V16C11 13.7909 9.20914 12 7 12ZM4 16C4 14.8954 4.89543 14 6 14H7C8.10457 14 9 14.8954 9 16V18C9 19.1046 8.10457 20 7 20H6C4.89543 20 4 19.1046 4 18V16Z" fill="#0062FF"/>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M9 5.5C9 3.567 7.433 2 5.5 2C3.567 2 2 3.567 2 5.5V6.5C2 8.433 3.567 10 5.5 10C7.433 10 9 8.433 9 6.5V5.5ZM4 5.5C4 4.67157 4.67157 4 5.5 4C6.32843 4 7 4.67157 7 5.5V6.5C7 7.32843 6.32843 8 5.5 8C4.67157 8 4 7.32843 4 6.5V5.5Z" fill="#0062FF"/>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M18 11H17C14.7909 11 13 12.7909 13 15V18C13 20.2091 14.7909 22 17 22H18C20.2091 22 22 20.2091 22 18V15C22 12.7909 20.2091 11 18 11ZM15 15C15 13.8954 15.8954 13 17 13H18C19.1046 13 20 13.8954 20 15V18C20 19.1046 19.1046 20 18 20H17C15.8954 20 15 19.1046 15 18V15Z" fill="#0062FF"/>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M18.5 2H14.5C12.567 2 11 3.567 11 5.5C11 7.433 12.567 9 14.5 9H18.5C20.433 9 22 7.433 22 5.5C22 3.567 20.433 2 18.5 2ZM13 5.5C13 4.67157 13.6716 4 14.5 4H18.5C19.3284 4 20 4.67157 20 5.5C20 6.32843 19.3284 7 18.5 7H14.5C13.6716 7 13 6.32843 13 5.5Z" fill="#0062FF"/>
                  </svg>
                  <span class="text-primary-color font-[Poppins] font-semibold text-sm ">Feed</span>
                </a>
              </div>
              <!-- Friends -->
              <div class="h-[34.6px] w-[250px]">
                  <a href="#" class="flex gap-5 items-center">
                    <!-- svg friends -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 7.55591C10.3431 7.55591 9 6.21276 9 4.55591C9 2.89905 10.3431 1.55591 12 1.55591C13.6569 1.55591 15 2.89905 15 4.55591C15 6.21276 13.6569 7.55591 12 7.55591ZM12 5.55591C12.5523 5.55591 13 5.10819 13 4.55591C13 4.00362 12.5523 3.55591 12 3.55591C11.4477 3.55591 11 4.00362 11 4.55591C11 5.10819 11.4477 5.55591 12 5.55591ZM11 7.55591H13C14.6569 7.55591 16 8.89905 16 10.5559V11.5559C16 13.2128 14.6569 14.5559 13 14.5559H11C9.34315 14.5559 8 13.2128 8 11.5559V10.5559C8 8.89905 9.34315 7.55591 11 7.55591ZM11 9.55591C10.4477 9.55591 10 10.0036 10 10.5559V11.5559C10 12.1082 10.4477 12.5559 11 12.5559H13C13.5523 12.5559 14 12.1082 14 11.5559V10.5559C14 10.0036 13.5523 9.55591 13 9.55591H11ZM19 16.5559C17.3431 16.5559 16 15.2128 16 13.5559C16 11.8991 17.3431 10.5559 19 10.5559C20.6569 10.5559 22 11.8991 22 13.5559C22 15.2128 20.6569 16.5559 19 16.5559ZM19 14.5559C19.5523 14.5559 20 14.1082 20 13.5559C20 13.0036 19.5523 12.5559 19 12.5559C18.4477 12.5559 18 13.0036 18 13.5559C18 14.1082 18.4477 14.5559 19 14.5559ZM18 16.5559H20C21.6569 16.5559 23 17.8991 23 19.5559V20.5559C23 22.2128 21.6569 23.5559 20 23.5559H18C16.3431 23.5559 15 22.2128 15 20.5559V19.5559C15 17.8991 16.3431 16.5559 18 16.5559ZM18 18.5559C17.4477 18.5559 17 19.0036 17 19.5559V20.5559C17 21.1082 17.4477 21.5559 18 21.5559H20C20.5523 21.5559 21 21.1082 21 20.5559V19.5559C21 19.0036 20.5523 18.5559 20 18.5559H18ZM5 16.5559C3.34315 16.5559 2 15.2128 2 13.5559C2 11.8991 3.34315 10.5559 5 10.5559C6.65685 10.5559 8 11.8991 8 13.5559C8 15.2128 6.65685 16.5559 5 16.5559ZM5 14.5559C5.55228 14.5559 6 14.1082 6 13.5559C6 13.0036 5.55228 12.5559 5 12.5559C4.44772 12.5559 4 13.0036 4 13.5559C4 14.1082 4.44772 14.5559 5 14.5559ZM4 16.5559H6C7.65685 16.5559 9 17.8991 9 19.5559V20.5559C9 22.2128 7.65685 23.5559 6 23.5559H4C2.34315 23.5559 1 22.2128 1 20.5559V19.5559C1 17.8991 2.34315 16.5559 4 16.5559ZM4 18.5559C3.44772 18.5559 3 19.0036 3 19.5559V20.5559C3 21.1082 3.44772 21.5559 4 21.5559H6C6.55228 21.5559 7 21.1082 7 20.5559V19.5559C7 19.0036 6.55228 18.5559 6 18.5559H4Z" fill="#92929D"/>
                    </svg>
                    <span class="text-[#171725] font-[Poppins] font-semibold text-sm ">Friends</span>
                  </a>
              </div>
              <!-- Photos -->
              <div class="h-[34.6px] w-[250px]">
                    <a href="#" class="flex gap-5 items-center">
                      <!-- svg photos -->
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M23 15.1727V19.1118C23 21.321 21.2091 23.1118 19 23.1118H5C2.79086 23.1118 1 21.321 1 19.1118V5.11182C1 2.90268 2.79086 1.11182 5 1.11182H19C21.2091 1.11182 23 2.90268 23 5.11182V15.0509C23.0025 15.0915 23.0025 15.1322 23 15.1727ZM21 15.5243L17.0001 11.5259L13.2201 15.3059L18.4454 21.1118H19C20.1046 21.1118 21 20.2164 21 19.1118V15.5243ZM21 12.6964V5.11182C21 4.00725 20.1046 3.11182 19 3.11182H5C3.89543 3.11182 3 4.00725 3 5.11182V16.6976L8.29289 11.4047C8.69802 10.9996 9.36002 11.017 9.74329 11.4429L11.8803 13.8173L16.2929 9.40471C16.6834 9.01424 17.3164 9.01418 17.707 9.40458L21 12.6964ZM15.7546 21.1118L8.96181 13.5642L3.03576 19.4903C3.21265 20.4139 4.02482 21.1118 5 21.1118H15.7546ZM8.5 9.11182C7.11929 9.11182 6 7.99253 6 6.61182C6 5.2311 7.11929 4.11182 8.5 4.11182C9.88071 4.11182 11 5.2311 11 6.61182C11 7.99253 9.88071 9.11182 8.5 9.11182ZM8.5 7.11182C8.77614 7.11182 9 6.88796 9 6.61182C9 6.33567 8.77614 6.11182 8.5 6.11182C8.22386 6.11182 8 6.33567 8 6.61182C8 6.88796 8.22386 7.11182 8.5 7.11182Z" fill="#92929D"/>
                      </svg>
                      <span class="text-[#171725] font-[Poppins] font-semibold text-sm ">Photos</span>
                    </a>
              </div>
          </div>
        
        </template>

        <template #asideright>
          <!-- div principal aside right -->
          <div>
            <!-- div con contenido dinamico Feed -->
              <div class="w-[625px] min-h-screen flex flex-col gap-5">
                <!-- div post something -->
                  <div class="h-[107px] bg-white mt-[13px] rounded-[15px] font-[Poppins] text-sm font-medium text-text-h2-gray ">
                      <div class="pt-[10px] h-10 border-x-0 border-t-0 border-b-[#f1f1f5] border-2">
                        <h2 class="pl-[15px]">Post Something</h2>
                      </div>

                      <div class="h-[67px] pl-[15px] flex items-center justify-normal">
                        <img src="#" alt="profile-photo" class="bg-gray-800 w-9 h-9 rounded-[25px] mr-5 flex " >

                        <a href="#" class="flex text-textgray font-[Poppins] font-semibold text-sm pr-[356px] ">What's on your mind?</a>

                        <!-- Button para subir imagenes -->
              
                          <IconUploadImage class="flex"></IconUploadImage>                    
                        <!-- <input type="text" name="post" id="post" placeholder="What's on your mind?" class="bg-[#f1f1f5] w-[500px] h-[40px] rounded-[25px] pl-[15px] outline-none"> -->
                      </div>
                  </div>

              <div class=" min-h-[269px] h-auto bg-white px-5 py-5 rounded-[15px] font-[Poppins] text-sm font-medium text-text-h2-gray " >
                    <!-- Container Photo, Name and Datetime -->
                    <div class="flex justify-between mb-5" >
                        <div class="h-[42px] flex">
                          <img src="#" alt="profile-photo" class="bg-gray-800 w-[42px] h-[42px] rounded-[25px] mr-5 flex " >
                           <div class="w-[109px] h-[42px] flex flex-col gap-1">
                              <h2>Pan Feng Shui</h2>
                              <!-- Fecha en que se publico el post -->
                              <p class="text-xs font-normal font-[Roboto] text-textgray ">12 April at 09.28 PM</p>
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
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7 12C7 10.8954 6.10457 10 5 10C3.89543 10 3 10.8954 3 12C3 13.1046 3.89543 14 5 14C6.10457 14 7 13.1046 7 12Z" fill="#92929D"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14 12C14 10.8954 13.1046 10 12 10C10.8954 10 10 10.8954 10 12C10 13.1046 10.8954 14 12 14C13.1046 14 14 13.1046 14 12Z" fill="#92929D"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M21 12C21 10.8954 20.1046 10 19 10C17.8954 10 17 10.8954 17 12C17 13.1046 17.8954 14 19 14C20.1046 14 21 13.1046 21 12Z" fill="#92929D"/>
                                                    </svg>
                                                  
                                                </button>
                                            </span>
                                        </template>

                                        <template #content>
                                          <!-- Se tiene que hacer el metodo save link-->
                                            <DropdownLink :href="route('profile.edit')">
                                               <div class="flex gap-3">
                                                  <!-- <fa :icon="['far','bookmark']" size="lg" style="color:#92929D" /> -->
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M7.85738 1.04761H17.1431C19.247 1.04761 20.9526 2.75319 20.9526 4.85713V20.2119C20.9526 21.2639 20.0998 22.1167 19.0479 22.1167C18.6153 22.1167 18.1956 21.9694 17.8579 21.6992L12.5002 17.4125L7.1426 21.6992C6.32119 22.3564 5.12253 22.2233 4.46532 21.4019C4.19508 21.0641 4.04785 20.6445 4.04785 20.2119V4.85713C4.04785 2.75319 5.75343 1.04761 7.85738 1.04761ZM7.85738 2.95237C6.8054 2.95237 5.95261 3.80516 5.95261 4.85713V20.2119L11.3102 15.9252C12.0059 15.3686 12.9945 15.3686 13.6902 15.9252L19.0479 20.2119V4.85713C19.0479 3.80516 18.1951 2.95237 17.1431 2.95237H7.85738Z" fill="#92929D"/>
                                                </svg>
                                                  <div class="flex flex-col gap-[6px]">
                                                    <a href="#">Save Link</a>
                                                    <span class="font-[Roboto] text-xs font-normal text-textgray leading-4 ">Add this to your saved items</span>
                                                  </div>
                                                </div>
                                            </DropdownLink>
                                            <DropdownLink :href="route('logout')" method="post" as="button">
                                                <div class="flex gap-3">
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M16 1H8C4.13401 1 1 4.13401 1 8V16C1 19.866 4.13401 23 8 23H16C19.866 23 23 19.866 23 16V8C23 4.13401 19.866 1 16 1ZM3 8C3 5.23858 5.23858 3 8 3H16C18.7614 3 21 5.23858 21 8V16C21 18.7614 18.7614 21 16 21H8C5.23858 21 3 18.7614 3 16V8Z" fill="#B5B5BE"/>
                                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M10.4142 11.8284L8.29289 9.70711C7.90237 9.31658 7.90237 8.68342 8.29289 8.29289C8.68342 7.90237 9.31658 7.90237 9.70711 8.29289L11.8284 10.4142L13.9497 8.29289C14.3403 7.90237 14.9734 7.90237 15.364 8.29289C15.7545 8.68342 15.7545 9.31658 15.364 9.70711L13.2426 11.8284L15.364 13.9497C15.7545 14.3403 15.7545 14.9734 15.364 15.364C14.9734 15.7545 14.3403 15.7545 13.9497 15.364L11.8284 13.2426L9.70711 15.364C9.31658 15.7545 8.68342 15.7545 8.29289 15.364C7.90237 14.9734 7.90237 14.3403 8.29289 13.9497L10.4142 11.8284Z" fill="#B5B5BE"/>
                                                  </svg>
                                                  <div class="flex flex-col gap-[6px]">
                                                      <a href="#">Hide all from “Pan Feng Shui”</a>
                                                      <span class="font-[Roboto] text-xs font-normal text-textgray leading-4 ">Stop seeing post from this person</span>
                                                    </div>
                                                </div>
                                            </DropdownLink>
                                            <DropdownLink :href="route('logout')" method="post" as="button">
                                                  <div class="flex gap-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.76923 7.82353C7.76923 5.15957 9.88727 3 12.5 3C15.1127 3 17.2308 5.15957 17.2308 7.82353C17.2308 9.49625 16.3957 10.9701 15.1274 11.8353C17.9737 12.9209 20 15.7192 20 19V21H5V19C5 15.7192 7.02635 12.9209 9.87257 11.8353C8.6043 10.9701 7.76923 9.49625 7.76923 7.82353ZM12.5 10.5294C13.9657 10.5294 15.1538 9.31795 15.1538 7.82353C15.1538 6.32911 13.9657 5.11765 12.5 5.11765C11.0343 5.11765 9.84615 6.32911 9.84615 7.82353C9.84615 9.31795 11.0343 10.5294 12.5 10.5294ZM12.5 13.4706C9.54347 13.4706 7.13953 15.8829 7.07813 18.8824H17.9219C17.8605 15.8829 15.4565 13.4706 12.5 13.4706Z" fill="#92929D"/>
                                                   </svg>
                                                   <div class="flex flex-col gap-[6px]">
                                                      <a href="#">Unfollow “Pan Feng Shui”</a>
                                                      <span class="font-[Roboto] text-xs font-normal text-textgray leading-4 ">Disconnected with this person</span>
                                                    </div>
                                                  </div>
                                              </DropdownLink>
                                        </template>
                                  </Dropdown>
                         </div>

                    </div>
                    <!-- Container de post content -->
                    <label for="#" class="text-sm font-normal leading-6 font-[Roboto] text-[#44444F]">One of the perks of working in an international company is sharing knowledge with your colleagues.</label>
                    
                    <!-- Container de post images -->
                    <div class="grid grid-cols-6 gap-[10px] w-[585px] h-[330px] mt-[11px]">
                        <div class="bg-[#6523c8] row-span-2 col-span-3 h-[330px] rounded-[15px]">
                          <img src="#" class="w-full object-center object-cover h-[330px] rounded-[15px]"/>
                        </div>
                         <div class="bg-[#8ec823] col-span-3 h-[160px] rounded-[15px]">
                          <img src="#" class="w-full object-center object-cover h-[160px] rounded-[15px]"/>
                         </div>
                         <div class="bg-[#c8238b] row-span-3 col-span-3 h-[160px] rounded-[15px]">
                          <img src="#" class="w-full object-center object-cover h-[160px] rounded-[15px]"/>
                         </div> 
                    </div>
                    <!-- Linea -->
                    <div class="mt-5 mb-5 border-linegray border-x-0 border-b-0 border"></div>
                    
                    <!-- Comments likes and saved -->
                    <div class="w-[585px] flex gap-12 font-[Roboto] text-color-posts pl-[10px]">
                      <div class="flex gap-[10px] items-center ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.5139 18.2841L8.06545 21.6848C7.0587 22.4545 5.61004 21.7355 5.60796 20.4701L5.60414 18.1541C3.53288 17.656 2 15.7858 2 13.564V7.72006C2 5.11409 4.10604 3 6.70588 3H17.2941C19.894 3 22 5.11409 22 7.72006V13.564C22 16.17 19.894 18.2841 17.2941 18.2841H12.5139ZM7.60639 19.5183L11.5682 16.4896C11.7426 16.3563 11.956 16.2841 12.1755 16.2841H17.2941C18.7877 16.2841 20 15.0671 20 13.564V7.72006C20 6.21696 18.7877 5 17.2941 5H6.70588C5.21232 5 4 6.21696 4 7.72006V13.564C4 15.0388 5.16906 16.243 6.63013 16.2831C7.17089 16.2979 7.60181 16.7401 7.6027 17.281L7.60639 19.5183Z" fill="#92929D"/>
                            </svg>
                            <div>
                              <span>25 Comments</span>
                            </div>
                      </div>
                      <div class="flex gap-[10px] items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 4.12905L12.2215 3.9013C14.6871 1.36623 18.6965 1.36623 21.1621 3.9013C23.6126 6.42082 23.6126 10.4946 21.1621 13.0141L13.4337 20.9602C12.6636 21.752 11.3974 21.7696 10.6056 20.9994C10.5857 20.98 10.5857 20.98 10.5663 20.9602L2.83787 13.0141C0.387375 10.4946 0.387375 6.42082 2.83787 3.9013C5.3035 1.36623 9.31287 1.36623 11.7785 3.9013L12 4.12905ZM19.7284 11.6196C21.4239 9.87644 21.4239 7.03895 19.7284 5.29574C18.0481 3.56809 15.3355 3.56809 13.6552 5.29574L12.7169 6.26053C12.3242 6.66424 11.6758 6.66424 11.2831 6.26053L10.3448 5.29574C8.66445 3.56809 5.95192 3.56809 4.27159 5.29574C2.57614 7.03895 2.57614 9.87644 4.27159 11.6196L12 19.5657L19.7284 11.6196Z" fill="#92929D"/>
                          </svg>
                          <div>
                            <span>120 Likes</span>
                          </div>
                      </div>
                      <div class="flex gap-[10px] items-center">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M7.85738 1.04762H17.1431C19.247 1.04762 20.9526 2.7532 20.9526 4.85715V20.2119C20.9526 21.2639 20.0998 22.1167 19.0479 22.1167C18.6153 22.1167 18.1956 21.9694 17.8579 21.6992L12.5002 17.4125L7.1426 21.6992C6.32119 22.3564 5.12253 22.2233 4.46532 21.4019C4.19508 21.0642 4.04785 20.6445 4.04785 20.2119V4.85715C4.04785 2.7532 5.75343 1.04762 7.85738 1.04762ZM7.85738 2.95238C6.8054 2.95238 5.95261 3.80518 5.95261 4.85715V20.2119L11.3102 15.9253C12.0059 15.3686 12.9945 15.3686 13.6902 15.9253L19.0479 20.2119V4.85715C19.0479 3.80518 18.1951 2.95238 17.1431 2.95238H7.85738Z" fill="#92929D"/>
                        </svg>
                          <div>                        
                            <span>12 Saved</span>
                          </div>
                      </div>
                    </div>

                    <!-- Linea -->
                      <div class="mt-5 mb-5 border-linegray border-x-0 border-b-0 border"></div>
                     
                    <!-- Div Write any comment -->
                    <div class="h-[46p] flex items-center">
                      <!-- Icon Profile -->
                        <img src="#" alt="profile-photo" class="bg-gray-800 w-[36px] h-[36px] rounded-[25px] mr-[10px] flex " >

                        <!--Div Input Write any comment and Upload Image -->
                        <div class="w-[100%] h-[46px] bg-color-input border-linegray rounded-[15px] font-[Roboto] flex items-center justify-between pr-[15px]" >
                            <!-- Input Write any comment -->
                            <input
                              type="text" 
                              placeholder="Write your comment" 
                              class="w-[93%] h-[43px] border-none rounded[15px] flex text-color-posts pl-[15px] py-[11px] bg-color-input  focus:ring-linegray " >
                              <!-- Input Upload image or file -->
                              <input type="file" class="hidden" id="file-upload" />
                              <label for="file-upload">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M22.5 18.65C22.5 20.5061 20.9274 22 19 22H5C3.07258 22 1.5 20.5061 1.5 18.65V5.35C1.5 3.49395 3.07258 2 5 2H19C20.9274 2 22.5 3.49395 22.5 5.35V18.65ZM21.5 15.0708L16.7865 10.775L12.0725 15.0284L17.4604 21H19C20.3863 21 21.5 19.942 21.5 18.65V15.0708ZM21.5 13.7178V5.35C21.5 4.05803 20.3863 3 19 3H5C3.61372 3 2.5 4.05803 2.5 5.35V17.445L8.31356 11.646C8.51602 11.444 8.84633 11.4527 9.0379 11.6651L11.4026 14.2859L16.4533 9.72878C16.6443 9.55643 16.9349 9.55716 17.125 9.73045L21.5 13.7178ZM16.1135 21L8.64759 12.7253L2.50884 18.8487C2.61604 20.0487 3.68548 21 5 21H16.1135ZM8.19048 8.7C7.12564 8.7 6.2619 7.83843 6.2619 6.775C6.2619 5.71157 7.12564 4.85 8.19048 4.85C9.25532 4.85 10.119 5.71157 10.119 6.775C10.119 7.83843 9.25532 8.7 8.19048 8.7ZM8.19048 7.7C8.70359 7.7 9.11905 7.28558 9.11905 6.775C9.11905 6.26442 8.70359 5.85 8.19048 5.85C7.67736 5.85 7.2619 6.26442 7.2619 6.775C7.2619 7.28558 7.67736 7.7 8.19048 7.7Z" fill="#92929D"/>
                                  </svg>
                              </label>
                        </div>

                    </div>
                  
              </div>
                  
              </div>
          </div>
        </template>
    </AuthenticatedLayout>
</template>

<style>
@import url('https://fonts.googleapis.com/css2?family=Gotu&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Poppins:wght@300;400;500;600;700;800&family=Roboto:wght@300;400;700&display=swap');
</style>
