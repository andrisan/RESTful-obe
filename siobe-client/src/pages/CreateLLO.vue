<script setup>
import Navbar from '@/components/Navbar.vue'
</script>
<template>
    <div class="bg-gray-200 h-screen pb-10">
        <Navbar />
        <div class="bg-white">
            <div class="nav-assignment px-40 py-6">
                <nav class="bg-white border-gray-200">
                    <div
                        class="flex flex-wrap items-center justify-between mx-auto px-4">
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
            <span>Create LLO</span>
        </div>

        <div class="max-w-screen px-44 mt-4 justify-center">
            <div
                class="p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100">
                <div class="bottom-desc font-sans">
                    <p class="font-normal text-gray-700">
                        Course Learnign Outcome (CLO)
                    </p>
                    <select
                        name=""
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-64 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-4"
                        id="">
                        <option value="">Choose the CLO</option>
                    </select>
                </div>
                <div class="bottom-desc font-sans">
                    <p class="font-normal text-gray-700">
                        Code
                    </p>
                    <input type="text" name=""  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-64 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-4" placeholder="Code">

                </div>
                <div class="bottom-desc font-sans">
                    <p class="font-normal text-gray-700">
                        Description
                    </p>
                    <input type="text" name=""  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-64 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-4" placeholder="Description of lesson learning outcome">

                </div>
                <div class="">

                </div>
            </div>
        </div>
    </div>
</template>
