<template>

    <template>
        <div class="bg-gray-200 h-screen pb-10">
            <Navbar />
            <div class="bg-white">
                <div class="nav-assignment px-40 py-6">
                    <nav class="bg-white border-gray-200">
                        <div class="flex flex-wrap items-center justify-between mx-auto px-4">
                            <p class="text-2xl font-bold font-sans">
                                New Lesson Learning Outcome
                            </p>
                        </div>
                    </nav>
                </div>
            </div>
    
            <div class="section-halaman px-44 mt-5 text-blue-500 font-semibold">
                <a href="#" class="nav-link">Home</a> <span> > </span>
                <a href="#">Syllabi > </a>
                <a href="#">Pemrograman Pro </a>
                <span> > </span>
                <span>Update LLO</span>
            </div>
    
            <div class="max-w-screen px-44 mt-4 justify-center">
                <div class="p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100">
                    <div class="bottom-desc font-sans">
                        <p class="font-normal text-gray-700">
                            Course Learnign Outcome (CLO)
                        </p>    
                    </div>
                    <div class="bottom-desc font-sans">
                        <p class="font-normal text-gray-700">
                            Description
                        </p>
                        <input type="text" v-model="description"
                            class="bg-gray-50 border border-gray-500 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/4 p-2.5 mt-3"
                            placeholder="Description of lesson learning outcome">
    
                    </div>
                    <div class="flex mt-5">
                        <button @click="lloStore.updateLlo(lloId, description)" class="bg-gray-700 border rounded-md"
                            style="font-weight: bold; color: white; width: 100px; height: 32px;">SAVE</button>
                        <button class="text-gray-600 hover:bg-gray-100 py-2 px-4 rounded-lg">
                            Cancel
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </template>

</template>

<script setup>
import { useRoute } from 'vue-router';
import { useLlo } from '@/stores/llo';
import { ref } from 'vue';

const route = useRoute();
const lloId = ref(route.params.id)

const lloStore = useLlo()
const description = ref('')
</script>