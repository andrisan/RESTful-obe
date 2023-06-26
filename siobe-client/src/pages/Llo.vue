<template>
	<div class="h-screen w-screen bg-gray-50">
		<div class="w-screen bg-white drop-shadow h-16 mb-10 flex align-center items-center">
			<h1 class="text-gray-500 font-bold text-xl ml-48">Lesson Learning Outcome</h1>
		</div>
		<div class="ml-48 mb-10">
			<h1 class="text-gray-500 font-bold text-m">Home > Syllabi > Losson Learning Outcomes </h1>
		</div>

		<div class="">
			<div class="flex justify-between ml-48 mb-10">
				<div class="col-start-1 col-end-3">
					<h1 class="text-gray-500 font-bold text-m ">Losson Learning Outcomes (LLO)</h1>
				</div>
				<div class="col-end-7 col-span-2">
					<a href="/create-llo" class="bg-white drop-shadow px-3 py-3 rounded-lg mr-48">Create New LLO</a>
				</div>
			</div>
			<div class="flex justify-center items-center">
				<table class="table-auto text-sm text-gray-500 shadow-md text-left sm:rounded-lg w-9/12">
					<thead class="text-m text-gray-500 font-bold uppercase bg-gray-100">
						<tr>
							<th scope="col" class="px-6 py-3">
								No
							</th>
							<th scope="col" class="px-6 py-3">
								Code
							</th>
							<th scope="col" class="px-6 py-3">
								Description
							</th>
							<th scope="col" class="px-6 py-3">
								Action
							</th>
						</tr>
					</thead>
					<tbody>
						<tr v-for="(llo, index) in store.getAllLlo" :key="index">
							<td scope="row" class="px-6 py-4 font-medium text-gray-900">
								{{index + 1}}
							</td>
							<td class="px-6 py-4">
								{{ llo.code }}
							</td>
							<td class="px-6 py-4">
								{{ llo.description }}
							</td>
							<td class="text-gray-600 px-6 py-4 border-t border-gray-100">
								<div class="flex flex-wrap space-x-4">
								  <a href="#" class="text-blue-500 pr-5 hover:text-blue-800">
									<router-link v-slot="{ href, isActive, navigate }" :to="'/update-llo/' + llo.id" custom>
									  <ResponsiveNavLink :href="href" :active="isActive" @click="navigate">
										Edit
									  </ResponsiveNavLink>
									</router-link>
								  </a>
								  <a href="#" class="text-blue-500 pr-5 hover:text-blue-800"
									@click="store.destroyLlo(llo.id)">
                                        Delete
								  </a>
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
import { useLlo } from '@/stores/llo'

const store = useLlo()
store.fetchAllLlo()
</script>