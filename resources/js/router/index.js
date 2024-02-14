import { createRouter, createWebHistory } from 'vue-router'

import AdminPage from '@/pages/admin/index.vue'

const routes = [
    {
        path: '/admin',
        name: 'admin.index',
        component: AdminPage
    }
];

export default createRouter({
    history: createWebHistory(),
    routes
})
