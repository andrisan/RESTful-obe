<template>
    <NavRubrics>
        <template #header>
            <h2 class="font-bold text-xl text-gray-800 leading-tight">Edit Criteria Level: {{ criteriaLevelStore.getCriteriaLevelById.title }}</h2>
            <p class="text-gray-500 text-sm">Criteria: {{ criteriaStore.getCriteriaById.title }}</p>
        </template>
        <div style="margin-top: 2%; margin-left: 10%;">
            <router-link v-slot="{ href, isActive, navigate }" to="/dashboard" custom>
                <ResponsiveNavLink :href="href" :active="isActive" class="font-bold" style="color: blue;" @click="navigate">Home</ResponsiveNavLink>
            </router-link>
            <router-link v-slot="{ href, isActive, navigate }" to="/showrubrics" custom>
                <ResponsiveNavLink :href="href" :active="isActive" class="font-bold" style="color: blue;" @click="navigate"> > {{ rubricStore.getShowRubric.title }}
                </ResponsiveNavLink>
            </router-link>
            <router-link v-slot="{ href, isActive, navigate }" to="/createcriterialevel" custom>
                <ResponsiveNavLink :href="href" :active="isActive" @click="toShowRubric()"> > {{ criteriaStore.getCriteriaById.title }}
                </ResponsiveNavLink>
            </router-link>
        </div>

        <div
            class="bg-white shadow-sm mt-5 pl-5 mb-4"
            style="margin-left: 10%; margin-right: 10%">

            <ValidationErrors class="mb-4" :errors="errors" />


            <div class="row">
                <div class="row">
                    <div class="col" style="margin-top: 3%">
                        <label class="label">
                            <h5 class="text-gray-500">Title</h5>
                        </label>
                        <div>
                            <input type="text" v-model="title" name="title" :placeholder="criteriaLevelStore.getCriteriaLevelById.title" class="input input-bordered text-gray-500 select-bordered w-full max-w-xs rounded-md"/>
                        </div>
                    </div> 
                </div>

                <div class="row">
                    <div class="col" style="margin-top: 3%">
                        <label class="label">
                            <h5 class="text-gray-500">Point</h5>
                        </label>
                        <div>
                            <input type="text" v-model="point" name="point" :placeholder="criteriaLevelStore.getCriteriaLevelById.point" class="input input-bordered text-gray-500 select-bordered w-full max-w-xs rounded-md"/>
                        </div>
                    </div> 
                </div>
                
                <div class="row">
                    <div class="col" style="margin-top: 3%">
                        <label class="label">
                            <h5 class="text-gray-500">Description</h5>
                        </label>
                        <div>
                            <textarea class="textarea textarea-bordered text-gray-500 select-bordered w-full h-64 rounded-md" v-model="description" :placeholder="criteriaLevelStore.getCriteriaLevelById.description" name="description" />
                        </div>
                    </div>
                </div>
                
                
                <div class="mt-4 ml-3 mb-4" style="display: flex;">
                    <button class="bg-gray-700 border rounded-md" @click="updateCriteriaLevel()" style="font-weight: bold; color: white; width: 100px; height: 32px;">SAVE</button>
                    <button class="ml-5 mt-1" style="color: darkslategray;" @click="toShowRubric()">Cancel</button>
                </div>
            </div>
        </div>

    </NavRubrics>

</template>

<script setup>
import NavRubrics from '@/components/NavRubrics.vue';
import { computed, ref, watchEffect } from 'vue';
import { useRoute, useRouter } from 'vue-router';
import { useCriteriaLevels } from '../stores/criteriaLevel';
import { useCriterias } from '@/stores/criteria';
import { useRubrics } from '../stores/rubric';
import ValidationErrors from '@/components/ValidationErrors.vue'

const route = useRoute()
const router = useRouter()
const rubricId = ref(route.params.rubricId)
const criteriaId = ref(route.params.criteriaId)
const criteriaLevelId = ref(route.params.criteriaLevelId)

const rubricStore = useRubrics()
rubricStore.fetchRubricWithId(rubricId.value)

const criteriaLevelStore = useCriteriaLevels()
criteriaLevelStore.fetchCriteriaLevelById(rubricId.value, criteriaId.value ,criteriaLevelId.value)

const criteriaStore = useCriterias()
criteriaStore.fetchCriteriaById(rubricId.value, criteriaId.value)

const title = ref('')
const point = ref('')
const description = ref('')

const setErrors = ref()
const errors = computed(() => setErrors.value)

function updateCriteriaLevel() {
    criteriaLevelStore.editCriteriaLevel(rubricId.value, criteriaId.value, criteriaLevelId.value, title.value, point.value, description.value, setErrors)
}

watchEffect(() => {
    const updateStatus = criteriaLevelStore.editCriteriaLevelStatus.status

    if ( criteriaLevelStore.editCriteriaLevelStatus.status == '200') {
        criteriaLevelStore.editCriteriaLevelStatus.status = 0
        router.push('/rubrics/' + rubricId.value)
    } else if ( criteriaLevelStore.editCriteriaLevelStatus.status == '409') {
        console.log('failed')
    }
})

function toShowRubric() {
    router.push('/rubrics/' + rubricId.value)
}
</script>

<script>
export default {
    methods: {
        showrubrics() {
            this.$router.push('/showrubrics');
        }
    }
}
</script>

<style>

</style>