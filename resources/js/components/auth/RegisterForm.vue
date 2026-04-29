<template>
  <div class="container">
    <form class="registeration-form" @submit.prevent="submitForm">
      <div class="row">

        <!-- First Name -->
        <div class="col-md-6 col-12">
          <div class="form-wrapper">
            <label>First name*</label>
            <div class="input-wrapper">
              <input type="text" name="first_name" v-model="form.first_name" placeholder="Your first name" @input="validateField('first_name')">
            </div>
            <span class="error" v-if="errors.first_name">{{ errors.first_name }}</span>
          </div>
        </div>

        <!-- Last Name -->
        <div class="col-md-6 col-12">
          <div class="form-wrapper">
            <label>Last name*</label>
            <div class="input-wrapper">
              <input type="text" name="last_name" v-model="form.last_name" placeholder="Your Last name" @input="validateField('last_name')">
            </div>
            <span class="error" v-if="errors.last_name">{{ errors.last_name }}</span>
          </div>
        </div>

        <!-- Date of Birth -->
        <div class="col-md-12 col-12">
          <div class="form-wrapper">
            <label>Date of birth*</label>
            <div class="input-wrapper">
              <input type="date" name="date_of_birth" v-model="form.date_of_birth" @input="validateField('date_of_birth')">
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
                  <input type="radio" name="gender" v-model="form.gender" value="0">
                  <span class="radio-mark"></span> Male
                </label>
              </div>
              <div class="checkbox-con">
                <label class="custom-radio">
                  <input type="radio" name="gender" v-model="form.gender" value="1">
                  <span class="radio-mark"></span> Female
                </label>
              </div>
              <div class="checkbox-con">
                <label class="custom-radio">
                  <input type="radio" name="gender" v-model="form.gender" value="2">
                  <span class="radio-mark"></span> Other
                </label>
              </div>
            </div>
          </div>
        </div>

        <!-- Contact Number -->
        <div class="col-md-6 col-12">
          <div class="form-wrapper">
            <label>Contact Number*</label>
            <div class="input-wrapper">
              <input type="text" name="contact_number" v-model="form.contact_number" placeholder="Your Contact Number" @input="validateField('contact_number')">
            </div>
            <span class="error" v-if="errors.contact_number">{{ errors.contact_number }}</span>
          </div>
        </div>

        <!-- Emergency Contact Number -->
        <div class="col-md-6 col-12">
          <div class="form-wrapper">
            <label>Emergency Contact Number*</label>
            <div class="input-wrapper">
              <input type="text" name="emergency_contact_number" v-model="form.emergency_contact_number" placeholder="Emergency Contact Number" @input="validateField('emergency_contact_number')">
            </div>
            <span class="error" v-if="errors.emergency_contact_number">{{ errors.emergency_contact_number }}</span>
          </div>
        </div>

        <!-- National ID -->
        <div class="col-md-12 col-12">
          <div class="form-wrapper">
            <label>National Id No*</label>
            <div class="input-wrapper">
              <input type="text" name="national_id_no" v-model="form.national_id_no" placeholder="CNIC Num" @input="validateField('national_id_no')">
            </div>
            <span class="error" v-if="errors.national_id_no">{{ errors.national_id_no }}</span>
          </div>
        </div>

        <!-- Email -->
        <div class="col-md-12 col-12">
          <div class="form-wrapper">
            <label>Email Address*</label>
            <div class="input-wrapper">
              <input type="email" name="email" v-model="form.email" placeholder="Email" @input="validateField('email')">
            </div>
            <span class="error" v-if="errors.email">{{ errors.email }}</span>
          </div>
        </div>

        <!-- Home Address -->
        <div class="col-md-12 col-12">
          <div class="form-wrapper">
            <label>Home Address*</label>
            <div class="input-wrapper">
              <input type="text" name="address" v-model="form.address" placeholder="Address" @input="validateField('address')">
            </div>
            <span class="error" v-if="errors.address">{{ errors.address }}</span>
          </div>
        </div>

        <!-- Religion -->
        <div class="col-md-6 col-12">
          <div class="form-wrapper">
            <label>Religion*</label>
            <div class="input-wrapper">
              <select name="religion" v-model="form.religion" class="custom-input">
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

        <!-- Upload Image -->
        <div class="col-md-6 col-12">
          <div class="form-wrapper">
            <label>Upload Image*</label>
            <div class="input-wrapper">
              <input type="file" name="photo" class="custom-input" @change="handleImage" accept="image/*">
            </div>
          </div>
        </div>

        <!-- Guardian Name -->
        <div class="col-md-12 col-12">
          <div class="form-wrapper">
            <label>Guardian's Name*</label>
            <div class="input-wrapper">
              <input type="text" name="guardian_name" v-model="form.guardian_name" placeholder="Guardian's Name" @input="validateField('guardian_name')">
            </div>
            <span class="error" v-if="errors.guardian_name">{{ errors.guardian_name }}</span>
          </div>
        </div>

        <!-- Relation With Guardian — v-model="form.guardian_relation" -->
        <div class="col-md-12 col-12">
          <div class="form-wrapper">
            <label>Relation With Guardian*</label>
            <div class="input-wrapper checkbox-wrapper interested-in-wrapper">
              <div class="checkbox-con">
                <label class="custom-radio">
                  <input type="radio" name="guardian_relation" v-model="form.guardian_relation" value="father">
                  <span class="radio-mark"></span> Father
                </label>
              </div>
              <div class="checkbox-con">
                <label class="custom-radio">
                  <input type="radio" name="guardian_relation" v-model="form.guardian_relation" value="mother">
                  <span class="radio-mark"></span> Mother
                </label>
              </div>
              <div class="checkbox-con">
                <label class="custom-radio">
                  <input type="radio" name="guardian_relation" v-model="form.guardian_relation" value="other">
                  <span class="radio-mark"></span> Other
                </label>
              </div>
            </div>
          </div>
        </div>

        <!-- Guardian Email -->
        <div class="col-md-6 col-12">
          <div class="form-wrapper">
            <label>Guardian's Email*</label>
            <div class="input-wrapper">
              <input type="email" name="guardian_email" v-model="form.guardian_email" placeholder="Guardian's email" @input="validateField('guardian_email')">
            </div>
            <span class="error" v-if="errors.guardian_email">{{ errors.guardian_email }}</span>
          </div>
        </div>

        <!-- Guardian Phone -->
        <div class="col-md-6 col-12">
          <div class="form-wrapper">
            <label>Guardian's Phone Number*</label>
            <div class="input-wrapper">
              <input type="text" name="guardian_phone" v-model="form.guardian_phone" placeholder="Guardian's phone number" @input="validateField('guardian_phone')">
            </div>
            <span class="error" v-if="errors.guardian_phone">{{ errors.guardian_phone }}</span>
          </div>
        </div>

        <!-- Guardian Address — v-model="form.guardian_address" -->
        <div class="col-md-12 col-12">
          <div class="form-wrapper">
            <label>Guardian's Address*</label>
            <div class="input-wrapper">
              <input type="text" name="guardian_address" v-model="form.guardian_address" placeholder="Guardian's Address" @input="validateField('guardian_address')">
            </div>
            <span class="error" v-if="errors.guardian_address">{{ errors.guardian_address }}</span>
          </div>
        </div>

        <!-- Join us for — v-model="form.joined_for" -->
        <div class="col-md-12 col-12">
          <div class="form-wrapper">
            <label>Join us for*</label>
            <div class="input-wrapper checkbox-wrapper interested-in-wrapper">
              <div class="checkbox-con">
                <label class="custom-radio">
                  <input type="radio" name="joined_for" v-model="form.joined_for" value="school">
                  <span class="radio-mark"></span> School
                </label>
              </div>
              <div class="checkbox-con">
                <label class="custom-radio">
                  <input type="radio" name="joined_for" v-model="form.joined_for" value="academy">
                  <span class="radio-mark"></span> Academy
                </label>
              </div>
              <div class="checkbox-con">
                <label class="custom-radio">
                  <input type="radio" name="joined_for" v-model="form.joined_for" value="courses">
                  <span class="radio-mark"></span> Courses
                </label>
              </div>
            </div>
          </div>
        </div>

        <!-- Group -->
        <div class="col-md-6 col-12">
          <div class="form-wrapper">
            <label>GROUP*</label>
            <div class="input-wrapper">
              <select name="group" v-model="form.group" class="custom-input">
                <option value="" selected>Select Group</option>
                <option value="school">School</option>
                <option value="language">Language</option>
                <option value="coaching">Coaching</option>
                <option value="computer">Computer</option>
              </select>
            </div>
          </div>
        </div>

        <!-- If Courses — value="other" aur v-if bhi "other" check karta hai -->
        <div class="col-md-12 col-12">
          <div class="form-wrapper">
            <label>If Courses*</label>
            <div class="input-wrapper checkbox-wrapper goals-wrapper">
              <template v-for="(goal, ind) in props.goals" :key="goal.id">
                <div class="checkbox-con">
                  <label class="custom-checkbox">
                    <input type="checkbox" :value="goal.id" v-model="form.goals" @change="validateField('goals')">
                    <span class="checkmark"></span>{{ goal.name }}
                  </label>
                </div>
              </template>
              <div class="checkbox-con">
                <label class="custom-checkbox">
                  <input type="checkbox" value="other" v-model="form.goals">
                  <span class="checkmark"></span> Please specify
                </label>
              </div>
              <div class="checkbox-con w-100" v-if="form.goals.includes('other')">
                <input type="text" name="other_goals" placeholder="Write here..." v-model="form.other_goals">
              </div>
            </div>
            <span class="error" v-if="errors.goals">{{ errors.goals }}</span>
          </div>
        </div>

        <!-- Previous School -->
        <div class="col-md-12 col-12">
          <div class="form-wrapper">
            <label>Previous School*</label>
            <div class="input-wrapper">
              <input type="text" name="previous_school" v-model="form.previous_school" placeholder="Previous School" @input="validateField('previous_school')">
            </div>
            <span class="error" v-if="errors.previous_school">{{ errors.previous_school }}</span>
          </div>
        </div>

        <!-- Previous Class -->
        <div class="col-md-6 col-12">
          <div class="form-wrapper">
            <label>Previous Class*</label>
            <div class="input-wrapper">
              <input type="text" name="previous_class" v-model="form.previous_class" placeholder="Previous class" @input="validateField('previous_class')">
            </div>
            <span class="error" v-if="errors.previous_class">{{ errors.previous_class }}</span>
          </div>
        </div>

        <!-- Class Applying For -->
        <div class="col-md-6 col-12">
          <div class="form-wrapper">
            <label>Class Applying for*</label>
            <div class="input-wrapper">
              <input type="text" name="class_applying_for" v-model="form.class_applying_for" placeholder="Class Applying for" @input="validateField('class_applying_for')">
            </div>
            <span class="error" v-if="errors.class_applying_for">{{ errors.class_applying_for }}</span>
          </div>
        </div>

        <!-- Class -->
        <div class="col-md-6 col-12">
          <div class="form-wrapper">
            <label>CLASS*</label>
            <div class="input-wrapper">
              <select name="class" v-model="form.class" class="custom-input">
                <option value="" selected>Select Class</option>
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
                <option value="1st,2ndyear">1st, 2nd year</option>
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
              <select name="section" v-model="form.section" class="custom-input">
                <option value="" selected>Select Section</option>
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
            <label>ADMISSION DATE*</label>
            <div class="input-wrapper">
              <input type="date" name="admission_date" v-model="form.admission_date" @input="validateField('admission_date')">
            </div>
            <span class="error" v-if="errors.admission_date">{{ errors.admission_date }}</span>
          </div>
        </div>

        <!-- Academic Year -->
        <div class="col-md-6 col-12">
          <div class="form-wrapper">
            <label>ACADEMIC YEAR*</label>
            <div class="input-wrapper">
              <select name="academicyear" v-model="form.academicyear" class="custom-input">
                <option value="" selected>Select Academic Year</option>
                <option value="2025">2025 [Jan-Dec]</option>
                <option value="2026">2026 [Jan-Dec]</option>
              </select>
            </div>
          </div>
        </div>

        <!-- Category — v-model="form.category" -->
        <div class="col-md-6 col-12">
          <div class="form-wrapper">
            <label>CATEGORY*</label>
            <div class="input-wrapper">
              <select name="category" v-model="form.category" class="custom-input">
                <option value="" selected>Select Category</option>
                <option value="morning">Morning Shift</option>
                <option value="evening">Evening Shift</option>
                <option value="night">Night Shift</option>
              </select>
            </div>
          </div>
        </div>

        <!-- Roll -->
        <div class="col-md-12 col-12">
          <div class="form-wrapper">
            <label>ROLL*</label>
            <div class="input-wrapper">
              <input type="text" name="roll" v-model="form.roll" placeholder="Your roll" @input="validateField('roll')">
            </div>
            <span class="error" v-if="errors.roll">{{ errors.roll }}</span>
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
                  I hereby apply for registration at Guiding Star International Schools & Academy.
                  All the information provided above is true and complete to the best of my knowledge.
                </p>
              </label>
              <span class="error" v-if="errors.terms_accepted">{{ errors.terms_accepted }}</span>
              <div class="mt-4 save-or-submit">
                <button type="submit" :disabled="formLoading">
                  {{ formLoading ? 'Please wait..' : 'Complete registration' }}
                </button>
              </div>
            </div>
          </div>
        </div>

      </div>
    </form>
  </div>
