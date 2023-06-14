<script setup>

    import { computed, onMounted, ref, reactive } from 'vue';
    import { useForm } from '@inertiajs/vue3';
    import ActionMessage from '@/Components/ActionMessage.vue';
    import FormSection from '@/Components/FormSection.vue';
    import InputError from '@/Components/InputError.vue';
    import InputLabel from '@/Components/InputLabel.vue';
    import PrimaryButton from '@/Components/PrimaryButton.vue';
    import TextInput from '@/Components/TextInput.vue';
    import Multiselect from '@vueform/multiselect';

    defineProps({
       // We need to define which props tp expect from parent component
        registration: Object,
        countries: Object,
    })


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
                    v-bind="form.address1"
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
                <InputLabel for="country" value="Country" />
                <Multiselect
                    v-model="value"
                    name="country"
                    :options="['Batman', 'Robin', 'Joker']"
                    :classes="{
                        container:
                        'relative mx-auto w-full flex items-center justify-end box-border cursor-pointer border border-gray-300 rounded bg-white text-base leading-snug outline-none border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm',
                         option:
                         'flex items-center justify-start box-border text-left cursor-pointer text-base leading-snug py-2 px-3 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 hover:bg-gray-700',
                        }"
                />

<!--                <multiselect-->
<!--                    v-model="form.country"-->
<!--                    id="country"-->
<!--                    label="name"-->
<!--                    track-by="id"-->
<!--                    placeholder="Select country..."-->
<!--                    :options="$props.countries"-->
<!--                />-->
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

<style src="@vueform/multiselect/themes/default.css"></style>
