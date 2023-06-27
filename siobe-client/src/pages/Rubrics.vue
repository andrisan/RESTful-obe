<template>
    <NavRubrics>
        <template #header>
            <h2 class="font-bold text-xl text-gray-800 leading-tight">
                My Rubrics
            </h2>
            <p class="text-gray-500 text-sm">
                Manage rubrics for your courses.
            </p>
        </template>

        <div style="margin-top: 2%; margin-left: 10%">
            <router-link
                v-slot="{ href, isActive, navigate }"
                to="/dashboard"
                custom>
                <ResponsiveNavLink
                    :href="href"
                    :active="isActive"
                    class="font-bold"
                    style="color: blue"
                    @click="navigate">
                    Home
                </ResponsiveNavLink>
            </router-link>
            <router-link
                v-slot="{ href, isActive, navigate }"
                to="/rubrics"
                custom>
                <ResponsiveNavLink
                    :href="href"
                    :active="isActive"
                    @click="navigate">
                    > Rubrics
                </ResponsiveNavLink>
            </router-link>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 pb-6 lg:px-8">
            <div
                class="flex flex-row justify-end mb-3 px-4 sm:px-0 -mr-2 sm:-mr-3">
                <div class="order-5 sm:order-6 mr-2 sm:mr-3">
                    <button
                        class="button-link bg-white shadow font-bold border border-blue-800 rounded-lg"
                        style="padding: 6%; width: 150px"
                        @click="createRubric">
                        Create Rubric
                    </button>
                </div>
            </div>
        </div>

        <div style="margin-left: 10%; margin-top: 2%; margin-right: 10%">
            <table
                class="border-collapse table-auto w-full bg-white table-striped relative">
                <thead>
                    <tr class="text-left">
                        <th
                            class="bg-gray-50 sticky top-0 border-b border-gray-100 px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs truncate w-6">
                            No
                        </th>
                        <th
                            class="bg-gray-50 sticky top-0 border-b border-gray-100 px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs truncate w-64">
                            Title
                        </th>
                        <th
                            class="bg-gray-50 sticky top-0 border-b border-gray-100 px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs truncate w-48">
                            Action
                        </th>
                    </tr>
                </thead>
                <tr v-for="(rubric, index) in store.getAllRubric" :key="index">
                    <td
                        class="text-gray-600 font-semibold px-6 py-3 border-t border-gray-100">
                        {{ index + 1 }}
                    </td>
                    <td
                        class="text-gray-600 font-semibold px-6 py-3 border-t border-gray-100">
                        {{ rubric.title }}
                    </td>
                    <td
                        class="text-gray-600 px-6 py-3 border-t border-gray-100">
                        <div class="flex flex-wrap space-x-4">
                            <a
                                href="#"
                                class="text-blue-700 font-semibold"
                                style="text-decoration: none">
                                <router-link
                                    v-slot="{ href, isActive, navigate }"
                                    :to="'/rubrics/' + rubric.id"
                                    custom>
                                    <ResponsiveNavLink
                                        :href="href"
                                        :active="isActive"
                                        @click="navigate">
                                        Detail
                                    </ResponsiveNavLink>
                                </router-link>
                            </a>
                            <a
                                href="#"
                                class="text-darkblue-700 font-semibold"
                                style="text-decoration: none">
                                <router-link
                                    v-slot="{ href, isActive, navigate }"
                                    :to="'/rubrics/' + rubric.id + '/edit'"
                                    custom>
                                    <ResponsiveNavLink
                                        :href="href"
                                        :active="isActive"
                                        @click="navigate">
                                        Edit
                                    </ResponsiveNavLink>
                                </router-link>
                            </a>

                            <button
                                class="text-red-500 font-semibold"
                                style="text-decoration: none"
                                @click="store.deleteRubric(rubric.id)">
                                Delete
                            </button>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </NavRubrics>
</template>

<script setup>
import NavRubrics from '@/components/NavRubrics.vue'
import { useRubrics } from '@/stores/rubric'
import { useRouter } from 'vue-router';

const router = useRouter()

const store = useRubrics()
store.fetchAllRubric()

function createRubric() {
    router.push('/rubrics/create')
}
</script>

<script>
export default {
    methods: {
        createcriterialevel() {
            this.$router.push('/editRubric')
        },
    },
}
</script>

<style></style>
