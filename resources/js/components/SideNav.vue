<template>

    <div v-if="auth.loading"></div>
    <div class="side-nav-con" v-else-if="auth.user && auth.user.first_name">
        <a @click="menuOpen" href="javascript:void(0);" id="open-side-menu">
            <i class="fas fa-bars"></i>
        </a>
        <div v-show="isMenuOpen" class="side-nav" id="side-nav">
            <ul class="list-inline">
                <li class="d-flex justify-content-start align-items-center text-decoration-none side-nav-profile">
                    <img src="../../../public/assets/images/ng-3.webp" alt="Profile Picture"
                        class="profile-picture position-relative" />
                    <p class="login-txt-mobile login-text-cts">{{ auth.user.first_name }} {{ auth.user.last_name }}</p>
                </li>
                <li><a :href="route('dashboard')"><i class="fas fa-sliders"></i>Dashboard</a></li>
                <li>
                    <a href="javascript:;" @click="logout">
                        <i class="fas fa-sign-out"></i>
                        Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <a v-else class="new-login-btn" rel="nofollow" :href="route('frontend.register')">Online Admission</a>

</template>

<script setup>
import { onBeforeMount, ref } from 'vue';
import { useAuthStore } from '../stores/auth';
const auth = useAuthStore();
import { route } from 'ziggy-js';

const isMenuOpen = ref(false);

const menuOpen = (e) => {
    e.stopPropagation();
    isMenuOpen.value = !isMenuOpen.value;
}

const menuClose = () => {
    isMenuOpen.value = false;
}

window.addEventListener('outsideMenuClose', () => {
    menuClose();
})

const logout = async () => {
    auth.logout();
    fetch('/logout', {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        },
        credentials: 'same-origin',
    }).then(() => {
        window.location.href = '/login'; // Redirect after logout
    });
}

onBeforeMount(() => {
    auth.getUser();
});

</script>

<style scoped>
.side-nav-con {
    display: flex;
    align-items: center;
    justify-content: end;
    padding: 0px 8px;
    position: relative;
    line-height: 0;
}

.side-nav {
    font-family: "mark_promedium", "Work Sans", sans-serif, "Liberation Mono", "Courier New", monospace;
    width: 270px;
    height: auto;
    position: absolute;
    background: #fff;
    box-shadow: 0px 0px 10px #00000042;
    z-index: 100;
    border-radius: 10px;
    right: 12px;
    top: 40px !important;
}

.side-nav ul {
    margin: 3px 0 4px;
}

.side-nav li {
    line-height: 1.8;
    padding: 0;
    border-bottom: 1px solid rgb(106 106 106 / 10%);
    margin: 0;
}

.side-nav a {
    font-size: 15px;
    font-weight: 500;
    color: #333;
    display: flex;
    justify-content: start;
    align-items: center;
    padding: 12px 20px;
    line-height: 1.3;
}

.side-nav a i {
    min-width: 30px;
    font-size: 15px;
    margin-right: 0;
    margin-left: 0;
}

.side-nav li:last-child {
    border-bottom: 0;
}

.side-nav-profile {
    padding: 9px 11px !important;
    border-bottom: 1px solid rgba(0, 0, 0, 0.253) !important;
}

.profile-picture {
    background: #c7cbd3;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    object-fit: cover;
}

.login-txt-mobile {
    margin: 0px;
    margin-left: 15px;
    font-size: 17px;
    font-weight: 700;
    color: #333;
    line-height: 1.3;
}

.login-text-cts {
    display: -webkit-box;
    -webkit-line-clamp: 1;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
}

#open-side-menu i {
    font-size: 22px;
    color: #5C5C5C;
    margin-right: 3px;
    min-width: 22px;
}
</style>
