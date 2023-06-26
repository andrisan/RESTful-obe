<script setup>
import AuthenticatedLayout from '@/layouts/AuthenticatedLayout.vue'   
import { useSyllabiStore } from '@/stores/syllabi.js';
import { onMounted } from 'vue';

const store = useSyllabiStore();

onMounted(() => {
  store.fetchSyllabi();
  //console.log(store.syllabusData);
});
</script>

<template>
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                My Syllabi
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
                                            <a href="/syllabi/create"
                                                class="w-full bg-white border border-gray-300 rounded-md shadow-sm px-2.5 sm:px-4 py-2 inline-flex justify-center text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                <span class="pr-1"><i class="fa fa-plus"></i> Create New Syllabus</span>
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
                                                        Title</th>
                                                    <th
                                                        class="bg-gray-50 sticky top-0 border-b border-gray-100 px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs truncate ">
                                                        Author</th>
                                                    <th
                                                        class="bg-gray-50 sticky top-0 border-b border-gray-100 px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs truncate w-128">
                                                        Course</th>
                                                    <th
                                                        class="bg-gray-50 sticky top-0 border-b border-gray-100 px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs truncate w-48">
                                                        Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr v-for="(item, index) in store.syllabi" :key="index">
                                                    <td class="text-gray-600 px-6 py-3 border-t border-gray-100">{{ index +
                                                        1 }}</td>
                                                    <td class="text-gray-600 px-6 py-3 border-t border-gray-100">
                                                        <a :href="`syllabi/show/${item.id}`"
                                                            class="text-blue-500 hover:text-blue-700">{{ item.title }}</a>
                                                    </td>
                                                    <td class="text-gray-600 px-6 py-3 border-t border-gray-100">{{
                                                        item.author }}</td>
                                                    <td clas-60s="text-gray0 px-6 py-3 border-t border-gray-100">{{
                                                        item.head_of_study_program }}</td>
                                                    <td class="text-gray-600 px-6 py-3 border-t border-gray-100">
                                                        <div class="flex flex-wrap space-x-4">
                                                            <a :href="`/syllabi/edit/${item.id}`" class="text-blue-500">Edit</a>
                                                            <form method="POST" @submit.prevent="store.deleteSyllabus(item.id)">
                                                                <input type="hidden" name="syllabusId" :value="item.id">
                                                                <button type="submit" class="text-red-500">Delete</button>
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
