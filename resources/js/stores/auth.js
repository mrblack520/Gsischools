import { defineStore } from 'pinia';
import axios from 'axios';

export const useAuthStore = defineStore('auth', {
    state: () => ({
        user: null,
        loading: 'true',
        token: localStorage.getItem('token') || null,
        errors: null,
    }),

    actions: {
        login(payload) {
            console.log(payload)
            this.user = payload.user;
            this.token = payload.token ?? null;
            this.errors = null;

            // Optionally store token if using token-based auth
            if (this.token) {
                axios.defaults.headers.common['Authorization'] = `Bearer ${this.token}`;
            }
        },

        async getUser() {
            const token = localStorage.getItem('token');
            if (!token) {
                this.loading = false;
                return;
            }

            axios.defaults.headers.common['Authorization'] = `Bearer ${token}`;

            try {
                const response = await axios.get('/api/user'); // Laravel route that returns authenticated user
                console.log(response)
                this.user = response.data;
                this.loading = false;
            } catch (error) {
                this.user = null;
                localStorage.removeItem('token');
                this.loading = false;
            }
        },

        logout() {
            this.user = null;
            this.token = null;
            delete axios.defaults.headers.common['Authorization'];
            localStorage.removeItem('token');
        }
    }
});
