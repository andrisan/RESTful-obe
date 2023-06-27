<template>
    <NavRubrics>
        <template #header>
            <h2 class="font-bold text-xl text-gray-800 leading-tight">
                Edit Criteria
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
                :to="'/rubrics/' + rubricId"
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
                    > Edit Criteria
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
                    <select class="select select-bordered w-full max-w-xs rounded-md">
                        <option disabled selected>Choose the LLO</option>
                        <option v-for="llo in llos" :key="llo.id" :value="llo.id">{{ '[' + llo.code + '] ' + llo.description }}</option>
                    </select>
                </div>

                <div class="row">
                    <div class="col" style="margin-top: 3%">
                        <label class="label">
                            <span class="label-text">Criteria Title</span>
                        </label>
                        <div>
                            <input v-model="title" type="text" name="title" :placeholder="criteriaStore.getCriteriaById.title" class="input input-bordered select-bordered w-full max-w-xs"/>
                        </div>
                    </div> 
                </div>

                <div class="row">
                    <div class="col" style="margin-top: 3%">
                        <label class="label">
                            <span class="label-text">Criteria Max Point</span>
                        </label>
                        <div>
                            <input v-model="maxPoint" type="number" name="maxPoint" :placeholder="criteriaStore.getCriteriaById.max_point" class="input input-bordered select-bordered w-full max-w-xs"/>
                        </div>
                    </div> 
                </div>
                
                <div class="row">
                    <div class="col" style="margin-top: 3%">
                        <label class="label">
                            <span class="label-text">Description</span>
                        </label>
                        <div>
                            <textarea v-model="description" class="textarea textarea-bordered select-bordered w-full h-64" :placeholder="criteriaStore.getCriteriaById.description" name="description"/>
                        </div>
                    </div>
                </div>
                
                
                <div class="mt-4 ml-3 mb-4" style="display: flex;">
                    <button @click="editCriteria()" class="bg-gray-700 border rounded-md" style="font-weight: bold; color: white; width: 100px; height: 32px;">SAVE</button>
                    <button class="ml-5 mt-1" style="color: darkslategray;" @click="toShowRubric()">Cancel</button>
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
const rubricId = ref(route.params.rubricId)
const criteriaId = ref(route.params.criteriaId)

console.log(rubricId.value)

const router = useRouter()

const rubricStore = useRubrics()
rubricStore.fetchRubricWithId(rubricId.value)

const criteriaStore = useCriterias()
criteriaStore.fetchCriteriaById(rubricId.value, criteriaId.value)


const title = ref('')
const maxPoint = ref()
const description = ref('')

const setErrors = ref()

const errors = computed(() => setErrors.value)

function editCriteria() {
    criteriaStore.editCriteria(
        rubricId.value,
        criteriaId.value,
        criteriaStore.getCriteriaById.llo_id,
        title.value,
        maxPoint.value,
        description.value,
        setErrors
    )
}

watchEffect(() => {
    const editStatus = criteriaStore.getEditCriteriaStatus.status

    if (criteriaStore.editCriteriaStatus.status == '200') {
        router.go(-1)
        criteriaStore.editCriteriaStatus.status = 0
    } else if (criteriaStore.editCriteriaStatus.status == 409) {
        console.log('failed')
    }
})

function toShowRubric() {
    router.push('/rubrics/' + rubricId.value)
}
</script>

<style scoped>
.select-bordered {
  border-radius: 6px;
}

</style>