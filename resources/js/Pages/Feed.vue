<script setup>
import ShapePost from '@/Components/ShapePost.vue';
import IconUploadImage from '@/Components/IconUploadImage.vue';
</script>
<template>
    <div class="w-[625px] min-h-screen flex flex-col gap-5">
                      <!-- div post something -->
            <div class="h-[107px] rounded-[15px] bg-white mt-[13px]">
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

                        <ShapePost>
                            <!-- Container de post images -->
                            <template #post-content>
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
                            </template>
                        </ShapePost>
                  
                        <ShapePost></ShapePost>
    </div>
</template>