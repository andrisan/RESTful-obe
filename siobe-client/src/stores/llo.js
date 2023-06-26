import axiosClient from '@/lib/axios'
import { useStorage } from '@vueuse/core'
import { defineStore } from 'pinia'
import { reactive, ref } from 'vue'

const csrf = () => axiosClient.get('//127.0.0.1:8000/api/csrf-cookie')

export const useLlo = defineStore('llo', {
    state: () => ({
        allLlo: [],
        showLlo: [],
        updateLlo: null,
    }),

    getters: {
        getAllLlo(state) {
            return state.allLlo
        },
    },

    actions: {
        fetchAllLlo() {
            axiosClient
                .get('//127.0.0.1:8000/api/llo')
                .then(response => {
                    // console.log(response.data)
                    this.allLlo = response.data.data
                })
                .catch(error => {
                    this.allLlo = error
                })
        },

        createLlo(description, code, selectedCloIdRef) {
            axiosClient
                .post('//127.0.0.1:8000/api/llo', {
                    code: code,
                    description: description,
                    clo_id: selectedCloIdRef
                 })
                .then(() => {
                })
                .then(response => {
                    console.log(response.status)
                    this.createLlo = response.status
                })
                .catch(error => {
                    console.log(error.response)
                    this.createLlo = error.response.status
                })
        },
        
        updateFaculty(lloId, name) {
            axiosClient
                .put('//127.0.0.1:8000/api/faculties/' + lloId, {
                    name: name,
                })
                .then(response => {
                    console.log(response.status)
                    this.createFaculty = response.status
                })
                .catch(error => {
                    console.log(error.response)
                    this.createFaculty = error.response.status
                })
        },
    },
})
