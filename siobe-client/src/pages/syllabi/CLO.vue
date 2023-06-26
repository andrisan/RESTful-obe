<script setup>
import PrimaryButton from '@/components/PrimaryButton.vue'
import AuthenticatedLayout from '@/layouts/AuthenticatedLayout.vue'
import { useSyllabiStore } from '@/stores/syllabi.js';
import { onMounted, ref } from 'vue';
import { useRoute } from 'vue-router';

const store = useSyllabiStore();
const route = useRoute();
const id = parseInt(route.params.id);

onMounted(() => {
  store.fetchILO();
});

const form = ref({
    ilo_id: '',
    code: '',
    description: '',
    syllabus_id: id
})

const addDataclo = () => {
    store.addclo(form, id)
}

</script>

<template>
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                New Course Learning Outcome
            </h2>
        </template>

        <main>
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="text-sm breadcrumbs pl-2 py-6 font-bold text-gray-600 ">
                        <ul>
                            <li class="text-blue-600">
                                <a href="">Home</a>
                            </li>
                            <li class="text-blue-600">
                                <a href="">Syllabi</a>
                            </li>
                            <li class="text-blue-600">
                                <a href="">Create</a>
                            </li>
                            <li class="text-blue-600">
                                <a href="">New CLO</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="p-20 bg-white border-b border-gray-200 bottom-6">
                        <form @submit.prevent="addDataclo" method="POST" >
                            <input type="hidden" name="_token" value="">
                            <div class="form-control w-full p-3">
                                <label class="label">
                                    <span class="label-text">Course Learning Outcome</span>
                                </label>
                                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"></div>
                                <select class="select select-bordered w-full max-w-xs" name="course_id" v-model="form.ilo_id">
                                    <option v-for="ilo in store.ilos" :value="ilo.id" :key="ilo.id">
                                        {{ ilo.name }}
                                    </option>
                                </select>
                            </div>

                            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"></div>
                            <div class="form-control w-full p-3">
                                <label class="label">
                                    <span class="label-text">Code</span>
                                </label><br>
                                <input type="text" name="title" placeholder="Code"
                                    class="input input-bordered w-full max-w-xs" v-model="form.code">
                            </div>

                            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"></div>
                            <div class="form-control w-full p-3">
                                <label class="label">
                                    <span class="label-text">Describe</span>
                                </label><br>
                                <textarea v-model="form.description" class="textarea textarea-bordered w-full lg:w-3/4 h-64"
                                    placeholder="Describe of course learning outcome" name="author"></textarea>
                            </div>
                            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"></div>
                            <div class="mt-4 p-4 space-x-2">
                                <PrimaryButton type="submit">Save</PrimaryButton>
                                <a href="/syllabi">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </AuthenticatedLayout>
</template>

<style>
textarea {
    width: 100%;
    height: 150px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 13px;
    background-color: #f9f9f9;
    font-size: 16px;
    text-decoration-color: #ccc;
    resize: none;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #f9f9f9;
}

li {
    float: left;
}

li a {
    display: block;
    color: blue;
    text-align: center;
    padding: 16px;
    text-decoration: none;
}
</style>
