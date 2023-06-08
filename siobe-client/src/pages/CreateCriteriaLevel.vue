<template>
    <NavRubrics>
        <template #header>
            <h2 class="font-bold text-xl text-gray-800 leading-tight">New Criteria Level</h2>
            <p class="text-gray-500 text-sm">Criteria: aperiam numquam nesciunt</p>
        </template>
        <div style="margin-top: 2%; margin-left: 10%;">
            <router-link v-slot="{ href, isActive, navigate }" to="/dashboard" custom>
                <ResponsiveNavLink :href="href" :active="isActive" class="font-bold" style="color: blue;" @click="navigate">Home</ResponsiveNavLink>
            </router-link>
            <router-link v-slot="{ href, isActive, navigate }" to="/showrubrics" custom>
                <ResponsiveNavLink :href="href" :active="isActive" class="font-bold" style="color: blue;" @click="navigate"> > facere beatae eos
                </ResponsiveNavLink>
            </router-link>
            <router-link v-slot="{ href, isActive, navigate }" to="/createcriterialevel" custom>
                <ResponsiveNavLink :href="href" :active="isActive" @click="navigate"> > Create Criteria Level
                </ResponsiveNavLink>
            </router-link>
        </div>

        <div
            class="bg-white shadow-sm mt-5 pl-5 mb-4"
            style="margin-left: 10%; margin-right: 10%">
            <div class="row">
                <div class="title">
                    <div class="col" style="margin-top: 3%">
                        <h5 class="font-medium ml-3">Title</h5>
                    </div> 
                    <div>
                        <input class="col ml-3 border border-gray-800 rounded-lg pl-4" placeholder="Level Title" style="width: 360px; height: 48px;" type="text">
                    </div>
                </div>

                <div class="point">
                    <div class="col" style="margin-top: 3%">
                        <h5 class="font-medium ml-3">Point</h5>
                    </div> 
                    <div>
                        <input class="col ml-3 border border-gray-800 rounded-lg pl-4" placeholder="Level Point" style="width: 360px; height: 48px;" type="text">
                    </div>
                </div>

                <div class="desc">
                    <div class="col" style="margin-top: 3%">
                        <h5 class="font-medium ml-3">Description</h5>
                    </div> 
                    <div>
                        <textarea class="col ml-3 border border-gray-800 rounded-lg pl-4" placeholder="Description" style="width: 720px; height: 200px;" type="text"></textarea>
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

import NavRubrics from '@/components/NavRubrics.vue';

</script>

<script>
export default {
    methods: {
        showrubrics() {
            this.$router.push('/showrubrics');
        }
    }
}
</script>

<style>

</style>