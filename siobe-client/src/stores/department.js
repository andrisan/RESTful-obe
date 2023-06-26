import axios from '@/lib/axios';
import { defineStore } from 'pinia';

export const useDepartmentStore = defineStore('department', {
  state: () => ({
    departmentData: [],
    department: []
  }),

  getters: {
    getDepartmentData() {
      return this.departmentData;
    }
  },

  actions: {
    async fetchDepartment() {
      try {
        const response = await axios.get(`/api/faculties/${faculty}/departments`, {
          headers: {
            'Authorization': 'Bearer [token]',
          },
        });
        this.departmentData = response.data.data;
      } catch (error) {
        console.error('Error:', error);
      }
    },

    async deleteDepartment(departmentId) {
      try {
        const response = await axios.get('/sanctum/csrf-cookie');
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

    async fetchDepartmentById(departmentId) {
      try {
        const response = await axios.get(`/api/faculties/${faculty}/departments/${departmentId}`, {
          headers: {
            'Authorization': 'Bearer [token]',
          },
        });
        this.department = response.data.data;
      } catch (error) {
        console.error('Error:', error);
      }
    },

    async addDepartment(form) {
      try {
        await axios.get('/sanctum/csrf-cookie');
        const response = await axios.post(`/api/faculties/${faculty}/departments`, form.value, {
          headers: {
            'Authorization': 'Bearer [token]',
          },
        });
        console.log(response.data);
        this.$router.push({ name: 'department' });
      } catch (error) {
        if (error.response.status !== 422) throw error;
        console.error('Error adding department:', error);
      }
    },

    async editDepartment(form, departmentId) {
      try {
        await axios.get('/sanctum/csrf-cookie');
        const response = await axios.patch(`/api/faculties/${faculty}/departments/${departmentId}`, form.value, {
          headers: {
            'Authorization': 'Bearer [token]',
          },
        });
        console.log(response.data);
        this.$router.push({ name: 'department' });
      } catch (error) {
        if (error.response.status !== 422) throw error;
        console.error('Error editing department:', error);
      }
    },
  },
});
