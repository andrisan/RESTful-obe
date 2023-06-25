import axiosClient from '@/lib/axios'
import { useStorage } from '@vueuse/core'
import { defineStore } from 'pinia'
import { reactive, ref } from 'vue'

const csrf = () => axiosClient.get('/sanctum/csrf-cookie')

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
                .get('//localhost:8000/api/llo')
                .then(response => {
                    // console.log(response.data)
                    this.allLlo = response.data.data
                })
                .catch(error => {
                    this.allLlo = error
                })
        },

        createLlo(name) {
            axiosClient
                .post('//localhost:8000/api/llo/', {
                    name: name,
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
    },
})
