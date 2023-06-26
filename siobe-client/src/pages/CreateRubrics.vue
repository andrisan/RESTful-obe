<template>
    <NavRubrics>
        <template #header>
            <h2 class="font-bold text-xl text-gray-800 leading-tight">
                New Rubrics
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
                    class="font-bold"
                    style="color: blue"
                    @click="navigate"
                    >Home</ResponsiveNavLink
                >
            </router-link>
            <router-link
                v-slot="{ href, isActive, navigate }"
                to="/rubrics"
                custom>
                <ResponsiveNavLink
                    :href="href"
                    :active="isActive"
                    class="font-bold"
                    style="color: blue"
                    @click="navigate">
                    > Rubrics
                </ResponsiveNavLink>
            </router-link>
            <router-link
                v-slot="{ href, isActive, navigate }"
                to="/createcriterialevel"
                custom>
                <ResponsiveNavLink
                    :href="href"
                    :active="isActive"
                    @click="navigate">
                    > Create
                </ResponsiveNavLink>
            </router-link>
        </div>

        <div
            class="bg-white shadow-sm mt-5 pl-5 mb-4"
            style="margin-left: 10%; margin-right: 10%">
            <ValidationErrors class="mb-4" :errors="errors" />

            <div class="row">
                <div class="col" style="margin-top: 3%">
                    <label class="label">
                        <h5 class="text-gray-500">Title</h5>
                    </label>
                    <div>
                        <input
                            v-model="title"
                            type="text"
                            name="title"
                            placeholder="Title"
                            class="input input-bordered text-gray-500 select-bordered w-full max-w-xs rounded-md" />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="mt-4 mb-4" style="display: flex">
                        <button
                            class="bg-gray-700 border rounded-md"
                            @click="createRubric()"
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
                            @click="toRubric()">
                            Cancel
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </NavRubrics>
</template>

<script setup>
import NavRubrics from '@/components/NavRubrics.vue'
import { computed, ref, watchEffect } from 'vue'
import { useRubrics } from '@/stores/rubric'
import ValidationErrors from '@/components/ValidationErrors.vue'
import { useRouter } from 'vue-router'

const router = useRouter()

const rubricStore = useRubrics()

const setErrors = ref()

const errors = computed(() => setErrors.value)

function createRubric() {
    rubricStore.createRubric(title.value, setErrors)
}

watchEffect(() => {
    const createStatus = rubricStore.createRubricStatus.status

    if (rubricStore.createRubricStatus.status == '201') {
        router.go(-1)
        rubricStore.createRubricStatus.status = 0
    } else if (rubricStore.createRubricStatus.status == 409) {
        console.log('failed')
    }
})

function toRubric() {
    router.push('/rubrics')
}

const title = ref('')
</script>

<script></script>

<style></style>
