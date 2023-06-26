import axiosClient from '@/lib/axios'
import { useStorage } from '@vueuse/core'
import { defineStore } from 'pinia'
import { reactive, ref } from 'vue'

const csrf = () => axiosClient.get('/sanctum/csrf-cookie')

export const useFaculties = defineStore('faculty', {
    state: () => ({
        allFaculty: [],
        showFaculty: [],
        updateFaculty: null,
    }),

    getters: {
        getAllFaculty(state) {
            return state.allFaculty
        },
        getShowFaculty(state) {
            return state.showFaculty
        },
    },

    actions: {
        fetchAllFaculty() {
            axiosClient
                .get('//127.0.0.1:8000/api/faculties')
                .then(response => {
                    console.log(response.data)
                    this.allFaculty = response.data.data
                })
                .catch(error => {
                    this.allFaculty = error
                })
        },

        createFaculty(name) {
            axiosClient
                .post('//127.0.0.1:8000/api/faculties/', {
                    name: name,
                })
                .then(response => {
                    console.log(response.status)
                    window.location.href = '/faculty'
                    this.createFaculty = response.status
                })
                .catch(error => {
                    console.log(error.response)
                    this.createFaculty = error.response.status
                })
        },

        updateFaculty(facultyId, name) {
            axiosClient
                .patch('//127.0.0.1:8000/api/faculties/' + facultyId, {
                    name: name,
                })
                .then(response => {
                    console.log(response.status)
                    window.location.href = '/faculty'
                    this.createFaculty = response.status
                })
                .catch(error => {
                    console.log(error.response)
                    this.createFaculty = error.response.status
                })
        },

        destroyFaculty(id) {
            let del = window.confirm('Are you sure?')
            // console.log(faculty.id);
            if (del) {
                axiosClient
                    .delete(`/api/faculties/${id}`)
                    .then(response => {
                        console.log('Faculty deleted successfully.')
                        this.fetchAllFaculty() // Update the faculty list after deletion
                    })
                    .catch(error => {
                        console.error(error)
                    })
            }
        },
    },
})
