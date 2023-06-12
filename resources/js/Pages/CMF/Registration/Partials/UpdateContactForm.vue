<script setup>
import { ref } from 'vue';
import { useForm } from '@inertiajs/vue3';
import ActionMessage from '@/Components/ActionMessage.vue';
import Dropdown from "@/Components/Dropdown.vue";
import FormSection from '@/Components/FormSection.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
const passwordInput = ref(null);
const currentPasswordInput = ref(null);

const form = useForm({
    primary_phone_code: '',
    primary_phone: '',
    mobile_phone_code: '', // secondary phone???
    mobile_phone: '',
    address1: '',
    address2: '',
    country: '',
    state: '',
    city: '',
    postal_code: '',
    passport_country: '',
});

const updateAddress = () => {
    form.put(route('user-password.update'), {
        errorBag: 'updatePassword',
        preserveScroll: true,
        onSuccess: () => form.reset(),
        onError: () => {
            if (form.errors.password) {
                form.reset('password', 'password_confirmation');
                passwordInput.value.focus();
            }

            if (form.errors.current_password) {
                form.reset('current_password');
                currentPasswordInput.value.focus();
            }
        },
    });
};
</script>

<template>
    <FormSection @submitted="updateAddress">
        <template #title>
            Update Address
        </template>

        <template #description>
            Ensure your account is up to date with your country, state, and city.
        </template>

        <template #form>
            <div class="col-span-6 sm:col-span-4">
                <InputLabel for="address1" value="Address" />
                <TextInput
                    id="address1"
                    ref="address1Input"
                    v-model="form.address1"
                    type="text"
                    class="mt-1 block w-full"
                    autocomplete="address1"
                />
                <InputError :message="form.errors.address1" class="mt-2" />
            </div>

            <div class="col-span-6 sm:col-span-4">
                <InputLabel for="address2" value="Apartment, suite, etc." />
                <TextInput
                    id="address2"
                    ref="address2Input"
                    v-model="form.address2"
                    type="text"
                    class="mt-1 block w-full"
                    autocomplete="address1"
                />
                <InputError :message="form.errors.address1" class="mt-2" />
            </div>

            <div class="col-span-6 sm:col-span-4">
                <InputLabel for="password" value="New Password" />
                <TextInput
                    id="password"
                    ref="passwordInput"
                    v-model="form.password"
                    type="password"
                    class="mt-1 block w-full"
                    autocomplete="new-password"
                />
                <InputError :message="form.errors.password" class="mt-2" />
            </div>

            <div class="col-span-6 sm:col-span-4">
                <InputLabel for="password_confirmation" value="Confirm Password" />
                <TextInput
                    id="password_confirmation"
                    v-model="form.password_confirmation"
                    type="password"
                    class="mt-1 block w-full"
                    autocomplete="new-password"
                />
                <InputError :message="form.errors.password_confirmation" class="mt-2" />
            </div>
        </template>

        <template #actions>
            <ActionMessage :on="form.recentlySuccessful" class="mr-3">
                Saved.
            </ActionMessage>

            <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                Save
            </PrimaryButton>
        </template>
    </FormSection>
</template>
