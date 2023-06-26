<script setup>
import PrimaryButton from '@/components/PrimaryButton.vue'
import AuthenticatedLayout from '@/layouts/AuthenticatedLayout.vue'
import { useSyllabiStore } from '@/stores/syllabi.js';
import { onMounted, ref } from 'vue';

const store = useSyllabiStore();

onMounted(() => {
  store.fetchCourse();
});

const form = ref({
    course_id: '',
    title: '',
    author: '',
    head_of_study_program: '',
    creator_user_id: 1
})

const addDataSyllaby = () => {
    store.addSyllabi(form)
}
</script>

<template>
  <AuthenticatedLayout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Syllabi Create
      </h2>
    </template>

    <main>
      <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="text-sm breadcrumbs pl-2 py-6 font-bold text-gray-600 ">
            <ul>
              <li class="text-blue-600">
                <a href="">Home</a>
              </li>
              <li class="text-blue-600">
                <a href="">Syllabi</a>
              </li>
              <li class="text-blue-600">
                <a href="">Create</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="p-20 bg-white border-b border-gray-200 bottom-6">
            <form @submit.prevent="addDataSyllaby" method="POST" >
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="form-control w-full p-3">
                <label class="label">
                  <span class="label-text">Course</span>
                </label>
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"></div>
                <select class="select select-bordered w-full max-w-xs" name="course_id" v-model="form.course_id">
                    <option v-for="course in store.courses" :value="course.id" :key="course.id">
                      {{ course.name }}
                  </option>
                </select>
              </div>

              <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"></div>
              <div class="form-control w-full p-3">
                <label class="label">
                  <span class="label-text">Title</span>
                </label><br>
                <input type="text" name="title" v-model="form.title" placeholder="Syllabus Title" class="input input-bordered w-full max-w-xs">
              </div>

              <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"></div>
              <div class="form-control w-full p-3">
                <label class="label">
                  <span class="label-text">Author</span>
                </label><br>
                <textarea v-model="form.author" class="textarea textarea-bordered w-full lg:w-3/4 h-64" placeholder="Syllabus Author"
                  name="author"></textarea>
              </div>

              <div class="form-control w-full p-3">
                <label class="label">
                  <span class="label-text">Head of Study Program</span>
                </label><br>

                <input type="text" v-model="form.head_of_study_program" name="head_of_study_program" placeholder="Head of Study Program"
                  class="input input-bordered w-full max-w-xs">
              </div>

              <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"></div>
              <div class="mt-4 p-4 space-x-2">
                <PrimaryButton type="submit">Save</PrimaryButton>
                <a href="/syllabi">Cancel</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </main>
  </AuthenticatedLayout>
</template>

<style>
textarea {
  width: 100%;
  height: 150px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 13px;
  background-color: #f9f9f9;
  font-size: 16px;
  text-decoration-color: #ccc;
  resize: none;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #f9f9f9;
}

li {
  float: left;
}

li a {
  display: block;
  color: blue;
  text-align: center;
  padding: 16px;
  text-decoration: none;
}

</style>
