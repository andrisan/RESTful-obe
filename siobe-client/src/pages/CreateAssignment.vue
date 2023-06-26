<template>
    <div class=" bg-gray-50">
        <div
            class="bg-white drop-shadow h-16 mb-10 flex align-center items-center">
            <h1 class="text-gray-500 font-bold text-xl ml-48">
                New Assignment
            </h1>
        </div>

        <div class="section-halaman px-44 mt-5 text-gray-500 font-bold">
            <a href="#" class="nav-link text-blue-500">Home</a><span> > </span>
            <a href="#" class="nav-link text-blue-500">MATKUL A</a
            ><span> > </span>
            <span>Create Assignment</span>
        </div>

        <div class="max-w-screen px-44 mt-4 justify-center">
            <div class="p-6 bg-white border border-gray-200 rounded-lg shadow">
                <div class="header-title flex">
                    <div class="title font-sans grid text-gray-600">
                        <h1 class="font-bold text-xl">
                            Assignment for class: MATKUL A
                        </h1>
                    </div>
                </div>
                <hr class="h-px my-8 bg-gray-200 border-0" />
                <div class="grid grid-cols-2 flex-row flex-wrap justify-between">
                    <div class="flex flex-col">
                        <div class="pb-4">
                            <h1 class="font-bold text-gray-600">
                                Assignment Plan
                            </h1>
                            <p class="text-gray-400 text-sm pb-2">
                                Assignment plan can only be used once per class
                            </p>
                            <div class="form-control w-full lg:w-[32rem]">
                                <select v-model="assignment_plan_id" class="text-gray-500 select select-bordered border rounded-md">
                                    <option disabled="" selected="">
                                        Choose the assignment plan
                                    </option>
                                    <option value="17">Judul</option>
                                </select>
                            </div>
                        </div>
                        <div class="pb-4">
                            <h1 class="font-bold text-gray-600">
                                Course Class
                            </h1>
                            <div class="form-control w-full lg:w-[32rem]">
                                <select v-model="course_class_id" class="text-gray-500 select select-bordered border rounded-md">
                                    <option disabled="" selected="">
                                        Choose the assignment course class
                                    </option>
                                    <option value="1">Course 1</option>
                                    <option value="2">Course 2</option>
                                    <option value="3">Course 3</option>

                                </select>
                            </div>
                        </div>
                        <div>
                            <h1 class="text-gray-600 font-bold py-2">
                                Deadline
                            </h1>
                            <div class="flex-row flex gap-10">
                                <div class="text-gray-500">
                                    <input v-model="due_date" type="datetime-local"
                                        placeholder="Type here" class="input input-bordered w-full max-w-xs border rounded-md" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <div class="judul font-bold pt-2">
                            <h1>Note</h1>
                        </div>
                        <div class="py-2">
                            <div>
                                <textarea v-model="note"
                                    class="textarea textarea-bordered w-[32rem] h-64 border rounded-md"
                                    name="note"
                                    placeholder="Note"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex">
                    <button
                        @click="assignmentStore.createAssignment(assignment_plan_id, due_date, note,course_class_id)"
                        class="bg-gray-700 border rounded-md"
                        style="
                            font-weight: bold;
                            color: white;
                            width: 100px;
                            height: 32px;
                        ">
                        SAVE
                    </button>
                    <button
                        class="text-gray-600 hover:bg-gray-100 py-2 px-4 rounded-lg">
                        Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue';
import { useRoute } from 'vue-router';
import { useAssignments } from '@/stores/assignment';

const route = useRoute()
const assignmentStore = useAssignments()
const name = ref('')
</script>
