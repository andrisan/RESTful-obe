<template>
    <div class="nav-assignment">
        <nav class="bg-white border-gray-200">
            <div class="flex flex-wrap items-center justify-between mx-auto p-4">
                <h1 class="text-4xl font-bold font-sans">Assignment Detail</h1>
            </div>
        </nav>
    </div>
    <div class="section-halaman">
        <a href="#">Home</a><span> > </span>
        <a href="#">MATKUL A</a><span> > </span>
        <span>Tugas 1</span>
    </div>
    <div class="card-assignment flex justify-center">
        <div class="block max-w-none p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100">
            <div class="header-title grid md:grid-cols-2 gap-4">
                <div class="img-icon flex rounded-full w-24 h-24">
                    <img src="https://cdn-icons-png.flaticon.com/512/207/207470.png?w=740&t=st=1669015753~exp=1669016353~hmac=2991b15d942ead62d75ed6ccc0e0eb7836618254cd37e0112ac7b3e943abed75">
                </div>
                <div class="title font-sans flex">
                    <h1>Tugas 1</h1>
                    <p>Due Date: Jun 09, 2023</p>
                </div>
                <hr class="h-px my-8 bg-gray-200 border-0" />
            </div>
            <div class="bottom-desc font-sans">
                <p class="font-normal text-gray-700">Tugas</p>
                <h3 class="font-normal text-gray-700">Submission instruction</h3>
                    <p>Eling</p>
                <h3 class="font-normal text-gray-700">Note</h3>
                    <p>Ini catatan</p>
                <hr class="h-px my-8 bg-gray-200 border-0" />
            </div>
            <div class="bottom-btn">
                <div class="btn-student">
                    <button type="button" class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200">Student Grades</button>
                </div>
                <div class="btn-edit">
                    <a href="#" class="text-blue-600">Edit</a>
                </div>
                <div class="btn-delete">
                    <a href="#" class="text-red-500">Delete</a>
                </div>
            </div>
        </div>
    </div>
</template>
