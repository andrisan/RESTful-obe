<template>
    <div class="h-screen w-screen bg-gray-50">
        <div class="w-screen bg-white drop-shadow h-16 mb-10 flex align-center items-center">
            <h1 class="text-gray-500 font-bold text-xl ml-48">
                Create Faculty
            </h1>
        </div>
        <div class="ml-48 mb-10">
            <h1 class="text-gray-500 font-bold text-m">
                Home > Faculties > Create
            </h1>
        </div>
        <div>
            <div class="flex justify-center">
                <div class="bg-white shadow-md sm:rounded-lg w-9/12 h-auto py-12 px-10">
                    <div class="mb-10">
                        <label for="Faculty Name" class="text-sm font-medium text-gray-500">Faculty Name</label>
                        <input v-model="name" type="text" placeholder="Enter Faculty Name"
                            class="bg-gray-50 border border-gray-500 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/4 p-2.5 mt-3" />

                    </div>
                    <div class="flex">
                        <button class="bg-gray-700 border rounded-md"
                            style="font-weight: bold; color: white; width: 100px; height: 32px;"
                            @click="facultyStore.createFaculty(name)">SAVE</button>
                        <button class="text-gray-600 hover:bg-gray-100 py-2 px-4 rounded-lg">
                            Cancel
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue';
import { useRoute } from 'vue-router';
import { useFaculties } from '@/stores/faculty';

const route = useRoute()
const facultyStore = useFaculties()
const name = ref('')
</script>
