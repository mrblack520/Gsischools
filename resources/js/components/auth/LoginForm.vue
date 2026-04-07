<template>
    <form @submit.prevent="submitForm">
        <div class="form-group first">
            <label for="email">Email</label>
            <input type="text" v-model="form.email" @input="validateField('email')" class="form-control"
                placeholder="Enter your email" id="username">
            <span class="error" v-if="errors.email">{{ errors.email }}</span>
        </div>

        <div class="form-group last mb-2">
            <label for="password">Password</label>
            <input type="password" v-model="form.password" @input="validateField('password')" class="form-control"
                placeholder="Enter your password" id="password">
            <span class="error" v-if="errors.password">{{ errors.password }}</span>
        </div>

        <div class="d-sm-flex align-items-center justify-content-end mb-2">
            <p class="ml-auto">
                <a :href="route('password.request')" class="forgot-pass">Forgot Password</a>
            </p>
        </div>

        <div>
            <div v-if="backendError" class="text-muted text-center">
                {{ backendError }}
            </div>
            <input type="submit" :value="formLoading ? 'Please wait...' : 'Log In'" class="btn">
        </div>

        <div class="d-flex justify-content-center mt-4">
            <span>Don't have an account? <a :href="route('frontend.register')">Register</a></span>
        </div>
    </form>
</template>

<script setup>
import axios from 'axios';
import { ref } from 'vue';
import { useAuthStore } from '../../stores/auth';
const auth = useAuthStore();
import { route } from 'ziggy-js'

const form = ref({
    email: '',
    password: ''
});

const errors = ref({})
const formLoading = ref(false);

function validateField(field) {
    switch (field) {
        case 'email':
            errors.value.email = form.value.email ? '' : '* Email; is required';
            break;
        case 'password':
            errors.value.password = form.value.password ? '' : '* Password is required';
            break;
    }
}

function validateForm() {
    validateField('email');
    validateField('password');
    return Object.keys(errors.value).every(key => !errors.value[key]);
}

const backendError = ref('');
const submitForm = async () => {
    backendError.value = '';

    if (!validateForm()) return;

    formLoading.value = true;

    axios.post('/portal/login', {
        email: form.value.email,
        password: form.value.password
    })
    .then(() => {
        window.location.href = '/portal/dashboard';
    })
    .catch((error) => {
        formLoading.value = false;

        if (error.response && error.response.data.message) {
            backendError.value = error.response.data.message;
        }
    });
}
</script>

<style scoped>
.error {
    color: red;
    font-size: 0.9em;
    padding-top: 6px;
    display: block;
}
</style>
