<template>
    <div>
        <!-- Show form if email is not sent -->
        <div v-if="!isEmailSent">
            <div class="">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" v-model="form.email" @input="validateField"
                        placeholder="Enter your email" class="form-control" />
                    <span class="error" v-if="errors.email">{{ errors.email }}</span>
                </div>

                <div class="text-center mt-3">
                    <div v-if="backendError" class="text-danger mb-2">
                        {{ backendError }}
                    </div>

                    <button type="button" :disabled="formLoading" class="btn btn-primary px-4" @click="submitForm">
                        {{ formLoading ? 'Please wait...' : 'Send Reset Link' }}
                    </button>
                </div>

                <div class="text-center mt-4">
                    <span>Already have an account? <a href="/login">Login now</a></span>
                </div>
            </div>
        </div>

        <!-- Confirmation message -->
        <div v-else class="text-center">
            <h5 class="text-success mb-3">✔ Reset link sent successfully!</h5>
            <p class="mb-4">Please check your email inbox to reset your password.</p>
            <a href="/login" class="btn btn-outline-primary">Go to Login</a>
        </div>
    </div>
</template>

<script setup>
import axios from 'axios';
import { ref } from 'vue';

// Form state
const form = ref({ email: '' });
const errors = ref({});
const formLoading = ref(false);
const backendError = ref('');
const isEmailSent = ref(false);

// Validation
function validateField() {
    errors.value.email = form.value.email ? '' : '* Email is required';
}

function validateForm() {
    validateField();
    return Object.keys(errors.value).every((key) => !errors.value[key]);
}

const submitForm = async () => {
    backendError.value = '';
    if (!validateForm()) return;

    formLoading.value = true;

    try {
        await axios.get('/sanctum/csrf-cookie');
        await axios.post('/api/forgot-password', {
            email: form.value.email
        });

        isEmailSent.value = true;
    } catch (error) {
        if (error.response?.data?.message) {
            backendError.value = error.response.data.message;
        } else {
            backendError.value = 'Something went wrong. Please try again.';
        }
    } finally {
        formLoading.value = false;
    }
};
</script>

<style scoped>
.form-block {
    max-width: 420px;
    margin: 0 auto;
    padding: 30px;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
}

.error {
    color: red;
    font-size: 0.85rem;
    margin-top: 4px;
    display: block;
}

input.form-control {
    height: 44px;
    border-radius: 6px;
    border: 1px solid #ccc;
}

.btn {
    border-radius: 25px;
    padding: 10px 30px;
}
</style>
