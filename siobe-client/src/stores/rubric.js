import axios from '@/lib/axios'
import { useStorage } from '@vueuse/core'
import { defineStore } from 'pinia'
import { reactive, ref } from 'vue'

export const useRubrics = defineStore('rubrics', {
    state: () => ({
        allRubric: [],
        showRubric: [],
        createRubricStatus: [],
        updateRubric: null,
        deleteRubric: []
    }),

    getters: {
        getAllRubric(state) {
            return state.allRubric
        },
        getShowRubric(state) {
            return state.showRubric
        },
        getCreateRubricStatus(state) {
            return state.createRubricStatus
        },
        getUpdateRubric(state) {
            return state.updateRubric
        },
        getDeleteRubric(state) {
            return state.deleteRubric
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
        createRubric(title, setErrors) {
            axios
                .post('//localhost:8000/api/rubrics', {
                    title: title
                })
                .then(response => {
                    console.log(response)
                    this.createRubricStatus = response
                })
                .catch(error => {
                    console.log(error.response)
                    setErrors.value = Object.values(
                        error.response.data.errors,
                    ).flat()
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
        deleteRubric(rubricId) {
            axios.delete('//localhost:8000/api/rubrics/' + rubricId )
            .then(response => {
                console.log(response)
                this.deleteRubric = response.status
                location.reload()
            })
            .catch(error => {
                console.log(error.response)
                this.deleteRubric = error.response.status
            })
        }
    },
})
