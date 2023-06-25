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
						<tr class="bg-white border-b hover:bg-gray-50">
							<th scope="row" class="px-6 py-4 font-medium text-gray-900">
								1
							</th>
							<td class="px-6 py-4">
                XHW966
              </td>
							<td class="px-6 py-4">
                HOOH TENAN
							</td>
              <td class="px-6 py-4">
                <button class="text-red-500 pr-5">edit</button>
                <button class="text-red-500 pr-5">delete</button>
							</td>
						</tr>
						<tr class="bg-white border-b hover:bg-gray-50">
							<th scope="row" class="px-6 py-4 font-medium text-gray-900">
								2
							</th>
							<td class="px-6 py-4">
								DFJKS9673
							</td>
							<td class="px-6 py-4">
                MANG EA
							</td>
              <td class="px-6 py-4">
                <button class="text-red-500 pr-5">edit</button>
                <button class="text-red-500 pr-5">delete</button>
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