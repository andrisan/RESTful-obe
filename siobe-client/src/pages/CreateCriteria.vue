<template>
    <NavRubrics>
        <template #header>
            <h2 class="font-bold text-xl text-gray-800 leading-tight">
                Create New Criteria
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
                    class="font-semibold"
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
                    class="font-semibold"
                    style="color: blue"
                    @click="navigate">
                    > facere beatae eos
                </ResponsiveNavLink>
            </router-link>
            <router-link
                v-slot="{ href, isActive, navigate }"
                to="/createcriteria"
                custom>
                <ResponsiveNavLink
                    :href="href"
                    :active="isActive"
                    class="font-semibold"
                    @click="navigate">
                    > Create Criteria
                </ResponsiveNavLink>
            </router-link>
        </div>

        <div
            class="bg-white shadow-sm mt-5 pl-5 mb-4"
            style="margin-left: 10%; margin-right: 10%">
            <div class="row">
                <div class="title">
                    <div class="col" style="margin-top: 3%">
                        <label class="label">
                            <span class="label-text">Grading LLO</span>
                        </label>
                    </div> 
                    <select class="select select-bordered w-full max-w-xs rounded-md">
                        <option disabled selected>Choose the LLO</option>
                        <option v-for="llo in llos" :key="llo.id" :value="llo.id">{{ '[' + llo.code + '] ' + llo.description }}</option>
                    </select>
                </div>

                <div class="row">
                    <div class="col" style="margin-top: 3%">
                        <label class="label">
                            <span class="label-text">Criteria Title</span>
                        </label>
                        <div>
                            <input type="text" name="title" placeholder="Title" class="input input-bordered select-bordered w-full max-w-xs"/>
                        </div>
                    </div> 
                </div>
                
                <div class="row">
                    <div class="col" style="margin-top: 3%">
                        <label class="label">
                            <span class="label-text">Description</span>
                        </label>
                        <div>
                            <textarea class="textarea textarea-bordered select-bordered w-full h-64" placeholder="Description" name="description"/>
                        </div>
                    </div>
                </div>
                
                
                <div class="mt-4 ml-3 mb-4" style="display: flex;">
                    <button class="bg-gray-700 border rounded-md" style="font-weight: bold; color: white; width: 100px; height: 32px;">SAVE</button>
                    <button class="ml-5 mt-1" style="color: darkslategray;" @click="showrubrics">Cancel</button>
                </div>
            </div>
        </div>
    </NavRubrics>
</template>

<script setup>
import NavRubrics from '@/components/NavRubrics.vue'

</script>

<style scoped>
.select-bordered {
  border-radius: 6px;
}

</style>