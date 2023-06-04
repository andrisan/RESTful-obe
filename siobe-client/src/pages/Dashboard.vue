<script setup>
import AuthenticatedLayout from '@/layouts/AuthenticatedLayout.vue'
</script>

<template>
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-4">
                <div class="flex w-full grid-flow-row grid-cols-12 items-start gap-4 overflow-y-hidden overflow-x-scroll px-10 pt-1 pb-10 xl:grid xl:overflow-x-auto xl:px-4">
                    <div
                        class="bg-white rounded-box col-span-3 row-span-3 mx-2 sm:rounded-xl grid w-72 flex-shrink-0 place-items-center items-center gap-4 p-4 py-8 shadow-xl xl:mx-0 xl:w-full">
                        <div>
                            <div class="avatar">
                                <div
                                    class="bg-base-content h-24 w-24 bg-opacity-10 p-px">
                                    <img
                                        src="https://avatars.dicebear.com/api/initials/A.svg"
                                        width="94"
                                        height="94"
                                        alt="Admin"
                                        class="sm:rounded-2xl" />
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="w-full">
                                <div class="text-center">
                                    <div class="text-lg font-bold">
                                        Admin
                                    </div>
                                    <div
                                        class="text-base-content/70 my-3 text-sm">
                                        admin@siobe.com
                                    </div>
                                </div>
                                <div class="mt-2 text-center">
                                    <div class="badge badge-ghost">admin</div>
                                </div>
                            </div>
                        </div>
                        <a
                            href="http://127.0.0.1:3000/profile"
                            class="btn btn-accent btn-sm">
                            Go to profile
                        </a>
                    </div>

                    <div
                        class="col-span-3 row-span-1 mx-2 grid w-72 flex-shrink-0 gap-4 xl:mx-0 xl:w-auto svelte-1n6ue57">
                        <div
                            class="bg-slate-300 text-accent-content sm:rounded-xl p-4 shadow-xl">
                            <div class="flex items-center">
                                <div class="flex-1 px-2">
                                    <h2 class="text-3xl font-bold">1</h2>
                                    <p class="text-sm text-opacity-80">
                                        Fakultas
                                    </p>
                                </div>
                                <div class="flex-0">
                                    <div class="flex space-x-1">
                                        <a
                                            href="http://127.0.0.1:3000/faculties"
                                            aria-label="button component"
                                            class="btn-ghost btn-square">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                fill="none"
                                                viewBox="0 0 24 24"
                                                class="inline-block h-6 w-6 stroke-current">
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-1 px-2 pt-4">
                                <h2 class="text-3xl font-bold">1</h2>
                                <p class="text-sm text-opacity-80">
                                    Departemen
                                </p>
                            </div>
                            <div class="flex-1 px-2 pt-4">
                                <h2 class="text-3xl font-bold">1</h2>
                                <p class="text-sm text-opacity-80">
                                    Program Studi
                                </p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="bg-white sm:rounded-xl col-span-3 row-span-3 mx-2 flex w-72 flex-shrink-0 flex-col justify-center gap-4 p-4 shadow-xl xl:mx-0 xl:w-full">
                        <div class="px-1 pt-3">
                            <div class="text-xl font-bold pb-2">
                                Mata Kuliah
                            </div>
                            <div class="text-base-content">
                                <ul class="menu overflow-visible p-0">
                                    <li>
                                        <a
                                            href="http://127.0.0.1:3000/courses/1">
                                            Dolorem dicta qui non doloribus qui quaerat.
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <a
                            href="http://127.0.0.1:3000/courses"
                            class="btn btn-secondary btn-block space-x-2">
                            <span>Selengkapnya</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<style scoped>
    .btn-sm {
        height: 2rem;
        padding-left: 0.75rem;
        padding-right: 0.75rem;
        min-height: 2rem;
        font-size: 0.875rem;
    }
    .btn-accent {
        --tw-border-opacity: 1;
        border-color: hsl(var(--a) / var(--tw-border-opacity));
        --tw-bg-opacity: 1;
        background-color: hsl(var(--a) / var(--tw-bg-opacity));
        --tw-text-opacity: 1;
        color: hsl(var(--ac) / var(--tw-text-opacity));
    }
    .btn {
        display: inline-flex;
        flex-shrink: 0;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        border-color: transparent;
        border-color: hsl(var(--n) / var(--tw-border-opacity));
        text-align: center;
        transition-property: color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
        transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
        transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
        transition-duration: 200ms;
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        border-radius: var(--rounded-btn, 0.5rem);
        height: 3rem;
        padding-left: 1rem;
        padding-right: 1rem;
        font-size: 0.875rem;
        line-height: 1.25rem;
        line-height: 1em;
        min-height: 3rem;
        font-weight: 600;
        text-transform: uppercase;
        text-transform: var(--btn-text-case, uppercase);
        -webkit-text-decoration-line: none;
        text-decoration-line: none;
        border-width: var(--border-btn, 1px);
        -webkit-animation: button-pop var(--animation-btn, 0.25s) ease-out;
        animation: button-pop var(--animation-btn, 0.25s) ease-out;
        --tw-border-opacity: 1;
        --tw-bg-opacity: 1;
        background-color: hsl(var(--n) / var(--tw-bg-opacity));
        --tw-text-opacity: 1;
        color: hsl(var(--nc) / var(--tw-text-opacity));
    }
</style>