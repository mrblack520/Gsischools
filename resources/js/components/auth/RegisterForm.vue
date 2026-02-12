<template>

    <div class="container">
        <form class="registeration-form" @submit.prevent="submitForm">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-wrapper">
                        <label for="first_name">First name*</label>
                        <div class="input-wrapper">
                            <input type="text" v-model="form.first_name" placeholder="Your first name"
                                @input="validateField('first_name')">
                        </div>
                        <span class="error" v-if="errors.first_name">{{ errors.first_name }}</span>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="form-wrapper">
                        <label for="surname">last name*</label>
                        <div class="input-wrapper">
                            <input type="text" v-model="form.last_name" placeholder="Your surname"
                                @input="validateField('last_name')">
                        </div>
                        <span class="error" v-if="errors.last_name">{{ errors.last_name }}</span>
                    </div>
                </div>
                
                <div class="form-wrapper">
                        <label for="surname">Guardians Name*</label>
                        <div class="input-wrapper">
                            <input type="text" v-model="form.last_name" placeholder="Your surname"
                                @input="validateField('last_name')">
                        </div>
                        <span class="error" v-if="errors.last_name">{{ errors.last_name }}</span>
                    </div>
                     <div class="col-md-12 ">
                    <div class="form-wrapper">
                        <label for="dob">Date of birth*</label>
                        <div class="input-wrapper">
                            <input type="date" v-model="form.date_of_birth" @input="validateField('date_of_birth')">
                        </div>
                        <span class="error" v-if="errors.date_of_birth">{{ errors.date_of_birth }}</span>
                    </div>
                </div>
                      <div class="form-wrapper">
                        <label for="surname">Address*</label>
                        <div class="input-wrapper">
                            <input type="text" v-model="form.last_name" placeholder="Your surname"
                                @input="validateField('last_name')">
                        </div>
                        <span class="error" v-if="errors.last_name">{{ errors.last_name }}</span>
                    </div>
                    
                <div class="col-md-12">
                    <div class="form-wrapper">
                        <label>National Id No*</label>
                         <div class="input-wrapper">
                            <input type="text" v-model="form.last_name" placeholder="CNIC Num"
                                @input="validateField('last_name')">
                        </div>
                        <span class="error" v-if="errors.status">{{ errors.status }}</span>
                    </div>
                </div>
                <div class="col-md-12">
                   
                </div>
                <div class="col-md-12">
                    <div class="form-wrapper">
                        <label>Join us for*</label>
                        <div class="input-wrapper checkbox-wrapper interested-in-wrapper">
                            <div class="checkbox-con d-flex justify-content-between align-items-center">
                                <label class="custom-radio">
                                    <input type="radio" v-model="form.joinned_as" value="1" checked>
                                    <span class="radio-mark"></span> School
                                </label>
                                <div class="wrapper pe-2">
                                  
                                   
                                </div>
                            </div>
                            <div class="checkbox-con d-flex justify-content-between align-items-center">
                                <label class="custom-radio">
                                    <input type="radio" v-model="form.joinned_as" value="2">
                                    <span class="radio-mark"></span> Academy
                                </label>

                                <div class="wrapper pe-2">
                                   
                                </div>
                            </div>
                            <div class="checkbox-con d-flex justify-content-between align-items-center">
                                <label class="custom-radio">
                                    <input type="radio" v-model="form.joinned_as" value="2">
                                    <span class="radio-mark"></span> Courses
                                </label>

                                <div class="wrapper pe-2">
                                   
                                </div>
                            </div>
                            
                            <div class="d-none">{{ form.joinned_as }}</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 position-relative">
                    <div class="form-wrapper">
                        <label>If Courses*</label>
                        <div class="input-wrapper checkbox-wrapper goals-wrapper">
                            <template v-for="(goal, ind) in props.goals">
                                <div class="checkbox-con">
                                    <label class="custom-checkbox">
                                        <input type="checkbox" :value="goal.id" v-model="form.goals"
                                            @change="validateField('goals')">
                                        <span class="checkmark"></span>{{ goal.name }}
                                    </label>
                                </div>
                            </template>

                            <div class="checkbox-con">
                                <label class="custom-checkbox">
                                    <input type="checkbox" value="0" v-model="form.goals">
                                    <span class="checkmark"></span> Please specify
                                </label>
                            </div>

                            <div class="checkbox-con w-100" v-if="form.goals.includes('0')">
                                <input type="text" placeholder="Write here..." v-model="form.other_goals">
                            </div>
                        </div>
                        <span class="error" v-if="errors.goals">{{ errors.goals }}</span>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-wrapper">
                        <label for="locations">Contact Number*</label>
                        
                            
                        <div class="input-wrapper">
                            <input type="text" v-model="form.last_name" placeholder="Your Contact Number"
                                @input="validateField('last_name')">
                        </div>
                        <span class="error" v-if="errors.last_name">{{ errors.last_name }}</span>
                        </div>
                        <span class="error" v-if="errors.location">{{ errors.location }}</span>
                    
                </div>
                <div class="col-md-12">
                    <div class="form-wrapper">
                        <label for="locations">Emergency Contact Number*</label>
                        
                            
                        <div class="input-wrapper">
                            <input type="text" v-model="form.last_name" placeholder="Emergency Contact Number"
                                @input="validateField('last_name')">
                        </div>
                        <span class="error" v-if="errors.last_name">{{ errors.last_name }}</span>
                        </div>
                        <span class="error" v-if="errors.location">{{ errors.location }}</span>
                    
                </div>
                <div class="col-md-12">
                    <div class="form-wrapper">
                        <label>Gender*</label>
                        <div class="input-wrapper checkbox-wrapper interested-in-wrapper">
                            <div class="checkbox-con">
                                <label class="custom-radio">
                                    <input type="radio" v-model="form.gender" value="0">
                                    <span class="radio-mark"></span> Male
                                </label>
                            </div>
                            <div class="checkbox-con">
                                <label class="custom-radio">
                                    <input type="radio" v-model="form.gender" value="1">
                                    <span class="radio-mark"></span> Female
                                </label>
                            </div>
                            <div class="checkbox-con">
                                <label class="custom-radio">
                                    <input type="radio" v-model="form.gender" value="2">
                                    <span class="radio-mark"></span> Other
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
     

                
                <div class="col-md-12">
                    <div class="form-wrapper">
                        <label for="email">Email*</label>
                        <div class="input-wrapper">
                            <input type="email" id="email" placeholder="Email" v-model="form.email"
                                @input="validateField('email')">
                        </div>
                        <span class="error" v-if="errors.email">{{ errors.email }}</span>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-wrapper">
                       <div class="form-wrapper">
                        <label for="email">Previous Class*</label>
                        <div class="input-wrapper">
                            <input type="email" id="email" placeholder="Previous class" v-model="form.email"
                                @input="validateField('email')">
                        </div>
                        <span class="error" v-if="errors.email">{{ errors.email }}</span>
                    </div>
                    </div>
                </div>
                <div class="col-md-12">
                     <div class="form-wrapper">
                        <label for="email">Class Applying for*</label>
                        <div class="input-wrapper">
                            <input type="email" id="email" placeholder="Class Applying for" v-model="form.email"
                                @input="validateField('email')">
                        </div>
                        <span class="error" v-if="errors.email">{{ errors.email }}</span>
                    </div>
                </div>
                 <div class="col-md-12">
                     <div class="form-wrapper">
                        <label for="email">Previous School*</label>
                        <div class="input-wrapper">
                            <input type="email" id="email" placeholder="Previous School" v-model="form.email"
                                @input="validateField('email')">
                        </div>
                        <span class="error" v-if="errors.email">{{ errors.email }}</span>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="accept-terms">
                        <div class="form-wrapper mt-3">
                            <label class="custom-checkbox mb-4 align-items-start">
                                <input type="checkbox" v-model="form.terms_accepted">
                                <div><span class="checkmark mt-2"></span></div>
                                <p>I hereby apply for registration at Guiding Star International Schools & Academy. All the information provided above is true and complete to the best of my knowledge                                </p>
                            </label>
                            
                            <div class="mt-4 save-or-submit">
                                <button type="submit">{{ (formLoading) ? 'Please wait..' : 'Complete registration'}}</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </form>
    </div>

