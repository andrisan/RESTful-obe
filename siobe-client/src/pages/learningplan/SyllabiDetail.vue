<script setup>
import AuthenticatedLayout from '@/layouts/AuthenticatedLayout.vue'
</script>

<template>
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Example of Syllabi
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
                            <a href="http://127.0.0.1:3000/syllabi">
                                Syllabi
                            </a>
                        </li>
                        <li class="pt-1.5">
                            <svg class="h-2 w-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="grey">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l9-9-9-9" /></svg>
                        </li>
                        <li>
                            Example of Syllabi
                        </li>
                    </ul>
                </div>

                <!-- body-start -->
                <div
                    class="flex flex-row justify-between mb-3 sm:px-0 -mr-2 sm:-mr-3">
                    <h2 class="text-xl font-semibold px-2 py-1">
                        Basic Information
                    </h2>
                    <div class="order-5 sm:order-6 mr-2 sm:mr-3">
                        <div
                            class="w-full bg-white border border-gray-300 rounded-md shadow-sm px-2.5 sm:px-4 py-2 inline-flex justify-center text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            <span class="pr-1">
                                <i class="fa fa-edit"></i> Edit Basic Information
                            </span>
                        </div>
                    </div>
                </div>

                <div class="py-2">
                    <div
                        class="w-full h-full overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="bg-white p-4 shadow-sm rounded-sm">
                            <div class="p-4">
                                <div class="text-base-content">
                                    <h2 class="text-xl font-semibold text-gray-500 px-2 py-2">
                                        Syllabus Information
                                    </h2>
                                    <div class="px-2">
                                        <table class="table-auto w-full">
                                            <tbody>
                                                <tr>
                                                    <td class="px-4 py-2 font-semibold w-64 align-top">
                                                        Title
                                                    </td>
                                                    <td class="px-4 py-2 w-8 align-top">
                                                        :
                                                    </td>
                                                    <td class="px-4 py-2">
                                                        Example of Syllabi
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-2 font-semibold w-64 align-top">
                                                        Author
                                                    </td>
                                                    <td class="px-4 py-2 w-8 align-top">
                                                        :
                                                    </td>
                                                    <td class="px-4 py-2">
                                                        Author
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-2 font-semibold w-64 align-top">
                                                        Head of Study Program
                                                    </td>
                                                    <td class="px-4 py-2 w-8 align-top">
                                                        :
                                                    </td>
                                                    <td class="px-4 py-2">
                                                        Andri Santoso
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <h2
                                        class="text-xl font-semibold text-gray-500 px-2 py-2 mt-5">
                                        Course Information
                                    </h2>
                                    <div class="px-2">
                                        <table class="table-auto w-full">
                                            <tbody>
                                                <tr>
                                                    <td class="px-4 py-2 font-semibold w-64 align-top">
                                                        Course Code
                                                    </td>
                                                    <td class="px-4 py-2 w-8 align-top">
                                                        :
                                                    </td>
                                                    <td class="px-4 py-2">
                                                        idnac
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-2 font-semibold w-64 align-top">
                                                        Course Name
                                                    </td>
                                                    <td class="px-4 py-2 w-8 align-top">
                                                        :
                                                    </td>
                                                    <td class="px-4 py-2">
                                                        Dolorem dicta qui non doloribus qui quaerat.
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-2 font-semibold w-64 align-top">
                                                        Course Type
                                                    </td>
                                                    <td class="px-4 py-2 w-8 align-top">
                                                        :
                                                    </td>
                                                    <td class="px-4 py-2">
                                                        Mandatory
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-2 font-semibold w-64 align-top">
                                                        Description
                                                    </td>
                                                    <td class="px-4 py-2 w-8 align-top">
                                                        :
                                                    </td>
                                                    <td class="px-4 py-2">
                                                        Neque atque minima eum rerum assumenda labore distinctio omnis officia excepturi eos libero et voluptas quibusdam non omnis saepe laborum accusantium mollitia est vero numquam quibusdam voluptate aut qui.
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-2 font-semibold w-64 align-top">
                                                        Course Credit
                                                    </td>
                                                    <td class="px-4 py-2 w-8 align-top">
                                                        :
                                                    </td>
                                                    <td class="px-4 py-2">2</td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-2 font-semibold w-64 align-top">
                                                        Practicum Credit
                                                    </td>
                                                    <td class="px-4 py-2 w-8 align-top">
                                                        :
                                                    </td>
                                                    <td class="px-4 py-2">0</td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-2 font-semibold w-64 align-top">
                                                        Minimal Requirement
                                                    </td>
                                                    <td class="px-4 py-2 w-8 align-top">
                                                        :
                                                    </td>
                                                    <td class="px-4 py-2">
                                                        Perferendis consequatur quo.
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-2 font-semibold w-64 align-top">
                                                        Study Material Summary
                                                    </td>
                                                    <td class="px-4 py-2 w-8 align-top">
                                                        :
                                                    </td>
                                                    <td class="px-4 py-2">
                                                        Cupiditate ducimus quae sint corporis quod.
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-2 font-semibold w-64 align-top">
                                                        Learning Media
                                                    </td>
                                                    <td class="px-4 py-2 w-8 align-top">
                                                        :
                                                    </td>
                                                    <td class="px-4 py-2">
                                                        Doloremque veniam animi commodi quo.
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pt-5">
                    <div
                        class="flex flex-row justify-between mb-3 sm:px-0 -mr-2 sm:-mr-3">
                        <h2 class="text-xl font-semibold px-2 py-1">
                            Intended Learning Outcome (ILO)
                        </h2>
                        <div class="order-5 sm:order-6 mr-2 sm:mr-3">
                            <div class="w-full bg-white border border-gray-300 rounded-md shadow-sm px-2.5 sm:px-4 py-2 inline-flex justify-center text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                <span class="pr-1">
                                    <i class="fa fa-plus"></i> Create New ILO
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="py-2">
                        <div
                            class="mb-5 overflow-x-auto bg-white rounded-lg shadow overflow-y-auto relative">
                            <table
                                class="border-collapse table-auto w-full bg-white table-striped relative">
                                <thead>
                                    <tr class="text-left">
                                        <th class="bg-gray-50 sticky top-0 border-b border-gray-100 px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs truncate w-6">
                                            No
                                        </th>
                                        <th class="bg-gray-50 sticky top-0 border-b border-gray-100 px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs truncate w-32">
                                            Code
                                        </th>
                                        <th class="bg-gray-50 sticky top-0 border-b border-gray-100 px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs truncate">
                                            Description
                                        </th>
                                        <th class="bg-gray-50 sticky top-0 border-b border-gray-100 px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs truncate w-32">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-gray-600 px-6 py-3 border-t border-gray-100">
                                            1
                                        </td>
                                        <td class="text-gray-600 px-6 py-3 border-t border-gray-100 font-semibold">
                                            2
                                        </td>
                                        <td class="text-gray-600 px-6 py-3 border-t border-gray-100">
                                            test
                                        </td>
                                        <td class="text-gray-600 px-6 py-3 border-t border-gray-100">
                                            <div class="flex space-x-4">
                                                <div class="text-blue-500"><i class="fa fa-edit"></i>
                                                    edit
                                                </div>
                                                <div class="text-red-500"><i class="fa fa-edit"></i>
                                                    delete
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="pt-5">
                    <div
                        class="flex flex-row justify-between mb-3 sm:px-0 -mr-2 sm:-mr-3">
                        <h2 class="text-xl font-semibold px-2 py-1">
                            Course Learning Outcome (CLO)
                        </h2>
                        <div class="order-5 sm:order-6 mr-2 sm:mr-3">
                            <div class="w-full bg-white border border-gray-300 rounded-md shadow-sm px-2.5 sm:px-4 py-2 inline-flex justify-center text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                <span class="pr-1">
                                    <i class="fa fa-plus"></i> Create New CLO
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="py-2">
                        <div
                            class="overflow-x-auto bg-white rounded-lg shadow overflow-y-auto relative">
                            <table
                                class="border-collapse table-auto w-full bg-white table-striped relative">
                                <thead>
                                    <tr class="text-left">
                                        <th class="bg-gray-50 sticky top-0 border-b border-gray-100 px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs truncate w-6">
                                            No
                                        </th>
                                        <th class="bg-gray-50 sticky top-0 border-b border-gray-100 px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs truncate w-32">
                                            Code
                                        </th>
                                        <th class="bg-gray-50 sticky top-0 border-b border-gray-100 px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs truncate">
                                            Description
                                        </th>
                                        <th class="bg-gray-50 sticky top-0 border-b border-gray-100 px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs truncate w-32">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-gray-600 px-6 py-3 border-t border-gray-100">
                                            1
                                        </td>
                                        <td class="text-gray-600 px-6 py-3 border-t border-gray-100 font-semibold">
                                            840799
                                        </td>
                                        <td class="text-gray-600 px-6 py-3 border-t border-gray-100">
                                            test
                                            <span
                                                class="font-semibold text-gray-400"
                                                >[2]</span
                                            >
                                        </td>
                                        <td class="text-gray-600 px-6 py-3 border-t border-gray-100">
                                            <div class="flex space-x-4">
                                                <div class="text-blue-500"><i class="fa fa-edit"></i>
                                                    edit
                                                </div>
                                                <div class="text-red-500"><i class="fa fa-edit"></i>
                                                    delete
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="pt-5">
                    <div
                        class="flex flex-row justify-between mb-3 sm:px-0 -mr-2 sm:-mr-3">
                        <h2 class="text-xl font-semibold px-2 py-1">
                            Lesson Learning Outcome (LLO)
                        </h2>
                        <div class="order-5 sm:order-6 mr-2 sm:mr-3">
                            <div class="w-full bg-white border border-gray-300 rounded-md shadow-sm px-2.5 sm:px-4 py-2 inline-flex justify-center text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                <span class="pr-1">
                                    <i class="fa fa-plus"></i> Create New LLO
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="py-2">
                        <div
                            class="mb-5 overflow-x-auto bg-white rounded-lg shadow overflow-y-auto relative">
                            <table
                                class="border-collapse table-auto w-full bg-white table-striped relative">
                                <thead>
                                    <tr class="text-left">
                                        <th class="bg-gray-50 sticky top-0 border-b border-gray-100 px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs truncate w-6">
                                            No
                                        </th>
                                        <th class="bg-gray-50 sticky top-0 border-b border-gray-100 px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs truncate w-32">
                                            Code
                                        </th>
                                        <th class="bg-gray-50 sticky top-0 border-b border-gray-100 px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs truncate">
                                            Description
                                        </th>
                                        <th class="bg-gray-50 sticky top-0 border-b border-gray-100 px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs truncate w-32">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-gray-600 px-6 py-3 border-t border-gray-100">
                                            1
                                        </td>
                                        <td class="text-gray-600 px-6 py-3 border-t border-gray-100 font-semibold">
                                            4
                                        </td>
                                        <td class="text-gray-600 px-6 py-3 border-t border-gray-100">
                                            tset
                                            <span
                                                class="font-semibold text-gray-400"
                                                >[840799]</span
                                            >
                                        </td>
                                        <td class="text-gray-600 px-6 py-3 border-t border-gray-100">
                                            <div class="flex space-x-4">
                                                <div class="text-blue-500"><i class="fa fa-edit"></i>
                                                    edit
                                                </div>
                                                <div class="text-red-500"><i class="fa fa-edit"></i>
                                                    delete
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="pt-5">
                    <div
                        class="flex flex-row justify-between mb-3 sm:px-0 -mr-2 sm:-mr-3">
                        <h2 class="text-xl font-semibold px-2 py-1">
                            Weekly Learning Plan
                        </h2>
                        <div class="order-5 sm:order-6 mr-2 sm:mr-3">
                            <a class="w-full bg-white border border-gray-300 rounded-md shadow-sm px-2.5 sm:px-4 py-2 inline-flex justify-center text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                href="http://127.0.0.1:3000/syllabi/1/learning-plans/create">
                                <span class="pr-1">
                                    <i class="fa fa-plus"></i> Create New Learning Plan
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="py-2">
                        <div
                            class="mb-5 overflow-x-auto bg-white rounded-lg shadow overflow-y-auto relative">
                            <table
                                class="border-collapse table-auto w-full bg-white table-striped relative">
                                <thead>
                                    <tr class="text-left">
                                        <th class="bg-gray-50 sticky top-0 border-b border-gray-100 px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs truncate w-6">
                                            Week
                                        </th>
                                        <th class="bg-gray-50 sticky top-0 border-b border-gray-100 px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs truncate w-128">
                                            LLO
                                        </th>
                                        <th class="bg-gray-50 sticky top-0 border-b border-gray-100 px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs truncate w-128">
                                            Study Material
                                        </th>
                                        <th class="bg-gray-50 sticky top-0 border-b border-gray-100 px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs truncate">
                                            Learning Method
                                        </th>
                                        <th class="bg-gray-50 sticky top-0 border-b border-gray-100 px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs truncate">
                                            Estimated Time
                                        </th>
                                        <th class="bg-gray-50 sticky top-0 border-b border-gray-100 px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs truncate w-32">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-gray-600 px-6 py-3 border-t border-gray-100">
                                            1
                                        </td>
                                        <td class="text-gray-600 px-6 py-3 border-t border-gray-100">
                                            4
                                        </td>
                                        <td class="text-gray-600 px-6 py-3 border-t border-gray-100">
                                            testtttt
                                        </td>
                                        <td class="text-gray-600 px-6 py-3 border-t border-gray-100">
                                            test
                                        </td>
                                        <td class="text-gray-600 px-6 py-3 border-t border-gray-100">
                                            test
                                        </td>
                                        <td class="text-gray-600 px-6 py-3 border-t border-gray-100">
                                            <div class="flex space-x-4">
                                                <a href="http://127.0.0.1:3000/syllabi/1/learning-plans/1/edit"
                                                    class="text-blue-500"><i class="fa fa-edit"></i>
                                                    edit
                                                </a>
                                                <form method="POST" action="http://127.0.0.1:3000/syllabi/1/learning-plans/1">
                                                    <input type="hidden" name="_token" value="GMBo3eU00NQjfCq7kfuj6evRZuwlhqmKU5awnWz0" />
                                                    <input type="hidden" name="_method" value="delete" />
                                                    <button class="text-red-500" onclick="event.preventDefault(); confirm('Are you sure?') &amp;&amp; this.closest('form').submit();">
                                                        <i class="fa fa-trash"></i>
                                                        delete
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="pt-5">
                    <div
                        class="flex flex-row justify-between mb-3 sm:px-0 -mr-2 sm:-mr-3">
                        <h2 class="text-xl font-semibold px-2 py-1">
                            Assignment Plan
                        </h2>
                        <div class="order-5 sm:order-6 mr-2 sm:mr-3">
                            <div class="w-full bg-white border border-gray-300 rounded-md shadow-sm px-2.5 sm:px-4 py-2 inline-flex justify-center text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                <span class="pr-1">
                                    <i class="fa fa-plus"></i> Create New Assignment Plan
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="py-2">
                        <div
                            class="w-full h-full overflow-hidden shadow-sm sm:rounded-lg">
                            <div
                                class="bg-white p-5 shadow-sm rounded-sm text-center">
                                <p class="text-gray-500">
                                    No assignment plan found.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- body-end -->
            </div>
        </div>
    </AuthenticatedLayout>
</template>
