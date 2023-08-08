<script setup>
import ShapePost from '@/Components/ShapePost.vue';
</script>
<template>
  <!-- Container Principal -->
   <div class="min-w-[970px]  min-h[331px] mt-[32px]">
    <!-- Container de Banner en la portada tiene que ir una foto -->
      <div class="h-[331px]">
         <div class="h-[260px] bg-gradient-to-r  p-5 from-indigo-500 via-purple-500 to-pink-500 rounded-tl-[15px] rounded-tr-[15px] flex flex-col ">
          <!-- <img src="#"> -->
          <!-- Div Edit Profile -->
            <div class="h-[154px] flex justify-end">
              <button class="w-[95px] h-[38px] bg-gray-800/50  rounded-[10px] border border-white text-white text-xs font-semibold font-[Poppins]">
                <span class="">Edit Profile</span>
              </button>
            </div>
            <!-- Div Photo and Information Profile -->
            <div class="h-[106px] flex gap-[33px]">
              <!-- Photo Profile -->
                <div class="w-[161px] h-[161px] rounded-full border-4  border-white  ">
                    <img src="https://i.ibb.co/0jZ3hjK/Rectangle-1.png" alt="" class="w-full h-full rounded-full">
                </div>
                <!-- Information Profile -->
                <div class="mt-[29px] ">
                  <!-- Name -->
                  <h2 class="text-color-input text-2xl font-[Poppins] font-semibold leading-9  ">Ahmad Nur Fawaid</h2>
                  <!-- Alias -->
                  <span class="text-base leading-[26px] font-[Roboto] text-[#D5D5DC] ">@fawait</span>
                </div>
            </div>

            <div class="">

            </div>

         </div>
         <!-- Container de Posts, Followers,Following and Likes -->
         <div class="h-[71px] bg-white rounded-bl-[15px] rounded-bg-[15px] flex justify-end pr-[147px]">
            <!-- Posts -->
            <div class="min-w-[72px] flex flex-col justify-between text-center pt-[10px]">
              <span class="text-sm font-[Poppins] font-normal text-primary-color ">Post</span>
              <span class="text-base font-[Poppins] font-semibold text-primary-color">10.3K</span>
              <div class="h-[3px] bg-primary-color rounded-tl-[15px] rounded-tr-[15px] flex items-end"></div>
            </div>
            <!-- Followers -->
            <div class="min-w-[94px] flex flex-col justify-between text-center pt-[10px]">
                <span class="text-sm font-[Poppins] font-normal text-textgray ">Followers</span>
                <span class="text-base font-[Poppins] font-semibold text-color-posts">2,564</span>
                <div class="invisible h-[3px] bg-primary-color rounded-tl-[15px] rounded-tr-[15px] flex items-end hi"></div>
            </div>
            <!-- Following -->
            <div class="min-w-[94px] flex flex-col justify-between text-center pt-[10px]">
                  <span class="text-sm font-[Poppins] font-normal text-textgray ">Following</span>
                  <span class="text-base font-[Poppins] font-semibold text-color-posts">3,154</span>
                  <div class="invisible h-[3px] bg-primary-color rounded-tl-[15px] rounded-tr-[15px] flex items-end hi"></div>
            </div>
            <!-- Likes -->
            <div class="min-w-[74px] flex flex-col justify-between text-center pt-[10px]">
                    <span class="text-sm font-[Poppins] font-normal text-textgray ">Likes</span>
                    <span class="text-base font-[Poppins] font-semibold text-color-posts">12.2k</span>
                    <div class="invisible h-[3px] bg-primary-color rounded-tl-[15px] rounded-tr-[15px] flex items-end hi"></div>
            </div>
            <!-- Photos -->
            <div class="min-w-[74px] flex flex-col justify-between text-center pt-[10px]">
                      <span class="text-sm font-[Poppins] font-normal text-textgray ">Photos</span>
                      <span class="text-base font-[Poppins] font-semibold text-color-posts">35</span>
                      <div class="invisible h-[3px] bg-primary-color rounded-tl-[15px] rounded-tr-[15px] flex items-end hi"></div>
            </div>
            <!-- Saved -->
            <div class="min-w-[74px] flex flex-col justify-between text-center pt-[10px]">
                      <span class="text-sm font-[Poppins] font-normal text-textgray ">Saved</span>
                      <span class="text-base font-[Poppins] font-semibold text-color-posts">18</span>
                      <div class="invisible h-[3px] bg-primary-color rounded-tl-[15px] rounded-tr-[15px] flex items-end hi"></div>
            </div>
         </div>
      </div>
      <!-- Container de los divs-cols Complete Your Profiles|Post Something -->
      <div class="flex mt-5 gap-[30px]">
        <!-- Div Izquierdo -->
        <div class="w-[335px] flex flex-col gap-5">
          <!-- Div Complete Your Profile and Progress Bar -->
          <div class="h-[89px] rounded-[15px] bg-white px-5 pt-[15px] flex flex-col gap-[15px]">
            <h2 class="font-[Poppins] text-sm font-medium text-text-h2-gray">
              Complete Your Profile
            </h2>
            <!-- Progress Bar -->
          <div class="flex items-center gap-[15px]">
            <div class="w-[255px] bg-gray-200 rounded-full h-[6px] dark:bg-gray-700 flex">
              <div class="bg-blue-600 h-[6px] rounded-tl-[8.5px] rounded-bl-[8.5px] " style="width: 75%"></div>
            </div>
            <span>75%</span>
          </div>

          </div>

          <!-- Div About Me -->
          <div class="min-h-[345px] bg-white rounded-[15px] flex flex-col ">
            <!-- About me and dots -->
            <div class="h-[50px] px-5 flex justify-between items-center border-x-0 border-t-0 border-b-linegray border">
              <h2 class="font-[Poppins] text-sm font-medium text-text-h2-gray">
                  About Me
              </h2>
              <!-- Dots Icons -->
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M7 12C7 10.8954 6.10457 10 5 10C3.89543 10 3 10.8954 3 12C3 13.1046 3.89543 14 5 14C6.10457 14 7 13.1046 7 12Z" fill="#92929D"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M14 12C14 10.8954 13.1046 10 12 10C10.8954 10 10 10.8954 10 12C10 13.1046 10.8954 14 12 14C13.1046 14 14 13.1046 14 12Z" fill="#92929D"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M21 12C21 10.8954 20.1046 10 19 10C17.8954 10 17 10.8954 17 12C17 13.1046 17.8954 14 19 14C20.1046 14 21 13.1046 21 12Z" fill="#92929D"/>
             </svg>
            </div>
            <!-- Text -->
            <div class="pl-5 w-[335px] pt-[15px] h-[78px] ">
              <div class=" w-[290px] font-[Roboto] text-sm font-normal leading-6 text-color-posts ">
                <span>
                  “Pushing pixels and experiences in digital products for Sebostudio”
                </span>
              </div>
            </div>
            <!-- linea -->
            <div class="h-[1px] w-[305px] bg-linegray ml-[15px]"></div>
              
          </div>

          <!-- Div Photos -->
          <div class="h-[280px] bg-white rounded-[15px]">
            <!-- Photos and see all -->
            <div class="flex justify-between h-[49px]">
              <h2 class="font-[Poppins] text-sm font-medium text-text-h2-gray px-5 pt-[15px]">
                Photos
              </h2>
              <a href="#" class="text-xs font-[Poppins] font-medium text-primary-color px-5 pt-[15px]">
                SEE ALL
              </a>
            </div>
            <hr>

            <!-- Grid de Photos -->
            <div class="py-5 grid grid-cols-3 pl-[15px]">
                <div class="w-[90px] h-[90px] bg-lime-500 rounded-[15px] mb-[10px] ">
                <img src="#" class="w-full object-cover rounded-[15px]"/>
                1  
                </div>
                <div class="w-[90px] h-[90px] bg-lime-300 rounded-[15px] mb-[10px] ">
                <img src="#" class="w-full object-cover rounded-[15px]"/>
                1  
                </div>
                <div class="w-[90px] h-[90px] bg-lime-800 rounded-[15px] mb-[10px] ">
                <img src="#" class="w-full object-cover rounded-[15px]"/>
                1  
                </div>
                <div class="w-[90px] h-[90px] bg-lime-500 rounded-[15px] mb-[10px] ">
                <img src="#" class="w-full object-cover rounded-[15px]"/>
                1  
                </div>
                <div class="w-[90px] h-[90px] bg-lime-300 rounded-[15px] mb-[10px] ">
                <img src="#"/>
                1  
                </div>
                <div class="w-[90px] h-[90px] bg-lime-800 rounded-[15px] mb-[10px] ">
                <img src="#" class="w-full object-cover rounded-[15px]"/>
                1  
                </div>
            </div>
          </div>
        </div>
        <!-- Div Derecho  -->
        <div class="w-[595px] flex flex-col gap-5 mb-5" >
          <!-- Div Post Something -->
          <div class="h-[107px] rounded-[15px] bg-white">
            <div class="h-10 pl-5 pt-[10px]">
              <h2 class="text-sm text-text-h2-gray font-medium font-[Poppins]">Post Something</h2>
            </div>
            <hr>
            <!-- Div Whats on your mind -->
              <div class="h-[66px] flex items-center pl-[15px]">
                          <!-- Icon Profile -->
                            <img src="#" alt="#" class="bg-gray-800 w-9 h-9 rounded-full  mr-[10px] flex " >

                            <!--Div Input Write any comment and Upload Image -->
                            <div class="w-[100%] h-[46px] bg-color-input border-linegray rounded-[15px] font-[Roboto] flex items-center justify-between pr-[15px]" >
                                <!-- Input Write any comment -->
                                <input
                                  type="text" 
                                  placeholder="What’s on your mind?" 
                                  class="w-[93%] h-[43px] border-none rounded[15px] flex text-color-posts pl-[15px] py-[11px] bg-white  focus:ring-linegray " >
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
          <ShapePost></ShapePost>
          <ShapePost>
                              <!-- Container de post images -->
                              <template #post-content>
                                  <div class="grid grid-cols-6 gap-[10px]  h-[330px] mt-[11px]">
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
                              </template>
          </ShapePost>
        </div>

      </div>

   </div>
</template>