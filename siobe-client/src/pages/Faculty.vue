<!-- <script setup>
import { getFaculties } from '../stores/faculty'
import { ref } from 'vue'

const { fetchFaculties, destroyFaculty } = useFaculties()

// Menggunakan ref untuk mengubah properti reactive menjadi ref
const faculties = ref([])

// Fetch daftar fakultas saat komponen dipasang
fetchFaculties()
    .then(data => {
        faculties.value = data
    })
    .catch(error => {
        console.error(error)
    })
</script> -->

<template>
  <div class="h-screen w-screen bg-gray-50">
    <!-- Bagian template lainnya -->
    <div class="">
      <div class="flex justify-end mb-6">
        <router-link to="/create-faculty" class="bg-white drop-shadow px-3 py-3 rounded-lg mr-48">
          Create New Faculty
        </router-link>
      </div>
      <div class="flex justify-center items-center">
        <table class="table-auto text-sm text-left text-gray-500 shadow-md rounded-lg w-9/12">
          <thead class="text-m text-gray-500 font-bold uppercase bg-gray-100">
            <tr>
              <th scope="col" class="px-6 py-3">
                No
              </th>
              <th scope="col" class="px-6 py-3 w-">
                Faculty Name
              </th>
              <th scope="col" class="px-6 py-3">
                Action
              </th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="(faculty, index) in store.getAllFaculty" :key="index">
              <td scope="row" class="px-6 py-4 font-medium text-gray-900">
                {{ index + 1 }}
              </td>
              <td class="px-6 py-4">
                {{ faculty.name }}
              </td>
              <td class="text-gray-600 px-6 py-4 border-t border-gray-100">
                <div class="flex flex-wrap space-x-4">
                  <a href="#" class="text-orange-500 pr-5 hover:text-orange-800">
                    Manage Department
                  </a>
                  <a href="#" class="text-blue-500 pr-5 hover:text-blue-800">
                    <router-link v-slot="{ href, isActive, navigate }" :to="'/update-faculty/' + faculty.id" custom>
                      <ResponsiveNavLink :href="href" :active="isActive" @click="navigate">
                        Edit
                      </ResponsiveNavLink>
                    </router-link>
                  </a>
                  <!-- <form method="POST"
										action="{{ route('rubrics.criterias.criteria-levels.destroy', [$rubric, $criteria, $criteriaLevel]) }}">
										<button class="text-red-500 pr-5 hover:text-red-800" style="text-decoration: none"
											onclick="event.preventDefault(); confirm('Are you sure?') && this.closest('form').submit();">
											Delete
										</button>
									</form> -->
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</template>


<script setup>
import { useFaculties } from '@/stores/faculty'

const store = useFaculties()
store.fetchAllFaculty()
</script>
