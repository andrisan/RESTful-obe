<template>
<NavRubrics>
    <template #header>
        <h2 class="font-bold text-xl text-gray-800 leading-tight">
            My Rubrics
        </h2>
        <p class="text-gray-500 text-sm">Manage rubrics for your courses.</p>
    </template>

    <div style="margin-top: 2%; margin-left: 10%;">
      <router-link v-slot="{ href, isActive, navigate }" to="/dashboard" custom>
        <ResponsiveNavLink :href="href" :active="isActive" class="font-bold" style="color: blue;" @click="navigate">
          Home
        </ResponsiveNavLink>
      </router-link>
      <router-link v-slot="{ href, isActive, navigate }" to="/rubrics" custom>
        <ResponsiveNavLink :href="href" :active="isActive" @click="navigate">
          > facere beatae eos
        </ResponsiveNavLink>
      </router-link>
    </div>

    <div class="max-w-7xl mx-auto sm:px-6 pb-6 lg:px-8">
        <div class="flex flex-row justify-end mb-3 px-4 sm:px-0 -mr-2 sm:-mr-3">
            <div class="order-5 sm:order-6 mr-2 sm:mr-3">
                <button class="button-link bg-white shadow font-bold border border-blue-800 rounded-lg" style="padding: 6%; width: 150px;" @click="createCriteria">
                Create Criteria
                </button>
            </div>
        </div>
    </div>
    
    <div class="bg-white shadow" style="margin-left: 10%; margin-right: 10%;">
    <div class="container">
        <div class="row">
            <div class="col" style="margin-top: 3%;">
                <h5 class="font-bold">Facere Beate Eos</h5>
            </div>
            <div class="col text-right" style="margin-top: 3%;">
                <h6 class="font-bold">Max Point : 6.25</h6>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p>Ut placeat rem sed.</p>
            </div>
        </div>
    </div>
</div>

</NavRubrics>
</template>

<script setup>
import NavRubrics from '@/components/NavRubrics.vue';
</script>

<style>

</style>