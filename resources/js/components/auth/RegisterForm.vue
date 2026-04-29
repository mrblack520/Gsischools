<template>

  <div class="container ">
    <form class="registeration-form " @submit.prevent="submitForm">
      <div class="row">
        <!-- First Name -->
        <div class="col-md-6 col-12">
          <div class="form-wrapper">
            <label for="first_name">First name*</label>
            <div class="input-wrapper">
              <input
                type="text"
                v-model="form.first_name"
                placeholder="Your first name"
                @input="validateField('first_name')"
              >
            </div>
            <span class="error" v-if="errors.first_name">{{ errors.first_name }}</span>
          </div>
        </div>
        <!-- Last Name -->
        <div class="col-md-6 col-12">
          <div class="form-wrapper">
            <label for="lastname">Last name*</label>
            <div class="input-wrapper">
              <input
                type="text"
                v-model="form.last_name"
                placeholder="Your Last name"
                @input="validateField('last_name')"
              >
            </div>
            <span class="error" v-if="errors.last_name">{{ errors.last_name }}</span>
          </div>
        </div>
         <!-- Date of Birth -->
        <div class="col-md-12 col-12">
          <div class="form-wrapper">
            <label for="dob">Date of birth*</label>
            <div class="input-wrapper">
              <input type="date" v-model="form.date_of_birth" @input="validateField('date_of_birth')">
            </div>
            <span class="error" v-if="errors.date_of_birth">{{ errors.date_of_birth }}</span>
          </div>
        </div>
                <!-- Gender -->
        <div class="col-md-12 col-12">
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
          <!-- Contact Numbers -->
        <div class="col-md-6 col-12">
          <div class="form-wrapper">
            <label for="locations">Contact Number*</label>
            <div class="input-wrapper">
              <input type="text" v-model="form.contact_number" placeholder="Your Contact Number" @input="validateField('contact_number')">
            </div>
            <span class="error" v-if="errors.contact_number">{{ errors.contact_number }}</span>
            <span class="error" v-if="errors.contact_number">{{ errors.contact_number }}</span>
          </div>
        </div>

        <div class="col-md-6 col-12">
          <div class="form-wrapper">
            <label for="locations">Emergency Contact Number*</label>
            <div class="input-wrapper">
              <input type="text" v-model="form.emergency_contact_number" placeholder="Emergency Contact Number" @input="validateField('emergency_contact_number')">
            </div>
            <span class="error" v-if="errors.emergency_contact_number">{{ errors.emergency_contact_number }}</span>
            <span class="error" v-if="errors.location">{{ errors.location }}</span>
          </div>
        </div>
        <!-- National ID -->
        <div class="col-md-12 col-12">
          <div class="form-wrapper">
            <label>National Id No*</label>
            <div class="input-wrapper">
              <input
                type="text"
                v-model="form.national_id_no"
                placeholder="CNIC Num"
                @input="validateField('national_id_no')"
              >
            </div>
            <span class="error" v-if="errors.national_id_no">{{ errors.national_id_no }}</span>
          </div>
        </div>
                <!-- Emails -->
        <div class="col-md-12 col-12">
          <div class="form-wrapper">
            <label for="email">Email Address*</label>
            <div class="input-wrapper">
              <input type="email" id="email" placeholder="Email" v-model="form.email" @input="validateField('email')">
            </div>
            <span class="error" v-if="errors.email">{{ errors.email }}</span>
          </div>
        </div>
        <!-- Address -->
        <div class="form-wrapper">
          <label for="Home Address">Home Address*</label>
          <div class="input-wrapper">
            <input
              type="text"
              v-model="form.address"
              placeholder="Address"
              @input="validateField('address')"
            >
          </div>
          <span class="error" v-if="errors.address">{{ errors.address }}</span>
        </div>
        <!-- Religion -->
        <div class="col-md-6 col-12">
          <div class="form-wrapper">
            <label>Religion*</label>
            <div class="input-wrapper">
              <select v-model="form.religion" required class="custom-input">
  <option value="" disabled selected>Select Religion</option>
  <option value="Islam">Islam</option>
  <option value="Hinduism">Hinduism</option>
  <option value="Sikhism">Sikhism</option>
  <option value="Buddhism">Buddhism</option>
  <option value="Christianity">Christianity</option>
