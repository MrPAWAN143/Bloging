

@extends('layouts.master')
@section('title',"Index")
{{--  --}}

@section('IndexPage')
 
    <!-- Main Container -->
    <div class="flex h-screen">

        <!-- Sidebar -->
        <div class="w-64 bg-gray-800 text-white flex flex-col">
            <div class="flex items-center justify-between p-4 border-b border-gray-700">
                <h1 class="text-lg font-semibold">PHP Blog</h1>
                <div class="relative">
                    <button id="user-menu" class="flex items-center space-x-2 text-gray-300 hover:text-white focus:outline-none">
                        <span id="username">Username</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div id="dropdown-menu" class="absolute right-0 mt-2 w-48 bg-white text-gray-800 rounded shadow-lg dropdown-menu">
                        <a href="#" class="block px-4 py-2 hover:bg-gray-200">Profile</a>
                        <a href="{{url('/logout')}}" class="block px-4 py-2 hover:bg-gray-200">Logout</a>
                    </div>
                </div>
            </div>
            <nav class="flex-1">
                <ul class="mt-4">
                    <li>
                        <a href="#" class="block px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white" data-target="dashboard">Dashboard</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white" data-target="register-users">Register Users</a>
                    </li>
                    <li>
                        <button class="w-full text-left px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white focus:outline-none" data-toggle="category-menu">
                            Category
                        </button>
                        <ul id="category-menu" class="dropdown-menu pl-4 mt-2">
                            <li><a href="#" class="block px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white" data-target="add-category">Add Category</a></li>
                            <li><a href="#" class="block px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white" data-target="edit-category">Edit Category</a></li>
                            <li><a href="#" class="block px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white" data-target="show-category">Show Category</a></li>
                        </ul>
                    </li>
                    <li>
                        <button class="w-full text-left px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white focus:outline-none" data-toggle="posts-menu">
                            Posts
                        </button>
                        <ul id="posts-menu" class="dropdown-menu pl-4 mt-2">
                            <li><a href="#" class="block px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white" data-target="add-post">Add Post</a></li>
                            <li><a href="#" class="block px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white" data-target="edit-post">Edit Post</a></li>
                            <li><a href="#" class="block px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white" data-target="show-posts">Show Posts</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <div class="border-t border-gray-700 p-4">
                <a href="#" class="block text-gray-300 hover:text-white">Settings</a>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-6 overflow-y-auto pt-0">
            <div id="content" class="bg-white rounded-lg  p-6">
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
                        <div class="flex flex-col items-center justify-center w-5/12 h-24 bg-blue-500 text-white font-semibold  shadow-md">
                            <span>Total Categories</span>
                            <span class="text-xl mt-1">120</span>
                        </div>
                    
                        <!-- Box 2: Total Posts -->
                        <div class="flex flex-col items-center justify-center w-5/12 h-24 bg-green-500 text-white font-semibold  shadow-md">
                            <span>Total Posts</span>
                            <span class="text-xl mt-1">350</span>
                        </div>
                    
                        <!-- Box 3: Total Users -->
                        <div class="flex flex-col items-center justify-center w-5/12 h-24 bg-yellow-500 text-white font-semibold  shadow-md">
                            <span>Total Users</span>
                            <span class="text-xl mt-1">480</span>
                        </div>
                    
                        <!-- Box 4: Total Blocked Users -->
                        <div class="flex flex-col items-center justify-center w-5/12 h-24 bg-red-500 text-white font-semibold  shadow-md">
                            <span>Total Blocked Users</span>
                            <span class="text-xl mt-1">15</span>
                        </div>
                    </div>
                    
                    
                    
                </div>

                

                <!-- Register Users -->
                <div id="register-users" class="hidden">
                    <h2 class="text-2xl font-semibold mb-4">Register Users</h2>
                    <!-- Register users content goes here -->

                    <div class="table-container mx-auto max-w-6xl !block">
                        <table class="min-w-full divide-y divide-gray-300 border border-gray-300 bg-white ">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">First Name</th>
                                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Last Name</th>
                                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Username</th>
                                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Created At</th>
                                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Edit</th>
                                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Delete</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <!-- Row 1 -->
                                <tr>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">John</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Doe</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">john.doe@example.com</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">johndoe</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">2024-09-01</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm font-medium">
                                        <button class="px-3 py-1 bg-blue-500 text-white rounded-md hover:bg-blue-600 text-xs">Edit</button>
                                    </td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm font-medium">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded-md hover:bg-red-600 text-xs">Delete</button>
                                    </td>
                                </tr>
                                <!-- Row 2 -->
                                <tr>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">2</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Jane</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Smith</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">jane.smith@example.com</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">janesmith</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">2024-09-02</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm font-medium">
                                        <button class="px-3 py-1 bg-blue-500 text-white rounded-md hover:bg-blue-600 text-xs">Edit</button>
                                    </td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm font-medium">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded-md hover:bg-red-600 text-xs">Delete</button>
                                    </td>
                                </tr>
                                <!-- Row 3 -->
                                <tr>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">3</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Michael</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Johnson</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">michael.johnson@example.com</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">mjohnson</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">2024-09-03</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm font-medium">
                                        <button class="px-3 py-1 bg-blue-500 text-white rounded-md hover:bg-blue-600 text-xs">Edit</button>
                                    </td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm font-medium">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded-md hover:bg-red-600 text-xs">Delete</button>
                                    </td>
                                </tr>
                                <!-- Row 4 -->
                                <tr>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">4</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Emily</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Davis</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">emily.davis@example.com</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">edavis</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">2024-09-04</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm font-medium">
                                        <button class="px-3 py-1 bg-blue-500 text-white rounded-md hover:bg-blue-600 text-xs">Edit</button>
                                    </td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm font-medium">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded-md hover:bg-red-600 text-xs">Delete</button>
                                    </td>
                                </tr>
                                <!-- Row 5 -->
                                <tr>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">5</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Daniel</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Wilson</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">daniel.wilson@example.com</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">dwilson</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">2024-09-05</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm font-medium">
                                        <button class="px-3 py-1 bg-blue-500 text-white rounded-md hover:bg-blue-600 text-xs">Edit</button>
                                    </td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm font-medium">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded-md hover:bg-red-600 text-xs">Delete</button>
                                    </td>
                                </tr>
                                <!-- Row 6 -->
                                <tr>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">6</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Sophia</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Brown</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">sophia.brown@example.com</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">sbrown</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">2024-09-06</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm font-medium">
                                        <button class="px-3 py-1 bg-blue-500 text-white rounded-md hover:bg-blue-600 text-xs">Edit</button>
                                    </td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm font-medium">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded-md hover:bg-red-600 text-xs">Delete</button>
                                    </td>
                                </tr>
                                <!-- Row 7 -->
                                <tr>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">7</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Olivia</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Martinez</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">olivia.martinez@example.com</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">omartinez</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">2024-09-07</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm font-medium">
                                        <button class="px-3 py-1 bg-blue-500 text-white rounded-md hover:bg-blue-600 text-xs">Edit</button>
                                    </td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm font-medium">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded-md hover:bg-red-600 text-xs">Delete</button>
                                    </td>
                                </tr>
                                <!-- Row 8 -->
                                <tr>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">8</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Ethan</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Taylor</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">ethan.taylor@example.com</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">etaylor</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">2024-09-08</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm font-medium">
                                        <button class="px-3 py-1 bg-blue-500 text-white rounded-md hover:bg-blue-600 text-xs">Edit</button>
                                    </td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm font-medium">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded-md hover:bg-red-600 text-xs">Delete</button>
                                    </td>
                                </tr>
                                <!-- Row 9 -->
                                <tr>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">9</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Ava</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Anderson</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">ava.anderson@example.com</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">aanderson</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">2024-09-09</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm font-medium">
                                        <button class="px-3 py-1 bg-blue-500 text-white rounded-md hover:bg-blue-600 text-xs">Edit</button>
                                    </td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm font-medium">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded-md hover:bg-red-600 text-xs">Delete</button>
                                    </td>
                                </tr>
                                <!-- Row 10 -->
                                <tr>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">10</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">James</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Wilson</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">james.wilson@example.com</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">jwilson</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">2024-09-10</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm font-medium">
                                        <button class="px-3 py-1 bg-blue-500 text-white rounded-md hover:bg-blue-600 text-xs">Edit</button>
                                    </td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm font-medium">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded-md hover:bg-red-600 text-xs">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                </div>

                <!-- Category Section -->
                <div id="category-section" class="hidden">
                   <!-- Add Category Form -->
