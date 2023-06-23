import axios from '@/lib/axios'
import { defineStore } from 'pinia'

export const useCriterias = defineStore('criterias', {
    state: () => ({
        allCriteria: [],
        createCriteria: [],
    }),

    getters: {
        getAllCriteria(state) {
            return state.allCriteria
        },
        getCreateCriteria(state) {
            return state.createCriteria
        }
    },

    actions: {
        fetchAllCriteria(rubricId) {
            axios
                .get('//localhost:8000/api/rubrics/' + rubricId + 'criterias')
                .then(response => {
                    console.log(response.data)
                    this.allCriteria = response.data.data.criterias
                })
        },
        createCriteria(rubricId, title, description) {
            axios
                .post(
                    '//localhost:8000/api/rubrics/' + rubricId + '/criterias',
                    {
                        llo_id: 1,
                        title: title,
                        description: description,
                    },
                )
                .then(response => {
                    console.log(response.status)
                    this.createCriteria = response.status
                })
                .catch(error => {
                    console.log(error.response)
                    this.createCriteria = error.response.status
                })
        },
    },
})
