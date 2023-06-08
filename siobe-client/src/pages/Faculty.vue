<template>
    <div class="h-screen w-screen bg-gray-50">
        <div class="w-screen bg-white drop-shadow h-16 mb-10 flex align-center items-center">
            <h1 class="text-gray-500 font-bold text-xl ml-48">Faculties</h1>
        </div>
        <div class="ml-48 mb-10">
            <h1 class="text-gray-500 font-bold text-m">Home > Faculties</h1>
        </div>

        <div class="">
            <div class="flex justify-end mb-6">
                <a href="./Faculty.vue" class="bg-white drop-shadow px-3 py-3 rounded-lg mr-48">Create New Faculty</a>
            </div>
            <div class="flex justify-center items-center">
                <table class="table-auto text-sm text-left text-gray-500 shadow-md rounded-lg w-9/12">
                    <thead class="text-m text-gray-500 font-bold uppercase bg-gray-100">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3 w-">
                                Faculty Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="Faculty in faculties" :key="faculty.id">
                            <td scope="row" class="px-6 py-4 font-medium text-gray-900">
                                {{ Faculty.no }}
                            </td>
                            <td class="px-6 py-4">
                                {{ Faculty.name }}
                            </td>
                            <td class="px-6 py-4">
                                <button class="text-orange-500 pr-5 hover:text-orange-800">
                                    Manage Department
                                </button>
                                <button class="text-blue-500 pr-5 hover:text-blue-800">
                                    Edit
                                </button>
                                <button class="text-red-500 pr-5 hover:text-red-800">
                                    Delete
                                </button>
                            </td>
                        </tr>
                        <!-- <tr class="bg-white border-b hover:bg-gray-50">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900">
                                2
                            </th>
                            <td class="px-6 py-4">
                                Fakultas Ilmu Administrasi
                            </td>
                            <td class="px-6 py-4">
                                <button class="text-orange-500 pr-5 hover:text-orange-800">
                                    Manage Department
                                </button>
                                <button class="text-blue-500 pr-5 hover:text-blue-800">
                                    Edit
                                </button>
                                <button class="text-red-500 pr-5 hover:text-red-800">
                                    Delete
                                </button>
                            </td>
                        </tr>
                        <tr class="bg-white border-b hover:bg-gray-50">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900">
                                3
                            </th>
                            <td class="px-6 py-4">
                                Fakultas Kedokteran
                            </td>
                            <td class="px-6 py-4">
                                <button class="text-orange-500 pr-5 hover:text-orange-800">
                                    Manage Department
                                </button>
                                <button class="text-blue-500 pr-5 hover:text-blue-800">
                                    Edit
                                </button>
                                <button class="text-red-500 pr-5 hover:text-red-800">
                                    Delete
                                </button>
                            </td>
                        </tr>
                        <tr class="bg-white border-b hover:bg-gray-50">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900">
                                4
                            </th>
                            <td class="px-6 py-4">
                                Fakultas Kedokteran Gigi
                            </td>
                            <td class="px-6 py-4">
                                <button class="text-orange-500 pr-5 hover:text-orange-800">
                                    Manage Department
                                </button>
                                <button class="text-blue-500 pr-5 hover:text-blue-800">
                                    Edit
                                </button>
                                <button class="text-red-500 pr-5 hover:text-red-800">
                                    Delete
                                </button>
                            </td>
                        </tr>
                        <tr class="bg-white border-b hover:bg-gray-50">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900">
                                5
                            </th>
                            <td class="px-6 py-4">
                                Fakultas Hukum
                            </td>
                            <td class="px-6 py-4">
                                <button class="text-orange-500 pr-5 hover:text-orange-800">
                                    Manage Department
                                </button>
                                <button class="text-blue-500 pr-5 hover:text-blue-800">
                                    Edit
                                </button>
                                <button class="text-red-500 pr-5 hover:text-red-800">
                                    Delete
                                </button>
                            </td>
                        </tr> -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            faculties: [],
        }
    },

    mounted() {
        axios.get('/api/faculties').then((response) => {
            this.faculties = response.data.data
        })
    },

    number() {
        return {
            number: 1,
        }
    },
    methods: {
        increment() {
            this.number++;
        },
    },
}
</script>
