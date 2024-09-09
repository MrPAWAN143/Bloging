@extends('admin/index')

@section('registeruser')

 <!-- Register Users -->
 <div id="" class="m-auto mt-2">
    <h2 class="text-2xl font-semibold mb-4">Register Users</h2>
    <!-- Register users content goes here -->

    <div class="table-container mx-auto max-w-6xl !block">
        <table class="min-w-full divide-y divide-gray-300 border border-gray-300 bg-white ">
            <thead class="bg-gray-100">
                <tr>
                    <th
                        class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        ID</th>
                    <th
                        class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        First Name</th>
                    <th
                        class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Last Name</th>
                    <th
                        class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Email</th>
                    <th
                        class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Username</th>
                    <th
                        class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Created At</th>
                    <th
                        class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Edit</th>
                    <th
                        class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Delete</th>
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
                        <button
                            class="px-3 py-1 bg-blue-500 text-white rounded-md hover:bg-blue-600 text-xs">Edit</button>
                    </td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm font-medium">
                        <button
                            class="px-3 py-1 bg-red-500 text-white rounded-md hover:bg-red-600 text-xs">Delete</button>
                    </td>
                </tr>
                <!-- Row 2 -->
                <tr>
                    <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">2</td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Jane</td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Smith</td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">jane.smith@example.com
                    </td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">janesmith</td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">2024-09-02</td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm font-medium">
                        <button
                            class="px-3 py-1 bg-blue-500 text-white rounded-md hover:bg-blue-600 text-xs">Edit</button>
                    </td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm font-medium">
                        <button
                            class="px-3 py-1 bg-red-500 text-white rounded-md hover:bg-red-600 text-xs">Delete</button>
                    </td>
                </tr>
                <!-- Row 3 -->
                <tr>
                    <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">3</td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Michael</td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Johnson</td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">
                        michael.johnson@example.com</td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">mjohnson</td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">2024-09-03</td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm font-medium">
                        <button
                            class="px-3 py-1 bg-blue-500 text-white rounded-md hover:bg-blue-600 text-xs">Edit</button>
                    </td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm font-medium">
                        <button
                            class="px-3 py-1 bg-red-500 text-white rounded-md hover:bg-red-600 text-xs">Delete</button>
                    </td>
                </tr>
                <!-- Row 4 -->
                <tr>
                    <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">4</td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Emily</td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Davis</td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">emily.davis@example.com
                    </td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">edavis</td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">2024-09-04</td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm font-medium">
                        <button
                            class="px-3 py-1 bg-blue-500 text-white rounded-md hover:bg-blue-600 text-xs">Edit</button>
                    </td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm font-medium">
                        <button
                            class="px-3 py-1 bg-red-500 text-white rounded-md hover:bg-red-600 text-xs">Delete</button>
                    </td>
                </tr>
                <!-- Row 5 -->
                <tr>
                    <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">5</td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Daniel</td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Wilson</td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">daniel.wilson@example.com
                    </td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">dwilson</td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">2024-09-05</td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm font-medium">
                        <button
                            class="px-3 py-1 bg-blue-500 text-white rounded-md hover:bg-blue-600 text-xs">Edit</button>
                    </td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm font-medium">
                        <button
                            class="px-3 py-1 bg-red-500 text-white rounded-md hover:bg-red-600 text-xs">Delete</button>
                    </td>
                </tr>
                <!-- Row 6 -->
                <tr>
                    <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">6</td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Sophia</td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Brown</td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">sophia.brown@example.com
                    </td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">sbrown</td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">2024-09-06</td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm font-medium">
                        <button
                            class="px-3 py-1 bg-blue-500 text-white rounded-md hover:bg-blue-600 text-xs">Edit</button>
                    </td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm font-medium">
                        <button
                            class="px-3 py-1 bg-red-500 text-white rounded-md hover:bg-red-600 text-xs">Delete</button>
                    </td>
                </tr>
                <!-- Row 7 -->
                <tr>
                    <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">7</td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Olivia</td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Martinez</td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">
                        olivia.martinez@example.com</td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">omartinez</td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">2024-09-07</td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm font-medium">
                        <button
                            class="px-3 py-1 bg-blue-500 text-white rounded-md hover:bg-blue-600 text-xs">Edit</button>
                    </td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm font-medium">
                        <button
                            class="px-3 py-1 bg-red-500 text-white rounded-md hover:bg-red-600 text-xs">Delete</button>
                    </td>
                </tr>
                <!-- Row 8 -->
                <tr>
                    <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">8</td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Ethan</td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Taylor</td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">ethan.taylor@example.com
                    </td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">etaylor</td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">2024-09-08</td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm font-medium">
                        <button
                            class="px-3 py-1 bg-blue-500 text-white rounded-md hover:bg-blue-600 text-xs">Edit</button>
                    </td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm font-medium">
                        <button
                            class="px-3 py-1 bg-red-500 text-white rounded-md hover:bg-red-600 text-xs">Delete</button>
                    </td>
                </tr>
                <!-- Row 9 -->
                <tr>
                    <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">9</td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Ava</td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Anderson</td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">ava.anderson@example.com
                    </td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">aanderson</td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">2024-09-09</td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm font-medium">
                        <button
                            class="px-3 py-1 bg-blue-500 text-white rounded-md hover:bg-blue-600 text-xs">Edit</button>
                    </td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm font-medium">
                        <button
                            class="px-3 py-1 bg-red-500 text-white rounded-md hover:bg-red-600 text-xs">Delete</button>
                    </td>
                </tr>
                <!-- Row 10 -->
                <tr>
                    <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">10</td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">James</td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">Wilson</td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">james.wilson@example.com
                    </td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">jwilson</td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">2024-09-10</td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm font-medium">
                        <button
                            class="px-3 py-1 bg-blue-500 text-white rounded-md hover:bg-blue-600 text-xs">Edit</button>
                    </td>
                    <td class="px-4 py-2 whitespace-nowrap text-sm font-medium">
                        <button
                            class="px-3 py-1 bg-red-500 text-white rounded-md hover:bg-red-600 text-xs">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</div>

@endsection