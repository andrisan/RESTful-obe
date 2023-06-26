import { createWebHistory, createRouter } from 'vue-router'
import { useUsers } from '@/stores/user'
import Welcome from '@/pages/Welcome.vue'
import PageNotFound from '@/pages/errors/404.vue'
import Dashboard from '@/pages/Dashboard.vue'
import StudyProgram from '@/pages/StudyProgram.vue'
import Course from '@/pages/Course.vue'
import CourseClass from '@/pages/CourseClass.vue'
import Login from '@/pages/auth/Login.vue'
import Register from '@/pages/auth/Register.vue'
import ForgotPassword from '@/pages/auth/ForgotPassword.vue'
import ResetPassword from '@/pages/auth/ResetPassword.vue'
import VerifyEmail from '@/pages/auth/VerifyEmail.vue'
import Syllabi from '@/pages/syllabi/Syllabi.vue'
import ShowSyllabi from '@/pages/syllabi/Show.vue'
import CreateSyllabi from '@/pages/syllabi/Create.vue'
import CLO from '@/pages/syllabi/CLO.vue'
import ILO from '@/pages/syllabi/ILO.vue'
import Edit from '@/pages/syllabi/Edit.vue'

import Rubrics from '@/pages/Rubrics.vue'
import Showrubrics from '@/pages/ShowRubrics.vue'
import Createcriterialevel from '@/pages/CreateCriteriaLevel.vue'
import EditRubrics from '@/pages/EditRubrics.vue'
import CreateCriteria from '@/pages/CreateCriteria.vue'
import EditCriteria from '@/pages/EditCriteria.vue'
import EditCriteriaLevel from '@/pages/EditCriteriaLevel.vue'
import CreateRubrics from '@/pages/CreateRubrics.vue'

const APP_NAME = import.meta.env.VITE_APP_NAME

const routes = [
    {
        path: '/',
        name: 'welcome',
        component: Welcome,
        meta: {
            title: 'Welcome',
            metaTags: [
                {
                    name: 'Welcome',
                    content:
                        'An application / authentication starter kit frontend in Vue.js 3 for Laravel Breeze.',
                },
                {
                    property: 'og:Welcome',
                    content:
                        'An application / authentication starter kit frontend in Vue.js 3 for Laravel Breeze.',
                },
            ],
        },
    },
   
    {
        path: '/home',
        redirect: '/dashboard',
        component: Dashboard,
        query: {
            verified: 'verified',
        },
        meta: {
            guard: 'auth',
        },
    },
    {
        path: '/dashboard',
        name: 'dashboard',
        component: Dashboard,
        meta: {
            title: 'Dashboard',
            guard: 'auth',
        },
    },
    
    {
        path: '/studyprograms/create',
        name: 'studyprograms.create',
        component: () => import( /* webpackChunkName: "studyprograms.create" */ '@/pages/StudyProgram/StudyProgramCreate.vue')
    },
    {
        path: '/studyprograms',
        name: 'studyprograms',
        component: StudyProgram,
        meta: {
            title: 'StudyProgram',
            guard: 'auth',
        },
    },
    {
        path: '/courses',
        name: 'courses',
        component: Course,
        meta: {
            title: 'Course',
            guard: 'auth',
        },
    },
    {
        path: '/courseclasses',
        name: 'courseclasses',
        component: CourseClass,
        meta: {
            title: 'CourseClass',
            guard: 'auth',
        },
    },
    {
        path: '/login',
        name: 'login',
        component: Login,
        query: {
            reset: 'reset',
        },
        meta: {
            title: 'Log in',
            guard: 'guest',
        },
    },
    {
        path: '/register',
        name: 'register',
        component: Register,
        meta: {
            title: 'Register',
            guard: 'guest',
        },
    },
    {
        path: '/forgot-password',
        name: 'forgot-password',
        component: ForgotPassword,
        meta: {
            title: 'Forget Password',
            guard: 'guest',
        },
    },
    {
        path: '/password-reset/:token',
        name: 'password-reset',
        component: ResetPassword,
        query: {
            email: 'email',
        },
        meta: {
            title: 'Reset Password',
            guard: 'guest',
        },
    },
    {
        path: '/verify-email',
        name: 'verify-email',
        component: VerifyEmail,
        query: {
            resend: 'resend',
        },
        meta: {
            title: 'Email Verification',
            guard: 'auth',
        },
    },
    {
        path: '/page-not-found',
        name: 'page-not-found',
        component: PageNotFound,
        meta: {
            title: 'Page Not Found',
        },
    },
    {
        path: '/:pathMatch(.*)*',
        redirect: '/page-not-found',
    },
    {
        path: '/rubrics',
        name: 'rubrics',
        component: Rubrics,
    },
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
        path: '/rubrics/:id',
        name: 'showrubrics',
        component: Showrubrics,
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
        path: '/rubrics/:rubricId/criteria/:criteriaId/criteria-level/create',
        name: 'createcriterialevel',
        component: Createcriterialevel
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
        path: '/rubrics/:id/edit',
        name: 'editrubrics',
        component: EditRubrics,
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
        path: '/rubrics/:id/criteria/create',
        name: 'createCriteria',
        component: CreateCriteria,
        meta: {
            guard: 'auth',
        },
    },
    {
        path: '/rubrics/:rubricId/criterias/:criteriaId/edit',
        name: 'editCriteria',
        component: EditCriteria,
        meta: {
            guard: 'auth',
        },
    },
    {
        path: '/rubrics/:rubricId/criteria/:criteriaId/criteria-level/:criteriaLevelId/edit',
        name: 'editCriteriaLevel',
        component: EditCriteriaLevel,
        meta: {
            guard: 'auth',
        },
    },
    {
        path: '/rubrics/create',
        name: 'createRubrics',
        component: CreateRubrics,
        meta: {
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

// Navigation guard

router.beforeEach((to, from, next) => {
    const store = useUsers()

    const auth = store.authUser

    if (to.matched.some(route => route.meta.guard === 'guest') && auth)
        next({ name: 'dashboard' })
    else if (to.matched.some(route => route.meta.guard === 'auth') && !auth)
        next({ name: 'login' })
    else next()
})

// Page Title and Metadata

router.beforeEach((to, from, next) => {
    const nearestWithTitle = to.matched
        .slice()
        .reverse()
        .find(r => r.meta && r.meta.title)

    const nearestWithMeta = to.matched
        .slice()
        .reverse()
        .find(r => r.meta && r.meta.metaTags)

    if (nearestWithTitle) {
        document.title = nearestWithTitle.meta.title + ' - ' + APP_NAME
    } else {
        document.title = APP_NAME
    }

    Array.from(document.querySelectorAll('[data-vue-router-controlled]')).map(
        el => el.parentNode.removeChild(el),
    )

    if (!nearestWithMeta) return next()

    nearestWithMeta.meta.metaTags
        .map(tagDef => {
            const tag = document.createElement('meta')

            Object.keys(tagDef).forEach(key => {
                tag.setAttribute(key, tagDef[key])
            })

            tag.setAttribute('data-vue-router-controlled', '')

            return tag
        })

        .forEach(tag => document.head.appendChild(tag))

    next()
})

export default router
