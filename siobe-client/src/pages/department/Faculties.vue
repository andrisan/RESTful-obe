<script setup>
import AuthenticatedLayout from '@/layouts/AuthenticatedLayout.vue'
</script>

<template>
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Faculties
            </h2>
        </template>

        <div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <!-- second-header -->
                <div class="text-sm pl-2 py-6 font-semibold text-gray-600 flex items-center">
                    <ul class="flex space-x-2.5">
                        <li class="text-blue-600">
                            <a href="http://127.0.0.1:3000/home">
                                Home
                            </a>
                        </li>
                        <li class="pt-1.5">
                            <svg class="h-2 w-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="grey">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l9-9-9-9" /></svg>
                        </li>
                        <li>
                            Faculties
                        </li>
                    </ul>
                </div>
                
                <!-- body-start -->
                <div class="flex flex-row sm:justify-end mb-3 px-4 sm:px-0 -mr-2 sm:-mr-3">
                    <div class="order-5 sm:order-6 mr-2 sm:mr-3">
                        <div class="w-full bg-white border border-gray-300 rounded-md shadow-sm px-2.5 sm:px-4 py-2 inline-flex justify-center text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            <span class="pr-1"><i class="fa fa-plus"></i> Create New Faculty</span>
                        </div>
                    </div>
                </div>

                <div class="mb-5 overflow-x-auto bg-white rounded-lg shadow overflow-y-auto relative">
                    <table class="border-collapse table-auto w-full bg-white table-striped relative">
                        <thead>
                        <tr class="text-left">
                            <th class="bg-gray-50 sticky top-0 border-b border-gray-100 px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs truncate w-6">No</th>
                            <th class="bg-gray-50 sticky top-0 border-b border-gray-100 px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs truncate w-64">Faculty Name</th>
                            <th class="bg-gray-50 sticky top-0 border-b border-gray-100 px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs truncate w-48">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-gray-600 px-6 py-3 border-t border-gray-100">1</td>
                                <td class="text-gray-600 px-6 py-3 border-t border-gray-100">Faculty of Lowe-Feil</td>
                                <td class="text-gray-600 px-6 py-3 border-t border-gray-100">
                                    <div class="flex flex-wrap space-x-4">
                                        <a href="http://127.0.0.1:3000/faculties/1/departments" class="text-amber-700">Manage Departement</a>
                                        <a href="http://127.0.0.1:3000/faculties/1/edit" class="text-blue-500">Edit</a>
                                        <form method="POST" action="http://127.0.0.1:3000/faculties/1">
                                            <input type="hidden" name="_token" value="GMBo3eU00NQjfCq7kfuj6evRZuwlhqmKU5awnWz0">                                            
                                            <input type="hidden" name="_method" value="delete">
                                            <button class="text-red-500" onclick="event.preventDefault(); confirm('Are you sure?') &amp;&amp; this.closest('form').submit();">
                                                Delete
                                            </button>
                                        </form>

                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- body-end -->
            </div>
        </div>
    </AuthenticatedLayout>
</template>

