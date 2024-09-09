@extends('admin/index')


@section('dashboardcontaint')
<!-- Main Content -->
<div class="flex-1 p-0 overflow-y-auto pt-0">
    <div id="content" class="bg-white rounded-lg  p-0">
        <!-- Default Content (Dashboard) -->
        <div id="dashboard" class="block">
            <h2 class="text-[35px] font-bold mb-4">Dashboard</h2>

            <!-- Dashboard content goes here -->

            <div class="text-start mb-6 !block">
                <h1 class="text-xl font-bold text-gray-800">
                    <span class="bg-yellow-200 px-2 py-1 rounded">Hayy!</span> Welcome to the dashboard
                </h1>
                <p class="text-sm text-gray-600 mt-2">Here’s a quick overview of your data.</p>
            </div>


            <div class="!flex space-x-4">
                <!-- Box 1: Total Categories -->
                <div
                    class="flex flex-col items-center justify-center w-5/12 h-24 bg-blue-500 text-white font-semibold  shadow-md">
                    <span>Total Categories</span>
                    <span class="text-xl mt-1">120</span>
                </div>

                <!-- Box 2: Total Posts -->
                <div
                    class="flex flex-col items-center justify-center w-5/12 h-24 bg-green-500 text-white font-semibold  shadow-md">
                    <span>Total Posts</span>
                    <span class="text-xl mt-1">350</span>
                </div>

                <!-- Box 3: Total Users -->
                <div
                    class="flex flex-col items-center justify-center w-5/12 h-24 bg-yellow-500 text-white font-semibold  shadow-md">
                    <span>Total Users</span>
                    <span class="text-xl mt-1">480</span>
                </div>

                <!-- Box 4: Total Blocked Users -->
                <div
                    class="flex flex-col items-center justify-center w-5/12 h-24 bg-red-500 text-white font-semibold  shadow-md">
                    <span>Total Blocked Users</span>
                    <span class="text-xl mt-1">15</span>
                </div>
            </div>



        </div>



@endsection