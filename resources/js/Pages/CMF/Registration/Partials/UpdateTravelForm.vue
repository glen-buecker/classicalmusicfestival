<script setup>
import {reactive} from "vue";
import FormSection from "@/Components/FormSection.vue";
import ActionMessage from "@/Components/ActionMessage.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";

const form = reactive({
    arrival_date: '',
    arrival_time: '',
    arrival_method: '',
    arrival_shuttle: '',
    arrival_note: '',
    departure_date: '',
    departure_time: '',
    departure_method: '',
    departure_shuttle: '',
    departure_note: '',
    special_needs: '',
});

</script>

<template>
    <FormSection @submitted="updatePassword">
        <template #title>
            Update Password
        </template>

        <template #description>
            Ensure your account is using a long, random password to stay secure.
        </template>

        <template #form>

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

<style scoped>

</style>
