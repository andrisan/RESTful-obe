import axios from '@/lib/axios';
import { useStorage } from '@vueuse/core';
import { defineStore, acceptHMRUpdate } from 'pinia';
const csrf = () => axios.get('/sanctum/csrf-cookie');

export const useFacultiesStore = defineStore('faculties', {
  state: () => ({
    facultyData: [],
    faculties: [],
    courses: [],
    studyProgram: []
  }),

  computed: {
    facultyData() {
      return this.fetchFacultyById(this.facultyId);
    },
  },

  actions: {
    fetchFaculties() {
      axios
        .get('/api/faculties', {
          headers: {
            'Authorization': 'Bearer hoBe3kjRA1GZpueZJYKIzbXOihpf6uJyEqJHS06c',
            'X-CSRF-TOKEN': '',
          },
        })
        .then(data => {
          this.faculties = data.data.data;
        })
        .catch(error => {
          console.error('Error:', error);
        });
    },

    async deleteFaculty(facultyId) {
      try {
        const response = await csrf(); // Fetch CSRF token
        const csrfToken = response.data.csrfToken; // Assuming the token is available in the response

        await axios.delete(`/api/faculties/${facultyId}`, {
          headers: {
            'Authorization': 'Bearer hoBe3kjRA1GZpueZJYKIzbXOihpf6uJyEqJHS06c',
            'X-CSRF-TOKEN': csrfToken, // Include the retrieved CSRF token
          },
        });
        this.fetchFaculties();
        console.log('Faculty deleted:', facultyId);
      } catch (error) {
        console.error('Error deleting faculty:', error);
      }
    },

    async fetchCourses() {
      axios
        .get('/api/courses', {
          headers: {
            'Authorization': 'Bearer hoBe3kjRA1GZpueZJYKIzbXOihpf6uJyEqJHS06c',
            'X-CSRF-TOKEN': '',
          },
        })
        .then(data => {
          this.courses = data.data;
        })
        .catch(error => {
          console.error('Error:', error);
        });
    },

    async fetchFacultyById(facultyId) {
      try {
        const response = await axios.get(`/api/faculties/${facultyId}`, {
          headers: {
            'Authorization': 'Bearer hoBe3kjRA1GZpueZJYKIzbXOihpf6uJyEqJHS06c',
            'X-CSRF-TOKEN': '',
          },
        });
        this.facultyData = response.data.data;
        this.studyProgram = this.facultyData.studyProgram;
      } catch (error) {
        console.error('Error:', error);
      }
    },

    async addFaculty(form) {
      await csrf();
      console.log(form);
      axios
        .post('/api/faculties', form.value, {
          headers: {
            'Authorization': 'Bearer hoBe3kjRA1GZpueZJYKIzbXOihpf6uJyEqJHS06c',
            'X-CSRF-TOKEN': '',
          },
        })
        .then(response => {
          this.router.push({ name: 'faculties' });
        })
        .catch(error => {
          if (error.response.status !== 422) throw error;

          setErrors.value = Object.values(error.response.data.errors).flat();
          processing.value = false;
        });
    },

    async editFaculty(form, facultyId) {
      console.log(form);
      axios
        .patch(`/api/faculties/${facultyId}`, form.value, {
          headers: {
            'Authorization': 'Bearer hoBe3kjRA1GZpueZJYKIzbXOihpf6uJyEqJHS06c',
            'X-CSRF-TOKEN': '',
          },
        })
        .then(response => {
          this.router.push({ name: 'faculties' });
        })
        .catch(error => {
          if (error.response.status !== 422) throw error;
        });
    },
  },
});