</select>

            </div>
          </div>
        </div>
        <!-- Image Upload -->
        <div class="col-md-6 col-12">
          <div class="form-wrapper">
            <label>Upload Image*</label>
            <div class="input-wrapper">
              <input type="file" class="custom-input" @change="handleImage">
            </div>
          </div>
        </div>
        <!-- Guardian Name -->
        <div class="form-wrapper">
          <label for="surname">Guardian's Name*</label>
          <div class="input-wrapper">
            <input
              type="text"
              v-model="form.guardian_name"
              placeholder="Guardian's Name"
              @input="validateField('Guardian-Name')"
            >
          </div>
          <span class="error" v-if="errors.guardian_name">{{ errors.guardian_name }}</span>
        </div>
        <!-- Relation with Guardian -->
        <div class="col-md-12 col-12">
          <div class="form-wrapper">
            <label>Relation With Guardian*</label>
            <div class="input-wrapper checkbox-wrapper interested-in-wrapper">
              <div class="checkbox-con d-flex justify-content-between align-items-center">
                <label class="custom-radio">
                  <input type="radio" v-model="form.joinned_as" value="1">
                  <span class="radio-mark"></span> Father
                </label>
              </div>
              <div class="checkbox-con d-flex justify-content-between align-items-center">
                <label class="custom-radio">
                  <input type="radio" v-model="form.joinned_as" value="2">
                  <span class="radio-mark"></span> Mother
                </label>
              </div>
              <div class="checkbox-con d-flex justify-content-between align-items-center">
                <label class="custom-radio">
                  <input type="radio" v-model="form.joinned_as" value="3">
                  <span class="radio-mark"></span> Other
                </label>
              </div>
              <div class="d-none">{{ form.joinned_as }}</div>
            </div>
          </div>
        </div>
                <!-- Guardian Email -->
        <div class="col-md-6 col-12">
          <div class="form-wrapper">
            <label for="guardian_email">Guardian's Email*</label>
            <div class="input-wrapper">
              <input
                type="email"
                v-model="form.guardian_email"
                placeholder="Guardian's email"
                @input="validateField('guardian_email')"
              >
            </div>
            <span class="error" v-if="errors.guardian_email">{{ errors.guardian_email }}</span>
          </div>
        </div>
        <!-- Guardian Phone -->
        <div class="col-md-6 col-12">
          <div class="form-wrapper">
            <label for="guardian_phone">Guardian's Phone Number*</label>
            <div class="input-wrapper">
              <input
                type="text"
                v-model="form.guardian_phone"
                placeholder="Guardian's phone number"
                @input="validateField('guardian_phone')"
              >
            </div>
            <span class="error" v-if="errors.guardian_phone">{{ errors.guardian_phone }}</span>
          </div>
        </div>
         <!-- Guardian's Address -->
        <div class="col-md-12 col-12">
          <div class="form-wrapper">
            <label for="email">Guardian's Address*</label>
            <div class="input-wrapper">
              <input
                type="text"
                id="text"
                placeholder="Guardian's Address"
                v-model="form.text"
                @input="validateField('guardians Address')"
              >
            </div>
            <span class="error" v-if="errors.guardiansaddress">{{ errors.guardiansaddress }}</span>
          </div>
        </div>
        
        <!-- Join us for (School/Academy/Courses) -->
        <div class="col-md-12 col-12">
  <div class="form-wrapper">
    <label>Join us for*</label>
    <div class="input-wrapper checkbox-wrapper interested-in-wrapper">
      
      <div class="checkbox-con d-flex justify-content-between align-items-center">
        <label class="custom-radio">
          <input type="radio" v-model="form.joinned_as" value="1">
          <span class="radio-mark"></span> School
        </label>
      </div>

      <div class="checkbox-con d-flex justify-content-between align-items-center">
        <label class="custom-radio">
          <input type="radio" v-model="form.joinned_as" value="2">
          <span class="radio-mark"></span> Academy
        </label>
      </div>

      <div class="checkbox-con d-flex justify-content-between align-items-center">
        <label class="custom-radio">
          <input type="radio" v-model="form.joinned_as" value="3">
          <span class="radio-mark"></span> Courses
        </label>
      </div>

      <div class="d-none">{{ form.joinned_as }}</div>
    </div>
  </div>
