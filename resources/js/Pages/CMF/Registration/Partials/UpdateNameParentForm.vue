<script setup>
import { ref } from 'vue';
import { useForm } from '@inertiajs/vue3';
import FormSection from "@/Components/FormSection.vue";
import ActionMessage from "@/Components/ActionMessage.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";
import Checkbox from "@/Components/Checkbox.vue";

const form = useForm({
    name: '',

});
</script>

<template>
    <FormSection @submitted="updateNameParent">
        <template #title>
            Registation Name
        </template>

        <template #description>
            Update name and if this is child form
        </template>

        <template #form>
            <div class="col-span-6 sm:col-span-4">
                <InputLabel for="siblingRelationship" value="Check this box if this registration is part of a family?"/>
                <Checkbox
                    id="siblingRelationship"
                    ref="siblingRelationship"
                    v-model="form.siblingRelationship"
                    type="checkbox"


                />
                <InputError :message="form.errors.siblingRelationship" class="mt-2" />
            </div>
            <div class="col-span-6 sm:col-span-4">
                <InputLabel for="name" value="Name" />
                <TextInput
                    id="name"
                    ref="nameInput"
                    v-model="this.$page.props.registration.name"
                    type="text"
                    class="mt-1 block w-full"
                    autocomplete="this.$page.props.registration.name"
                />
                <InputError :message="form.errors.name" class="mt-2" />
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

<style scoped>

</style>
