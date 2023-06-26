import axios from '@/lib/axios'
import { defineStore } from 'pinia'
const csrf = () => axios.get('/sanctum/csrf-cookie')

export const useDepartmentStore = defineStore('department', {
  state: () => ({
    departmentData: [],
    department: []
  }),

  computed: {
    departmentData() {
      return this.fetchDepartmentbyid(this.departmentId);
    },
  },

  actions: {
    fetchDepartment() {
      axios
        .get(`/api/faculties/${faculty}/departments`,
          {
            headers: {
              'Authorization': 'Bearer [token]',
              'X-CSRF-TOKEN': '',
            },
          }
        )
        .then(data => {
          this.syllabi = data.data.data;
        })
        .catch(error => {
          console.error('Error:', error);
        })
    },

    async deleteDepartment(departmentId) {
      try {
        const response = await csrf(); 
        const csrfToken = response.data.csrfToken; 

        await axios.delete(`/api/faculties/${faculty}/departments`, {
          headers: {
            'Authorization': 'Bearer [token]',
            'X-CSRF-TOKEN': csrfToken, 
          },
        });
        this.fetchDepartment();
        console.log('Department deleted:', departmentId);
      } catch (error) {
        console.error('Error deleting department:', error);
      }
    },
    
    async fetchDepartmentid(departmentId) {
      try{
        const response = await axios.get(`/api/faculties/${faculty}/departments`, {
          headers: {
            'Authorization': 'Bearer [token]',
            'X-CSRF-TOKEN': '',
          },
        });
        //console.log(response.data.data);
        this.departmentData = response.data.data;
      }catch(error){
        console.error('Error:', error);
      }
    },

    async addDepartment(form) {
      await csrf()
      console.log(form);
      axios
        .post(`/api/faculties/${faculty}/departments`, form.value, {
          headers: {
            'Authorization': 'Bearer [token]',
            'X-CSRF-TOKEN': '',
          },
        })
        .then(response => {
          this.router.push({ name: 'department' })
        })
        .catch(error => {
          if (error.response.status !== 422) throw error

          setErrors.value = Object.values(
            error.response.data.errors,
          ).flat()
          processing.value = false
        })
    },

    async editDepartment(form, departmentId) {
      console.log(form);
      axios
        .patch(`/api/faculties/${faculty}/departments`, form.value, {
          headers: {
            'Authorization': 'Bearer [token]',
            'X-CSRF-TOKEN': '',
          },
        })
        .then(response => {
          this.router.push({ name: 'department' })
        })
        .catch(error => {
          if (error.response.status !== 422) throw error

        })
    },
  },
});