<template>
    <NavRubrics>
        <template #header>
            <h2 class="font-bold text-xl text-gray-800 leading-tight">
                New Rubrics
            </h2>
        </template>

        <div style="margin-top: 2%; margin-left: 10%;">
            <router-link v-slot="{ href, isActive, navigate }" to="/dashboard" custom>
                <ResponsiveNavLink :href="href" :active="isActive" class="font-bold" style="color: blue;" @click="navigate">Home</ResponsiveNavLink>
            </router-link>
            <router-link v-slot="{ href, isActive, navigate }" to="/showrubrics" custom>
                <ResponsiveNavLink :href="href" :active="isActive" class="font-bold" style="color: blue;" @click="navigate"> > sapiente nostrum eligendi
                </ResponsiveNavLink>
            </router-link>
            <router-link v-slot="{ href, isActive, navigate }" to="/createcriterialevel" custom>
                <ResponsiveNavLink :href="href" :active="isActive" @click="navigate"> > Create
                </ResponsiveNavLink>
            </router-link>
        </div>

        <div
            class="bg-white shadow-sm mt-5 pl-5 mb-4"
            style="margin-left: 10%; margin-right: 10%">
        
            <div class="row">
                <div class="col" style="margin-top: 3%">
                    <label class="label">
                        <h5 class="text-gray-500">Title</h5>                        
                    </label>
                    <div>
                        <input type="text" name="title" placeholder="Title" class="input input-bordered text-gray-500 select-bordered w-full max-w-xs rounded-md"/>
                    </div>
                </div> 
            </div>

            <div class="row">
                <div class="col">
                    <div class="mt-4 mb-4" style="display: flex;">
                        <button class="bg-gray-700 border rounded-md" style="font-weight: bold; color: white; width: 100px; height: 32px;">SAVE</button>
                        <button class="ml-5 mt-1" style="color: darkslategray;" @click="showrubrics">Cancel</button>
                    </div>
                </div>
            </div>

        </div>
    </NavRubrics>
</template>

<script setup>
import NavRubrics from '@/components/NavRubrics.vue'
</script>

<script>
</script>

<style></style>
