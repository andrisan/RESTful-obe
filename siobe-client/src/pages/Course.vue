<script setup>
import AuthenticatedLayout from '@/layouts/AuthenticatedLayout.vue'
</script>

<template>
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Course
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <main>
                            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                                <div class="text-sm breadcrumbs pl-2 py-6 font-bold text-gray-600">
                                </div>
                                <div class="pb-8">
                                    <div class="flex flex-row sm:justify-end mb-3 px-4 sm:px-0 -mr-2 sm:-mr-3">
                                        <div class="order-5 sm:order-6 mr-2 sm:mr-3">
                                            <a href="/courses/create"
                                                class="w-full bg-white border border-gray-300 rounded-md shadow-sm px-2.5 sm:px-4 py-2 inline-flex justify-center text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                <span class="pr-1"><i class="fa fa-plus"></i> Create New Course</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="mb-5 overflow-x-auto bg-white rounded-lg shadow overflow-y-auto relative">
                                        <table class="border-collapse table-auto w-full bg-white table-striped relative">
                                            <thead>
                                                <tr class="text-left">
                                                    <th
                                                        class="bg-gray-50 sticky top-0 border-b border-gray-100 px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs truncate w-6">
                                                        No</th>
                                                    <th
                                                        class="bg-gray-50 sticky top-0 border-b border-gray-100 px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs truncate w-64">
                                                        Nama</th>
                                                    <th
                                                        class="bg-gray-50 sticky top-0 border-b border-gray-100 px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs truncate w-64">
                                                        Kode Course</th>
                                                    <th
                                                        class="bg-gray-50 sticky top-0 border-b border-gray-100 px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs truncate w-48">
                                                        Course Credit</th>
                                                    <th
                                                        class="bg-gray-50 sticky top-0 border-b border-gray-100 px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs truncate w-64">
                                                        Lab Credit</th>
                                                    <th
                                                        class="bg-gray-50 sticky top-0 border-b border-gray-100 px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs truncate w-48">
                                                        Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr v-for="(item, index) in courses" :key="index">
                                                    <td class="text-gray-600 px-6 py-3 border-t border-gray-100">{{ index + 1 }}</td>
                                                    <td class="text-gray-600 px-6 py-3 border-t border-gray-100">
                                                        <a :href="`courses/show/${item.id}`"
                                                            class="text-blue-500 hover:text-blue-700">{{ item.name }}</a>
                                                    </td>
                                                    <td class="text-gray-600 px-6 py-3 border-t border-gray-100">{{ item.code }}</td>
                                                    <td class="text-gray-600 px-6 py-3 border-t border-gray-100">{{ item.course_credit }}</td>
                                                    <td class="text-gray-600 px-6 py-3 border-t border-gray-100">{{ item.lab_credit }}</td>


                                                    <td class="text-gray-600 px-6 py-3 border-t border-gray-100">
                                                        <div class="flex flex-wrap space-x-4">
                                                            <a href=""
                                                                class="text-blue-500">Edit</a>
                                                            <form method="POST" action="">
                                                                <input type="hidden" name="" value=""> <input
                                                                    type="hidden" name="_method" value="delete">
                                                                <button class="text-red-500" @click="deleteCourse(item)">
                                                                    Delete
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </main>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script>


import axios from "axios";

export default {
  data() {
    return {
      courses: [],
    };
  },
  mounted() {
    this.getCourse();
  },
  methods: {
    getCourse() {
      axios
        .get("http://localhost:8000/api/courses", {
        })
        .then((response) => {
          this.courses = response.data;
        })
        .catch((error) => {
          this.validation = error.response.data;
        });
    },
    deleteCourse(courses) {
      if (confirm("Hapus Course?" + courses.id)) {
        axios
          .delete('http://127.0.0.1:8000/api/courses/' + courses.id).then(res =>{
            this.load()
          });
      }
    },
  },
}
</script>