<div id="add-category" class="hidden p-6 pt-0 bg-white shadow-md rounded-lg">
    <h3 class="text-3xl font-bold text-blue-800 mb-3 ">Add Category</h3>
    <form action="#" method="POST" class="space-y-3">
       <div class="relative flex gap-2">
        <div class="flex-1">
            <label for="name" class="block text-gray-600 font-medium mb-1">Heading</label>
            <input type="text" id="name" name="name" class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 py-2 px-4" required>
            <svg class="absolute top-2 right-3 h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
        </div>
        <div class="flex-1">
            <label for="slug" class="block text-gray-600 font-medium mb-1">Slug (URL)</label>
            <input type="text" id="slug" name="slug" class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 py-2 px-4">
        </div>
       </div>
       
        <div class="relative">
            <label for="meta-title" class="block text-gray-600 font-medium mb-1">Meta Title</label>
            <input type="text" id="meta-title" name="meta-title" class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 py-2 px-4">
        </div>
        <div class="relative">
            <label for="meta-description" class="block text-gray-600 font-medium mb-1">Meta Description</label>
            <input type="text" id="meta-description" name="meta-description" class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 py-2 px-4">
        </div>
        <div class="relative">
            <label for="keyword" class="block text-gray-600 font-medium mb-1">Keyword</label>
            <input type="text" id="keyword" name="keyword" class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 py-2 px-4">
        </div>
        <div class="relative">
            <label for="description" class="block text-gray-600 font-medium mb-1">Description</label>
            <textarea id="description" name="description" rows="4" class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 py-2 px-4"></textarea>
        </div>
        <button type="submit" class="w-full px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Submit</button>
    </form>
