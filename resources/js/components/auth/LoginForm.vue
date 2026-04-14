<template>
    <form action="/portal/login" method="POST">
        
        <!-- CSRF TOKEN -->
        <input type="hidden" name="_token" :value="csrf">

        <div class="form-group first">
            <label>Email</label>
            <input 
                type="text" 
                name="email"
                v-model="form.email" 
                @input="validateField('email')" 
                class="form-control"
                placeholder="Enter your email">
            
            <span class="error" v-if="errors.email">{{ errors.email }}</span>
        </div>

        <div class="form-group last mb-2">
            <label>Password</label>
            <input 
                type="password" 
                name="password"
                v-model="form.password" 
                @input="validateField('password')" 
                class="form-control"
                placeholder="Enter your password">
            
            <span class="error" v-if="errors.password">{{ errors.password }}</span>
        </div>

        <div class="d-sm-flex align-items-center justify-content-end mb-2">
            <p class="ml-auto">
                <a :href="route('password.request')" class="forgot-pass">Forgot Password</a>
            </p>
        </div>

        <div>
            <input type="submit" value="Log In" class="btn">
        </div>

        <div class="d-flex justify-content-center mt-4">
            <span>Don't have an account? 
                <a :href="route('frontend.register')">Register</a>
            </span>
        </div>
    </form>
</template>

<script setup>
import { ref } from 'vue';
import { route } from 'ziggy-js'

const form = ref({
    email: '',
    password: ''
});

const errors = ref({})

// ✅ CSRF token
const csrf = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
console.log(csrf)
function validateField(field) {
    switch (field) {
        case 'email':
            errors.value.email = form.value.email ? '' : '* Email is required';
            break;
        case 'password':
            errors.value.password = form.value.password ? '' : '* Password is required';
            break;
    }
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
