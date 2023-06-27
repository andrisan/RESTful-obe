import axios from '@/lib/axios'
import { defineStore } from 'pinia'

export const useLlo = defineStore('llos', {
    state: () => ({
        llo: [],
    }),

    getters: {
        getLlo(state) {
            return state.llo
        }
    },

    actions: {
        fetchLloById(lloId) {
            axios
            .get('/api/lesson-learning-outcomes/' + lloId)
            .then(response=> {
                console.log(response.data)
                this.llo = response.data.data
            })
        }
    }
})