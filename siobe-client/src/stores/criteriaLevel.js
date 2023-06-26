import axios from '@/lib/axios'
import { defineStore } from 'pinia'

export const useCriteriaLevels = defineStore('criteriaLevels',{
    state: () => ({
        criteriaLevelById: [],
        createCriteriaLevelStatus: [],
        editCriteriaLevelStatus: [],
        deleteCriteriaStatus: [],
    }),
    
    getters: {
        getCriteriaLevelById(state) {
            return state.criteriaLevelById
        },
        getCreateCriteriaLevelStatus(state) {
            return state.createCriteriaLevelStatus
        },
        getEditCriteriaLevel(state) {
            return state.editCriteriaLevelStatus
        },
        getDeleteCriteriaStatus(state) {
            return state.deleteCriteriaStatus
        }
    },

    actions: {
        fetchCriteriaLevelById(rubricId, criteriaId, criteriaLevelId) {
            axios
            .get('//localhost:8000/api/rubrics/' + rubricId + '/criterias/' + criteriaId + '/criteria-levels/' + criteriaLevelId)
            .then(response => {
                console.log(response.data)
                this.criteriaLevelById = response.data.data
            })
        },
        createCriteriaLevel(rubricId, criteriaId, title, point, description, setErrors) {
            axios
                .post('//localhost:8000/api/rubrics/' + rubricId + '/criterias/' + criteriaId + 'criteria-levels', {
                    title: title,
                    point: point,
                    description: description
                })
                .then(response => {
                    console.log(response)
                    this.createCriteriaLevelStatus = response
                })
                .catch(error => {
                    console.log(error.response)
                    setErrors.value = Object.values(
                        error.response.data.errors,
                    ).flat()
                })
        },
        editCriteriaLevel(rubricId, criteriaId, criteriaLevelId, title, point, description, setErrors) {
            axios
            .put('//localhost:8000/api/rubrics/' + rubricId + '/criterias/' + criteriaId + '/criteria-levels/' + criteriaLevelId, {
                title: title,
                point: point,
                description: description
            })
            .then(response => {
                console.log(response.status)
                this.editCriteriaLevelStatus = response
            })
            .catch(error => {
                console.log(error.response)
                setErrors.value = Object.values(error.response.data.errors,).flat()
            })
        },
        deleteCriteriaLevel(rubricId, criteriaId, criteriaLevelId) {
            axios.delete('//localhost:8000/api/rubrics/' + rubricId + '/criterias/' + criteriaId  + '/criteria-levels/' + criteriaLevelId)
                .then(response => {
                    console.log(response)
                    this.deleteCriteriaStatus = response.status
                    location.reload
                })
                .catch(error => {
                    console.log(error.response)
                    this.deleteCriteriaStatus = error.response.status
                })
        }
    }
})