</div>
<!-- Group -->
        <div class="col-md-6 col-12">
          <div class="form-wrapper">
            <label>GROUP*</label>
            <div class="input-wrapper">
              <select v-model="form.group" required class="custom-input">
                <option value="" selected="">Select Group</option>
                <option value="school">School</option>
                <option value="language">language</option>
                <option value="coaching">Coaching</option>
                <option value="computer">Computer</option>
              </select>
            </div>
          </div>
        </div>
        <!-- If Courses -->
        <div class="col-md-12 position-relative col-12">
          <div class="form-wrapper">
            <label>If Courses*</label>
            <div class="input-wrapper checkbox-wrapper goals-wrapper">
              <template v-for="(goal, ind) in props.goals">
                <div class="checkbox-con">
                  <label class="custom-checkbox">
                    <input type="checkbox" :value="goal.id" v-model="form.goals" @change="validateField('goals')">
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
        <!-- Previous School -->
        <div class="col-md-12 col-12">
          <div class="form-wrapper">
            <label for="text">Previous School*</label>
            <div class="input-wrapper">
              <input type="text" id="email" placeholder="Previous School" v-model="form.previous_school" @input="validateField('previous_school')">
            </div>
            <span class="error" v-if="errors.previous_school">{{ errors.previous_school }}</span>
          </div>
        </div>
         <!-- Previous Class -->
        <div class="col-md-6 col-12">
          <div class="form-wrapper">
            <label for="text">Previous Class*</label>
            <div class="input-wrapper">
              <input type="text" id="email" placeholder="Previous class" v-model="form.previous_class" @input="validateField('previous_class')">
            </div>
            <span class="error" v-if="errors.email">{{ errors.email }}</span>
          </div>
        </div>
          <!-- Class Applying for -->
        <div class="col-md-6 col-12">
          <div class="form-wrapper">
            <label for="text">Class Applying for*</label>
            <div class="input-wrapper">
              <input type="text" id="email" placeholder="Class Applying for" v-model="form.class_applying_for" @input="validateField('class_applying_for')">
            </div>
            <span class="error" v-if="errors.class_applying_for">{{ errors.class_applying_for }}</span>
          </div>
        </div>
        <!-- Class -->
                <div class="col-md-6 col-12">
          <div class="form-wrapper">
            <label>CLASS*</label>
            <div class="input-wrapper">
              <select v-model="form.class" required class="custom-input">
                <option value="" selected="">Select Class</option>
                <option value="Mont junior">Montessori-Ju</option>
                <option value="Mont senior">Montessori-Ad</option>
                <option value="Class 1">Class 1</option>
                <option value="Class 3">Class 3</option>
                <option value="Class 4">Class 4</option>
                <option value="Class 5">Class 5</option>
                <option value="Class 6">Class 6</option>
                <option value="Class 7">Class 7</option>
                <option value="Class 8">Class 8</option>
                <option value="Class 9">Class 9</option>
                <option value="Matric">Class 10</option>
                <option value="1styear">1st Year</option>
                <option value="2ndyear">2nd Year</option>
                <option value="1st,2ndyear">1st, 2nd year c</option>
                <option value="language">Language</option>
                <option value="computer class">Computer</option>
              </select>
            </div>
          </div>
        </div>
        <!-- Section -->
                <div class="col-md-6 col-12">
          <div class="form-wrapper">
            <label>SECTION*</label>
            <div class="input-wrapper">
              <select v-model="form.section" required class="custom-input">
                <option value="" selected="">Select Section</option>
                <option value="a">A</option>
                <option value="b">B</option>
                <option value="c">C</option>
              </select>
            </div>
          </div>
        </div>
        <!-- Admission Date -->
        <div class="col-md-12 col-12">
          <div class="form-wrapper">
            <label for="dob">ADMISSION DATE*</label>
            <div class="input-wrapper">
              <input type="date" v-model="form.admission_date" @input="validateField('admission_date')">
            </div>
            <span class="error" v-if="errors.admission_date">{{ errors.admission_date }}</span>
          </div>
        </div>
        <!-- Academic Year -->
        <div class="col-md-6 col-12">
          <div class="form-wrapper">
            <label>ACADEMIC YEAR*</label>
            <div class="input-wrapper">
              <select v-model="form.academicyear" required class="custom-input">
                <option value="" selected="">ACADEMIC YEAR</option>
                <option value="2025">2025[Jan-Dec]</option>
                <option value="2026">2026[Jan-Dec]</option>
              </select>
            </div>
          </div>
        </div>

