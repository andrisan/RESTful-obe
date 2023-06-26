import Vue from 'vue';
import VueRouter from 'vue-router';
import Syllabi from '@/pages/syllabi/Syllabi.vue'
import ShowSyllabi from '@/pages/syllabi/Show.vue'
import CreateSyllabi from '@/pages/syllabi/Create.vue'
import CLO from '@/pages/syllabi/CLO.vue'
import ILO from '@/pages/syllabi/ILO.vue'
import Edit from '@/pages/syllabi/Edit.vue'

Vue.use(VueRouter);

const routes = [
    {
        path: '/syllabi',
        name: 'syllabi',
        component: Syllabi,
        meta: {
            title: 'Syllabi',
        },
    },
    {
        path: '/syllabi/create',
        name: 'CreateSyllabi',
        component: CreateSyllabi,
        meta: {
            title: 'Syllabi',
            guard: 'auth',
        },
    },
    {
        path: '/syllabi/create/:id/CLO',
        name: 'CLO',
        component: CLO,
        props: true,
        meta: {
            title: 'CLO',
            guard: 'auth',
        },
    },
    {
        path: '/syllabi/create/:id/ILO',
        name: 'ILO',
        component: ILO,
        props: true,
        meta: {
            title: 'ILO',
            guard: 'auth',
        },
    },
    {
        path: '/syllabi/edit/:id',
        name: 'Edit',
        component: Edit,
        props: true,
        meta: {
            title: 'Syllabi',
            guard: 'auth',
        },
    },
    {
        path: '/syllabi/show/:id',
        name: 'showsyllabi',
        component: ShowSyllabi,
        props: true,
        meta: {
            title: 'Syllabi',
            guard: 'auth',
        },
    },
]

const router = createRouter({
    history: createWebHistory(),
    routes,
})

export default router