<script setup>
import {ref, reactive, onMounted} from 'vue';
import { Head, Link, router, useForm } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import UpdateContactForm from "@/Pages/CMF/Registration/Partials/UpdateContactForm.vue";
import FormSection from '@/Components/FormSection.vue';
import SectionBorder from '@/Components/SectionBorder.vue';
import Checkbox from '@/Components/Checkbox.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import Multiselect from 'vue-multiselect';
import {data} from "autoprefixer";
import { defineStore } from 'pinia'
import UpdateNameParentForm from "@/Pages/CMF/Registration/Partials/UpdateNameParentForm.vue";


const selectedCountry = ref(1)

defineProps({
    countries: JSON,
});


</script>

<template>
    <AppLayout title="Registration">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Registration
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
                        <div>
                            <h1 class="mt-8 text-2xl font-medium text-gray-900 dark:text-white">
                                Welcome to your Jetstream application!
                            </h1>
                            <!--
                            1. name and link form to parent registration checkbox (copies in contact info but allows name change)
                            2. contact info form (copy from parent if this is a sibling registration, but allow for
                            editing)
                            3. festival track
                            4. accommodations
                            5. travel
                            -->

                            <!--Name/Parent Form-->
                            <UpdateNameParentForm class="mt-10 sm:mt-0" />

                            <SectionBorder />

                            <!--Address Form-->
                            <UpdateContactForm class="mt-10 sm:mt-0" />

                            <SectionBorder />



<!--                                <select v-model="selected"-->
<!--                                        name="country"-->
<!--                                        id="country">-->
<!--                                    <option selected disabled>Please select...</option>-->
<!--                                    <option v-for="country in countries"-->
<!--                                            :key="country.id"-->
<!--                                            :value="country.id"-->
<!--                                            v-text="country.name"></option>-->
<!--                                </select>-->

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </AppLayout>
</template>
