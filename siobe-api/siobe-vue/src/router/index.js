//import vue router
import { createRouter, createWebHistory } from 'vue-router'
import DashboardView from '../views/DashboardView.vue'
import StudentGradeView from '../views/StudentGradeView.vue'
import DepartmentView from '../views/DepartmentView.vue'

//define a routes
const routes = [
    {
        path: '/',
        name: 'dashboard',
        component: DashboardView
    },
    {
        path: '/StudentGrade',
        name: 'studentgrade',
        component: StudentGradeView
    },
    {
        path: '/Department',
        name: 'department',
        component: DepartmentView
    }
]

//create router
const router = createRouter({
    history: createWebHistory(),
    routes  // config routes
})

export default router