<!-- CATEGORY -->
               <div class="col-md-6 col-12">
          <div class="form-wrapper">
            <label>CATEGORY*</label>
            <div class="input-wrapper">
              <select v-model="form.CATECORY" required class="custom-input">
                <option value="" selected="">Category</option>
                <option value="morning">Morning Shift</option>
                <option value="evening">Evening Shift</option>
                <option value="night">Night Shift</option>
              </select>
            </div>
          </div>
        </div>

        <!-- ROLL -->
        <div class="form-wrapper col-12">
          <label for="surname">ROLL*</label>
          <div class="input-wrapper">
            <input
              type="text"
              v-model="form.roll"
              placeholder="Your roll"
              @input="validateField('roll')"
            >
          </div>
        </div>
         
          
        <!-- Terms and Submit -->
        <div class="col-md-12 col-12">
          <div class="accept-terms">
            <div class="form-wrapper mt-3">
              <label class="custom-checkbox mb-4 align-items-start">
                <input type="checkbox" v-model="form.terms_accepted">
                <div><span class="checkmark mt-2"></span></div>
                <p>
                  I hereby apply for registration at Guiding Star International Schools & Academy. All the information provided above is true and complete to the best of my knowledge
                </p>
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

import { ref, defineProps, onMounted, onBeforeUnmount } from 'vue';
import axios from 'axios';

const props = defineProps([
    'goals',
]);

const formLoading = ref(false);

const form = ref({
    // Personal Info
    first_name: '',
    last_name: '',
    date_of_birth: '',
    gender: '0',

    // Contact
    contact_number: '',
    emergency_contact_number: '',
    national_id_no: '',
    email: '',
    address: '',

    // Religion & Photo
    religion: '',
    photo: null,

    // Guardian Info
    guardian_name: '',
    guardian_relation: '1',   // ✅ Fix #1: alag field (pehle joinned_as se clash tha)
    guardian_email: '',
    guardian_phone: '',
    guardian_address: '',     // ✅ Fix #2: "form.text" ki jagah sahi naam

    // Enrollment
    joined_for: '1',          // ✅ Fix #3: alag field School/Academy/Courses ke liye
    goals: [],
    other_goals: '',
    group: '',
    previous_school: '',
    previous_class: '',
    class_applying_for: '',
    class: '',
    section: '',
    admission_date: '',
    academicyear: '',
    category: '',             // ✅ Fix #4: "CATECORY" typo fix
    roll: '',

    // Terms
    terms_accepted: false,
});

const errors = ref({});

function validateField(field, value = null) {
    errors.value[field] = '';

    const required = (val, msg) => val ? '' : (value || msg);

    switch (field) {
        case 'first_name':
            errors.value.first_name = required(form.value.first_name, '* First name is required');
            break;
        case 'last_name':
            errors.value.last_name = required(form.value.last_name, '* Last name is required');
            break;
        case 'email':
            errors.value.email = required(form.value.email, '* Email is required');
            break;
        case 'date_of_birth':
            errors.value.date_of_birth = required(form.value.date_of_birth, '* Date of birth is required');
            break;
        case 'contact_number':
            errors.value.contact_number = required(form.value.contact_number, '* Contact number is required');
            break;
        case 'emergency_contact_number':
            errors.value.emergency_contact_number = required(form.value.emergency_contact_number, '* Emergency contact is required');
            break;
        case 'national_id_no':
            errors.value.national_id_no = required(form.value.national_id_no, '* National ID is required');
            break;
        case 'address':
            errors.value.address = required(form.value.address, '* Address is required');
            break;
        case 'guardian_name':
            errors.value.guardian_name = required(form.value.guardian_name, '* Guardian name is required');
            break;
        case 'guardian_email':
            errors.value.guardian_email = required(form.value.guardian_email, '* Guardian email is required');
            break;
        case 'guardian_phone':
            errors.value.guardian_phone = required(form.value.guardian_phone, '* Guardian phone is required');
            break;
        case 'guardian_address':
            errors.value.guardian_address = required(form.value.guardian_address, '* Guardian address is required');
            break;
        case 'previous_school':
            errors.value.previous_school = required(form.value.previous_school, '* Previous school is required');
            break;
        case 'class_applying_for':
            errors.value.class_applying_for = required(form.value.class_applying_for, '* Class applying for is required');
            break;
        case 'admission_date':
            errors.value.admission_date = required(form.value.admission_date, '* Admission date is required');
            break;
        case 'goals':
            errors.value.goals = form.value.goals.length ? '' : (value || '* Please select at least one course');
            break;
    }
}

