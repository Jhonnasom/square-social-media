<template>
  <!-- Container Principal de Friends -->
   <div class="min-w-[902px]  min-h[40px] mt-[32px]">
      <!-- Container de la barra de busqueda -->
     <div class="flex h-10 items-center justify-between mb-9">
        <h2 class="w-[25%] flex justify-center font-semibold text-2xl leading-9 font-[Poppins] ">Friends List</h2>
        <div class="flex items-center w-[55%] rounded-[10px] pl-3  bg-white ">
            <h2 class="text-sm font-normal font-[Roboto] text-[#696974]">Sort by:</h2>
            <select class="border-none focus:ring-0 w-[87%] rounded-[10px] pr-0 text-sm font-[Roboto]">
              <option  value="Newest">Newest F</option>
              <option value="Oldest">Oldest</option>
            </select>
        </div>
     </div>

      <!-- Container de los amigos -->
     <div class="grid md:grid-cols-2 gap-7">
      <!-- Container de un amigo -->
        <div class="h-[246px] rounded-[15px] bg-white">
              <!-- Div Foto de Portada -->
              <div class="h-[100px] bg-gray-700 rounded-tl-[15px] rounded-tr-[15px]">
                <img src="#" alt="" class="w-full object-cover rounded-tl-[15px] rounded-tr-[15px]">
              </div>
              <!-- Div Foto de Perfil and Information -->
              <div class="h-[146px] px-[20px] flex absolute justify-between">
                <!-- Photo -->
                <div class="w-[86px] h-[86px] bg-slate-300 rounded-full mr-[17px] absolute top-[-20px]">
                  <img src="#" alt="" class="w-full h-full object-cover rounded-full">
                </div>
                <div class="flex mt-[15px] ml-[128px] ">
                  <div class="flex flex-col">
                    <h2 class="text-lg font-semibold text-[#171725] font-[Poppins] ">Mayke Schuurs</h2>
                    <span class="text-sm font-normal font-[Roboto] text-textgray">@maymayke</span>
                    <span class="text-base leading-[26px] font-normal font-[Roboto] text-[#44444F] ">Not a Man but a Ghost 👻</span>
                  </div>
                  <div>
                    <button class="bg-primary-color w-20 h-[28px] rounded-[10px] text-white font-[Poppins] text-xs">Following</button>     
                  </div>
                </div>
              </div>
          </div>
   <!-- Container de un amigo -->
        <div class="h-[246px] rounded-[15px] bg-white">
            <!-- Div Foto de Portada -->
            <div class="h-[100px] bg-gray-700 rounded-tl-[15px] rounded-tr-[15px]">
              <img src="#" alt="" class="w-full object-cover rounded-tl-[15px] rounded-tr-[15px]">
            </div>
            <!-- Div Foto de Perfil and Information -->
            <div class="h-[146px] px-[20px] flex absolute justify-between">
              <!-- Photo -->
              <div class="w-[86px] h-[86px] bg-slate-300 rounded-full mr-[17px] absolute top-[-20px]">
                <img src="#" alt="" class="w-full h-full object-cover rounded-full">
              </div>
              <div class="flex mt-[15px] ml-[128px] ">
                <div class="flex flex-col">
                  <h2 class="text-lg font-semibold text-[#171725] font-[Poppins] ">Mayke Schuurs</h2>
                  <span class="text-sm font-normal font-[Roboto] text-textgray">@maymayke</span>
                  <span class="text-base leading-[26px] font-normal font-[Roboto] text-[#44444F] ">Not a Man but a Ghost 👻</span>
                </div>
                <div>
                  <button class="bg-primary-color w-20 h-[28px] rounded-[10px] text-white font-[Poppins] text-xs">Following</button>     
                </div>
              </div>
            </div>
        </div>

     </div>

     

   </div>
</template>