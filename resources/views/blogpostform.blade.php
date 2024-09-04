
@extends('layouts.master')
@section('title',"Home")

@section('navbar')
<nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="flex flex-wrap items-center justify-between max-w-screen-xl mx-auto p-4">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="assest/images/logo.webp" class="h-8" alt="Flowbite Logo" />
        </a>
        <div class="flex items-center md:order-2 space-x-1 md:space-x-2 rtl:space-x-reverse">
            
            <button data-collapse-toggle="mega-menu" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mega-menu" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
        </div>
        <div id="mega-menu" class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1">
            <ul class="flex flex-col mt-4  md:items-center font-medium md:flex-row md:mt-0 md:space-x-8 rtl:space-x-reverse">
                <li>
                    <a href="#" class="block py-2 px-2 text-blue-600 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-02 dark:text-blue-500 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700" aria-current="page">Home</a>
                </li>
                <li>
                  
                    <a href="#" class="block py-2 px-2  border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0  dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700" aria-current="page">House Removals</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-2 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">Office Removals</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-2 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">Furniture Removals</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-2 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">Commercial Removals</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-2 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">Packing Service</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
@endsection



@section('dashboardPage')

  <!-- Sidebar -->
  <aside class="w-64 bg-gray-800 text-white flex flex-col">
    <div class="p-4 text-2xl font-bold bg-gray-900">
      Admin Panel
    </div>
    <nav class="flex-1 p-4 overflow-y-auto">
      <ul class="space-y-2">
        <li>
          <a href="#" data-target="dashboard" class=" p-2 rounded hover:bg-gray-700 flex items-center">
            <i class="fas fa-tachometer-alt mr-2"></i> Dashboard
          </a>
        </li>
        <li>
          <button class="w-full flex justify-between items-center p-2 rounded hover:bg-gray-700 focus:outline-none" onclick="toggleSubmenu('posts-submenu')">
            <span class="flex items-center">
              <i class="fas fa-edit mr-2"></i> Posts
            </span>
            <i class="fas fa-chevron-down"></i>
          </button>
          <ul id="posts-submenu" class="ml-4 mt-2 space-y-1 hidden">
            <li>
              <a href="#" data-target="create-post" class="block p-2 rounded hover:bg-gray-600">Create Post</a>
            </li>
            <li>
              <a href="#" data-target="edit-post" class="block p-2 rounded hover:bg-gray-600">Edit Post</a>
            </li>
            <li>
              <a href="#" data-target="delete-post" class="block p-2 rounded hover:bg-gray-600">Delete Post</a>
            </li>
          </ul>
        </li>
        <li>
          <button class="w-full flex justify-between items-center p-2 rounded hover:bg-gray-700 focus:outline-none" onclick="toggleSubmenu('categories-submenu')">
            <span class="flex items-center">
              <i class="fas fa-list mr-2"></i> Categories
            </span>
            <i class="fas fa-chevron-down"></i>
          </button>
          <ul id="categories-submenu" class="ml-4 mt-2 space-y-1 hidden">
            <li>
              <a href="#" data-target="create-category" class="block p-2 rounded hover:bg-gray-600">Create Category</a>
            </li>
            <li>
              <a href="#" data-target="edit-category" class="block p-2 rounded hover:bg-gray-600">Edit Category</a>
            </li>
            <li>
              <a href="#" data-target="delete-category" class="block p-2 rounded hover:bg-gray-600">Delete Category</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#" data-target="settings" class="block p-2 rounded hover:bg-gray-700 flex items-center">
            <i class="fas fa-cogs mr-2"></i> Settings
          </a>
        </li>
        <li>
          <a href="#" data-target="profile" class="block p-2 rounded hover:bg-gray-700 flex items-center">
            <i class="fas fa-user mr-2"></i> Profile
          </a>
        </li>
        <li>
          <a href="#" data-target="logout" class="block p-2 rounded hover:bg-gray-700 flex items-center">
            <i class="fas fa-sign-out-alt mr-2"></i> Logout
          </a>
        </li>
      </ul>
    </nav>
  </aside>

  <!-- Content Area -->
  <main class="flex-1 p-8 overflow-y-auto">
    <!-- Dashboard Section -->
    <section id="dashboard" class="content-section">
      <h1 class="text-3xl font-bold mb-4">Dashboard</h1>
      <p>Welcome to the admin dashboard. Here you can view statistics and manage your blog.</p>
    </section>

    <!-- Create Post Section -->
    <section id="create-post" class="content-section hidden">
      <h1 class="text-3xl font-bold mb-4">Create Post</h1>
      <form class="space-y-4">
        <div>
          <label class="block text-gray-700">Title</label>
          <input type="text" class="w-full p-2 border rounded" placeholder="Post Title">
        </div>
        <div>
          <label class="block text-gray-700">Content</label>
          <textarea class="w-full p-2 border rounded" rows="5" placeholder="Post Content"></textarea>
        </div>
        <div>
          <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Publish</button>
        </div>
      </form>
    </section>

    <!-- Edit Post Section -->
    <section id="edit-post" class="content-section hidden">
      <h1 class="text-3xl font-bold mb-4">Edit Post</h1>
      <!-- Edit Post Content Here -->
      <p>List of posts with options to edit.</p>
    </section>

    <!-- Delete Post Section -->
    <section id="delete-post" class="content-section hidden">
      <h1 class="text-3xl font-bold mb-4">Delete Post</h1>
      <!-- Delete Post Content Here -->
      <p>List of posts with options to delete.</p>
    </section>

    <!-- Create Category Section -->
    <section id="create-category" class="content-section hidden">
      <h1 class="text-3xl font-bold mb-4">Create Category</h1>
      <form class="space-y-4">
        <div>
          <label class="block text-gray-700">Category Name</label>
          <input type="text" class="w-full p-2 border rounded" placeholder="Category Name">
        </div>
        <div>
          <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">Add Category</button>
        </div>
      </form>
    </section>

    <!-- Edit Category Section -->
    <section id="edit-category" class="content-section hidden">
      <h1 class="text-3xl font-bold mb-4">Edit Category</h1>
      <!-- Edit Category Content Here -->
      <p>List of categories with options to edit.</p>
    </section>

    <!-- Delete Category Section -->
    <section id="delete-category" class="content-section hidden">
      <h1 class="text-3xl font-bold mb-4">Delete Category</h1>
      <!-- Delete Category Content Here -->
      <p>List of categories with options to delete.</p>
    </section>

    <!-- Settings Section -->
    <section id="settings" class="content-section hidden">
      <h1 class="text-3xl font-bold mb-4">Settings</h1>
      <!-- Settings Content Here -->
      <p>Configure your blog settings here.</p>
    </section>

    <!-- Profile Section -->
    <section id="profile" class="content-section hidden">
      <h1 class="text-3xl font-bold mb-4">Profile</h1>
      <!-- Profile Content Here -->
      <p>Update your profile information.</p>
    </section>

    <!-- Logout Section -->
    <section id="logout" class="content-section hidden">
      <h1 class="text-3xl font-bold mb-4">Logout</h1>
      <p>You have been logged out.</p>
    </section>
  </main>

  <!-- JavaScript -->
  <script>
    // Function to toggle submenus
    function toggleSubmenu(id) {
      const submenu = document.getElementById(id);
      submenu.classList.toggle('hidden');
    }

    // Function to switch content sections
    function showSection(targetId) {
      // Hide all sections
      document.querySelectorAll('.content-section').forEach(section => {
        section.classList.add('hidden');
      });

      // Show the target section
      const targetSection = document.getElementById(targetId);
      if (targetSection) {
        targetSection.classList.remove('hidden');
      }
    }

    // Add event listeners to menu links
    document.querySelectorAll('a[data-target]').forEach(link => {
      link.addEventListener('click', (e) => {
        e.preventDefault();
        const target = link.getAttribute('data-target');
        showSection(target);
      });
    });

    // Optional: Show dashboard by default on page load
    document.addEventListener('DOMContentLoaded', () => {
      showSection('dashboard');
    });
  </script>

