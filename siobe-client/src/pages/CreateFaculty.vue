<template>
	<div class="h-screen w-screen bg-gray-50">
		<div class="w-screen bg-white drop-shadow h-16 mb-10 flex align-center items-center">
			<h1 class="text-gray-500 font-bold text-xl ml-48">Create Faculty</h1>
		</div>
		<div class="ml-48 mb-10">
			<h1 class="text-gray-500 font-bold text-m">Home > Faculties > Create</h1>
		</div>
		<div class="flex justify-center">
			<div class="bg-white shadow-md sm:rounded-lg w-9/12 h-auto py-12 px-10">
				<div class="mb-10">
					<label for="Faculty Name" class="text-sm font-medium text-gray-500">Faculty Name</label>
					<input type="text" id="default-input"
						class="bg-gray-50 border border-gray-500 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/4 p-2.5 mt-3">
				</div>
				<div class="flex">
					<button class="text-white bg-gray-700 py-2 px-4 rounded-lg text-md mr-4 hover:bg-gray-900">
						SAVE
					</button>
					<button class="text-gray-600 hover:bg-gray-100 py-2 px-4 rounded-lg">
						Cancel
					</button>
				</div>
			</div>

		</div>

	</div>
</template>
