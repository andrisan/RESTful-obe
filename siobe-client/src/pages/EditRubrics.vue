<template>
    <NavRubrics>
        <template #header>
            <h2 class="font-bold text-xl text-gray-800 leading-tight">
                Edit Rubric
            </h2>
        </template>

        <div
            class="bg-white shadow-sm mt-5 pl-5 mb-4"
            style="margin-left: 10%; margin-right: 10%">
            <div class="row">
                <div class="title">
                    <div class="col" style="margin-top: 3%">
                        <h5 class="font-medium ml-3">Rubric title</h5>
                    </div>
                    <div>
                        <input
                            v-model="title"
                            class="col ml-3 border border-gray-800 rounded-lg pl-4"
                            :placeholder="rubricStore.getShowRubric.title"
                            style="width: 360px; height: 48px"
                            type="text" />
                    </div>
                </div>
                <div class="mt-4 ml-3 mb-4" style="display: flex">
                    <button
                        @click="rubricStore.updateRubric(rubricId, title)"
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
import { useRoute } from 'vue-router';
import { useRubrics } from '@/stores/rubric';
import { ref } from 'vue';

const route = useRoute();
const rubricId = ref(route.params.id)

const rubricStore = useRubrics()
rubricStore.fetchRubricWithId(rubricId.value)

const title = ref('')
</script>

<script>
export default {
    methods: {
        showrubrics() {
            this.$router.push('/rubrics')
        },
    },
}
</script>

<style></style>
