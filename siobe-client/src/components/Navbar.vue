<template>
    <nav class="bg-white border-gray-200">
        <div
            class="max-w-screen-xl flex items-center justify-between py-4"
            style="padding-left: 5rem">
            <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
                <ul
                    class="flex flex-col font-medium md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white">
                    <li>
                        <img
                            src="@/assets/si-obe.svg"
                            class="h-8 mr-3 flex items-center"
                            alt="Logo" />
                        <button
                            data-collapse-toggle="navbar-dropdown"
                            type="button"
                            class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                            aria-controls="navbar-dropdown"
                            aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg
                                class="w-6 h-6"
                                aria-hidden="true"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    fill-rule="evenodd"
                                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </li>
                    <li>
                        <RouterLink to="/users">
                            <a
                                href="#"
                                class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0"
                                >Users</a
                            >
                        </RouterLink>
                    </li>
                    <li>
                        <RouterLink to="/courses">
                            <a
                                href="#"
                                class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0"
                                >Courses</a
                            >
                        </RouterLink>
                    </li>
                    <li>
                        <RouterLink to="/syllabi">
                            <a
                                href="#"
                                class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0"
                                >Syllabi</a
                            >
                        </RouterLink>
                    </li>
                    <li>
                        <RouterLink to="/classes">
                            <a
                                href="#"
                                class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0"
                                >Classes</a
                            >
                        </RouterLink>
                    </li>
                </ul>
            </div>
            <div class="flex justify-end">
                <button
                    id="dropdownNavbarLink"
                    data-dropdown-toggle="dropdownNavbar"
                    class="flex w-full py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto">
                    Admin
                    <svg
                        class="w-5 h-5 ml-1"
                        aria-hidden="true"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <!-- Dropdown menu -->
                <div
                    id="dropdownNavbar"
                    class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                    <ul
                        class="py-2 text-sm text-gray-700"
                        aria-labelledby="dropdownLargeButton">
                        <li>
                            <a
                                href="#"
                                class="block px-4 py-2 hover:bg-gray-100"
                                >Dropdown 1</a
                            >
                        </li>
                        <li>
                            <a
                                href="#"
                                class="block px-4 py-2 hover:bg-gray-100"
                                >Dropdown 2</a
                            >
                        </li>
                        <li>
                            <a
                                href="#"
                                class="block px-4 py-2 hover:bg-gray-100"
                                >Dropdown 3</a
                            >
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="h-px my-8 bg-gray-200 border-0" />
    </nav>
</template>
<script>
export default {}
</script>

<style></style>
