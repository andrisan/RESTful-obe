<template>
    <div class="h-screen w-screen bg-gray-50">
        <!-- ... Bagian lain dari template ... -->
        <div class="">
            <div class="flex justify-end mb-6">
                <router-link to="/faculty" class="bg-white drop-shadow px-3 py-3 rounded-lg mr-48">
                    Create New Faculty
                </router-link>
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
                        <tr v-for="(faculty, index) in faculties" :key="faculty.id">
                            <td scope="row" class="px-6 py-4 font-medium text-gray-900">
                                {{ index + 1 }}
                            </td>
                            <td class="px-6 py-4">
                                {{ faculty.name }}
                            </td>
                            <td class="px-6 py-4">
                                <button class="text-orange-500 pr-5 hover:text-orange-800">
                                    Manage Department
                                </button>
                                <button class="text-blue-500 pr-5 hover:text-blue-800">
                                    Edit
                                </button>
                                <button @click="destroyFaculty(faculty)" class="text-red-500 pr-5 hover:text-red-800">
                                    Delete
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
import axiosClient from '../lib/axios';

export default {
    data() {
        return {
            faculties: [],
        };
    },

    mounted() {
        this.fetchFaculties();
    },

    methods: {
        fetchFaculties() {
            axiosClient
                .get('/api/faculties')
                .then((response) => {
                    this.faculties = response.data.data;
                    console.log(response.data.data);
                })
                .catch((error) => {
                    console.error(error);
                });
        },
        destroyFaculty(faculty) {
            let del = window.confirm("Are you sure?");
            // console.log(faculty.id);

            if (del) {
                axiosClient
                    .delete(`/api/faculties/${faculty.id}`)
                    .then((response) => {
                        console.log('Faculty deleted successfully.');
                        this.fetchFaculties(); // Update the faculty list after deletion
                    })
                    .catch((error) => {
                        console.error(error);
                    });
            }
        },
    },
};
</script>
