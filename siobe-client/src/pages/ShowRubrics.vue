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

        <div
            class="bg-white shadow mb-8 pb-8"
            style="margin-left: 10%; margin-right: 10%">
            <div v-for="criteria in criteriaStore.getAllCriteria" class="container">
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
        </div>
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
