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
                    console.log(response.data)
                    this.allLlo = response.data.data
                })
                .catch(error => {
                    this.allLlo = error
                })
        },

        createLlo(selectedCloId, code, description) {
            axiosClient
                .post('//127.0.0.1:8000/api/llo', {
                    clo_id: selectedCloId,
                    code: code,
                    description: description
                    
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
        
        updateLlo(lloId, description) {
            axiosClient
                .patch('//127.0.0.1:8000/api/llo/' + lloId, {
                    description: description,
                })
                .then(response => {
                    console.log(response.status)
                    window.location.href = '/llo'
                    this.createLlo = response.status
                })
                .catch(error => {
                    console.log(error.response)
                    this.createLlo = error.response.status
                })
        },

        destroyLlo(id) {
            let del = window.confirm('Are you sure?')
            if (del) {
                axiosClient
                    .delete(`//127.0.0.1:8000/api/llo/${id}`)
                    .then(response => {
                        console.log('Llo deleted successfully.')
                        this.fetchAllLlo()
                    })
                    .catch(error => {
                        console.error(error)
                    })
            }
        },
    },
})
