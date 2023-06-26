<template>
    <div class="h-screen bg-gray-50">
        <!-- Bagian template lainnya -->
        <div class="">
            <div class="flex justify-end mb-6">
                <router-link to="/create-assignment" class="bg-white drop-shadow px-3 py-3 rounded-lg mr-48 mt-6">
                    Create New Assignment
                </router-link>
            </div>
            <div class="flex justify-center items-center">
                <table class="table-auto text-sm text-left text-gray-500 shadow-md rounded-lg w-9/12">
                    <thead class="text-m text-gray-500 font-bold uppercase bg-gray-100">
                        <tr>
                            <th scope="col" class="px-6 py-3">No</th>
                            <th scope="col" class="px-6 py-3 w-">
                                Assignment Plan ID's
                            </th>
                            <th scope="col" class="px-6 py-3 w-">
                                Course Class ID's
                            </th>
                            <th scope="col" class="px-6 py-3 w-">
                                Due Date
                            </th>
                            <th scope="col" class="px-6 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(assignment, index) in assignmentStore.getAllAssignment" :key="index">
                            <td scope="row" class="px-6 py-4 font-medium text-gray-900">
                                {{ index + 1 }}
                            </td>
                            <td class="px-6 py-4">
                                {{ assignment.assignment_plan_id }}
                            </td>
                            <td class="px-6 py-4">
                                {{ assignment.course_class_id }}
                            </td>
                            <td class="px-6 py-4">
                                {{ assignment.due_date }}
                            </td>
                            <td class="text-gray-600 px-6 py-4 border-t border-gray-100">
                                <div class="flex flex-wrap space-x-4">
                                    <a href="#" class="text-orange-500 pr-5 hover:text-orange-800"> Details
                                    </a>
                                    <a href="#" class="text-blue-500 pr-5 hover:text-blue-800">
                                        <router-link v-slot="{navigate, href, isActive  }"
                                            :to="'update-assignment/'+assignment.id">
                                            <ResponsiveNavLink :href="href" :active="isActive" @click="navigate">
                                                Edit
                                            </ResponsiveNavLink>
                                        </router-link>
                                    </a>
                                    <button class="text-red-500 pr-5 hover:text-red-800"
                                        @click="assignmentStore.destroyAssignment(assignment.id)">
                                        Delete
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>

                    <!-- Ini kalau list by AssignmentPlan -->
                    <!-- <thead
                        class="text-m text-gray-500 font-bold uppercase bg-gray-100">
                        <tr>
                            <th scope="col" class="px-6 py-3">No</th>
                            <th scope="col" class="px-6 py-3 w-">
                                Assignment Plan's
                            </th>
                            <th scope="col" class="px-6 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(assignment_plan, index) in assignmentPlanStore.getAllAssignmentPlan" :key="index">
                            <td scope="row" class="px-6 py-4 font-medium text-gray-900">
                                {{ index + 1 }}
                            </td>
                            <td class="px-6 py-4 w-3/5">
                                {{ assignment_plan.title }}
                            </td>
                            <td class="text-gray-600 px-6 py-4 border-t border-gray-100">
                                <div class="flex flex-wrap space-x-4">
                                    <a href="#" class="text-orange-500 pr-5 hover:text-orange-800"> Details
                                    </a>
                                    <a href="#" class="text-blue-500 pr-5 hover:text-blue-800"> Edit
                                    </a>
                                    <button class="text-red-500 pr-5 hover:text-red-800"
                                        @click="store.destroyAssignment(assignment.id)">
                                        Delete
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody> -->
                </table>
            </div>
        </div>
    </div>
</template>

<script setup>
import { useAssignments } from '@/stores/assignment'
import { useAssignmentPlans } from '@/stores/assignment_plan'

const assignmentStore = useAssignments()
assignmentStore.fetchAllAssignment()

// const assignmentPlanStore = useAssignmentPlans()
// assignmentPlanStore.fetchAllAssignmentPlan()
</script>
