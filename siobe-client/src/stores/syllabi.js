import axios from '@/lib/axios'
import { defineStore } from 'pinia'
const csrf = () => axios.get('/sanctum/csrf-cookie')

export const useSyllabiStore = defineStore('syllabi', {
  state: () => ({
    syllabusData: [],
    syllabi: [],
    courses: [],
    tableDataclo: [],
    tableDatailo: [],
    studyProgram:[],
    ilos:[]
  }),

  computed: {
    syllabusData() {
      return this.fetchSyllabibyid(this.syllabusId);
    },
  },

  actions: {
    fetchSyllabi() {
      axios
        .get('/api/syllabi',
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

    async deleteSyllabus(syllabusId) {
      try {
        const response = await csrf(); 
        const csrfToken = response.data.csrfToken; 

        await axios.delete(`/api/syllabi/${syllabusId}`, {
          headers: {
            'Authorization': 'Bearer [token]',
            'X-CSRF-TOKEN': csrfToken, 
          },
        });
        this.fetchSyllabi();
        console.log('Syllabus deleted:', syllabusId);
      } catch (error) {
        console.error('Error deleting syllabus:', error);
      }
    },


    async fetchCourse() {
      axios
        .get('/api/courses',
          {
            headers: {
              'Authorization': 'Bearer [token]',
              'X-CSRF-TOKEN': '',
            },
          }
        )
        .then(data => {
          this.courses = data.data;
        })
        .catch(error => {
          console.error('Error:', error);
        })
    },

    
    async fetchSyllabibyid(syllabusId) {
      try{
        const response = await axios.get(`/api/syllabi/${syllabusId}`, {
          headers: {
            'Authorization': 'Bearer [token]',
            'X-CSRF-TOKEN': '',
          },
        });
        //console.log(response.data.data);
        this.syllabusData = response.data.data;
        //console.log(this.syllabusData.studyProgram);
        this.studyProgram = this.syllabusData.studyProgram;
        //return response.data.data;
      }catch(error){
        console.error('Error:', error);
      }
    },

    fetchCLO(syllabusId) {
      axios
        .get(`/api/syllabi/${syllabusId}/clo`,
          {
            headers: {
              'Authorization': 'Bearer [token]',
              'X-CSRF-TOKEN': '',
            },
          }
        )
        .then(data => {
          this.tableDataclo = data.data.data;
        })
        .catch(error => {
          console.error('Error:', error);
        })
    },

    fetchILO(syllabusId) {
      axios
        .get(`/api/syllabi/${syllabusId}/ilo`,
          {
            headers: {
              'Authorization': 'Bearer [token]',
              'X-CSRF-TOKEN': '',
            },
          }
        )
        .then(data => {
          this.tableDatailo = data.data.data;
        })
        .catch(error => {
          console.error('Error:', error);
        })
    },

    async addSyllabi(form) {
      await csrf()
      console.log(form);
      axios
        .post('/api/syllabi', form.value, {
          headers: {
            'Authorization': 'Bearer [token]',
            'X-CSRF-TOKEN': '',
          },
        })
        .then(response => {
          this.router.push({ name: 'syllabi' })
        })
        .catch(error => {
          if (error.response.status !== 422) throw error

          setErrors.value = Object.values(
            error.response.data.errors,
          ).flat()
          processing.value = false
        })
    },

    async editSyllabi(form, syllabusId) {
      console.log(form);
      axios
        .patch(`/api/syllabi/${syllabusId}`, form.value, {
          headers: {
            'Authorization': 'Bearer [token]',
            'X-CSRF-TOKEN': '',
          },
        })
        .then(response => {
          this.router.push({ name: 'syllabi' })
        })
        .catch(error => {
          if (error.response.status !== 422) throw error

        })
    },

    async addIlo(form, id) {
      await csrf()
      console.log(form);
      axios
        .post('/api/ilo', form.value, {
          headers: {
            'Authorization': 'Bearer [token]',
            'X-CSRF-TOKEN': '',
          },
        })
        .then(response => {
          this.router.push({ name: `syllabi/${id}` })
        })
        .catch(error => {
          if (error.response.status !== 422) throw error

          setErrors.value = Object.values(
            error.response.data.errors,
          ).flat()
          processing.value = false
        })
    },

    async addclo(form, id) {
      await csrf()
      console.log(form);
      axios
        .post('/api/clo', form.value, {
          headers: {
            'Authorization': 'Bearer [token]',
            'X-CSRF-TOKEN': '',
          },
        })
        .then(response => {
          this.router.push({ name: `syllabi/${id}` })
        })
        .catch(error => {
          if (error.response.status !== 422) throw error

          setErrors.value = Object.values(
            error.response.data.errors,
          ).flat()
          processing.value = false
        })
    },


    async fetchIlo() {
      axios
        .get('/api/ilo',
          {
            headers: {
              'Authorization': 'Bearer [token]',
              'X-CSRF-TOKEN': '',
            },
          }
        )
        .then(data => {
          this.ilos = data.data;
        })
        .catch(error => {
          console.error('Error:', error);
        })
    },

  },
});
