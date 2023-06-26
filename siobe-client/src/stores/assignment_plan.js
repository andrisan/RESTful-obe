import axiosClient from '@/lib/axios'
import { useStorage } from '@vueuse/core'
import { defineStore } from 'pinia'
import { reactive, ref } from 'vue'

const csrf = () => axiosClient.get('/sanctum/csrf-cookie')

export const useAssignmentPlans = defineStore('assignment_plan', {
    state: () => ({
        allAssignmentPlan: [],
        showAssignmentPlan: [],
        updateAssignmentPlan: null,
    }),

    getters: {
        getAllAssignmentPlan(state) {
            return state.allAssignmentPlan
        },
        getShowAssignmentPlan(state) {
            return state.showAssignmentPlan
        },
    },

    actions: {
        fetchAllAssignmentPlan() {
            axiosClient
                .get('//127.0.0.1:8000/api/assignment_plans')
                .then(response => {
                    console.log(response.data)
                    this.allAssignmentPlan = response.data.data
                })
                .catch(error => {
                    this.allAssignmentPlan = error
                })
        },

        createAssignmentPlan(name) {
            axiosClient
                .post('//127.0.0.1:8000/api/assignment_plans/', {
                    name: name,
                })
                .then(response => {
                    console.log(response.status)
                    window.location.href = '/assignment_plans'
                    this.createAssignmentPlan = response.status

                })
                .catch(error => {
                    console.log(error.response)
                    this.createAssignmentPlan = error.response.status
                })
        },

        fetchAssignmentPlanWithId(id) {
            axios
                .get('//127.0.0.1:8000/api/assignment_plans/' + id)
                .then(response => {
                    console.log(response.data)
                    this.showAssignmentPlan = response.data.data
                })
                .catch(error => {
                    this.showAssignmentPlan = error
                })
        },

        updateAssignmentPlan(assignmentPlanId, name) {
            axiosClient.patch('//127.0.0.1:8000/api/assignment_plans/' + assignmentPlanId, {
                    name: name,
                })
                .then(response => {
                    console.log(response.status)
                    window.location.href = '/assignment'
                    this.createAssignmentPlan = response.status
                })
                .catch(error => {
                    console.log(error.response)
                    this.createAssignmentPlan = error.response.status
                })
        },

        destroyAssignment(id) {
            let del = window.confirm('Are you sure?')
            // console.log(assignment.id);
            if (del) {
                axiosClient
                    .delete(`/api/assigment_plans/${id}`)
                    .then(response => {
                        console.log('Assignment Plan deleted successfully.')
                        this.fetchAllAssignment() // Update the assignment plan list after deletion
                    })
                    .catch(error => {
                        console.error(error)
                    })
            }
        },
    },
})