</div>

                    <!-- Edit Category Form -->
<div id="edit-category" class="hidden p-6 pt-0 bg-white shadow-md rounded-lg">
    <h3 class="text-3xl font-bold text-blue-800 mb-3 ">Edit Category</h3>
    <form action="#" method="POST" class="space-y-3">
       <div class="relative flex gap-2">
        <div class="flex-1">
            <label for="name" class="block text-gray-600 font-medium mb-1">Heading</label>
            <input type="text" id="name" name="name" class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 py-2 px-4" required>
            <svg class="absolute top-2 right-3 h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
        </div>
        <div class="flex-1">
            <label for="slug" class="block text-gray-600 font-medium mb-1">Slug (URL)</label>
            <input type="text" id="slug" name="slug" class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 py-2 px-4">
        </div>
       </div>
       
        <div class="relative">
            <label for="meta-title" class="block text-gray-600 font-medium mb-1">Meta Title</label>
            <input type="text" id="meta-title" name="meta-title" class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 py-2 px-4">
        </div>
        <div class="relative">
            <label for="meta-description" class="block text-gray-600 font-medium mb-1">Meta Description</label>
            <input type="text" id="meta-description" name="meta-description" class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 py-2 px-4">
        </div>
        <div class="relative">
            <label for="keyword" class="block text-gray-600 font-medium mb-1">Keyword</label>
            <input type="text" id="keyword" name="keyword" class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 py-2 px-4">
        </div>
        <div class="relative">
            <label for="description" class="block text-gray-600 font-medium mb-1">Description</label>
            <textarea id="description" name="description" rows="4" class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 py-2 px-4"></textarea>
        </div>
        <button type="submit" class="w-full px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Submit</button>
    </form>
</div>

                    <!-- Show Category Content -->
                    <div id="show-category" class="hidden">
                        <h3 class="text-xl font-semibold mb-4">Show Category</h3>
                        <!-- Category content goes here -->
                    </div>
                </div>

                <!-- Posts Section -->
                <div id="posts-section" class="hidden">
                    <!-- Add Post Form -->