function validateForm() {
    validateField('first_name');
    validateField('last_name');
    validateField('email');
    validateField('date_of_birth');
    validateField('contact_number');
    validateField('emergency_contact_number');
    validateField('national_id_no');
    validateField('address');
    validateField('guardian_name');
    validateField('guardian_email');
    validateField('guardian_phone');
    validateField('guardian_address');
    validateField('previous_school');
    validateField('class_applying_for');
    validateField('admission_date');

    // ✅ Fix #5: Terms check
    if (!form.value.terms_accepted) {
        alert('Please accept the terms and conditions.');
        return false;
    }

    return Object.keys(errors.value).every(key => !errors.value[key]);
}

// ✅ Fix #6: handleImage function jo pehle missing thi
function handleImage(event) {
    form.value.photo = event.target.files[0];
}

function submitForm() {
    if (!validateForm()) return;

    formLoading.value = true;

    const formData = new FormData();

    formData.append('first_name',           form.value.first_name);
    formData.append('last_name',            form.value.last_name);
    formData.append('date_of_birth',        form.value.date_of_birth);
    formData.append('gender',               form.value.gender);
    formData.append('contact_number',       form.value.contact_number);
    formData.append('emergency_contact',    form.value.emergency_contact_number);
    formData.append('national_id_no',       form.value.national_id_no);
    formData.append('email',                form.value.email);
    formData.append('address',              form.value.address);
    formData.append('religion',             form.value.religion);
    formData.append('guardian_name',        form.value.guardian_name);
    formData.append('guardian_relation',    form.value.guardian_relation);  // ✅ Fix #1
    formData.append('guardian_email',       form.value.guardian_email);
    formData.append('guardian_phone',       form.value.guardian_phone);
    formData.append('guardian_address',     form.value.guardian_address);   // ✅ Fix #2
    formData.append('joined_for',           form.value.joined_for);         // ✅ Fix #3
    formData.append('goals',               JSON.stringify(form.value.goals));
    formData.append('other_goals',          form.value.other_goals);
    formData.append('group',               form.value.group);
    formData.append('previous_school',      form.value.previous_school);
    formData.append('previous_class',       form.value.previous_class);
    formData.append('class_applying_for',   form.value.class_applying_for);
    formData.append('class',               form.value.class);
    formData.append('section',             form.value.section);
    formData.append('admission_date',       form.value.admission_date);
    formData.append('academicyear',         form.value.academicyear);
    formData.append('category',             form.value.category);           // ✅ Fix #4
    formData.append('roll',                form.value.roll);

    if (form.value.photo) {
        formData.append('photo', form.value.photo);
    }

    axios.post('https://gsischools.com/portal/api/student-register', formData, {
        headers: {
            'Accept': 'application/json',
        }
    }).then(function (response) {
        formLoading.value = false;
        if (response.data.status) {
            alert('Registration Successful! ✅');
            window.location.href = '/';
        }
    }).catch(function (error) {
        formLoading.value = false;
        if (error.response && error.response.data && error.response.data.errors) {
            const serverErrors = error.response.data.errors;
            for (const field in serverErrors) {
                errors.value[field] = serverErrors[field][0];
            }
        } else {
            alert('Something went wrong! ❌');
        }
    });
}

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
