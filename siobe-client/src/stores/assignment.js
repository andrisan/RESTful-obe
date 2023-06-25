import axiosClient from '@/lib/axios'
import { useStorage } from '@vueuse/core'
import { defineStore } from 'pinia'
import { reactive, ref } from 'vue'

const csrf = () => axiosClient.get('/sanctum/csrf-cookie')

export const useAssignments = defineStore('assignment', {
    state: () => ({
        allAssignment: [],
        showAssignment: [],
        updateAssignment: null,
    }),

    getters: {
        getAllAssignment(state) {
            return state.allAssignment
        },
        getShowAssignment(state) {
            return state.showAssignment
        },
    },

    actions: {
        fetchAllAssignment() {
            axiosClient
                .get('//127.0.0.1:8000/api/assignments')
                .then(response => {
                    // console.log(response.data)
                    this.allAssignment = response.data.data
                })
                .catch(error => {
                    this.allAssignment = error
                })
        },

        createAssignment(name) {
            axiosClient
                .post('//127.0.0.1:8000/api/assignments/', {
                    name: name,
                })
                .then(response => {
                    console.log(response.status)
                    window.location.href = '/assignment'
                    this.createAssignment = response.status

                })
                .catch(error => {
                    console.log(error.response)
                    this.createAssignment = error.response.status
                })
        },

        fetchAssignmentWithId(id) {
            axios
                .get('//127.0.0.1:8000/api/assignments/' + id)
                .then(response => {
                    console.log(response.data)
                    this.showAssignment = response.data.data
                })
                .catch(error => {
                    this.showAssignment = error
                })
        },

        updateAssignment(assignmentId, name) {
            axiosClient
                .put('//127.0.0.1:8000/api/assignments/' + assignmentId, {
                    name: name,
                })
                .then(response => {
                    console.log(response.status)
                    this.createAssignment = response.status
                })
                .catch(error => {
                    console.log(error.response)
                    this.createAssignment = error.response.status
                })
        },
    },
})