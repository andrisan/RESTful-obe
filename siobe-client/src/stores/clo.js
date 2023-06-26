import axiosClient from '@/lib/axios'
import { useStorage } from '@vueuse/core'
import { defineStore } from 'pinia'
import { reactive, ref } from 'vue'

const csrf = () => axiosClient.get('/sanctum/csrf-cookie')

export const useClo = defineStore('clo', {
    state: () => ({
        allClo: [],
        showClo: [],
        updateClo: null,
    }),

    getters: {
        getAllClo(state) {
            return state.allClo
        },
    },

    actions: {
        fetchAllClo() {
            axiosClient
                .get('//localhost:8000/api/clo')
                .then(response => {
                    // console.log(response.data)
                    this.allClo = response.data.data
                })
                .catch(error => {
                    this.allClo = error
                })
        },
    },
})