<div id="add-post" class="hidden p-6 pt-0 bg-white shadow-md rounded-lg">
    <h3 class="text-3xl font-bold text-blue-800 mb-3 ">Add Posts</h3>
    <form action="#" method="POST" class="space-y-3">
        <div class="relative">
            <label for="meta-title" class="block text-gray-600 font-medium mb-1">Images</label>
            <input type="file" id="meta-title" name="meta-title" class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 py-2 px-4">
        </div>
       <div class="relative flex gap-2">
        <div class="flex-1">
            <label for="name" class="block text-gray-600 font-medium mb-1">Heading</label>
            <input type="text" id="name" name="name" class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 py-2 px-4" required>
            <svg class="absolute top-2 right-3 h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
        </div>
        <div class="flex-1">
            <label for="slug" class="block text-gray-600 font-medium mb-1">Slug (URL)</label>
            <input type="text" id="slug" name="slug" class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 py-2 px-4">
        </div>
       </div>
       
        <div class="relative">
            <label for="meta-title" class="block text-gray-600 font-medium mb-1">Meta Title</label>
            <input type="text" id="meta-title" name="meta-title" class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 py-2 px-4">
        </div>
      
        <div class="relative">
            <label for="meta-description" class="block text-gray-600 font-medium mb-1">Meta Description</label>
            <input type="text" id="meta-description" name="meta-description" class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 py-2 px-4">
        </div>
        <div class="relative">
            <label for="keyword" class="block text-gray-600 font-medium mb-1">Keyword</label>
            <input type="text" id="keyword" name="keyword" class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 py-2 px-4">
        </div>
        <div class="relative">
            <label for="description" class="block text-gray-600 font-medium mb-1">Description</label>
            <textarea id="description" name="description" rows="4" class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 py-2 px-4"></textarea>
        </div>
        <button type="submit" class="w-full px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Submit</button>
    </form>
</div>

                    <!-- Edit Post Form -->
<div id="edit-post" class="hidden p-6 pt-0 bg-white shadow-md rounded-lg">
    <h3 class="text-3xl font-bold text-blue-800 mb-3 ">Edit Posts</h3>
    <form action="#" method="POST" class="space-y-3">
        <div class="relative">
            <label for="meta-title" class="block text-gray-600 font-medium mb-1">Images</label>
            <input type="file" id="meta-title" name="meta-title" class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 py-2 px-4">
        </div>
       <div class="relative flex gap-2">
        <div class="flex-1">
            <label for="name" class="block text-gray-600 font-medium mb-1">Heading</label>
            <input type="text" id="name" name="name" class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 py-2 px-4" required>
            <svg class="absolute top-2 right-3 h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
        </div>
        <div class="flex-1">
            <label for="slug" class="block text-gray-600 font-medium mb-1">Slug (URL)</label>
            <input type="text" id="slug" name="slug" class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 py-2 px-4">
        </div>
       </div>
       
        <div class="relative">
            <label for="meta-title" class="block text-gray-600 font-medium mb-1">Meta Title</label>
            <input type="text" id="meta-title" name="meta-title" class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 py-2 px-4">
        </div>
      
        <div class="relative">
            <label for="meta-description" class="block text-gray-600 font-medium mb-1">Meta Description</label>
            <input type="text" id="meta-description" name="meta-description" class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 py-2 px-4">
        </div>
        <div class="relative">
            <label for="keyword" class="block text-gray-600 font-medium mb-1">Keyword</label>
            <input type="text" id="keyword" name="keyword" class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 py-2 px-4">
        </div>
        <div class="relative">
            <label for="description" class="block text-gray-600 font-medium mb-1">Description</label>
            <textarea id="description" name="description" rows="4" class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 py-2 px-4"></textarea>
        </div>
        <button type="submit" class="w-full px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Submit</button>
    </form>
</div>

                    <!-- Show Posts Content -->
                    <div id="show-posts" class="hidden">
                        <h3 class="text-xl font-semibold mb-4">Show Posts</h3>
                        <!-- Posts content goes here -->
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection




