<script setup>
import AuthenticatedLayout from '@/layouts/AuthenticatedLayout.vue'
</script>

<template>
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Course Class
            </h2>
            <meta name="csrf-token" content="{{ csrf_token() }}">
        </template>

    <form @submit.prevent="submitForm">
      <h2>Add Course Class</h2>
      <label>Course Class: </label>
      <input
        type="text"
        name="name"
        id="name"
        placeholder="Nama Course Class"
        required
        v-model="form.name"
      />
      <label>ID Course Class: </label>
      <input
        type="text"
        name="courseclass_id"
        id="courseclass_id"
        placeholder="ID Department"
        required
        v-model="form.department_id"
      />

      <br/>
      <div class="submit">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </AuthenticatedLayout>
  </template>
  
  <script>
  import axios from "axios";
  window.csrfToken = document.querySelector('meta[name="csrf-token"]').content;  

  export default {
    data() {
      return {
        form: {
          name: "",
          courseclass_id: "",
        },
      };
    },
    methods: {
      submitForm() {
        axios
          .post("http://localhost:8000/api/course-classes", this.form, {
            _token: csrfToken
          })
          .then((response) => {
            this.$router.push({
              name: "courseclasses"
            });
            this.$router.go(0);
            console.log(response);
          })
          .catch((error) => {
            console.log(error);
          });
      },
    },
  };
  </script>
  
  <style>
  form {
    max-width: 520px;
    margin: 30px auto;
    background: white;
    text-align: left;
    padding: 40px;
    border-radius: 10px;
  }
  label {
    color: grey;
    display: inline-block;
    margin: 25px 0 15px;
    font-size: 0.6em;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: bold;
  }
  input {
    display: block;
    padding: 10px 6px;
    width: 100%;
    box-sizing: border-box;
    border: none;
    border-bottom: 1px solid #ddd;
    color: #555;
  }
  .submit {
    text-align: center;
  }
  </style>