</template>


<script setup>
import { ref } from 'vue';
import axios from 'axios';

const props = defineProps(['goals']);

const formLoading = ref(false);

// ✅ Har woh field jo HTML mein v-model se bind hai — sab yahan defined hain
const form = ref({
  first_name:               '',
  last_name:                '',
  date_of_birth:            '',
  gender:                   '0',
  contact_number:           '',
  emergency_contact_number: '',
  national_id_no:           '',
  email:                    '',
  address:                  '',
  religion:                 '',
  photo:                    null,
  guardian_name:            '',
  guardian_relation:        'father',
  guardian_email:           '',
  guardian_phone:           '',
  guardian_address:         '',
  joined_for:               'school',
  goals:                    [],
  other_goals:              '',
  group:                    '',
  previous_school:          '',
  previous_class:           '',
  class_applying_for:       '',
  class:                    '',
  section:                  '',
  admission_date:           '',
  academicyear:             '',
  category:                 '',
  roll:                     '',
  terms_accepted:           false,
});

const errors = ref({});

function validateField(field) {
  errors.value[field] = '';

  switch (field) {
    case 'first_name':
      if (!form.value.first_name.trim())
        errors.value.first_name = '* First name is required';
      break;
    case 'last_name':
      if (!form.value.last_name.trim())
        errors.value.last_name = '* Last name is required';
      break;
    case 'email':
      if (!form.value.email.trim())
        errors.value.email = '* Email is required';
      break;
    case 'date_of_birth':
      if (!form.value.date_of_birth)
        errors.value.date_of_birth = '* Date of birth is required';
      break;
    case 'contact_number':
      if (!form.value.contact_number.trim())
        errors.value.contact_number = '* Contact number is required';
      break;
    case 'emergency_contact_number':
      if (!form.value.emergency_contact_number.trim())
        errors.value.emergency_contact_number = '* Emergency contact is required';
      break;
    case 'national_id_no':
      if (!form.value.national_id_no.trim())
        errors.value.national_id_no = '* National ID is required';
      break;
    case 'address':
      if (!form.value.address.trim())
        errors.value.address = '* Address is required';
      break;
    case 'guardian_name':
      if (!form.value.guardian_name.trim())
        errors.value.guardian_name = '* Guardian name is required';
      break;
    case 'guardian_email':
      if (!form.value.guardian_email.trim())
        errors.value.guardian_email = '* Guardian email is required';
      break;
    case 'guardian_phone':
      if (!form.value.guardian_phone.trim())
        errors.value.guardian_phone = '* Guardian phone is required';
      break;
    case 'guardian_address':
      if (!form.value.guardian_address.trim())
        errors.value.guardian_address = '* Guardian address is required';
      break;
    case 'previous_school':
      if (!form.value.previous_school.trim())
        errors.value.previous_school = '* Previous school is required';
      break;
    case 'previous_class':
      if (!form.value.previous_class.trim())
        errors.value.previous_class = '* Previous class is required';
      break;
    case 'class_applying_for':
      if (!form.value.class_applying_for.trim())
        errors.value.class_applying_for = '* Class applying for is required';
      break;
    case 'admission_date':
      if (!form.value.admission_date)
        errors.value.admission_date = '* Admission date is required';
      break;
    case 'roll':
      if (!form.value.roll.trim())
        errors.value.roll = '* Roll is required';
      break;
    case 'goals':
      if (!form.value.goals.length)
        errors.value.goals = '* Please select at least one course';
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
  validateField('previous_class');
  validateField('class_applying_for');
  validateField('admission_date');
  validateField('roll');

  if (!form.value.terms_accepted) {
    errors.value.terms_accepted = '* Please accept the terms and conditions';
    return false;
  } else {
    errors.value.terms_accepted = '';
  }

  // ✅ Koi bhi error non-empty hai to false — yahi asli fix hai
  return !Object.values(errors.value).some(msg => msg !== '');
}

function handleImage(event) {
  form.value.photo = event.target.files[0] || null;
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
  formData.append('email',               form.value.email);
  formData.append('address',             form.value.address);
  formData.append('religion',            form.value.religion);
  formData.append('guardian_name',        form.value.guardian_name);
  formData.append('guardian_relation',    form.value.guardian_relation);
  formData.append('guardian_email',       form.value.guardian_email);
  formData.append('guardian_phone',       form.value.guardian_phone);
  formData.append('guardian_address',     form.value.guardian_address);
  formData.append('joined_for',           form.value.joined_for);
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
  formData.append('category',             form.value.category);
  formData.append('roll',                form.value.roll);

  if (form.value.photo) {
    formData.append('photo', form.value.photo);
  }

  axios.post('https://gsischools.com/portal/api/student-register', formData, {
    headers: { 'Accept': 'application/json' }
  })
  .then(function (response) {
    formLoading.value = false;
    if (response.data.status) {
      alert('Registration Successful! ✅');
      window.location.href = '/';
    } else {
      alert('Server ne registration reject kar diya. Dobara try karein.');
    }
  })
  .catch(function (error) {
    formLoading.value = false;
    if (error.response && error.response.data && error.response.data.errors) {
      const serverErrors = error.response.data.errors;
      for (const field in serverErrors) {
        errors.value[field] = serverErrors[field][0];
      }
    } else if (error.response) {
      alert('Server Error: ' + error.response.status);
    } else {
      alert('Network error! Internet connection check karein. ❌');
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

[type="submit"]:disabled {
  opacity: 0.6;
  cursor: not-allowed;
}

.error {
  color: red;
  font-size: 0.9em;
  padding-top: 6px;
  display: block;
}
</style>
