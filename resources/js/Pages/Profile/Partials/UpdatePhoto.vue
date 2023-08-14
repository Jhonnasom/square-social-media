<script setup>
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { Link, useForm, usePage } from "@inertiajs/vue3";
const form = useForm({
    photo_profile: null,
});
function onFileChanged($event) {
    form.photo_profile = null;
    const target = $event.target;
    if (target && target.files) {
        form.photo_profile = target.files[0];
        console.log(target.files[0]);
    }
}
</script>

<template>
    <section class="mt-5">
        <header>
            <h2 class="text-lg font-medium text-gray-900">Photo Profile</h2>

            <p class="mt-1 text-sm text-gray-600">
                Update your photo's profile.
            </p>
        </header>
        <form
            @submit.prevent="form.post(route('profile.update_image'))"
            class="mt-6 space-y-6"
            enctype="multipart/form-data"
        >
            <!-- Input Photo Profile -->
            <div>
                <InputLabel for="photo_profile" value="Profile Photo" />
                <TextInput
                    id="photo_profile"
                    type="file"
                    class="mt-1 block w-full"
                    @change="onFileChanged($event)"
                    required
                    autofocus
                    autocomplete="photo_profile"
                />

                <InputError class="mt-2" :message="form.errors.name" />
            </div>

            <div class="flex items-center gap-4">
                <PrimaryButton :disabled="form.processing" class="text-white"
                    >Save</PrimaryButton
                >

                <Transition
                    enter-active-class="transition ease-in-out"
                    enter-from-class="opacity-0"
                    leave-active-class="transition ease-in-out"
                    leave-to-class="opacity-0"
                >
                    <p
                        v-if="form.recentlySuccessful"
                        class="text-sm text-gray-600"
                    >
                        Saved.
                    </p>
                </Transition>
            </div>
        </form>
    </section>
</template>
