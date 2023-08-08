<script setup>
import { ref } from 'vue';
import Logo from '@/Components/Logo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import { Link } from '@inertiajs/vue3';

const showingNavigationDropdown = ref(false);
</script>

<template>
    <div>
      <!-- Container Principal -->
        <div class="min-h-screen bg-[#F1F1F5] overflow-x-hidden">
            <!-- Navigation -->
            <nav class="bg-white border-b border-gray-100">
                <!-- Primary Navigation Menu -->
                <div class="max-w-7xl mx-auto px-6">
                    <div class="flex justify-between h-16">
                          <!-- Logo -->
                            <div class="shrink-0 flex items-center">
                                <Link :href="route('dashboard')">
                                    <Logo></Logo>
                                    
                                </Link>
                            </div>
                        

                        <div class="hidden sm:flex sm:items-center sm:ml-6">
                            <!-- Settings Dropdown -->
                            <div class="ml-3 relative">
                                <Dropdown align="right" width="280">
                                    <template #trigger>
                                        <span class="inline-flex rounded-md">
                                            <button
                                                type="button"
                                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150"
                                            >
                                                <!-- {{ $page.props.auth.user.name }} -->
                                                <!-- Icon Notifications -->
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.98 4.64094C14.8026 3.15337 13.5367 2 12.0013 2C10.466 2 9.2 3.15337 9.02257 4.64094C6.5199 5.77546 4.77908 8.29555 4.77908 11.2222V16.2399L3.10858 19.5494C2.77286 20.2145 3.25626 21 4.0013 21H9.17201C9.58385 22.1652 10.6951 23 12.0013 23C13.3075 23 14.4188 22.1652 14.8306 21H20.0013C20.7463 21 21.2297 20.2145 20.894 19.5494L19.2235 16.2399V11.2222C19.2235 8.29555 17.4827 5.77546 14.98 4.64094ZM17.3308 16.9286L18.3764 19H5.62623L6.6718 16.9286C6.74234 16.7888 6.77908 16.6345 6.77908 16.478V11.2222C6.77908 8.33807 9.11715 6 12.0013 6C14.8855 6 17.2235 8.33807 17.2235 11.2222V16.478C17.2235 16.6345 17.2603 16.7888 17.3308 16.9286Z" fill="#92929D"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M19 8C21.2091 8 23 6.20914 23 4C23 1.79086 21.2091 0 19 0C16.7909 0 15 1.79086 15 4C15 6.20914 16.7909 8 19 8Z" fill="#FC5A5A"/>
                                                </svg>

                                                <!-- Photo Profile User -->
                                                <img src="#" alt="profile-photo" class="bg-gray-800 w-[34px] h-[34px] rounded-[25px] flex ml-[25px] " >

                                                <!-- Icon Dropdown -->
                                                <svg class="ml-[13px]" xmlns="http://www.w3.org/2000/svg" width="11" height="8" viewBox="0 0 11 8" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.98762 0.461304C10.2559 0.461304 10.4051 0.771682 10.2375 0.981206L5.44196 6.97562C5.31386 7.13575 5.07031 7.13575 4.94221 6.97562L0.146672 0.981206C-0.0209475 0.771682 0.128228 0.461304 0.39655 0.461304L9.98762 0.461304Z" fill="#92929D"/>
                                                </svg>

                                            </button>
                                        </span>
                                    </template>

                                    <template #content>
                                        <DropdownLink :href="route('profile.edit')"> Profile </DropdownLink>
                                        <DropdownLink :href="route('logout')" method="post" as="button">
                                            Log Out
                                        </DropdownLink>
                                    </template>
                                </Dropdown>
                            </div>
                        </div>

                        <!-- Hamburger -->
                        <div class="-mr-2 flex items-center sm:hidden">
                            <button
                                @click="showingNavigationDropdown = !showingNavigationDropdown"
                                class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"
                            >
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path
                                        :class="{
                                            hidden: showingNavigationDropdown,
                                            'inline-flex': !showingNavigationDropdown,
                                        }"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16"
                                    />
                                    <path
                                        :class="{
                                            hidden: !showingNavigationDropdown,
                                            'inline-flex': showingNavigationDropdown,
                                        }"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"
                                    />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Responsive Navigation Menu -->
                <div
                    :class="{ block: showingNavigationDropdown, hidden: !showingNavigationDropdown }"
                    class="sm:hidden"
                >
                    <div class="pt-2 pb-3 space-y-1">
                        <ResponsiveNavLink :href="route('dashboard')" :active="route().current('dashboard')">
                            Dashboard
                        </ResponsiveNavLink>
                        
                    </div>

                    <!-- Responsive Settings Options -->
                    <div class="pt-4 pb-1 border-t border-gray-200">
                        <div class="px-4">
                            <div class="font-medium text-base text-gray-800">
                                {{ $page.props.auth.user.name }}
                            </div>
                            <div class="font-medium text-sm text-gray-500">{{ $page.props.auth.user.email }}</div>
                        </div>

                        <div class="mt-3 space-y-1">
                            <ResponsiveNavLink :href="route('profile.edit')"> Profile </ResponsiveNavLink>
                            <ResponsiveNavLink :href="route('logout')" method="post" as="button">
                                Log Out
                            </ResponsiveNavLink>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Page Heading -->
            <div class="flex w-screen ">
              <header class="bg-white shadow w-[20%] " v-if="$slots.header">
                <!-- Sidebar Izquierdo -->
                  <div class="py-5 px-[10px] h-screen">
                      <slot name="header" />
                  </div>
                  <!-- Contenedor derecho -->
                
              </header>

              <!-- Page Content -->
              <main  v-if="$slots.asideright" class="w-[80%]">
                  <div class="min-h-screen  flex justify-center items-start">
                          <slot name="asideright" />
                    </div>
              </main>
            </div>
        </div>
    </div>
</template>