{{-- 
@section('footer')

  <!-- Footer Section -->
  <footer class="bg-gray-800 text-white py-12">
    <div class="container mx-auto px-4" style="max-width: 85%;">
        <div class="flex flex-wrap justify-between">
            <!-- Logo and Social Media -->
            <div class="w-full md:w-1/4 mb-8 md:mb-0">
                <img src="../assest/images/logo.webp" alt="Company Logo" class="mb-4">
                <div class="flex space-x-4">
                    <!-- Social Media Icons -->
                    <a href="#" class="text-white hover:text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049C16 3.604 12.418 0 8 0S0 3.604 0 8.049C0 12.02 2.93 15.234 6.75 15.984v-5.66H4.897V8.049H6.75V6.275c0-1.845 1.058-2.866 2.678-2.866.775 0 1.596.139 1.596.139v1.77H9.926c-.934 0-1.226.581-1.226 1.176v1.555h2.316l-.371 2.275H8.7v5.66C12.52 15.234 16 12.02 16 8.049z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-white hover:text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.008-.422A6.68 6.68 0 0 0 16 3.542a6.573 6.573 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.573 6.573 0 0 1-2.084.797A3.286 3.286 0 0 0 7.88 6.03a9.325 9.325 0 0 1-6.766-3.429 3.286 3.286 0 0 0 1.017 4.381A3.323 3.323 0 0 1 .64 6.575v.041a3.286 3.286 0 0 0 2.634 3.218 3.203 3.203 0 0 1-.864.114c-.21 0-.415-.02-.615-.058a3.286 3.286 0 0 0 3.067 2.282 6.587 6.587 0 0 1-4.862 1.356A9.286 9.286 0 0 0 5.026 15z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-white hover:text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.834 0 5.564.008 4.72.047c-.845.038-1.42.175-1.935.369A4.601 4.601 0 0 0 .47 1.486a4.6 4.6 0 0 0-1.07 2.315c-.194.514-.33 1.089-.369 1.934C-.008 5.564 0 5.834 0 8s.008 2.436.047 3.28c.038.845.175 1.42.369 1.935.247.733.576 1.36 1.07 2.315a4.6 4.6 0 0 0 2.315 1.07c.514.194 1.089.33 1.934.369C5.564 15.992 5.834 16 8 16s2.436-.008 3.28-.047c.845-.038 1.42-.175 1.935-.369a4.601 4.601 0 0 0 2.315-1.07 4.6 4.6 0 0 0 1.07-2.315c.194-.514.33-1.089.369-1.934C15.992 10.436 16 10.166 16 8s-.008-2.436-.047-3.28c-.038-.845-.175-1.42-.369-1.935a4.6 4.6 0 0 0-1.07-2.315 4.6 4.6 0 0 0-2.315-1.07C12.7.13 12.125-.006 11.28.047 10.436-.008 10.166 0 8 0zM4.95 1.72c.596-.023 1.24-.033 2.05-.033.81 0 1.454.01 2.05.033.597.023 1.008.105 1.344.205.44.13.774.297 1.155.68.383.383.55.717.68 1.155.1.336.182.747.205 1.344.023.596.033 1.24.033 2.05 0 .81-.01 1.454-.033 2.05-.023.597-.105 1.008-.205 1.344-.13.44-.297.774-.68 1.155-.383.383-.717.55-1.155.68-.336.1-.747.182-1.344.205-.596.023-1.24.033-2.05.033-.81 0-1.454-.01-2.05-.033-.597-.023-1.008-.105-1.344-.205a2.56 2.56 0 0 1-1.155-.68 2.56 2.56 0 0 1-.68-1.155c-.1-.336-.182-.747-.205-1.344C1.73 9.454 1.72 8.81 1.72 8c0-.81.01-1.454.033-2.05.023-.597.105-1.008.205-1.344.13-.44.297-.774.68-1.155.383-.383.717-.55 1.155-.68.336-.1.747-.182 1.344-.205zM8 4.254a3.746 3.746 0 1 0 0 7.492 3.746 3.746 0 0 0 0-7.492zm0 6.148a2.402 2.402 0 1 1 0-4.804 2.402 2.402 0 0 1 0 4.804zm4.411-6.148a.902.902 0 1 0 0 1.804.902.902 0 0 0 0-1.804z"/>
                        </svg>
                        
                        
                    </a>
                    <a href="#" class="text-white hover:text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.834 0 5.564.008 4.72.047c-.845.038-1.42.175-1.935.369A4.601 4.601 0 0 0 .47 1.486a4.6 4.6 0 0 0-1.07 2.315c-.194.514-.33 1.089-.369 1.934C-.008 5.564 0 5.834 0 8s.008 2.436.047 3.28c.038.845.175 1.42.369 1.935.247.733.576 1.36 1.07 2.315a4.6 4.6 0 0 0 2.315 1.07c.514.194 1.089.33 1.934.369C5.564 15.992 5.834 16 8 16s2.436-.008 3.28-.047c.845-.038 1.42-.175 1.935-.369a4.601 4.601 0 0 0 2.315-1.07 4.6 4.6 0 0 0 1.07-2.315c.194-.514.33-1.089.369-1.934C15.992 10.436 16 10.166 16 8s-.008-2.436-.047-3.28c-.038-.845-.175-1.42-.369-1.935a4.6 4.6 0 0 0-1.07-2.315 4.6 4.6 0 0 0-2.315-1.07C12.7.13 12.125-.006 11.28.047 10.436-.008 10.166 0 8 0zM4.95 1.72c.596-.023 1.24-.033 2.05-.033.81 0 1.454.01 2.05.033.597.023 1.008.105 1.344.205.44.13.774.297 1.155.68.383.383.55.717.68 1.155.1.336.182.747.205 1.344.023.596.033 1.24.033 2.05 0 .81-.01 1.454-.033 2.05-.023.597-.105 1.008-.205 1.344-.13.44-.297.774-.68 1.155-.383.383-.717.55-1.155.68-.336.1-.747.182-1.344.205-.596.023-1.24.033-2.05.033-.81 0-1.454-.01-2.05-.033-.597-.023-1.008-.105-1.344-.205-.44-.13-.774-.297-1.155-.68-.383-.383-.55-.717-.68-1.155-.1-.336-.182-.747-.205-1.344C1.73 9.454 1.72 8.81 1.72 8c0-.81.01-1.454.033-2.05.023-.597.105-1.008.205-1.344.13-.44.297-.774.68-1.155.383-.383.717-.55 1.155-.68.336-.1.747-.182 1.344-.205zM8 3.4a4.6 4.6 0 1 0 0 9.2 4.6 4.6 0 0 0 0-9.2zm0 1.2a3.4 3.4 0 1 1 0 6.8 3.4 3.4 0 0 1 0-6.8zm4.832-.1a1.2 1.2 0 1 1 0 2.4 1.2 1.2 0 0 1 0-2.4z"/>
                        </svg>
                    </a>
                </div>
            </div>

           
            <!-- Useful Services -->
            <div class="w-full md:w-1/4 mb-8 md:mb-0">
                <h4 class="text-[25px] font-semibold mb-4">Useful Services</h4>
                <ul>
                    <li class="py-2"><a href="#" class="hover:text-gray-400 px-4 py-2">House Removals</a></li>
                    <li class="py-2"><a href="#" class="hover:text-gray-400 px-4 py-2">Melbourne Removalists</a></li>
                    <li class="py-2"><a href="#" class="hover:text-gray-400 px-4 py-2">Office Removalists</a></li>
                    <li class="py-2"><a href="#" class="hover:text-gray-400 px-4 py-2">Man With Van</a></li>
                    <li class="py-2"><a href="#" class="hover:text-gray-400 px-4 py-2">Furniture Removals</a></li>
                    <li class="py-2"><a href="#" class="hover:text-gray-400 px-4 py-2">Packing Service</a></li>
                </ul>
            </div>

            <!-- Relocating Options -->
            <div class="w-full md:w-1/4">
                <h4 class="text-[25px] font-semibold mb-4">Relocating</h4>
                <ul>
                    <li class="py-2"><a href="#" class="hover:text-gray-400 py-2 px-4">Get-offer</a></li>
                    <li class="py-2"><a href="#" class="hover:text-gray-400 py-2 px-4">Get-a-quote</a></li>
                    <li class="py-2"><a href="#" class="hover:text-gray-400 py-2 px-4">Request-a-free-call</a></li>
                    <li class="py-2"><a href="#" class="hover:text-gray-400 py-2 px-4">Request-a-call-back</a></li>
                    <li class="py-2"><a href="#" class="hover:text-gray-400 py-2 px-4">Sitemap</a></li>
                </ul>
            </div>
        </div>

        <!-- Contact Information -->
        <div class="mt-8 text-center">
            <p class="text-gray-400">Email: info@company.com | Phone: (123) 456-7890</p>
        </div>
    </div>
</footer>

@endsection --}}

