<template>
    <form @submit.prevent="submitForm">
        <div class="form-group d-none">
            <label>Email</label>
            <input type="text" v-model="form.email" class="form-control" disabled />
        </div>


        <div class="form-group first">
            <label>New Password</label>
            <input type="password" v-model="form.password" class="form-control" />
            <span class="error" v-if="errors.password">{{ errors.password }}</span>
        </div>

        <div class="form-group last mb-2">
            <label>Confirm Password</label>
            <input type="password" v-model="form.password_confirmation" class="form-control" />
            <span class="error" v-if="errors.password_confirmation">{{ errors.password_confirmation }}</span>
        </div>

        <div v-if="backendError" class="text-danger text-center">
            {{ backendError }}
        </div>

        <input type="submit" class="btn" :disabled="formLoading"
            :value="formLoading ? 'Resetting...' : 'Reset Password'" />
    </form>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import axios from 'axios';

const route = window.location;
const url = new URL(route.href);
const token = window.location.pathname.split('/').pop();
const email = url.searchParams.get('email');

const form = ref({
    token: token,
    email: email,
    password: '',
    password_confirmation: '',
});

const errors = ref({});
const backendError = ref('');
const formLoading = ref(false);

function validateForm() {
    errors.value = {};
    if (!form.value.password) errors.value.password = '* Required';
    if (!form.value.password_confirmation) errors.value.password_confirmation = '* Required';
    if (form.value.password !== form.value.password_confirmation)
        errors.value.password_confirmation = '* Passwords do not match';
    return Object.keys(errors.value).length === 0;
}

const submitForm = async () => {
    if (!validateForm()) return;

    backendError.value = '';
    formLoading.value = true;

    await axios.post('/reset-password', form.value)
        .then(() => {
            window.location.href = '/login';
        })
        .catch(error => {
            formLoading.value = false;
            if (error.response?.data?.errors) {
                errors.value = error.response.data.errors;
            } else if (error.response?.data?.message) {
                backendError.value = error.response.data.message;
            }
            console.log(error);
        });
};
</script>

<style scoped>
.error {
    color: red;
    font-size: 0.9em;
}
</style>
