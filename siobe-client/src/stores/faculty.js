import axios from '@/lib/axios'
import { useStorage } from '@vueuse/core'
import { defineStore, acceptHMRUpdate } from 'pinia'

const csrf = () => axios.get('/sanctum/csrf-cookie')

export const useFaculties = defineStore('faculties', {
    state: () => ({
        faculties: useStorage('faculties', []),
        selectedFaculty: useStorage('selectedFaculty', null),
      }),
});