@endsection






@section('dashbordcontant')
<section>
  <div class="max-w-[60%] mx-auto p-4 bg-gradient-to-r from-blue-100 to-blue-200 shadow-lg">
    <!-- Form Heading -->
    <h2 class="text-[32px] uppercase font-extrabold mb-4 text-center text-blue-900">Create New Blog Post</h2>
  
    <form action="{{ route('blog-posts.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
  
      <!-- Horizontal Layout for Inputs -->
      <div class="flex flex-col md:flex-row space-y-3 md:space-y-0 md:space-x-4">
        <!-- Heading -->
        <div class="flex-1">
          <label for="heading" class="block text-blue-800 font-semibold mb-1 text-[20px]">Heading</label>
          <input type="text" id="heading" name="heading" class="w-full p-3 border border-blue-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter the heading" required>
        </div>
  
        <!-- Subheading -->
        <div class="flex-1">
          <label for="subheading" class="block text-blue-800 font-semibold mb-1 text-[20px]">Subheading</label>
          <input type="text" id="subheading" name="subheading" class="w-full p-3 border border-blue-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter the subheading">
        </div>
      </div>
  
      <div class="flex flex-col md:flex-row space-y-3 md:space-y-0 md:space-x-4">
        <!-- Images -->
        <div class="flex-1">
          <label for="images" class="block text-blue-800 font-semibold mb-1 text-[20px]">Images</label>
          <input type="file" id="images" name="images[]" class="w-full p-3 border border-blue-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" multiple>
        </div>
  
        <!-- Select Category -->
        <div class="flex-1">
            <label for="category" class="block text-blue-800 font-semibold mb-1 text-[20px]">Select Category</label>
            <select id="category" name="category" class="w-full p-3 border border-blue-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                <option value="" disabled selected>Select a category</option>
                <!-- Category options go here -->
            </select>
        </div>
      </div>
  
      <!-- Description with CKEditor -->
      <div class="w-full">
        <label for="description" class="block text-blue-800 font-semibold mb-1 text-[20px]">Description</label>
        <textarea id="description" name="description" rows="6" class="w-full p-3 border border-blue-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter the description" required></textarea>
      </div>
  
      <!-- Submit Button -->
      <div class="mt-6 text-center">
        <button type="submit" class="w-full md:w-1/3 bg-blue-700 text-white py-3 rounded-xl font-bold hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2">Submit</button>
      </div>
    </form>
  </div>
</section>

 
@endsection