</template>


<script setup>

import Choices from 'choices.js';
import { ref, defineProps, onMounted, onBeforeUnmount } from 'vue';
import axios from 'axios';

import { useAuthStore } from '../../stores/auth';
const auth = useAuthStore();

const props = defineProps([
    'status',
    'interested_fields',
    'goals',
    'locations',
    'languages'
]);
const formLoading = ref(false);
const form = ref({
    first_name: '',
    last_name: '',
    status: [],
    other_status: '',
    interested_field: '1',
    other_interested_field: '',
    joinned_as: '1',
    goals: [],
    other_goals: '',
    location: '',
    gender: '0',
    date_of_birth: '',
    languages: [],
    email: '',
    password: '',
    password_confirmation: '',
    terms_accepted: false,
    community_updates: false
});

const errors = ref({});

function validateField(field, value = null) {
    errors.value[field] = '';

    switch (field) {
        case 'first_name':
            errors.value.first_name = form.value.first_name ? '' : (value || '* First name is required')
            break;
        case 'last_name':
            errors.value.last_name = form.value.last_name ? '' : (value || '* Surname is required')
            break;
        case 'email':
            errors.value.email = form.value.email ? '' : (value || '* Email is required')
            break;
        case 'password':
            errors.value.password = form.value.password ? '' : (value || '* Password is required')
            break;
        case 'password_confirmation':
            errors.value.password_confirmation = form.value.password_confirmation === form.value.password
                ? '' : (value || '* Passwords do not match')
            break;
        case 'date_of_birth':
            errors.value.date_of_birth = form.value.date_of_birth ? '' : (value || '* Date of birth is required')
            break;
        case 'location':
            errors.value.location = form.value.location ? '' : (value || '* Location is required')
            break;
        case 'status':
            errors.value.status = form.value.status.length ? '' : (value || '* Status is required')
            break;
        case 'goals':
            errors.value.goals = form.value.goals.length ? '' : (value || '* Foals is required')
            break;
        case 'languages':
            errors.value.languages = form.value.languages.length ? '' : (value || '* Language is required')
            break;
    }
}

