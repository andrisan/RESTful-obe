<script setup>
import PrimaryButton from '@/components/PrimaryButton.vue'
import AuthenticatedLayout from '@/layouts/AuthenticatedLayout.vue'
import { useRoute } from 'vue-router';
import { useSyllabiStore } from '@/stores/syllabi.js';
import { onMounted, ref } from 'vue';

const route = useRoute();
const store = useSyllabiStore();
const id = route.params.id;

const form = ref({
  course_id: '',
  title: '',
  author: '',
  head_of_study_program: '',
  creator_user_id: 1
});

onMounted(async () => {
  await store.fetchSyllabibyid(id);
  await store.fetchCourse();
  form.value.course_id = store.syllabibyidData.course_id;
  form.value.title = store.syllabibyidData.title;
  form.value.author = store.syllabibyidData.author;
  form.value.head_of_study_program = store.syllabibyidData.head_of_study_program;
});

const updateDataSyllaby = async () => {
  await store.editSyllabi(form.value, id)
}
</script>

<template>
  <AuthenticatedLayout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Syllabi Edit
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

          <!-- <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg"> -->
          <div class="p-20 bg-white border-b border-gray-200 bottom-6">
            <form @submit.prevent="updateDataSyllaby" method="POST">
              <input type="hidden" name="_token" value="">
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
                <input type="text" name="title" placeholder="Edit Syllabus Title"
                  class="input input-bordered w-full max-w-xs" v-model="form.title" >
              </div>

              <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"></div>
              <div class="form-control w-full p-3">
                <label class="label">
                  <span class="label-text">Author</span>
                </label><br>
                <textarea  v-model="form.author" class="textarea textarea-bordered w-full lg:w-3/4 h-64" placeholder="Edit Syllabus Author"
                  name="author"></textarea>
              </div>

              <div class="form-control w-full p-3">
                <label class="label">
                  <span class="label-text">Head of Study Program</span>
                </label><br>

                <input type="text"  v-model="form.head_of_study_program" name="head_of_study_program" placeholder="Edit Head of Study Program"
                  class="input input-bordered w-full max-w-xs">
              </div>

              <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"></div>
              <div class="mt-4 p-4 space-x-2">
                <PrimaryButton>Save</PrimaryButton>
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
