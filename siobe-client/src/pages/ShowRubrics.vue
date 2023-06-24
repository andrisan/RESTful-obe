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
                    > {{ rubricStore.getShowRubric.title }}
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
                        @click="createCriteria">
                        Create Criteria
                    </button>
                </div>
            </div>
        </div>

        <div class="bg-white shadow rounded-md" style="margin-left: 10%; margin-right: 12%;">
            <div class="container text-justify" style="padding-top: 1%; padding-bottom: 1%;">
                <div class="row" style="margin-left: 1%; margin-right: 1%;">
                    <div class="col text-left">
                        <p class="font-bold">Facere Beate Eos</p>
                    </div>
                    <div class="col text-right">
                        <p class="font-bold">Max Point: 6.25</p>
                    </div>
                </div>

                <div class="row" style="margin-left: 2%; margin-right: 2%;">
                    <div class="col text-justify">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Pellentesque vitae sem ac augue hendrerit
                            sollicitudin id quis nisl. Vestibulum ante ipsum
                            primis in faucibus orci luctus et ultrices posuere
                            cubilia curae; Nulla sed arcu vel tellus egestas
                            pharetra. In ac dolor vehicula, iaculis augue et,
                            blandit augue. Aliquam elit mi, sollicitudin non
                            feugiat eget, varius ut nulla.
                        </p>
                    </div>
                </div>

                <div class="row" style="margin-left: 3%; margin-right: 2%;">
                    <div class="col border p-3 rounded-md">
                        <p class="font-semibold">Lesson Learning Outcome: Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit. Pellentesque vitae sem ac
                            augue hendrerit sollicitudin id quis nisl
                        </p>
                    </div>
                </div>

                <div class="row" style="margin-left: 2%; margin-right: 1%; margin-top: 2%;">
                    <div class="col">
                        <h6 class="text-gray-600 font-semibold">Criteria Levels</h6>
                    </div>

                    <div class="col text-right">
                        <button
                            class="button-link border text-gray-600 font-semibold rounded-lg"
                            style="padding-top: 1%; padding-bottom: 1%; padding-left: 2%; padding-right: 2%;"
                            @click="addlevel">
                            Add Level
                        </button>
                    </div>
                </div>

                <div class="row" style="margin-left: 3%; margin-right: 2%; margin-top: 1%;">
                    <table class="border-collapse border table-auto w-full bg-white table-striped relative">
                        <thead>
                            <tr class="text-left">
                                <th
                                class="bg-gray-50 sticky top-0 border-b border-gray-100 px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs truncate w-6">
                                    No
                                </th>
                                <th
                                class="bg-gray-50 sticky top-0 border-b border-gray-100 px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs truncate w-48">
                                    Title
                                </th>
                                <th
                                class="bg-gray-50 sticky top-0 border-b border-gray-100 px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs truncate w-6">
                                    Point
                                </th>
                                <th
                                class="bg-gray-50 sticky top-0 border-b border-gray-100 px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs truncate w-64">
                                    Description
                                </th>
                                <th
                                class="bg-gray-50 sticky top-0 border-b border-gray-100 px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs truncate w-10">
                                    Action
                                </th>
                            </tr>
                        </thead>

                        <tr>
                            <td
                            class="text-gray-500 px-6 py-3 border-t border-gray-100">
                                1
                            </td>

                            <td
                            class="text-gray-500 px-6 py-3 border-t border-gray-100">
                                eveniet totam enim
                            </td>

                            <td
                            class="text-gray-500 px-6 py-3 border-t border-gray-100">
                                6.25
                            </td>

                            <td
                            class="text-gray-500 px-6 py-3 border-t border-gray-100">
                                Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit. Pellentesque vitae sem ac augue hendrerit
                                sollicitudin id quis nisl. Vestibulum ante ipsum
                                primis in faucibus orci luctus et ultrices posuere
                                cubilia curae; Nulla sed arcu vel tellus egestas
                                pharetra. In ac dolor vehicula, iaculis augue et,
                                blandit augue. Aliquam elit mi, sollicitudin non
                                feugiat eget, varius ut nulla.
                            </td>

                            <td
                            class="text-gray-600 px-6 py-3 border-t border-gray-100">
                                <div class="flex flex-wrap space-x-4">
                                    <a
                                    href="#"
                                    class="text-darkblue-700 font-semibold"
                                    style="text-decoration: none"
                                        >Edit
                                    </a>
                                    <form
                                    method="POST"
                                    action="{{ route('rubrics.criterias.criteria-levels.destroy', [$rubric, $criteria, $criteriaLevel]) }}">
                                        <button
                                        class="text-red-500 font-semibold"
                                        style="text-decoration: none"
                                        onclick="event.preventDefault(); confirm('Are you sure?') && this.closest('form').submit();">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>

                    </table>
                </div>

                <div class="row" style="margin-left: 3%; margin-right: 1%; margin-top: 1%;">
                    <div class="col text-right">
                        <button
                            class="button-link border text-white-600 font-semibold rounded-lg"
                            style="padding-top: 4px; padding-bottom: 4px; padding-left: 2%; padding-right: 2%; background-color: red; color: white;"
                            @click="addlevel">
                            DELETE CRITERIA
                        </button>
                    </div>
                </div>

            </div>
        </div>

        <!-- <div
            class="bg-white shadow"
            style="margin-left: 10%; margin-right: 10%">
            <div class="container" style="margin-left: 2%;">
                <div class="row">
                    <div class="col" style="margin-top: 3%">
                        <h5 class="font-bold">{{ criteria.title }}</h5>
                    </div>
                    <div class="col text-right" style="margin-top: 3%">
                        <h6 class="font-bold">Max Point : {{ criteria.max_point }}</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>
                            {{ criteria.description }}
                        </p>
                    </div>
                </div>
                <div class="row-cols-1 p-3">
                    <h5 class="border p-3">
                        Lesson Learning Outcome: Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit. Pellentesque vitae sem ac
                        augue hendrerit sollicitudin id quis nisl
                    </h5>
                </div>
                <div>
                    <h5>Criteria Levels</h5>
                </div>
                <div class="container">
                    <table class="table p-3 is is-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tittle</th>
                                <th>Point</th>
                                <th>Description</th>
                            </tr>
                            <tr v-for="(criteriaLevel, index) in criteria.criteria_levels" :key="index">
                                <th>{{ index + 1}}</th>
                                <th>{{ criteriaLevel.title }}</th>
                                <th>{{ criteriaLevel.point }}</th>
                                <th>
                                    {{ criteriaLevel.description }}
                                </th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div> -->
    </NavRubrics>
</template>

<script setup>

import NavRubrics from '@/components/NavRubrics.vue'
import { ref } from 'vue';
import { useRoute, useRouter } from 'vue-router';
import { useRubrics } from '@/stores/rubric';
import { useCriterias } from '@/stores/criteria';
import { useLlo } from '@/stores/llo';

const router = useRouter();

const route = useRoute();
const rubricId = ref(route.params.id)

const rubricStore = useRubrics()
rubricStore.fetchRubricWithId(rubricId.value)

const criteriaStore = useCriterias()
criteriaStore.fetchAllCriteria(rubricId.value)

const lloStore = useLlo()
lloStore.fetchLloById(1)

function createCriteria() {
    router.push('/criteria/' + 1 + '/create')
}

</script>

<!-- <script>

export default {
    methods: {
        createcriteria() {
            this.$router.push('/criteria/' + 1 + '/create');
        }
    }
}
 -->
<!-- </script> -->

<style></style>
