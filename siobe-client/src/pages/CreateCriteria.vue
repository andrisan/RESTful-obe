<template>
    <NavRubrics>
        <template #header>
            <h2 class="font-bold text-xl text-gray-800 leading-tight">
                Create New Criteria
            </h2>
        </template>

        <div style="margin-top: 2%; margin-left: 10%">
            <router-link
                v-slot="{ href, isActive, navigate }"
                to="/dashboard"
                custom>
                <ResponsiveNavLink
                    :href="href"
                    :active="isActive"
                    class="font-semibold"
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
                    class="font-semibold"
                    style="color: blue"
                    @click="navigate">
                    > {{ rubricStore.getShowRubric.title }}
                </ResponsiveNavLink>
            </router-link>
            <router-link
                v-slot="{ href, isActive, navigate }"
                to="/createcriteria"
                custom>
                <ResponsiveNavLink
                    :href="href"
                    :active="isActive"
                    class="font-semibold"
                    @click="navigate">
                    > Create Criteria
                </ResponsiveNavLink>
            </router-link>
        </div>

        <div
            class="bg-white shadow-sm mt-5 pl-5 mb-4"
            style="margin-left: 10%; margin-right: 10%">
            <ValidationErrors class="mb-4" :errors="errors" />

            <div class="row">
                <div class="title">
                    <div class="col" style="margin-top: 3%">
                        <label class="label">
                            <span class="label-text">Grading LLO</span>
                        </label>
                    </div>
                    <select
                        class="select select-bordered w-full max-w-xs rounded-md">
                        <option disabled selected>Choose the LLO</option>
                        <option
                            v-for="llo in llos"
                            :key="llo.id"
                            :value="llo.id">
                            {{ '[' + llo.code + '] ' + llo.description }}
                        </option>
                    </select>
                </div>

                <div class="row">
                    <div class="col" style="margin-top: 3%">
                        <label class="label">
                            <span class="label-text">Criteria Title</span>
                        </label>
                        <div>
                            <input
                                v-model="title"
                                type="text"
                                name="title"
                                placeholder="Title"
                                class="input input-bordered select-bordered w-full max-w-xs" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col" style="margin-top: 3%">
                        <label class="label">
                            <span class="label-text">Max Point</span>
                        </label>
                        <div>
                            <input
                                v-model="maxPoint"
                                type="number"
                                name="maxPoint"
                                placeholder="Max Point"
                                class="input input-bordered select-bordered w-full max-w-xs" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col" style="margin-top: 3%">
                        <label class="label">
                            <span class="label-text">Description</span>
                        </label>
                        <div>
                            <textarea
                                v-model="description"
                                class="textarea textarea-bordered select-bordered w-full h-64"
                                placeholder="Description"
                                name="description" />
                        </div>
                    </div>
                </div>

                <div class="mt-4 ml-3 mb-4" style="display: flex">
                    <button
                        @click="createCriteria()"
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
                        class="ml-5 mt-1"
                        style="color: darkslategray"
                        @click="showrubrics">
                        Cancel
                    </button>
                </div>
            </div>
        </div>
    </NavRubrics>
</template>

<script setup>
import NavRubrics from '@/components/NavRubrics.vue'
import { computed, ref, watchEffect } from 'vue'
import { useRoute, useRouter } from 'vue-router'
import { useRubrics } from '@/stores/rubric'
import { useCriterias } from '@/stores/criteria'
import ValidationErrors from '@/components/ValidationErrors.vue'

const route = useRoute()
const rubricId = ref(route.params.id)

const router = useRouter()

const rubricStore = useRubrics()
rubricStore.fetchRubricWithId(rubricId.value)

const criteriaStore = useCriterias()
const title = ref('')
const maxPoint = ref()
const description = ref('')

const setErrors = ref()

const errors = computed(() => setErrors.value)

function createCriteria() {
    criteriaStore.createCriteria(
        rubricId.value,
        title.value,
        maxPoint.value,
        description.value,
        setErrors
    )
}

watchEffect(() => {
    const createCriteriaStatus = criteriaStore.getCreateCriteria.status

    if (criteriaStore.createCriteriaStatus.status == '201') {
        router.push('/rubrics/' + rubricId.value)
    } else if (criteriaStore.createCriteriaStatus.status == 409) {
        console.log('failed')
    }
})
</script>

<style scoped>
.select-bordered {
    border-radius: 6px;
}
</style>
