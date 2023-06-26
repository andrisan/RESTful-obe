<script setup>
import AuthenticatedLayout from '@/layouts/AuthenticatedLayout.vue'
import { useRoute } from 'vue-router';
import { useSyllabiStore } from '@/stores/syllabi.js';
import { onMounted } from 'vue';

const route = useRoute();
const store = useSyllabiStore();
const id = route.params.id;

onMounted(() => {
  store.fetchSyllabibyid(id);
  store.fetchCLO(id);
  store.fetchILO(id);
  //console.log(store.syllabusData);
});
</script>

<template>
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="p-4">
                            <div class="text-base-content">
                                <h2 class="text-xl font-bold text-gray-500 px-2 py-2">
                                    Syllabus Information
                                </h2>
                                <div class="px-2">
                                    <table class="table-auto w-full">
                                        <tbody>
                                            <tr>
                                                <td class="px-4 py-2 font-semibold w-64 align-top">Title</td>
                                                <td class="px-4 py-2 w-8 align-top">:</td>
                                                <td class="px-4 py-2">{{ store.syllabusData.title }}</td>
                                            </tr>
                                            <tr>
                                                <td class="px-4 py-2 font-semibold w-64 align-top">Author</td>
                                                <td class="px-4 py-2 w-8 align-top">:</td>
                                                <td class="px-4 py-2">{{ store.syllabusData.author }}</td>
                                            </tr>
                                            <tr>
                                                <td class="px-4 py-2 font-semibold w-64 align-top">Head of Study Program
                                                </td>
                                                <td class="px-4 py-2 w-8 align-top">:</td>
                                                <td class="px-4 py-2">{{ store.syllabusData.head_of_study_program }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <h2 class="text-xl font-bold text-gray-500 px-2 py-2 mt-5">
                                    Course Information
                                </h2>
                                <div class="px-2">
                                    <table class="table-auto w-full">
                                        <tbody>
                                            <tr>
                                                <td class="px-4 py-2 font-semibold w-64 align-top">Course Code</td>
                                                <td class="px-4 py-2 w-8 align-top">:</td>
                                                <td class="px-4 py-2">{{ store.studyProgram.code }}</td>
                                            </tr>
                                            <tr>
                                                <td class="px-4 py-2 font-semibold w-64 align-top">Course Name</td>
                                                <td class="px-4 py-2 w-8 align-top">:</td>
                                                <td class="px-4 py-2">{{ store.studyProgram.name }}</td>
                                            </tr>
                                            <tr>
                                                <td class="px-4 py-2 font-semibold w-64 align-top">Course Type</td>
                                                <td class="px-4 py-2 w-8 align-top">:</td>
                                                <td class="px-4 py-2">{{ store.studyProgram.type }}</td>
                                            </tr>
                                            <tr>
                                                <td class="px-4 py-2 font-semibold w-64 align-top">Description</td>
                                                <td class="px-4 py-2 w-8 align-top">:</td>
                                                <td class="px-4 py-2">{{ store.studyProgram.short_description }}</td>
                                            </tr>
                                            <tr>
                                                <td class="px-4 py-2 font-semibold w-64 align-top">Course Credit</td>
                                                <td class="px-4 py-2 w-8 align-top">:</td>
                                                <td class="px-4 py-2">{{ store.studyProgram.course_credit }}</td>
                                            </tr>
                                            <tr>
                                                <td class="px-4 py-2 font-semibold w-64 align-top">Practicum Credit</td>
                                                <td class="px-4 py-2 w-8 align-top">:</td>
                                                <td class="px-4 py-2">{{ store.studyProgram.lab_credit }}</td>
                                            </tr>
                                            <tr>
                                                <td class="px-4 py-2 font-semibold w-64 align-top">Minimal Requirement</td>
                                                <td class="px-4 py-2 w-8 align-top">:</td>
                                                <td class="px-4 py-2">{{ store.studyProgram.minimal_requirement }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="px-4 py-2 font-semibold w-64 align-top">Study Material Summary
                                                </td>
                                                <td class="px-4 py-2 w-8 align-top">:</td>
                                                <td class="px-4 py-2">{{ store.studyProgram.study_material_summary }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="px-4 py-2 font-semibold w-64 align-top">Learning Media</td>
                                                <td class="px-4 py-2 w-8 align-top">:</td>
                                                <td class="px-4 py-2">{{ store.studyProgram.learning_media }}</td>
                                            </tr>
                                        </tbody>
                                    </table> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-row justify-between mb-3 lg:px-8 sm:px-6 py-10">
                    <h2 class="text-xl font-bol; color:grey">
                        Intended Learning Outcome (ILO)
                    </h2>
                    <div class="order-5 sm:order-6 mr-2 sm:mr-3">
                        <a class="w-full bg-white border border-gray-300 rounded-md shadow-sm px-2.5 sm:px-4 py-2 inline-flex justify-center text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            :href="`/syllabi/create/${id}/ILO`">
                            <span class="pr-1">
                                <i class="fa fa-plus"></i> Create New ILO
                            </span>
                        </a>
                    </div>

                </div>

                <div>
                    <div class="mb-5 overflow-x-auto bg-white rounded-lg shadow overflow-y-auto relative">
                        <table class="border-collapse table-auto w-full bg-white table-striped relative">
                            <thead>
                                <tr class="text-left">
                                    <th
                                        class="bg-gray-50 sticky top-0 border-b border-gray-100 px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs truncate w-6">
                                        No
                                    </th>
                                    <th
                                        class="bg-gray-50 sticky top-0 border-b border-gray-100 px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs truncate w-32">
                                        Code
                                    </th>
                                    <th
                                        class="bg-gray-50 sticky top-0 border-b border-gray-100 px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs truncate">
                                        Description
                                    </th>
                                    <th
                                        class="bg-gray-50 sticky top-0 border-b border-gray-100 px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs truncate w-32">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(item, index) in store.tableDatailo" :key="index">
                                    <td class="text-gray-600 px-6 py-3 border-t border-gray-100">{{ index + 1 }}</td>
                                    <td class="text-gray-600 px-6 py-3 border-t border-gray-100 font-semibold">{{
                                        item.code }}</td>
                                    <td class="text-gray-600 px-6 py-3 border-t border-gray-100">{{ item.description }}</td>
                                    <td class="text-gray-600 px-6 py-3 border-t border-gray-100">
                                        <div class="flex flex-wrap space-x-4">
                                            <a href="#edit" class="text-blue-500"><i class="fa fa-edit"></i></a>
                                            <form method="POST" action="">
                                                <input type="hidden" name="" value=""> <input type="hidden" name="_method"
                                                    value="delete">
                                                <button class="text-red-500"
                                                    onclick="event.preventDefault(); confirm('Are you sure?') &amp;&amp; this.closest('form').submit();">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="flex flex-row justify-between mb-3 lg:px-8 sm:px-6 py-10">
                    <h2 class="text-xl font-bol; color:grey">
                        Course Learning Outcome (CLO)
                    </h2>
                    <div class="order-5 sm:order-6 mr-2 sm:mr-3">
                        <a class="w-full bg-white border border-gray-300 rounded-md shadow-sm px-2.5 sm:px-4 py-2 inline-flex justify-center text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            :href="`/syllabi/create/${id}/CLO`">
                            <span class="pr-1">
                                <i class="fa fa-plus"></i> Create New CLO
                            </span>
                        </a>
                    </div>

                </div>

                <div>
                    <div class="mb-5 overflow-x-auto bg-white rounded-lg shadow overflow-y-auto relative">
                        <table class="border-collapse table-auto w-full bg-white table-striped relative">
                            <thead>
                                <tr class="text-left">
                                    <th
                                        class="bg-gray-50 sticky top-0 border-b border-gray-100 px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs truncate w-6">
                                        No
                                    </th>
                                    <th
                                        class="bg-gray-50 sticky top-0 border-b border-gray-100 px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs truncate w-32">
                                        Code
                                    </th>
                                    <th
                                        class="bg-gray-50 sticky top-0 border-b border-gray-100 px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs truncate">
                                        Description
                                    </th>
                                    <th
                                        class="bg-gray-50 sticky top-0 border-b border-gray-100 px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs truncate w-32">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(item, index) in store.tableDataclo" :key="item.id">
                                    <td class="text-gray-600 px-6 py-3 border-t border-gray-100">{{ index + 1 }}</td>
                                    <td class="text-gray-600 px-6 py-3 border-t border-gray-100 font-semibold">{{ item.code }}</td>
                                    <td class="text-gray-600 px-6 py-3 border-t border-gray-100">{{ item.description }}</td>
                                    <td class="text-gray-600 px-6 py-3 border-t border-gray-100">
                                        <div class="flex flex-wrap space-x-4">
                                            <a href="" class="text-blue-500"><i class="fa fa-edit"></i></a>
                                            <form method="POST" action="">
                                                <input type="hidden" name="" value=""> <input type="hidden" name="_method"
                                                    value="delete">
                                                <button class="text-red-500"
                                                    onclick="event.preventDefault(); confirm('Are you sure?') &amp;&amp; this.closest('form').submit();">
                                                    <i class="fa fa-trash"></i>
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
        </div>
    </AuthenticatedLayout>
</template> 
