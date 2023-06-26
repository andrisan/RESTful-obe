import { createWebHistory, createRouter } from 'vue-router'
import { useUsers } from '@/stores/user'
import Welcome from '@/pages/Welcome.vue'
import PageNotFound from '@/pages/errors/404.vue'
import Dashboard from '@/pages/Dashboard.vue'
import Faculties from '@/pages/department/Faculties.vue'
import Department from '@/pages/department/FacultiesDepartment.vue'
import CreateDepartment from '@/pages/department/FacultiesCreateDepartment.vue'
import EditDepartment from '@/pages/department/FacultiesEditDepartment.vue'
import Syllabi from '@/pages/learningplan/Syllabi.vue'
import SyllabiDetail from '@/pages/learningplan/SyllabiDetail.vue'
import CreateLearningPlan from '@/pages/learningplan/SyllabiCreateLearningPlan.vue'
import EditLearningPlan from '@/pages/learningplan/SyllabiEditLearningPlan.vue'
import StudyProgram from '@/pages/StudyProgram.vue'
import Course from '@/pages/Course.vue'
import CourseClass from '@/pages/CourseClass.vue'
import Login from '@/pages/auth/Login.vue'
import Register from '@/pages/auth/Register.vue'
import ForgotPassword from '@/pages/auth/ForgotPassword.vue'
import ResetPassword from '@/pages/auth/ResetPassword.vue'
import VerifyEmail from '@/pages/auth/VerifyEmail.vue'

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
            guard: 'guest',
            // necessarily : auth
        },
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
        path: '/faculties',
        name: 'faculties',
        component: Faculties,
        meta: {
            title: 'Faculties',
            guard: 'guest',
            // necessarily : auth
        },
    },
    {
        path: '/faculties/1/departments',
        name: 'department',
        component: Department,
        meta: {
            title: 'Faculties',
            guard: 'guest',
            // necessarily : auth
        },
    },
    {
        path: '/faculties/1/departments/create',
        name: 'create department',
        component: CreateDepartment,
        meta: {
            title: 'Faculties',
            guard: 'guest',
            // necessarily : auth
        },
    },
    {
        path: '/faculties/1/departments/1/edit',
        name: 'edit department',
        component: EditDepartment,
        meta: {
            title: 'Faculties',
            guard: 'guest',
            // necessarily : auth
        },
    },
    {
        path: '/syllabi',
        name: 'syllabi',
        component: Syllabi,
        meta: {
            title: 'Syllabi',
            guard: 'guest',
            // necessarily : auth
        },
    },
    {
        path: '/syllabi/1',
        name: 'detail syllabi',
        component: SyllabiDetail,
        meta: {
            title: 'Syllabi',
            guard: 'guest',
            // necessarily : auth
        },
    },
    {
        path: '/syllabi/1/learning-plans/create',
        name: 'create learning plan',
        component: CreateLearningPlan,
        meta: {
            title: 'Syllabi',
            guard: 'guest',
            // necessarily : auth
        },
    },
    {
        path: '/syllabi/1/learning-plans/1/edit',
        name: 'edit learning plan',
        component: EditLearningPlan,
        meta: {
            title: 'Syllabi',
            guard: 'guest',
            // necessarily : auth
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
        path: '/:pathMatch(.)',
        redirect: '/page-not-found',
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