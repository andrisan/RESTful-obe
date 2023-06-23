import axios from '@/lib/axios'
import { useStorage } from '@vueuse/core'
import { defineStore } from 'pinia'
import { reactive, ref } from 'vue'

export const useRubrics = defineStore('rubrics', {
    state: () => ({
        allRubric: [],
        showRubric: [],
        updateRubric: null,
    }),

    getters: {
        getAllRubric(state) {
            return state.allRubric
        },
        getShowRubric(state) {
            return state.showRubric
        },
        getUpdateRubric(state) {
            return state.updateRubric
        },
    },

    actions: {
        fetchAllRubric() {
            axios
                .get('//localhost:8000/api/rubrics')
                .then(response => {
                    console.log(response.data)
                    this.allRubric = response.data.data
                })
                .catch(error => {
                    this.allRubric = error
                })
        },
        fetchRubricWithId(id) {
            axios
                .get('//localhost:8000/api/rubrics/' + id)
                .then(response => {
                    console.log(response.data)
                    this.showRubric = response.data.data
                })
                .catch(error => {
                    this.showRubric = error
                })
        },
        updateRubric(rubricId, title) {
            axios
                .put('//localhost:8000/api/rubrics/' + rubricId, {
                    title: title,
                })
                .then(response => {
                    console.log(response.status)
                    this.updateRubric = response.status
                })
                .catch(error => {
                    console.log(error.response.status)
                    this.updateRubric = error.response.status
                })
        },
    },
})
