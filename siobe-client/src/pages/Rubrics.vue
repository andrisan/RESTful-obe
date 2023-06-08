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
                    > Rubrics
                </ResponsiveNavLink>
            </router-link>
        </div>

        <div style="margin-left: 10%; margin-top: 2%; margin-right: 10%">
            <table
                class="border-collapse table-auto w-full bg-white table-striped relative">
                <thead>
                    <tr class="text-left">
                        <th
                            class="bg-gray-50 sticky top-0 border-b border-gray-100 px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs truncate w-6">
                            No
                        </th>
                        <th
                            class="bg-gray-50 sticky top-0 border-b border-gray-100 px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs truncate w-64">
                            Title
                        </th>
                        <th
                            class="bg-gray-50 sticky top-0 border-b border-gray-100 px-6 py-3 text-gray-500 font-bold tracking-wider uppercase text-xs truncate w-48">
                            Action
                        </th>
                    </tr>
                </thead>
                <tr>
                    <td
                        class="text-gray-600 font-semibold px-6 py-3 border-t border-gray-100">
                        1
                    </td>
                    <td
                        class="text-gray-600 font-semibold px-6 py-3 border-t border-gray-100">
                        facere beatae eos
                    </td>
                    <td
                        class="text-gray-600 px-6 py-3 border-t border-gray-100">
                        <div class="flex flex-wrap space-x-4">
                            <a
                                href="#"
                                class="text-blue-700 font-semibold"
                                style="text-decoration: none">
                                <router-link
                                    v-slot="{ href, isActive, navigate }"
                                    to="/showrubrics"
                                    custom>
                                    <ResponsiveNavLink
                                        :href="href"
                                        :active="isActive"
                                        @click="navigate">
                                        Detail
                                    </ResponsiveNavLink>
                                </router-link>
                            </a>
                            <a
                                href="#"
                                class="text-darkblue-700 font-semibold"
                                style="text-decoration: none"
                                >Edit</a
                            >
                            <form
                                method="POST"
                                action="{{ route('rubrics.criterias.criteria-levels.destroy', [$rubric, $criteria, $criteriaLevel]) }}">
                                <button
                                    class="text-red-500 font-semibold"
                                    style="text-decoration: none"
                                    onclick="event.preventDefault(); confirm('Are you sure?') && this.closest('form').submit();">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </NavRubrics>
</template>

<script setup>
import NavRubrics from '@/components/NavRubrics.vue'
</script>

<script>
export default {
    methods: {
        createcriterialevel() {
            this.$router.push('/editRubric')
        },
    },
}
</script>

<style></style>