function validateForm() {
    validateField('first_name');
    validateField('last_name');
    validateField('email');
    validateField('password');
    validateField('password_confirmation');
    validateField('date_of_birth');
    validateField('status');
    validateField('goals');
    validateField('location');
    validateField('languages');

    return Object.keys(errors.value).every(key => !errors.value[key]);
}

function submitForm() {
    if (!validateForm()) return;

    const formData = new FormData();
    for (const key in form.value) {
        formData.append(key, form.value[key]);
    }
    formLoading.value = true;
    axios.get('/sanctum/csrf-cookie');
    axios.post('/api/register', formData).then(function (response) {

        axios.defaults.headers.common["Authorization"] = "Bearer " + response.data.access_token.plainTextToken;
        console.log('token', response.data.access_token.plainTextToken)

        localStorage.setItem('token', response.data.access_token.plainTextToken)

        auth.login(response.data.user)

        fetch('/token-to-session', {
            headers: {
                'Authorization': 'Bearer ' + response.data.access_token.plainTextToken
            }
        }).then(() => {

            formLoading.value = false;
            console.log(form)
            console.log(form.value)
            console.log(form.value.joinned_as)
            if (form.value.joinned_as == 1 || form.value.joinned_as == '1') {
                window.location.href = '/';
            } else {
                window.location.href = '/university-form';
            }
        });
    }).catch(function (error) {
        formLoading.value = false;

        if (error.response && error.response.data && error.response.data.errors) {
            const serverErrors = error.response.data.errors;
            for (const field in serverErrors) {
                if (Object.hasOwn(serverErrors, field)) {
                    errors.value[field] = serverErrors[field][0];
                }
            }
        }
    })
}

const selectLangEl = ref(null);
const selectLocEl = ref(null);

let LangchoicesInstance = null;
let LochoicesInstance = null;

onMounted(() => {
    if (props.locations.length && !form.value.location) {
        form.value.location = props.locations[0].id;
    }

    if (props.interested_fields.length && !form.value.interested_field) {
        form.value.interested_field = props.interested_fields[0].id;
    }

    LangchoicesInstance = new Choices(selectLangEl.value, {
        removeItemButton: true,
        placeholder: true,
        placeholderValue: 'Select languages',
    });

    LochoicesInstance = new Choices(selectLocEl.value, {
        removeItemButton: true,
        placeholder: true,
        placeholderValue: 'Select location',
    });
});

onBeforeUnmount(() => {
    if (LangchoicesInstance) {
        LangchoicesInstance.destroy();
        LangchoicesInstance = null;
    }
    if (LochoicesInstance) {
        LochoicesInstance.destroy();
        LochoicesInstance = null;
    }
});


import { useCounterStore } from '../../stores/counter';
const counter = useCounterStore();

</script>


<style scoped>
[type="submit"] {
    font-size: 18px;
    background: transparent;
    border: 1px solid var(--color-primary);
    border-radius: 29px;
    padding: 16px 37.6px 9px;
    cursor: pointer;
    font-weight: 500;
}

.error {
    color: red;
    font-size: 0.9em;
    padding-top: 6px;
}
</style>
