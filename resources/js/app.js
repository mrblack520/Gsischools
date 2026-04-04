import './bootstrap';
import 'choices.js/public/assets/styles/choices.min.css';
import 'aos/dist/aos.css';
import 'swiper/css';

import { createPinia } from 'pinia';

import { createApp } from 'vue';
import HowWeWork from './components/HowWeWork.vue'
import SectionFaq from './components/SectionFaq.vue'
import ExploreLearnConnect from './components/ExploreLearnConnect.vue'
import NextGenFilterSec from './components/NextGenFilterSec.vue'
import UniversityFilterSec from './components/UniversityFilterSec.vue'
import ProfessionFilterSec from './components/ProfessionFilterSec.vue'
import AficionadoFilterSec from './components/AficionadoFilterSec.vue'
import RegisterForm from './components/auth/RegisterForm.vue';
import UniversityForm from './components/UniversityForm.vue';

import SideNav from './components/SideNav.vue'
import HomeFaqs from './components/HomeFaqs.vue'
import Alpine from 'alpinejs';
import Aos from 'aos';
import UserInfo from './components/auth/UserInfo.vue';
import LoginForm from './components/auth/LoginForm.vue';
import ForgotPasswordForm from './components/auth/ForgotPasswordForm.vue';
import ResetPasswordForm from './components/auth/ResetPasswordForm.vue';

window.Alpine = Alpine;
const app = createApp({});
const pinia = createPinia();
app.use(pinia);

// app.component('how-we-work', HowWeWork);
// app.component('home-faqs', HomeFaqs);
// app.component('section-faq', SectionFaq);
// app.component('explore-learn-connect', ExploreLearnConnect)
// app.component('next-gen-filter-sec', NextGenFilterSec)
// app.component('university-filter-sec', UniversityFilterSec)
// app.component('profession-filter-sec', ProfessionFilterSec)
// app.component('aficionado-filter-sec', AficionadoFilterSec)
// app.component('user-info', UserInfo)
// app.component('register-form', RegisterForm)
// app.component('university-form', UniversityForm)
// app.component('side-nav', SideNav)
// app.component('login-form', LoginForm)
// app.component('forgot-password-form', ForgotPasswordForm)
// app.component('reset-password-form', ResetPasswordForm)

app.mount('#app');
Aos.init();

Alpine.start();
