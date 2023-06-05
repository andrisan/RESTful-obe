<template>
    <NavRubrics>
        <template #header>
            <h2 class="font-bold text-xl text-gray-800 leading-tight">
                My Rubrics
            </h2>
            <p class="text-gray-500 text-sm">
                Manage rubrics for your courses.
            </p>
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
                    @click="navigate">
                    > facere beatae eos
                </ResponsiveNavLink>
            </router-link>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 pb-6 lg:px-8">
            <div
                class="flex flex-row justify-end mb-3 px-4 sm:px-0 -mr-2 sm:-mr-3">
                <div class="order-5 sm:order-6 mr-2 sm:mr-3">
                    <button
                        class="button-link bg-white shadow font-bold border border-blue-800 rounded-lg"
                        style="padding: 6%; width: 150px"
                        @click="createCriteria">
                        Create Criteria
                    </button>
                </div>
            </div>
        </div>

        <div
            class="bg-white shadow"
            style="margin-left: 10%; margin-right: 10%">
            <div class="container">
                <div class="row">
                    <div class="col" style="margin-top: 3%">
                        <h5 class="font-bold">Facere Beate Eos</h5>
                    </div>
                    <div class="col text-right" style="margin-top: 3%">
                        <h6 class="font-bold">Max Point : 6.25</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Pellentesque vitae sem ac augue hendrerit
                            sollicitudin id quis nisl. Vestibulum ante ipsum
                            primis in faucibus orci luctus et ultrices posuere
                            cubilia curae; Nulla sed arcu vel tellus egestas
                            pharetra. In ac dolor vehicula, iaculis augue et,
                            blandit augue. Aliquam elit mi, sollicitudin non
                            feugiat eget, varius ut nulla.
                        </p>
                    </div>
                </div>
                <div class="row-cols-1 p-3">
                    <h5 class="border p-3">
                        Lesson Learning Outcome: Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit. Pellentesque vitae sem ac
                        augue hendrerit sollicitudin id quis nisl
                    </h5>
                </div>
                <div>
                    <h5>Criteria Levels</h5>
                </div>
                <div class="container">
                    <table class="table p-3 is is-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tittle</th>
                                <th>Point</th>
                                <th>Description</th>
                            </tr>
                            <tr>
                                <th>1</th>
                                <th>lorem ipsum</th>
                                <th>6.25</th>
                                <th>
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. Pellentesque vitae sem ac
                                    augue hendrerit sollicitudin id quis nisl.
                                    Vestibulum ante ipsum primis in faucibus
                                    orci luctus et ultrices posuere cubilia
                                    curae; Nulla sed arcu vel tellus egestas
                                    pharetra. In ac dolor vehicula, iaculis
                                    augue et, blandit augue. Aliquam elit mi,
                                    sollicitudin non feugiat eget, varius ut
                                    nulla.
                                </th>
                            </tr>
                            <tr>
                                <th>2</th>
                                <th>lorem ipsum</th>
                                <th>6.25</th>
                                <th>
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. Pellentesque vitae sem ac
                                    augue hendrerit sollicitudin id quis nisl.
                                    Vestibulum ante ipsum primis in faucibus
                                    orci luctus et ultrices posuere cubilia
                                    curae; Nulla sed arcu vel tellus egestas
                                    pharetra. In ac dolor vehicula, iaculis
                                    augue et, blandit augue. Aliquam elit mi,
                                    sollicitudin non feugiat eget, varius ut
                                    nulla.
                                </th>
                            </tr>
                            <tr>
                                <th>3</th>
                                <th>lorem ipsum</th>
                                <th>6.25</th>
                                <th>
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. Pellentesque vitae sem ac
                                    augue hendrerit sollicitudin id quis nisl.
                                    Vestibulum ante ipsum primis in faucibus
                                    orci luctus et ultrices posuere cubilia
                                    curae; Nulla sed arcu vel tellus egestas
                                    pharetra. In ac dolor vehicula, iaculis
                                    augue et, blandit augue. Aliquam elit mi,
                                    sollicitudin non feugiat eget, varius ut
                                    nulla.
                                </th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </NavRubrics>
</template>

<script setup>
import NavRubrics from '@/components/NavRubrics.vue'
</script>

<style></style>
