<template>
    <div class="container">
        <form class="registration-form" @submit.prevent="submitForm">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-wrapper">
                        <label>University</label>
                        <select class="form-select" v-model="form.university_1">
                            <option v-for="u in props.universities" :key="u.id" :value="u.id">{{ u.name }}</option>
                            <option value="other">Other, please specify</option>
                        </select>
                        <input v-if="form.university_1 === 'other'" v-model="form.other_university_1"
                            placeholder="Write here..." />
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-wrapper">
                        <label>Course</label>
                        <select class="form-select" v-model="form.course_1">
                            <option v-for="c in props.courses" :key="c.id" :value="c.id">{{ c.name }}</option>
                            <option value="other">Other, please specify</option>
                        </select>
                        <input v-if="form.course_1 === 'other'" v-model="form.other_course_1"
                            placeholder="Write here..." />
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-wrapper">
                        <label>Status</label>
                        <select class="form-select" v-model="form.status_1">
                            <option value="1st-year">1st Year</option>
                            <option value="intermediate-year">Intermediate Year</option>
                            <option value="final-year">Final Year</option>
                            <option value="graduate">Graduate</option>
                            <option value="other">Other, please specify</option>
                        </select>
                        <input v-if="form.status_1 === 'other'" v-model="form.other_status_1"
                            placeholder="Write here..." />
                    </div>
                </div>

                <div class="col-md-12 d-flex justify-content-end mt-3">
                    <a class="add-another" href="javascript:void(0)">Add another university and course</a>
                </div>

                <div class="col-md-4 add-university">
                    <div class="form-wrapper">
                        <label>Another University</label>
                        <select class="form-select" v-model="form.university_2">
                            <option v-for="u in props.universities" :key="'u2-' + u.id" :value="u.id">{{ u.name }}
                            </option>
                            <option value="other">Other, please specify</option>
                        </select>
                        <input v-if="form.university_2 === 'other'" v-model="form.other_university_2"
                            placeholder="Write here..." />
                    </div>
                </div>

                <div class="col-md-4 add-course">
                    <div class="form-wrapper">
                        <label>Another Course</label>
                        <select class="form-select" v-model="form.course_2">
                            <option v-for="c in props.courses" :key="'c2-' + c.id" :value="c.id">{{ c.name }}</option>
                            <option value="other">Other, please specify</option>
                        </select>
                        <input v-if="form.course_2 === 'other'" v-model="form.other_course_2"
                            placeholder="Write here..." />
                    </div>
                </div>

                <div class="col-md-4 add-status">
                    <div class="form-wrapper">
                        <label>Another Status</label>
                        <select class="form-select" v-model="form.status_2">
                            <option value="1st-year">1st Year</option>
                            <option value="intermediate-year">Intermediate Year</option>
                            <option value="final-year">Final Year</option>
                            <option value="graduate">Graduate</option>
                            <option value="other">Other, please specify</option>
                        </select>
                        <input v-if="form.status_2 === 'other'" v-model="form.other_status_2"
                            placeholder="Write here..." />
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-wrapper">
                        <label>Accommodation Experience</label>
                        <div class="input-wrapper checkbox-wrapper">
                            <div v-for="item in props.accommodation_experiences" :key="item.id" class="checkbox-con">
                                <label class="custom-checkbox">
                                    <input type="checkbox" :value="item.id" v-model="form.accommodation" />
                                    <span class="checkmark"></span> {{ item.name }}
                                </label>
                            </div>
                            <label class="custom-checkbox">
                                <input type="checkbox" value="other" v-model="form.accommodation" />
                                <span class="checkmark"></span> Other, please specify
                            </label>
                            <input v-if="form.accommodation.includes('other')" v-model="form.other_accommodation"
                                placeholder="Write here..." />
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-wrapper">
                        <label>Your rate (no limit)</label>
                        <input type="text" v-model="form.rate" placeholder="0 £" />
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-wrapper">
                        <label>Upload profile image</label>
                        <input type="file" @change="handleFileUpload" />
                    </div>
                </div>

                <div class="d-flex gap-3 save-or-submit mt-4 mb-5">
                    <div>
                        <a href="javascript:void(0)">Save and continue later</a>
                    </div>
                    <div>
                        <button type="submit">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</template>

<script setup>
import { ref, defineProps } from 'vue'
import axios from 'axios'

const props = defineProps(['universities', 'courses', 'accommodation_experiences'])

const form = ref({
    university_1: '',
    other_university_1: '',
    course_1: '',
    other_course_1: '',
    status_1: '',
    other_status_1: '',

    university_2: null,
    other_university_2: '',
    course_2: null,
    other_course_2: '',
    status_2: null,
    other_status_2: '',

    accommodation: [],
    other_accommodation: '',
    rate: '',
    profile_image: null
})

function handleFileUpload(e) {
    const file = e.target.files[0]
    if (file) form.value.profile_image = file
}

function submitForm() {

    console.log(form)
}
</script>

<style scoped>
.add-another {
    color: #5a00cc;
    font-weight: 500;
    text-decoration: underline;
    cursor: pointer;
}

.save-or-submit button {
    background: #5a00cc;
    color: white;
    padding: 10px 24px;
    border: none;
    border-radius: 5px;
}

input[type='file'] {
    padding: 6px;
}
</style>
