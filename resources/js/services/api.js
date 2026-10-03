import axios from 'axios';

// 1. Membuat konfigurasi dasar (Base Config)
const api = axios.create({
    baseURL: import.meta.env.VITE_API_URL || 'http://maju-jaya-app.test/',
    headers: {
        'Accept': 'application/json',
        'Content-Type': 'application/json'
    }
});

// 2. Menambahkan "Pengecek Otomatis" (Interceptor)
api.interceptors.request.use(
    (config) => {
        const token = localStorage.getItem('auth_token');
        if (token) {
            config.headers.Authorization = `Bearer ${token}`;
        }
        return config;
    },
    (error) => {
        return Promise.reject(error);
    }
);

// 3. Export agar bisa dipakai di file lain
export default api;