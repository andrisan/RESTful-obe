<script setup>
import AuthenticatedLayout from '@/layouts/AuthenticatedLayout.vue'
</script>

<template>
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Edit Learning Plan
            </h2>
        </template>

        <div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <!-- second-header -->
                <div class="text-sm pl-2 py-6 font-semibold text-gray-600 flex items-center">
                    <ul class="flex space-x-2.5">
                        <li class="text-blue-600">
                            <a href="http://127.0.0.1:3000/home">
                                Home
                            </a>
                        </li>
                        <li class="pt-1.5">
                            <svg class="h-2 w-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="grey">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l9-9-9-9" /></svg>
                        </li>
                        <li class="text-blue-600">
                            <a href="http://127.0.0.1:3000/syllabi/1">
                                Example of Syllabi
                            </a>
                        </li>
                        <li class="pt-1.5">
                            <svg class="h-2 w-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="grey">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l9-9-9-9" /></svg>
                        </li>
                        <li class="text-blue-600">
                            <a href="http://127.0.0.1:3000/syllabi/1">
                                Learning Plans
                            </a>
                        </li>
                        <li class="pt-1.5">
                            <svg class="h-2 w-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="grey">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l9-9-9-9" /></svg>
                        </li>
                        <li>
                            Edit
                        </li>
                    </ul>
                </div>

                <!-- body-start -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <form
                            method="POST"
                            action="http://127.0.0.1:3000/syllabi/1/learning-plans/1">
                            <input type="hidden" name="_token" value="GMBo3eU00NQjfCq7kfuj6evRZuwlhqmKU5awnWz0">
                            
                            <div class="form-control w-full p-3">
                                <div>
                                    <label class="label">
                                        <span class="label-text">LLO</span>
                                    </label>
                                </div>
                                <div class="py-2">
                                    <select class="select w-full max-w-xs bg-white border-gray-300 rounded-md shadow-sm sm:px-4 py-3 inline-flex justify-center text-sm font-regular text-gray-800 hover:bg-gray-50 focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                        name="llo_id">
                                        <option disabled selected>
                                            Choose the LLO
                                        </option>
                                        <option value="13" selected>[4] test</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-control w-full p-3">
                                <div>
                                    <label class="label">
                                        <span class="label-text">Week Number</span>
                                    </label>
                                </div>
                                <div class="py-2">
                                    <input
                                        type="number"
                                        name="week_number"
                                        placeholder="Week Number"
                                        class="input w-full max-w-xs bg-white border-gray-300 rounded-md shadow-sm sm:px-4 py-3 inline-flex justify-center text-sm font-regular text-gray-800 hover:bg-gray-50 focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                        value="1" />
                                </div>
                            </div>

                            <div class="form-control w-full p-3">
                                <div>
                                    <label class="label">
                                        <span class="label-text">Study Material</span>
                                    </label>
                                </div>
                                <div class="py-2">
                                    <textarea name="study_material" placeholder="Study Material"
                                        class="textarea text-neutral input-bordered bg-white w-full max-w-xl border-gray-300 rounded-md shadow-sm sm:px-4 py-3 inline-flex justify-center text-sm font-regular text-gray-800 hover:bg-gray-50 focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                        spellcheck="false">This is Study Material
                                    </textarea>
                                </div>
                            </div>

                            <div class="form-control w-full px-3">
                                <div>
                                    <label class="label">
                                        <span class="label-text">Learning Method</span>
                                    </label>
                                </div>
                                <div class="py-2">
                                    <textarea name="learning_method" placeholder="Learning Method"
                                        class="textarea text-neutral input-bordered bg-white w-full max-w-xl border-gray-300 rounded-md shadow-sm sm:px-4 py-3 inline-flex justify-center text-sm font-regular text-gray-800 hover:bg-gray-50 focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                        spellcheck="false">This is Learning Method
                                    </textarea>
                                </div>
                            </div>

                            <div class="form-control w-full p-3">
                                <div>
                                    <label class="label">
                                        <span class="label-text">Estimated Time</span>
                                    </label>
                                </div>
                                <div class="py-2">
                                    <input type="text" name="estimated_time" placeholder="Estimated Time"
                                        class="input w-full max-w-xs bg-white border-gray-300 rounded-md shadow-sm sm:px-4 py-3 inline-flex justify-center text-sm font-regular text-gray-800 hover:bg-gray-50 focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                        value="1 Month" />
                                </div>
                            </div>

                            <div class="mt-4 p-4 space-x-2">
                                <button type="submit" class="btn btn-sm px-7 py-1 bg-gray-700 rounded-md shadow-sm inline-flex justify-center text-base font-regular text-white hover:bg-gray-800">
                                    SAVE
                                </button>
                                <a href="javascript:history.back()"> Cancel </a>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- body-end -->
            </div>
        </div>
    </AuthenticatedLayout>
</template>
