import axios from '@/lib/axios'
import { useStorage } from '@vueuse/core'
import { defineStore, acceptHMRUpdate } from 'pinia'

const csrf = () => axios.get('/sanctum/csrf-cookie')

export const useFaculties = defineStore('faculties', {
    state: () => ({
        faculties: useStorage('faculties', []),
        selectedFaculty: useStorage('selectedFaculty', null),
      }),
    
    getters: {
        getFaculties: state => state.faculties,
        
        // hasFaculties: state => state.faculties.length > 0,
        // hasSelectedFaculty: state => state.selectedFaculty !== null,
    },

    actions: {
        async fetchFaculties() {
        try {
            const response = await axios.get('/api/faculties')
            this.faculties = response.data
        } catch (error) {
            console.error(error)
        }
        },

        async addFaculty(faculty) {
        try {
            const response = await axios.post('/api/faculties', faculty)
            this.faculties.push(response.data)
        } catch (error) {
            console.error(error)
        }
        },

        async updateFaculty(faculty) {
        try {
            await axios.put(`/api/faculties/${faculty.id}`, faculty)
            const index = this.faculties.findIndex(item => item.id === faculty.id)
            if (index !== -1) {
            this.faculties.splice(index, 1, faculty)
            }
        } catch (error) {
            console.error(error)
        }
        },

        async deleteFaculty(facultyId) {
        try {
            await axios.delete(`/api/faculties/${facultyId}`)
            const index = this.faculties.findIndex(item => item.id === facultyId)
            if (index !== -1) {
            this.faculties.splice(index, 1)
            }
        } catch (error) {
            console.error(error)
        }
        },
    },
});