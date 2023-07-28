<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <GuestLayout>
        <Head title="Register" />

        <form @submit.prevent="submit" class="flex justify-center flex-col align-center">
                  <h2 class="font-semibold font-[Poppins] text-[18px] text-center leading-normal mb-[1.81rem] ">
                      Sign Up to your account
                  </h2>
            <div >
              
                  <TextInput
                      id="email"
                      type="email"
                      class="mt-1 block w-full"
                      v-model="form.email"
                      placeholder="Your email"
                      required
                      autocomplete="username"
                  />

                  <InputError class="mt-2" :message="form.errors.email" />
            </div>
            <div class="mt-4">
                  <!-- <InputLabel for="name" value="Name" /> -->

                <TextInput
                    id="name"
                    type="text"
                    class="mt-1 block w-full"
                    placeholder="Your name"
                    v-model="form.name"
                    required
                    autofocus
                    autocomplete="name"
                />

                <InputError class="mt-2" :message="form.errors.name" />
            </div>


            <div class="mt-4">
                
                <TextInput
                    id="password"
                    type="password"
                    class="mt-1 block w-full"
                    v-model="form.password"
                    placeholder="Create password"
                    required
                    autocomplete="new-password"
                />

                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <!-- <div class="mt-4">
                <InputLabel for="password_confirmation" value="Confirm Password" />

                <TextInput
                    id="password_confirmation"
                    type="password"
                    class="mt-1 block w-full"
                    v-model="form.password_confirmation"
                    required
                    autocomplete="new-password"
                />

                <InputError class="mt-2" :message="form.errors.password_confirmation" />
            </div> -->

            <p class="w-[261px] text-xs ms-[25px] mt-[44px] text-center leading-5 font-normal  text-textgray inline">
              By signing up, you confirm that you’ve read
              and accepted our <span class="text-primary-color">User Notice</span>  and <span class="text-primary-color">Privacy Policy.</span>
            </p>

            <PrimaryButton class="h-[38px] bg-primary-color mt-5 text-white flex items-center justify-center rounded-[10px]" :class="{ 'opacity-25': form.processing }"        :disabled="form.processing">
                      Register
            </PrimaryButton>

            
              <span 
              class="block w-full text-center font-[roboto] text-textgray font-normal text-xs leading-[14.06px] my-[10px]">
              OR
             </span>

              <PrimaryButton class="w-full bg-white text-[#696974] h-[38px] hover:text-white flex flex-row gap-3 mb-[37px] border-slate-200 rounded-[10px] justify-center font-[Poppins] text-gray" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
        
                  <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <mask id="mask0_364_35" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="16" height="16">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M15.814 6.54545H8.18605V9.63636H12.5767C12.1674 11.6 10.4558 12.7273 8.18605 12.7273C5.50698 12.7273 3.34884 10.6182 3.34884 8C3.34884 5.38182 5.50698 3.27273 8.18605 3.27273C9.33953 3.27273 10.3814 3.67273 11.2 4.32727L13.5814 2C12.1302 0.763636 10.2698 0 8.18605 0C3.64651 0 0 3.56364 0 8C0 12.4364 3.64651 16 8.18605 16C12.2791 16 16 13.0909 16 8C16 7.52727 15.9256 7.01818 15.814 6.54545Z" fill="white"/>
                </mask>
                <g mask="url(#mask0_364_35)">
                <path d="M-0.744141 12.7275V3.27295L5.58144 8.00022L-0.744141 12.7275Z" fill="#FBBC05"/>
                </g>
                <mask id="mask1_364_35" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="16" height="16">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.814 6.54545H8.18605V9.63636H12.5767C12.1674 11.6 10.4558 12.7273 8.18605 12.7273C5.50698 12.7273 3.34884 10.6182 3.34884 8C3.34884 5.38182 5.50698 3.27273 8.18605 3.27273C9.33953 3.27273 10.3814 3.67273 11.2 4.32727L13.5814 2C12.1302 0.763636 10.2698 0 8.18605 0C3.64651 0 0 3.56364 0 8C0 12.4364 3.64651 16 8.18605 16C12.2791 16 16 13.0909 16 8C16 7.52727 15.9256 7.01818 15.814 6.54545Z" fill="white"/>
                </mask>
                <g mask="url(#mask1_364_35)">
                <path d="M-0.744141 3.27295L5.58144 8.00022L8.18609 5.78204L17.1163 4.36386V-0.727051H-0.744141V3.27295Z" fill="#EA4335"/>
                </g>
                <mask id="mask2_364_35" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="16" height="16">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.814 6.54545H8.18605V9.63636H12.5767C12.1674 11.6 10.4558 12.7273 8.18605 12.7273C5.50698 12.7273 3.34884 10.6182 3.34884 8C3.34884 5.38182 5.50698 3.27273 8.18605 3.27273C9.33953 3.27273 10.3814 3.67273 11.2 4.32727L13.5814 2C12.1302 0.763636 10.2698 0 8.18605 0C3.64651 0 0 3.56364 0 8C0 12.4364 3.64651 16 8.18605 16C12.2791 16 16 13.0909 16 8C16 7.52727 15.9256 7.01818 15.814 6.54545Z" fill="white"/>
                </mask>
                <g mask="url(#mask2_364_35)">
                <path d="M-0.744141 12.7275L10.4186 4.36386L13.3582 4.72749L17.1163 -0.727051V16.7275H-0.744141V12.7275Z" fill="#34A853"/>
                </g>
                <mask id="mask3_364_35" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="16" height="16">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.814 6.54545H8.18605V9.63636H12.5767C12.1674 11.6 10.4558 12.7273 8.18605 12.7273C5.50698 12.7273 3.34884 10.6182 3.34884 8C3.34884 5.38182 5.50698 3.27273 8.18605 3.27273C9.33953 3.27273 10.3814 3.67273 11.2 4.32727L13.5814 2C12.1302 0.763636 10.2698 0 8.18605 0C3.64651 0 0 3.56364 0 8C0 12.4364 3.64651 16 8.18605 16C12.2791 16 16 13.0909 16 8C16 7.52727 15.9256 7.01818 15.814 6.54545Z" fill="white"/>
                </mask>
                <g mask="url(#mask3_364_35)">
                <path d="M17.1165 16.7275L5.58163 8.00022L4.09326 6.90931L17.1165 3.27295V16.7275Z" fill="#4285F4"/>
                </g>
                  </svg>
                    Continue with Google
                      
              </PrimaryButton>
           

            <div class="flex items-center mb-[17px] justify-center">
                <Link
                    :href="route('login')"
                    class="font-[Roboto] leading-normal font-normal text-sm text-primary-color hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                >
                    Already have an Square account? Log in
                </Link>

                
            </div>
        </form>
    </GuestLayout>
</template>

<style>
@import url('https://fonts.googleapis.com/css2?family=Gotu&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Poppins:wght@300;600;700;800&family=Roboto:wght@300;400;700&display=swap');
</style>
