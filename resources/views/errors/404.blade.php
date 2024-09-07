

@extends('layouts.master')

    <div class="text-center p-6 max-w-lg">
        <h1 class="text-[50px] font-bold text-blue-600">404</h1>
        <p class="text-2xl md:text-3xl font-medium py-4 text-gray-700">It seems you're lost.</p>
        <p class="text-gray-500 mb-8">The page you’re looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
        
        <a href="{{ url('/home') }}" class="px-6 py-2 text-white bg-blue-600 rounded-lg hover:bg-blue-700 transition-all">
            Take Me Home
        </a>
        
        <div class="mt-6">
            <p class="text-gray-500">If you think this is a mistake, feel free to <a href="/contact" class="text-blue-600 hover:underline">contact us</a> or use the search bar below to find what you're looking for.</p>
           
        </div>
    </div>


