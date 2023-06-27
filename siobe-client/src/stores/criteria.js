import axios from '@/lib/axios'
import { defineStore } from 'pinia'

export const useCriterias = defineStore('criterias', {
    state: () => ({
        allCriteria: [],
        criteriaById: [],
        createCriteriaStatus: [],
        editCriteriaStatus:[],
        deleteCriteria: null,
    }),

    getters: {
        getAllCriteria(state) {
            return state.allCriteria
        },
        getCriteriaById(state) {
            return state.criteriaById
        },
        getCreateCriteria(state) {
            return state.createCriteriaStatus
        },
        getEditCriteriaStatus(state) {
            return state.editCriteriaStatus
        },
        getDeleteCriteria(state) {
            return state.deleteCriteria
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
        fetchCriteriaById(rubricId, criteriaId) {
            axios
                .get('//localhost:8000/api/rubrics/' + rubricId + '/criterias/' + criteriaId)
                .then(response => {
                    console.log(response.data)
                    this.criteriaById = response.data.data
                })
        },
        createCriteria(rubricId, title, maxPoint, description, setErrors) {
            axios
                .post(
                    '//localhost:8000/api/rubrics/' + rubricId + '/criterias',
                    {
                        llo_id: 1,
                        title: title,
                        max_point: maxPoint,
                        description: description,
                    },
                )
                .then(response => {
                    console.log(response)
                    this.createCriteriaStatus = response
                })
                .catch(error => {
                    console.log(error.response)
                    this.createCriteriaStatus = error.response
                    setErrors.value = Object.values(
                        error.response.data.errors,
                    ).flat()
                })
        },
        editCriteria(rubricId, criteriaId, lloId, title, max_point, description, setErrors) {
            axios
                .put('//localhost:8000/api/rubrics/' + rubricId + '/criterias/' + criteriaId, {
                    llo_id: lloId,
                    title: title,
                    max_point: max_point,
                    description: description
                })
                .then(response => {
                    console.log(response)
                    this.editCriteriaStatus = response
                })
                .catch(error => {
                    console.log(error.response)
                    setErrors.value = Object.values(
                        error.response.data.errors,
                    ).flat()
                })
        },
        deleteCriteria(rubricId, criteriaId) {
            axios.delete('//localhost:8000/api/rubrics/' + rubricId + '/criterias/' + criteriaId)
            .then(response => {
                console.log(response)
                this.deleteCriteria = response.status
                location.reload()
            })
            .catch(error => {
                console.log(error.response)
                this.createCriteria = error.response.status
            })
        },
    },
})
